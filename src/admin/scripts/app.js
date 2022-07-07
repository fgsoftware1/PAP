const menu = document.querySelector("#menu");
const botao = document.querySelector("#botao");
const opcoes = document.querySelector("#opcoes");

botao.addEventListener("click", () => {
    if(menu.classList.contains('w-40')){
        menu.classList.remove('w-40');
        menu.classList.add('w-14');
    }else{
        menu.classList.remove('w-14');
        menu.classList.add('w-40');
    }
    //opcoes.classList.toggle("hidden");
});