<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> EDIT BUSINESS PERMIT APPLICATION</div>
        <div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
			    <li class="active"><a data-target="#details" role="tab">APPLICATION INFORMATION</a></li>
			    <li><a data-target="#requirements" role="tab">REQUIREMENTS</a></li>
			</ul>
			<div class="tab-content">
			    <div class="tab-pane active" id="details" style="padding-top:20px">
					<form id="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Application Type</label>
								<select class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.type" id="application-type">
									<option value=""></option>
									<option value="New">New</option>
									<option value="Renewal">Renewal</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Permit Type</label>
								<select  class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.permit_type" id="permit-type">
									<option value=""></option>
									<option value="2">Mayor's Permit</option>
									<option value="1">Temporary Permit</option>
									<option value="0">Ambulant Permit</option>
								</select>
							</div>
						</div>
						<div class="col-md-4" ng-if="data.BusinessPermitApplication.type == 'Renewal'">
							<div class="form-group">
								<label>PERMIT NUMBER REFERENCE</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.permit_number" ng-keyup="autofill(data.BusinessPermitApplication.permit_number)">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.last_name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.first_name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" ng-model="data.BusinessOwner.middle_name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.gender">
									<option value=""></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Home Contact #</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.contact_number">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" ng-model="data.BusinessOwner.email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Home Address</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.address">
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Business Type</label>
								<select class="form-control" data-validation-engine="validate[required]" ng-model="data.Business.business_type_id" id="business-type" ng-options="businessType.id as businessType.name for businessType in businessTypes">
								    <option value=""></option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Business Name</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.Business.name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Business Contact #</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.Business.contact_number">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Line of Business</label>
								<select class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.business_tax_class_id" id="business-tax-class" ng-options="taxClass.id as taxClass.name for taxClass in businessTaxClass">
								    <option value=""></option>
								</select>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Description</label>
								<input type="text" class="form-control" ng-model="data.Business.description">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>No. of Employees</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.number_of_employees">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Business Address</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.Business.address">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4" ng-if="data.BusinessPermitApplication.type == 'New'">
							<div class="form-group" id="last-gross">
								<label>Capital Invesment</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.capital_investment">
							</div>
						</div>
						<div class="col-md-4" ng-if="data.BusinessPermitApplication.type == 'Renewal'">
							<div class="form-group" id="last-gross">
								<label>Last Year Declared Gross Sales</label>
								<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.last_year_declared_gross_sales">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Asset Type</label>
								<select class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.business_asset_type_id" id="asset-type" ng-options="assetType.id as assetType.name for assetType in businessAssetTypes">
								    <option value=""></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label>Image</label>
								<input type="file" class="form-control">
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3 pull-right">
							<button class="btn btn-primary btn-sm btn-block" ng-click="next()">NEXT</button>
						</div>
					</div>
					</form>
			    </div>
			    
			    <div class="tab-pane" id="requirements">
			    	<div class="row">
			    		<table class="table table-bordered vcenter">
			    			<thead>
			    				<tr>
			    					<th></th>
			    					<th>REQUIREMENT</th>
			    					<th>CERTIFICATE</th>
			    					<th>DATE ISSUED</th>
			    					<th>LOCATION</th>
			    					<th style="width:30px"></th>
			    				</tr>
			    			</thead>
			    			<tbody>
			    				<tr ng-repeat="requirement in data.BusinessPermitApplicationRequirement">
			    					<td><input iCheck type="checkbox" ng-model="requirement.status"></td>
			    					<td class="uppercase">{{ requirement.BusinessPermitRequirement.name }}</td>
			    					<td><input type="text" class="form-control input-sm" ng-model="requirement.certificate_number"></td>
			    					<td><input type="text" class="form-control input-sm datepicker"></td>
			    					<td><input type="text" class="form-control input-sm"></td>
			    					<td>
			    						<div class="btn-group btn-group-xs">
			    							<a class="btn btn-danger no-border-radius" ng-click="removeRequirement(requirement)"><i class="fa fa-times"></i></a>
			    						</div>
			    					</td>
			    				</tr>
			    			</tbody>
			    		</table>
			    	</div>
			    	<div class="row">
			    		<div class="col-md-3">
			    			<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#add-requirements-modal"><i class="fa fa-plus"></i> ADD REQUIREMENTS</button>
						   <div class="modal fade" id="add-requirements-modal">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title">REQUIREMENTS</h4>
										</div>
										<div class="modal-body">
											<div class="col-md-12">
											
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger btn-sm btn-min" data-dismiss="modal">CLOSE</button>
											<button type="button" class="btn btn-primary btn-sm btn-min">ADD</button>
										</div>
									</div>
								</div>
							</div>
			    		</div>
			    	</div>
			    	<hr>
					<div class="row">
						<div class="col-md-3 pull-right">
							<button class="btn btn-primary btn-sm btn-block" ng-click="save()">UPDATE</button>
						</div>
						<div class="col-md-3 pull-right">
							<button class="btn btn-danger btn-sm btn-block" ng-click="back()">BACK</button>
						</div>
					</div>
			    </div>
        	</div>
        </div>
    </div>
</div>
<!-- <style>
	#application-type, #permit-type {
		display: block !important;
		height: 0px;
		visibility: hidden;
		border: none;
	}
</style> -->
<script>
$('.datepicker').datepicker({format: 'yyyy-mm-dd', autoclose: true});
$('#form').validationEngine('attach');
</script>