<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>
   
    <header id="header">
     <div class="container">

         <div class="header">
            <div class="navbar">
                <a><i class="fa">&#xf002;</i></a>
                <div class="right-side">
                    <a href="#home">HOME</a>
                    <a href="#about">ABOUT</a>
                    <a href="#services">SERVICES</a>
                    <a href="#works">WORK</a>
                    <a href="#footer">CONTACT</a>
                </div>
            </div>
            <div class= "title">
                <div class="bigtitle">
                    <h1>CREATIVE DIGITAL PROJECT</h1>
                        <div class="smalltitle">
                             <h2>Duils mollis, est non commodo luctus, nisi erat portitor ligula, eget lacinia odio sem nec elit.</h2>
                        </div>
                </div>
            </div>
        </div>
     </div>
    </header>
        