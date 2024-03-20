<?php
$frequenza=1;
$datask="2019-10-01";
$lun=1;
function giorno($d){
 
    //attento la data deve essere nel formato yyyy-mm-gg
    //anche come separatori (se altri separatori devi modificare)
    $d_ex=explode("-", $d);//attento al separatore
    $d_ts=mktime(0,0,0,$d_ex[1],$d_ex[2],$d_ex[0]);
    $num_gg=(int)date("N",$d_ts);//1 (for Monday) through 7 (for Sunday)
    //per nomi in italiano
    $giorno=array('','lunedì','martedì','mercoledì','giovedì','venerdì','sabato','domenica');//0 vuoto
    return $giorno[$num_gg];
}
//********
#$data="2016-07-03";//domenica
$giornoset=giorno($datask);//output domenica   
#echo  $giornoset;
if ($frequenza==1){

  if ($lun==1) {$dicigiorno="lunedì";
  
    if ($giornoset==$dicigiorno) {
        for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>";
        }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>"; }
                              }
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>"; }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>"; }
                              }    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>"; }
                              }                          
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>";}
                              }                          
                                                    
                              
    $datask = date('Y-m-d',strtotime($datask . "+1 days"));
    $giornoset=giorno($datask);
    if ($giornoset==$dicigiorno) {
    for ($i = 1; $datask < "2019-12-31"; $i++) {
        $datask = date('Y-m-d',strtotime($datask . "+7 days"));
        echo $datask."<br>"; }
                              }                          
                              
                     }         
           


}    
    
?>