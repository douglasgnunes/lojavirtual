<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><a href="index.php?link=3">Cadastrar</a></p>
        <table border="1">
            <tr>
                <td>id</td>
                <td>Subcategoria</td>
                <td>Ativo</td>
                <td colspan="2">Ação</td>
            </tr>
            <?php
                $subcategorias = consultar("subcategoria");
                //var_dump($subcategorias);
                if($subcategorias){
                //for($i=1;$i<=3;$i++){
                    foreach($subcategorias as $subcategoria){
            ?>
            <tr>
                <td><?php echo $subcategoria['id_subcategoria'];?></td>
                <td><?php echo $subcategoria['subcategoria'];?></td>
                <td><?php echo $subcategoria['ativo_subcategoria'];?></td>
                <td><a href="index.php?link=3&acao=Alterar&id=<?php echo $subcategoria['id_subcategoria'];?>">Editar</a></td>
                <td ><a href="index.php?link=3&acao=Excluir&id=<?php echo $subcategoria['id_subcategoria'];?>"> Excluir</a></td>
            </tr>
            <?php } 
            }else{
                    echo "Não existem dados cadastrados.";
            }?>
        </table>
        
    </body>
</html>