<ul style="border:1px solid #ccc; width:100%">

	<?php	
		while($linha = mysqli_fetch_array($consulta_exp)){
			echo '<li>'.$linha['name'].'</li>';
			echo '<p>'.$linha['descr'].'</p>';
		}
	?>
</ul>