// funcao para juntar nome e sobrenome

function juntarNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    if (nome.trim() === "" || sobrenome.trim() === "") {
        alert("Preencha o nome e sobre nome!");
        return
    }

    // 1. concatenacao de strings normal
    let nomecompleto = nome + ' ' + sobrenome;

    // 2. insere variavel nomecompleto na tag p no id nomecompleto
    document.getElementById('nomecompleto').innerText = nomecompleto;

    let li = document.createElement("li");
    let spanNome = document.createElement("span");

    let checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.style.marginRight = "10px";

    spanNome.innerText = nomecompleto;

    let botaoApagar = document.createElement("button");
    botaoApagar.innerText = "Apagar";
    botaoApagar.style.marginLeft = "10px";
    botaoApagar.onclick = function () {
        li.remove();
    }

    checkbox.addEventListener("change", function() {
        if(checkbox.checked) {
            spanNome.style.textDecoration = "line-through";
            spanNome.style.color = "gray";
        } else {
            spanNome.style.textDecoration = "none";
            spanNome.style.color = "black";
        }
    });

    li.appendChild(checkbox);
    li.appendChild(spanNome);
    li.appendChild(botaoApagar);
    document.getElementById('listaNomes').appendChild(li);

}