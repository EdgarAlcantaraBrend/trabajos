
<?php

    $conexion=mysqli_connect('localhost','root','edgar','prueba');
    $sql="SELECT id,nombre from t_paises";
    $result=mysqli_query($conexion,$sql);
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="select2/select2.min.css">
    <script src="select2/select2.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <section style="text-align:center ;">
        <select>
            <?php 
                while ($ver=mysqli_fetch_row($result)){
            ?>
            <option value="<?php echo $ver[0]?>">
                    <?php echo $ver[1]?>
            </option>

            <?php } ?>
        </select>
    </section>

</body>
</html>