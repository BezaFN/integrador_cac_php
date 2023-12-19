<?php ob_start();
session_start(); ?>
<?php 
    if ($_POST){
        if( ($_POST['email']=="administrador") && ($_POST['password']=='cac') ){
          $_SESSION['usuario']="Admin";
          $_SESSION['logueado']='S';
          header("location:../pages/listado_admin.php");
          die();
        }
        else{
           $_SESSION['usuario'] = $_POST['email'];
           header("location:../pages/listado.php");
           die();
        }
    }?>
    <?php include_once("../includes/header.php")?>
    <?php include_once("../includes/main_login.php")?>
    <?php include_once("../includes/footer.php")?>