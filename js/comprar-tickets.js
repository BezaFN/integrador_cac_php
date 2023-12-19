const valorTicket = 200;
let descEstud= 80;
let descTrai= 50;
let descJun= 15;
let nom= document.getElementById("nombre");
let divErrorNom= document.getElementById("mensajeErrorNombre");
let apell= document.getElementById("apellido");
let divErrorApell= document.getElementById("mensajeErrorApellido");
let mail= document.getElementById("mail");
let divErrorMail= document.getElementById("mensajeErrorMail");
let cantTick= document.getElementById("cantidadTickets");
let mensajeErrorCantTick= document.getElementById("mensajeErrorCantTickets");
let categ= document.getElementById("categoriaSelect");
let mensajeErrorCateg= document.getElementById("mensajeErrorCategoria");

const quitarClaseError = () => {
    let listaNodos = document.querySelectorAll(".form-control, .form-select");
    for (let i = 0; i < listaNodos.length; i++) {
        listaNodos[i].classList.remove('is-invalid');
    }
    let listaNodosdiv = document.querySelectorAll(".invalid-feedback");
    for (let i = 0; i < listaNodosdiv.length; i++) {
        listaNodosdiv[i].classList.remove('propia');
    }
}

const totalAPagar = () => { 
    quitarClaseError();

    const nombreVálido = nom => {
        return /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/.test(nom);
    }
    if (!(nombreVálido(nom.value))) {
        nom.classList.add("is-invalid");
        divErrorNom.classList.add("propia");
        nom.focus();
        return;
    }

    const apellidoVálido = apell => {
        return /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/.test(apell);
    }
    
    if (!(nombreVálido(apell.value))) {
        apell.classList.add("is-invalid");
        divErrorApell.classList.add("propia");
        apell.focus();
        return;
    }
    if (mail.value === "") {
        mail.classList.add("is-invalid");
        divErrorMail.classList.add("propia");
        mail.focus();
        return;
    }
    const emailValido = mail => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail);
    }
    if (!emailValido(mail.value)) {
        mail.classList.add("is-invalid");
        divErrorMail.classList.add("propia");
        mail.focus();
        return;
    }
    if ( (cantTick.value <= 0) || (isNaN(cantTick.value)) ) {
        cantTick.classList.add("is-invalid");
        mensajeErrorCantTick.classList.add("propia");
        cantTick.focus();
        return;
    }
    if (categ.value == "") {
        categ.classList.add("is-invalid");
        mensajeErrorCateg.classList.add("propia");
        categ.focus();
        return;
    }
    let totalValorTick = (cantTick.value) * valorTicket;
    switch (categ.value) {
        case "0":
            totalValorTick = totalValorTick ;
            break;
        case "1":
            totalValorTick = totalValorTick - (descEstud / 100 * totalValorTick);
            break;
        case "2":
            totalValorTick = totalValorTick - (descTrai / 100 * totalValorTick);
            break;
        case "3":
            totalValorTick = totalValorTick - (descJun / 100 * totalValorTick);
            break;
    }
    totalPago.innerHTML = totalValorTick;
}
btnResumen.addEventListener('click', totalAPagar);
const resetTotalAPagar = () => {
    quitarClaseError();
    totalPago.innerHTML = "";
}
btnBorrar.addEventListener('click', resetTotalAPagar);



