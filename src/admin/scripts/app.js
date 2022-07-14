const menu = document.querySelector("#menu");
const botao = document.querySelector("#botao");
const opcoes = document.querySelector("#opcoes");
const mostra = document.querySelectorAll(".mostrar");

botao.addEventListener("click", () => {
    if(menu.classList.contains('w-56')){
        menu.classList.remove('w-56');
        menu.classList.add('w-14');
        for(let i = 0; i < 6; i++){
            mostra[i].classList.add("hidden");
        }
    }else{
        menu.classList.remove('w-14');
        menu.classList.add('w-56');
        for(let i = 0; i < 6; i++){
            mostra[i].classList.remove("hidden");
        }
    }
    //opcoes.classList.toggle("hidden");
});