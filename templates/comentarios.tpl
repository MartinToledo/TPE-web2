{literal}
<section id="template-vue-comentarios">
    <h3>{{subtitulo}}</h3>
    <label>Ordenar comentarios por </label>
    <select class="ordenComent" name="orden">
        <option value="fecha/ASC">fecha: menor a mayor</option>
        <option value="fecha/DESC" selected>fecha: mayor a menor</option>
        <option value="puntaje/ASC">puntaje: menor a mayor</option>
        <option value="puntaje/DESC">puntaje: mayor a menor</option>
    </select>
    <button class="ordenarComentarios">Ordenar</button>
    <p>Puntuacion promedio: {{promedioPuntaje}}</p>
    <ul class="listas">
        <li v-for="comentario in comentarios" class="listas">
            <p>{{comentario.id_usuario}}</p>
            <p>PUNTUACIÓN: {{comentario.puntaje}}</p>
            <p>{{comentario.contenido}}</p>
            <p>{{comentario.fecha}}</p>
            <button v-if="permisos == 1" v-on:click="deleteComentario(comentario.id_comentario)">Eliminar Comentario</button>
        </li>
    </ul>
</section>
{/literal}