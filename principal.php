<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	    <title>ejemplo con ajax</title> <br>
	<script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
    <h1>colegio zoom</h1>
	<form action="codigo.php" method="post">    
    <label for="elegir">escriba el nombre del alumno</label> 
        <br>
    <input type = "text" name="nombre">
        <br>
        
    <label for="elegir">escribe el apellido </label> 
        <br>
    <input type = "text" name="apellido">
        <br>
        <br>
        <label id="valor">escriba el saldo base </label> 
        <br>
    <input type = "text" name="saldo">
        <br>
    
        <br>

		<select id="selectGrado" name="selectGrado">
            
			<option>Seleccione un grado</option>
			<option id="resultado1"  value="Primero">Primero</option>
			<option id="resultado2" value="Segundo">Segundo</option>
            <br>
            </select><br/><br/>
        
            <select id="selectcurso" name="selectcurso">
            
			<option>Seleccione un curso</option>
			<option value="A">GRADO A</option>
			<option value="B">GRADO B</option>
            <option value="C">GRADO C</option>
                </select>
            <br>
       <input type="submit" name="enviar" value="enviar">
        <br>
            
        
		
		<div id="resultado"></div>
	</form>
        <script>
		//Funcion de JQuery
            
		$( "#selectGrado").click(function() {
			var grado = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "codigo.php",
				data: { grado: grado}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>

    
        <script>
		//Funcion de JQuery
            
		$( "#selectcurso").click(function() {
			var curso = $("#selectcurso").val();
			$.ajax({
				method: "POST",
				url: "codigo.php",
				data: { curso: curso}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
            $( "#resultado1").click(function() {
			var resultado1 = $("#resultado1").val();
			$.ajax({
				method: "POST",
				url: "codigo.php",
				data: { resultado1: resultado1}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
            
            
            $( "#valor").click(function() {
			var valor = $("#valor").val();
			$.ajax({
				method: "POST",
				url: "codigo.php",
				data: { valor: valor}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
            
	</script>
</body>
</html>Ssssss