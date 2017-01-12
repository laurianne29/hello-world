$(document).ready(function(){
	$('.formulaire').submit(function(){
		var name = $('.nom').val();
		var commentaire = $('.commentaire').val();

		$.post('send.php',{nom:name,commentaire:commentaire}, function(data){
			$('.return').html(data).slideDown();
		});
		return false;
	});
});