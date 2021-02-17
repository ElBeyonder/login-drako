<?php
    require_once 'link.php'
?>
<div align= "center">
	<div class="textopu">
	    <h1>
	        Visto -->
	        <?php
	        include("contador.php");
	        $visitante = contador();
	        echo $visitante;
	        ?> 
	    </h1>
	</div>

	<video id="video" width="100%" height="auto">
	    <source src="<?php echo $link_media; ?>video/roshfrans.mp4" type="video/mp4">
	</video>

	<script>
	document.getElementById("video").play();
   </script>

</div>
