$(document).ready(function() {	
	CrearModal();
	setInterval(CrearModal, 2000)
});

var datatable = null;
function CrearModal(){
	debugger;
	if(datatable != null){
		datatable.ajax.reload();
	}else{
		datatable = $('#TablDeteccion').DataTable( {
			"bDeferRender": true,			
			"sPaginationType": "full_numbers",
			"ajax": {
				"url": "funcionCargaDeteccion.php",
	        	"type": "POST"
			},					
			"columns": [
				{ "data": "iddet" },
				{ "data": "fechrdet" },
				{ "data": "placadet" },
				{ "data": "camaradet" },
				{ "data": "fotodet" }
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

	        },
	        dom: "Bfrtip",
			buttons: [            
				{
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                titleAttr: 'PDF'
            }
            ]
		});
	}
}
