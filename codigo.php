<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$saldo=$_POST['saldo'];
$grado=$_POST['selectGrado'];
$curso=$_POST['selectcurso'];

	/*$miGrado = $_POST['selectGrado'];
    $micurso = $_POST['selectcurso'];
    $resultado1 = $_POST['resultado1'];
    $resultado2 = $_POST['resultado2'];*/    
    //$valor = $_POST['valor'];   
        
	$arryprimeroA = array('danza', 'teatro', 'dibujo');
	$arryprimeroB = array('danza', 'musica');
	$arryprimeroC = array('teatro', 'dibujo', 'musica');

	$miSelect = "<strong> A </strong>";
	if($grado == 'Primero' && $curso == 'GRADO A'){
		$a = $arryPrimeroA;
        
    }else if($grado=='Segundo' && $curso=='GRADO B'){
        echo "estoy aqui";
    }

    foreach ($a as $opciones){
		$miSelect .= "<option value=".$a.">".$a."</option>";
	}
	$miSelect .= "</select>";
	
	echo $miSelect;

        $miSelect = "<strong> B </strong>";
        if ($grado == 'Primero' && $curso == 'B'){

		 $b = $arryprimeroB;
        }
		foreach ($b as $opciones){
		$miSelect .= "<option value=".$opciones.">".$opciones."</option>";
	}
	$miSelect .= "</select>";
	
	echo $miSelect;

  $miSelect = "<strong> C </strong>";
   if ($grado == 'Primero' && $curso == 'C'){

		$c = $arryprimeroC;
	}


	foreach ($c as $opciones){
		$miSelect .= "<option value=".$opciones.">".$opciones."</option>";
	}
	$miSelect .= "</select>";
	
	echo $miSelect;

//generar codigo para el curso segundo

//codigo para el curso
 if($grado == 'Primero'){
 
     $valor =+35000;
     
     
 }else if ($grado == 'Segundo'){
     
     $valor =+70000;
 }

 if ($arryprimeroA =='danza'){
     
  $resultado = $valor+0.2;   
 }

if($arryprimeroA =='teatro'){
    
 $resul = $valor+0.25;   
}
if ($arryprimeroA == 'dibujo'){
    $resultado = $valor+0.35;
    
}
if ($arryprimeroB == 'musica'){
    $resul = $valor+0.3;
}
 ?>