{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>{$Titulo}</h2>
        </header>
        <article class="libro">
            {foreach from=$Generos item=genero}
                <ul class="lista">
                    <li><a href="Genero/{$genero['id_genero']}">{$genero['nombre']}</a></li>
                </ul>
            {/foreach}
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>