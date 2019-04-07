<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event,adresse_rue) 
 VALUES (:title, :start_event, :end_event, :adresse_rue)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':adresse_rue' => $_POST['adresse_rue']
  )
 );
}


?>