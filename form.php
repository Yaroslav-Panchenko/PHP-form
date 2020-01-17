<?php
if(isset($_POST["send"])) {
    $name = htmlentities($_POST['name']);
    $surname = htmlentities($_POST['surname']);
    $age = htmlentities($_POST['age']);
    $date = htmlentities($_POST['date']);
    $family_status = htmlentities($_POST['family_status']);
    $social_status = htmlentities($_POST['social_status']);
    $location = htmlentities($_POST['location']);
    $comment = htmlentities($_POST['comment']);
    $before_field = htmlentities($_POST['before_field']);
    $email = htmlentities($_POST['email']);

    if (isset($_POST['sex'])) {
        $sex = $_POST['sex'];
    }else {
        $sex = '-';
    };

    if (isset($_POST['position'])) {
        $position = $_POST['position'];
    }else {
        $position = '-';
    };

    if (isset($_POST['format'])) {
        $format = $_POST['format'];
    }else {
        $format = '-';
    };

    if (isset($_POST['books'])) {
        $books = $_POST['books'];
    }else {
        $books = '-';
    };

    if (isset($_POST['task'])) {
        $task = $_POST['task'];
    }else {
        $task = '-';
    };

    if (isset($_POST['weekend'])) {
        $weekend = $_POST['weekend'];
        foreach($weekend as $item){
            $weekend_array = implode($weekend, "; ");
        } 
    }else {
        $weekend_array = '-';
    };
  
    if (isset($_POST['spam'])) {
        $spam = $_POST['spam'];
        foreach($spam as $item){
            $spam_array = implode($spam, "; ");
        } 
    }else {
        $spam_array = '-';
    };

    $data = "
    ------------Анкетные данные------------
    Имя: $name
    Фамилия: $surname
    Пол: $sex
    Возраст: $age
    Дата рождения: $date
    Семейное положение: $family_status
    Социальный статус: $social_status
    Местоположение: $location
    Что вы обычно делаете на выходных: $weekend_array
    Рассказать о форматах в книге, посвященной HTML: $format
    Сколько книг вы прочитали за свою жизнь: $books
    Ваши комментарии: $comment
    Позиция: $position
    Email: $email
    Категория рассылки спама: $spam_array
    На сколько сложная задача: $task
    ";

    file_put_contents('data.txt', "$data", FILE_APPEND); 
    header ("Location: done.html");
} 
?>


