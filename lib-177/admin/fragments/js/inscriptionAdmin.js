$(function()
{
	var tabRegex =
	{
		regex: '',
		email: '#^[A-Za-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$#u',
		pseudo: '#^[A-Za-z0-9]{2,25}$#u',
		nom: '#^[A-Za-zéèàêâùïüë-]{2,30}$#u',
		password: '#^.{4,50}$#u',
		codePostal: '#^[0-9]{4,5}$#u'
	}
	function eventInit(){
		$('.nameInscA').each(function(i){
			$('#type_switch_'+i).on(
				'change', (function(i){
					return function(){
						if($('#type_switch_'+i).val() !== 'type'){
							$('#type_'+i).val($('#type_switch_'+i).val());
						}
					}
				})(i)
			);
			$('#regex_switch_'+i).on(
				'change', (function(i){
					return function(){
						if($('#regex_switch_'+i).val() !== 'regex'){
							$('#regex_'+i).val(tabRegex[$('#regex_switch_'+i).val()]);
						}
					}
				})(i)
			);
		});
		$('.inputInscA').each(function(i){
			$('#delet_'+i).on(
				'click', (function(i){
					return function(){
						$('#input_'+i).html('<input type="hidden" name="name_'+i+'"><input type="hidden" name="delete_'+i+'">');
					}
				})(i)
			);
		});
	}
	eventInit();
});