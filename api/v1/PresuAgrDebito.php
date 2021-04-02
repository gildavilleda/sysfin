<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 26/11/2020
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

            $stmt = $Db->Sentencia("EXEC Presu.Sp_AggDebito_Partida ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'DateRegistro'});
            $stmt->bindParam(2, $_REQUEST{'NumModPres'});
            $stmt->bindParam(3, $_REQUEST{'StrTipoDocument'});
            $stmt->bindParam(4, $_REQUEST{'StrNoDocument'});
            $stmt->bindParam(5, $_REQUEST{'DateFechaComp'});
            $stmt->bindParam(6, $_REQUEST{'StrDescripcion'});
            $stmt->bindParam(7, $_REQUEST{'NumPartida'});



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
/*    case 'PUT':

        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC     ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'DateRegistro'});
            $stmt->bindParam(2, $_REQUEST{'NumInicial'});
            $stmt->bindParam(3, $_REQUEST{'NumModPres'});
            $stmt->bindParam(4, $_REQUEST{'NumPrepVig'});
            $stmt->bindParam(5, $_REQUEST{'StrCompMod'});
            $stmt->bindParam(6, $_REQUEST{'DateFechaComp'});
            $stmt->bindParam(7, $_REQUEST{'NumPartida'});



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
        $NumPartida = $_REQUEST['NumPartida'];
        $data = $Db->GetData("SELECT * FROM Presu.ResumenMovimiento  where NumPartida = $NumPartida", $_SESSION['dbUser'], $_SESSION['dbPass']);


        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
*/

}









