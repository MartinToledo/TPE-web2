{include file="header.tpl"}
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Crear Libro</h2>
            </header>
            <form class="crear" method="post" action="agregarLibro">
                <div>
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" placeholder="Titulo">
                </div>
                <div>
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" placeholder="Autor">
                </div>
                <div>
                    <label for="editorial">Editorial:</label>
                    <input type="text" name="editorial" placeholder="Editorial">
                </div>
                <div>
                    <label for="edad">Edades:</label>
                    <input type="text" name="edad" placeholder="edad">
                </div>
                <div>
                    <label for="genero">Genero:</label>
                    <select name="genero">
                        {foreach from=$Generos item=genero}
                            <option value="{$genero['id_genero']}">{$genero['nombre']}</option>
                        {/foreach}
                    </select>
                </div>
                <div>
                    <p>Descripción:</p>
                    <textarea class="contenidoDescripcion" name="descripcion" placeholder="Descripcion"></textarea>
                </div>
                <input type="submit" value="Agregar Libro">
            </form>
        </article>
        <article>
            <header class="cabeceraArt">
                <h2>Crear Genero</h2>
            </header>
            <form class="crear" method="post" action="agregarGenero">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                    <input type="submit" value="Agregar Genero">
            </form>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>