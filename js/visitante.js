"use strict";

let app = new Vue({
    el: "#template-vue-comentarios",
    data:{
        subtitulo: "Comentarios:",
        comentarios: [],
        promedioPuntaje: 0,
        permisos: -1
    },
    methods: {
        deleteComentario: function(idComentario){
            borrarComentario(idComentario);
        }
    }
});

function getComentarios(){
    let libro = document.querySelector("input[name=libroId]").value;
    let orden = document.querySelector("select.ordenComent").value;
    orden = orden.split("/");
    let url = "api/comentarios/" + libro + "?orden=" + orden[1] + "&atributo=" + orden[0];
    fetch(url)
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
        let sumaPuntaje = 0;
        for(let comentario of comentarios){
            sumaPuntaje += parseInt(comentario.puntaje, 10);
        }
        app.promedioPuntaje = ((sumaPuntaje/comentarios.length).toFixed(2));
    })
    .catch(error => console.log(error));
}

document.querySelector(".ordenarComentarios").addEventListener("click", getComentarios);

getComentarios();