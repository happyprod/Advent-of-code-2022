<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Salario estimado</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/salario.css">
        <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
        <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
    </head>
    <body>

        <section class="menu">
            <ul>
                <a href="">
                    <li>
                        Pagina Principal
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Horarios
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Estimativa de salario
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Area de serviço perto de si
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Descanso 
                    </li>
                </a>   
                <span></span>

                <a href="">
                    <li>
                        Planear uma rota
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Estatisticas
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Perfil
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Amigos
                    </li>
                </a>
                <span></span>

                <a href="">
                    <li>
                        Suporte
                    </li>
                </a>

            </ul>
        </section>


        <section class="conteudo">
            <div class="graficos">
                <div id="receber"></div>
                <div id="despesas"></div>
            </div>

            <div class="receber">
                <div class="addfatia">
                    <h2>Adicionar valor a uma fatia</h2>
                    <form action="./salarios/adicionar_lucro.php" method="POST" autocomplete="off">
                        <h3>Fatia</h3>
                        <select id="fatia" name="fatia" type="_POST">
                            <?php
                            session_start();

                            $email = $_SESSION['email'];

                                $servername = "localhost";
                                $database = "yazaki_p1";
                                $username = "root";
                                $password = "";


                                $conn = mysqli_connect($servername, $username, $password, $database);
                    
                            // verifique a conexão
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // crie a consulta para selecionar todos os nomes da tabela
                            $query = "SELECT fatia FROM fatias WHERE email='$email' AND lucro='true'";
                            // execute a consulta
                            $result = mysqli_query($conn, $query);

                            // verifique se a consulta teve sucesso
                            if ($result) {
                                // percorra todos os resultados da consulta e adicione-os à combobox
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option>" . $row['fatia'] . "</option>";
                                }
                            } else {
                                // se a consulta falhar, exiba uma mensagem de erro
                                echo "Erro ao recuperar dados: " . mysqli_error($conn);
                            }
                            ?>
                        </select>

                        <h3>Valor</h3>
                        <input type="number" name="valor" id="valor" required>

                        <br>

                        <input type="submit" value="Salvar" id="salvar">
                    </form>
                </div>

                <div class="criafatia">
                    <h2>Criar uma fatia</h2>
                    <form action="./salarios/criar_fatia_lucro.php" method="POST" autocomplete="off">
                        <h3>Fatia</h3>
                        <input type="text" size="35" maxlength="256" name="fatia" id="fatia" required>

                        <h3 id="valortitulo">Valor</h3>
                        <input type="number" name="valor" id="valor" required>

                        <br>

                        <input type="submit" value="Salvar" id="salvar2">
                    </form>
                </div>
            </div>


            <div class="receber2">
                <div class="addfatia">
                    <h2>Adicionar valor a uma fatia</h2>
                    <form action="./salarios/adicionar_despesa.php" method="POST" autocomplete="off">
                        <h3>Fatia</h3>
                        <select id="fatia" name="fatia" type="_POST">
                            <?php
                            session_start();

                            $email = $_SESSION['email'];

                                $servername = "localhost";
                                $database = "yazaki_p1";
                                $username = "root";
                                $password = "";


                                $conn = mysqli_connect($servername, $username, $password, $database);

                            // verifique a conexão
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // crie a consulta para selecionar todos os nomes da tabela
                            $query = "SELECT fatia FROM fatias WHERE email='$email' AND lucro='false'";
                            // execute a consulta
                            $result = mysqli_query($conn, $query);

                            // verifique se a consulta teve sucesso
                            if ($result) {
                                // percorra todos os resultados da consulta e adicione-os à combobox
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option>" . $row['fatia'] . "</option>";
                                }
                            } else {
                                // se a consulta falhar, exiba uma mensagem de erro
                                echo "Erro ao recuperar dados: " . mysqli_error($conn);
                            }
                            ?>
                        </select>

                        <h3>Valor</h3>
                        <input type="number" name="valor" id="valor" required>

                        <br>

                        <input type="submit" value="Salvar" id="salvar3">
                    </form>
                </div>

                <div class="criafatia">
                    <h2>Criar uma fatia</h2>
                    <form action="./salarios/criar_fatia_despesa.php" method="POST" autocomplete="off">
                        <h3>Fatia</h3>
                        <input type="text" size="35" maxlength="256" name="fatia" required>

                        <h3 id="valortitulo">Valor</h3>
                        <input type="number" name="valor" id="valor" required>

                        <br>

                        <input type="submit" value="Salvar" id="salvar4">
                    </form>
                </div>
            </div>
        </section>

        <section class="conta">
            <h3>Brutos</h3>
            <h1><?php include('./salarios/brutos.php') ?> <h1>

            <h3>Despesas</h3>
            <h1><?php include('./salarios/despesas.php') ?> <h1>

            <h3>Limpos</h3>
            <h1>
            <?php if ($somamabrutos == 0 && $somadespesas)
                {
                    echo $somabrutos + $somadespesas . "€"; 
                } else {
                    echo "----------";
                }
            ?></h1>
            
        </section>


        <section class="estatisticas">
            <a href=""> <h1>Ver Estatisticas</h1></a>
        </section>
        <script src="./js/App.js"></script>
    </body>
</html>