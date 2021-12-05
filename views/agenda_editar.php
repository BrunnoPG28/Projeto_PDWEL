<h3>Agenda - Editar</h3>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript"> $("#telefone").mask("(00) 00000-0000"); </script>

<form method="POST">
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="Nome" name="nome" 
    value="<?php echo $agenda['nome'] ;?>"> </input>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Descrição" name="descricao" 
    value="<?php echo $agenda['descricao'] ;?>"> </input>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" 
    value="<?php echo $agenda['telefone'] ;?>"> </input>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>

</form>