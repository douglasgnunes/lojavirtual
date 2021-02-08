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
                <td>Categoria</td>
                <td>Ativo</td>
                <td colspan="2">Ação</td>
            </tr>
            <?php
                $categorias = consultar("categoria");
                //var_dump($categorias);
                if($categorias){
                //for($i=1;$i<=3;$i++){
                    foreach($categorias as $categoria){
            ?>
            <tr>
                <td><?php echo $categoria['id_categoria'];?></td>
                <td><?php echo $categoria['categoria'];?></td>
                <td><?php echo $categoria['ativo_categoria'];?></td>
                <td><a href="index.php?link=3&acao=Alterar&id=<?php echo $categoria['id_categoria'];?>">Editar</a></td>
                <td ><a href="index.php?link=3&acao=Excluir&id=<?php echo $categoria['id_categoria'];?>"> Excluir</a></td>
            </tr>
            <?php } 
            }else{
                    echo "Não existem dados cadastrados.";
            }?>
        </table>
        
    </body>
</html>