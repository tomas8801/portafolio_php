<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?=url_base?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=url_base?>assets/css/estilos.css">
        <link rel="stylesheet" href="<?=url_base?>assets/css/lightbox.css">

        <title>Tomas Marsili Portafolio</title>
    </head>
    <body>

    <div class="container">

        <div class="row">

    
            <div class="col-md-12">
                    <ul class="filters nav" >
                        <li><a href="<?=url_base?>page/index">Projects</a></li>
                        <li><a href="<?=url_base?>page/certifications">Certifications</a></li>
                        <li><a href="<?=url_base?>page/contact">Contact</a></li>

                        <?php if(Utils::isAdmin()) : ?>
                            <li><a href="<?=url_base?>project/upload" >Upload</a></li>
                            <li><a href="<?=url_base?>project/management" >Management</a></li>
                            <li><a href="<?=url_base?>admin/logout">Logout</a></li>
                        <?php else :?>
                            <li><a href="<?=url_base?>page/admin" class="float-right">Login</a></li>                         
                        <?php endif; ?>
                        
                        <?php if(Utils::isAdmin()) :  ?>
                            <li><a href="#" style="color: #cecece;cursor:auto;"><small>Admin Mode</small></a></li>
                        <?php endif;?>

                    </ul>

            </div>