<div class="header">
	<div class="col-md-3">
		<div class="header-sub-wrapper">
			<a href="<?php echo Router::url(array('controller'=>'front', 'action'=>'index')) ?>" class="logo-link">
				<div id="logo">eLOGOS</div>
				<div id="title">Electronic Local Government System</div>	
			</a>
		</div>
	</div>
	
	<div class="col-md-9">
		<div class="header-sub-wrapper-2">
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="system-title">BUSINESS PERMIT AND LICENSING</li>
					</ul>
						
					<ul class="nav navbar-nav navbar-right">
						<?php if(in_array('bpls-application', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
						<li>
							<a ui-sref="business-permit-applications-add">
								<div class="menu-icon"><i class="fa fa-plus-circle"></i></div>
								<div>NEW</div>
							</a>
						</li>
						<li>
							<a ui-sref="business-permit-applications">
								<div class="menu-icon"><i class="fa fa-file-text-o"></i></div>
								<div>APPLICATIONS</div>
							</a>
							
						</li>
						<?php endif ?>
						
						<?php if(in_array('bpls-assessment', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
						<li>
							<a ui-sref="assessments">
								<div class="menu-icon"><i class="fa fa-dashboard"></i></div>
								<div>ASSESSMENT</div>
							</a>
						</li>
						<?php endif ?>
						
						<?php if(in_array('bpls-payment', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
						<li>
							<a ui-sref="tax-order-payments">
								<div class="menu-icon"><i class="fa fa-money"></i></div>
								<div>PAYMENT</div>
							</a>
						</li>
						<?php endif ?>
						
						<?php if(in_array('bpls-permit', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
						<li>
							<a ui-sref="business-permits">
								<div class="menu-icon"><i class="fa fa-file"></i></div>
								<div>PERMITS</div>
							</a>
						</li>
						<?php endif ?>
						
						<?php if(in_array('bpls-report', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
						<li>
							<a ui-sref="reports">
								<div class="menu-icon"><i class="fa fa-bar-chart-o"></i></div>
								<div>REPORTS</div>
							</a>
						</li>
						<?php endif ?>
						
						<?php if(in_array('bpls-setting', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div>SETTINGS</div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<?php if(in_array('bpls-application', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
								<li><a ui-sref="business-types"><i class="fa fa-arrow-circle-right"></i> BUSINESS TYPES</a></li>
								<li><a ui-sref="business-permit-requirements"><i class="fa fa-arrow-circle-right"></i> REQUIREMENTS</a></li>
								<?php endif ?>
								
								<?php if(in_array('bpls-assessment', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
								<li><a ui-sref="business-permit-fees"><i class="fa fa-arrow-circle-right"></i> PERMIT FEES</a></li>
								<li><a ui-sref="business-tax-classes"><i class="fa fa-arrow-circle-right"></i> BUSINESS TAX CLASS</a></li>
								<li><a ui-sref="business-permit-fee-classes"><i class="fa fa-arrow-circle-right"></i> PERMIT FEE CLASS</a></li>
								<?php endif ?>
								
								<?php if(in_array('bpls-application', $this->Session->read('Auth.Permission')) or $this->Session->read('Auth.User.role') == 'superuser'): ?>
								<li><a ui-sref="business-asset-types"><i class="fa fa-arrow-circle-right"></i> ASSET TYPES</a></li>
								<?php endif ?>
								
								<?php if($this->Session->read('Auth.User.role') == 'superuser'): ?>
								<li><a ui-sref="users"><i class="fa fa-arrow-circle-right"></i> USER MANAGEMENT</a></li>
								<?php endif ?>
							</ul>
						</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
