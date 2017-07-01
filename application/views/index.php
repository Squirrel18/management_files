<script src="<?php echo base_url('js/index.js'); ?>"></script>

</head>
    <body onload="">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
					<h1 class="text-center"><?php echo $title ?></h1>
					<div class="login-contain">
						<div class="col-xs-offset-1 col-xs-10 text-center">
							<form class="form-horizontal" action="<?php echo base_url('index.php/users/log_in') ?>" onsubmit="return log_submit();">
								<div class="form-group">
									<input type="hidden" id="hiddenData" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
									<label for="user" class="top-separation control-label">Usuario</label>
									<input type="number" name="user" class="index-separation-input form-control text-center" id="user" placeholder="Usuario" require>
									<label for="pass" class="control-label">Contraseña</label>
									<input type="password" name="passcode" class="index-separation-input form-control text-center" id="pass" placeholder="Contraseña" require>
									<button type="submit" class="index-separation-input btn btn-default btn-lg btn-block">Sign in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

