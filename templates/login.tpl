{include file="header.tpl"}
    <h1>Login:</h1>
    <form method="post" action="verificarLogin">
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
        <button type="submit">Login</button>
    </form>
    <p><a href="olvideMiContraseña">¿Olvidaste tu contraseña? ¡Has click aquí para recuprarla!</a></p>
    <p><a href="Registro">¿Aun no tienes tu usuario? ¡Has click aquí para registrarte!</a></p>
{include file="publicidad.tpl"}