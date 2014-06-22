function validaFormulario(){
	var responseValidate = true;
	$('.required').each(function(index) {
		var classToValidate = $(this).attr('class').split(' ')[1];
		var valField = $.trim( $(this).val() );
		switch(classToValidate){
			case 'text':
				responseValidate = validaTexto( valField );
				break;
			case 'rut':
				responseValidate = validaRut( valField );
				break;
			case 'select':
				responseValidate = validaSelect( valField );
				break;
			case 'nonzero':
				responseValidate = validaNonZero( valField );
				break;
			case 'phone':
				responseValidate = validaPhone( valField );
				break;
			case 'number':
				responseValidate = validaNumber( valField );
				break;
			case 'email':
				responseValidate = validaEmail( valField );
				break;
			case 'patente':
				responseValidate = validaPatente( valField );
				break;
			case 'checkbox':
				//var checked = $("input[@id="+$(this).attr("id")+"]:checked").length;
				var checked = 0;
				if( $(this).is(':checked') ) {
					checked = 1;
				}
				responseValidate = validaNonZero( checked );
				break;
			case 'alphanum':
				responseValidate = validaAlphaNumeric( valField );
				break;
			case 'notempty':
					responseValidate = validaNotEmpty( valField );
					break;
			default:
		}
		activaError(responseValidate, $(this).attr("text"), $(this));
		return responseValidate;
	});
	$('.optional').each(function(index) {
		var classToValidate = $(this).attr('class').split(' ')[1];
		if( valField != ""){
			switch(classToValidate){
				case 'text':
					responseValidate = validaTexto( valField );
					break;
				case 'rut':
					responseValidate = validaRut( valField );
					break;
				case 'select':
					responseValidate = validaSelect( valField );
					break;
				case 'nonzero':
					responseValidate = validaNonZero( valField );
					break;
				case 'phone':
					responseValidate = validaPhone( valField );
					break;
				case 'number':
					responseValidate = validaNumber( valField );
					break;
				case 'email':
					responseValidate = validaEmail( valField );
					break;
				case 'patente':
					responseValidate = validaPatente( valField );
					break;
				case 'checkbox':
					//var checked = $("input[@id="+$(this).attr("id")+"]:checked").length;
					var checked = 0;
					if( $(this).is(':checked') ) {
						checked = 1;
					}
					responseValidate = validaNonZero( checked );
					break;
				case 'alphanum':
					responseValidate = validaAlphaNumeric( valField );
					break;
				case 'notempty':
					responseValidate = validaNotEmpty( valField );
					break;
				default:
			}
			activaError(responseValidate, $(this).attr("text"), $(this));
			return responseValidate;
		}
	});
	return responseValidate;
}
function validaTexto(val){
	patron =/[A-Z a-z]{3}/; // Solo acepta letras y espacios mínimo 3
    return patron.test(val);
}
function validaAlphaNumeric(val){
	patron =/[A-Za-z0-9]{5}/; // Solo acepta letras y numero mínimo 5
    return patron.test(val);
}
function validaNotEmpty(val){
	patron = /([^\s])/;
	 return patron.test(val);
}
function validaRut(val){
	return esrut(val);
}
function validaSelect(val){
	if( parseInt(val) > 0 || val != "" || val.length > 0){ return true; }else{ return false; }
}
function validaNonZero(val){
	if( parseInt(val) > 0 ){ return true; }else{ return false;}
}
function validaPhone(val){
	patron =/[0-9 ]{6}\d/; // Solo acepta números mínimo 6
    return patron.test(val);
}
function validaNumber(val){
	patron =/[0-9]\d/; // Solo acepta números
    return patron.test(val);
}
function validaEmail(val){
	patron =/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/; // Solo emai
    return patron.test(val);
}
function activaError(state, text, el){
	if(state === false){
		$(".alert-error p").empty().html( text );
		$(".alert-error").fadeIn("fast");
		$(".alert-error").fadeOut(2000);
		if(el != "") el.addClass("errored");
		return false;
	}
}
function activaErrorClass(state, text, el, classStyle){
        var classE = "error";
	if(state === false){
            if(classStyle != ""){
                classE = classStyle;
            }
            $("."+classE+" p").empty().html( text );
            $("."+classE).fadeIn("fast");
            $("."+classE).fadeOut(2000);
            if(el != "") el.addClass("errored");
            return false;
	}
}
function getAge(year, month, day) {
    var today = new Date();
    var birthDate = new Date(year, month, day);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}
function validaPatente(val){
	return val.match(/^[a-z]{2}[\.\- ]?[0-9]{2}[\.\- ]?[0-9]{2}|[b-d,f-h,j-l,p,r-t,v-z]{2}[\-\. ]?[b-d,f-h,j-l,p,r-t,v-z]{2}[\.\- ]?[0-9]{2}$/i);
}