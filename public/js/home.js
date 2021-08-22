const buttonModal = document.querySelector(".buttonCadastro");
const modal = document.querySelector(".modal");

buttonModal.addEventListener("click",()=>{
    modal.classList.remove('modalOff');
});