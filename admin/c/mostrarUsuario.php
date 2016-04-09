<?php 
header('Content-Type: text/html; charset=UTF-8'); 

include("../../m/usuario.php");
include("../../m/grupo.php");

function mostrarTodosUsuarios(){

  $result = mostrarTodosUsua();

  if($result){
    while($row = $result->fetch_assoc()) {
      $todosUsuarios = "<tr>
      <td>".$row["nombreUsuario"]." ".$row["primerApellido"]." ".$row["segundoApellido"]."</td>
      <td>".$row["correo"]."</td>
      <td>".$row["telefono"]."</td>
      <td>".$row["celular"]."</td>
      <td>".$row["nombreGrupo"]."</td>
      <td class='tcenter'>
        <div class='btn-group'>
          <button class='btn btn-sm btn-alert' onclick='verUsuario(".$row["idUsuario"].")'>
            <i class='imoon imoon-info text-default'></i>
          </button>
        </div>
      </td>
      <td class='tcenter'>
        <div class='btn-group'>
          <button class='btn btn-sm btn-info' onclick='mostrarPagos(".$row["idUsuario"].")'>
            <i class='fa fa-money text-default'></i>
          </button>
        </div>
      </td>
      <td class='tcenter'>
        <div class='btn-group'>
          <button class='btn btn-sm btn-warning pastel' onclick='generarComprobante(".$row["idUsuario"].")'>
            <i class='fa fa-clipboard text-default'></i>
          </button>
        </div>
      </td>
      <td class='tcenter'>
        <div class='btn-group'>
          <a href='#' class='btn btn-sm btn-system' onclick='editarUsuario(".$row["idUsuario"].")'>
            <i class='imoon imoon-pencil text-default'></i>
          </a>
        </div>
      </td>
      <td class='tcenter'>
        <div class='btn-group'>
          <button class='btn btn-sm btn-danger' onclick='eliminar(".$row["idUsuario"].")'>
            <i class='imoon imoon-remove2 text-default'></i>
          </button>
        </div>
      </td>
    </tr>";
    echo $todosUsuarios;
    }
  }else{
    echo "No hay alumnos registrados";
  }
}

function mostrarTodosGrupos(){
  $result = mostrarTodosGrup();
  
  if($result == 0){
   $todosGrupos = "<option value='0'>No hay alumnos registrados</option>";
   echo $todosGrupos;
 }else{
  while($row = $result->fetch_assoc()) {
    $todosGrupos = "<option value='".$row["idGrupo"]."'>".$row["nombre"]."</option>";
    echo $todosGrupos;
  }
 }
}

?>