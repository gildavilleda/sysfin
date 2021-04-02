<?php
/**
 * Created by PhpStorm.
 * User: ZRoxana
 * Date: 21/11/2020
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

            $stmt = $Db->Sentencia("EXEC Presu.Sp_AggDetTarjeta ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");


            $stmt->bindparam(1, $_REQUEST{'DatRegistro'});
            $stmt->bindparam(2, $_REQUEST{'StrTipoDocumento'});
            $stmt->bindparam(3, $_REQUEST{'StrNoDocumento'});
            $stmt->bindparam(4, $_REQUEST{'StrDescripcion'});
            $stmt->bindparam(5, $_REQUEST{'NumApModPresupuestaria'});
            $stmt->bindparam(6, $_REQUEST{'NumSolPedido'});
            $stmt->bindparam(7, $_REQUEST{'NumRegCompremetido'});
            $stmt->bindparam(8, $_REQUEST{'NumRegDengado'});
            $stmt->bindparam(9, $_REQUEST{'NumRegPagado'});
            $stmt->bindparam(10, $_REQUEST{'NumSaldoComprometer'});
            $stmt->bindparam(11, $_REQUEST{'NumSaldoDevegar'});
            $stmt->bindparam(12, $_REQUEST{'NumSaldoPagado'});
            $stmt->bindparam(13, $_REQUEST{'NumPartida'});

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

            $stmt = $Db->Sentencia("EXEC     ?,?,?,?,?,?,?,?,?,?,?,?,?");

            $stmt->bindparam(1, $_REQUEST{'DatRegistro'});
            $stmt->bindparam(2, $_REQUEST{'StrTipoDocumento'});
            $stmt->bindparam(3, $_REQUEST{'StrNoDocumento'});
            $stmt->bindparam(4, $_REQUEST{'StrDescripcion'});
            $stmt->bindparam(5, $_REQUEST{'NumApModPresupuestaria'});
            $stmt->bindparam(6, $_REQUEST{'NumSolPedido'});
            $stmt->bindparam(7, $_REQUEST{'NumRegCompremetido'});
            $stmt->bindparam(8, $_REQUEST{'NumRegDengado'});
            $stmt->bindparam(9, $_REQUEST{'NumRegPagado'});
            $stmt->bindparam(10, $_REQUEST{'NumSaldoComprometer'});
            $stmt->bindparam(11, $_REQUEST{'NumSaldoDevegar'});
            $stmt->bindparam(12, $_REQUEST{'NumSaldoPagado'});
            $stmt->bindparam(13, $_REQUEST{'NumPartida'});


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

           if(isset($_REQUEST['mostTabla'])){
               $numPartida = $_REQUEST['numPartida'];
               $data = $Db->GetData("SELECT * FROM Presu.DetTarjeta  WHERE NumPartida = $numPartida", $_SESSION['dbUser'], $_SESSION['dbPass']);
           }



           echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
           break;

       default:
           echo $ObjectJson->Json('0', 'Request no definido', null);
           break;

}



