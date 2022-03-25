<?php
require_once "lib/nusoap.php";
function getAlimentos($datos) {
    if ($datos == "Alimentos") {
        return join(",", array(
            "Tacos",
            "Hamburguesa",
            "Pizza",
            "hot dog"));
        }
        else {
            return "No hay alimentos";
        }
    }
    $server = new soap_server();
    $server->register("getAlimentos"); 
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);


?>

