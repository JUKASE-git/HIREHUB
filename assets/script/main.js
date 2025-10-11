const modal = document.getElementById('cover-modal');
const fechar = document.getElementById('close')

function modalform(){
    if(modal.classList.contains("fechar")){
        modal.classList.remove("fechar");
        modal.classList.add("abrir");
    }
    else{
        modal.classList.add("abrir");
    }
    
}

function fecharModal(){
    if(modal.classList.contains("abrir")){
        modal.classList.add("fechar");
        modal.classList.remove("abrir");
    }
}



