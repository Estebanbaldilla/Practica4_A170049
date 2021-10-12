<?php
require_once "lib/nusoap.php";
function getfrutas($datos){
    if($datos == "frutas")
    {
        return join(",",array("
        Sandia","papaya","manzana","uva","aguacate","Platano"));
    }
    else
    {
        return "No Hay frutas";
    }
}
$server = new soap_server();//Se crea la instancia de soap
$server->register("getfrutas");//Indica el metodo o funcion a devolver
if( !isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA=file_get_contents( 'php://input' );
$server->service($HTTP_RAW_POST_DATA);
?>