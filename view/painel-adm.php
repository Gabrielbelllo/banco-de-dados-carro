<?php include "view/header.php";?>
<link rel="stylesheet" href="../css/estilo.css">

    <?php  echo $_SESSION['usuarionome'];?>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary p" data-toggle="modal" data-target="#exampleModal">
  Pedidos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ultimos Pedidos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        coringa acaba de Fazer um pedido de serviço de alinhamento
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Visto</button>
      </div>
    </div>
  </div>
</div>
   <p></p>
    <a class="btn btn-primary" href="http://localhost/carro/painel/logoff">Sair</a>


  


    


<?php include "view/footer.php";?>