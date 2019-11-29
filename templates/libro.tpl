{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>{$Libro['titulo']}</h2>
        </header>
        <article class="libro">
            {foreach from=$ImagenesLibro item=imagenLibro}
                <img width="200px" src="./imagesLibros/{$imagenLibro['id_imagen']}">
            {/foreach}
            <ul class="lista">
                <li>AUTOR: {$Libro['autor']}</li>
                <li>EDITORIAL: {$Libro['editorial']}</li>
                <li>CATEGORIA: <a href="Genero/{$Libro['id_genero']}">{$Libro['nombre']}</a></li>
                <li>EDAD: {$Libro['edad']}</li>
                <li>DESCRIPCION: {$Libro['descripcion']}</li>
                {if $Permisos == 1}
                    <button><a href="EditarLibro/{$Libro['id_libro']}/">EDITAR</a></button>
                    <button><a href="EliminarLibro/{$Libro['id_libro']}/">ELIMINAR</a></button>
                {/if}
            </ul>
            <input type="hidden" name="libroId" value="{$Libro['id_libro']}">
            {include file="comentarios.tpl"}
            {if ($Permisos == 0) || ($Permisos == 1)}
                <form id="form-comentario" action="" method="post">
                    <label>Valoración:</label>
                    <select class="valoracion" name="orden">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                    <label>Escribe tu comentario:</label>
                    <textarea name="contenidoComentario" placeholder="Comentario"></textarea>
                    <input type="submit" value="Agregar Comentario">
                </form>
            {/if}
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