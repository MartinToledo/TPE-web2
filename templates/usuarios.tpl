{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>Todos los Usuario:</h2>
        </header>
        <article class="libro">
            <ul class="lista">
                {foreach from=$Usuarios item=usuario}
                    <li>{$usuario['nombre']}</li>
                    <li>{$usuario['email']}</li>
                    <button><a href="ModificarPermisosUsuario/{$usuario['nombre']}">{if $usuario['permisos'] == 1}Quitar permisos de Administrador{else}Dar permisos de Administrador{/if}</a></button>
                    <button><a href="EliminarUsuario/{$usuario['nombre']}">ELIMINAR</a></button>
                {/foreach}
            </ul>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>