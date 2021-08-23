const buttonModal = document.querySelector(".buttonCadastro");
const modal = document.querySelector(".modal");

buttonModal.addEventListener("click",()=>{
    modal.classList.remove('modalOff');
    modal.addEventListener("click",(event)=>{
        if(event.target.classList == "modal"){
            modal.classList.add("modalOff");
        };
    })
});