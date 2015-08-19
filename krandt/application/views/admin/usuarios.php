<title>Krandt | Administrador</title>
<div id="pre-page-content">
  <h1><i class="glyphicon-edit themed-color"></i> <?=$segmento?><br><small><?=$contenido['titulo']?></small></h1>
</div>
<div id="page-content">
    <form method="POST">
        <div class="control-group">
            <label>Nombre:</label>
            <input type="text" class="input-xxlarge" name="nombre" required autofocus>
        </div>
        <div class="control-group">
            <label>Apellido:</label>
            <input type="text" class="input-xxlarge" name="apellido" required>
        </div>
        <div class="control-group">
            <label>Empresa:</label>
            <input type="text" class="input-xxlarge" name="empresa">
        </div>
        <div class="control-group">
            <label>Email:</label>
            <input type="email" class="input-xxlarge" name="email" required>
        </div>
        <div class="control-group">
            <label>Password:</label>
            <input type="password" class="input-xxlarge" name="password" required>
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
            <button type="submit" class="btn btn-success"><i class="icon-plus"> Agregar</i></button>
        </div>
    </form>
    
    <table class="table">
        <thead>
            <tr>
                <th class="span1 text-center">Nombre</th>
                <th class="span1 text-center">Apellido</th>
                <th class="span1 text-center">Empresa</th>
                <th class="span1 text-center">Email</th>
                <th class="span1 text-center">Categoria</th>
                <th class="span1 text-center">&nbsp;</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario) { ?>
            <tr>
                <td class="span1 text-center"><?=$usuario['nombre']?></td>
                <td class="span1 text-center"><?=$usuario['apellido']?></td>
                <td class="span1 text-center"><?=$usuario['empresa']?></td>
                <td class="span1 text-center"><?=$usuario['email']?></td>
                <td class="span1 text-center"><?=$usuario['seccion']?></td>
                <td class="span1 text-center"><a href="/admin/editar_usuario/<?=$usuario['idusuario']?>/">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>