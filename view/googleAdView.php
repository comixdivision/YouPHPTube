<html>
    <head>
        <style>
            html, body{
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <?php
        require_once '../config/configuration.php';
        echo $config->getAdsense();
        ?>
    </body>
</html>