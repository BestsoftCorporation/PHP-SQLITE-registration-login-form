<?php
session_start();
    
   if (isset($_GET["add"])){
      if($error!=1){
               class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql ="INSERT INTO USERS (ID,NAME,SURNAME,USERNAME,CITY,JMBG,MAIL,PASSWORD)"."\n"."VALUES ('".$_GET["add"]."', '".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["username"]."', '".$_POST["city"]."', ".$_POST["jmbg"].", '".$_POST["mail"]."', '".$_POST["password"]."');";



   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
}
}

include 'header.php';
        ?>
