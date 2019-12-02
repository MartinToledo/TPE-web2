{include file="header.tpl"}
    <section>
        <article>
            <header class="cabeceraArt">
                <h2>Editar Genero</h2>
            </header>
            <form class="editarGenero" method="post" action="modificarGenero/{$genero["id_genero"]}">
                <div>
                    <label for="nombre">Nombre del Genero:</label>
                    <input name="nombre" value="{$genero["nombre"]}">
                </div>
                <input type="submit" value="Guardar Modificaciones">
            </form>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>