let btnEnviarDados = document.getElementById('btn-enviar-dados');

function validarCampos() {
    let inputs = document.querySelectorAll('input');
    let camposVazios = 20;
    for (let i = 0; i < 20; i++) {
        if (inputs[i].value === "") {
            camposVazios += 0;
        } else {
            camposVazios--;
        }
    }
    if (camposVazios == 0) {
        btnEnviarDados.setAttribute('type', 'submit');
        return alert(`Compra efetuada com sucesso !`);
    } else {
        return alert('Não deixar campos vazios !');
    }
}

btnEnviarDados.addEventListener('click', validarCampos);













