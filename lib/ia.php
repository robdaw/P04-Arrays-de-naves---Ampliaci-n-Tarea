<?php
/**
 * Clase creada por Roberto Sánchcez Camacho
 * clase Inteligencia artificial
 */
class ia
{

//---Declaración_de_propiedades

  public $tipo="nave";
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;

//---ARRAYS---


//---Naves_humanas
public $navesHumano=[];

//---Inteligencia_artificial

public $navesIA=[];

//---Declaración_de_GETTERS
  public function getColumna() {
    return $this->mapaCol;
  }

  public function getFila() {
    return $this->mapaFil;
  }

  public function getNave() {
    return $this->numNaves;
  }

  public function getNaveshumano(){
    return $this->navesHumano;
  }

  public function getNavesIA(){

  	$this->navesIA[0]["fil"]=1;

    return $this->navesIA;

  }

//---Declaración_de_SETTERS

  public function setMapaCol($mapaCol){
      if($mapaCol>3 ){
         $this->mapaCol = 3;

      }elseif ($mapaCol<0) {
        $this->mapaCol = 0;

      }else{
        $this->mapaCol = $mapaCol;
      }

  }

  public function setMapaFil($mapaFil){
      if($mapaFil>3 ){
         $this->mapaFil = 3;

 }    elseif ($mapaFil<0) {
        $this->mapaFil = 0;

 }    else{
        $this->mapaFil = $mapaFil;
  }

  }

  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }

  public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }


//---Movimiento_de_la_nave_RAMDOM
  public function randompos() {
	$this->columna=rand(0,3);

	$this->fila=rand(0,3);
  }


}

?>
