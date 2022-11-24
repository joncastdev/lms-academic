
$.ajax({
	url  : BASE_URL + '/orders/table',
	dataType: 'json',
	type: 'GET',
	cache: false,
	success :  function(result)
	{	

    console.log(result);
		

   table = $('#orders').DataTable({		
			"bProcessing": true,		
			data: result,               
			columns: [
			          { "data": "id_order" },                         
                { "data": "orders" },
                { "data": "email" },
                { "data": "payer_email" },
                { "data": "id_course" },
                { "data": "payer_id" }, 
                     
                   
                   ],


            });//end table   


 }
});


