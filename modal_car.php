<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h5>Carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
</div>
      <div class="modal-body">
            <div class="modal-body">
                <div>
                    <div class="p-2">
                        <ul class="list-group mb-3">
                            <?php
                            if(isset($_SESSION['carrito'])){

                            $total=0;

                            for($i=0;$i<=count($car)-1;$i ++){

                                if(isset($car[$i])){

                                if($car[$i]!=NULL){
                            ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div class="row col-12" >
                                    <div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad:  <?php echo $car[$i]['cantidad'] ?> :  <?php echo $car[$i]["marca"]; ?>
                                    </div>
                                    <div class="col-6 p-0"  style="text-align: right; color: #000000;" >
                                    <span class="text-muted"  style="text-align: right; color: #000000;"> <?php echo $car[$i]['precio'] * $car[$i]['cantidad'];?> $</span>
                                    </div>
                                </div>
                            </li>
                            <?php
                            $total=$total + ($car[$i]['precio'] * $car[$i]['cantidad']);
                            }}}}
                            ?>
                            <li class="list-group-item d-flex justify-content-between">
                            <span  style="text-align: left; color: #000000;">Total (CoP)</span>
                            <strong  style="text-align: left; color: #000000;">
                            <?php
                            if(isset($_SESSION['carrito'])){
                            $total=0;
                            for($i=0;$i<=count($car)-1;$i ++){
                                if(isset($car[$i])){
                            if($car[$i]!=NULL){
                            $total=$total + ($car[$i]['precio'] * $car[$i]['cantidad']);
                            }
                            }}}
                            if(!isset($total)){$total = '0';}else{ $total += $total;}
                            echo $total; ?> $</strong>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer"> 
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="../Carrito de compra paso 1/borrarcarro.php">Vaciar carrito</a>
        <a type="button" class="btn btn-success" href="../PaginaRL/Index.php">Continuar pedido </a>
      </div>
    </div>
  </div>
</div>


 