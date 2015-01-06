<!DOCTYPE html>
<html>
<head>
	<title>eLOGOS</title>
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/bootstrap-3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/scrollbar/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/css/style.css">
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular-route.min.js"></script>
</head>
<body ng-app>

	<?php echo $this->element('navbar') ?>
	
	<div class="main">
		<div class="col-md-3">
			<?php echo $this->element('user') ?>
		</div>
		<div class="col-md-9">
			<?php echo $this->fetch('content') ?>
		</div>
	</div>
	
	<div aria-hidden="true" role="dialog" tabindex="-1" class="modal fade" id="form-modal"></div>
	
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/bootstrap-3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/scrollbar/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/icheck/icheck.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/inputmask/jquery.inputmask.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/gritter/js/jquery.gritter.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/validation-engine/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/validation-engine/validationEngine.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/script.js"></script>
	<?php echo $this->fetch('extrajs') ?>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>
</html>
