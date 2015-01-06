<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> BUSINESS PERMIT INFORMATION</div>
        <div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
			    <li class="active"><a data-target="#details" role="tab" data-toggle="tab">PERMIT</a></li>
			    <li><a data-target="#requirements" role="tab" data-toggle="tab">REQUIREMENTS</a></li>
			</ul>
			<div class="tab-content">
			    <div class="tab-pane active" id="details">
					<table class="table table-bordered table-striped">
						<tr>
							<td>PERMIT NUMBER</td>
							<td>{{ data.result.BusinessPermit.permit_number }}</td>
						</tr>
						<tr>
							<td>BUSINESS NAME</td>
							<td>{{ data.result.BusinessPermitApplication.Business.name }}</td>
						</tr>
						<tr>
							<td>BUSINESS OWNER</td>
							<td>{{ data.result.BusinessPermitApplication.BusinessOwner.full_name }}</td>
						</tr>
						<tr>
							<td>DESCRIPTION</td>
							<td>{{ data.result.BusinessPermitApplication.Business.description }}</td>
						</tr>
						<tr>
							<td>MAYOR'S PERMIT FEE</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>O.R #</td>
							<td>{{ data.result.BusinessPermitApplication.TaxOrderPayment.or_number }}</td>
						</tr>
						<tr>
							<td>Date Issued</td>
							<td>{{ data.result.BusinessPermit.date_released }}</td>
						</tr>
						<tr>
							<td>CTC #</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>DATE ISSUED</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>PLACE ISSUED</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>BUSINESS TAX</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>T.I.N</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>PAG-IBIG #</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>SSS #</td>
							<td>{{  }}</td>
						</tr>
						<tr>
							<td>PHILHEALTH #</td>
							<td>{{  }}</td>
						</tr>
					</table>
			    </div>
			    <div class="tab-pane active" id="details">
			    	<table>
			    		<tr>
			    			<td></td>
			    			<td></td>
			    		</tr>
			    	</table>
			    </div>
			</div>
			<div class="col-md-2 pull-right">
				<button ng-click="print()" class="btn btn-primary btn-sm btn-block"><i class="fa fa-print" style="font-size:25px"></i><br>PRINT</button>
			</div>
        </div>
    </div>
</div>