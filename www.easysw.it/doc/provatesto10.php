<?php
#$testo=$_REQUEST["pippo"];
$rigacomando=$_REQUEST["rigacomando"];
$nomemodulo=$_REQUEST["nomemodulo"];
$ingranaggio=$_REQUEST["ingranaggio"];
$testo=$_REQUEST["testo"];
$parte0=$_REQUEST["parte0"];
$parte1=$_REQUEST["parte1"];
$parte10=$_REQUEST["parte10"];
$parte2=$_REQUEST["parte2"];
$parte3=$_REQUEST["parte3"];
if($parte10=="NO"){
if($parte0=="SI"){
$rigacomando='<div><p>'.$parte2.'</p><input type="text" name="'.$parte1.'" size="'.$parte3.'" </div>'; 
} else {
$rigacomando="";
}
}
$testo=str_replace("'","\'",$testo);


#$nomemodulo="prova";
include "conf_DB.php";

if($ingranaggio==1){
if($parte0=="SI" or $parte10=="SI"){
#$testo=$testo.$rigacomando;
$ce=0; 
$sql = "SELECT *  FROM  bacheca where modulo = '$nomemodulo' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $ce=1;
    }} 
    #echo $ce; exit;
if($ce==1){  
$sql = "UPDATE bacheca set 
testo = '$testo'
where 
modulo = '$nomemodulo' 
";
#echo $sql; 
if ($conn->query($sql) === TRUE)
    { } 
    else { echo  $sql; exit;} 
} else {
$sql = "INSERT INTO 
bacheca (
modulo,
testo 
) VALUES (
'$nomemodulo',
''
)";
#echo  $sql; exit;
 if ($conn->query($sql) === TRUE)
         {} 
         else
         {echo  $sql; exit;} 
}               
$sql = "SELECT *  FROM  bacheca where modulo = '$nomemodulo' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $testo = $macrogruppo["testo"];
    }}
#$testo=$testo.$rigacomando;
if($parte0=="SI" or $parte10=="SI"){
$testo=str_replace("QWE",$rigacomando,$testo);
}
$testo=str_replace("'","\'",$testo);
$sql = "UPDATE bacheca set 
testo = '$testo'
where 
modulo = '$nomemodulo' 
";
if ($conn->query($sql) === TRUE)
    { } 
    else { echo  $sql; exit;}
} 
$sql = "SELECT *  FROM  bacheca where modulo = '$nomemodulo' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $testo= $macrogruppo["testo"];
    }}
} else {
$sql = "SELECT *  FROM  bacheca where modulo = 'base' ";        
#echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($macrogruppo = $result->fetch_assoc())	
	{ 
      $testo = $macrogruppo["testo"];
    }}
}    




#echo $ingranaggio;
#if($ingranaggio==1){echo "testo ".$testo;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <style>
  @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700");
@import url("https://fonts.googleapis.com/css?family=Roboto:400,300,500,700");
body {
	padding: 20px;
	font-family: "open sans";
	color: #555;
}

label {
	font-weight: 600;
}
  </style>
  </head>
  <body>
  <form action="" method="POST">
<div class="container-fluid">
 
 <div class="row">
  <div class="col-xs-12">
   <textarea name="testo" id="ta-1" cols="30" rows="60"><?php echo $testo; ?></textarea>
  </div>
 </div>
 <div class="row">
  <div class="col-xs-12 text-right">
<!--   <button class="btn btn-sm btn-primary" id="btn-get-content">Get Content</button>
   <button class="btn btn-sm btn-primary" id="btn-get-text">Get Text</button>
   <button class="btn btn-sm btn-success" id="btn-set-content">Set Content</button>
   <button class="btn btn-sm btn-danger" id="btn-reset">Reset</button>  -->
<table id="thetable" style=" border: 1px solid #cacdd1; background-color: #009edc;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" cellspacing="0" width="55%" class="table6">
            <tr>
			<td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" >NOME MODULO</font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%"><input type="text" name="nomemodulo" value="<?php echo $nomemodulo; ?>"  size="30" style="background-color: #e4dede; border: 0px; font-size: 12pt;"></td>
			</tr>
             <tr>
            <td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" >MEMORIZZA SENZA AGGIUNTA CAMPO?</font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%">
             <select size="1" name="parte10" style="background-color: #ececee">
					<option >NO</option>
					<option >SI</option>
					</select></td> 
            </tr>
</table>
<br>
<table id="thetable" style=" border: 1px solid #cacdd1; background-color: #009edc;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" cellspacing="0" width="55%" class="table6">            
            <tr>
            <td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" >AGGIUNTA CAMPO?</font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%">
             <select size="1" name="parte0" style="background-color: #ececee">
					<option >NO</option>
					<option >SI</option>
					</select></td> 
            </tr>
            
             <tr>
            <tr>
			<td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" >NOME DEL CAMPO</font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%"><input type="text" name="parte1"   size="30" style="background-color: #e4dede; border: 0px; font-size: 12pt;"></td>
			</tr>
             <tr>
			<td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" >INTESTAZIONE CAMPO</font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%"><input type="text" name="parte2"   size="30" style="background-color: #e4dede; border: 0px; font-size: 12pt;"></td>
			</tr>
             <tr>
			<td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" >LUNGHEZZA DEL CAMPO</font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%"><input type="text" name="parte3"   size="30" style="background-color: #e4dede; border: 0px; font-size: 12pt;"></td>
			</tr>
            <tr>
			<td align="left" style=" border: 1px solid black;" width="35%"><b><font face="Montserrat" color="#ffffff" ></font></b></td>
            <td align="left" style=" border: 1px solid black;" width="65%"><input type="hidden" name="ingranaggio" value="1" />
  <input type="submit" value="Memorizza Modulo" name="B3"> </td>
			</tr>
 </table>              
   
   
   
   
    
  </div>
 </div>

</div>
<script>
(function() {
	var content =
		"<p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzC_Ho_08G0m7PyxJOPLpPujM9UTLxvaE-5nXewscnqa3GMWjGwg' alt='Image result for summernote.js'></p><h1>Summernote</h1>";
	var $sumNote = $("#ta-1")
		.summernote({
			callbacks: {
				onPaste: function(e,x,d) {
					$sumNote.code(($($sumNote.code()).find("font").remove()));
				}
			},

			dialogsInBody: true,
			dialogsFade: true,
			disableDragAndDrop: true,
			//                disableResizeEditor:true,
			height: "400px",
            width: "800px",
			tableClassName: function() {
				alert("tbl");
				$(this)
					.addClass("table table-bordered")

					.attr("cellpadding", 0)
					.attr("cellspacing", 0)
					.attr("border", 1)
					.css("borderCollapse", "collapse")
					.css("table-layout", "fixed")
					.css("width", "100%");

				$(this)
					.find("td")
					.css("borderColor", "#ccc")
					.css("padding", "4px");
			}
		})
		.data("summernote");

	//get
	$("#btn-get-content").on("click", function() {
		var y =$($sumNote.code());
	
		console.log(y[0]);console.log(y.find("p> font"));
	var x = y.find("font").remove();		
		$("#content").text($("#ta-1").val());
	});
	//get text$($sumNote.code()).find("font").remove()$($sumNote.code()).find("font").remove()
	$("#btn-get-text").on("click", function() {
		$("#content").html($($sumNote.code()).text());
	});
	//set
	$("#btn-set-content").on("click", function() {
		$sumNote.code(content);
	}); //reset
	$("#btn-reset").on("click", function() {
		$sumNote.reset();
		$("#content").empty();
	});
})();
</script>
</form> 
</body>
</html>
<?php

?>