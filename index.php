<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png">
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
            <p>Apresentamos a vocês nosso projeto, o help.c, com o intuito de ajudar as instituições de caridade de Caçapava a<br> terem mais visibilidade pelas pessoas da nossa e de outras cidades, pois quando nos unimos podemos mudar vidas.</p>
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
                        <p>Nossa missão é atuar de forma educativa com características próprias da pedagogia do amor, junto às crianças e adolescentes do Município de Caçapava, proporcionando-lhes um espaço de desenvolvimento integral que possa auxiliá-los e prepará-los para uma melhor qualidade de vida.</p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                
                    <div class="content">
                        <div class="title">
                            Conviver
                        </div>
                        <p>O Conviver é uma associação sem fins econômicos que oferece em um espaço acolhedor o Serviço de Proteção Especial de Média Complexidade visando o desenvolvimento do protagonismo, o fortalecimento de potencialidades e de vínculos afetivos de pessoas em desvantagem pessoal resultante da deficiência e suas famílias.</p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            Instituto Santa Teresa D’ Avila
                        </div>
                        <p>A atividade principal da empresa é Atividades de Assistência Psicossocial e À Saúde A Portadores de Distúrbios Psíquicos, Deficiência Mental e Dependência Química e Grupos Similares Não Especificadas Anteriormente.</p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            Lar de Idosos Vicente de Paulo
                        </div>
                        <p>Proporcionar, resgatar e defender a dignidade da pessoa idosa por meio de um serviço de assistência social que considere a pessoa humana em todas as suas dimensões: social, psicológica, espiritual e moral, respeitando suas capacidades físicas e psíquicas.</p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            Lar Emmanuel
                        </div>
                        
                        <p>O Lar da Criança Emmanuel é uma instituição de assistência, com seu trabalho totalmente voltado para a infância e os jovens, bem como o fortalecimento dos vínculos familiares em uma das comunidades de São Bernardo do Campo. Sem fins lucrativos, foi fundada no dia 30 de março de 1960.</p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            AMAIS
                        </div>
                      
                        <p>AMAIS é uma associação sem fins lucrativos, com foco nos direitos e proteção dos animais, criada em 2009 em Caçapava-SP. Declarada de utilidade pública pela Lei Municipal 5.081/2011.
Cuida de mais de 200 animais resgatados de abandono e maus tratos. Também realiza castração de animais de rua e animais da população de baixa renda. Trabalha com resgates e conscientização da população. </p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    
                    <div class="content">
                        <div class="title">
                            APAE

                        </div>
                      
                        <p>Apae Brasil é a maior rede de apoio às Pessoas com Deficiência Intelectual ou Deficiência Múltipla. De acordo com o Censo IBGE 2010, o Brasil tem 45.606.048 de pessoas com deficiência, o que equivale a 23,9% da população do País. 18,60% foram declaradas pessoas com deficiência visual, 7% com deficiência motora, 5,10% com deficiência auditiva e 1,40% com deficiência mental.</p>
                        <div class="btn">
                            <button>Leia mais</button>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="btn-inst">
            <a href="./instituicoes/instituicoes.html">
                <button>Ver Mais</button>
            </a> 
            </div>
        </section>
    </section>

    <!------- fotos ------>

    <section class="fotos">
        <h1>Fotos das Instituições</h1>
        <p>Veja aqui algumas instituições de caçapava.</p>

        <div class="row">
            <div class="fotos-col">
                <img src="img/1.png">
                <div class="layer">
                    <h3>Lugar 1</h3>
                </div>
            </div>
            <div class="fotos-col">
                <img src="img/2.png">
                <div class="layer">
                    <h3>Lugar 2</h3>
                </div>
            </div> 
            <div class="fotos-col">
                <img src="img/3.png">
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
                <img src="img/APAE2.jpg">
                <h3>Sentir-se bem consigo mesmo</h3>
                <p>                <p>Ao ajudar as pessoas você se sente melhor, esse sentimento de satisfação por ter ajudado alguém, mesmo que só um pouco, é inedito e pode ser considerado uma das melhores sensações da humanidade.</p>
            </div>
            <div class="beneficios-col">
                <img src="img/conviver.jpg">
                <h3>Mudança na forma como o consumidor vê o estabelecimento</h3>
                <p>Os estabelecimentos de caridade sofrem com um preconceito, pois, o dinheiro investido não gera um "produto" visível o que causa uma certa desconfiança no resultado de tal investimento.</p>
            </div>
            <div class="beneficios-col">
                <img src="img/cdc.png">
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
