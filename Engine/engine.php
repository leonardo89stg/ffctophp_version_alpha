
<?php  

      //Retorna o conteudo do arquivo em formato de string
   $json = file_get_contents('config/config_data.json'); 


   //Decodificando a string e criando o json
   $host = json_decode($json); 
   $user = json_decode($json); 
   $pass = json_decode($json); 
   $db = json_decode($json); 

  $host->host;
  $user->user;
  $pass->pass;
  $db->data;





   ?>