function buscaCep() {
    let TxtCep = document.getElementById('TxtCep').value;
    if (TxtCep === "") {
        // Caso o campo de CEP esteja vazio, desabilita os campos e retorna


        return;
    }

    let cep = TxtCep.replace(/\D/g, ''); // Remove caracteres não numéricos

    if (cep.length !== 8) {
        // Caso o CEP não tenha 8 dígitos, exibe mensagem de erro e desabilita os campos
        document.getElementById("cepvalido-error").textContent = "CEP inválido";
        document.getElementById("cepvalido-success").textContent = "";

        return;
    }

    let url = "https://viacep.com.br/ws/" + cep + "/json/";

    let req = new XMLHttpRequest();
    req.open("GET", url);
    req.send();

    req.onload = function() {
        if (req.status === 200) {
            let endereco = JSON.parse(req.response);
            document.getElementById("TxtRua").value = endereco.logradouro;
            document.getElementById("TxtBairro").value = endereco.bairro;
            document.getElementById("TxtCidade").value = endereco.localidade;
            document.getElementById("TxtEstado").value = endereco.uf;

            document.getElementById("cepvalido-error").textContent = "";
            document.getElementById("cepvalido-success").textContent = "CEP válido";

            // Desabilita os campos após o preenchimento

        } else {
            document.getElementById("cepvalido-error").textContent = "CEP inválido ou não encontrado";
            document.getElementById("cepvalido-success").textContent = "";

        }
    };
}

window.onload = function() {
    // Desabilita os campos ao carregar a página

    let TxtCep = document.getElementById("TxtCep");
    TxtCep.addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    });
    TxtCep.addEventListener("blur", buscaCep);
};
