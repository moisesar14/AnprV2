function Mensaje(sTipoMensaje, sMensaje, sTitulo){
	var bControl = false;
	switch(sTipoMensaje){
		case("Alerta"):
		    alertify.error(sMensaje);
			break;
		case("Confirmacion"):
			alertify.confirm(sTitulo != undefined ? sTitulo : "",sMensaje != undefined ? sMensaje : "",
			  function(){
			  },
			  function(){
			  });
			break;
		case("Notificar"):
			  alertify.success(sMensaje);
			break;
	}
}
