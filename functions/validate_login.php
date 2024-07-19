<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Use http instead of https
    $api_url = 'http://127.0.0.1:8000/api/login';
    $data = array('email' => $email, 'password' => $password);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);

    if ($result === FALSE) {
        echo json_encode(array('success' => false));
        exit();
    }
    $response = json_decode($result, true);
    if (isset($response['success'])) {
        $_SESSION['user'] = $response['user'];
        echo json_encode(array('success' => true, 'return' => $response));
    } else {
        echo json_encode(array('success' => false, 'return' => $response ));
    }
}
