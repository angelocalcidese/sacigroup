<?php
session_start(); if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){ $larg= $_SESSION['screen_width'] ; $alt= $_SESSION['screen_height']; } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) { $_SESSION['screen_width'] = $_REQUEST['width']; $_SESSION['screen_height'] = $_REQUEST['height']; header('Location: ' . $_SERVER['PHP_SELF']); } else { echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>'; } 

include "conf_DB.php";
$anno=$_REQUEST["anno"];
$login=$_REQUEST["login"];
#echo "login".$login;
$ingranaggio=$_REQUEST["ingranaggio"];
$progr=$_REQUEST["progr"];
#echo "progr. ".$progr;
?>
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>inserimento documenti</title>


  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


</head>
</head>


<body >
<br>
<div align="center">   


<table align="left">
<tr>
<td align="left" width="50%">
<form method="POST" action="" name="modulo" onSubmit="return controllo();" enctype="multipart/form-data">
<table width="100%" align="left">                                                             
          
            <tr>
			<td align="left" valign="top" style=" border: 1px solid #949699;font-size: 10pt;" ><font face="Montserrat" color="#000000">Ripartizioni: </font></b>
            </td>
            <td style=" border: 1px solid #949699;">
            <div align="left"> 
            <div class="row">
            <div class="col-xs-12">
            <textarea name="testo" id="ta-1" cols="30" rows="50"><?php echo $testo; ?></textarea>
            </div>
            </div>
            </div></td>
            </tr>         
            </table>
</form>    
</td>
<td align="right" valign="top" width="50%">
</td>
</tr>
</table>        
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
			height: "250px",
            width: "500px",
			tableClassName: function() {
				//alert("tbl");
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

</body>

</html>