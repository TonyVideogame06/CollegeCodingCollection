<?php
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
} 
function printHeaderPresupuestoFinalParte1()
{
    echo '<h1 class="bold">Tu PC ideal es:</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo  '<b>Tarjeta Madre</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Procesador</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>HDD</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>SDD</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>RAM</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Fuente</b>';
    echo '</div>';
    echo '</div>';
}
function printPresupuestoFinalParte1($marcaMother,$modeloMother,$marcaProcesador,$modeloProcesador,$marcaHDD,$modeloHDD,$espacioHDD,$marcaSDD,$modeloSDD,$espacioSDD,$marcaRAM,$modeloRAM,$marcaFuentes,$modeloFuentes)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$marcaMother.' '.$modeloMother.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$marcaProcesador.' '.$modeloProcesador.'';
    echo '</div>';
    if($espacioHDD==NULL)
    {
        echo '<div class="col-md-2">';
        echo 'Ninguno';
        echo '</div>';
    }
    else
    {
        echo '<div class="col-md-2">';
        echo ''.$marcaHDD.' '.$modeloHDD.'';
        echo '</div>';
    }
    if($espacioSDD==NULL)
    {
        echo '<div class="col-md-2">';
        echo 'Ninguno';
        echo '</div>';
    }
    else
    {
        echo '<div class="col-md-2">';
        echo ''.$marcaSDD.' '.$modeloSDD.'';
        echo '</div>';
    }
    echo '<div class="col-md-2">';
    echo ''.$marcaRAM.' '.$modeloRAM.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$marcaFuentes.' '.$modeloFuentes.'';
    echo '</div>';
    echo '</div>';
}
function printHeaderPresupuestoFinalParte2()
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo  '<b>Tarjeta de Video</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Gabinete</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Monitor</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Mouse</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Teclado</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Precio Final</b>';
    echo '</div>';
    echo '</div>';
}
function printPresupuestoFinalParte2($marcaVideo,$modeloVideo,$marcaGabinetes,$modeloGabinetes,$marcaMonitor,$modeloMonitor,$marcaMouse,$modeloMouse,$marcaTeclado,$modeloTeclado,$precioFinal)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$marcaVideo.' '.$modeloVideo.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$marcaGabinetes.' '.$modeloGabinetes.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$marcaMonitor.' '.$modeloMonitor.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$marcaMouse.' '.$modeloMouse.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$marcaTeclado.' '.$modeloTeclado.'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '$'.formatMoney($precioFinal).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderMotherboards()
{
    echo '<h1 class="bold">Tarjetas Madre</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Categoria</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Procesador</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Circuito</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Socket</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Almacenamiento</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Tipo de RAM</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printMotherboars($motherboards)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$motherboards->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$motherboards->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$motherboards->getCategoria().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$motherboards->getProcesador().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$motherboards->getCircuitos().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$motherboards->getSocket().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$motherboards->getGB().' GB';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$motherboards->getRam().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '$'.formatMoney($motherboards->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderProcesadores()
{
    echo '<h1 class="bold">Procesadores</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-3">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-3">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>N&uacute;cleos</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Smart Cache</b>';
    echo '</div>';
    echo '<div class="col-md-3">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printProcesadores($procesadores)
{
    echo '<div class="row">';
    echo '<div class="col-md-3">';
    echo ''.$procesadores->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-3">';
    echo ''.$procesadores->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$procesadores->getNucleos().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$procesadores->getSmartCache().'';
    echo '</div>';
    echo '<div class="col-md-3">';
    echo '$'.formatMoney($procesadores->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderHDD($espacioHDD)
{
    if($espacioHDD==NULL)
    {
        echo '';
    }
    else
    {
        echo '<h1 class="bold">Discos Duros Mec&aacute;nicos</h1>';
        echo '<div class="row">';
        echo '<div class="col-md-2">';
        echo  '<b>Marca</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo '<b>Modelo</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo  '<b>Almacenamiento</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo '<b>RPM</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo  '<b>MB/s</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo  '<b>Cache</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo  '<b>Pulgadas</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo  '<b>SATA</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo '<b>Precio</b>';
        echo '</div>';
        echo '</div>';
    }
}
function printHDD($hdds)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$hdds->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$hdds->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$hdds->getGB().' GB';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$hdds->getRPM().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$hdds->getMBxseg().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$hdds->getCache().' MB';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$hdds->getInches().' "';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$hdds->getSata().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '$'.formatMoney($hdds->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderSDD($espacioSDD)
{
    if($espacioSDD==NULL)
    {
        echo '';
    }
    else
    {
        echo '<h1 class="bold">Discos Duros de Estado S&oacute;lido</h1>';
        echo '<div class="row">';
        echo '<div class="col-md-1">';
        echo  '<b>Marca</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo '<b>Modelo</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo  '<b>Almacenamiento</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo '<b>Lectura (Mb/s)</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo  '<b>Escritura (Mb/s)</b>';
        echo '</div>';
        echo '<div class="col-md-1">';
        echo  '<b>Puertos</b>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo '<b>Precio</b>';
        echo '</div>';
        echo '</div>';
    }
}
function printSDD($sdds)
{
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo ''.$sdds->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$sdds->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$sdds->getGB().' GB';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$sdds->getRead().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$sdds->getWrite().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$sdds->getPuertos().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '$'.formatMoney($sdds->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderRAM()
{
    echo '<h1 class="bold">Memorias RAM</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Memoria</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>MHZ</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Pines</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>DDR</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printRAM($ram)
{
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo ''.$ram->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$ram->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$ram->getGB().' GB';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$ram->getMHZ().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$ram->getPin().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$ram->getDDR().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '$'.formatMoney($ram->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderFuentes()
{
    echo '<h1 class="bold">Fuentes de Poder</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Certificado 80 Plus</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>N&uacute;mero de conectores SATA</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>Watts</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printFuentes($fuentes)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$fuentes->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$fuentes->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$fuentes->getCertificado().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$fuentes->getNumSATA().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$fuentes->getWatts().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '$'.formatMoney($fuentes->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderVideo()
{
    echo '<h1 class="bold">Tarjetas de Video</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Memoria</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Interfaz</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>HDMI</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo  '<b>DisplayPort</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printVideo($video)
{
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo ''.$video->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$video->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$video->getGB().' GB';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$video->getInterfaz().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$video->getHDMI().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$video->getDisplayPort().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '$'.formatMoney($video->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderGabinetes()
{
    echo '<h1 class="bold">Gabinetes</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Ventana</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>ATX</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Micro-ATX</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Mini-ITX</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>EATX</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Mini-DTX</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Thin Mini-ITX</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Fuente</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Watts</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printGabinetes($gabinetes)
{
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getVentana().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getATX().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getMicroATX().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getMiniITX().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getEATX().' ';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getMiniDTX().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getTMiniITX().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getFuente().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$gabinetes->getWatts().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '$'.formatMoney($gabinetes->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderMonitores()
{
    echo '<h1 class="bold">Monitores</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Pulgadas</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>HDMI</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>DisplayPort</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>VGA</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>NVIDIA</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>AMD</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Resoluci&oacute;n</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Definici&oacute;n</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Curva</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printMonitores($monitores)
{
    echo '<div class="row">';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getInches().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getHDMI().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getDisplayPort().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getVGA().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getNVIDIA().' ';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getAMD().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getResolucion().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getDefinicion().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$monitores->getCurva().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '$'.formatMoney($monitores->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderMice()
{
    echo '<h1 class="bold">Rat&oacute;nes</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Conectividad</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Detecci&oacute;n</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Botones</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Resoluci&oacute;n</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Color</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printMice($mice)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$mice->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$mice->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$mice->getConectividad().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.utf8_encode($mice->getDeteccion()).'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$mice->getBotones().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$mice->getResolucion().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$mice->getColor().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '$'.formatMoney($mice->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
function printHeaderTeclado()
{
    echo '<h1 class="bold">Teclados</h1>';
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo  '<b>Marca</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Modelo</b>';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo '<b>Retroiluminaci&oacute;n</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Tipo</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Conectividad</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Idioma</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo  '<b>Color</b>';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '<b>Precio</b>';
    echo '</div>';
    echo '</div>';
}
function printTeclado($teclado)
{
    echo '<div class="row">';
    echo '<div class="col-md-2">';
    echo ''.$teclado->getMarca().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$teclado->getModelo().'';
    echo '</div>';
    echo '<div class="col-md-2">';
    echo ''.$teclado->getRetroiluminacion().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.utf8_encode($teclado->getTipo()).'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.utf8_encode($teclado->getConectividad()).'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.utf8_encode($teclado->getIdioma()).'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo ''.$teclado->getColor().'';
    echo '</div>';
    echo '<div class="col-md-1">';
    echo '$'.formatMoney($teclado->getPrecio()).' MXN';
    echo '</div>';
    echo '</div>';
}
?>