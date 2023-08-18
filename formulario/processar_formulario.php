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
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" required><br>
            <select id="estado" name="estado">
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="ap">Amapá</option>
                <option value="am">Amazonas</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="es">Espírito Santo</option>
                <option value="go">Goiás</option>
                <option value="ma">Maranhão</option>
                <option value="mt">Mato Grosso</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piauí</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="ro">Rondônia</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="sp">São Paulo</option>
                <option value="se">Sergipe</option>
                <option value="to">Tocantins</option>
                <option value="df">Distrito Federal</option>
           </select>
    </div>    
    <div class="form-group col-md-3">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" required><br>
            <select id="cidade" name="cidade">
        <!-- Opções de cidades serão preenchidas dinamicamente pelo JavaScript -->
            </select>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    const estadoSelect = document.getElementById("estado");
    const cidadeSelect = document.getElementById("cidade");

    const cidadesPorEstado = {
        ac: ["Acrelândia","Assis Brasil", "Brasiléia", "Bujari", "Capixaba", "Cruzeiro do Sul", "Epitaciolândia", "Feijó", "Jordão", "Manoel Urbano", "Marechal Thaumaturgo", "Mâncio Lima", "Plácido de Castro", "Porto Acre", "Porto Walter", "Rio Branco", "Rodrigues Alves", "Santa Rosa do Purus", "Sena Madureira", "Senador Guiomard", "Tarauacâ", "Xapuri"],
        al: ["Agua Branca", "Anadia", "Arapiraca", "Atalaia", "Barra de Santo Antonio", "Barra de São Miguel", "Batalha", "Belém", "Belo Monte", "Boca da Mata", "Branquinha", "Cacimbinhas", "Cajueiro", "Campestre", "Campo Alegre", "Campo Grande", "Canapi", "Capela", "Carneiros", "Cha Preta", "Coite Do Noia", "Colonia Leopoldina" , "Coqueiro Seco", "Coruripe", "Craibas", "Delmiro Gouveia", "Dois Riachos", "Estrela de Alagoas", "Feira Grande", "Feliz Deserto", "Flexeiras", "Girau do Ponciano", "Ibateguara", "Igaci", "Igreja Nova", "Inhapi", "Jacaré dos Homens", "Jacuipe", "Japaratinga", "Jaramataia", "Jequia da Praia", "Joaquim Gomes", "Jundia", "Junqueiro", "Lagoa da Canoa", "Limoeiro de Anadia", "Maceio", "Major Isidoro", "Mar Vermelho", "Maragogi", "Maravilha", "Marechal Deodoro", "Maribondo", "Mata Grande", "Matriz de Camaragibe", "Messias", "Minador do Negrão", "Monteiropolis", "Murici", "Novo Lino", "Olho d'agua das Flores", "Olho d'agua do Casado", "Olho d'agua Grande", "Olivença", "Ouro Branco", "Palestina", "Palmeira dos Indios", "Pão de Açúcar", "Pariconha", "Paripueira", "Passo de Camaragibe", "Paulo Jacinto", "Penedo", "Piacabucu", "Pilar", "Pindoba", "Piranhas", "Poço das Trincheiras", "Porto Calvo", "Porto de Pedras", "Porto Real do Colégio", "Quebrangulo", "Rio Largo", "Roteiro", "Santa Luzia do Norte", "Santana do Ipanema", "Santana do Mundau", "Sao Bras", "Sao Jose da Laje", "Sao Jose da Tapera", "Sao Luis do Quitunde", "Sao Miguel dos Campos", "Sao Miguel dos Milagres", "Sao Sebastiao", "Satuba", "Senador Rui Palmeira", "Tanque D'arca", "Taquarana", "Teotonio Vilela", "Traipu", "Uniao dos Palmares", "Viçosa"],
        ap: ["Amapá", "Calçoene", "Cutias", "Ferreira Gomes", "Itaubal", "Laranjal do Jari", "Macapá", "Mazagão",, "Oiapoque", "Pedra Branca do Amapari", "Porto Grande", "Pracuúba", "Santana", "Serra do Navio", "Tartarugalzinho", "Vitória do Jari"],
        am: ["Manaus", "Autazes", "Tabatinga", "Coari", "Tefé"],
        ba: ["Salvador", "Irecê", "Feira de Santana", "Barra do Mendes", "Vitória da Conquista", "Jequié"],
        ce: ["Fortaleza", "Crato", "Acaraú", "Pedra Branca", "Granja"],
        es: ["Vitória", "Guarapari", "Vila Velha", "Serra", "Aracruz"],
        go: ["Goiânia", "Trindade", "Catalão", "Jataí", "Aporé", "Caldas Novas"],
        ma: ["São Luis", "Araioses", "Caxias", "Colinas", "Santa Inês", "Bacabal", "Balsas"],
        mt: ["Cuiabá", "Sinop", "Juína", "Colniza"],
        ms: ["Campo Grande", "Corumbá", "Bonito", "Jardim", "Rio Brilhante"],
        mg: ["Belo Horizonte", "Betim", "Contagem", "Uberaba", "Montes Claros", "Tiradentes"],
        pa: ["Belém", "Altamira", "Santarém", "Breves", "Anajás", "Bragança"],
        pb: ["João Pessoa", "Pombal", "Campina Grande", "Santa Rita"],
        pr: ["Cascavél", "Curitiba", "Foz do Iguaçu"],
        pe: ["Caruaru", "Recife", "Petrolina", "Olinda", "Arcoverde"],
        pi: ["Teresina", "Picos", "Floriano", "Parnaíba", "Bom Jesus"],
        rj: ["Rio de Janeiro", "Niterói", "Duque de Caxias"],
        rn: ["Natal", "Macau", "Mossoró", "Assú"],
        rs: ["Porto Alegre", "Rio Grande", "Novo Hamburgo"],
        ro: ["Porto Velho", "Alto Paraíso", "Rolim de Moura"],
        rr: ["Boa Vista", "Bonfim", "Alto Alegre"],
        sc: ["Florianópolis", "Blumenau", "Joinville"],
        sp: ["São Paulo", "Campinas", "Guarulhos"],
        se: ["Arauá", "Aracaju", "Areia Branca"],
        to: ["Palmas", "Gurupi", "Alvorada"],
        df: ["Brasília", "Ceilândia", "Gama", "Sobradinho"],
    };

    estadoSelect.addEventListener("change", function() {
        const estadoSelecionado = estadoSelect.value;
        cidadeSelect.innerHTML = ""; // Limpar as opções de cidades

        cidadesPorEstado[estadoSelecionado].forEach(function(cidade) {
            const option = document.createElement("option");
            option.value = cidade;
            option.textContent = cidade;
            cidadeSelect.appendChild(option);
        });
    });

    // Disparar o evento de mudança no estado para carregar as cidades iniciais
    estadoSelect.dispatchEvent(new Event("change"));
});
</script>
    
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




