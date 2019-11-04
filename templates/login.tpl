{include file="header.tpl"}
    <h1>{$Titulo}</h1>
    <form method="post" action="verificarLogin">
        <div class="form-group">
            <label for="usuarioId">Usuario</label>
            <input type="input" name="usuarioId" id="usuarioId" placeholder="Enter User">
        </div>
        <div>
            <label for="passwordId">Password</label>
            <input type="password" name="passwordId" id="passwordId" placeholder="Password">
        </div>
        <div>
            {$Message}
        </div>
        <button type="submit">Login</button>
    </form>
{* {include file="publicidad.tpl"} *}