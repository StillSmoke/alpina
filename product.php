<?php
$id_product = preg_replace('|[^0-9]*|','',$_REQUEST['x']);
?>
<div class="changedProduct">
        <img src="img/btnBack.png" id="btnBack">
	<?php echo '<span><img src="img/models/'.$id_product.'.png"></span>'; ?>
	<h2>Угловой диван-кровать<br> "Адельфи-люкс"</h2>
	<table>
		<?php 
		$product_resource = file("models_txt/{$id_product}.txt");
			foreach ($product_resource as $value) {
				$temp_arr = preg_split('|&|', $value);
				echo '<tr>';
				foreach ($temp_arr as $value) {
					echo "<td>{$value}</td>";
				}
				echo '</tr>';			
			}
		?>
	</table>
	<div class="textile">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t947/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t947/image_48.jpg" alt="947">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t16/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t16/image_48.jpg" alt="16">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t17/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t17/image_48.jpg" alt="17">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t22/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t22/image_48.jpg" alt="22">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t23/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t23/image_48.jpg" alt="23">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t24/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t24/image_48.jpg" alt="24">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t89/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t89/image_48.jpg" alt="89">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t90/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t90/image_48.jpg" alt="90">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t92/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t92/image_48.jpg" alt="92">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t93/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t93/image_48.jpg" alt="93">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t96/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t96/image_48.jpg" alt="96">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t949/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t949/image_48.jpg" alt="949">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t950/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t950/image_48.jpg" alt="950">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t998/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t998/image_48.jpg" alt="998">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t999/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t999/image_48.jpg" alt="999">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t1000/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t1000/image_48.jpg" alt="1000">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t1001/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t1001/image_48.jpg" alt="1001">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t344/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t344/image_48.jpg" alt="344">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t951/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t951/image_48.jpg" alt="951">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t102/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t102/image_48.jpg" alt="102">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t840/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t840/image_48.jpg" alt="840">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t105/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t105/image_48.jpg" alt="105">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t851/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t851/image_48.jpg" alt="851">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t106/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t106/image_48.jpg" alt="106">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t852/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t852/image_48.jpg" alt="852">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t108/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t108/image_48.jpg" alt="108">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t113/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t113/image_48.jpg" alt="113">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t122/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t122/image_48.jpg" alt="122">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t123/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t123/image_48.jpg" alt="123">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t125/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t125/image_48.jpg" alt="125">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t129/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t129/image_48.jpg" alt="129">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t958/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t958/image_48.jpg" alt="958">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t954/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t954/image_48.jpg" alt="954">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t266/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t266/image_48.jpg" alt="266">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t955/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t955/image_48.jpg" alt="955">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t219/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t219/image_48.jpg" alt="219">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t244/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t244/image_48.jpg" alt="244">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t956/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t956/image_48.jpg" alt="956">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t957/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t957/image_48.jpg" alt="957">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t220/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t220/image_48.jpg" alt="220">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t25/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t25/image_48.jpg" alt="25">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t26/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t26/image_48.jpg" alt="26">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t27/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t27/image_48.jpg" alt="27">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t32/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t32/image_48.jpg" alt="32">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t31/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t31/image_48.jpg" alt="31">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t28/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t28/image_48.jpg" alt="28">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t35/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t35/image_48.jpg" alt="35">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t43/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t43/image_48.jpg" alt="43">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t61/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t61/image_48.jpg" alt="61">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t40/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t40/image_48.jpg" alt="40">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t267/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t267/image_48.jpg" alt="267">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t221/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t221/image_48.jpg" alt="221">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t962/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t962/image_48.jpg" alt="962">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t246/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t246/image_48.jpg" alt="246">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t268/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t268/image_48.jpg" alt="268">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t222/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t222/image_48.jpg" alt="222">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t247/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t247/image_48.jpg" alt="247">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t269/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t269/image_48.jpg" alt="269">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t223/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t223/image_48.jpg" alt="223">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t248/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t248/image_48.jpg" alt="248">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t961/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t961/image_48.jpg" alt="961">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t73/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t73/image_48.jpg" alt="73">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t429/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t429/image_48.jpg" alt="429">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t430/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t430/image_48.jpg" alt="430">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t76/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t76/image_48.jpg" alt="76">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t431/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t431/image_48.jpg" alt="431">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t432/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t432/image_48.jpg" alt="432">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t433/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t433/image_48.jpg" alt="433">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t434/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t434/image_48.jpg" alt="434">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t435/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t435/image_48.jpg" alt="435">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t436/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t436/image_48.jpg" alt="436">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t437/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t437/image_48.jpg" alt="437">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t438/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t438/image_48.jpg" alt="438">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t440/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t440/image_48.jpg" alt="440">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t441/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t441/image_48.jpg" alt="441">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t131/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t131/image_48.jpg" alt="131">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t132/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t132/image_48.jpg" alt="132">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t854/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t854/image_48.jpg" alt="854">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t855/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t855/image_48.jpg" alt="855">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t857/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t857/image_48.jpg" alt="857">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t858/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t858/image_48.jpg" alt="858">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t859/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t859/image_48.jpg" alt="859">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t861/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t861/image_48.jpg" alt="861">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t863/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t863/image_48.jpg" alt="863">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t133/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t133/image_48.jpg" alt="133">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t134/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t134/image_48.jpg" alt="134">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t960/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t960/image_48.jpg" alt="960">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t135/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t135/image_48.jpg" alt="135">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t136/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t136/image_48.jpg" alt="136">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t137/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t137/image_48.jpg" alt="137">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t378/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t378/image_48.jpg" alt="378">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t381/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t381/image_48.jpg" alt="381">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t959/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t959/image_48.jpg" alt="959">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t964/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t964/image_48.jpg" alt="964">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t963/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t963/image_48.jpg" alt="963">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t388/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t388/image_48.jpg" alt="388">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t390/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t390/image_48.jpg" alt="390">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t965/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t965/image_48.jpg" alt="965">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t966/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t966/image_48.jpg" alt="966">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t967/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t967/image_48.jpg" alt="967">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t968/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t968/image_48.jpg" alt="968">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t969/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t969/image_48.jpg" alt="969">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t970/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t970/image_48.jpg" alt="970">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t945/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t945/image_48.jpg" alt="945">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t876/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t876/image_48.jpg" alt="876">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t879/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t879/image_48.jpg" alt="879">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t141/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t141/image_48.jpg" alt="141">
                                <img class="moz" src="http://adelfi.ru/uploads/images/textile/t142/image_48.jpg" width="48" height="48" data-original="http://adelfi.ru/uploads/images/textile/t142/image_48.jpg" alt="142">
        </div>
</div>