<?php
$id_product = preg_replace('|[^0-9]*|','',$_REQUEST['x']);
?>
<div class="changedProduct">
	<?php echo '<img src="img/models/'.$id_product.'.png">'; ?>
	<h2>Угловой диван-кровать<br> "Адельфи-люкс"</h2>
	<table>
		<?php 
		$product_resource = file("models_txt/{$id_product}.txt");
			foreach ($product_resource as $value) {
				$temp_arr = preg_split('/&/', $value);
				echo '<tr>';
				foreach ($temp_arr as $value) {
					echo "<td>{$value}</td>";
				}
				echo '</tr>';			
			}
		?>
	</table>
</div>