<html>
    <head>
        <title>Lohit Pereira</title>
        <!--link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css"-->
        <link rel="icon" href="<?=base_url()?>/assets/images/logo.png" type="image/gif">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="<?php echo base_url();?>assets/js/javascript.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
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
                        <li><a href="<?php echo base_url(); ?>posts/create" class="navlink">Create Post</a></li>
                        <li><a href="<?php echo base_url(); ?>categories/create" class="navlink">Create Category</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       <?php 
        if($this->session->flashdata('flash_message')){
            echo $this->session->flashdata('flash_message');
        }
       ?>
        
