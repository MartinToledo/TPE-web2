{include file="header.tpl"}
    <section class="producto">
        <header class="cabeceraArt">
            <h2>{$Libro['titulo']}</h2>
        </header>
        <article class="libro">
            {foreach from=$ImagenesLibro item=imagenLibro}
                <img class="libro" src="./imagesLibros/{$imagenLibro['id_imagen']}">
            {/foreach}
            <p>AUTOR: {$Libro['autor']}</p>
            <p>EDITORIAL: {$Libro['editorial']}</p>
            <p>CATEGORIA: <a href="Genero/{$Libro['id_genero']}">{$Libro['nombre']}</a></p>
            <p>EDAD: {$Libro['edad']}</p>
            <p>DESCRIPCION: {$Libro['descripcion']}</p>
            {if $Permisos == 1}
                <button><a href="EditarLibro/{$Libro['id_libro']}/">EDITAR LIBRO</a></button>
                <button><a href="EliminarLibro/{$Libro['id_libro']}/">ELIMINAR LIBRO</a></button>
            {/if}
            <input type="hidden" name="libroId" value="{$Libro['id_libro']}">
            {if ($Permisos == 0) || ($Permisos == 1)}
                <form class="comentar" id="form-comentario" action="" method="post">
                    <label>Valoración:</label>
                    <select class="valoracion" name="orden">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                    <label>Escribe tu comentario:</label>
                    <textarea class="contenidoComentario" name="contenidoComentario" placeholder="Comentario"></textarea>
                    <input type="submit" value="Agregar Comentario">
                </form>
            {/if}
            {include file="comentarios.tpl"}
        </article>
    </section>
    {include file="publicidad.tpl"}
    <script src="./js/visitante.js"></script>
    {if ($Permisos == 0) || ($Permisos == 1)}
        <script src="./js/usuario.js"></script>
        {if $Permisos == 1}
            <script src="./js/admin.js"></script>
        {/if}
    {/if}
  </body>
</html>