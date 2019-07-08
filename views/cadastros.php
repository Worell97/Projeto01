Cadastros de tecnologias conhecidas e detalhes sobre o nível de conhecimento
<h3> <?php if(!empty($resultado)){echo $resultado;} ?></h3>
<div id="area_cad">
    <form id="formulario_exp" action="cadastraExp.php'" method="POST" enctype="multipart/form-data">
        <legend>Experiências</legend>
        <label for="empresa">Empresa:</label>
        <input class="form-control input-lg"name="empresa" type="text" maxlength="45" value="">
        <br/>
        <label for="cargo">Cargo:</label>
        <input class="form-control input-lg"name="cargo" type="text" maxlength="45" value="">
        <br/>
        <label for="cidade">Cidade:</label>
        <input class="form-control input-lg"name="cidade" type="text" maxlength="200" value="">
        <br/>
        <label for="periodoi">Periodo:</label>
        <input class="form-control input-lg"name="periodoi" type="date" value="">
        <label for="periodof">até:</label>
        <input class="form-control input-lg"name="periodof" type="date" value="">
        <br/>
        <label>Descrição:</label><br><textarea name="msg" class="form-control input-lg" cols="35" rows="8"></textarea><br>

        <input class="form-control input-lg"type="submit" value="Enviar"/>
        <input class="form-control input-lg"type="reset" value="Limpar"/>
    </form>
    <br/>
    <br/>
    <form id="formulario_tec" action="cadastraTec.php" method="POST" enctype="multipart/form-data">
        <legend>Tecnologias</legend>        
        <label for="nome">Nome:</label>
        <input class="form-control input-lg"name="nome" type="text" maxlength="45" value="">
        <br/>
        <label>Descrição:</label><br><textarea name="msg" class="form-control input-lg" cols="35" rows="8"></textarea><br>
        <br/>
        <input class="form-control input-lg"type="submit" value="Enviar"/>
        <input class="form-control input-lg"type="reset" value="Limpar"/>
    </form>
</div>