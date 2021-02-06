<?php

 if(isset($_POST['search']))
 {

      $search = $_POST['search'];

      $hit_url = "https://www.google.com/search?q=$search";

      $curl = curl_init();

      curl_setopt($curl, CURLOPT_URL,$hit_url);

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      $content = curl_exec($curl);

      echo $content;

 }
 else
 {
     echo "Error in the code ";
 }


?>