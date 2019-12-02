{include file="header.tpl"}
    <section class="login">
        <div class="login">
        <header class="cabeceraLog">
            <h2>Ingresa Tu Usuario:</h2>
        </header>
            <form class="login" method="post" action="verificarLogin">
                <div>
                    <label for="usuarioId">Usuario:</label>
                    <input type="input" name="usuarioId" placeholder="Nombre de Usuario">
                </div>
                <div>
                    <label for="passwordId">Constraseña:</label>
                    <input type="password" name="passwordId" placeholder="Contraseña">
                </div>
                <div>
                    {$Message}
                </div>
                <button class="login" type="submit">Ingresar</button>
            </form>
            <p><a href="Registro">¿Aun no tienes tu usuario? ¡Has click aquí para registrarte!</a></p>
            <p><a href="olvideMiContraseña">¿Olvidaste tu contraseña? ¡Has click aquí para recuprarla!</a></p>
        </div>
    </section>
{include file="publicidad.tpl"}