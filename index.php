<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/main.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.0/dist/email.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
    </head>
    <body>

    <!-- Sloaga: Qual é o teu sonho? Protege-o bem para não o esqueceres!-->
<div class="corpo">
            <section class="main">
                <div class="social2">
                    <nav class="social">
                        <ul>
                            <a href=""> <li> <div class="social3"> <p> Instagram </p></div> <img src="./img/icon/instagram.png"></li></a>
                            <a href=""> <li> <div class="social3"> <p> Instagram </p></div> <img src="./img/icon/instagram.png"></li></a>
                            <a href=""> <li> <div class="social3"> <p> Instagram </p></div> <img src="./img/icon/instagram.png"></li></a>
                        </ul>
                    </nav>
                </div>

                <div class="frases">
                    <h1>DIRIGIDO POR MIM, GUIADO POR DEUS.</h1>
                    <h3>@Anonimo</h3>
                </div>
        
                <div class="buttons2">
                    <?php
                            if(!isset($_SESSION)){
                                session_start();
                            }
                            if (isset($_SESSION['email']))
                            {
                                $email = $_SESSION['email'];
                            }
                            
                            if (!isset($email)) {
                                // sessão não iniciada
                                echo '<div class="buttons">';
                                echo '<a href="./register.php">Sign up</a>';
                                echo '<a href="./login.php">Login</a>';
                                echo '</div>';
                            } else {
                                echo '<div class="buttons">';
                                echo '<a href="./Logout.php">Logout</a>';
                                // sessão iniciada

                                    // sessão não iniciada
                                    include './planos/verificar_plano.php';

                                    $servername = "localhost";
                                    $database = "yazaki_p1";
                                    $username = "root";
                                    $password = "";

                                    $conn = mysqli_connect($servername, $username, $password, $database);

                                    $query = "SELECT datalimite FROM login WHERE email = '$email'";
                                    $result = mysqli_query($conn, $query);  

                                    // verifique se a consulta teve sucesso
                                    if ($result) {
                                        // percorra todos os resultados
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        
                                            if ($row['datalimite'] != '')
                                            {
                                                echo '<a href="./painel.php">Painel</a>';
                                                echo '</div>';
                                            }
                                        }
                                    }
                                }
                    ?>
                </div>
            </section>

            <section class="ancoras">
                <div>
                    <ul>
                        <a href="#ancora1"> <li>Quem somos</li></a>
                        <a href="#ancora2"><li>Porque Nós</li></a>
                        <a href="#ancora3"><li>Serviços</li></a>

                        <?php
                            if(!isset($_SESSION)){
                            session_start();
                            }
                            if (isset($_SESSION['email']))
                            {
                                $email = $_SESSION['email'];

                                $servername = "localhost";
                                $database = "yazaki_p1";
                                $username = "root";
                                $password = "";

                                $conn = mysqli_connect($servername, $username, $password, $database);

                                $query = "SELECT datalimite FROM login WHERE email = '$email'";
                                $result = mysqli_query($conn, $query);  

                                // verifique se a consulta teve sucesso
                                if ($result) {
                                    // percorra todos os resultados
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    
                                        if ($row['datalimite'] != '')
                                        {
                                            //nao mostra nada
                                        } else {
                                            echo '<a href="#ancora4"><li>Planos</li></a>';
                                        }
                                    }
                                }
                            } else {
                                echo '<a href="#ancora4"><li>Planos</li></a>';
                            }

                            
                        ?>


                        <a href="#ancora5"><li>Suporte</li></a>
                    </ul>
                </div>
            </section>

            <section class="quemsomos">
            <a name="ancora1" ></a>
                <div class="quemsomosresponsivo">
                    <div class="titulo-1">
                        <span class="linha-1"></span>
                        <h1>QUEM SOMOS</h1>
                        <span class="linha-2"></span>
                    </div>

                    <div class="video-1">
                        <video src="./img/video/who_we_are.mp4" autoplay loop muted playsinline></video>
                    </div>

                    <div class="texto">
                        <p>Lorem ipsum dolor sit amet. Ut magnam minus qui molestiae minus aut natus consectetur et accusamus debitis et cumque soluta? Hic doloribus atque id rerum facere sed sunt itaque. Non ducimus magnam et vero distinctio et asperiores necessitatibus a sunt sint qui doloremque placeat? </p><p>Eos repellat neque et explicabo necessitatibus ea pariatur modi et sunt rerum et aperiam perferendis. Eos quasi fuga ad accusamus officia non optio quod et earum quam ea laudantium expedita ut sint necessitatibus qui veniam labore. Id sunt distinctio et quia magnam ex ipsum laborum vel dolorem repellat. Eum delectus temporibus ab fugiat praesentium ut consequatur neque et temporibus pariatur a dolorem delectus. </p><p>Nam dolorum fugit aut recusandae harum et error iusto sit dolores harum in aliquid ipsa quo voluptatum tenetur ut eveniet provident. Qui dicta illo hic sequi expedita est veniam error et sint dolores est dolor laboriosam et esse exercitationem et repudiandae ipsum. Ut repellat vero qui voluptatem dolor aut libero saepe 33 rerum quia ea veniam autem! Aut eveniet veniam nam itaque fuga qui ducimus accusamus! </p>
                    </div>
                </div>
            </section>

            <section class="porquenos">
            <a name="ancora2" ></a>
                <div class="porquenosresponsivo">
                    <div class="porquenostitle">
                        <span class="l1"></span>
                        <span class="l2"></span>
                        <h1>Porque Nós</h1>
                        <span class="l3"></span>
                        <span class="l4"></span>
                    </div>

                    <div class="separador">
                        
                    </div>
                    
                    <div class="colunas">
                        <div class="container">
                                <li id="seguranca">
                                    <a href="">
                                        <img src="./img/seguranca.jpg" alt="Segurança">
                                    </a>
                                </li>
                                    <h2>Segurança</h2>
                                
                                <p>Lorem ipsum dolor sit amet. Ut magnam minus qui molestiae minus aut natus consectetur et accusamus debitis et cumque soluta? </p>
                                
                                <div class="coluna">
                                    <div class="botao"> 
                                        <li>
                                            <a id="segurancasaiba" href="">
                                                <b>Saber mais</b>
                                            </a>
                                        </li>
                                    </div>
                        </div>

                        <div class="container-2">
                                <li>
                                    <a href="">
                                        <img src="./img/suporte.jpg" alt="Suporte">
                                    </a>
                                </li>
                                    <h2>Suporte</h2>
                                
                                <p>Lorem ipsum dolor sit amet. Ut magnam minus qui molestiae minus aut natus consectetur et accusamus debitis et cumque soluta? </p>
                                
                                <div class="coluna">
                                    <div class="botao"> 
                                        <li>
                                            <a href="">
                                                <b>Saber mais</b>
                                            </a>
                                        </li>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="colunas">
                        <div class="container">
                            <div class="temporesponsivo">
                                <li class="tempo">
                                    <a href="">
                                        <img src="./img/tempo.jpg" alt="Tempo">
                                    </a>
                                </li>
                                    <h2>Economiza o seu tempo</h2>
                                
                                <div class="tempo-p">
                                    <p>Lorem ipsum dolor sit amet. Ut magnam minus qui molestiae minus aut natus consectetur et accusamus debitis et cumque soluta? </p>
                                </div>

                                <div class="coluna">
                                    <div class="botao"> 
                                        <li class="tempo-p">
                                            <a href="">
                                                <b>Saber mais</b>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                        </div>

                        <div class="container-2">
                            <div class="dinheiroresponsivo">
                                <li class="dinheiro">
                                    <a href="">
                                        <img src="./img/dinheiro.PNG" alt="Dinheiro">
                                    </a>
                                </li>
                                    <h2>Ajuda a economizar dinheiro</h2>
                                
                                <div class="dinheiro-p">
                                    <p>Lorem ipsum dolor sit amet. Ut magnam minus qui molestiae minus aut natus consectetur et accusamus debitis et cumque soluta? </p>
                                </div>

                                <div class="coluna">
                                    <div class="botao"> 
                                        <li class="dinheiro-p">
                                            <a href="">
                                                <b>Saber mais</b>
                                            </a>
                                        </li>
                                    </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <img class="camiao" src="./img/camiao.png" alt="camião">
                        </div>
                        </div>
                </div>
            </section>

            <section class="servicos">

            <div class="servicesresponsivo">

                    <div class="titulo">
                        <a name="ancora3" ></a>
                        <h1>Serviços</h1>
                    </div>

                    <div class="services">
                            <div class="item" id="item1">
                                <li><img src="./img/servicos_img1.png" alt="Toalha"><h2>Duche</h2><p>Nós sabemos exatamente os melhores sitios com as melhores condições ao menor preço!</p></li>
                            </div>

                            <div class="item" id="item2">
                                <li><img src="./img/servicos_img2.png" alt=""><h2>Dormir</h2><p>Fornecemos a melhor localização para puder dormir descançado ao melhor preço</p></li>
                            </div>

                            <div class="item" id="item3">
                                <li><img class="servico3" src="./img/servicos_img3.png" alt=""><h2>Abastecimento</h2><p>Alguem falou em abastecer? Nós encontramos as melhores areas de serviço com os seus devidos preços.</p></li>
                            </div>

                            <div class="item" id="item4">
                                <li><img src="./img/servicos_img4.png" alt=""><h2>Horarios</h2><p>Nós calculamos as melhores horas para que voce possa trabalhar. E ajudamos a calcular quanto irá receber de quilometros</p></li>
                            </div>

                            <div class="item" id="item5">
                                <li><img src="./img/servicos_img5.png" alt=""><h2>Suporte</h2><p>Caso tenha duvidas, temos um suporte de atendimento super atencioso.</p></li>
                            </div>
                        </div>
                        
                    </div>

            </section>

            <?php
            error_reporting(0);

                if(!isset($_SESSION)){
                    session_start();
                }

                if (isset($_SESSION['email']))
                {
                    $email = $_SESSION['email'];

                    $servername = "localhost";
                    $database = "yazaki_p1";
                    $username = "root";
                    $password = "";

                    $conn = mysqli_connect($servername, $username, $password, $database);

                    $query = "SELECT datalimite FROM login WHERE email = '$email'";
                    $result = mysqli_query($conn, $query);

                    // verifique se a consulta teve sucesso
                    if ($result) {
                        // percorra todos os resultados
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['datalimite'] != '')
                            {
                                //nao mostra nada
                            } else {
                                include 'planos/mostrar.php';
                            }
                        }
                    }
                } else {
                    include 'planos/mostrar.php';
                }
            ?>

            <section class="contato">
            <a name="ancora5" ></a>

            <h1>Contato</h1>

                <form id="form">
                        <input type="text" id="subject" placeholder="Assunto da mensagem" autocomplete="off" required>
                        <br>
                        <input type="text" id="email" placeholder="Email"  autocomplete="off" required>
                        <input type="text" id="numero" placeholder="Numero de telemovel" autocomplete="off" required>
                        <br>
                        <textarea id="body" placeholder="Escreva a mensagem aqui" autocomplete="off" required></textarea>
                        <br>
                        <input type="submit" value="Enviar" autocomplete="off">
                </form> 






            </section>
</div>
    </body>
    <script src="./js/email.js"></script>   
</html>