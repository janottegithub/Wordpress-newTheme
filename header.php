<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>

    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
   <header class="sticky-top">
   <!--
   <div class="container">

       <?php /*wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
        ); */?>
   </div>
    -->
   <div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="#"><img  class="myLogo" src="<?php echo get_theme_file_uri('assets/img/Deloitte.png') ?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-2 active">
                <a class="nav-link" href="<?php echo site_url()?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo site_url('/?page_id=15')?>">about us</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo site_url('/?page_id=18')?>">Contact us</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
           
        </ul>
        <!--
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
        <div class="login-container">
            <form class="form-inline mt-2 mt-md-0" action="/action_page.php">
                <input class="form-control ml-2" type="text" placeholder="Username" name="username">
                <input  class="form-control ml-2"type="text" placeholder="Password" name="psw">
                <button  class="form-control ml-2"type="submit">Login</button>
            </form>
        </div>
    </div>
</div>


<!-- nav end -->

</header>