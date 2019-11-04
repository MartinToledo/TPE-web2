{include file="headerAdmin.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>{$Titulo}</h2>
        </header>
        <article>
            <form method="post" action="insertarLibro">
                <div>
                    <label for="tituloLibro">Titulo</label>
                    <input type="text" name="tituloLibro" id="tituloLibro" placeholder="Titulo">
                </div>
                <div>
                    <label for="descripcionLibro">Descripcion</label>
                    <input type="text" name="descripcionLibro" id="descripcionLibro" placeholder="Descripcion">
                </div>
                <div>
                    <label for="autorLibro">Autor</label>
                    <input type="text" name="autorLibro" id="autorLibro" placeholder="Autor Libro">
                </div>
                <div>
                    <label for="editorialLibro">Editorial</label>
                    <input type="editorialLibro" name="editorialLibro" id="editorialLibro" placeholder="Editorial Libro">
                </div>
                <div>
                    <label for="edadLibro">Edades</label>
                    <input type="edadLibro" name="edadLibro" id="edadLibro" placeholder="edadLibro">
                </div>
                <label for="edadLibro">Edades</label>
                <select name="generoLibro">
                    {foreach from=$Libros item=libro}
                        <option value="{$libro['nombre']}">Volvo</option>
                    {/foreach}
                </select>
                <button type="submit">Enviar</button>
            </form>
        </article>
        <article>
            <form method="post" action="insertarGenero">
                <div>
                    <label for="nombreGenero">Titulo</label>
                    <input type="text" name="nombreGenero" id="nombreGenero" placeholder="Nombre">
                </div>
            </form>
        </article>
        <article class="libro">
            {foreach from=$Libros item=libro}
                <ul class="lista">
                    <li>LIBRO: {$libro['titulo']}</li>
                    <li>AUTOR: {$libro['autor']}</li>
                    <li>EDITORIAL: {$libro['editorial']}</li>
                    <li>CATEGORIA: <a href="Genero/{$libro['id_genero']}">{$libro['nombre']}</a></li>
                    <li>EDAD: {$libro['edad']}</li>
                    <button><a href="Libro/{$libro['id_libro']}">VER LIBRO</a></button>
                    <button><a href="editarLibro/{$libro['id_libro']}">BORRAR LIBRO</a></button>
                    <button><a href="editarLibro/{$libro['id_libro']}">EDITAR LIBRO</a></button>
                </ul>
            {/foreach}
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>