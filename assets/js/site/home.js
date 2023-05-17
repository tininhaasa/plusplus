/**
*
* Script de perfil
*
* @author Emprezaz
*
**/
(function($, URL, Helpers){

	var loadMain = function(){
		$.ajax({
			url: URL + '/home/main',
			success: function(data){
				$('main').append(data)
			}
		})		
	}

	$(document).ready(function() {

		loadMain()

	});

})($, URL, Helpers);