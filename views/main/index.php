<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<base href="/proyecto_ayni/">
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
						<form id="formulario">
							<div>
								<label class="form-label">Correo</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div>
								<label class="form-label">Clave</label>
								<input type="password" class="form-control" name="password">
							</div>
						</form>
					</div>
					<div class="card-footer text-center">
						<button type="submit" class="btn btn-primary" name="algo" form="formulario">Ingresar</button>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/index.js"></script>
	<script>
		$(function(){
			$('#formulario').on('submit', function(e){
				e.preventDefault()
				let data = parserForm($('#formulario'))
				sendPetition('users', 'read', data, function(r){
					console.log(r)
				})
			})			
		})
	</script>
</body>
</html>