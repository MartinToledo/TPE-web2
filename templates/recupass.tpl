{include file="header.tpl"}
    <h1>Recuperación de Contraseña:</h1>
    {if !empty($Token)}
        <form method="post" action="modificarContraseñaByToken">
            <div>
                <input type="hidden" name="id_token" value="{$Token}">
            </div>
            <div>
                <label for="newPassCode">Escribe Tu Nueva Contraseña:</label>
                <input type="password" name="newPassCode" placeholder="Nueva Contraseña">
            </div>
            <button type="submit">Enviar nueva Contraseña</button>
        </form>
    {else}
        <form method="post" action="recuperarContraseña">
            <div>
                <label for="usuarioId">Nombre de usuario:</label>
                <input type="text" name="usuarioId" placeholder="Nombre de Usuario">
            </div>
            <div>
                {$Message}
            </div>
            <button type="submit">Recuperar</button>
        </form>
    {/if}
{include file="publicidad.tpl"}