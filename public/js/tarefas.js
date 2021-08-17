const mes = document.querySelectorAll(".mesCalendario");
// mes.dataset.mes;  forEach para cada colocar o titulo com o seu nome mes
const modal = document.querySelector(".modal");

const mesesDias = {
    "Janeiro":31,"Fevereiro":28,"Marco":31,"Abril":30,
    "Maio":31,"junho":30,"Julho":31,"Agosto":31,
    "Setembro":30,"Outubro":31,"Novembro":30,"Dezembro":31
}
mes.forEach((element)=>{
    element.addEventListener("click",(event)=>{
        modal.classList.add("modalOn");
        modal.classList.remove("modalOff");
        let nomeMes = event.currentTarget.dataset.mes;
        let tituloMes = document.querySelector(".modalTituloText");
        tituloMes.innerText = nomeMes;
        let diasContainer = document.querySelector(".modalCalendarioDias");
        for(let i = 0; i < mesesDias[nomeMes]; i++){
            let eachContainer = document.createElement("div");
            eachContainer.classList.add("modalDias");
            let eachTextDay = document.createElement("p");
            eachTextDay.innerText = i+1;
            eachTextDay.classList.add("eachTextDay");
            eachContainer.append(eachTextDay);
            diasContainer.append(eachContainer);
        }
        modal.addEventListener("click",(event)=>{
            if(event.target.classList[0] == "modalContainer"){
                let allDiasContainer = document.querySelectorAll(".modalDias");
                allDiasContainer.forEach((element)=>{
                    element.remove();
                });
                modal.classList.remove("modalOn");
                modal.classList.add("modalOff");
            }
        })
    });
});