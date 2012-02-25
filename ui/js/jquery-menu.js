jQuery(document).ready(function($) {
			$(".news span").mouseover(function(){
				$.ajax({
				url:"core/News/News.php",
				type:"GET",
				data:{'s':'true','ctr':'right'},
				success: function(data, status, request){
					$('.news table tr.top td.right').html(data);
				}
			});
			
				$.ajax({
				url:"core/News/News.php",
				type:"GET",
				data:{'s':'true','ctr': 'bottom'},
				success: function(data, status, request){
					$('.news table tr.bottom').html(data);
				}
			});				
			});
		});
			
			