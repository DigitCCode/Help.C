<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script  src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    
    <!--JavaScript Menu -->
    <script src="js/script.js" defer></script>

    <title>Help.C</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html" class="logo"><img src="img/Logo_Help.png"></a>
            <div class="nav-links" id="navLinks">
               <i class="fa fa-times" onclick="hideMenu()"></i> 
                <ul>
                    <li><a href="">Início</a></li>
                    <li><a href="#sobre">Sobre Nós</a></li>
                    <li><a href="#instituicao">Instituições</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="central.php" class="profile"><img src="img/perfil-final.png"></a></li> 
                </ul>
                <!--<div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="img/photo-perfil.png" alt="Perfil">
                    </div>
                    <div class="menu">
                        <h3>Qualquer um  =)<br><span>Web Designer</span></h3>
                        <ul>
                            <li><img src="img/usuario-de-comentarios.png" alt=""><a href="#">Meu perfil</a></li>
                            <li><img src="img/grampo.png" alt=""><a href="#">Arquivos</a></li>
                            <li><img src="img/mochila.png" alt=""><a href="#">Configurações</a></li>
                            <li><img src="img/troca.png" alt=""><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Que tal ajudar?</h1>
            <p>Apresentamos a vocês nosso projeto, o help.c, com o intuito de ajudar as instituições de caridade de Caçapava a terem mais visibilidade pelas pessoas da nossa e de outras cidades, pois quando nos unimos podemos mudar vidas.</p>
            <a href="" class="hero-btn">Saiba Mais!</a>
        </div>

    </section>

    <!------- Lugares ------->

    <section id="instituicao">
        <section class="lugares">
            <h1>Instituições em Caçapava</h1>
            <p>Você conhece as instituições da cidade de Caçapava? Sabe o que elas fazem? Quem ajudam?</p>

            <div class="slider owl-carousel">
                <div class="card">
                
                    <div class="content">
                        <div class="title">
                            Casa da Criança
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                
                    <div class="content">
                        <div class="title">
                            Conviver
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            Instituto Santa Teresa D’ Avila
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            Lar de Idosos Vicente de Paulo
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            Lar Emmanuel
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            AMAIS
                        </div>
                      
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            APAE

                        </div>
                      
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum ea provident dicta id? Sint suscipit eveniet perspiciatis asperiores blanditiis vero quibusdam iste, commodi, facere quaerat libero minus? Nulla, officiis!</p>
                        <div class="btn">
                            <button>Read more</button>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="btn-inst">
                <button>
                    Ver tudo
                </button>
            </div>
        </section>
    </section>

    <!------- fotos ------>

    <section class="fotos">
        <h1>Fotos das Instituições</h1>
        <p>Veja aqui algumas instituições de caçapava.</p>

        <div class="row">
            <div class="fotos-col">
                <img src="img/exemplo1.jpg">
                <div class="layer">
                    <h3>Lugar 1</h3>
                </div>
            </div>
            <div class="fotos-col">
                <img src="img/exemplo1.jpg">
                <div class="layer">
                    <h3>Lugar 2</h3>
                </div>
            </div> 
            <div class="fotos-col">
                <img src="img/exemplo1.jpg">
                <div class="layer">
                    <h3>Lugar 3</h3>
                </div>
            </div>
        </div>

    </section>

    <!------- Benefícios -------->

    <section class="beneficios">
        <h1>Benefícios</h1>
        <p>Ajudar os outros pode ser parecer uma tarefa difícil e talvez por isso não pareça vantajoso ajudar, mas aqui estão alguns motivos que vão te mostrar que ajudar os outros sempre é benéfico.</p>

        <div class="row">
            <div class="beneficios-col">
                <img src="img/ajuda.jpg">
                <h3>Sentir-se bem consigo mesmo</h3>
                <p>                <p>Ao ajudar as pessoas você se sente melhor, esse sentimento de satisfação por ter ajudado alguém, mesmo que só um pouco, é inedito e pode ser considerado uma das melhores sensações da humanidade.</p>
            </div>
            <div class="beneficios-col">
                <img src="img/ajuda.jpg">
                <h3>Mudança na forma como o consumidor vê o estabelecimento</h3>
                <p>Os estabelecimentos de caridade sofrem com um preconceito, pois, o dinheiro investido não gera um "produto" visível o que causa uma certa desconfiança no resultado de tal investimento.</p>
            </div>
            <div class="beneficios-col">
                <img src="img/ajuda.jpg">
                <h3>Agregação de valor à marca</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                dolore magna aliqua.</p>
            </div>
        </div>

    </section>

    <!------- Sobre ------->

    <section id="sobre">
    <section class="about">
      <div class="main">
        <img src="img/logo-a.png">
        <div class="about-text">
          <h1>Sobre<span> Nós</span></h1>
          <h5>Akag.</h5>
          <p>Somos uma startup que busca a adaptação e inovações tecnológicas a partir dos nossos serviços.</p>  
        </div>
      </div>
    </section>  
    </section>

    <!------- footer -------->

    <footer>
        <section id="contato">
        <div class="footer-content">
            <h3>Help.C</h3>
            <p>Isso forma futuros!</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/akag_.br/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 Help.C</p>
        </div>
        </section>
    </footer>
</body>
</html>
