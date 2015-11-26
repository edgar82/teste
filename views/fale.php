<!DOCTYPE html>
<html>
<head>
	<!-- caniuse.com 
	bootStrap menu Builder
	http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/
	meu^^-->
  <meta charset="UTF-8">
  <title>Fale conosco</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/css-personalizada.css">
   <script type="text/javascript" src="<?php echo base_url();?>static/js/script.js"></script>
</head>

<body>
<a href=<?php echo base_url();?>index.php/welcome/index><img src= <?php echo base_url();?>static/img/LOGO.jpg></a>
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
                <li><a href=<?php echo base_url();?>index.php/welcome/news>News</a>
                </li>
                <li><a href=<?php echo base_url();?>index.php/welcome/listarNot>Noticias</a>
                </li>
                <li><a href=<?php echo base_url();?>index.php/welcome/formlogin>Login</a>
                </li>
                <li><a href=<?php echo base_url();?>index.php/welcome/fale>Fale conosco</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
    <div class="container">
    <div id="contact">
    <h1>Fale conosco</h1>
    <form action="/index.php/Welcome/doPost" method="POST">
        <fieldset>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="nome" placeholder="Nome" />
           
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="E-mail" />
           
            <label for="message">Mensagem:</label>
            <textarea id="message" name="mensagem" placeholder="Mensagem"></textarea>
           
             <input type="submit" onclick="Enviar();" id="enviar" value="Enviar" />
           
           
        </fieldset>
    </form>
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