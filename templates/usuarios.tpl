{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>Todos los Usuarios</h2>
        </header>
        <div class="usuarios">
            <ul>
                {foreach from=$Usuarios item=usuario}
                    <p>{$usuario['nombre']}</p>
                    <p>{$usuario['email']}</p>
                    <button><a href="ModificarPermisosUsuario/{$usuario['nombre']}">{if $usuario['permisos'] == 1}Quitar permisos de Administrador{else}Dar permisos de Administrador{/if}</a></button>
                    <button><a href="EliminarUsuario/{$usuario['nombre']}">ELIMINAR</a></button>
                {/foreach}
            </ul>
        </div>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>