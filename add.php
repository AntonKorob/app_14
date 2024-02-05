<?php
require "config.php";

$task = $_POST["task"];

if ($task == "") {
    echo "Введите само задание" . '<br>';
    
    echo '<a href="/app_14/index.php"><button style="background: #c7dfff;
    border: 2px solid #456cee;
    border-radius: 10px;
    padding: 10px ;
    margin-bottom: 10px;
    width: 10%;
    "
    type="submit">Назад</button></a>';
    exit(); 
}

       
    
    $sql = "INSERT INTO tasks (task) VALUES (:task)" ;

    $query = $pdo->prepare($sql);
    $query->execute(["task" => $task]);

    
 header ('Location: /app_14/index.php');