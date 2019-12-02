{include file="header.tpl"}
    <section class="productos">
        <header class="cabeceraArt">
            <h2>{$Titulo}</h2>
        </header>
        {foreach from=$Libros item=libro}
            <article class="libros">
                <ul>
                    <li>LIBRO: {$libro['titulo']}</li>
                    <li>AUTOR: {$libro['autor']}</li>
                    <li>EDITORIAL: {$libro['editorial']}</li>
                    <li>CATEGORIA: <a href="Genero/{$libro['id_genero']}">{$libro['nombre']}</a></li>
                    <li>EDAD: {$libro['edad']}</li>
                    <button><a href="Libro/{$libro['id_libro']}">VER LIBRO</a></button>
                {if $Permisos == 1}
                    <button><a href="EditarLibro/{$libro['id_libro']}/">EDITAR</a></button>
                    <button><a href="EliminarLibro/{$libro['id_libro']}/">ELIMINAR</a></button>
                {/if}
                </ul>
            </article>
        {/foreach}
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>