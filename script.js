const formulário = document.getElementById('formulário') 


formulário.addEventListener('submit', (e) => { 

e.preventDefault(); //impedir o evento de recarregar

let nome = document.getElementById('nome').value; 

let email = document.getElementById('email').value; 

let data = {
    nome,
    email,
}
let convertData = JSON.stringify(data);

localStorage.setItem("cadastro", convertData)

})

//Validação do campo e-mail

function emailValidation(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
    
    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
    alert("Clique para se cadastrar em nossa plataforma!");
    }
    else{
    alert("Por favor, verifique os dados cadastrados.");
    }
    }


