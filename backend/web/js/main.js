$(function(){

	$(document).on('click','event', function(){
		// var date = $(this).attr('data-date');

		// $.get('/event/index/create', {'date':date}, function(data){
			$('#modal').modal('show')
			.find('#modalContent')
			// .html(data);
			.load($(this).attr('value'));
			});

		// });

		// get the click of the create button
		$('#modalButton').click(function(){
			$('#modal').modal('show')
			.find('#modalContent')
			.load($(this).attr('value'));
		});

	});
