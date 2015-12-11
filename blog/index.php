<?php
session_start();
ob_start();

define('WP_USE_THEMES', false);

// Suponiendo que la carpeta de WordPress 4.4 se llama "blogbase"
require('../blogbase/wp-blog-header.php');
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="../favicon.png">

    <link rel="stylesheet" href="../css/bootstrap-min.css">
    
    <link rel="stylesheet" href="../css/animate-min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../js/rs-plugin/css/settings-min.css">

    <link rel="stylesheet" href="../css/estilos1-min.css">
    
    <script type="text/javascript" src="../js/modernizr.custom.32033-min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="../img/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <header>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="fa fa-bars fa-lg"></span>
                </button>
                <a id="logotipo" class="navbar-brand" href="../index.html">
                    <img src="../img/logo.png" alt="" class="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html#somos">Quienes somos</a>
                    </li>
                    <li><a href="../index.html#hacemos">Que hacemos</a>
                    </li>
                    <li><a href="../index.html#estamos">Donde estamos</a>
                    </li>
                    <li><a href="../index.html#empleos">Empleos</a>
                    </li>
                    <li><a href="../index.html#videos">Testimonios</a>
                    </li>
                    <li><a href="../index.html#contactanos">Contactanos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
	</nav>

    </header>

	<div class="wrapper">
		<section id="formulario">
	        <div class="container">
	            <div class="section-heading scrollpoint sp-effect3">
	                <h1>Blog</h1>
	                <div class="divider"></div>
	                <p>Seguí nuestras historias y testimonios</p>
	            </div>
				<div class="col-md-12 col-sm-12 scrollpoint sp-effect1">
                    <big><strong><u>Entradas más recientes:</u></strong></big>
                </div>
                <?php
                $posts = get_posts('numberposts=20&order=DESC&orderby=date');

                foreach ($posts as $post) : setup_postdata( $post ); ?>    
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                     
                    <h2 id="post-<?php the_ID(); ?>">
					<a href="ver_blog.php?id=<?php the_ID(); ?>" rel="bookmark" title="Link a <?php the_title_attribute(); ?>">
					<?php the_title(); ?></a></h2>                                                            
					<small><?php the_time('d-m-Y H:i A') ?> por <strong><?php the_author() ?></strong></small><br>
				    <?php                
                    $charlength = 140;
                    $excerpt = get_the_excerpt();
                    $charlength++;

                    if ( mb_strlen( $excerpt ) > $charlength ) {
                        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
                        $exwords = explode( ' ', $subex );
                        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
                        if ( $excut < 0 ) {
                            echo mb_substr( $subex, 0, $excut );
                        } else {
                            echo $subex;
                        }

                        echo "<a href='ver_blog.php?id=".$post->ID."' rel='bookmark'>[ ... ]</a>";
                    } else {
                        echo $excerpt;
                    }
                    ?>
                    <br>
                    <br>	
                    <?php comments_number( 'Sin comentarios', '1 Comentario', '% Comentarios' ); ?>
                </div>
                <br>
                <br>
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                
                    &nbsp;             
                </div>
                <?php
                endforeach;                
                ?>                                                                        
	        </div>    
	    </section>
	</div>    
    
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/placeholdem.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();
     	});

        // Esto hace que el menu compacto se cierre después del click
        $('.navbar-collapse a').click(function() {
            $('.navbar-collapse').collapse('hide');
        });		               
    </script>
    
</body>
</html>