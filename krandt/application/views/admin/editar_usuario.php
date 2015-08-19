<title>Krandt | Administrador</title>
<div id="pre-page-content">
  <h1><i class="glyphicon-edit themed-color"></i> <?=$segmento?><br><small><?=$contenido['titulo']?></small></h1>
</div>
<div id="page-content">
    <form method="POST">
        <div class="control-group">
            <label>Nombre:</label>
            <input type="text" class="input-xxlarge" name="nombre" value="<?=$usuario['nombre']?>" required autofocus>
        </div>
        <div class="control-group">
            <label>Apellido:</label>
            <input type="text" class="input-xxlarge" name="apellido" value="<?=$usuario['apellido']?>" required>
        </div>
        <div class="control-group">
            <label>Empresa:</label>
            <input type="text" class="input-xxlarge" name="empresa" value="<?=$usuario['empresa']?>">
        </div>
        <div class="control-group">
            <label>Email:</label>
            <input type="email" class="input-xxlarge" name="email" value="<?=$usuario['email']?>" required>
        </div>
        <div class="control-group">
            <label>Password:</label>
            <input type="password" class="input-xxlarge" name="password">
        </div>
        <div class="control-group">
            <label>Categoría:</label>
            <select name="categoria" class="input-xxlarge">
                <option value="3"<?=($usuario['categoria']=="3")?" selected":""?>>Control de Accesos</option>
                <option value="8"<?=($usuario['categoria']=="8")?" selected":""?>>Tiempo y Asistencia</option>
                <option value="19"<?=($usuario['categoria']=="19")?" selected":""?>>Visitas</option>
                <option value="28"<?=($usuario['categoria']=="28")?" selected":""?>>Comedor</option>
                <option value="37"<?=($usuario['categoria']=="37")?" selected":""?>>Video IP</option>
            </select>
        </div>
        <div class="control-group">
            <button type="submit" class="btn btn-success"><i class="icon-edit"> Modificar</i></button>
        </div>
    </form>
    
    
</div>