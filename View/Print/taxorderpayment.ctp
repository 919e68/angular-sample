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
		.text-right {
			text-align: right;
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
	<div class="text-center" style="font-size:15px;font-weight:bold;padding-bottom:20px">TAX ORDER PAYMENT</div>
	
	<div>
		<table class="table no-border">
			<tr>
				<td style="width:120px">Tax Payer:</td>
				<td><?php echo $data['BusinessOwner']['full_name'] ?></td>
				
				<td style="width:120px">Processing Date:</td>
				<td><?php echo date('m-d-Y', strtotime($data['BusinessPermitApplication']['created'])) ?></td>
			</tr>
			<tr>
				<td>Business Name</td>
				<td colspan="3"><?php echo $data['Business']['name'] ?></td>
			</tr>
			<tr>
				<td>Business Location</td>
				<td><?php echo $data['Business']['address'] ?></td>
				
				<td>Ownership</td>
				<td><?php echo $data['Business']['BusinessType']['name'] ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td colspan="3"></td>
			</tr>
		</table>
	</div>

	<div style="margin-top:10px">
		<table class="table">
			<tr>
				<th>TAX DEFINITION</th>
				<th>TAX DUE</th>
				<th>PENALTY</th>
				<th>TOTAL DUE</th>
			</tr>
			<?php $totalDue = 0 ?>
			<?php foreach($data['TaxOrderPayment']['TaxOrderPaymentFee'] as $fee): ?>
			<tr>
				<td><?php echo $fee['BusinessPermitFee']['name'] ?></td>
				<td class="text-right"><?php echo $fee['amount'] ?></td>
				<td class="text-right"><?php echo 0 ?></td>
				<td class="text-right"><?php echo $fee['amount'] ?></td>
			</tr>
			<?php $totalDue += $fee['amount'] ?>
			<?php endforeach ?>
			<tr>
				<th class="text-right">TOTAL</th>
				<th class="text-right"><?php echo number_format($totalDue,2 )?></th>
				<th></th>
				<th class="text-right"><?php echo number_format($totalDue,2 )?></th>
			</tr>
		</table>
	</div>
</body>
</html>