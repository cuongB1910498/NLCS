<div class="chitietdon">
<?php
    // session_start();
    // include("../../admincp/config/config.php");
    $id_khach = $_SESSION['dangnhap'];
    // $sql = "SELECT * From tbl_donhang as a, tbl_chitietdon as b, tbl_dangky as c
    // WHERE a.madon = b.madon AND a.id_dangky = c.id_dangky
    // AND a.id_dangky = $id_khach
    // GROUP BY a.id_dangky";

    $sql_don = "SELECT * From tbl_donhang
    WHERE id_dangky = $id_khach order by madon DESC";
    $query_pro = mysqli_query($mysqli, $sql_don);
    
    
?>

    <table border="1" class="lichsudon">
        <tr>
            <th>STT</th>
            <th>ID DON HANG</th>
            <th>TRANG THAI</th>
            <th>CHI TIET</th>
        </tr>
        <?php
        $i=0; 
        while($row = mysqli_fetch_array($query_pro)){
        $i++;
        ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row['madon'] ?></td>
            <td><?php echo $row['trangthai'] ?></td>
            <td><a href="pages/main/chitietdon.php?id=<?php echo $row['id_dangky'] ?>">chi tiet</a></td>
        </tr>
        <?php 
        }
        ?>
    </table>
</div>