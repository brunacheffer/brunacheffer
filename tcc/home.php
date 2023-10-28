
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mystic Floricultura</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/Home.css'>

</head>
<body style="margin:auto; width:1000px;">
<!--inicio nav bar-->
	<header><nav>
        <div class="logo "><a href="index.html"><img src="IMAGENS/logotccc.jpeg" width="70px"></a></div>
        <div class="links">
        <ul class="nav-itens">
            <li><a href="arranjos.php">Arranjos</a></li>
            <li><a href="buques.php">Buquês</a></li>
            <li><a href="cestas.php">Cestas</a></li>
			<li><a href="vasos.php">Vasos</a></li>
        </ul>
    </div>
    <div class="button">
        <button><a href="login.php" class="cadastro">Login</a></button>
        <button><a href="cadastro.php" class="cadastro">Cadastro</a></button>
</div>
    </nav>
</header>
<!--fim navbar-->
<!--incio carrosel-->
<hr>
<section class="container"    >
	<div class="slide fade">
		<div class="numeroslide">1/4</div>
		<img class="imgslide" src="IMAGENS/principal.png">
		
	</div>
	<div class="slide fade">
		<div class="numeroslide">2/4</div>
		<img class="imgslide" src="IMAGENS/arranjos.png">
		
	</div>
	<div class="slide fade">
		<div class="numeroslide">3/4</div>
		<img class="imgslide" src="IMAGENS/buques.png" >
		
	</div>
	<div class="slide fade">
		<div class="numeroslide">4/4</div>
		<img class="imgslide" src="IMAGENS/cestas.png" >
		
	</div>
                    <a class="botaoA" onclick="mudarSlide(-1)">&lsaquo;</a>
                    <a class="botaoP" onclick="mudarSlide(1)">&rsaquo;</a>
            </section>
                    <section style="text-align: center;">
                        <span class="indicador" onclick="slideAtual(1)"></span>
                        <span class="indicador" onclick="slideAtual(2)"></span>
                        <span class="indicador" onclick="slideAtual(3)"></span>
                        <span class="indicador" onclick="slideAtual(4)"></span>
                    </section>               
    </header>   
                    <script type="text/javascript" src="js/home.js"></script>
					<!--fim carrosel-->
                    <img src="IMAGENS/Produtos.jpg" width="990px">
                    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!--inicio cards-->
<div class="cards">
	<div class="card">
	  <h2 class="card-title">Arranjos</h2>
	  <a href="arranjos">
		  <img src="IMAGENS/arranjo.jpeg" alt="">
	  </a>
		  <p class="card-desc"></p>
	  </div>
	<div class="card">
	  <h2 class="card-title">Buquês</h2>
	  <a href="#">
		<img src="IMAGENS/buque.jpeg" alt="">
	  </a>
	  <p class="card-desc"></p>
	</div>
	<div class="card">
	  <h2 class="card-title">Cestas</h2>
	  <img src="IMAGENS/cesta.jpeg" alt="">
	  <p class="card-desc"></p>
	</div>
  </div>
  <!--fim cards-->
  <footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <!-- elemento -->
                <span><b>MYSTIC FLORICULTURA</b></span>
                <p>Desperte seus sentidos no jardim da flora mística e encantadora</p>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <!-- elemento -->
                <span><b>Contatos</b></span>
                <p>mystic@gmail.com</p>
                <p>+55 00 00000-0000</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <!-- elemento -->
                <span><b>produtos</b></span>
                <p><a href="arranjos.php">Arranjos</a></p>
                <p><a href="buques.php">Buquês</a></p>
                <p><a href="cestas.php">Cestas</a></p>
                <p><a href="vasos.php">Vasos</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <span><b>Redes sociais</b></span>
                <!--<p>Políticas de Privacidade</p>--> 
            </div>
            <div class="flex">
                <div class="redes">
                <a href="https://www.instagram.com/brunadfcheffer/"> <img src="imagens/instagram.png" width="50px" >
                </div>
                <div class="redes">
                <a href="https://www.facebook.com/profile.php?id=100083120926193"><img src="imagens/facebook.png" width="50px">
                </div>
                <div class="redes">
                <img src="imagens/twitter.png" width="50px">
                </div>
                <div class="redes">
                  <!-- <img src="imagens/whatsapp.png" width="50px">--->
                </div>
            </div>
        </div>
    </div>
    <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
</footer>
		
	<p class="m-b-footer"> MYSTIC - 2023, todos os direitos reservados.</p> 
	<p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="#" title="Seu nome">BRUNA</a></p> 

</div>
</body>
</html>    