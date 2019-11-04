{include file="header.tpl"}
    <section>
        <header class="cabeceraArt">
            <h2>{$Libro['titulo']}</h2>
        </header>
        <article class="libro">
            <ul class="lista">
                <li>AUTOR: {$Libro['autor']}</li>
                <li>EDITORIAL: {$Libro['editorial']}</li>
                <li>CATEGORIA: <a href="Genero/{$Libro['id_genero']}">{$Libro['nombre']}</a></li>
                <li>EDAD: {$Libro['edad']}</li>
                <li>DESCRIPCION: {$Libro['descripcion']}</li>
            </ul>
        </article>
    </section>
    {include file="publicidad.tpl"}
  </body>
</html>