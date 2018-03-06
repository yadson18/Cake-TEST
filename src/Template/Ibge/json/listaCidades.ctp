<?php 
	foreach ($cidades as &$cidade) {
	    unset($cidade->generated_html);
	}
	echo json_encode(compact('cidades'));