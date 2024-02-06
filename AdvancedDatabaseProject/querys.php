<?php
if(!empty($_POST))
{
    
    $sql =  "SELECT * FROM presupuestos.procesadores WHERE Modelo LIKE '%$modelopro%' ORDER BY Precio ASC";
    $result = $conn->query($sql);
    $procesadores=[];
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $procesadoresx = new Procesador($row["ID"],$row["Marca"],$row["Modelo"],$row["Nucleos"],$row["Smart_Cache"],$row["Precio"]);
        $procesadores[] = $procesadoresx;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql12 =  "SELECT Marca,Modelo,Precio FROM presupuestos.procesadores  WHERE Modelo LIKE '%$modelopro%' ORDER BY Precio ASC LIMIT 1";
    $result12 = $conn->query($sql12);
    if ($result12->num_rows > 0) {
        $row12=$result12->fetch_assoc();
        $marcaProcesador=$row12["Marca"];
        $modeloProcesador=$row12["Modelo"];
        $precioProcesador=$row12["Precio"];
    }
    $sql15 =  "SELECT Marca,Modelo,Precio FROM presupuestos.ram  WHERE GB = '$almacenamientoram' ORDER BY Precio ASC LIMIT 1";
    $result15 = $conn->query($sql15);
    if ($result15->num_rows > 0) {
        $row15=$result15->fetch_assoc();
        $marcaRAM = $row15["Marca"];
        $modeloRAM = $row15["Modelo"];
        $precioRAM = $row15["Precio"];
    }
    $sql1 =  "SELECT * FROM presupuestos.motherboard WHERE Marca = '$marcamother' AND Procesador = '$marcaProcesador' AND RAM LIKE '%$tiporamform%' ORDER BY Precio ASC";
    $result1 = $conn->query($sql1);
    $motherboards=[];
    if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $motherboardsx = new Motherboard($row1["ID"],$row1["Marca"],$row1["Modelo"],$row1["Categoria"],$row1["Procesador"],$row1["Circuito"],$row1["Socket"],$row1["GB"],$row1["RAM"],$row1["Precio"]);
        $motherboards[] = $motherboardsx;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql2 =  "SELECT * FROM presupuestos.hdd WHERE GB = '$almacenamientohdd' ORDER BY Precio ASC";
    $result2 = $conn->query($sql2);
    $hdds=[];
    if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $hddsx = new HDD($row2["ID"],$row2["Marca"],$row2["Modelo"],$row2["GB"],$row2["RPM"],$row2["MB/s"],$row2["Cache"],$row2["Inches"],$row2["SATA"],$row2["Precio"]);
        $hdds[] = $hddsx;
     }
    } 
    $sql3 =  "SELECT * FROM presupuestos.sdd WHERE GB = '$almacenamientosdd' ORDER BY Precio ASC";
    $result3 = $conn->query($sql3);
    $sdds=[];
    if ($result3->num_rows > 0) {
    while($row3 = $result3->fetch_assoc()) {
        $sddsx = new SDD($row3["ID"],$row3["Marca"],$row3["Modelo"],$row3["GB"],$row3["Lectura"],$row3["Escritura"],$row3["Puertos"],$row3["Precio"]);
        $sdds[] = $sddsx;
     }
    } 
    $sql4 =  "SELECT * FROM presupuestos.ram WHERE GB = '$almacenamientoram' AND DDR = '$tiporamform' ORDER BY Precio ASC";
    $result4 = $conn->query($sql4);
    $ram=[];
    if ($result4->num_rows > 0) {
    while($row4 = $result4->fetch_assoc()) {
        $ramx = new RAM($row4["ID"],$row4["Marca"],$row4["Modelo"],$row4["GB"],$row4["MHZ"],$row4["PIN"],$row4["DDR"],$row4["Precio"]);
        $ram[] = $ramx;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql5 =  "SELECT * FROM presupuestos.fuentes WHERE Certificado = '$certificadofuentes' ORDER BY Precio ASC";
    $result5 = $conn->query($sql5);
    $fuentes=[];
    if ($result5->num_rows > 0) {
    while($row5 = $result5->fetch_assoc()) {
        $fuentesx = new Fuentes($row5["ID"],$row5["Marca"],$row5["Modelo"],$row5["Certificado"],$row5["NumSATA"],$row5["Watts"],$row5["Precio"]);
        $fuentes[] = $fuentesx;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql6 =  "SELECT * FROM presupuestos.video WHERE Modelo LIKE '%$modelovideo%' ORDER BY Precio ASC";
    $result6 = $conn->query($sql6);
    $video=[];
    if ($result6->num_rows > 0) {
    while($row6 = $result6->fetch_assoc()) {
        $videox = new Video($row6["ID"],$row6["Marca"],$row6["Modelo"],$row6["Memoria"],$row6["Interfaz"],$row6["HDMI"],$row6["DisplayPort"],$row6["Precio"]);
        $video[] = $videox;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql7 =  "SELECT * FROM presupuestos.gabinetes WHERE Marca = '$marcagabinetes' ORDER BY Precio ASC";
    $result7 = $conn->query($sql7);
    $gabinetes=[];
    if ($result7->num_rows > 0) {
    while($row7 = $result7->fetch_assoc()) {
        $gabinetesx = new Gabinete($row7["ID"],$row7["Marca"],$row7["Modelo"],$row7["Ventana"],$row7["ATX"],$row7["MicroATX"],$row7["MiniITX"],$row7["EATX"],$row7["MiniDTX"],$row7["ThinMiniITX"],$row7["Fuente"],$row7["Watts"],$row7["Precio"]);
        $gabinetes[] = $gabinetesx;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql8 =  "SELECT * FROM presupuestos.monitores WHERE Marca = '$marcamonitores' ORDER BY Precio ASC";
    $result8 = $conn->query($sql8);
    $monitores=[];
    if ($result8->num_rows > 0) {
    while($row8 = $result8->fetch_assoc()) {
        $monitoresx = new Monitores($row8["ID"],$row8["Marca"],$row8["Modelo"],$row8["Inches"],$row8["HDMI"],$row8["DisplayPort"],$row8["VGA"],$row8["Nvidia"],$row8["AMD"],$row8["Resolucion"],$row8["Definicion"],$row8["Curva"],$row8["Precio"]);
        $monitores[] = $monitoresx;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql9 =  "SELECT * FROM presupuestos.mouse WHERE Marca = '$marcamice' ORDER BY Precio ASC";
    $result9 = $conn->query($sql9);
    $mice=[];
    if ($result9->num_rows > 0) {
    while($row9 = $result9->fetch_assoc()) {
        $micex = new Mice($row9["ID"],$row9["Marca"],$row9["Modelo"],$row9["Conectividad"],$row9["Deteccion"],$row9["Botones"],$row9["Resolucion"],$row9["Color"],$row9["Precio"]);
        $mice[] = $micex;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql10 =  "SELECT * FROM presupuestos.teclado WHERE Marca = '$marcateclado' ORDER BY Precio ASC";
    $result10 = $conn->query($sql10);
    $teclado=[];
    if ($result10->num_rows > 0) {
    while($row10 = $result10->fetch_assoc()) {
        $tecladox = new Teclados($row10["ID"],$row10["Marca"],$row10["Modelo"],$row10["Retroiluminacion"],$row10["Tipo"],$row10["Conectividad"],$row10["Idioma"],$row10["Color"],$row10["Precio"]);
        $teclado[] = $tecladox;
     }
    } else {
        echo "No hay resultados en la tabla";
    }
    $sql11 =  "SELECT Marca,Modelo,Precio FROM presupuestos.motherboard  WHERE Marca = '$marcamother' AND Procesador = '$marcaProcesador' AND RAM LIKE '%$tiporamform%' ORDER BY Precio ASC LIMIT 1";
    $result11 = $conn->query($sql11);
    if ($result11->num_rows > 0) {
        $row11=$result11->fetch_assoc();
        $marcaMother = $row11["Marca"];
        $modeloMother = $row11["Modelo"];
        $precioMother = $row11["Precio"];
    }
    $sql13 =  "SELECT Marca,Modelo,GB,Precio FROM presupuestos.hdd  WHERE GB = '$almacenamientohdd' ORDER BY Precio ASC LIMIT 1";
    $result13 = $conn->query($sql13);
    if ($result13->num_rows > 0) {
        $row13=$result13->fetch_assoc();
        $marcaHDD = $row13["Marca"];
        $modeloHDD = $row13["Modelo"];
        $espacioHDD = $row13["GB"];
        $precioHDD = $row13["Precio"];
    }
    $sql14 =  "SELECT Marca,Modelo,GB,Precio FROM presupuestos.sdd  WHERE GB = '$almacenamientosdd' ORDER BY Precio ASC LIMIT 1";
    $result14 = $conn->query($sql14);
    if ($result14->num_rows > 0) {
        $row14=$result14->fetch_assoc();
        $marcaSDD = $row14["Marca"];
        $modeloSDD = $row14["Modelo"];
        $espacioSDD = $row14["GB"];
        $precioSDD = $row14["Precio"];
    }
    $sql16 =  "SELECT Marca,Modelo,Precio FROM presupuestos.fuentes  WHERE Certificado = '$certificadofuentes' ORDER BY Precio ASC LIMIT 1";
    $result16 = $conn->query($sql16);
    if ($result16->num_rows > 0) {
        $row16=$result16->fetch_assoc();
        $marcaFuentes = $row16["Marca"];
        $modeloFuentes = $row16["Modelo"];
        $precioFuentes = $row16["Precio"];
    }
    $sql17 =  "SELECT Marca,Modelo,Precio FROM presupuestos.video  WHERE Modelo LIKE '%$modelovideo%' ORDER BY Precio ASC LIMIT 1";
    $result17 = $conn->query($sql17);
    if ($result17->num_rows > 0) {
        $row17=$result17->fetch_assoc();
        $marcaVideo = $row17["Marca"];
        $modeloVideo = $row17["Modelo"];
        $precioVideo = $row17["Precio"];
    }
    $sql18 =  "SELECT Marca,Modelo,Precio FROM presupuestos.gabinetes  WHERE Marca = '$marcagabinetes' ORDER BY Precio ASC LIMIT 1";
    $result18 = $conn->query($sql18);
    if ($result18->num_rows > 0) {
        $row18=$result18->fetch_assoc();
        $marcaGabinetes = $row18["Marca"];
        $modeloGabinetes = $row18["Modelo"];
        $precioGabinetes = $row18["Precio"];
    }
    $sql19 =  "SELECT Marca,Modelo,Precio FROM presupuestos.monitores  WHERE Marca = '$marcamonitores' ORDER BY Precio ASC LIMIT 1";
    $result19 = $conn->query($sql19);
    if ($result19->num_rows > 0) {
        $row19=$result19->fetch_assoc();
        $marcaMonitor = $row19["Marca"];
        $modeloMonitor = $row19["Modelo"];
        $precioMonitor = $row19["Precio"];
    }
    $sql20 =  "SELECT Marca,Modelo,Precio FROM presupuestos.mouse  WHERE Marca = '$marcamice' ORDER BY Precio ASC LIMIT 1";
    $result20 = $conn->query($sql20);
    if ($result20->num_rows > 0) {
        $row20=$result20->fetch_assoc();
        $marcaMouse = $row20["Marca"];
        $modeloMouse = $row20["Modelo"];
        $precioMouse = $row20["Precio"];
    }
    $sql21 =  "SELECT Marca,Modelo,Precio FROM presupuestos.teclado  WHERE Marca = '$marcateclado' ORDER BY Precio ASC LIMIT 1";
    $result21 = $conn->query($sql21);
    if ($result21->num_rows > 0) {
        $row21=$result21->fetch_assoc();
        $marcaTeclado = $row21["Marca"];
        $modeloTeclado = $row21["Modelo"];
        $precioTeclado = $row21["Precio"];
    }
    $precioFinal = $precioMother + $precioProcesador + $precioHDD + $precioSDD + $precioRAM +  $precioFuentes + $precioVideo + $precioGabinetes + $precioMonitor + $precioMouse + $precioTeclado;
    $conn->close();
}
?>