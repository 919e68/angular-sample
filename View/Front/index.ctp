<!DOCTYPE html>
<html>
<head>
	<title>eLOGOS</title>
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/bootstrap-3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/scrollbar/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/angular-loading/loading-bar.css">
	
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/css/style.css">
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/base.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/jquery/jquery.min.js"></script>

	<base href="<?php echo $this->base ?>/">
</head>
<body ng-app="elogos">
	<?php if($this->Session->read('Auth.User.role') == 'treasury'): ?>
		<script>window.location = '<?php echo $this->base ?>/#/tax-order-payments';</script>
	<?php elseif($this->Session->read('Auth.User.role') == 'investment'): ?>
		<script>window.location = '<?php echo $this->base ?>/#/business-permits';</script>
	<?php elseif($this->Session->read('Auth.User.role') == 'inspector'): ?>
		<script>window.location = '<?php echo $this->base ?>/#/business-permit-applications';</script>
	<?php endif ?>	
		
	<?php echo $this->element('bpls') ?>
	<div class="main">
		<div class="col-md-3">
			<?php echo $this->element('user') ?>
		</div>
		<div class="col-md-9">
			<div ui-view>
				<div class="row">
					<div class="col-md-6">
						<div>
						    <div class="panel panel-default">
						        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> RECENT APPLICATIONS</div>
						        <div class="panel-body"></div>
						    </div>
						</div>
					</div>
					
					<div class="col-md-6">
						<div>
						    <div class="panel panel-default">
						        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> RECENT ACTIVITIES</div>
						        <div class="panel-body"></div>
						    </div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	
	<div aria-hidden="true" role="dialog" tabindex="-1" class="modal fade" id="form-modal"></div>
	
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular-route.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular-resource.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular-loading/loading-bar.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular-ui-router.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/angular/angular-selectize.js"></script>

	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/bootstrap-3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/bootbox/bootbox.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/scrollbar/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/icheck/icheck.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/inputmask/jquery.inputmask.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/gritter/js/jquery.gritter.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/selectize/selectize.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/validation-engine/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/validation-engine/validationEngine.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/script.js"></script>
	
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/app.services.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/app.controllers.js"></script>
	<?php echo $this->fetch('extrajs') ?>

</body>
</html>
