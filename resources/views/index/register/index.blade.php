@extends('index.index.layout')
@section('content')

<!-- register -->
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>REGISTER</h3>
			</div>
			<div class="register">
				<div class="row">
					<form class="col s12">
						<div class="input-field">
							<input type="text" class="validate" placeholder="NAME" id="name" required>
						</div>
						<div class="input-field">
							<input type="email" placeholder="EMAIL" class="validate" id="email" required>
						</div>
						<div class="input-field">
							<input type="password" placeholder="PASSWORD" class="validate" id="pwd" required>
						</div>
						<div class="btn button-default">REGISTER</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end register -->

<script type="text/javascript">
	$('.button-default').click(function(){
		var name=$('#name').val();
		var email=$('#email').val();
		var pwd=$('#pwd').val();

		 // $.getJSON("http://www.mypassport.com/port/port/register?name="+name+"&jsonpCallback=?",  
   //          function(data){  
   //             alert(data.code);
   //  	});  


		$.ajax({
			url:'http://www.mypassport.com/port/port/register',
			type:'get',
			data:{name:name,email:email,pwd:pwd},
		    dataType:"jsonp",     	  
	        jsonp:"callback",     
			success:function(res){
				// alert(res);
				if (res.code==1) {
					alert(res.msg);
					location.href='http://www.myproject.com/index/login/index';
					
				}

				if (res.code==444) {
					alert(res.msg);
				}



			}

		});
});
</script>

@endsection
