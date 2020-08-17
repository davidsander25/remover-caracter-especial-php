<?php

function RemoverCaracterEspecial($palavra){
	$especial = array("Á","Â","á","â","À","Å","à","Ã","ã","å","Ä","ä","È","é","É","Ê","è","Ë","ë","ê","Í","Î","î","Ì","ì","í","Ï","ï","ô","Ò","ò","Õ","õ","Ö","ö","Ó","ó","Ô","Ú","ú","Û","û","Ù","ù","Ü","ü","Ç","ç","Ñ","ñ","Ý","ý", "'");
	$substituicao_especial = array("A","A","a","a","A","A","a","A","a","a","A","a","E","e","E","E","e","E","e","e","I","I","i","I","i","i","I","i","o","O","o","O","o","O","o","O","o","O","U","u","U","u","U","u","U","u","C","c","N","n","Ý","ý", "");

	$novaPalavra = str_replace($especial, $substituicao_especial, $palavra);
	
	return $novaPalavra;

}

//echo RemoverCaracterEspecial($frase);

?>