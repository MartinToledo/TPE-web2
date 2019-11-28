{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>{$Titulo}</h2>
        </header>
        <article class="libro">
            <ul class="lista">
                {foreach from=$Generos item=genero}
                    <li><a href="Genero/{$genero['id_genero']}">{$genero['nombre']}</a></li>
                    {if $Permisos == 1}
                        <button><a href="EditarGenero/{$genero['id_genero']}/">EDITAR</a></button>
                        <button><a href="EliminarGenero/{$genero['id_genero']}/">ELIMINAR</a></button>
                    {/if}
                {/foreach}
            </ul>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>