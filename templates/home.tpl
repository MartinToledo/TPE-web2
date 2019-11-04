{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>{$Titulo}</h2>
        </header>
        <article class="libro">
            {foreach from=$Libros item=libro}
                <ul class="lista">
                    <li>LIBRO: {$libro['titulo']}</li>
                    <li>AUTOR: {$libro['autor']}</li>
                    <li>EDITORIAL: {$libro['editorial']}</li>
                    <li>CATEGORIA: <a href="Genero/{$libro['id_genero']}">{$libro['nombre']}</a></li>
                    <li>EDAD: {$libro['edad']}</li>
                    <button><a href="Libro/{$libro['id_libro']}">VER LIBRO</a></button>
                </ul>
            {/foreach}
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>