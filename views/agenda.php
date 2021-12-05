<?php
   global $config;
   ?>
<h3>Agenda</h3>
<div class="alfabeto" >
   <ul>
      <?php $conta = 0;
         $modificar = 0;
         $cor = array(
             '#98b8d0',
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
<a class = "btn btn-default" style="width:1140px"
   href="<?php echo BASE_URL ?>agenda/cadastrar">Adicionar</a>
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
         <th>
            <center>Telefone</center>
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
          echo "<tr><td colspan=5 
                        style='width: 100%; 
                               background-color:#98b8d0;
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
      <td><?php echo utf8_encode($ag['nome']); ?></td>
      <td><?php echo utf8_encode($ag['descricao']); ?></td>
      <td>
         <center><?php echo $ag['telefone']; ?></center>
      </td>
      <td>
         <center>
            <a class = "btn btn-default" style="width:65px; margin-bottom: 3px;" href="<?php echo BASE_URL ?>agenda/editar/<?php echo $ag['id']; ?>">Editar</a>
            <a onclick="delete_field(<?php echo $ag['id']; ?> );" class = "btn btn-danger"  style="width:65px; margin-bottom: 3px;">Excluir</a>
            <script>
               function delete_field(campo)
               {
                  if (confirm("Tem certeza que deseja excluir?")) 
                  {
                     window.location.href = '<?php echo BASE_URL ?>' + 'agenda/excluir/' + campo;
                     alert('Excluido com sucesso!');  
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
             '#98b8d0',
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