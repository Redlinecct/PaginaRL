<?php 
if(isset($_SESSION['carrito'])){
    $car=$_SESSION['carrito'];
}
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count ($car)-1;$i ++){
        if(isset($car[$i])){
        if($car[$i]!=NULL){
        if(!isset ($car['cantidad'])){   
            $car['cantidad']='0';}else{$car['cantidad']=$car['cantidad'];}
            $total_cantidad = $car['cantidad'];
            $total_cantidad ++;
            if(!isset($total_cantidad)){
                $total_cantidad='0';}else{-$total_cantidad = -$total_cantidad;}
                $total_cantidad += $total_cantidad;
            }}}
        }
        if(!isset($total_cantidad)){$total_cantidad='';}else{-$total_cantidad = -$total_cantidad;}
?>
