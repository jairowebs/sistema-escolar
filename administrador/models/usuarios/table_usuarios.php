<?php 

require_once '../../../includes/conexion.php';

$sql = 'SELECT * FROM usuarios as u INNER JOIN rol as r ON u.rol = r.rol_id WHERE u.estado !=0 ';
$query =$pdo->prepare($sql);
$query->execute();

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($consulta);$i++ ) {
   if($consulta[$i]['estado'] ==1){
        $consulta[$i]['estado'] = '<span class="btn btn-outline-success" >Activo</span>';
   }else{
        $consulta[$i]['estado'] = '<span class="btn btn-outline-danger" >Inactivo</span>';
   }
    $consulta[$i]['acciones'] = '
    <button  class="btn btn-outline-primary" title="Editar" onclick="editarUsuario('.$consulta[$i]['usuario_id'].')" >Editar </button>
    <button  class= "btn btn-outline-danger" title="Eliminar" onclick="eliminiarUsuario('.$consulta[$i]['usuario_id'].')" >Eliminar </button>' ;
}
echo json_encode($consulta,JSON_UNESCAPED_UNICODE);