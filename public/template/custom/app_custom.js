$(document).ready(function()
{
	//confirmation de suppression
	$('.supprimer').on('click',function()
	{
		Swal.fire({
		  title: 'êtes vous sûre ?',
		  icon: 'question',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: 'red',
		  cancelButtonText: 'Annuler ',
		  confirmButtonText: 'Oui!'
		}).then((result) => {
		  if (result.isConfirmed) {
		  	$(this).closest('.parent').find('.form_suppression').submit()
		    
		  }
		})
	})

	
	// Affichage de la description entiere dans le modal
	$('.bouton_description').on('click',function()
	{
		var $description = $(this).data('description')
		
		$('#modal_description p').text($description)
		
	})



	
})