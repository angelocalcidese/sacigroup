<td colspan="2" >
    <div align="center" style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<?
$sql1 = "SELECT * FROM associazione  where login = '$login'";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      
      $logink = $macrogruppo["loginorig"];
      $loginw = $macrogruppo["login"];
			}  }
if($logink==""){$logink=$loginw;}
$sql1 = "SELECT * FROM logo  where login = '$logink' ";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $estensione = $macrogruppo["estensione"];
      $logolunghezza = $macrogruppo["logolungezza"];	
      $logoaltezza = $macrogruppo["logoaltezza"];
      $nomefile = $macrogruppo["nomefile"];
            
      #$nomefile="../../".$nomefile;		     
			}  } 
if( file_exists($nomefile)) 
      {} else { $nomefile="./carlopoma.png";}
$sql1 = "SELECT * FROM associazione  where login = '$logink' ";
#echo $sql1; 
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    while($macrogruppo = $result->fetch_assoc())
		{ 
      $intesta1 = $macrogruppo["intesta1"];	
      $intesta2 =  $macrogruppo["intesta2"];
      $indirizzo = $macrogruppo["indirizzo"];
      $localita = $macrogruppo["localita"];
      $cf = $macrogruppo["cf"];
      $runs = $macrogruppo["runs"];
      $assistiti = $macrogruppo["assistiti"];
      $soci = $macrogruppo["soci"];
      $volontari = $macrogruppo["volontari"];
      $medico = $macrogruppo["medico"];
      $donazioni = $macrogruppo["donazioni"];
			}  }
            $marcio=0;   
if($assistiti=="SI"){$marcio++;$marcio++;$puassi=$marcio;}            
if($volontari=="SI"){$marcio++;$puvolo=$marcio;}            
if($donazioni=="SI"){$marcio++;$pudona=$marcio;}            
if($soci=="SI"){$marcio++;$pusoci=$marcio;}  
#echo $pusoci;           
$marcio++;$purendi=$marcio;                      
?>              

<?
$width=0;$height=0;
list($width, $height, $type, $attr) = getimagesize($nomefile);//lego i dati
#echo $width."  ".$height."<br>"; exit;
#if ($height > $width)
if($width==0 or $height==0){}else
{$proporzione=$height/$width;
$proporzione1=$width/$height;
}
#else
#{$proporzione=$width/$height;}
#echo $proporzione."<br>";
#$altezza=$width*$proporzione1;
$lunghezza=150*$proporzione1;
?>
    <img border="0" id="gfgimage" src="<? echo $nomefile; ?>" width="<? echo $lunghezza;?>" height="150"> 
   <center>
   <b><font face="Arial" size="3" color="#666666"><? echo $intesta1." ".$intesta2; ?></font></b><br>
    <font face="Arial" size="2" color="#666666"><? echo $indirizzo." - ".$localita; ?></font>
    </center> 
    </div>
</td>
<? 