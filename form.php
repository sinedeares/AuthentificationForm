<?php
    include "index.html";


    if (isset($_POST)){
        // $db = new SQLite3(authentication.db);
        $name = $_POST['name'];
        echo "Введённое имя пользователя: "."<br>";
        $password = $_POST['password']; 
        echo "Введённый пароль: ". md5($password)."<br>";
        // "Insert INTO users (name, age) VALUES ('$name', '$password')";
        // $db -> close();
    }