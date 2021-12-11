<?php
   global $config;
   ?>
<div style="background-color:#DAA520; border-radius: 10px; width:300px;"><h1 style="text-align:center">Meus Contatos</h1></div>   
<div class="alfabeto" >
   <ul>
      <?php $conta = 0;
         $modificar = 0;
         $cor = array(
             '#DAA520',
             '#AAA'
         ); ?>    
      <?php $cont = 1;
         $exibir = true;
         $letra;
         $tmp = "" ?>
      <?php foreach ($agenda as $key => $ag): ?>   
      <?php if (count($agenda) > 1)
         {
             if ($key > 0)
             {
                 $keyAnterior = $key - 1;
                 $antes = $agenda[$keyAnterior];
                 $atual = $agenda[$key];
                 if (substr($antes['nome'], 0, 1) == (substr($atual['nome'], 0, 1))) $exibir = false;
                 else $exibir = true;
             }
         }
         ?>
      <?php
         if ($exibir == true)
         {
             echo "<a href='#";
             echo substr($ag['nome'], 0, 1);
             echo "'>";
         
             ($conta % 2 == 0) ? $modificar = 0 : $modificar = 1;
         
             echo "<li style= 'background-color: $cor[$modificar]' ; > ";
         
             echo "";
             echo substr($ag['nome'], 0, 1);
             echo "</li>";
             echo "</a> ";
         
             $conta++;
         }
         
         ?> 
      <?php
         endforeach; ?>
   </ul>
</div>
<div style="text-align:center">
   <a class = "btn btn-success" style="width:300px"
      href="<?php echo BASE_URL ?>agenda/cadastrar">Adicionar</a>
</div>

<br>
<br>
<br>

<?php $exibir = true; ?>
<table class="table table-striped table-bordered table-hover">
   <thead>
      <tr>
         <th width="2">
            <center>Nº</center>
         </th>
         <th width="100" >
            <center>Nome</center>
         </th>
         <th>
            <center>Descrição</center>
         </th>
         <th width="100">
            <center>Telefone</center>
         </th>
         <th>
            <center>E-mail</center>
         </th>
         <th>
            <center>Endereço</center>
         </th>
         <th>
            <center>Ações</center>
         </th>
      </tr>
   </thead>
   <?php foreach ($agenda as $key => $ag): ?>   
   <?php
      if (count($agenda) > 1)
      {
          if ($key > 0)
          {
              $keyAnterior = $key - 1;
              $antes = $agenda[$keyAnterior];
              $atual = $agenda[$key];
              if (substr($antes['nome'], 0, 1) == (substr($atual['nome'], 0, 1)))
              {
                  $exibir = false;
      
              }
              else
              {
                  $exibir = true;
      
              }
      
          }
      }
      
      ?>
   <?php
      if ($exibir == true)
      {
          echo "<tr><td colspan=7 
                        style='width: 100%; 
                               background-color:#DAA520;
                               padding:0;
                               font-size: 25px; ';
                            >
                        ";
      
          echo substr($ag['nome'], 0, 1);
          echo "<a NAME='";
          echo substr($ag['nome'], 0, 1);
          echo "' ></a>";
      
          echo "</td></tr>";
      
          $tmp = $tmp . '   ' . substr($ag['nome'], 0, 1);
      }
      
      ?> 
   <tr>
      <td width="2">
         <center><?php echo $cont++; ?></center>
      </td>
      <td><?php echo ($ag['nome']); ?></td>
      <td><?php echo ($ag['descricao']); ?></td>
      <td>
         <center><?php echo $ag['telefone']; ?></center>
      </td>
      <td>
         <center><?php echo $ag['email']; ?></center>
      </td>
      <td><?php echo ($ag['endereco']); ?></td>
      <td>
         <center>
            <a class = "btn btn-default" style="width:65px; margin-bottom: 3px;" href="<?php echo BASE_URL ?>agenda/editar/<?php echo $ag['id']; ?>">Editar</a>
            
            <a onclick="delete_field(<?php echo $ag['id']; ?> );" class = "btn btn-danger"  style="width:65px; margin-bottom: 3px;" data-bs-toggle="modal" data-bs-target="#excluir">Excluir</a>
            
            <script>
               function delete_field(campo)
               {
                  if (confirm("Tem certeza que deseja excluir?")) 
                  {
                     window.location.href = '<?php echo BASE_URL ?>' + 'agenda/excluir/' + campo;
                     alert('Excluído com sucesso!');  
                  }
               }
               
            </script>
         </center>
      </td>
   </tr>
   <?php
      endforeach; ?>
</table>
<div class="alfabeto" >
   <ul>
      <?php $conta = 0;
         $modificar = 0;
         $cor = array(
             '#DAA520',
             '#AAA'
         ); ?>    
      <?php $cont = 1;
         $exibir = true;
         $letra;
         $tmp = "" ?>
      <?php foreach ($agenda as $key => $ag): ?>   
      <?php if (count($agenda) > 1)
         {
             if ($key > 0)
             {
                 $keyAnterior = $key - 1;
                 $antes = $agenda[$keyAnterior];
                 $atual = $agenda[$key];
                 if (substr($antes['nome'], 0, 1) == (substr($atual['nome'], 0, 1))) $exibir = false;
                 else $exibir = true;
             }
         }
         ?>
      <?php
         if ($exibir == true)
         {
             echo "<a href='#";
             echo substr($ag['nome'], 0, 1);
             echo "'>";
         
             ($conta % 2 == 0) ? $modificar = 0 : $modificar = 1;
         
             echo "<li style= 'background-color: $cor[$modificar]' ; > ";
         
             echo "";
             echo substr($ag['nome'], 0, 1);
             echo "</li>";
             echo "</a> ";
         
             $conta++;
         }
         
         ?> 
      <?php
         endforeach; ?>
   </ul>
</div>