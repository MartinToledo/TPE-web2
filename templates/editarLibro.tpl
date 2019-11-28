{include file="header.tpl"}
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Editar:</h2>
            </header>
            {foreach from=$ImagenesLibro item=imagenLibro}
                <img width="200px" src="./imagesLibros/{$imagenLibro['id_imagen']}">
                <button><a href="EliminarImagenLibro/{$imagenLibro['id_imagen']}/{$libro['id_libro']}">ELIMINAR IMAGEN</a></button>
            {/foreach}
            <form method="post" action="modificarLibro/{$libro["id_libro"]}">
                <div>
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" value="{$libro["titulo"]}">
                </div>
                <div>
                    <label for="descripcion">Descripcion:</label>
                    <textarea name="descripcion">{$libro["descripcion"]}</textarea>
                </div>
                <div>
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" value="{$libro["autor"]}">
                </div>
                <div>
                    <label for="editorial">Editorial:</label>
                    <input type="text" name="editorial" value="{$libro["editorial"]}">
                </div>
                <div>
                    <label for="edad">Edades:</label>
                    <input type="text" name="edad" value="{$libro["edad"]}">
                </div>
                <div>
                    <label for="genero">Generos:</label>
                    <select name="genero">
                        {foreach from=$generos item=genero}
                                <option value="{$genero['id_genero']}" {if $genero["id_genero"] == $libro["id_genero"]} selected {/if}>{$genero['nombre']}</option>
                        {/foreach}
                    </select>
                </div>
                <input type="submit" value="Guardar Modificaciones">
            </form>
            <form method="post" action="agregarImagenLibro/{$libro["id_libro"]}" enctype="multipart/form-data" autocomplete="off">
                <label for="imagen">Seleccione La Imagen Que Desea Adjuntar:</label>
                <div>
                    <input type="file" name="imagen" accept="image/*">
                </div>
                <input type="submit" value="Adjuntar Imagen al Libro">
            </form>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>