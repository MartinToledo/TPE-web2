{include file="header.tpl"}
    <h1>Registro:</h1>
    <form method="post" action="registrarUsuario">
        <div>
            <label for="usuarioId">Nombre de usuario:</label>
            <input type="text" name="usuarioId" placeholder="Nombre de Usuario">
        </div>
        <div>
            <label for="correoElec">Correo Electronico:</label>
            <input type="email" name="correoElec" placeholder="Correo Electronico">
        </div>
        <div>
            <label for="passwordId">Constraseña:</label>
            <input type="password" name="passwordId" placeholder="Contraseña">
        </div>
        <div>
            {$Message}
        </div>
        <button type="submit">Registrar e ingresar</button>
    </form>
{include file="publicidad.tpl"}