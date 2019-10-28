$(document).ready(function(){
	
	$(".parent-cat").click(function(e){
		
		let item = $(this);
		e.preventDefault();
		
		item.next('ul.cats_childs').slideToggle();
		
	});
	$("#search-btn").click(function(){
		let key =$("#search-form input[name='key']").val();
		if(key.length<4) {
			alert('برای جستجو کلمه ای با طول حداقل 4 کارکتر وارد کنید');
			return false;
		}else{
			$("#search-form").submit();
		}
	});
	$(".form input[type='button']").click(function(){
		let myform =$(this).parent('li').parent('ul').parent('fieldset').parent('form');
		let valid = validate(myform);
		if(valid)myform.submit();
		else alert('error');
	});
});


