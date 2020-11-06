$(document).ready(function(){



	$.fn.myFunction = function(d){ 

		$.get("goods3.php", { art: d }, function(data){

			var obj = JSON.parse(data);

			$('#name_h').text(obj.catName);
			$('#breed_h').text(obj.breed);
			$('#gender_h').text(obj.gender);
			$('#weight_h').text(obj.weight);
			$('#cost_h').text(obj.cost);
		});

	}




		$('#op1').click(function(){$.fn.myFunction(1);}).hover(function(){$.fn.myFunction(1);});
		$('#op2').click(function(){$.fn.myFunction(2);}).hover(function(){$.fn.myFunction(2);});
		$('#op3').click(function(){$.fn.myFunction(3);}).hover(function(){$.fn.myFunction(3);});



	});
