<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Pet Shop Mauel</title>
</head>
<body>
    <div class="container">
        <header>
        <nav>
            <img id="logo" src="img/logo.png" alt="PetShopMauel" width="100">
            <ul>
                <li id="home"><a href="index.php">Home</a></li>
                <li><a href="Cadastro.php">Cadastro</a></li>
                <li id="serv">Serviços
                    <ul>
                        <li><a href="Banho.php">Banho</a></li>
                        <li><a href="Tosa.php">Tosa</a></li>
                    </ul>
                </li>
                <li><a href="Consulta.php">Consulta</a></li>
            </ul>        
        </nav>
            <h1 id="inicio" class="inicio">Seja bem vindo ao Pet Shop Mauel</h1>
        </header>
        <main>
            <p class="infor">Nosso Pet shop visa ter os melhores preços possiveis para que todos os animais possam ter uma boa saúde, por isso como pode ver temos promoções diferentes toda semana.</p>
            <div class="promo_semana">
                <ul>
                    <li><img src="img/adote.jpg" alt="Promoção na semana 1">
                        <p>Na semana 27/07 a 01/07 estaremos com a promoção ao quem adotar um cão com uma de nossas parceiras irão ganha uma tosa um banho e uma consulta grátis.</p>
                    </li> <br>
                    <li><img src="img/consulta.jpg" alt="Promoção na semana 2">
                        <p>Na semana de 04/07 a 08/07 estaremos com 40% de desconto em qualquer consulta marcada previamente.</p>
                    </li>
                    <li><img src="img/tosa.jpg" alt="Promoção na semana 3">
                        <p>Na semana de 11/07 a 15/07 estaremos com promoção de até 70% na tosa, válido para apenas 1 cachorro por dono.</p>
                    </li>
                    <li><img src="img/banho.jpg" alt="Promoção na semana 4">
                        <p>Na semana de 18/07 a 22/07 estaremos disponibilizando banhos, feito por voluntários ao custo de apenas 1 real, apenas caso adquirido antes do dia 11.</p>
                    </li>
                </ul>
            </div>
        </main>
        <section>
            <p class="infor">Aqui temos alguns cards para os nossos clientes mais fieis</p>
            <div class="section-container">
                
                <ul>
                    <li>
                            <img src="img/100 em produtos.jpg">
                            <h3>
                                Promoção
                            </h3>
                            <p>
                            Com esse card você tem direito a um número para concorrer a 100 reais em produtos aqui na loja, válido para uma pessoa por cpf.
                        </p>
                    </li>
                    <li>
                            <img src="img/banho e tosa.jpg" alt="">
                                <h3>
                                    Promoção
                                </h3>
                                <p>
                                Ao adquirir um banho e uma tosa você estará participando de um sorteio de um dia no SPA para seu Pet, o que está esperando, adquira já seu banho e tosa.</p>
                            
                    </li>
                    <li>
                            <img src="img/vacina.jpg" alt="">
                            <h3>
                                Promoção
                            </h3>
                            <p>
                            Em breve nossa loja começará a aplicar vacinas, com esse card você ganha até 50% de desconto.
                        </p>               
                    </li>
                </ul>
            </div>
        </section>
        <section2>
            <div class="section2-container">
                    <ul>
                        <p id="noticia">Uma noticia por dia só aqui na Pet Mauel</p>
                    <li>
                        <p id = "adote">Após ser encontrado atropelado, o cãozinho Avelar foi acolhido por Stella Petrovitz Barreto, mãe de Helena, uma menina de 2 anos, diagnosticada com Transtorno do Espectro Autista (TEA).

Inicialmente, a ideia era apenas dar um lar temporário ao cachorro e depois encaminhá-lo para adoção. Porém, a ligação de Helena com o cãozinho foi tão forte que ele acabou virando um membro da família.<a href="https://catracalivre.com.br/carrefour-causa-animal/4-historias-de-adocao-de-animais-que-vao-encher-seu-coracao-de-amor/" target="_blank" > Continuar lendo!</a></p>
                       </li>
                    
                            <form action="verifica.php" method="post">
                                <textarea name="comentario_home" id="coment_index" placeholder="Deixe Seu comentário sobre o artigo"></textarea>
                                <div id="input"><input type="submit" value="Enviar" ></div>
                            </form>
                </ul>
            </div>
        </section2>
        
    </div>
    <footer>
                <p class="copyright">© Desenvolvedor Emanuel - 2022</p>
                <p><div class="foot"><a href="server.php">Acessar meus dados cadastrados</a></div></p>
    </footer>
</body>
</html>