<?php
    $iptNumUsers = readline("Quantos usuários aleatórios deseja gerar? ");
    if(!is_numeric($iptNumUsers)) return print_r("Digite um número válido!\n");

    $numUsers = (int)$iptNumUsers;
    if($numUsers < 1) return print_r("Digite um número maior que 0!\n");
    if($numUsers > 10) return print_r("O máximo de usuários que podem ser gerados é 10!\n");

    $apiUrl = "https://random-data-api.com/api/v2/users?size=$numUsers";
    $urlResponse = file_get_contents($apiUrl);

    $users = json_decode($urlResponse, true);
    print_r("\n--- Usuários gerados ---\n\n");
    foreach($users as $user) {
        print_r("Nome: {$user['first_name']} {$user['last_name']}\n");
        print_r("Email: {$user['email']}\n");
        print_r("Endereço: {$user['address']['street_name']}, {$user['address']['city']} - {$user['address']['state']}\n");
        print_r("Telefone: {$user['phone_number']}\n");
        print_r("\n");
    }
    
    return true; 
?>