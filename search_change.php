<?php

session_start();



include_once 'db.php';



if (isset($_POST['search_word'])){

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $search_word = validate($_POST['search_word']);

    if(empty($search_word)){

        header("Location: search.php?error=Search word is required");

        exit();

    }
else{

    header("Location: search.php?search_word=$search_word & error=$search_word");

    exit();

}

}else{

    header('Location: home.php');

    exit();

}

    
?>
