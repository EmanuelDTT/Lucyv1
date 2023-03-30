<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="CSS/formulario.css">

</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Ingreso </span><span>Registro</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Ingreso</h4>
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button href="" class="btn mt-4">Ingreso</button>
                      <p class="mb-0 mt-4 text-center"><a href="" class="link">¿se te olvido tu contraseña?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">

											<form method="POST"  action="<?php echo base_url('/crear')?>"> 
											
											<h4 class="mb-3 pb-3">Registro</h4>
											<div class="form-group">
												<input type="text" class="form-style" name="nombre"placeholder="Nombre Completo" >
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" name="numero" placeholder="Numero de Telefono" >
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      <div class="form-group mt-2">
												<input type="email" class="form-style" name="email"placeholder="Email" >
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" name="contra" placeholder="contraseña" >
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button href="" class="btn mt-4">Registro</button>
											<br>
											
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
			let mensaje ='<?php echo $mensaje ?>';

			if (mensaje=='1') {
					swal('Registrado', 'se ha registrado con extio!', 'success');
			}else if (mensaje=='0') {
				swal('Error', 'Hubo un fallo en el registro!', 'error');
			}
		</script>

</body>
</html>
