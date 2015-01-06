<html>
<head>
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/css/print.css">
	<link rel="stylesheet" href="<?php echo $this->base ?>/assets/plugins/bootstrap-3.2/css/bootstrap.min.css">
</head>
<body>

	<div class="header">
		<div class="state">Republic of the Philippines</div>
		<div class="province">Province of Zambales</div>
		<div class="city">MINUCIPALITY OF MASINLOC</div>
		<div class="office">OFFICE OF THE MAYOR</div>
		<div class="permit-number">2014-0667</div>
		<div class="permit-title">AMBULANT PERMIT</div>
	</div>
	<br>
	<div class="main">
		<div class="ambulant-image">
			<img src="test.jpg" width="150">
		</div>
		<div>
			<div class="permit-value uppercase"><?php echo $permit['BusinessPermitApplication']['BusinessOwner']['first_name'] ?> <?php echo $permit['BusinessPermitApplication']['BusinessOwner']['middle_name'] != ''? substr($permit['BusinessPermitApplication']['BusinessOwner']['middle_name'],0,1).'.':'' ?> <?php echo $permit['BusinessPermitApplication']['BusinessOwner']['last_name'] ?></div>
			<div class="permit-label">Owner of Business</div>
		</div>
		
		<div>
			<div class="permit-value uppercase"><?php echo $permit['BusinessPermitApplication']['Business']['name'] ?></div>
			<div class="permit-label">Name of Business</div>
		</div>
		
		<div>
			<div class="permit-value"><?php echo $permit['BusinessPermitApplication']['Business']['address'] ?></div>
			<div class="permit-label">Business Address</div>
		</div>
		
		<div>
			<div class="permit-value"><?php echo $permit['BusinessPermitApplication']['Business']['line_of_business'] ?></div>
			<div class="permit-label">Line of Business</div>
		</div>
		
		<div>
			<div class="permit-value"><?php echo $permit['BusinessPermitApplication']['Business']['description'] ?></div>
			<div class="permit-label">Description</div>
		</div>
		
		<div>
			<table class="requirements">
				<tr>
					<td style="width:25%">Mayor's Permit Fee</td>
					<th style="width:25%"><?php $permit['BusinessPermitApplication']?></th>
					
					<td style="width:25%">Business Tax</td>
					<th style="width:25%"></th>
				</tr>
				
				<tr>
					<td>O.R. No.</td>
					<th></th>
					
					<td>T.I.N.</td>
					<th></th>
				</tr>
				
				<tr>
					<td>Date Issued</td>
					<th></th>
					
					<td>PAG-IBIG</td>
					<th></th>
				</tr>
				
				<tr>
					<td>CTC No.</td>
					<th></th>
					
					<td>SSS No.</td>
					<th></th>
				</tr>
				
				<tr>
					<td>Date Issued</td>
					<th></th>
					
					<td>PHILHEALTH No.</td>
					<th></th>
				</tr>
				
				<tr>
					<td>Place Issued</td>
					<th></th>
					
					<td></td>
					<th></th>
				</tr>
			</table>
		</div>
		
		<div>
			<div class="mayors-name">Hon. DESIREE S. EDORA</div>
			<div class="municiapl-mayor">Municipal Mayor</div>
		</div>
		
	</div>
	
</body>
</html>


