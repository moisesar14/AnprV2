$(document).ready(function() {			   
	$('#TablEmpleados').DataTable( {
		"bDeferRender": true,			
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "funcionCargaEmpleados.php",
        	"type": "POST"
		},					
		"columns": [
			{ "data": "identificacion" },
			{ "data": "nombres" },
			{ "data": "pApellido" },
			{ "data": "sApellido" },
			{ "data": "direccion" },
			{ "data": "email" },
			{ "data": "telefono" },
			{ "data": "rol" },
			{ "data": "Editar" }
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="2">2</option>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});


});