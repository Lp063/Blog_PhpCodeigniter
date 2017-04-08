<html>
    <head>
        <title>Lp</title>
        <!--link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css"-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
        
        
    </head>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="<?php echo base_url();?>assets/js/javascript.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
    <body <?php if(isset($bgimg)){echo "background='".$bgimg."' ";}?> style="margin: 0; width:100%; height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <img alt="Brand" height="25" width="25" src="<?php echo base_url()."assets/images/logo.png";?>">
                    </a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>posts/index">Blog</a></li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        
