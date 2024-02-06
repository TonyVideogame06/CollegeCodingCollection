<?php

class Pro{
    public $id;
    public $marca;
    public $modelo;
    public $nucleos;
    public $smart_cache;
    public $precio;
    public function __construct($id,$ma,$mo,$n,$s,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setNucleos($n);
        $this->setSmartCache($s);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
        public function getNucleos(){
        return $this->nucleos;
    }
    public function setNucleos($n){
        ($n=='')? $this->nucleos = 'No title' : $this->nucleos=$n;
    }
        public function getSmartCache(){
        return $this->smart_cache;
    }
    public function setSmartCache($s){
        ($s=='')? $this->smart_cache = 'No title' : $this->smart_cache=$s;
    }
        public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Mother{
    public $id;
    public $marca;
    public $modelo;
    public $categoria;
    public $procesador;
    public $circuito;
    public $socket;
    public $gb;
    public $ram;
    public $precio;
    public function __construct($id,$ma,$mo,$ca,$pro,$cir,$so,$g,$r,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setCategoria($ca);
        $this->setProcesador($pro);
        $this->setCircuitos($cir);
        $this->setSocket($so);
        $this->setGB($g);
        $this->setRam($r);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
        public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($ca){
        ($ca=='')? $this->categoria = 'No title' : $this->categoria=$ca;
    }
        public function getProcesador(){
        return $this->procesador;
    }
    public function setProcesador($pro){
        ($pro=='')? $this->procesador = 'No title' : $this->procesador=$pro;
    }
    public function getCircuitos(){
        return $this->circuitos;
    }
    public function setCircuitos($cir){
        ($cir=='')? $this->circuitos = 'No title' : $this->circuitos=$cir;
    }
    public function getSocket(){
        return $this->socket;
    }
    public function setSocket($so){
        ($so=='')? $this->socket = 'No title' : $this->socket=$so;
    }
    public function getGB(){
        return $this->gb;
    }
    public function setGB($g){
        ($g=='')? $this->gb = 'No title' : $this->gb=$g;
    }
    public function getRam(){
        return $this->ram;
    }
    public function setRam($r){
        ($r=='')? $this->ram = 'No title' : $this->ram=$r;
    } 
        public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Mecanico{
    public $id;
    public $marca;
    public $modelo;
    public $gb;
    public $rpm;
    public $mbxseg;
    public $cache;
    public $inches;
    public $sata;
    public $precio;
    public function __construct($id,$ma,$mo,$g,$r,$mb,$ca,$in,$sa,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setGB($g);
        $this->setRPM($r);
        $this->setMBxseg($mb);
        $this->setCache($ca);
        $this->setInches($in);
        $this->setSata($sa);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getGB(){
        return $this->gb;
    }
    public function setGB($g){
        ($g=='')? $this->gb = 'No title' : $this->gb=$g;
    }
        public function getRPM(){
        return $this->rpm;
    }
    public function setRPM($r){
        ($r=='')? $this->rpm = 'No title' : $this->rpm=$r;
    }
        public function getMBxseg(){
        return $this->mbxseg;
    }
    public function setMBxseg($mb){
        ($mb=='')? $this->mbxseg = 'No title' : $this->mbxseg=$mb;
    }
    public function getCache(){
        return $this->cache;
    }
    public function setCache($ca){
        ($ca=='')? $this->ca = 'No title' : $this->cache=$ca;
    }
    public function getInches(){
        return $this->inches;
    }
    public function setInches($in){
        ($in=='')? $this->inches = 'No title' : $this->inches=$in;
    }
    public function getSata(){
        return $this->sata;
    }
    public function setSata($sa){
        ($sa=='')? $this->sata = 'No title' : $this->sata=$sa;
    } 
        public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Solido{
    public $id;
    public $marca;
    public $modelo;
    public $gb;
    public $read;
    public $write;
    public $puertos;
    public $precio;
    public function __construct($id,$ma,$mo,$g,$re,$w,$pu,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setGB($g);
        $this->setRead($re);
        $this->setWrite($w);
        $this->setPuertos($pu);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getGB(){
        return $this->gb;
    }
    public function setGB($g){
        ($g=='')? $this->gb = 'No title' : $this->gb=$g;
    }
        public function getRead(){
        return $this->read;
    }
    public function setRead($re){
        ($re=='')? $this->read = 'No title' : $this->read=$re;
    }
        public function getWrite(){
        return $this->write;
    }
    public function setWrite($w){
        ($w=='')? $this->write = 'No title' : $this->write=$w;
    }
    public function getPuertos(){
        return $this->puertos;
    }
    public function setPuertos($pu){
        ($pu=='')? $this->puertos = 'No title' : $this->puertos=$pu;
    } 
        public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class MemoriaRam{
    public $id;
    public $marca;
    public $modelo;
    public $gb;
    public $mhz;
    public $pin;
    public $ddr;
    public $precio;
    public function __construct($id,$ma,$mo,$g,$m,$pi,$d,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setGB($g);
        $this->setMHZ($m);
        $this->setPin($pi);
        $this->setDDR($d);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getGB(){
        return $this->gb;
    }
    public function setGB($g){
        ($g=='')? $this->gb = 'No title' : $this->gb=$g;
    }
        public function getMHZ(){
        return $this->mhz;
    }
    public function setMHZ($m){
        ($m=='')? $this->mhz = 'No title' : $this->mhz=$m;
    }
        public function getPin(){
        return $this->pin;
    }
    public function setPin($pi){
        ($pi=='')? $this->pin = 'No title' : $this->pin=$pi;
    }
    public function getDDR(){
        return $this->ddr;
    }
    public function setDDR($d){
        ($d=='')? $this->ddr = 'No title' : $this->ddr=$d;
    } 
        public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Poder{
    public $id;
    public $marca;
    public $modelo;
    public $certificado;
    public $numSATA;
    public $watts;
    public $precio;
    public function __construct($id,$ma,$mo,$cer,$ns,$wa,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setCertificado($cer);
        $this->setNumSATA($ns);
        $this->setWatts($wa);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getCertificado(){
        return $this->certificado;
    }
    public function setCertificado($cer){
        ($cer=='')? $this->certificado = 'No title' : $this->certificado=$cer;
    }
        public function getNumSATA(){
        return $this->numSATA;
    }
    public function setNumSATA($ns){
        ($ns=='')? $this->numSATA = 'No title' : $this->numSATA=$ns;
    }
        public function getWatts(){
        return $this->watts;
    }
    public function setWatts($wa){
        ($wa=='')? $this->watts = 'No title' : $this->watts=$wa;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Screen{
    public $id;
    public $marca;
    public $modelo;
    public $gb;
    public $interfaz;
    public $hdmi;
    public $displayPort;
    public $precio;
    public function __construct($id,$ma,$mo,$g,$i,$hd,$dis,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setGB($g);
        $this->setInterfaz($i);
        $this->setHDMI($hd);
        $this->setDisplayPort($dis);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getGB(){
        return $this->gb;
    }
    public function setGB($g){
        ($g=='')? $this->gb = 'No title' : $this->gb=$g;
    }
    public function getInterfaz(){
        return $this->interfaz;
    }
    public function setInterfaz($i){
        ($i=='')? $this->interfaz = 'No title' : $this->interfaz=$i;
    }
        public function getHDMI(){
        return $this->hdmi;
    }
    public function setHDMI($hd){
        ($hd=='')? $this->hdmi = 'No title' : $this->hdmi=$hd;
    }
        public function getDisplayPort(){
        return $this->displayPort;
    }
    public function setDisplayPort($dis){
        ($dis=='')? $this->displayPort = 'No title' : $this->displayPort=$dis;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class CPU{
    public $id;
    public $marca;
    public $modelo;
    public $ventana;
    public $atx;
    public $microATX;
    public $miniITX;
    public $eATX;
    public $miniDTX;
    public $tMiniITX;
    public $fuente;
    public $watts;
    public $precio;
    public function __construct($id,$ma,$mo,$ven,$at,$mat,$mii,$eat,$mid,$tmii,$f,$wa,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setVentana($ven);
        $this->setATX($at);
        $this->setMicroATX($mat);
        $this->setMiniITX($mii);
        $this->setEATX($eat);
        $this->setMiniDTX($mid);
        $this->setTMiniITX($tmii);
        $this->setFuente($f);
        $this->setWatts($wa);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
        public function getVentana(){
        return $this->ventana;
    }
    public function setVentana($ven){
        ($ven=='')? $this->ventana = 'No title' : $this->ventana=$ven;
    }
    public function getATX(){
        return $this->atx;
    }
    public function setATX($at){
        ($at=='')? $this->atx = 'No title' : $this->atx=$at;
    }
    public function getMicroATX(){
        return $this->microATX;
    }
    public function setMicroATX($mat){
        ($mat=='')? $this->microATX = 'No title' : $this->microATX=$mat;
    }
    public function getMiniITX(){
        return $this->miniITX;
    }
    public function setMiniITX($mii){
        ($mii=='')? $this->miniITX = 'No title' : $this->miniITX=$mii;
    }
    public function getEATX(){
        return $this->eATX;
    }
    public function setEATX($eat){
        ($eat=='')? $this->eATX = 'No title' : $this->eATX=$eat;
    }
    public function getMiniDTX(){
        return $this->miniDTX;
    }
    public function setMiniDTX($mid){
        ($mid=='')? $this->miniDTX = 'No title' : $this->miniDTX=$mid;
    }
    public function getTMiniITX(){
        return $this->tMiniITX;
    }
    public function setTMiniITX($tmii){
        ($tmii=='')? $this->tMiniITX = 'No title' : $this->tMiniITX=$tmii;
    }
    public function getFuente(){
        return $this->fuente;
    }
    public function setFuente($f){
        ($f=='')? $this->fuente = 'No title' : $this->fuente=$f;
    }
    public function getWatts(){
        return $this->watts;
    }
    public function setWatts($wa){
        ($wa=='')? $this->watts = 'No title' : $this->watts=$wa;
    } 
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Moni{
    public $id;
    public $marca;
    public $modelo;
    public $inches;
    public $hdmi;
    public $displayPort;
    public $vga;
    public $nvidia;
    public $amd;
    public $resolucion;
    public $definicion;
    public $curva;
    public $precio;
    public function __construct($id,$ma,$mo,$in,$hd,$dis,$vg,$nvi,$am,$res,$def,$cu,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setInches($in);
        $this->setHDMI($hd);
        $this->setDisplayPort($dis);
        $this->setVGA($vg);
        $this->setNVIDIA($nvi);
        $this->setAMD($am);
        $this->setResolucion($res);
        $this->setDefinicion($def);
        $this->setCurva($cu);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getInches(){
        return $this->inches;
    }
    public function setInches($in){
        ($in=='')? $this->inches = 'No title' : $this->inches=$in;
    }
    public function getHDMI(){
        return $this->hdmi;
    }
    public function setHDMI($hd){
        ($hd=='')? $this->hdmi = 'No title' : $this->hdmi=$hd;
    }
        public function getDisplayPort(){
        return $this->displayPort;
    }
    public function setDisplayPort($dis){
        ($dis=='')? $this->displayPort = 'No title' : $this->displayPort=$dis;
    }
    public function getVGA(){
        return $this->vga;
    }
    public function setVGA($vg){
        ($vg=='')? $this->vga = 'No title' : $this->vga=$vg;
    }
    public function getNVIDIA(){
        return $this->nvidia;
    }
    public function setNVIDIA($nvi){
        ($nvi=='')? $this->nvidia = 'No title' : $this->nvidia=$nvi;
    }
    public function getAMD(){
        return $this->amd;
    }
    public function setAMD($am){
        ($am=='')? $this->amd = 'No title' : $this->amd=$am;
    }
    public function getResolucion(){
        return $this->resolucion;
    }
    public function setResolucion($res){
        ($res=='')? $this->resolucion = 'No title' : $this->resolucion=$res;
    }
    public function getDefinicion(){
        return $this->definicion;
    }
    public function setDefinicion($def){
        ($def=='')? $this->definicion = 'No title' : $this->definicion=$def;
    }
    public function getCurva(){
        return $this->curva;
    }
    public function setCurva($cu){
        ($cu=='')? $this->curva = 'No title' : $this->curva=$cu;
    } 
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Mouse{
    public $id;
    public $marca;
    public $modelo;
    public $conectividad;
    public $deteccion;
    public $botones;
    public $resolucion;
    public $color;
    public $precio;
    public function __construct($id,$ma,$mo,$con,$de,$bo,$res,$col,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setConectividad($con);
        $this->setDeteccion($de);
        $this->setBotones($bo);;
        $this->setResolucion($res);
        $this->setColor($col);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getConectividad(){
        return $this->conectividad;
    }
    public function setConectividad($con){
        ($con=='')? $this->conectividad = 'No title' : $this->conectividad=$con;
    }
    public function getDeteccion(){
        return $this->deteccion;
    }
    public function setDeteccion($de){
        ($de=='')? $this->deteccion = 'No title' : $this->deteccion=$de;
    }
    public function getBotones(){
        return $this->botones;
    }
    public function setBotones($bo){
        ($bo=='')? $this->botones = 'No title' : $this->botones=$bo;
    }
    public function getResolucion(){
        return $this->resolucion;
    }
    public function setResolucion($res){
        ($res=='')? $this->resolucion = 'No title' : $this->resolucion=$res;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($col){
        ($col=='')? $this->color = 'No title' : $this->color=$col;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}
class Keyboard{
    public $id;
    public $marca;
    public $modelo;
    public $retroiluminacion;
    public $tipo;
    public $conectividad;
    public $idioma;
    public $color;
    public $precio;
    public function __construct($id,$ma,$mo,$retro,$ti,$con,$idi,$col,$p){
        $this->id = $id;
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setRetroiluminacion($retro);
        $this->setTipo($ti);
        $this->setConectividad($con);
        $this->setIdioma($idi);
        $this->setColor($col);
        $this->setPrecio($p);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($ma){
        ($ma=='')? $this->marca = 'No title' : $this->marca=$ma;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mo){
        ($mo=='')? $this->modelo = 'No title' : $this->modelo=$mo;
    }
    public function getRetroiluminacion(){
        return $this->retroiluminacion;
    }
    public function setRetroiluminacion($retro){
        ($retro=='')? $this->retroiluminacion = 'No title' : $this->retroiluminacion=$retro;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($ti){
        ($ti=='')? $this->tipo = 'No title' : $this->tipo=$ti;
    }
    public function getConectividad(){
        return $this->conectividad;
    }
    public function setConectividad($con){
        ($con=='')? $this->conectividad = 'No title' : $this->conectividad=$con;
    }
    public function getIdioma(){
        return $this->idioma;
    }
    public function setIdioma($idi){
        ($idi=='')? $this->idioma = 'No title' : $this->idioma=$idi;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($col){
        ($col=='')? $this->color = 'No title' : $this->color=$col;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($p){
        ($p=='')? $this->precio = 'No title' : $this->precio=$p;
    }
}