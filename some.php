


<?php
$date = [
    'title' => $_POST['title'],
    'content' => $_POST['content']
];

$connect = new PDO('mysql:host=localhost; dbname=ajax', 'root', '');

$sql = "INSERT INTO `post` (title, content) VALUES (:title, :content)";

$statsment = $connect->prepare($sql);

$result = $statsment->execute($date);
var_dump($result);
