<div id="pre-page-content">
    <h1><i class="glyphicon-edit themed-color"></i> <?=$segmento?><br><small><?=$contenido['titulo']?></small></h1>
</div>
<div id="page-content">
    <form method="post">
        <div class="control-group">
            <label>Título: </label>
            <input type="text" class="input-xxlarge" name="titulo" value="<?=$contenido['titulo']?>">
        </div>
        <div class="control-group">
            <label>Contenido:</label>
            <textarea class="ckeditor" name="texto" rows="10"><?=$contenido['texto']?></textarea>
        </div>
        <div class="control-group">
            <button type="submit" class="btn btn-success"><i class="icon-pencil"></i> Actualizar</button>
        </div>
    </form>
</div>
<script type="text/javascript" src="/assets/sitio/ckeditor/ckeditor.js"></script>