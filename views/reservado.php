<?php
    if(isset($_GET['resultado'])){
        $resultado = $_GET['resultado'];
    }
?>
<div id="area_login">
    <img id="fundo_login" src="img/Fundo2.jpg">
    <form id="formulario_login" method="post" action="verificaLogin.php">        
        <fieldset>
                <legend></legend>
                <table>
                    <tr>
                        <td><label>Usuário:</label></td>
                        <td><input type="text" name="usuario"/></td>
                    </tr>
                    <tr>
                        <td><label>Senha:</label></td>
                        <td><input type="password" name="senha"/></td>
                    </tr>
                </table>
                <br/>
                <input type="submit" value="Enviar" />
                <input type="reset" value="Limpar"/>
                <br />
                <h3> <?php if(!empty($resultado)){echo $resultado;} ?></h3>
        </fieldset>
    </form>  
</div>