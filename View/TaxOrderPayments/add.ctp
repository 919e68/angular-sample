<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> ASSESS BUSINESS PERMIT APPLICATION</div>
        <div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
			    <li class="active"><a data-target="#details" role="tab" data-toggle="tab">APPLICATION</a></li>
			    <li><a data-target="#business" role="tab" data-toggle="tab">BUSINESS INFORMATION</a></li>
			    <li><a data-target="#requirements" role="tab" data-toggle="tab">REQUIREMENTS</a></li>
			    <li><a data-target="#fees" role="tab" data-toggle="tab">FEES</a></li>
			</ul>
			
			<div class="tab-content">
			    <div class="tab-pane active" id="details">
			    	<table class="table table-striped table-hover">
			    		<tr>
			    			<td style="width:190px">APPLICATION</td>
			    			<td class="uppercase italic">{{ data.BusinessPermitApplication.code }}</td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT TYPE</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.permit_type }}</td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT #</td>
							<td class="uppercase italic">{{ }}</td>
			    		</tr>
			    		<tr>
			    			<td>NAME</td>
							<td class="uppercase italic">{{ data.BusinessOwner.full_name }}</td>
			    		</tr>
			    		<tr>
			    			<td>ADDRESS</td>
							<td class="uppercase italic">{{ data.BusinessOwner.address }}</td>
			    		</tr>
			    		<tr>
			    			<td>CONTACT #</td>
							<td class="uppercase italic">{{ data.BusinessOwner.contact_number }}</td>
			    		</tr>
			    		<tr>
			    			<td>EMAIL</td>
							<td class="italic">{{ data.BusinessOwner.email }}</td>
			    		</tr>
			    	</table>
			    </div>
			    <div class="tab-pane" id="business">
			    	<table class="table table-striped table-hover">
			    		<tr>
			    			<td style="width:190px">BUSINESS TYPE</td>
			    			<td class="uppercase italic">{{ data.Business.BusinessType.name }}</td>
			    		</tr>
			    		<tr>
			    			<td>BUSINESS NAME</td>
							<td class="uppercase italic">{{ data.Business.name }}</td>
			    		</tr>
			    		<tr>
			    			<td>CONTACT #</td>
							<td class="uppercase italic">{{ data.Business.contact_number }}</td>
			    		</tr>
			    		<tr>
			    			<td>LINE OF BUSINESS</td>
							<td class="uppercase italic">{{ data.Business.line_of_business }}</td>
			    		</tr>
			    		<tr>
			    			<td>ADDRESS</td>
							<td class="uppercase italic">{{ data.Business.address }}</td>
			    		</tr>
			    		<tr>
			    			<td>EMPLOYEES</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.number_of_employees | number:2 }}</td>
			    		</tr>
			  
			    		<tr>
			    			<td>CAPITAL INVESTMENT</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.capital_investment | number:2  }}</td>
			    		</tr>	
			
			    		<tr>
			    			<td>LAST YEAR DECLARED GROSS</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.last_year_declared_gross_sales }}</td>
			    		</tr>		
			    		
			    		<tr>
			    			<td>BUSINESS TAX CLASS</td>
							<td class="uppercase italic">{{ data.BusinessTaxClass.code }}</td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT FEE CLASS</td>
							<td class="uppercase italic">{{ data.BusinessPermitFeeClass.code }}</td>
			    		</tr>
			    		<tr>
			    			<td>ASSET TYPE</td>
							<td class="uppercase italic">{{ data.BusinessAssetType.name }}</td>
			    		</tr>
			    	</table>
			    </div>
			    
			    <div class="tab-pane" id="requirements">
			    	<table class="table table-bordered table-striped table-hover">
			    		<thead>
				    		<tr>
				    			<th style="width:30px"></th>
				    			<th>REQUIMENT</th>
				    			<th class="text-center">STATUS</th>
				    		</tr>
			    		</thead>
			    		<tbody>
			    			<tr ng-repeat="requirement in data.BusinessPermitApplicationRequirement" class="">
			    				<td>{{ $index+1 }}</td>
			    				<td class="uppercase">{{ requirement.BusinessPermitRequirement.name }}</td>
			    				<td class="text-center italic" style="width:120px">
			    					<span class="label label-success" ng-if="requirement.status">APPROVE</span>
			    					<span class="label label-danger" ng-if="requirement.status == false">NOT APPROVE</span>
			    				</td>
			    			</tr>
			    		</tbody>
			    	</table>
			    </div>
			    
			    <div class="tab-pane" id="fees">
			    	<table class="table table-bordered table-striped table-hover vcenter">
						<thead>
			    			<tr>
			    				<th style="width:30px"></th>
			    				<th>FEE</th>
			    				<th style="width:120px">AMOUNT</th>
			    				<th style="width:30px"></th>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<tr ng-repeat="fee in fees">
			    				<td>{{ $index+1 }}</td>
			    				<td class="uppercase">{{ fee.name }}</td>
			    				<td class="text-right">
			    					<input type="text" class="form-control text-right fee-amount" ng-model="fee.amount" ng-keyup="decimalZero(fee)">
			    				<td>
			    					<a class="remove-fee btn btn-danger btn-xs no-border-radius" href="javascript:void(0)"><i class="fa fa-times"></i></a>
			    				</td>
			    			</tr>
			    		</tbody>
			    		<tfoot>
			    			<tr>
			    				<td></td>
			    				<td class="text-right">TOTAL</td>
			    				<th id="total-fee" class="text-right">PHP {{ fees | total:'amount' | number:2 }}</th>
			    				<td></td>
			    			</tr>
			    		</tfoot>
			    	</table>
			    	<hr>
			    	<div class="row">
			    		<div class="col-md-3 pull-right">
			    			<button class="btn btn-primary btn-sm btn-min btn-block" ng-click="save()">SAVE</button>
			    		</div>
			    		<div class="col-md-3 pull-right">
			    			<button type="button" class="btn btn-danger btn-sm btn-min btn-block" data-dismiss="modal">CANCEL</button>
			    		</div>
			    	</div>
			    </div>
			</div>
        </div>
    </div>
</div>