<?php
include("config.php");
$id=$_GET['id'];
$sql_sua="SELECT * FROM tblhousehold WHERE '".$id."' = id ";
$row_sua=mysqli_query($mysqli, $sql_sua);
$row=mysqli_fetch_array($row_sua);
?>
<form action="xuli.php?query=sua&id=<?php echo $row['id'] ?>" method="POST" >
<table>
    <tr>
        <td  style="text-align: center" colspan="2">SỬA</td>
    </tr>
    <tr>
        <td>Họ và tên</td>
       <td><input type="text" name="ten" value="<?php echo $row["ten"] ?>"></td> 
    </tr>
    <tr>
        <td>Tháng</td>
        <td><input type="text" name="thang" value="<?php echo $row["thang"] ?>"></td>
    </tr>
    <tr>
        <td>Chỉ số đầu</td>
        <td><input type="text" name="chisodau" value="<?php echo $row["chisodau"] ?>"></td>
    </tr>
    <tr>
        <td>Chỉ số cuối</td>
        <td><input type="text" name="chisocuoi" value="<?php echo $row["chisocuoi"] ?>"></td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2" ><button type="submit" name="sua">Sửa</button></td>
    </tr>
</table>
</form>