function zeroAEsquerda(numero) {
    return numero >= 10 ? numero : `0${numero}`;
}
function formataData(data) {
    const dia = zeroAEsquerda(data.getDate());
    const mes = zeroAEsquerda(data.getMonth() + 1);
    const ano = zeroAEsquerda(data.getFullYear());
    return `Data do documento: ${dia}/${mes}/${ano}`;
}

const data = new Date();
const dataBrasil = formataData(data);
const dataDocumento = document.getElementById('data-documento');
dataDocumento.innerHTML = dataBrasil;







