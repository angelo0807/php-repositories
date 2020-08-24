
<?php 

class Header {

    var $title;

    public function orgheader(){
    ?>
        <!DOCTYPE html>
        <html>
                <head>

                <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                <link rel="stylesheet" type="text/css" href="styles/styles.css" />

            
                <title><?php echo $title; ?></title>
                </head>
    <?php
        }
        }

?>