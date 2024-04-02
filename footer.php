<!-- FOOTER -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

<script>
    function status_atendimento(id, status) {
        $(this).text('Atualizando...');

        var id = id;
        var status = status;
        var funcao = 'alterar_status_atendimento';

        // Realiza a requisição AJAX usando jQuery
        $.ajax({
            url: '<?= $base_url ?>functions/atendimento.php', // URL do arquivo PHP que receberá os dados
            type: 'POST', // Método HTTP usado para enviar os dados (pode ser POST ou GET)
            data: {
                id: id,
                status: status,
                funcao: funcao
            }, // Dados que serão enviados para o servidor
            success: function(response) { // Função a ser executada em caso de sucesso
                console.log(response); // Exibe a resposta do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com a resposta do servidor, se necessário
                alert('Confirmado: Atendimento Em Andamento');
                location.reload();

            },
            error: function(xhr, status, error) { // Função a ser executada em caso de erro
                console.error(xhr.responseText); // Exibe a resposta de erro do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com o erro, se necessário
                alert('Erro ao confirmar Atendimento');
            }
        });
    }

    function confirmar_atendimento(id, coluna) {
        // Armazena o elemento em uma variável
        var elemento = $(this);

        // Altera o texto do elemento para "Atualizando..."
        elemento.text('Atualizando...');
        var coluna = coluna;
        var id = id;
        var funcao = 'confirmar_atendimento';

        // Realiza a requisição AJAX usando jQuery
        $.ajax({
            url: '<?= $base_url ?>functions/atendimento.php', // URL do arquivo PHP que receberá os dados
            type: 'POST', // Método HTTP usado para enviar os dados (pode ser POST ou GET)
            data: {
                id: id,
                coluna: coluna,
                funcao: funcao
            }, // Dados que serão enviados para o servidor
            success: function(response) { // Função a ser executada em caso de sucesso
                console.log(response); // Exibe a resposta do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com a resposta do servidor, se necessário
                alert('Atendimento Confirmado');
                location.reload();

            },
            error: function(xhr, status, error) { // Função a ser executada em caso de erro
                console.error(xhr.responseText); // Exibe a resposta de erro do servidor no console do navegador
                // Aqui você pode adicionar código para lidar com o erro, se necessário
                alert('Erro ao confirmar Atendimento');
            }
        });
    }
</script>