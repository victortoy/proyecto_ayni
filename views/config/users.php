<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="/proyecto_ayni/">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th>id</th>
							<th>Nombre</th>
							<th>Correo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>9090</td>
							<td>Jose Martinez</td>
							<td>jose@gmail.com</td>
						</tr>
						<tr>
							<td>9091</td>
							<td>Carlos Benitez</td>
							<td>carlos@gmail.com</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){			
			$.ajax({
				url: 'frontController',
				type: 'POST',
				data: {
					clase: 'rooms',
					metodo: 'ocuped'
				},
				success: function(res){
					console.log(res)
				}
			})	
		})
	</script>
</body>
</html>