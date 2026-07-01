<?php
    // $host = "ep-green-night-acel3qx9-pooler.sa-east-1.aws.neon.tech";
    // $dbname = "neondb";
    // $user = "neondb_owner";
    // $password = "npg_FjBSx9AWV6nQ";
    // try {
    //     $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;sslmode=require;options='endpoint=ep-green-night-acel3qx9'";
    //     $pdo = new PDO($dsn, $user, $password);
    //     echo "Conectado com sucesso!<br>";
    //     // $stmt = $pdo->prepare('SELECT * FROM "USUARIO"');
    //     // $stmt->execute();
    //     // // $stmt = $pdo->prepare('SELECT * FROM "USUARIO" WHERE nome = :nome');
    //     // // $stmt->execute(['nome' => 'Rocha']);
    //     // $resultado = $stmt->fetchAll();
    //     // foreach($resultado as $result => $user){
    //     //     echo $user["id"]. $user['nome'] .$user['senha']."<br>";
    //     //     // echo var_dump($user) . "<br>";
    //     // }
    // } catch (PDOException $e) {
    //     echo "Erro: " . $e->getMessage();
    // }
    header('content-type: application/json');
    echo json_encode([
        'ok'  => true,
        'php' => PHP_VERSION,
        'sapi'=> php_sapi_name(),
    ]);