document.getElementById("formImc").addEventListener("submit", function (e) {
    e.preventDefault();

    const peso = parseFloat(document.getElementById("peso").value);
    const altura = parseFloat(document.getElementById("altura").value);

    let imc = peso / (altura * altura);
    imc = imc.toFixed(2);

    let classificacao = "";

    if (imc < 16) {
        classificacao = "Classificação: Magreza (Grau 3)";
    } else if (imc >= 16 && imc <= 16.9) {
        classificacao = "Classificação: Magreza (Grau 2)";
    } else if (imc >= 17 && imc <= 18.4) {
        classificacao = "Classificação: Magreza (Grau 1)";
    } else if (imc >= 18.5 && imc <= 24.9) {
        classificacao = "Classificação: Normal (Grau 0)";
    } else if (imc >= 25 && imc <= 29.9) {
        classificacao = "Classificação: Pré-obesidade";
    } else if (imc >= 30 && imc <= 34.9) {
        classificacao = "Classificação: Obesidade Moderada (Grau I)";
    } else if (imc >= 35 && imc <= 39.9) {
        classificacao = "Classificação: Obesidade Severa (Grau II)";
    } else {
        classificacao = "Classificação: Obesidade Grave (Grau III)";
    }

    document.getElementById("resultado").innerHTML = `
        ${classificacao}<br>
        se seu peso é: ${peso} Kg<br>
        e sua altura é: ${altura} Metros<br>
        seu IMC é de: ${imc}
            `;
});


