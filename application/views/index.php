</head>
    <body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
					<h1 class="text-center"><?php echo $title ?></h1>
					<div class="login-contain">
						<div class="col-xs-offset-1 col-xs-10 text-center">
							<form class="form-horizontal" action="<?php echo base_url('news/') ?>" method="post" onsubmit="log_submit()">
								<div class="form-group">
									<label for="inputEmail3" class="top-separation control-label">Email</label>
									<input type="text" class="index-separation-input form-control text-center" id="inputEmail3" placeholder="Email">
									<label for="inputPassword3" class="control-label">Password</label>
									<input type="password" class="index-separation-input form-control text-center" id="inputPassword3" placeholder="Password">
									<button type="submit" class="index-separation-input btn btn-default btn-lg btn-block">Sign in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

