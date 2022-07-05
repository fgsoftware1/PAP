const menu = document.querySelector("#menu");
const botao = document.querySelector("#botao");
const opcoes = document.querySelector("#opcoes");

botao.addEventListener("click", () => {
    menu.classList.toggle("w-14");
    opcoes.classList.toggle("");
    
});
