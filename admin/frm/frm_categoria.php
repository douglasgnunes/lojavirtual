<?php
    $id = (int) $_GET['id'];
    $acao = $_GET['acao'];

    if($id){
        $categoria = consultar("categoria", " id_categoria = $id");
        //var_dump($categoria);
        
        $txt_categoria = $categoria[0]['categoria'];
        $txt_ativo = $categoria[0]['ativo_categoria'];
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Cadastro de categoria</h2>
        <form method="post" action="op/op_categoria.php">
            Categoria:<br><input type ="text" name="txt_categoria" value="<?php echo $txt_categoria;?>"><br>
            Ativo:<br><input type ="text" name="txt_ativo" value="<?php echo $txt_ativo;?>">
            <br><input type ="hidden" name="acao" value="<?php echo ($acao!='')?$acao:'Cadastrar';?>">
            <br><input type ="hidden" name="id" value="<?php echo $id;?>">
            <br><br>
            <input type="submit" value="<?php echo ($acao!='')?$acao:'Cadastrar';?>">
        </form>
    </body>
</html>
