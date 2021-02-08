<?php
    $id = (int) $_GET['id'];
    $acao = $_GET['acao'];

    if($id){
        $subcategoria = consultar("subcategoria", " id_subcategoria = $id");
        //var_dump($subcategoria);
        
        $txt_subcategoria = $subcategoria[0]['subcategoria'];
        $txt_ativo = $subcategoria[0]['ativo_subcategoria'];
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Cadastro de subcategoria</h2>
        <form method="post" action="op/op_subcategoria.php">
            subcategoria:<br><input type ="text" name="txt_subcategoria" value="<?php echo $txt_subcategoria;?>"><br>
            Ativo:<br><input type ="text" name="txt_ativo" value="<?php echo $txt_ativo;?>">
            <br><input type ="hidden" name="acao" value="<?php echo ($acao!='')?$acao:'Cadastrar';?>">
            <br><input type ="hidden" name="id" value="<?php echo $id;?>">
            <br><br>
            <input type="submit" value="<?php echo ($acao!='')?$acao:'Cadastrar';?>">
        </form>
    </body>
</html>
