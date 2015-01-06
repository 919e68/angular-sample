<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/bootstrap-3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/css/login.css">
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base ?>/assets/js/svg-icon.js"></script>
</head>
<body>
	
	<section id="login">
        <header>
            <h1 style="font-size:75px">eLOGOS</h1>
            <p>ELECTRONIC LOCAL GOVERNANCE SYSTEM</p>
            <!-- <div class="text-center">
            	<img src="<?php echo $this->base ?>/assets/img/ecms.png" width="350"> 
            </div> -->
        </header>
        <div class="clearfix"></div>
    </section>
    
    <!-- Login -->
    <div style="max-width:900px;margin:auto;padding:50px 0px 20px 0px">
    	<div class="col-md-6" style="padding-top:30px">
    		<img src="<?php echo $this->base ?>/assets/img/logo.png" width="350">
    		<div class="clearfix"></div>
    	</div>
    	<div class="col-md-6">
	        <?php echo $this->Form->create('User', array('url'=>array('controller'=>'front', 'action'=>'login'), 'class'=>'', 'id'=>'', 'inputDefaults'=>array('label'=>false, 'div'=>false, 'class'=>'form-control' ))) ?>
	            <h2 class="login-title">SIGN IN</h2>
	            <div class="form-group">
	            	<?php echo $this->Form->input('username', array('required'=>true, 'placeholder'=>'USERNAME', 'autofocus'=>true, 'class'=>'form-control input-form')) ?>
	            </div>
	            <div class="form-group">
	            	<?php echo $this->Form->input('password', array('required'=>true, 'placeholder'=>'PASSWORD', 'class'=>'form-control input-form')) ?>
	            </div>
	            
	            
	            <!-- <div class="checkbox">
	                <span class="svg-icon checkbox-icon" data-icon="checkbox"></span>
	                <label>Remember Me</label>
	            </div> -->
	            <!-- <small>
	                <a class="box-switcher" data-switch="box-register" href="">Don't have an Account?</a> or
	                <a class="box-switcher" data-switch="box-reset" href="">Forgot Password?</a>
	            </small> -->
	            
	            <button class="btn btn-primary pull-right btn-min">
	            	SIGN IN
	            </button>
	        </form>
    	</div>
    </div>
    
    <div class="footer">
    	<div class="copyright">COPYRIGHT &copy 2012 | ALL RIGHTS RESERVED</div>
    	<div class="poweredby">POWERED BY: <a href="http://edncsolutions.com.ph">E D & C SOLUTIONS</a></div>
    </div>
</body>
</html>