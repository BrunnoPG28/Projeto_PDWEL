<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, height=device-heigth" />
      <meta name="description" content="Agenda" />
      <!-- Styles -->
      <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!-- Scripts -->
      <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
      <script type="text/javascript"> $("#telefone").mask("(00) 00000-0000"); </script>    
      <script src="<?php echo BASE_URL ?>agenda/assets/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <form method="POST" class="form-signin" style="max-width:300px;margin:auto">
            <h3 class="form-signin-heading">Cadastrar Telefone</h3>
            <?php if(isset($aviso) && !empty($aviso)): ?>
            <div class="alert alert-danger" role="alert">
               <?php echo $aviso; ?>
            </div>
            <?php endif; ?>
            <label for="nome" class="sr-only">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required autofocus><br/>
            <label for="descricao" class="sr-only">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" ><br/>
            <label for="telefone" class="sr-only">Telefone</label>
            <input type="text" name="telefone" id=telefone class="form-control" placeholder="Telefone" required><br/>
            <label for="email" class="sr-only">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" ><br/>
            <label for="endereco" class="sr-only">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" ><br/>


            <button class="btn btn-lg btn-primary btn-block" type="submit" >Salvar</button>
            <a href="<?php echo BASE_URL ?>agenda/" class="btn btn-lg btn-secondary btn-block">Voltar</a>
         </form>
      </div>
   </body>
</html>