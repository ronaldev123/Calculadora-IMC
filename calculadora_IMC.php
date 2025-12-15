<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de IMC</title>
</head>
<body>
<header>
 
</header>

<div class="informacao">
<h1>O que é o IMC?</h1>
<p>O <strong>Índice de Massa Corporal (IMC)</strong> é um método utilizado por profissionais de saúde para estimar a quantidade de gordura corporal, relacionando o peso e a altura de uma pessoa. Ele funciona como uma avaliação inicial para indicar se o indivíduo está dentro do peso adequado, abaixo ou acima do ideal.<br>Embora seja uma ferramenta prática e amplamente utilizada, o IMC não é o método mais preciso para avaliar o estado nutricional, pois não considera fatores como a proporção entre músculo e gordura, a distribuição da gordura corporal e o nível de condicionamento físico. Por esse motivo, seus resultados devem ser analisados com cautela e sempre com o apoio de um profissional de saúde.<br>Em pessoas com <strong>alta massa muscular</strong>, como atletas, o IMC pode não refletir corretamente a condição física e de saúde. Nesses casos, recomenda-se o uso de métodos mais detalhados, como a bioimpedância e a antropometria, que oferecem uma análise mais completa da composição corporal.
</p>
 
<img src="img/balanca.jpg" alt="subindo na balança">
 
</div>

<div class = "container">
 
    <h2>Digite seu <strong>Peso</strong> e <strong>Altura</strong></h2>
 
    <form method="POST" action="">
    <label>Peso</label>
    <input type="number" name="peso" step="0.01" required><br><br>
    <label>Altura em metros</label>
    <input type="number" name="altura" step="0.01" required><br><br>
   
    <input type="submit" value="Calcular IMC">
    <p> segue abaixo a tabela de valores para comprovação:</p>  
    </form>

    <img src="img/tabela.jpg" alt="tabela">

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $peso = $_POST ["peso"];
        $altura = $_POST["altura"];
        $imc = $peso / ($altura*$altura);
        $imc = number_format($imc, 2);
       
        if ($imc < 18.5) {
        echo "Classificação: Magreza (Grau 0)";
        }elseif ($imc >= 18.5 && $imc <= 24.9) {
            echo "Classificação: Normal (Grau 0)";
        }elseif ($imc >= 25 && $imc <= 29.9) {
            echo "Classificação: Sobrepeso (Grau I)";
        }elseif ($imc >= 30 && $imc <= 39.9) {
            echo "Classificação: Obesidade (Grau II)";
        }else {
        echo "Classificação: Obesidade Grave (Grau III)";
        }

    echo " se seu peso é:  " . $peso . "Kg <br>";
    echo " e sua altura é: " . $altura . " Metros<br>";
    echo " seu IMC é de: ". $imc;    

}
   
    
?>
<footer>
   
</footer>    
</body>
</html>