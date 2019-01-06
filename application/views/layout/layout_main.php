<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link href=<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?> rel="stylesheet" type="text/css"/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href=<?php echo base_url('assets/bootstrap/css/Css-Ion.css');?> rel="stylesheet" type="text/css"/>
<link href=<?php echo base_url('assets/bootstrap/css/styles.css');?> rel="stylesheet" type="text/css"/>


</head>
<body>
 <nav class="navbar navbar-static-top navbar-inverse">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo base_url('loginProjekt'); ?>">Login</a>
                    <a class="navbar-brand" href="<?php echo base_url('registerProjekt'); ?>">Registration</a>
                    <a class="navbar-brand" href="<?php echo base_url('articles'); ?>">Articles</a>
                </div>
               
        <?php
            $this->load->view('menu');
        ?>
               
                  </div>
 </nav>
    <article>
        <div class="container">
                <?php
            echo $content;
                ?>
                
        </div>
 </article>
<script src='<?php echo base_url('resources/jquery/jquery.js');?>' type="text/javascript"></script>
<script src='<?php echo base_url('resources/boostrap/js/bootstrap.min.js');?>' type="text/javascript"></script>
</body>
</html>

        
        