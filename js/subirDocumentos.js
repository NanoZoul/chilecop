/**
* - Ingreso de documentos al sistema, generando enlace con este hacia el trabajador.
* - Documento: Contrato de Trabajo
*/
$(function(){
	$("input[name='file']").on("change", function(){
		var formData = new FormData($("#formulario")[0]);
		var ruta = "php/addDocumentacionTrabajador.php";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos)
			{
				$("#respuesta").html(datos);
			}
		});
	});
});

$(function(){
	$("input[name='file2']").on("change", function(){
		var formData = new FormData($("#formulario2")[0]);
		var ruta = "php/addDocumentacionTrabajador.php";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos)
			{
				$("#respuesta2").html(datos);
			}
		});
	});
});

$(function(){
	$("input[name='file3']").on("change", function(){
		var formData = new FormData($("#formulario3")[0]);
		var ruta = "php/addDocumentacionTrabajador.php";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos)
			{
				$("#respuesta3").html(datos);
			}
		});
	});
});

$(function(){
	$("input[name='file4']").on("change", function(){
		var formData = new FormData($("#formulario4")[0]);
		var ruta = "php/addDocumentacionTrabajador.php";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos)
			{
				$("#respuesta4").html(datos);
			}
		});
	});
});

$(function(){
	$("input[name='file5']").on("change", function(){
		var formData = new FormData($("#formulario5")[0]);
		var ruta = "php/addDocumentacionTrabajador.php";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos)
			{
				$("#respuesta5").html(datos);
			}
		});
	});
});

$(function(){
	$("input[name='file6']").on("change", function(){
		var formData = new FormData($("#formulario6")[0]);
		var ruta = "php/addDocumentacionTrabajador.php";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos)
			{
				$("#respuesta6").html(datos);
			}
		});
	});
});

/**
* Funcion que permite guardar toda la informacion de cada uno de los archivos.
*/

$(function(){
	document.getElementById("guardarDocs").addEventListener("click", function(){
		var vobs1 = document.getElementById("obs1").value;
		var vobs2 = document.getElementById("obs2").value;
		var vobs3 = document.getElementById("obs3").value;
		var vobs4 = document.getElementById("obs4").value;
		var vobs5 = document.getElementById("obs5").value;
		var vobs6 = document.getElementById("obs6").value;
		var vval1 = document.getElementById("val1").value;
		var vval2 = document.getElementById("val2").value;
		var vval3 = document.getElementById("val3").value;
		var vval4 = document.getElementById("val4").value;
		var vval5 = document.getElementById("val5").value;
		var vval6 = document.getElementById("val6").value;

		$.ajax({
			data: {'obs1': vobs1,'obs2':vobs2,'obs3': vobs3,'obs4':vobs4,'obs5': vobs5,'obs6':vobs6,'val1':vval1,'val2':vval2,'val3':vval3,'val4':vval4,'val5':vval5,'val6':vval6},
			type: "POST",
			url: "php/addDocumentacionTrabajador2.php",
			success: function(data)
			{
				alert(data);
			}
		});

	});
});