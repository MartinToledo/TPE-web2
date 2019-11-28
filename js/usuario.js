"use strict";

app.permisos = 0;

document.querySelector("#form-comentario").addEventListener('submit', addComentario);

function addComentario(e){
    e.preventDefault(); //cancela el evento por omision

    let data = {
        id_libro: document.querySelector("input[name=libroId]").value,
        puntaje: document.querySelector("select.valoracion").value,
        contenido: document.querySelector("input[name=contenidoComentario]").value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
    })
    .then(response => {getComentarios();
    })
    .catch(error => console.log(error));
}