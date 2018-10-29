$(document).ready(function(){
	// alert("page load")
	////////
	$(".btn-login").click(function(){
		// alert("button click");
		$.ajax({
			type:"post",
			data:$("#login_form").serialize(),
			url:"../controllers/login-action.php",
			success:function(response){
				// alert(response)
				if(response == "done"){
					window.location.href="index.php";
				}
				else{
					$(".err_login").html(response)
				}
			}
		})
	})
	//////
	// alert(1)
	$(".btn-register").click(function(){
		// alert("test")
		var rec = $("#register_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/register-action.php",
			success:function(response){
				// alert(response)
				$(".err_register").html(response)
			}
		})
	})
	////
	$(".btn-password").click(function(){
		// alert("test")
		var rec = $("#password_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/password-action.php",
			success:function(response){
				// alert(response)
				$(".err_password").html(response)
			}
		})
	})
	/////////
	$(".btn-city").click(function(){
		// alert("test")
		var rec = $("#city_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/city-action.php",
			success:function(response){
				// alert(response)
				$(".err_city").html(response)
			}
		})
	})
	/////////
	$(".btn-area").click(function(){
		// alert("test")
		var rec = $("#area_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/area-action.php",
			success:function(response){
				// alert(response)
				$(".err_area").html(response)
			}
		})
	});
	///
	$(".area_class").change(function(){
		// alert(1)
		var cityid = $(this).val();
		// alert(cityid)
		if(cityid!=""){
			$.ajax({
				type:"post",
				data:"city="+cityid,
				url:"../controllers/get_area_by_city.php",
				success:function(response){
					// alert(response)
					$(".area_dropdown").html(response);
				}
			})
		}
	})
	///
	$(".btn-theater").click(function(){
		// alert("test")
		var rec = $("#theater_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/theater-action.php",
			success:function(response){
				// alert(response)
				$(".err_theater").html(response)
			}
		})
	});
	///
	
	$(".btn-screen").click(function(){
		// alert("test")
		var rec = $("#screen_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/screen-action.php",
			success:function(response){
				// alert(response)
				$(".err_screen").html(response)
			}
		})
	});

	$(".area_dropdown").change(function(){
		// alert(111)
		aid = $(this).val();
		// alert(aid)
		$.ajax({
			type:"post",
			data:`areaid=${aid}`,
			// data:"areaid="+aid,
			url:"../controllers/get-theater-by-area.php",
			success:function(response){
				// alert(response)
				$(".theater_dropdown").html(response)
			}
		})
	})
	$(".theater_dropdown").change(function(){
		// alert(111)
		aid = $(this).val();
		// alert(aid)
		$.ajax({
			type:"post",
			data:`thid=${aid}`,
			// data:"areaid="+aid,
			url:"../controllers/get-screen-by-theater.php",
			success:function(response){
				// alert(response)
				$(".screen_dropdown").html(response)
			}
		})
	});

	$(".btn-seat").click(function(){
		// alert("test")
		var rec = $("#seat_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/seat-action.php",
			success:function(response){
				// alert(response)
				$(".err_seat").html(response)
			}
		})
	});

	$(".btn-movie").click(function(){
		formObj = document.getElementById("movie_form");
		//form object creation
		formContentObj = new FormData(formObj); 
		// data as an object
		$.ajax({
			type:"post",
			data:formContentObj,
			url:"../controllers/movie-action.php",
			contentType:false, // text/plain
			processData:false, // file upload as it is
			success:function(response){
				// alert(response)
				$(".err_movie").html(response)
			}
		})
	});

	$("#get_movie").keyup(function(){
		// console.log("TEST")
		textboxData = $(this).val();
		// console.log(textboxData);
		$.ajax({
			type:"post",
			data:"moviedata="+textboxData,
			url:"../controllers/get-movies.php",
			success:function(response){
				// console.log(response)
				$("#show_movies").html(response)
			}
		})
	})
	
	$(".btn-movie-assign").click(function(){
		// alert("test")
		var rec = $("#movie_assign_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/movie_assign-action.php",
			success:function(response){
				// alert(response)
				$(".err_movie-assign").html(response)
			}
		})
	});

	finalno="";finalamount="";totalamount="";
	var x=[]
	var y=[]
	$(".seats").click(function(){


		
		no = $(this).children(".seatno").text();
		amount= $(this).children(".seatamount").text();
		// alert(no);
		// alert(amount);
		if(x.indexOf(no) == -1){
			x.push(no);
			y.push(amount);
			$(this).addClass("greenClass")
		}
		else{
			pos = x.indexOf(no);
			// alert(pos);
			x.splice(pos,1)
			y.splice(pos,1)
			$(this).removeClass("greenClass")

		}
		// console.log(x)
		if(x.length>0 && y.length>0){
				finalno = x.join(",")
				finalamount = y.join("+")
				// console.log(y)
				totalamount = eval(finalamount)
				
		}
		else{
			finalno = ""
				finalamount = ""
				// console.log(y)
				totalamount = ""
		}

		// console.log(finalno)
		// 		console.log(finalamount)
		// 		console.log(totalamount)
		$(".seatNo").val(finalno);
		$(".seatAmount").val(finalamount);
		$(".totalAmount").val(totalamount);

	})

	$(".add_final_seats").click(function(obj){
		obj.preventDefault();
		if(finalno!="" || finalamount!="" || totalamount!=""){
			document.formRecord.submit();
		}
		else{

			alert("Please Select ateleast 1 Seat");
		}
	})

	$(".adata").click(function(obj){
		obj.preventDefault();
		alert(11)
	})
})