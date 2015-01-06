<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> NEW BUSINESS PERMIT APPLICATION</div>
        <div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
			    <li class="active"><a data-target="#details">APPLICATION INFORMATION</a></li>
			    <li><a data-target="#requirements">REQUIREMENTS</a></li>
			</ul>
			<div class="tab-content">
			    <div class="tab-pane active" id="details" style="padding-top:20px">
					<form id="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Application Type</label>
								<input type="hidden" ng-init="data.Business.id = null" ng-model="data.Bussiness.id">
								<input type="hidden" ng-init="data.BusinessOwner.id = null" ng-model="data.BussinessOwner.id">
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
						<table class="table-form">
							<tr>
								<td class="span4 form-label">Transfer</td>
								<td class="span4 form-label">Amendment</td>
								<td class="span4 form-label">Mode of Payment</td>
							</tr>
							<tr>
								<td class="span4">
									<select  class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.transfer" id="transfer">
										<option value=""></option>
										<option>Ownership</option>
										<option>Location</option>
									</select>
								</td>
								<td class="span4">
									<select  class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.amendment" id="transfer">
										<option value=""></option>
										<option>From Single to Partnership</option>
										<option>From Single to Corporation</option>
										<option>From Partnership to Single</option>
										<option>From Partnership to Corporation</option>
										<option>From Corporation to Single</option>
										<option>From Corporation to Partnership</option>
									</select>
								</td>
								<td class="span4">
									<select  class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.mode_of_payment" id="mode-of-payment">
										<option value=""></option>
										<option value="annualy">Annualy</option>
										<option value="semi-annual">Semi-Annual</option>
										<option value="quarterly">Quartely</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span6 form-label">Date of Application</td>
								<td class="span6 form-label">Registration #</td>
							</tr>
							<tr>
								<td class="span6">
									<input type="text" class="form-control">
								</td>
								<td class="span6">
									<input type="text" class="form-control">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span6 form-label">Reference #</td>
								<td class="span6 form-label">Date of Registration</td>
							</tr>
							<tr>
								<td class="span6">
									<input type="text" class="form-control">
								</td>
								<td class="span6">
									<input type="text" class="form-control">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span6 form-label">Type of Organization</td>
								<td class="span3 form-label">CTC #</td>
								<td class="span3 form-label">TIN #</td>
							</tr>
							<tr>
								<td class="span6">
									<input type="text" class="form-control">
								</td>
								<td class="span3">
									<input type="text" class="form-control">
								</td>
								<td class="span3">
									<input type="text" class="form-control">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="form-label" colspan="3">Name of Tax Payer</td>
							</tr>
							<tr>
								<td class="span4">
									<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.last_name" placeholder="Last Name">
								</td>
								<td class="span4">
									<input type="text" class="form-control" data-validation-engine="validate[required]" ng-model="data.BusinessOwner.first_name" placeholder="First Name">
								</td>
								<td class="span4">
									<input type="text" class="form-control" ng-model="data.BusinessOwner.middle_name" placeholder="Middle Name">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span12 form-label">Business Name</td>
							</tr>
							<tr>
								<td class="span12">
									<input type="text" class="form-control">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span12 form-label">Trade Name/Franchise</td>
							</tr>
							<tr>
								<td class="span12">
									<input type="text" class="form-control">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="form-label" colspan="3">Name of Officer/Representative of Business Entity/Corporation</td>
							</tr>
							<tr>
								<td class="span4">
									<input type="text" class="form-control" placeholder="Last Name">
								</td>
								<td class="span4">
									<input type="text" class="form-control" placeholder="First Name">
								</td>
								<td class="span4">
									<input type="text" class="form-control" placeholder="Middle Name">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr class="form-label">
								<td colspan="4">Business Address</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="House #/Bldg #">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Building Name">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Unit #">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Street">
								</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Barangay">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Subdivision">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Municipality">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Province">
								</td>
							</tr>
							<tr>
								<td class="span6" colspan="2">
									<input type="text" class="form-control" placeholder="Contact #">
								</td>
								<td class="span6" colspan="2">
									<input type="text" class="form-control" placeholder="Email">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr class="form-label">
								<td>Owner's Address</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="House #/Bldg #">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Building Name">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Unit #">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Street">
								</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Barangay">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Subdivision">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Municipality">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Province">
								</td>
							</tr>
							<tr>
								<td class="span6" colspan="2">
									<input type="text" class="form-control" placeholder="Contact #">
								</td>
								<td class="span6" colspan="2">
									<input type="text" class="form-control" placeholder="Email">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span6 form-label">Block/Lot #</td>
								<td class="span6 form-label">Property Value</td>
							</tr>
							<tr>
								<td class="span6">
									<input type="text" class="form-control" placeholder="">
								</td>
								<td class="span6">
									<input type="text" class="form-control" placeholder="">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td class="span4 form-label">Business Area (in square meter)</td>
								<td class="span4 form-label">Total no. of Employees of Establishment</td>
								<td class="span4 form-label">No. of Employees residing in LGU</td>
							</tr>
							<tr>
								<td class="span4">
									<input type="text" class="form-control" placeholder="">
								</td>
								<td class="span4">
									<input type="text" class="form-control" placeholder="">
								</td>
								<td class="span4">
									<input type="text" class="form-control" placeholder="">
								</td>
							</tr>
						</table>
					</div>
					
					<hr>
					<div class="row">
						<table class="table-form">
							<tr>
								<td colspan="4">If place of business is rented, please identify the following: </td>
							</tr>
							<tr>
								<td colspan="3">Lessors Name</td>
								<td>Monthly Rental</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Last Name">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="First Name">
								</td>
								<td class="span4">
									<input type="text" class="form-control" placeholder="Middle Name">
								</td>
								<td class="span2">
									<input type="text" class="form-control" placeholder="">
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<table class="table-form">
							<tr class="form-label">
								<td>Lessor's Address</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="House #/Bldg #">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Building Name">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Unit #">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Street">
								</td>
							</tr>
							<tr>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Barangay">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Subdivision">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Municipality">
								</td>
								<td class="span3">
									<input type="text" class="form-control" placeholder="Province">
								</td>
							</tr>
							<tr>
								<td class="span6" colspan="2">
									<input type="text" class="form-control" placeholder="Contact #">
								</td>
								<td class="span6" colspan="2">
									<input type="text" class="form-control" placeholder="Email">
								</td>
							</tr>
						</table>
					</div>
					<hr>
					
					<div class="row">
						<table class="table-form">
							<tr>
								<td colspan="2">Contact Person in case of emergency</td>
							</tr>
							<tr>
								<td class="span6">
									<input type="text" class="form-control" placeholder="Contact Person">
								</td>
								<td class="span6">
									<input type="text" class="form-control" placeholder="Telephone #">
								</td>
							</tr>
							<tr>
								<td class="span6">
									<input type="text" class="form-control" placeholder="Mobile #">
								</td>
								<td class="span6">
									<input type="text" class="form-control" placeholder="Email">
								</td>
							</tr>
						</table>
					</div>
					<hr>
					
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
								<input type="text" data-validation-engine="validate[required]" class="form-control" ng-model="data.Business.description">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>No. of Employees</label>
								<input type="text" class="form-control decimal" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.number_of_employees">
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
								<input type="text" class="form-control decimal" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.capital_investment">
							</div>
						</div>
						<div class="col-md-4" ng-if="data.BusinessPermitApplication.type == 'Renewal'">
							<div class="form-group" id="last-gross">
								<label>Last Year Declared Gross Sales</label>
								<input type="text" class="form-control decimal" data-validation-engine="validate[required]" ng-model="data.BusinessPermitApplication.last_year_declared_gross_sales">
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
								<input type="file" class="form-control" name="data[image]" data-validation-engine="validate[required]">
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
			    		<div class="col-md-12">
				    		<table class="table table-bordered vcenter">
				    			<thead>
				    				<tr>
				    					<th style="width:30px"></th>
				    					<th>REQUIREMENT</th>
				    					<th>CERTIFICATE</th>
				    					<th>DATE ISSUED</th>
				    					<th>LOCATION</th>
				    					<th style="width:30px"></th>
				    				</tr>
				    			</thead>
				    			<tbody>
				    				<tr ng-repeat="requirement in requirements">
				    					<td><input iCheck type="checkbox" ng-model="requirement.status"></td>
				    					<td class="uppercase">{{ requirement.name }}</td>
				    					<td><input type="text" class="form-control input-sm" ng-model="requirement.certificate_number" data-validation-engine="validate[required]"></td>
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
			    		
			    		<div class="col-md-3">
			    			<button class="btn btn-primary btn-block btn-xs" data-toggle="modal" data-target="#additional-requirements">ADD REQUIREMENTS</button>
			    		</div>
			    	</div>
			    	<hr>
					<div class="row">
						<div class="col-md-3 pull-right">
							<button class="btn btn-primary btn-sm btn-block save-button" ng-click="save()">SAVE</button>
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

<div class="modal fade" id="additional-requirements">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">REQUIREMENTS</h4>
            </div>
            <div class="modal-body">
	    		<div class="col-md-12">
		    		<table class="table table-bordered vcenter">
		    			<thead>
		    				<tr>
		    					<th style="width:30px"></th>
		    					<th>REQUIREMENT</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr ng-repeat="requirement in otherRequirements">
		    					<td><input iCheck type="checkbox" ng-model="requirement.status" ng-change="addRemoveAdditional(requirement)"></td>
		    					<td class="uppercase">{{ requirement.name }}</td>
		    				</tr>
		    			</tbody>
		    		</table>
	    		</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm btn-min" data-dismiss="modal">OK</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- <style>
	#application-type, #permit-type {
		display: block !important;
		height: 0px;
		visibility: hidden;
		border: none;
	}
</style> -->
<script>
$('.decimal').inputmask({alias: 'decimal', groupSeparator: ',', autoGroup:true, rightAlign: false});
$('.datepicker').datepicker({format: 'yyyy-mm-dd', autoclose: true});
$('#form').validationEngine('attach');
modalMaxHeight();
</script>