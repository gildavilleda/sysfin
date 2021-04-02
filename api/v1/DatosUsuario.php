<?php
/**
 * Created by PhpStorm.
 * User: mcamey
 * Date: 08/01/2021
 * Time: 09:51 AM
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
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
//Procedimiento para agregar o modificar
      /*  try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC seguridad.AgoModifPermisos ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'SegNumPermisos'});
            $stmt->bindParam(2, $_REQUEST{'SegStrNomPermiso'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, "" . $p->getMessage(), null);
        }*/

        break;

    case 'PUT':
        //Procedimiento para modificar
        if(isset($_REQUEST['PuestoUsuario'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                $stmt = $Db->Sentencia("EXEC [seguridad].[sp_ModPuestoUsuario] ?, ?");
                $stmt->bindParam(1, $_REQUEST{'SegNumUsuario'});
                    $stmt->bindParam(2, $_REQUEST{'SegStrPuesto'});
                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['AreaUsuario'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC [seguridad].[sp_ModAreaUsuario] ?, ?");

                $stmt->bindParam(1, $_REQUEST{'SegNumUsuario'});
                $stmt->bindParam(2, $_REQUEST{'SegStrArea'});
                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }


        break;

    case 'DELETE':
//Procedimiento para Eliminar
      /*  try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC seguridad.sp_elimPermiso ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'SegNumPermisos'});
            $stmt->bindParam(2, $_REQUEST{'SegStrNomPermiso'});
            $stmt->bindParam(3, $_REQUEST{'SegStrDescripcion'});
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, " " . $p->getMessage(), null);
        }*/
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        $Wh = new WhereDinamic();

        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['validarPA'])){
            $data = $Db->GetData("SELECT * FROM seguridad.Usuario WHERE SegStrUsuario = '".$_SESSION['dbUser']."' ", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);

        break;

}
