<div id="area_cad">
    <form id="formulario_exp" action="gravar.php" method="POST" enctype="multipart/form-data">
        <legend>Contato</legend>
        <label for="nome">Nome:</label>
        <input class="form-control input-lg" name="nome" type="text" maxlength="45" value="">
        <br/>
        <label for="empresa">Empresa:</label>
        <input class="form-control input-lg" name="empresa" type="text" maxlength="45" value="">
        <br/>
        <label for="email">Email:</label>
        <input class="form-control input-lg" name="email" type="text" maxlength="45" value="">
        <br/>
        <label for="cidade">Cidade:</label>
        <input class="form-control input-lg" name="cidade" type="text" maxlength="200" value="">
        <br/>
        <label>Mensagem:</label><br><textarea name="msg" class="form-control input-lg" cols="45" rows="8"></textarea><br>

        <input class="form-control input-lg" type="submit" value="Enviar"/>
        <input class="form-control input-lg" type="reset" value="Lmpar"/>
    </form>
</div>