
//logear
jQuery(document).on('submit','#formu', function(event){
	event.preventDefault();
	
	jQuery.ajax({
		url:'vlogin.php',
		type:'POST',
		dataType:'json',
		data:$(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Cargando...');
		}
	})
	
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			if(respuesta.tipo == '1'){
				location.href = 'admin/menu1.php';
				
			}else if(respuesta.tipo == '2'){
				location.href = 'usuario/menu2.php';
				
			}
			
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
		},3000);
		$('.botonlg').val('Ingresar');
	}
		
	})

	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});



// Ingresar 
jQuery(document).on('submit','#ingresa', function(event){
	event.preventDefault();
	
	jQuery.ajax({
		url:'paciente.php',
		type:'POST',
		dataType:'json',
		data:$(this).serialize(),
		beforeSend: function(){
			$('.botonIngresa').val('Cargando...');
			
		}
	})
	
	
	.done(function(respuest){
		console.log(respuest);
			if(respuest == 'exito'){
				
			$('.exito').slideDown('slow');
			setTimeout(function(){
				$('.exito').slideUp('slow');
		},3000);
		$("#idpaciente").val("");
		$("#nombre").val("");
		$("#edad").val("");
		$("#especie").val("");
		$("#raza").val("");
		$("#sexo").val("");
		$("#color").val("");
		$('#botonIngresa').val('Ingresar');
		
		}else if (respuest == 'error'){
			$('.err').slideDown('slow');
			setTimeout(function(){
				$('.err').slideUp('slow');
		},3000);
		$('.botonIngresa').val('Ingresar');
	}})

	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});


//Eliminar

jQuery(document).on('submit','#elimina', function(event){
	event.preventDefault();
	
	jQuery.ajax({
		url:'eliminar.php',
		type:'POST',
		dataType:'json',
		data:$(this).serialize(),
		beforeSend: function(){
			$('.botonElimina').val('Cargando...');
			
		}
	})
	
	.done(function(respuest){
		console.log(respuest);
			if(respuest == 'datos eliminados'){
			$('.borrado').slideDown('slow');
			setTimeout(function(){
				$('.borrado').slideUp('slow');
		},3000);
		$('.botonElimina').val('Eliminar');
		
		}else if (respuest == 'error'){
			$('.noborrado').slideDown('slow');
			setTimeout(function(){
				$('.noborrado').slideUp('slow');
		},3000);
		$('.botonElimina').val('Eliminar');
	}})

	
	
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});

//Buscar

// jQuery(document).on('submit','#busca', function(event){
// 	event.preventDefault();
	
// 	jQuery.ajax({
// 		url:'buscar.php',
// 		type:'POST',
// 		dataType:'json',
// 		data: $(this).serialize(),
// 		beforeSend: function(){
// 			$('.botonBusca').val('Cargando...');
			
			
// 		}
// 	})
	
// 	.done(function(valores){
// 		while ($mostrar = mysqli_fetch_array($result)){
		
// 		// $("#nombre").val(valores.nombre);
// 		// $("#edad").val(valores.edad);
// 		// $("#especie").val(valores.especie);
// 		// $("#raza").val(valores.raza);
// 		// $("#sexo").val(valores.sexo);
// 		// $("#color").val(valores.color);
// 		 $('.botonBusca').val('Buscar');
		
// 		}{
// 			$('.noborrado').slideDown('slow');
// 			setTimeout(function(){
// 				$('.noborrado').slideUp('slow');
// 		},5000);
// 		$('.botonBusca').val('Buscar');
// 		}
			
// 	})

	
	
// 	.fail(function(resp){
// 		console.log(resp.responseText);
// 	})
// 	.always(function(){
// 		console.log("complete");
// 	});
// });

//Actualizar

// jQuery(document).on('submit','.actualizar', function(event){
	// event.preventDefault();
	
	// jQuery.ajax({
		// url:'actualizar.php',
		// type:'POST',
		// dataType:'json',
		// data: $(this).serialize(),
		// beforeSend: function(){
			// $('.botonActualiza').val('Cargando...');
			
			
		// }
	// })
	
	// .done(function(respues){
		// console.log(respues);
		// if(respues =='datos actualizados'){
		// alert('si');
		// // $("#nombre").val(valores.nombre);
		// // $("#edad").val(valores.edad);
		// // $("#especie").val(valores.especie);
		// // $("#raza").val(valores.raza);
		// // $("#sexo").val(valores.sexo);
		// // $("#color").val(valores.color);
		// $('.botonActualiza').val('Actualizar');
		
		// }else{
			// $('.noborrado').slideDown('slow');
			// setTimeout(function(){
				// $('.noborrado').slideUp('slow');
		// },5000);
		// $('.botonActualiza').val('Actualizar');
		// }
			
	// })

	
	
	// .fail(function(resp){
		// console.log(resp.responseText);
	// })
	// .always(function(){
		// console.log("complete");
	// });
// });