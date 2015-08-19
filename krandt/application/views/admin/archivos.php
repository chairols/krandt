<title>Krandt | Administrador</title>
<div id="pre-page-content">
  <h1><i class="glyphicon-edit themed-color"></i> <?=$segmento?><br><small><?=$contenido['titulo']?></small></h1>
</div>
<div id="page-content">
    <form method="POST" enctype="multipart/form-data">
        <div class="control-group">
            <label>Nombre:</label>
            <input type="text" class="input-xxlarge" name="nombre" required autofocus>
        </div>
        <div class="control-group">
            <label>Categoría:</label>
            <select name="categoria" class="input-xxlarge">
                <option value="3">Control de Accesos</option>
                <option value="8">Tiempo y Asistencia</option>
                <option value="19">Visitas</option>
                <option value="28">Comedor</option>
                <option value="37">Video IP</option>
            </select>
        </div>
        <div class="control-group">
            <label>Archivo:</label>
            <input type="file" class="input-xxlarge" name="archivo" required>
        </div>
        <div class="control-group">
            <button type="submit" class="btn btn-success"><i class="icon-plus"> Agregar</i></button>
        </div>
    </form>
    
    <table class="table">
        <thead>
            <tr>
                <th class="span1 text-center">Nombre</th>
                <th class="span1 text-center">Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($archivos as $archivo) { ?>
            <tr>
                <td class="span1 text-center"><a href="/upload/<?=$archivo['archivo']?>" target="_blank"><?=$archivo['nombre']?></a></td>
                <td class="span1 text-center"><?=$archivo['seccion']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>