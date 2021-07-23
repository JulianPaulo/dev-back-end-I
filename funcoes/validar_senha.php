<style type="text/css">
    body{
        font-family: Arial, sans-serif;
        color: #555;
    }
    #mensagem{
        display: inline;
        width: 20%;
    }
    span{
        padding: 6px 20px;
        border-radius: 10px;
    }
    .erro{
        background-color: #ffecec;
        border: 1px solid #f5aca6;
    }
    .sucesso {
        background-color: #e9ffd9;
        border: 1px solid #a6ca8a;
    }
    .aviso {
        background-color: #fff8c4;
        border: 1px solid #f2c779;
    }
    input{
        padding: 4px 6px;
    }
</style>

<form name="form1" action="" method="post">
    <div>
        <label for="senha">Senha:</label>
        <br/>
        <input type="password" name="senha" id="senha" placeholder="Informe sua senha" />
    </div>
    <br/>
    <div>
        <label for="senha_confirma">Confirme sua senha:</label>
        <br/>
        <input type="password" name="senha_confirma" id="senha_confirma" placeholder="Confirme sua senha" />
    </div>
    <br>
    <input type="submit" value="ENVIAR">
</form>

<?php
    if($_POST) {
        $senha          = $_POST['senha'];
        $senhaConfirma  = $_POST['senha_confirma'];
        if ($senha == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        } else if ($senha == $senhaConfirma) {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: ".$senha."</span>";
        } else {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";
    }
?>