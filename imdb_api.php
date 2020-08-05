<?php
    $data = file_get_contents('https://imdb-api.com/es/API/SearchTitle/k_VflX9TLz/Inception%202010');
    $json = json_decode($data);

    // var_dump($json->{'results'});

    // echo'<pre>';
    //     print_r($json->results);
    // echo '</pre>';

    foreach($json->results as $value){
        echo $value->title.'<br>';
        echo '<img src="'.$value->image.'" witdth="250" height="250"> <hr>';
    }
?>

