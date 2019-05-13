<?php 
$key=$_GET['q'];
    $array = array();
    $con=mysqli_connect("localhost","root","","sistempakar");
    $query=mysqli_query($con, "select * from data_penyakit where gejala LIKE '{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
    echo $array[] = $row['gejala']." --> ".$array[] = $row['kode_penyakit']."<br>";
    }
    

 ?>