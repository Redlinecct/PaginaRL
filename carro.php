<?php session_start(); 

if(isset ($_SESSION['carrito']) || isset($_POST['marca'])){
if(isset ($_SESSION['carrito'])){
$car=$_SESSION['carrito'];
if (isset($_POST['marca'])){
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $id=$_POST['id'];
    $donde=-1;
    if($donde!=-1){
        $cuanto=$car[$donde]['cantidad']+$cantidad;
        $car[$donde]=array('marca'=>$marca, 'precio'=>$precio, 'cantidad'=>$cantidad, 'id'=>$id );
    }else{
        $car[$donde]=array('marca'=>$marca, 'precio'=>$precio, 'cantidad'=>$cantidad, 'id'=>$id );
    }
}else{
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $id=$_POST['id'];
    $car[]=array('marca'=>$marca, 'precio'=>$precio, 'cantidad'=>$cantidad, 'id'=>$id );
}
$_SESSION['carrito']=$car;
}
}
header("location:".$_SERVER['HTTP_REFERER']."")
?>