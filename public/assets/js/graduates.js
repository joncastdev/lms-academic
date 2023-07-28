// alert();

// function getCourses()
// {

// 	alert();

// $.ajax({
//   url: BASE_URL+'/graduates',   
//   dataType: 'json'    
// })
// .done(function(result) {



//  $.each(result, function(index, val) {

//  	console.log(val);


//     // $("#country").append('<option value="'+ val.id_country + '">' + val.country + '</option>')

//   });
// });



// $('#country').change(function(event) {
	// $('.country').click(function(event) {
		$('#country').click(function(event) {

			// let countryVal = $(".country").val();

		let countryVal = $("#country").val();

		$.get(BASE_URL + '/select',{countryVal: countryVal}, function(data){

			console.log(data);

    // alert();

    $.each(data, function(index, val) {

    // $("#country").html('<option value="'+ data[0].id_course + '">' + data[0].name + '</option>');

     // $(".country").html('<option value="'+ val.id_course + '">' + val.name + '</option>');

     // $(".country").append('<option value="'+ val.id_course + '">' + val.name + '</option>');

     $("#country").append('<option value="'+ val.id_course + '">' + val.name + '</option>');


     
     // $("#option").remove();

     // $("#country").remove();

 });


});



	});


// }



// $.ajax({
//   url: BASE_URL+'/graduates',   
//   dataType: 'json'    
// })
// .done(function(result) {



//  $.each(result, function(index, val) {

//  	console.log(val);


//     // $("#country").append('<option value="'+ val.id_country + '">' + val.country + '</option>')

//   });
// });