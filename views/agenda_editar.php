<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script type="text/javascript"> $("#telefone").mask("(00) 00000-0000"); </script>

<div class="container">
  <form method="POST" class="form-signin" style="max-width:300px;margin:auto">
  <h3 class="form-signin-heading" style="text-align:center; background-color:#DAA520; border-radius: 10px;">Contatos - Editar</h3>
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
    <div class="form-group">
      <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" 
      value="<?php echo $agenda['email'] ;?>"> </input>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Endereço" id="endereco" name="endereco" 
      value="<?php echo $agenda['endereco'] ;?>"> </input>
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block btn-success">Salvar</button>
    <a href="<?php echo BASE_URL ?>agenda/" class="btn btn-lg btn-secondary btn-block">Voltar</a>
  </form>
</div>