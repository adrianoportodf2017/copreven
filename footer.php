<!-- FOOTER -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</html>

<script>
    function status_atendimento(id, status, consultorio) {
        $(this).text('Atualizando...');

        var id = id; /** Identificaçao do Atendimento */
        var status = status;
        var consultorio = consultorio;
        var funcao = 'alterar_status_atendimento';

        // Realiza a requisição AJAX usando jQuery
        $.ajax({
            url: '<?= $base_url; ?>/functions/atendimento.php', // URL do arquivo PHP que receberá os dados
            type: 'POST', // Método HTTP usado para enviar os dados (pode ser POST ou GET)
            data: {
                id: id,
                status: status,
                consultorio: consultorio,
                funcao: funcao
            }, // Dados que serão enviados para o servidor
            success: function(response) { // Função a ser executada em caso de sucesso
                console.log(response); // Exibe a resposta do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com a resposta do servidor, se necessário
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Status do atendimento atualizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    location.reload();

                });

            },
            error: function(xhr, status, error) { // Função a ser executada em caso de erro
                console.error(xhr.responseText); // Exibe a resposta de erro do servidor no console do navegador

                // Verifica o código de erro retornado pela requisição
                if (xhr.status === 400) {
                    // Se o código de erro for 400, exibe a mensagem específica
                    // Converte a resposta JSON em um objeto JavaScript
                    var responseObj = JSON.parse(xhr.responseText);

                    // Acessa a propriedade "message" do objeto de resposta
                    var errorMessage = responseObj.message;

                    // Exibe a mensagem de erro usando o SweetAlert
                    Swal.fire({
                        title: 'Erro!',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                } else {
                    // Se for outro erro, exibe uma mensagem genérica de erro interno do sistema
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Erro interno do sistema. Tente novamente em alguns instantes.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }
        });
    }
</script>
<script>
    function confirmar_atendimento(id, consultorio) {
        // Armazena o elemento em uma variável
        var elemento = $(this);

        // Altera o texto do elemento para "Atualizando..."
        elemento.text('Atualizando...');
        var consultorio = consultorio;
        var id = id;
        var funcao = 'confirmar_atendimento';

        // Realiza a requisição AJAX usando jQuery
        $.ajax({
            url: '<?= $base_url; ?>/functions/atendimento.php', // URL do arquivo PHP que receberá os dados
            type: 'POST', // Método HTTP usado para enviar os dados (pode ser POST ou GET)
            data: {
                id: id,
                consultorio: consultorio,
                funcao: funcao
            }, // Dados que serão enviados para o servidor
            success: function(response) { // Função a ser executada em caso de sucesso
                console.log(response); // Exibe a resposta do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com a resposta do servidor, se necessário
                console.log(response); // Exibe a resposta do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com a resposta do servidor, se necessário
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Status do atendimento atualizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    // Se desejar, pode adicionar ações aqui após o usuário clicar em OK
                    location.reload();
                });
               // location.reload();

            },
            error: function(xhr, status, error) { // Função a ser executada em caso de erro
                console.error(xhr.responseText); // Exibe a resposta de erro do servidor no console do navegador

                // Verifica o código de erro retornado pela requisição
                if (xhr.status === 400) {
                    // Se o código de erro for 400, exibe a mensagem específica
                    // Converte a resposta JSON em um objeto JavaScript
                    var responseObj = JSON.parse(xhr.responseText);

                    // Acessa a propriedade "message" do objeto de resposta
                    var errorMessage = responseObj.message;

                    // Exibe a mensagem de erro usando o SweetAlert
                    Swal.fire({
                        title: 'Erro!',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                } else {
                    // Se for outro erro, exibe uma mensagem genérica de erro interno do sistema
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Erro interno do sistema. Tente novamente em alguns instantes.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }
        });
    }
</script>

<script>
    // Função para atualizar o conteúdo da div
    function atualizarDiv() {
        var url_refresh = $("#url_refresh_atendimento").val();
        $("#painel_de_atendimento").load(url_refresh);
    }

    // Chama a função para atualizar a div no carregamento inicial da página
    $(document).ready(function() {
         atualizarDiv();

        // Chama a função para atualizar a div a cada 5 segundos
         setInterval(atualizarDiv, 5000); // 5000 milissegundos = 5 segundos
    });
</script>