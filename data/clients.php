<?php

if (!function_exists("genCPF")):

    function genCPF($base) {
        return $base + rand(600, 1200);
    }

endif;

if (!function_exists("genRG")):

    function genRG($base, $uf) {
        return $uf . '/' . ($base + rand(60, 120));
    }

endif;


$baseCpf = 123456789102;
$baseRG = 123000;
$clientsData = [
    ['nome' => 'Mário', 'idade' => 30, 'endereço' => 'Av São João - São Paulo/SP', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'SP')],
    ['nome' => 'Márcio', 'idade' => 45, 'endereço' => 'Av Getúlio Vargas - São Paulo/SP', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'SP')],
    ['nome' => 'João', 'idade' => 20, 'endereço' => 'Av Presidente Vargas - Rio de Janeiro/RJ', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'RJ')],
    ['nome' => 'Maria', 'idade' => 25, 'endereço' => 'Av Getúlio Vargas - Juiz de Fora/MG', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'MG')],
    ['nome' => 'Bárbara', 'idade' => 38, 'endereço' => 'Av Barão do Rio Branco - Juiz de Fora/MG', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'MG')],
    ['nome' => 'Rosa', 'idade' => 26, 'endereço' => 'Av Beira Mar - Recife/PE', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'PE')],
    ['nome' => 'Yousef', 'idade' => 20, 'endereço' => 'Av Presidente Vargas - Rio de Janeiro/RJ', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'RJ')],
    ['nome' => 'Georgia', 'idade' => 25, 'endereço' => 'Av Getúlio Vargas - Juiz de Fora/MG', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'MG')],
    ['nome' => 'Marta', 'idade' => 38, 'endereço' => 'Av Barão do Rio Branco - Juiz de Fora/MG', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'MG')],
    ['nome' => 'Rita', 'idade' => 26, 'endereço' => 'Av Beira Mar - Recife/PE', 'cpf' => genCPF($baseCpf), 'rg' => genRG($baseRG, 'PE')]
];

// Cria Objetos
$clients = [];
foreach ($clientsData as $key => $data) {
    $id = ['id' => ++$key ];
    $clients[] = new Client(array_merge($data, $id));
}