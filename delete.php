<!DOCTYPE html> 
<html>  
<head> 
    <link rel="stylesheet" href="css/style.css">  
    <?php include_once('index.php') ?>  
</head> 
<body> 
<?php

if (isset($_POST['delete'])) {
    foreach ($newToDo as $key => $value) {
        if( $value == $_POST['deleteId']) {
            unset($newToDo[$key]);
            $newToDo = array_values($newToDo);
        }
    }
    $serializedArray = serialize($newToDo);
    $serializedArray = base64_encode($serializedArray);
    setcookie("newToDo", $serializedArray, time()+36000);
    header("Location: http://localhost/assignment1-ToDoList/"); 
    createTable($newToDo);
}
?>

</body> 
</html> 