function validate(from){
	return true;
}

function get_basket(){
	
	$.ajax({
		url: "./ajax.php",
		type: 'POST',
		data: {
			action: 'get-basket'
		},
		success: function(result){
			
			$("#mini-basket").html('');
			$("#mini-basket").html( result );
			
			$(".delete").click(function(){
				let pid = $(this).data('product');
				$.ajax({
					url: "./ajax.php",
					type: 'POST',
					data: {		
						record_id: pid,
						action: 'delete'
					},
					success: function(result){
						
						get_basket();
						
					}
				});
			});
			
		}
	});
	
}

$(document).ready(function(){
	
	if( $("#mini-basket").length ) get_basket();
	
	$(".parent-cat").click(function(e){
		
		let item = $(this);
		e.preventDefault();
		
		item.next('ul.cats_childs').slideToggle();
		
	});
	
	$("#search-btn").click(function(){
		
		let key = $("#search-form input[name='key']").val();
		if( key.length < 4 ){
			alert('برای جستجو کلمه ای با طول حداقل 4 کاراکتر وارد کنید.');
			return false;
		}else{
			$("#search-form").submit();
		}
		
	});
	
	$(".forms input[type='button']").click(function(){
		
		let myform = $(this).parent('li').parent('ul').parent('fieldset').parent('form');
		let valid = validate(myform);
		if( valid ) myform.submit();
		else alert( 'error' );
		
	});
	
	$(".thumbs img").click(function(){
		
		let path = $(this).prop("src");
		$(".main-img > img").prop("src", path);
		
	});
	
	$(".add-to-basket").click(function(){
		
		let count = $(".count").val();
		let product_id = $("#product_id").val();
		
		$.ajax({
			url: "./ajax.php",
			type: 'POST',
			data: {
				count: count,
				product_id: product_id,
				action: 'add-to-basket'
			},
			success: function(result){
				
				if( result === '-1' ) alert( 'اول لاگین کنید' );
				if( result === '-2' ) alert( 'اطلاعات اشتباه' );
				if( result > 0 ){
					get_basket();
					alert( 'با موفقیت به سبد افزوده شد' );
				}
				
			}
		});
		
	});
	
	$(".cal-add").click(function(){
		
		let count = $(".count").val();
		$(".count").val(++count);
		
	});
	
	$(".cal-drp").click(function(){
		
		let count = $(".count").val();
		
		count--;
		if( !count ) count = 1;
		
		$(".count").val(count);
		
	});
	
});


