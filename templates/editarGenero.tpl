{include file="header.tpl"}
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Editar:</h2>
            </header>
            <form method="post" action="modificarGenero/{$genero["id_genero"]}">
                <div>
                    <label for="nombre">Descripcion:</label>
                    <textarea name="nombre">{$genero["nombre"]}</textarea>
                </div>
                <input type="submit" value="Guardar Modificaciones">
            </form>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>