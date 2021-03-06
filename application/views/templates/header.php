<html>
    <head>
        <title>Lohit Pereira</title>
        <!--link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css"-->
        <link rel="icon" href="<?=base_url()?>/assets/images/logo.png" type="image/gif">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
        <?php 
            if($assets){
                foreach ($assets["css"] as $key => $cssAsset) {
                    echo '<link rel="stylesheet" href="'.$cssAsset.'">';
                }
            }
        ?>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    </head>
    <body <?php if(isset($bgimg)){echo "background='".$bgimg."' ";}?> style="margin: 0; width:100%; height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
        <nav>
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
                    <span class="glyphicon glyphicon-th" aria-hidden="false"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>">
                      <img alt="Brand" height="25" width="25" src="<?php echo base_url()."assets/images/logo.png";?>">
                  </a>
                </div>
                <div class="collapse navbar-collapse" id="navigationbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>" class="navlink">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about" class="navlink">About</a></li>
                        <li><a href="<?php echo base_url(); ?>posts/index" class="navlink">Blog</a></li>
                        <li><a href="<?php echo base_url(); ?>categories/index" class="navlink">Categories</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li><a href="<?php echo base_url(); ?>users/login" class="navlink">Login</a></li>
                        <li><a href="<?php echo base_url(); ?>users/register" class="navlink">Register</a></li>
                        <?php endif; ?>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        <li><a href="<?php echo base_url(); ?>posts/create" class="navlink">Create Post</a></li>
                        <li><a href="<?php echo base_url(); ?>categories/create" class="navlink">Create Category</a></li>
                        <li><a href="<?php echo base_url(); ?>users/logout" class="navlink">Log Out</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
       <?php 
        if($this->session->flashdata('flash_message')){
            echo $this->session->flashdata('flash_message');
        }
       ?>
        
