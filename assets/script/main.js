const modal = document.getElementById('cover-modal');
const fechar = document.getElementById('close');
const createForm = document.getElementById('create-card');
const creationForm = document.getElementById('create-card-form')
const cadastro = document.getElementById('cadastro')
const login = document.getElementById('login')

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

function mostrarForm(){
    creationForm.classList.add("show");
    createForm.classList.add("hide");
}

function hideForm(){
    creationForm.classList.remove("show");
    createForm.classList.remove("hide");
}