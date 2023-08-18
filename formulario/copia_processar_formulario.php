<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário de Candidatura</div>

<!DOCTYPE html>
<html>

<body>

<script>
function funcao1()
{
alert("Cadastro realizado com sucesso");
}
</script>
<form action="formulario/processar_formulario.php" method="POST">

<div class="form-row">
    <div class="form-group col-md-9">
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" class="form-control"
            id="nome_completo" name="nome_completo" required><br>
    </div>
    <div class="form-group col-md-3">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control"
            id="data_nascimento" name="data_nascimento" required><br>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control"
            id="email" name="email" required><br>
    </div>
    <div class="form-group col-md-6">
        <label for="linkedin">LinkedIn:</label>
        <input type="url" class="form-control"
            id="linkedin" name="linkedin" required><br>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control"
            id="cidade" name="cidade" required><br>
    </div>
    <div class="form-group col-md-3">
        <label for="estado">Estado:</label>
        <input type="text" class="form-control"
            id="estado" name="estado" required><br>
    </div>
    <div class="form-group col-md-6">
        <label for="disponibilidade">Disponível para Trabalho:</label>
        <input type="radio" id="disponibilidade_sim" name="disponibilidade" value="Sim" required>
        <label for="disponibilidade_sim">Sim</label>
        <input type="radio" id="disponibilidade_nao" name="disponibilidade" value="Não" required>
        <label for="disponibilidade_nao">Não</label><br>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
    <div id="linguagens">
        <div class="linguagem">
            <label for="linguagem_programacao">Linguagem de Programação:</label>
            <input type="text" name="linguagem_programacao[]" required>

            <label for="nivel_dominio">Nível de Domínio:</label>
            <select name="nivel_dominio[]" required>
                <option value="Básico">Básico</option>
                <option value="Intermediário">Intermediário</option>
                <option value="Avançado">Avançado</option>
            </select><br>  
        </div>
    </div>
    <button type="button" id="add_linguagem">Adicionar outra linguagem</button><br><br>
    <input type="submit" value="Enviar"  onclick="funcao1()" value="Exibir Alert">
    <button class="btn btn-primary btn-lg">Salvar</button>

   
</form>

<script>
    document.getElementById("add_linguagem").addEventListener("click", function () {
        var linguagemDiv = document.createElement("div");
        linguagemDiv.classList.add("linguagem");

        var linguagemLabel = document.createElement("label");
        linguagemLabel.innerHTML = "Linguagem de Programação:";
        var linguagemInput = document.createElement("input");
        linguagemInput.type = "text";
        linguagemInput.name = "linguagem_programacao[]";
        linguagemInput.required = true;

        var nivelLabel = document.createElement("label");
        nivelLabel.innerHTML = "Nível de Domínio:";
        var nivelSelect = document.createElement("select");
        nivelSelect.name = "nivel_dominio[]";
        nivelSelect.required = true;

        var opcoes = ["Básico", "Intermediário", "Avançado"];
        for (var i = 0; i < opcoes.length; i++) {
            var opcao = document.createElement("option");
            opcao.value = opcoes[i];
            opcao.text = opcoes[i];
            nivelSelect.appendChild(opcao);
        }

        linguagemDiv.appendChild(linguagemLabel);
        linguagemDiv.appendChild(linguagemInput);
        linguagemDiv.appendChild(nivelLabel);
        linguagemDiv.appendChild(nivelSelect);

        document.getElementById("linguagens").appendChild(linguagemDiv);
    });
</script>

</body>
</html>


<?php
// Conectar ao banco de dados
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "NamiSystem";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);


if (!$conexao) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}

// Processar os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST["nome_completo"];
    $data_nascimento = $_POST["data_nascimento"];
    $email = $_POST["email"];
    $linkedin = $_POST["linkedin"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $disponibilidade = $_POST["disponibilidade"];
    $linguagens_programacao = $_POST["linguagem_programacao"];
    $niveis_dominio = $_POST["nivel_dominio"];

    // Inserir os dados na tabela
    foreach ($linguagens_programacao as $index => $linguagem) {
        $nivel_dominio = $niveis_dominio[$index];

        $sql = "INSERT INTO processar_formulario (nome_completo, data_nascimento, email, linkedin, cidade, estado, disponibilidade, linguagem_programacao, nivel_dominio)
                VALUES ('$nome_completo', '$data_nascimento', '$email', '$linkedin', '$cidade', '$estado', '$disponibilidade', '$linguagem', '$nivel_dominio')";

        if (!mysqli_query($conexao, $sql)) {
            echo "Erro ao inserir os dados: " . mysqli_error($conexao);
        }
   
    }
    header('http://localhost/NamiSystem/cadastro.php?dir=formulario&file=processar_formulario');
    die();
}

// Fechar a conexão
mysqli_close($conexao);



?>




