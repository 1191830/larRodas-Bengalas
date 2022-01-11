<?php

class conexao
{
     public static function conectar()
     {
          $SERVER = "ctespbd.dei.isep.ipp.pt";
          $DB     = "DSOS_Grupo4_2021";
          $USER   = "DSOS_Grupo4_2021";
          $PASS   = "2021G4789!";
          try {
               $PDO = new PDO("sqlsrv:Server=$SERVER;Database=$DB", $USER, $PASS);
               $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               return $PDO;
          } catch (PDOException $e) {
               $PDO = null;
          }
     }

}

// $SERVER = "ctespbd.dei.isep.ipp.pt";
// $DB     = "DSOS_Grupo4_2021";
// $USER   = "DSOS_Grupo4_2021";
// $PASS   = "2021G4789!";

// Class conexao{

//      public function conectar(){
//           $SERVER="ctespbd.dei.isep.ipp.pt";
//           $DB="DSOS_Grupo4_2021";
//           $USER="DSOS_Grupo4_2021";
//           $PASS="2021G4789!";

          // $CONNECTION = array( "Database"=>$DB, "UID"=>$USER, "PWD"=>$PASS);
          // try{
          //      #$conn = sqlsrv_connect( $SERVER, $CONNECTION);
          //      $PDO = new PDO("sqlsrv:Server=$SERVER;Database=$DB", $USER, $PASS);
          //      $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // }catch(PDOException $ERRO){
          //      echo("Ocorreu um erro: {$ERRO->getMessage()}");
          //      $PDO = null;
          // }

//           return $PDO;
//      }
// }
