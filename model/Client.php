<?php

class Client {

    private $props = ['id' => '', 'nome' => '', 'idade' => '', 'endereço' => '', 'cpf' => '', 'rg' => ''];

    public function __construct($dataClient) {
        $this->setProps($dataClient);
    }

    public function __set($name, $value) {
        if (key_exists($name, $this->props)) {
            $this->props[$name] = $value;
        }
    }

    public function __get($name) {
        if (key_exists($name, $this->props)) {
            return $this->props[$name];
        }
    }

    public function getData() {
        return $this->props;
    }

    private function setProps($data) {
        foreach ($data as $key => $value) :
            if (key_exists($key, $this->props)) :
                $this->props[$key] = $value;
            endif;
        endforeach;
    }

    public static function All($order = 'asc') {
        include './data/clients.php';
        if ($order === 'desc'):
            usort(
                    $clients, function( $a, $b ) {
                return ($a->id < $b->id );
            }
            );
        endif;
        return $clients;
    }

    public static function find($cli_id) {
        include './data/clients.php';
        foreach ($clients as $client) {
            if ($client->id == $cli_id):
                return $client;
            endif;
        }
        return;
    }

}
