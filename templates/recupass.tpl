{include file="header.tpl"}
    <section class="login">
        <div class="login">
            <header class="cabeceraLog">
                <h2>Recuperación de Contraseña:</h2>
            </header>
            {if !empty($Token)}
                <form class="login" method="post" action="modificarContraseñaByToken">
                    <div>
                        <input type="hidden" name="id_token" value="{$Token}">
                    </div>
                    <div>
                        <label for="newPassCode">Escribe Tu Nueva Contraseña:</label>
                        <input type="password" name="newPassCode" placeholder="Nueva Contraseña">
                    </div>
                    <button class="login" type="submit">Enviar nueva Contraseña</button>
                </form>
            {else}
                <form class="login" method="post" action="recuperarContraseña">
                    <div>
                        <label for="usuarioId">Nombre de usuario:</label>
                        <input type="text" name="usuarioId" placeholder="Nombre de Usuario">
                    </div>
                    <div>
                        {$Message}
                    </div>
                    <button class="login" type="submit">Recuperar</button>
                </form>
            {/if}
        </div>
    </section>
{include file="publicidad.tpl"}