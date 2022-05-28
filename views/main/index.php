<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="contaniner">		
		<div class="row justify-content-md-center m-3">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						Login
					</div>
					<div class="card-body">
						<form>
							<div>
								<label class="form-label">Correo</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div>
								<label class="form-label">Clave</label>
								<input type="email" class="form-control" name="password">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<button type="button" class="btn btn-primary">Ingresar</button>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.ajax({
				url: 'frontController',
				type: 'POST',
				data:{
					class: 'users',
					metode: 'read',
					params: {
						usuario: 'usaurio1',
						pass: '123'
					}
				},
				success: function(r){
					console.log(r)
				},
				error: function(xhr, status){
					console.log('Ocurrio un error')
				}
			})
		})
	</script>
</body>
</html>