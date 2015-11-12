<?php
?>

<!DOCTYPE html>
<html>

<head>
	<!-- caniuse.com 
	bootStrap menu Builder
	http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/
	meu^^-->
  <meta charset="UTF-8">
  <title>Sobre</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>static/css/css-personalizada.css">
</head>

<body>
<img src= <?php echo base_url();?>static/img/LOGO.jpg>
</img>
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href=<?php echo base_url();?>index.php/welcome/index>Home</a>
                </li>
                <li><a href=<?php echo base_url();?>index.php/welcome/produtos>Produtos</a>
                </li>
                <li><a href=<?php echo base_url();?>index.php/welcome/sobre>Sobre</a>
                </li>
                <li><a href=<?php echo base_url();?>index.php/welcome/fale>Fale conosco</a>
                

            </ul>
        </div>
    </div>
</div>
    <div container>
    	<h1>Sobre nós</h1>
    	<p>o contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.


</div>
<div class="row">
    
    <p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p> </p>
	<div class="col-lg-4 col-sm-6">
	<h2></h2>
	<img src=<?php echo base_url();?>static/img/images6.jpg class="img-responsive"></img>
	<p> O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p> </p>
	</div>
	<div class="col-lg-4 col-sm-6">
	<h2></h2>
	<img src=<?php echo base_url();?>static/img/colecionando.jpg class="img-responsive" width="220px" height="200px"></img>
	<p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>  </p>
	</div>
	<div class="col-lg-4 hidden-md col-sm-6">
	<h2></h2>
	<img src=<?php echo base_url();?>static/img/33.jpg class="img-responsive"></img>
	<p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>  
	</div>
</div>




<div class="clearfix"></div>

<footer id="footer">
		<div class="container">
			<div class="text-center"> 		
				
				<p class="text-muted">
				Copyright ©2015
				</p>
			</div>
		</div>
	</footer>
 

</div>
</body>

</html>