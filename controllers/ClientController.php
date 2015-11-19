<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientController
 *
 * @author Mario
 */
require_once './model/Client.php';

class ClientController {

    public function show($id) {

        $client = Client::find($id);
        include './views/showClient.php';
    }

    public static function namesList($order = 'asc') {
        $clients = Client::All($order);
        include_once './views/clientsList.php';
    }

}
