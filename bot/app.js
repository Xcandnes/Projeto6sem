const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");
const inicio = document.getElementById("inicio");
const nome = document.getElementById("nome");
const sequencia = document.getElementById("sequencia");

inicio.value = "s";

const trataRetorno = (body, opcoes, msg) => {


    var op = "" + opcoes;
    var rep = op.replace(/,/g, '<br>');

    const response = body['texto'] + "<br>" + rep;

    const chatBody = document.querySelector(".scroller");

    const divCpu = document.createElement("div");
    divCpu.className = "bot visible";
    divCpu.innerHTML = response;

    const divUser = document.createElement("div");
    divUser.className = "me visible";
    divUser.textContent = msg;

    chatBody.append(divUser);
    setTimeout(() => {
        chatBody.append(divCpu);
    }, 600);
}


const getMessage = (msg, inic, nom, seq) => {


    var link = "http://18.231.31.23:8080/mensagem?msg_cliente=" + msg + "&inicio=" + inic + "&nome=" + nom + "&sequencia=" + seq;

    fetch(link)
        .then(function (response) {

            var contentType = response.headers.get("content-type");
            inicio.value = response.headers.get("inicio");
            nome.value = response.headers.get("nome");
            sequencia.value = response.headers.get("sequencia");

            if (contentType && contentType.indexOf("application/json") !== -1) {
                return response.json().then(function (json) {
                    trataRetorno(json, json['opcoes'], msg);
                });
            } else {
                console.log("Oops, we haven't got JSON!");
            }

        }).catch(function (error) {
            alert('Deu merda: ' + error.message);
        });
};

btnSend.addEventListener("click", (e) => {
    e.preventDefault();
    if (chat.value == "") {
    } else {
        getMessage(chat.value, inicio.value, nome.value, sequencia.value);
        chat.value = "";
    }
});