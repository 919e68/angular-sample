<html>
<head>
	<style>
		body {
			font-family: Calibri;
			font-size: 13px;
			margin:0px;
		}
		.table {
			width:100%;
		}
		.text-center {
			text-align: center;
		}
		.italic {
			font-style: italic;
		}
		.bold {
			font-weight:bold;
		}
		.normal {
			font-weight:normal;
		}
		.uppercase {
			text-transform:uppercase;
		}
		.permit-data {
			font-family: Times New Roman;
			font-size:19px;
	
			text-decoration:underline;
		}
		.permit-number {
			font-size: 45px;
			font-weight: 900;
			color: red;
			text-shadow: 1px 1px 0px #fff;
		}
	</style>
</head>
<body>
	<img src="<?php echo $this->base ?>/assets/img/permit-bg.jpg" style="position:absolute; width:100%; height:145px; z-index:-1; opacity:0.8">
	
	<div class="header" style="border-bottom:2px solid #000">
		
		<img src="<?php echo $this->base ?>/assets/img/mayor.png" class="mayor-image" width="130" height="144" style="position:absolute;left:0px">
		<img src="/elogos-api/img/owners/<?php echo $permit['BusinessPermitApplication']['BusinessOwner']['id'] ?>/<?php echo $permit['BusinessPermitApplication']['BusinessOwner']['image'] ?>" class="applicant-image" width="130" height="144" style="position:absolute;right:0px">
		
		<div class="text-center" style="font-size:10px; padding-top:20px">Republic of the Philippines</div>
		<div class="text-center">Province of Zambales</div>
		<div class="text-center bold" style="font-size:14px">MINUCIPALITY OF MASINLOC</div>
		<div class="text-center bold" style="font-size:20px;">OFFICE OF THE MAYOR</div>
		<div class="text-center permit-number" style="">2014-0667</div>
	</div>
	
	<div class="main">
		<img src="<?php echo $this->base ?>/assets/img/bg-logo.png" style="position:absolute; z-index:-1; opacity:0.15; width:500px; left:50%; margin-left:-250px; margin-top:45px">
		<div class="italic text-center" style="padding-top:5px">
			Having complied with all existing ordinances, rules and regulations, this permit is issued pursuant to <br>
			Masinloc Revenue Code of 2004 Local Government Series of 1991 <br>
			is hereby granted this privilege in the operation of
		</div>
		
		
		<div class="uppercase text-center permit-data" style="padding-top:25px"><?php echo $permit['BusinessPermitApplication']['Business']['name'] ?></div>
		<div class="text-center">Name of Business</div>
	
		<div class="uppercase text-center permit-data" style="padding-top:8px"><?php echo $permit['BusinessPermitApplication']['BusinessOwner']['first_name'] ?> <?php echo $permit['BusinessPermitApplication']['BusinessOwner']['middle_name'] != ''? substr($permit['BusinessPermitApplication']['BusinessOwner']['middle_name'],0,1).'.':'' ?> <?php echo $permit['BusinessPermitApplication']['BusinessOwner']['last_name'] ?></div>
		<div class="text-center">Owner of Business</div>
	
		<div class="uppercase text-center permit-data" style="padding-top:8px"><?php echo $permit['BusinessPermitApplication']['Business']['address'] ?></div>
		<div class="text-center">Business Address</div>

		<div class="uppercase text-center permit-data" style="padding-top:8px"><?php echo $permit['BusinessPermitApplication']['Business']['line_of_business'] ?></div>
		<div class="text-center">Line of Business</div>

		<div class="uppercase text-center permit-data" style="padding-top:8px"><?php echo $permit['BusinessPermitApplication']['Business']['description'] ?></div>
		<div class="text-center">Description</div>
		
		
		<div style="padding:20px 0px 0px 0px">
			<table class="table">
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
			<div class="text-center" style="padding:20px 0px 25px 0px">Approved by:</div>
			<div class="text-center bold" style="font-size:18px;">Hon. DESIREE S. EDORA</div>
			<div class="text-center">Municipal Mayor</div>
		</div>
		
	</div>
	
	<div class="footer" style="padding-top:20px">
		<div class="bold">TERMS AND CONDITIONS</div>
		<div class="italic">
			1. This permit must be posted in a conspicious place in your establishment.
		</div>
		<div class="italic">
			2. This permit is only a privilege and not a right, subject to revocation and closure of business establishment for any violation of existing Laws and  Ordinances and conditions set forth in the permit.
		</div>
		<div class="italic">
			3. This permit must be renewed on before January 20 of the following year unless sooner revoked for cause. Failure to renew within the time required shall subject the taxpayer to a surcharge of 25% of the amount of taxed, fees or charges due, plus an interest of 2% per month oh the unpaid taxes, fees & charges including surcharges.
		</div>
		<div class="italic">
			4. This permit is not valid without Official Receipt, Barangay Permit, Sanitary Permit, Fire Safety Inspection Certificate and other government requirements.
		</div>
		<div class="italic">
			5. Your business establishment is subject to final inspection on regulatory compliances.
		</div>
		<div class="italic">
			6. Surrender this permit upon closure.retirement of the business
		</div>
		<div class="text-center bold" style="margin-top:20px">VALID UNTIL DECEMBER 31, 2014, UNLESS SOONER REVOKED</div>
	</div>
</body>
</html>


