// funcao para juntar nome e sobrenome

function juntarNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    // 1. concatenacao de strings normal
    let nomecompleto = nome + ' ' + sobrenome;

    // 2. insere variavel nomecompleto na tag p no id nomecompleto
    document.getElementById("nomecompleto").innerText = nomecompleto;
}