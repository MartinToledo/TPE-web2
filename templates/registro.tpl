{include file="header.tpl"}
    <section class="login">
        <div class="login">
            <header class="cabeceraLog">
                <h2>Registro:</h2>
            </header>
            <form class="login" method="post" action="registrarUsuario">
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
                <button class="login" type="submit">Registrar e ingresar</button>
            </form>
        </div>
    </section>
{include file="publicidad.tpl"}