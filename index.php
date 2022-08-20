<?php
    session_start(); // inicia a variavel $_SESSION
    $url = explode('/', $_SERVER['REQUEST_URI']); //pega a url e transforma em uma array
    //$page = $url[3]; // URL Local
    $page = $url[1]; // URL Online
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--LINK ICONE NA GUIA-->
  <link rel="icon" href="img/ICONE-LOJA-ON.png">

  <!--LINK FONTAWESOME ICONS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <!--LINK CSS-->
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

  <!--FONTAWESOME CDN LINK-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>LojaOn</title>
</head>

<body class="no-js">
  <header class="header">
    <a href="index.php" class="logo-text">LojaOn</a>

    <button style="display: none;" class="header__btnMenu"><i class="fas fa-bars fa-2x"></i><span
        class="sr-only">Menu</span></button>

    <nav class="header__nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#comofunc">Como funciona?</a></li>
        <li><a href="#title_plano">Planos</a></li>
        <li><a href="#alunos">Nossos Alunos</a></li>
        <li><a href="#FAQ">FAQs</a></li>
        <li><a href="#">Quem é Geisa?</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero_div">

      <div class="title">
        <h1 class="hero__title">Planeje e execute as ações do mês da sua loja online e nunca mais fique
          sem vender!</h1>
        <p class="hero__text">Eu sei que você tem dificuldade em saber qual é o próximo passo, saber
          planejar a próxima ação de venda, saber qual produto focar na próxima semana e
          mesmo quando finalmente consegue se planejar não consegue executar, e por
          isso, no final do dia sempre se sente improdutiva.
          Sei disso, porque também tenho uma loja online desde 2013 e olhando pra trás
          vejo que só foi possível sair do zero e faturar mais de 2 milhões por ano quando
          comecei a criar planos de ações semanais. É esse planejamento que compartilho</p>
        <div class="btn">
          <a href="#title_plano" class="hero__btn">Comece agora</a>
        </div>
      </div>

      <!--<div class="hero_image">
        <img src="img/fotos/GEISA-1237x1274.png" alt="imagem">
      </div>-->
    </div>
  </section>

  <div class="container">
    <section class="section_conheco animate">
      <div class = "colum-1-conheco" data-anime="left">
        <h2>Eu te conheço</h2>
        <p>Eu sei que você tem dificuldade em saber qual é o próximo passo, saber
          planejar a próxima ação de venda, saber qual produto focar na próxima semana e
          mesmo quando finalmente consegue se planejar não consegue executar, e por
          isso, no final do dia sempre se sente improdutiva.
          Sei disso, porque também tenho uma loja online desde 2013 e olhando pra trás
          vejo que só foi possível sair do zero e faturar mais de 2 milhões por ano quando
          comecei a criar planos de ações semanais. É esse planejamento que compartilho
          com você dentro do LojaON!</p>
        </div>
    </section>
  </div>

  <section id="comofunc" class="section_como_func container">
    <h2>Como funciona a lojaOn?</h2>
    <!--Video-->

    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WsEv01p3GXU" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <p>O LojaON é um planejamento estratégico para você saber o que executar em
      cada semana. O encontro de planejamento acontece ao vivo e online uma vez
      por mês, você pode participar ao vivo ou assistir a gravação. Esse
      planejamento é dividido por semanas, ou seja, cada semana possui
      ações
      diferentes para o seu negócio. Você também recebe um checklist semanal para
      garantir a execução de todas as ações. Além disso, semanalmente você
      recebe um e-mail de lembrete para não esquecer de planejar a próxima
      semana. O LojaOn é tudo o que você precisa para nunca mais ser improdutiva na sua loja online.</p>
  </section>

  <!--DESCUBRA O PQ LOJA ON É PERFEITO PARA VOCE-->
  <section class="section_descubra spothlight">
    <div class="container">
      <div class="texto_video">
        <h2>Descubra por que o LojaON é perfeito para você</h2>
        <p>Assista alguns trechos dos nossos planejamentos semanais e veja na prática o
          quanto podemos contribuir para o crescimento da sua empresa. Com uma
          didática simples e objetiva, com ações possíveis de serem executadas no seu
          dia a dia</p>
      </div>

      <div class="embed-responsive embed-responsive-16by9">
        <iframe id="video" class="embed-responsive-item" autoplay="1" frameborder="0"
          src="https://www.youtube.com/embed/lXvCgjsZU0s"
          allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="div_p_video">
        <p class="p_subtitulo_video">Clique nas aulas abaixo e confira mais trechos, que foram selecionados com cuidado
          para te ajudar a chegar mais longe.
          A sua mudança começa agora.</p>
      </div>


      <!--GALERIA MOBILE-->
        


      <!--GALERIA-->
      <div class="galeria_video">

        <div onclick="trocar1()" class="card_video2">
          <div class="card_video">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <div class="info_video">
            <p>Fevereiro corte</p>
            <p>Sub titulo</p>
            <p>2 min</p>
          </div>
        </div>
        
        <div onclick="trocar2()" class="card_video2">
          <div class="card_video">
          <i class="fa-solid fa-chart-line"></i>
          </div>
            <div class="info_video">
              <p>Março corte</p>
              <p>Sub titulo</p>
              <p>2 min</p>
            </div>
        </div>

        <div onclick="trocar3()" class="card_video2">
          <div class="card_video">
          <i class="fa-solid fa-chart-line"></i>
          </div>
            <div class="info_video">
              <p>Maio corte</p>
              <p>Sub titulo</p>
              <p>2 min</p>
            </div>
        </div>
        <div  onclick="trocar4()" class="card_video2">
          <div class="card_video">
          <i class="fa-solid fa-chart-line"></i>
          </div>
            <div class="info_video">
              <p>Junho corte</p>
              <p>Sub titulo</p>
              <p>2 min</p>
            </div>
        </div>

        <div  onclick="trocar5()"  class="card_video2">
          <div class="card_video">
          <i class="fa-solid fa-chart-line"></i>
          </div>
            <div class="info_video">
              <p>Julho corte</p>
              <p>Sub titulo</p>
              <p>2 min</p>
            </div>
        </div>
      </div>
  </section>

  <!--PLANOS-->
  <section id="title_plano" class="section_planos animate">
    <h1>Planos</h1>
    <main class="cards">
      <section class="card_plano mensal" data-anime="left">
        <h2>R$39,90</h2>
        <h3>Plano Mensal</h3>
        <span>Aqui a cobrança é feita mensalmente. Caso não queira mais assinar o
          LojaON, você pode cancelar a qualquer momento e não receberá novas cobranças.
          Além disso, você também pode solicitar o reembolso em até 7 dias após o
          pagamento mensal</span>
        <button>Assinar</button>
      </section>

      <section class="card_plano anual" data-anime="right"> 
        <h2>R$478,80</h2>
        <h3>Plano Anual</h3>
        <span>Aqui a cobrança é feita anualmente no valor total de R$
          478,80 reais à vista ou em 12 vezes sem juros e você tem 7 dias para solicitar o reembolso.</span>
        <button>Assinar</button>
      </section>
    </main>
  </section>

  <!--ALUNOS-->
  <div id="alunos" class="slide-container swiper">
    <h1>Nossos alunos</h1>
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/Ana_Carolina.jpeg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">Ana Carolina</h2>
            <p class="description">Quando assinei a Loja On eu resolvi um problema que me atrapalhava muito na gestão da minha empresa: 
              não saber quando e que tipos de ações eu poderia aplicar durante o mês. Através do planejamento do mês, eu comecei a vender mais!</p>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/Francine.jpeg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">Francine</h2>
            <p class="description">Apliquei a estratégia 2N ontem no meu Grupo Vip do WhatsApp, e foi babado. 
              Em um dia sem a estratégia, eu teria vendido uns R$50,00 a R$80,00. Com essa estratégia, 
              vendi mais de R$600,00!</p>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/Juliana.jpeg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">Juliana</h2>
            <p class="description">O Loja ON é incrível. Eu estava perdida, sem ânimo. Assinei e já consegui aplicar e colher frutos. Os planejamentos são imperdíveis.</p>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/Rafllezia.jpeg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">Rafllezia</h2>
            <p class="description">Tripliquei o meu faturamento do mês de fevereiro desse ano comparado ao mês de fevereiro do ano anterior. Estou muito feliz, 
              porque seus ensinamentos tem feito a diferença por aqui.</p> 
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/Thaís.jpeg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">Thaís Veloso</h2>
            <p class="description">O Loja ON superou todas as minhas expectativas! 
              Tenho dificuldade em planejar o mês e ele tem me ajudado muito, 
              é bem detalhado e cheio de ideias. No Dia da Mulher, seguimos tudo o que a Geisa orientou 
              e o resultado foi tão maravilhoso.</p>

          </div>
        </div>
        
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/Uedila.jpeg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">Uedila</h2>
            <p class="description">O Loja ON é um divisor de águas. Não me faz só ter ideias, como também me ensina a executá-las. 
            Ficava perdida no que fazer e no que postar, porém, agora em menos de um mês tudo melhorou!</p>


          </div>
        </div>
      </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>


  <!--FAQ-->
  <section id="FAQ" class="section_faq">
    <h2 class="title_faq">Perguntas Frequentes</h2>

    <div class="faq">
      <div class="pergunta">
        <h3>Garantia de 7 dias</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
          Você consegue fazer o teste de 7 dias, para isso você deve assinar a Loja ON e, então, antes de vencer o prazo de 7 dias, realizar o cancelamento da assinatura.
        </p>
      </div>
    </div>


    <div class="faq">
      <div class="pergunta">
        <h3>Fidelidade</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
          Aqui no Loja ON não exigimos fidelidade.

          Ao adquirir a assinatura Loja ON, você pode cancelar quando quiser, sem que seja necessário continuar por mais de um mês.
        </p>
      </div>
    </div>


    <div class="faq">
      <div class="pergunta">
        <h3>Problema no acesso às aulas</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
        Tentou acessar e recebeu um aviso de ausência de pagamento ou entrar em contato com o suporte?
        Fique tranquilo, basta entrar em contato com a nossa equipe através do e-mail contato@geisaalves.com.br e regularizar o seu pagamento que as aulas serão liberadas imediatamente! 
        Caso não lembre a sua senha, é só utilizar a função Esqueceu sua senha?.
        </p>
      </div>
    </div>

    <div class="faq">
      <div class="pergunta">
        <h3>Problema no acesso às aulas</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
        Tentou acessar e recebeu um aviso de ausência de pagamento ou entrar em contato com o suporte?
        Fique tranquilo, basta entrar em contato com a nossa equipe através do e-mail contato@geisaalves.com.br e regularizar o seu pagamento que as aulas serão liberadas imediatamente! 
        Caso não lembre a sua senha, é só utilizar a função Esqueceu sua senha?.
        </p>
      </div>
    </div>

    <div class="faq">
      <div class="pergunta">
        <h3>Por onde começar? Quais aulas assistir?</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
        Dentro da plataforma temos um módulo chamado Comece por Aqui.
        Ali, explicamos sobre a origem da Loja ON, damos dicas de como melhorar seu planejamento e também sobre como utilizar a assinatura.
        </p>
      </div>
    </div>

    <div class="faq">
      <div class="pergunta">
        <h3>Formas de Pagamento</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p> Trabalhamos com as seguintes formas de pagamento:
        - Cartão de crédito
        - PIX</p>
       
        
      </div>
    </div>

    <div class="faq">
      <div class="pergunta">
        <h3>Cancelamento</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p> Aqui é tudo muito simples, você pode cancelar a sua assinatura quando quiser. Basta entrar em contato com o suporte através do e-mail contato@geisaalves.com.br e solicitar o cancelamento ou solicitar diretamente na plataforma. 

        E atenção: o cancelamento retira seu acesso instantaneamente. Recomendamos que você verifique sua data de renovação, para saber quando cancelar sem perder nenhum dia.</p>
       
        
      </div>
    </div>

    <div class="faq">
      <div class="pergunta">
        <h3>Reembolso</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p> Você consegue ter o reembolso da sua assinatura da Loja ON em até 7 dias, que é o período de garantia que damos. Caso você tenha perdido o prazo de cancelamento, não faremos reembolso. Portanto, fique atento ao prazo.

        Em caso de outra necessidade, contate o suporte através do e-mail contato@geisaalves.com.br.</p>
       
        
      </div>
    </div>
  </section>


  <!--QUEM É GEISA?--> 

  <section class="quem_geisa">
    <div class="container_geisa">
      <div class="texto_geisa">
        <h1>Geisa Paiva</h1>
        <p>Empresária desde os 17 anos, Geisa Alves, criou sua loja online @artesanatoemcobre em 2013. 
          Com seu olhar estratégico percebeu que o Instagram é uma poderosa ferramenta de vendas e assim, 
          desenvolveu dezenas de estratégias de vendas pela Internet, visando multiplicar suas vendas em até dez vezes por meio da rede social.
          Em seus treinamentos ajudou mais de 3.000 empresárias a saíram do amadorismo e hoje são reconhecidas pelo que fazem em seus negócios e 
          gitagora ela vai ajudar você também na Loja ON!</p>
      </div>
      <div class="foto_geisa">
        <img src="img/fotos/Geisa-600x600.png" alt="Imagem da Geisa dentro do G">
      </div>
    </div>
  </section>

  <!--FOOTER-->
  
  <footer class="footer">
    <div class="container_footer">
      <div class="row">
        <div class="footer_col">
          <h4>LojaOn</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#comofunc">Como funciona?</a></li>
            <li><a href="#title_plano">Planos</a></li>
          </ul>
        </div>

        <div class="footer_col">
          <h4>Ajuda</h4>
          <ul>
            <li><a href="#FAQ">FAQ</a></li>
            
          </ul>
        </div>

        <div class="footer_col">
          <h4>Siga-nos</h4>
          <div class="social-links">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>


      </div>
    </div>

  </footer>

  <!--=====SCRIPTS======-->
  <script src="js/menu.js"></script>
  <script src="js/main.js"></script>
  <script src="js/leiamais.js"></script>
  <script src="js/faq.js"></script>
  <script src="js/video-selector.js"></script>
  <script src="js/animate.js"></script>


  <!--=====SLICK SCRIPT====-->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Swiper JS -->
  <!--Uncomment this line-->
  <script src="js/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <!--Uncomment this line-->
  <script src="js/cardslide.js"></script>
</body>

</html>