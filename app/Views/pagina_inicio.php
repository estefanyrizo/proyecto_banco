<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servicios bancarios</title>

    <meta name="description" content="Acceso al servicio de banca en linea">
    <meta name="author" content="Diseño de Ap!icaciones Web">

    <link href= <?php echo base_url(), "/public/css/bootstrap.min.css" ?> rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="#">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Qui&eacute;nes somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Banca Personas</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#">Centro de Atenci&oacute;n</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Servicios</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                         
                         <?php
                            echo anchor('Acceso/acceso', 'Banca personas', ['class'=>'dropdown-item']);
                         ?> 
                         <a class="dropdown-item" href="#">Banca Empresarial</a> 
                         <a class="dropdown-item" href="#">PYMES</a>
						<div class="dropdown-divider">
				</li>
			</ul>
			<div class="carousel slide" id="carousel-302779">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-302779" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-302779">
					</li>
					<li data-slide-to="2" data-target="#carousel-302779">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src= <?php echo base_url() . "/public/imagenes/bn_01.jpg"?>>
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src= <?php echo base_url() . "/public/imagenes/bn_02.jpg"?>>
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src=<?php echo base_url() . "/public/imagenes/bn_03.jpg"?>>
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" rc=<?php echo base_url() . "/public/imagenes/bn_02.jpg"?>>
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src=<?php echo base_url() . "/public/imagenes/bn_03.jpg"?>>
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src=<?php echo base_url() . "/public/imagenes/bn_04.jpg"?>>
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-302779" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-302779" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
			

			<div class="row">
				<div class="col-md-6">
					<h5>
					No se que es lo mejor					</h5>
				</div>
				<div class="col-md-6">
					<h5>
						h3. Lorem ipsum dolor sit amet.
					</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src=<?php echo base_url() . "/public/imagenes/ahorro.jpg"?>>
					<h5>
					Cuenta de ahorro
					</h5>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
				</div>
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src=<?php echo base_url() . "/public/imagenes/tarjeta.jpg"?>>
					<h5>
						Tarjetas de credito
					</h5>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
				</div>
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src=<?php echo base_url() . "/public/imagenes/cambio.jpg"?>>
					<h2>
						Mesa de cambio
					</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
            <div class="col-md-4">

                <address>
                    <strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
			<div class="col-md-4">

<address>
	<strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
</div>
<div class="col-md-4">

<address>
	<strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
</div>
        </div>
</div>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>
</html>