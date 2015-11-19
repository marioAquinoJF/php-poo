<?php
require_once 'controllers/ClientController.php';
$clients = Client::All();
//   showTableHead($clients[0]->getData());
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title ></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="./css/app.css" >
    </head>     
    <body>
        <div class="container">




            <?php
            if (!isset($_GET['page'])):
                $_GET['order'] = !isset($_GET['order']) ? 'asc' : $_GET['order']; 
                ClientController::namesList($_GET['order']);
            else :
                $pg = explode("-", $_GET['page']);
                switch ($pg[0]) {
                    case "showClient":
                        $id = str_replace('id:', '', $pg[1]);
                        ClientController::show($id);
                        break;

                    default:
                        ClientController::namesList();
                        break;
                }
            endif;
            ?>
        </div>
        <script>document.getElementsByTagName("TITLE")[0].text = document.getElementById("title").innerHTML;</script>
    </body>
</html>
