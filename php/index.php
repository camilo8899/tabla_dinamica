<?php
phpinfo();
include "conex.php";
$link  = conectarse();
$resul = mysqli_query("select*from alumnos", $link);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            <meta charset="utf-8">
                <title>
                    Document
                </title>
            </meta>
        </link>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="jumbotron ">
                    <h1>
                        Listado de Alumnos
                    </h1>
                </div>
                <div>
                    <form class="form-inline"" action="bus.php" method="post">
                    <div class="form-group">
                        <input class="form-control" id="b" name="b" placeholder="Ingrese un codigo o Nombre a buscar" type="text">
                                            <button type="submit" type="button" name="buscar" class="btn btn-primary" >
  Buscar 
  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
                                   </div>

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Nuevo 
</button>
                        
                    </form>
                </div>             
                
  
                <table class="table table-striped col-md-4 col-xs-6">
                    <thead>
                        <tr>
                            <th>
                                codigo
                            </th>
                            <th>
                                nombre
                            </th>
                            <th>
                                Telefono
                            </th>
                            <th>
                                Direccion
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>

                        <?php
while ($fila = mysqli_fetch_array($resul)) {
    echo '<tr>
        <td>' . $fila['codigo'] . '</td>
        <td>' . $fila['nombres'] . '</td>
        <td>' . $fila['telefono'] . '</td>
        <td>' . $fila['direccion'] . '</td>
        <td>
       <!-- <a class="btn btn-info" href="update.php?id='.$fila['codigo'].'">Editar</a> -->
      <a class="btn btn-info" href="delete.php?id='.$fila['codigo'].'">Eleminar</a>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
  Editar
</button>
        </td>
        
    </tr>';
}
?>

                </table>
            </div>
        </div>

         <script crossorigin="anonymous" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" src="https://code.jquery.com/jquery-3.2.1.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
  
        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de datos</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>
                        Mantenimiento de alumnos
                    </h3>
                    <form action="insertar.php" id="formulario" method="POST" name="formulario">
                        <div class="form-group">
                            <label for="nombre">
                                Codigo
                            </label>
                            <input class="form-control" id="codigo" name="codigo" placeholder="Tu codigo" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="asunto">
                                Nombres
                            </label>
                            <input class="form-control" id="nombre" name="nombre" placeholder=" Escribe tu nombre" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Telefono
                            </label>
                            <input class="form-control" id="telefono" name="telefono" placeholder="telefono " required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">
                                Direccion
                            </label>
                            <input class="form-control" id="direccion" name="direccion" placeholder="Direcion " required="" type="text">
                            </input>
                        </div>
                        <input class="btn btn-primary" id="enviar" name="guardar" type="submit" value="Guardar datos"/>
                        
                       
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
        <!--fin modal -->
        <!-- Modal para editar -->

        <!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de datos</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>
                        Edicion de Alumnos
                    </h3>
                    <form action="Update.php" id="formulario" method="POST" name="formulario">
                        <div class="form-group">
                            <label for="nombre">
                                Codigo
                            </label>
                            <input class="form-control" id="codigo" name="codigou" placeholder="Tu codigo" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="asunto">
                                Nombres
                            </label>
                            <input class="form-control" id="nombre" name="nombreu" placeholder=" Escribe tu nombre" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Telefono
                            </label>
                            <input class="form-control" id="telefono" name="telefonou" placeholder="telefono " required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">
                                Direccion
                            </label>
                            <input class="form-control" id="direccion" name="direccionu" placeholder="Direcion " required="" type="text">
                            </input>
                        </div>
                        <input class="btn btn-primary" id="enviar" name="guardar" type="submit" value="Guardar datos"/>                        
                       
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
        <!-- Modal para editar -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="conecta.js"></script>
    </body>
</html>
