<!DOCTYPE html>
<html>
<head>
	<style>
		.logo {
			width: 50px;
			position: absolute;
			margin-left: 10px;
			margin-top: 5px;
		}
		.republic, .province, .municipality {
			font-size: 11px;
		}
		.main {
			border: 1px solid #000;
			padding: 4px 0px 0px 0px;
			width: 355px;
			float: left;
			margin-left: 10px;
			height: 465px;
		}
		.main.first { margin-left: 0px;}
		.text-center {
			text-align: center;
		}
		.permit-number {
			color: red;
			font-size:25px;
		}
		.ambulant-vendor {
			color:red;
			font-size:15px;
			margin-bottom:0px;
		}
		.permit-image {
			height: 100px;
			border: 1px solid #000;
		}
		.permit-label {
			font-size: 11px;
			font-family: Calibri;
			color: red;
		}
		.line-of-business {
			margin-bottom: 5px;
		}
		.approved-label {
			font-size: 11px;
			font-family: Calibri;
		}
		.mayor-value {
			text-decoration: underline;
			font-weight: bold;
		}
		.mayor-label {
			font-size: 11px;
			font-family: Calibri;
			margin-bottom: 5px;
		}
		@print {
			.table-data {
				background: #9D9D9D;
			}
		}
		.table-data {
			background: #9D9D9D;
			width: 100%;
			font-size:10px;
			font-family: Calibri;
			border: 1px solid #000;
			border-left: none;
			border-right: none;
			border-collapse: collapse;
			border-spacing: 0px;
			margin-bottom: 5px;
		}
		.f12px {
			font-size: 12px;
		}
		.table-data td {
			border: 1px solid #000;
			padding: 2px;
		}
		.table-data td:first-child {
			border-left: none;
		}
		.table-data td:last-child {
			border-right: none;
		}
		.footer-data {
			font-size: 9px;
			font-family: Calibri;
		}
		.calibri {
			font-family: Calibri;
		}
	</style>
</head>
<body>
	<div class="main first">
		<img src="<?php echo $this->base ?>/assets/img/logo-masinloc.png" class="logo">
		<div class="calibri">
			<div class="text-center republic">Republic of the Philippines</div>
			<div class="text-center province">Province of Zambales</div>
			<div class="text-center municipality">MUNICIPALITY OF MASINLOC</div>
			<div class="text-center permit-number">2014-0735</div>
			<div class="text-center ambulant-vendor">AMBULANT VENDOR</div>	
		</div>
		
		<div class="text-center">
			<img class="permit-image" src="<?php echo $this->base ?>/assets/img/mayor.png">
		</div>
		
		<div>
			<div class="text-center">DOMINICA M. DANGANAN</div>
			<div class="text-center permit-label">OWNER OF BUSINESS</div>
			
			<div class="text-center f12px">MARKET 2</div>
			<div class="text-center permit-label">BUSINESS ADDRESS</div>
			
			<div class="text-center f12px">FISH VENDOR</div>
			<div class="text-center permit-label line-of-business">LINE OF BUSINESS</div>
			
			<div class="text-center approved-label">Approved by:</div>
			
			<div class="text-center f12px mayor-value">Hon. DESIREE S. EDORA</div>
			<div class="text-center mayor-label">Municipal Mayor</div>
		</div>
		
		<div>
			<div>
				<table class="table-data">
					<tr>
						<td  class="text-center" style="width:50%">MAYOR'S PERMIT FEE</td>
						<td  class="text-center" style="width:50%">P55.00</td>
					</tr>
					<tr>
						<td class="text-center">OR NO.</td>
						<td class="text-center">6781649</td>
					</tr>
					<tr>
						<td class="text-center">DATE ISSUED</td>
						<td class="text-center">February 28, 2014</td>
					</tr>
					<tr>
						<td class="text-center">CTC. NO.</td>
						<td class="text-center">32603617</td>
					</tr>
					<tr>
						<td class="text-center">DATE ISSUED</td>
						<td class="text-center">February 28, 2014</td>
					</tr>
					<tr>
						<td class="text-center">PLACE ISSUED</td>
						<td class="text-center">MASINLOC, ZAMBALES</td>
					</tr>
				</table>
			</div>
			
			<div class="text-center footer-data">This permit is valid until December 31, 20214, UNLESS SONNER REVOKED</div>
		</div>
	</div>
	
	
	<div class="main">
		<img src="<?php echo $this->base ?>/assets/img/logo-masinloc.png" class="logo">
		<div class="calibri">
			<div class="text-center republic">Republic of the Philippines</div>
			<div class="text-center province">Province of Zambales</div>
			<div class="text-center municipality">MUNICIPALITY OF MASINLOC</div>
			<div class="text-center permit-number">2014-0735</div>
			<div class="text-center ambulant-vendor">AMBULANT VENDOR</div>	
		</div>
		
		<div class="text-center">
			<img class="permit-image" src="<?php echo $this->base ?>/assets/img/mayor.png">
		</div>
		
		<div>
			<div class="text-center">DOMINICA M. DANGANAN</div>
			<div class="text-center permit-label">OWNER OF BUSINESS</div>
			
			<div class="text-center f12px">MARKET 2</div>
			<div class="text-center permit-label">BUSINESS ADDRESS</div>
			
			<div class="text-center f12px">FISH VENDOR</div>
			<div class="text-center permit-label line-of-business">LINE OF BUSINESS</div>
			
			<div class="text-center approved-label">Approved by:</div>
			
			<div class="text-center f12px mayor-value">Hon. DESIREE S. EDORA</div>
			<div class="text-center mayor-label">Municipal Mayor</div>
		</div>
		
		<div>
			<div>
				<table class="table-data">
					<tr>
						<td  class="text-center" style="width:50%">MAYOR'S PERMIT FEE</td>
						<td  class="text-center" style="width:50%">P55.00</td>
					</tr>
					<tr>
						<td class="text-center">OR NO.</td>
						<td class="text-center">6781649</td>
					</tr>
					<tr>
						<td class="text-center">DATE ISSUED</td>
						<td class="text-center">February 28, 2014</td>
					</tr>
					<tr>
						<td class="text-center">CTC. NO.</td>
						<td class="text-center">32603617</td>
					</tr>
					<tr>
						<td class="text-center">DATE ISSUED</td>
						<td class="text-center">February 28, 2014</td>
					</tr>
					<tr>
						<td class="text-center">PLACE ISSUED</td>
						<td class="text-center">MASINLOC, ZAMBALES</td>
					</tr>
				</table>
			</div>
			
			<div class="text-center footer-data">This permit is valid until December 31, 20214, UNLESS SONNER REVOKED</div>
		</div>
	</div>
</body>	
</html>