<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">


                <img src="assets/images/pi.jpg" valign="center" width="200">

                <h1>I will calculate PI for you!!!!</h1>
                

                <?php
                
                
                    #$pi = file_get_contents('http://demo-publi-1vrd2syp8jf86-2115760593.eu-west-1.elb.amazonaws.com/pi-test.php');
                    $pi = file_get_contents('http://pi.copilot-demo.local/pi.php');
                    echo '<b>' . $pi . ' </b>'; 
                    
                ?>

            </div>
        </div>

        <script src="assets/js/bootstrap.min.js"></script>
        
        <?php echo '<script type="text/javascript">document.body.style.background = "#' . $color . '" </script>';  ?>
        
        
    </body>

</html>
