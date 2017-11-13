<html>
    <head>
        <title>Worker</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-ui.css">        
        
        <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>        

    </head>
    <body style="background-color: #009999;">
        <?php defined('BASEPATH') OR exit('No direct script access allowed');
        $user_type = $this->session->userdata('user_type');                
        ?>        
        <div class="container">
        <?php header("Cache-Control: max-age=300, must-revalidate"); ?>
            <div class="col-lg-12 col-lg-offset-0">
                

