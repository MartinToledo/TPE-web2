"use strict";

app.permisos = 1;

function borrarComentario(idComentario){
    let url = 'api/comentarios/' + idComentario;
    fetch(url, {
        method: 'DELETE'
    })
    .then(response => {getComentarios();
    })
    .catch(error => console.log(error));
}