<?php
$testo=$_REQUEST["pippo"];
$ingranaggio=$_REQUEST["ingranaggio"];
echo $ingranaggio;
if($ingranaggio==1){echo "testo ".$testo;}
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
  <form action="">
<div class="container-fluid">
 
 <div class="row">
  <div class="col-xs-12">
   <textarea name="pippo" id="ta-1" cols="30" rows="60"><?php echo $testo; ?></textarea>
  </div>
 </div>
 <div class="row">
  <div class="col-xs-12 text-right">
   <button class="btn btn-sm btn-primary" id="btn-get-content">Get Content</button>
   <button class="btn btn-sm btn-primary" id="btn-get-text">Get Text</button>
   <button class="btn btn-sm btn-success" id="btn-set-content">Set Content</button>
   <button class="btn btn-sm btn-danger" id="btn-reset">Reset</button>
    <input type="hidden" name="ingranaggio" value="1" />
  <input type="submit" value="Memorizza" name="B3"> 
  </div>
 </div>
 <hr>
 <div class="row">
  <code class="col-xs-12" id="content">
  </code>
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
			height: "300px",
            width: "50%",
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