<?php
/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 06/12/2020
 * 00:30:19
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();

if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJson->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':/*
//Procedimiento para agregar

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            $stmt = $Db->Sentencia("EXEC Com.sp_AgReAdjudicacion ?, ?");

            $stmt->bindParam(1, $_REQUEST{'StrObservaciones'});
            $stmt->bindParam(2, $_REQUEST{'NumAdjuInsumo'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

*/
        break;

    case 'PUT':
        //Procedimiento para modificar
        /* try {
             $Db = new Database();
             if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                 echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                 exit(0);
             }

             $stmt = $Db->Sentencia("EXEC cita.sp_ModMedico ?, ?, ?, ?, ?, ?");

             $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});
             $stmt->bindParam(2, $_REQUEST{'CitStrNombre'});
             $stmt->bindParam(3, $_REQUEST{'CitStrApellido'});
             $stmt->bindParam(4, $_REQUEST{'CitStrDireccion'});
             $stmt->bindParam(5, $_REQUEST{'CitStrTelefono'});
             $stmt->bindParam(6, $_REQUEST{'CitStrCorreoElec'});

             $stmt->execute();
             $data = $stmt->fetchAll();
             $data = $data[0];
             echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
             $stmt->closeCursor();
         } catch (PDOException $p) {
             echo $ObjectJson->Json(0, $p->getMessage(), null);
         }*/
        break;
    case 'DELETE':
//Procedimiento para Eliminar
        /* try {
             $Db = new Database();
             if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                 echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                 exit(0);
             }

             $stmt = $Db->Sentencia("EXEC cita.sp_elimMedico ?");

             $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});

             $stmt->execute();
             $data = $stmt->fetchAll();
             $data = $data[0];
             echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
             $stmt->closeCursor();
         } catch (PDOException $p) {
             echo $ObjectJson->Json(0, $p->getMessage(), null);
         }*/
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['mostAutoridades'])){
            $data = $Db->GetData("SELECT * FROM seguridad.Autoridades WHERE CharEstado = 'A'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}