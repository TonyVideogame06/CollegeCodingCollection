<?php
error_reporting(0);
require_once 'connection.php';
require_once 'Models/ClassProjects.php';
$marcamother =  $_POST["motherboard"];
$modelopro = $_POST["procesadores"];
$almacenamientohdd = $_POST["mecanico"];
$almacenamientosdd = $_POST["solido"];
$almacenamientoram = $_POST["ram"];
$tiporamform = $_POST["tiporam"];
$certificadofuentes = $_POST["fuentes"];
$modelovideo = $_POST["video"];
$marcagabinetes = $_POST["gabinetes"];
$marcamonitores = $_POST["monitores"];
$marcamice = $_POST["mouse"];
$marcateclado = $_POST["teclado"];
$presupuestousuario = $_POST["presupuesto"];
require_once 'querys.php';
require_once 'printFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proyecto BDA</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
      <form class="form-horizontal" action="index.php" method="post">
        <fieldset>
        
        <!-- Form Name -->
        <legend><b>Crea tu PC ideal</b></legend>

        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="presupuesto"><b>Presupuesto</b></label>  
          <div class="col-md-4">
          <input id="presupuesto" name="presupuesto" type="number" placeholder="" class="form-control input-md" required="">
          <span class="help-block">Ingrese aquí su presupuesto</span>  
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motherboard"><b>Tarjetas Madre</b></label>
          <div class="col-md-4">
            <select id="motherboard" name="motherboard" class="form-control">
              <option value="ASUS">ASUS</option>
              <option value="MSi">MSi</option>
              <option value="Gigabyte">Gigabyte</option>
              <option value="ASRock">ASRock</option>
              <option value="AORUS">AORUS</option>
              <option value="Biostar">Biostar</option>
              <option value="ELITEGROUP">ELITEGROUP</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="procesadores"><b>Procesadores</b></label>
        <div class="col-md-4">
          <select id="procesadores" name="procesadores" class="form-control">
            <option value="A6">A6</option>
            <option value="A10">A10</option>
            <option value="A8">A8</option>
            <option value="Athlon 2">Athlon 2</option>
            <option value="Athlon 3">Athlon 3</option>
            <option value="Celeron G4">Celeron G4</option>
            <option value="Core i3">Core i3</option>
            <option value="Core i5">Core i5</option>
            <option value="Core i7">Core i7</option>
            <option value="Core i9">Core i9</option>
            <option value="Pentium G3">Pentium G3</option>
            <option value="Pentium G4">Pentium G4</option>
            <option value="Pentium G5">Pentium G5</option>
            <option value="Ryzen 3">Ryzen 3</option>
            <option value="Ryzen 5">Ryzen 5</option>
            <option value="Ryzen 9">Ryzen 9</option>
            <option value="Ryzen Theadripper">Ryzen Theadripper</option>
            <option value="Xeon Silver">Xeon Silver</option>
          </select>
        </div>
      </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="mecanico"><b>Disco Duro Mec&aacute;nico</b></label>
          <div class="col-md-4">
            <select id="mecanico" name="mecanico" class="form-control">
              <option value="0">Ninguno</option>  
              <option value="80">80 GB</option>
              <option value="120">120 GB</option>
              <option value="250">250 GB</option>
              <option value="500">500 GB</option>
              <option value="1000">1 TB</option>
              <option value="2000">2 TB</option>
              <option value="3000">3 TB</option>
              <option value="4000">4 TB</option>
              <option value="5000">5 TB</option>
              <option value="6000">6 TB</option>
              <option value="8000">8 TB</option>
              <option value="10000">10 TB</option>
              <option value="12000">12 TB</option>
              <option value="14000">14 TB</option>
            </select>
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="solido"><b>Disco Duro de Estado Solido</b></label>
          <div class="col-md-4">
            <select id="solido" name="solido" class="form-control">
              <option value="0">Ninguno</option>  
              <option value="16">16 GB</option>
              <option value="32">32 GB</option>
              <option value="120">120 GB</option>
              <option value="128">128 GB</option>
              <option value="240">240 GB</option>
              <option value="250">250 GB</option>
              <option value="256">256 GB</option>
              <option value="480">480 GB</option>
              <option value="500">500 GB</option>
              <option value="512">512 GB</option>
              <option value="960">960 GB</option>
              <option value="1000">1 TB</option>
              <option value="1920">1.92 TB</option>
              <option value="2000">2 TB</option>
              <option value="2280">2.28 TB</option>
              <option value="3840">3.84 TB</option>
              <option value="4000">4 TB</option>
            </select>
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="ram"><b>Memoria RAM</b></label>
          <div class="col-md-4">
            <select id="ram" name="ram" class="form-control">
              <!-- <option value="1">1 GB</option>
              <option value="2">2 GB</option> -->
              <option value="4">4 GB</option>
              <option value="8">8 GB</option>
              <option value="16">16 GB</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="tiporam"><b>Tipo de Memoria RAM</b></label>
          <div class="col-md-4">
            <select id="tiporam" name="tiporam" class="form-control">
              <option value="3">DDR 3</option>
              <option value="4">DDR 4</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="fuentes"><b>Tipo de Certificado de Fuentes de Poder</b></label>
          <div class="col-md-4">
            <select id="fuentes" name="fuentes" class="form-control">
              <option value="Bronze">Bronze</option>
              <option value="Gold">Gold</option>
              <option value="Platinum">Platinum</option>
              <option value="Sin Certificado">Sin Certificado</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="video"><b>Tarjetas de Video</b></label>
        <div class="col-md-4">
          <select id="video" name="video" class="form-control">
            <option value="AMD Pulse RX 5500">AMD Pulse RX 5500</option>
            <option value="AMD Pulse RX 5600">AMD Pulse RX 5600</option>
            <option value="AMD Radeon Pro WX 7100">AMD Radeon Pro WX 7100</option>
            <option value="AMD Radeon RX 550">AMD Radeon RX 550</option>
            <option value="AMD Radeon RX 560">AMD Radeon RX 560</option>
            <option value="AMD Radeon RX 570">AMD Radeon RX 570</option>
            <option value="AMD Radeon RX 5700">AMD Radeon RX 5700</option>
            <option value="AMD Radeon RX 580 ">AMD Radeon RX 580</option>
            <option value="AMD Radeon RX 590">AMD Radeon RX 590</option>
            <option value="AMD Radeon Vega 64">AMD Radeon Vega 64</option>
            <option value="NVIDIA GeForce 1650">NVIDIA GeForce 1650</option>
            <option value="NVIDIA GeForce GT 1030">NVIDIA GeForce GT 1030</option>
            <option value="NVIDIA GeForce GT 710">NVIDIA GeForce GT 710</option>
            <option value="NVIDIA GeForce GTC 1650">NVIDIA GeForce GTC 1650</option>
            <option value="NVIDIA GeForce GTX 1050">NVIDIA GeForce GT 1050</option>
            <option value="NVIDIA GeForce GTX 1060">NVIDIA GeForce GT 1060</option>
            <option value="NVIDIA GeForce GTX 1600">NVIDIA GeForce GT 1600</option>
            <option value="NVIDIA GeForce GTX 1650">NVIDIA GeForce GT 1650</option>
            <option value="NVIDIA GeForce GTX 1660">NVIDIA GeForce GT 1660</option>
            <option value="NVIDIA GeForce N210">NVIDIA GeForce N210</option>
            <option value="NVIDIA GeForce RTX 2060">NVIDIA GeForce RTX 2060</option>
            <option value="NVIDIA GeForce RTX 2070">NVIDIA GeForce RTX 2070</option>
            <option value="NVIDIA GeForce RTX 2080">NVIDIA GeForce RTX 2080</option>
            <option value="NVIDIA Quadro P2000">NVIDIA Quadro P2000</option>
            <option value="NVIDIA Quadro P4000">NVIDIA Quadro P4000</option>
            <option value="NVIDIA Quadro RTX P4000">NVIDIA Quadro RTX P4000</option>
          </select>
        </div>
      </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="gabinetes"><b>Gabinete</b></label>
          <div class="col-md-4">
            <select id="gabinetes" name="gabinetes" class="form-control">
              <option value="ADATA">ADATA</option>
              <option value="Acteck">Acteck</option>
              <option value="Aerocool">Aerocool</option>
              <option value="ASUS">ASUS</option>
              <option value="corsair">corsair</option>
              <option value="Balam Rush">Balam Rush</option>
              <option value="Be Quiet!">Be Quiet!</option>
              <option value="BitFenix">BitFenix</option>
              <option value="Cooler Master">Cooler Master</option>
              <option value="DeepCool">DeepCool</option>
              <option value="WagleWarrior">WagleWarrior</option>
              <option value="Evotec">Evotec</option>
              <option value="Fractal Design">Fractal Design</option>
              <option value="Game Factor">Game Factor</option>
              <option value="Gettech">Gettech</option>
              <option value="Gigabyte">Gigabyte</option>
              <option value="In Win">In Win</option>
              <option value="NZXT">NZXT</option>
              <option value="Raidmax">Raidmax</option>
              <option value="Thermaltake">Thermaltake</option>
              <option value="True Basix">True Basix</option>
              <option value="Vorago">Vorago</option>
              <option value="Xtech">Xtech</option>
              <option value="Yeyian">Yeyian</option>
            </select>
          </div>
        </div>
        <!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="monitores"><b>Monitores</b></label>
  <div class="col-md-4">
    <select id="monitores" name="monitores" class="form-control">
      <option value="Acer">Acer</option>
      <option value="Alienware">Alienware</option>
      <option value="AOC">AOC</option>
      <option value="AORUS">AORUS</option>
      <option value="ASUS">ASUS</option>
      <option value="BenQ">BenQ</option>
      <option value="DELL">DELL</option>
      <option value="Eagle Warrior">Eagle Warrior</option>
      <option value="Game Factor">Game Factor</option>
      <option value="Ghia">Ghia</option>
      <option value="HP">HP</option>
      <option value="Lenovo">Lenovo</option>
      <option value="LG">LG</option>
      <option value="MSi">MSi</option>
      <option value="Qian">Qian</option>
      <option value="Samsung">Samsung</option>
      <option value="ViewSonic">ViewSonic</option>
      <option value="Vorago">Vorago</option>
      <option value="Yeyian">Yeyian</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mouse"><b>Mouse</b></label>
  <div class="col-md-4">
    <select id="mouse" name="mouse" class="form-control">
      <option value="Acteck">Acteck</option>
      <option value="ADATA">ADATA</option>
      <option value="Alienware">Alienware</option>
      <option value="AORUS">AORUS</option>
      <option value="ASUS">ASUS</option>
      <option value="Balam Rush">Balam Rush</option>
      <option value="Cherry">Cherry</option>
      <option value="Cooler Mater">Cooler Mater</option>
      <option value="corsair">corsair</option>
      <option value="Cougar">Cougar</option>
      <option value="DELL">DELL</option>
      <option value="Eagle Warrior">Eagle Warrior</option>
      <option value="Game Factor">Game Factor</option>
      <option value="Gamidads">Gamidads</option>
      <option value="Ghia">Ghia</option>
      <option value="Gigabyte">Gigabyte</option>
      <option value="HP">HP</option>
      <option value="HyperX">HyperX</option>
      <option value="Lenovo">Lenovo</option>
      <option value="Logitech">Logitech</option>
      <option value="Manhattan">Manhattan</option>
      <option value="Microsoft">Microsoft</option>
      <option value="MSi">MSi</option>
      <option value="Naceb">Naceb</option>
      <option value="Razer">Razer</option>
      <option value="Thermaltake">Thermaltake</option>
      <option value="ThunderX3">ThunderX3</option>
      <option value="True Baxis">True Baxis</option>
      <option value="Tt eSPORTS">Tt eSPORTS</option>
      <option value="Urban Factory">Urban Factory</option>
      <option value="Vorago">Vorago</option>
      <option value="Xtech">Xtech</option>
      <option value="Yeyian">Yeyian</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="teclado"><b>Teclado</b></label>
  <div class="col-md-4">
    <select id="teclado" name="teclado" class="form-control">
      <option value="Acteck">Acteck</option>
      <option value="ADATA">ADATA</option>
      <option value="Alienware">Alienware</option>
      <option value="AORUS">AORUS</option>
      <option value="ASUS">ASUS</option>
      <option value="Azio">Azio</option>
      <option value="Blam Rush">Blam Rush</option>
      <option value="Cooler Master">Cooler Master</option>
      <option value="corsair">corsair</option>
      <option value="DELL">DELL</option>
      <option value="Eagle Warrior">Eagle Warrior</option>
      <option value="Game Factor">Game Factor</option>
      <option value="Genius">Genius</option>
      <option value="Ghia">Ghia</option>
      <option value="Gigabyte">Gigabyte</option>
      <option value="HyperX">HyperX</option>
      <option value="Lenovo">Lenovo</option>
      <option value="Logitech">Logitech</option>
      <option value="Manhattan">Manhattan</option>
      <option value="Microsoft">Microsoft</option>
      <option value="Naceb">Naceb</option>
      <option value="Primus">Primus</option>
      <option value="Qian">Qian</option>
      <option value="Razer">Razer</option>
      <option value="Redlemon">Redlemon</option>
      <option value="Verbatim">Verbatim</option>
      <option value="Vorago">Vorago</option>
      <option value="Xtech">Xtech</option>
      <option value="Yeyian">Yeyian</option>
    </select>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="calcular"></label>
  <div class="col-md-4">
    <button id="calcular" name="calcular" class="btn btn-success">Calcular</button>
  </div>
</div>
        </fieldset>
        </form>
	
	<div class="row">
		<div class="col-md-12">
            <div><?php //printHeaderProcesadores();
            if(array_key_exists('calcular',$_POST)){
                if ($almacenamientohdd==0 and $almacenamientosdd>0 or $almacenamientosdd==0 and $almacenamientohdd>0 or $almacenamientosdd>0 and $almacenamientohdd>0)
                {
                    if($presupuestousuario>=$precioFinal)
                    {
                        printHeaderPresupuestoFinalParte1();
                        printPresupuestoFinalParte1($marcaMother,$modeloMother,$marcaProcesador,$modeloProcesador,$marcaHDD,$modeloHDD,$espacioHDD,$marcaSDD,$modeloSDD,$espacioSDD,$marcaRAM,$modeloRAM,$marcaFuentes,$modeloFuentes);
                        printHeaderPresupuestoFinalParte2();
                        printPresupuestoFinalParte2($marcaVideo,$modeloVideo,$marcaGabinetes,$modeloGabinetes,$marcaMonitor,$modeloMonitor,$marcaMouse,$modeloMouse,$marcaTeclado,$modeloTeclado,$precioFinal);
                        printHeaderMotherboards();
                        for ($i = 0; $i < count($motherboards) ; $i++)
                        {
                            printMotherboars($motherboards[$i]);
                        } 
                        printHeaderProcesadores();
                        for ($j = 0; $j < count($procesadores) ; $j++)
                        {
                            printProcesadores($procesadores[$j]);
                        } 
                        printHeaderHDD($espacioHDD);
                        for ($q = 0; $q < count($hdds) ; $q++)
                        {
                            printHDD($hdds[$q]);
                        }
                        printHeaderSDD($espacioSDD);
                        for ($w = 0; $w < count($sdds) ; $w++)
                        {
                            printSDD($sdds[$w]);
                        } 
                        printHeaderRAM();
                        for ($e = 0; $e < count($ram) ; $e++)
                        {
                            printRAM($ram[$e]);
                        } 
                        printHeaderFuentes();
                        for ($r = 0; $r < count($fuentes) ; $r++)
                        {
                            printFuentes($fuentes[$r]);
                        } 
                        printHeaderVideo();
                        for ($t = 0; $t < count($video) ; $t++)
                        {
                            printVideo($video[$t]);
                        } 
                        printHeaderGabinetes();
                        for ($y = 0; $y < count($gabinetes) ; $y++)
                        {
                            printGabinetes($gabinetes[$y]);
                        }
                        printHeaderMonitores();
                        for ($u = 0; $u < count($monitores) ; $u++)
                        {
                            printMonitores($monitores[$u]);
                        }
                        printHeaderMice();
                        for ($o = 0; $o < count($mice) ; $o++)
                        {
                            printMice($mice[$o]);
                        }
                        printHeaderTeclado();
                        for ($p = 0; $p < count($teclado) ; $p++)
                        {
                            printTeclado($teclado[$p]);
                        }
                    }
                    else
                    {
                        echo '<h1 class="bold"><b>Te hace falta presupuesto para tu PC ideal. Deberia ser de: $'.formatMoney($precioFinal).' MXN</b></h1>';
                        printHeaderPresupuestoFinalParte1();
                        printPresupuestoFinalParte1($marcaMother,$modeloMother,$marcaProcesador,$modeloProcesador,$marcaHDD,$modeloHDD,$espacioHDD,$marcaSDD,$modeloSDD,$espacioSDD,$marcaRAM,$modeloRAM,$marcaFuentes,$modeloFuentes);
                        printHeaderPresupuestoFinalParte2();
                        printPresupuestoFinalParte2($marcaVideo,$modeloVideo,$marcaGabinetes,$modeloGabinetes,$marcaMonitor,$modeloMonitor,$marcaMouse,$modeloMouse,$marcaTeclado,$modeloTeclado,$precioFinal);  
                    }
                }
                else
                {
                    echo '<script>alert("Selecciona cierto espacio de almacenamiento ya sea Mecánico o Sólido");</script>';
                }
                
                
             }
            ?></div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>