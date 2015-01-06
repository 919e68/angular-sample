<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			padding: 15px;
			font-family: Calibri;
			font-size: 13px;
		}
		.table {
			width:100%;
			border-collapse: collapse;
			border: 1px solid #000;
		}
		.table td, .table th {
			padding:4px;
			border: 1px solid #000;
			border-bottom:none;
		}
		.table tr td:first-child,
		.table tr th:first-child {
			border-left: none;
		}
		.table tr td:last-child,
		.table tr th:last-child {
			border-right: none;
		}
		.text-center {
			text-align: center;
		}
		.text-left {
			text-align: left !important;
		}
		.vcenter {
			vertical-align: middle !important;
		}

		.no-border {
			border:none;
		}
		.no-border td, 
		.no-border th {
			border:none;
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
		.red {
			color: red;
		}
		.padL {
			padding-left: 25px !important;
		}
		.underline {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div>
		<img src="<?php echo $this->base ?>/assets/img/logo-masinloc.png" width="90" style="position:absolute; margin:10px 0px 0px 10px">
		<div class="text-center bold" style="font-size:18px;padding-top:30px">Municipal Investment Promotion Office</div>
		<div class="text-center" style="font-size:16px">Business Permit Licensing Office</div>
		<div class="text-center">eBPLS REPORT</div>
		<div class="text-center">As of August 31, 2014</div>
	</div>
	<div class="main">
		
		<div style="padding-top:90px">
			<div class="bold" style="font-size:16px">BUSINESS PERMIT REPORT</div>
			<table class="table" style="width:100%">
				<tr>
					<td class="padL">New Business Permits</td>
					<td class="text-right" style="width:100px;"></td>
				</tr>
				<tr>
					<td class="padL">Business Permit Renewals</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<td class="padL">Ambulant Permits</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<td class="padL">Total Released Permits</td>
					<td class="text-right"></td>
				</tr>
			</table>
		</div>
		
		<div style="padding-top:50px">
			<div class="bold" style="font-size:16px">REVENUE FROM BUSINESS PERMITS</div>
			<table class="table" style="width:100%">
				<tr>
					<td class="padL">Mayor's Permit Fees</td>
					<td class="text-right" style="width:100px;"></td>
				</tr>
				<tr>
					<td class="padL">Business Tax</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<td class="padL">Regulatory Fees</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<td class="padL">Total Released Permits</td>
					<td class="text-right"></td>
				</tr>
				<tr>
					<th class="text-right" style="text-align:right">TOTAL REVENUES</th>
					<td class="text-right"></td>
				</tr>
			</table>
		</div>
	</div>
	
	
	<div style="padding-top:30px">
		<table style="width:100%">
			<tr>
				<td style="width:50%">Prepared by:</td>
				<td style="width:50%"></td>
			</tr>
			<tr>
				<td class="text-center underline">SWEETHEART L. QUINDO</td>
				<td class="text-center underline"></td>
			</tr>
			<tr>
				<td class="text-center bold">Clerk/Data Encoder</td>
				<td class="text-center bold"></td>
			</tr>
		</table>
	</div>
</body>
</html>