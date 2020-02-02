        <input type="hidden" id="jsBaseUrl" value="<?php echo base_url(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script src="<?php echo base_url();?>assets/js/javascript.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/json2html-master/jquery.json2html.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/json2html-master/json2html.js"></script>

        <?php 
            foreach ($assets["js"] as $key => $jsAsset) {
                echo '<script type="text/javascript" src="'.$jsAsset.'"></script>';
            }
        ?>

        <script>
            /* CKEDITOR.replace('editor1'); */
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-105309754-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
