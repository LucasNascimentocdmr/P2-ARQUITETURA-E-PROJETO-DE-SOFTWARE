<?php
// Conecta ao banco de dados
$conn = new mysqli("", "", "", "");

// Recupera as informações do formulário de login
$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];

// Verifica se os campos não estão vazios
if (!empty($nome_usuario) && !empty($senha)) {
    // Consulta o banco de dados para verificar se o nome de usuário e senha existem
    $sql = "SELECT * FROM usuarios WHERE email = '$nome_usuario' AND senha = '$senha'";
    $resultado = $conn->query($sql);


if ($resultado->num_rows > 0) {
    // Informações de login válidas - redireciona para páginas diferentes com base no usuário
    $row = $resultado->fetch_assoc();
    $tipo_usuario = $row['email'];

    session_start();
    $_SESSION['nomeUsuario'] = $nome_usuario; // Armazena o nome de usuário na sessão

    if (in_array($tipo_usuario, ['thiago.gusmao@comercial.com', 'luiz.eduardo@comercial.com', 'kaue.christo@comercial.com', 'juliana.santos@comercial.com'])) {
?>



                <!-- HTML e JavaScript para o Modal -->
                <!DOCTYPE html>
                <html lang="en">
                <head>
                     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <style>
                        /* Adicione estilos personalizados aqui */
                        .modal-content {
                            padding: 20px;
                        }
                        .redirect-btn {
                            margin-right: 10px;
                        }
                    </style>
                </head>
                <body>
                
                <!-- ... (outros elementos HTML) ... -->
                
                <!-- Modal -->
               <div id="myModal" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Escolha a pagina para acesso!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Para qual página você deseja ser direcionado?</p>
                            <button class="btn btn-primary redirect-btn" data-destination="indexfatura.php">FATURAMENTO</button>
                            <button class="btn btn-secondary redirect-btn" data-destination="select.php">CONTROLE COMERCIAL</button>
                            <!-- Adicione mais botões conforme necessário -->
                        </div>
                    </div>
                </div>
            </div>
                
                <script>
                    // Código JavaScript para abrir o modal e lidar com os redirecionamentos
                    document.addEventListener("DOMContentLoaded", function() {
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                
                        var redirectButtons = document.getElementsByClassName("redirect-btn");
                        for (var i = 0; i < redirectButtons.length; i++) {
                            redirectButtons[i].addEventListener("click", function() {
                                var destination = this.getAttribute("data-destination");
                                window.location.href = destination;
                            });
                        }
                    });
                </script>
                
                </body>
                </html>

                    <?php
                        } else {
                            // Redireciona para select.php para outros usuários
                            header("Location: select.php");
                            exit;
                        }
                    } else {
                        // Informações de login inválidas - exibe mensagem de erro e redireciona para a página de login
                        echo "<script language='javascript'>";
                        echo "alert('CREDENCIAL INVÁLIDA: ');";
                        echo 'location.href="login.html";';
                        echo "</script>";
                    }
                    } else {
                        // Campos vazios - exibe mensagem de erro e redireciona para a página de login
                        echo "<script language='javascript'>";
                        echo "alert('CREDENCIAL NÃO ENCONTRADA: ');";
                        echo 'location.href="login.html";';
                        echo "</script>";
                    }
                    ?>
