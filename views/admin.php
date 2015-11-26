<!DOCTYPE html>
<html>
<head>
	<!-- caniuse.com 
	bootStrap menu Builder
	http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/
	meu^^-->
  <meta charset="UTF-8">
  <title>ADMIN</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/css-personalizada.css">
</head>

<body>
<a href=<?php echo base_url();?>index.php/welcome/index><img src= <?php echo base_url();?>static/img/LOGO.jpg></a>
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <h1>ADIMIN</h1>
                
            </ul>
        </div>
    </div>
</div>
    <div class="container">
    <div id="contact">
    adicione uma noticia .
    <form action="/index.php/Welcome/insertProd" method="POST">
        <fieldset>
            <input type="text" id="email" name="titulo" placeholder="titulo" />
            
            <label for="name">Noticia:</label>
            <textarea type="text" id="name" name="noticia" placeholder="Nome"> </textarea>
           
            <label for="name">Autor:</label>
            <input type="text" id="email" name="autor" placeholder="autor" />
           
            
           
             <input type="submit" onclick="Enviar();" id="enviar" value="Enviar" />
           
           
        </fieldset>
    </form>
</div>
    </div>
		</form>
		</div>
	</div>
</div>

        
    
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