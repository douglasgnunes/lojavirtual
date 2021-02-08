<?php
    require_once'../include/config.php';
    require_once'../include/crud.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loja Virtual</title>
    </head>
    <body>
        <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table border="1" align="center" width="750" cellpadding="0" cellspacing="1">
                        <tr><td colspan="2"><?php include 'cabecalho.php'; ?></td></tr>
                        <tr>
                            <td width="140"><?php include 'menu.php'; ?></td>
                            <td>
                                <table width="600" cellpadding="0" cellspacing="0"> 
                                    <tr>
                                        <td>
                                        <?php 
                                        
                                        $link = $_GET['link'];
                                        $pag[1] = "home.php";
                                        $pag[2] = "lst/lst_categoria.php";
                                        $pag[3] = "frm/frm_categoria.php";
                                        $pag[4] = "lst/lst_subcategoria.php";
                                        $pag[5] = "frm/frm_subcategoria.php";
                                        if(!empty($link)){
                                            if(file_exists($pag[$link]))
                                                include $pag[$link];
                                            else    
                                                include "home.php";
                                        }else{
                                            include "home.php";
                                        }
                                        //include 'home.php'; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td colspan="2"><?php include 'rodape.php'; ?></td></tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>