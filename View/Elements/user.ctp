<div class="user-info">
	
	


	<div class="user-image">
		<?php
			$image = '/assets/img/user-male.jpg';
			echo $this->Thumbnail->render($image, array('path' => '',
				'width' => '150', 'height' => '150',
				'resize' => 'portrait','quality' => '100'
			), array('class' => 'img-circle img-responsive', 'alt' => ''));
		?>
	</div>
	<div class="user-name">ADMINISTRATOR</div>
	<div class="user-department">IT DEPARTMENT</div>
	<div class="user-designation">ADMINISTRATOR</div>
	<hr>
	
	<div class="sign-out">
		<div class="col-md-6">
			<a href="<?php echo Router::url(array('controller'=>'front', 'action'=>'lock')) ?>" class="logout">
				<i class="fa fa-lock"></i> LOCK ACCOUNT
			</a>
		</div>
		<div class="col-md-6">
			<a href="<?php echo Router::url(array('controller'=>'front', 'action'=>'logout')) ?>" class="logout">
				<i class="fa fa-sign-out"></i> SIGN OUT
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- <div id="time"><?php echo date('F-d-Y h:i A')?></div> -->
</div>