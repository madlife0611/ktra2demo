<?php
    include("config.php");
    
    if(isset($_POST['them'])){
        $hoten=$_POST['ten'];
        $thang=$_POST['thang'];
        $chisodau=$_POST['chisodau'];
        $chisocuoi=$_POST['chisocuoi'];

        $sql_them=" INSERT INTO tblhousehold(ten, thang, chisodau, chisocuoi)
        VALUE ('".$hoten."','".$thang."','".$chisodau."','".$chisocuoi."')";
        mysqli_query($mysqli,$sql_them);
        header("Location: hienthi.php");
    }
    elseif (($_GET['query']) == 'xoa') {
        $id=$_GET['id'];

        $sql_xoa="DELETE FROM tbl_household WHERE id='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header("Location: hienthi.php");
    }
    elseif (isset($_POST['sua'])) {
      $id=$_GET['id'];
      $ten =$_POST['ten'];
      $thang = $_POST['thang'];
      $chisodau = $_POST['chisodau'];
      $chisocuoi = $_POST['chisocuoi'];
      $sql_sua = "UPDATE tbl_household SET ten = '".$ten."', thang = '".$thang."',chisodau = '".$chisodau."',chisocuoi = '".$chisocuoi."' 
      WHERE '".$id."' = id";
      mysqli_query($mysqli,$sql_sua);
      header("Location: hienthi.php");
    }
?>