<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 20/11/2020
 * Time: 14:35 PM
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
    case 'POST':
//Procedimiento para agregar

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Presu.Sp_AggPresupuesto ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'NumSubProducto'});
            $stmt->bindParam(2, $_REQUEST{'NumPrograma'});
            $stmt->bindParam(3, $_REQUEST{'NumSubPrograma'});
            $stmt->bindParam(4, $_REQUEST{'NumProyecto'});
            $stmt->bindParam(5, $_REQUEST{'NumActividad'});
            $stmt->bindParam(6, $_REQUEST{'NumObra'});
            $stmt->bindParam(7, $_REQUEST{'NumRenglon'});
            $stmt->bindParam(8, $_REQUEST{'NumFte'});
            $stmt->bindParam(9, $_REQUEST{'NumOrg'});
            $stmt->bindParam(10, $_REQUEST{'NumCorr'});
            $stmt->bindParam(11, $_REQUEST{'NumAsignado'});






            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

        break;

    //Procedimiento para modificar
    case 'PUT':

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC     ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");

              $stmt->bindParam(1, $_REQUEST{'NumSubProducto'});
              $stmt->bindParam(2, $_REQUEST{'NumPrograma'});
              $stmt->bindParam(3, $_REQUEST{'NumSubPrograma'});
              $stmt->bindParam(4, $_REQUEST{'NumProyecto'});
              $stmt->bindParam(5, $_REQUEST{'NumActividad'});
              $stmt->bindParam(6, $_REQUEST{'NumObra'});
              $stmt->bindParam(7, $_REQUEST{'NumRenglon'});
              $stmt->bindParam(8, $_REQUEST{'NumFte'});
              $stmt->bindParam(9, $_REQUEST{'NumOrg'});
              $stmt->bindParam(10, $_REQUEST{'NumCorr'});
              $stmt->bindParam(11, $_REQUEST{'NumAsignado'});



            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }

        break;

    case 'GET':
        //Procedimiento para Mostrar

        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if(isset($_REQUEST['principal'])){
            $data = $Db->GetData("SELECT * FROM Presu.Partida ", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}








