<?php
    include("config.php");
    $sql_lietke="SELECT * FROM tblhousehold";
    $row_lietke=mysqli_query($mysqli,$sql_lietke);
?>
<table>
        <tr>
            <th>STT</th>
            <th>Họ và tên</th>
            <th>Tháng</th>
            <th>Chỉ số đầu</th>
            <th>Chỉ số cuối</th>
            <th>Số điện tiêu thụ</th>
            <th>Tiền phải trả</th>
            <th>Hoạt động</th>
        </tr>
    <?php
        $i=0;
        while($row =mysqli_fetch_array($row_lietke)){
            $i++;
        $sodientieuthu=$row['chisocuoi']-$row['chisodau'];
        $tienphaitra="";
        if($sodientieuthu<=50){
            $tienphaitra=$sodientieuthu*1678;
        }
        elseif (($sodientieuthu>50)&&($sodientieuthu<=100)) {
            $tienphaitra=50*1678+($sodientieuthu-50)*1734;
        }
        elseif (($sodientieuthu>100)&&($sodientieuthu<=200)) {
            $tienphaitra=50*1678+50*1734+($sodientieuthu-100)*2014;
        }
        elseif (($sodientieuthu>200)&&($sodientieuthu<=300)) {
            $tienphaitra=50*1678+50*1734+50*2014+($sodientieuthu-200)*2536;
        }
        elseif (($sodientieuthu>300)&&($sodientieuthu<=400)) {
            $tienphaitra=50*1678+50*1734+50*2014+50*2536+($sodientieuthu-300)*2834;
        }
        elseif (($sodientieuthu>400)&&($sodientieuthu<=500)) {
            $tienphaitra=50*1678+50*1734+50*2014+50*2536+50*2834+($sodientieuthu-400)*2927;
        }
?>
        
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["ten"] ?></td>
            <td><?php echo $row["thang"] ?></td>
            <td><?php echo $row["chisodau"] ?></td>
            <td><?php echo $row["chisocuoi"] ?></td>
            <td><?php echo $sodientieuthu ?></td>
            <td><?php echo $tienphaitra ?></td>
            <td>
                <a href="xuli.php?query=xoa&id=<?php echo $row['id'] ?> ">Xóa</a> |
                <a href="sua.php?query=sua&id=<?php echo $row['id'] ?> ">Sửa</a>
            </td>
        </tr>
<?php
        }
?>
</table>