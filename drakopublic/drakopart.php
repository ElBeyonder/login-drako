<?php
    require_once 'link.php'
?>
<div align= "center">
	<div class="textopu">
	    <h1>
	        Visto -->
	        <?php
	        include_once("contador.php");
	        $visitante = contador();
	        echo $visitante;
	        ?> 
	    </h1>
	</div>
	
  <picture>
    <source media="(min-width: 900px)" srcset="<?php echo $link_media; ?>imagen/drakopart.jpg">
    <source media="(min-width: 550px)" srcset="<?php echo $link_media; ?>imagen/drakopart1.jpg">
    <img src="<?php echo $link_media; ?>imagen/drakopart1.jpg">
  </picture>
</div>
