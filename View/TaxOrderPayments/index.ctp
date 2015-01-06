<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> TREASURY</div>
        <div class="panel-body">
			<div class="col-md-2 pull-right">
	 			<button data-toggle="modal" data-target="#search-box" class="btn btn-primary btn-sm btn-block"><i class="fa fa-cog"></i> FILTER</button>
				<div class="modal fade" id="search-box">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title">SEARCH SETTINGS</h4>
							</div>
							<div class="modal-body">
								
								<div class="col-md-12">
									<div class="form-group">
										<label>SEARCH</label>
										<input type="text" class="form-control search" placeholder="SEARCH HERE" ng-model="strSearch" ng-keyup="search(strSearch)">
									</div>
								</div>
								
								
								<div class="col-md-6">
									<div class="form-group">
										<label>START DATE</label>
										<input type="text" class="form-control datepicker search" placeholder="START DATE">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>END DATE</label>
										<input type="text" class="form-control datepicker search" placeholder="END DATE">
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<label>STATUS</label>
										<select ng-model="search.status" class="form-control search">
											<option value="">ALL</option>
											<option value="1">PAID</option>
											<option value="0">NOT PAID</option>
										</select>
									</div>
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger btn-sm btn-min" data-dismiss="modal">CLOSE</button>
								<button type="button" class="btn btn-primary btn-sm btn-min" data-dismiss="modal">SEARCH</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        	<div class="clearfix"></div>
	   		<hr>
			
			<div class="col-md-12">
				<table class="table table-bordered table-striped table hover center vcenter">
					<thead>
						<tr>
							<th style="width:30px"></th>
							<th style="width:120px">APP. CODE</th>
							<th>BUSINESS NAME</th>
							<th>OWNER</th>
							<th>AMOUNT</th>
							<th style="width:120px">STATUS</th>
							<th style="width:120px">DATE</th>
							<th style="width:150px"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="data in datas" class="{{ data.TaxOrderPayment.paid? 'success':'' }}">
							<th></th>
							<td class="uppercase">{{ data.BusinessPermitApplication.code }}</td>
							<td class="uppercase">{{ data.BusinessPermitApplication.Business.name }}</td>
							<td class="uppercase">{{ data.BusinessPermitApplication.BusinessOwner.full_name }}</td>
							<td class="text-right">{{ (data.TaxOrderPaymentFee | total:'amount') | number:2 }}</td>
							<td class="italic">
								<span class="label label-success" ng-if="data.TaxOrderPayment.paid">PAID</span>
								<span class="label label-danger" ng-if="data.TaxOrderPayment.paid == false">NOT PAID</span>
							</td>
							<td class="uppercase">
								<span ng-if="data.TaxOrderPayment.date != null">{{ data.TaxOrderPayment.date | dateFormat:'MMM-dd-yyyy' }}</span>
							</td>
							<td>
								<div class="btn-group btn-group-xs">
									<a title="PROCESS {{ data.BusinessPermitApplication.code }}" href="javascript:void(0)" class="btn btn-success no-border-radius{{ data.TaxOrderPayment.paid ? ' disabled':'' }}" ng-click="payment(data)"><i class="fa fa-check"></i></a>
									<a title="PRINT {{ data.BusinessPermitApplication.code }}" class="btn btn-primary" ng-click="print()"><i class="fa fa-print"></i></a>
									<a title="VIEW {{ data.BusinessPermitApplication.code }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
									<a title="EDIT {{ data.BusinessPermitApplication.code }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
									<a title="DELETE {{ data.BusinessPermitApplication.code }}"  class="btn btn-danger no-border-radius"><i class="fa fa-trash"></i></a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>	
				
			    <ul class="pagination pull-right">
			        <li class="prevPage"><a href="javascript:void(0)" ng-click="page(paginator.page-1)">&laquo;</a></li>
			        <li class="pagination-page" ng-repeat="i in [startPage,endPage] | range" data-page="{{ i }}"><a href="javascript:void(0)" ng-click="page(i)">{{ i }}</a></li>
			        <li class="nextPage"><a href="javascript:void(0)" ng-click="page(paginator.page+1)">&raquo;</a></li>
			    </ul>
				<div class="clearfix"></div>
			</div>
        </div>
	</div>
</div>


<div class="modal fade" id="payment-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">PAYMENT</h4>
			</div>
			<div class="modal-body">
				<form id="form">
				<div class="col-md-6">
					<div class="form-group">
						<label>OR #</label>
						<input type="text" class="form-control" placeholder="" ng-model="paymentOr" data-validation-engine="validate[required]">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>AMOUNT</label>
						<input type="text" class="form-control" placeholder="" ng-model="paymentAmount" disabled>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label>CASH TENDER</label>
						<input type="text" class="form-control decimal" placeholder="" ng-model="paymentCashTender" ng-keyup="computeChange()" data-validation-engine="validate[required]">
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label>CHANGE</label>
						<input type="text" class="form-control" placeholder="0.00" disabled ng-model="paymentChange">
					</div>
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-sm btn-min" data-dismiss="modal">CLOSE</button>
				<button type="button" class="btn btn-primary btn-sm btn-min" ng-click="save()">SAVE</button>
			</div>
		</div>
	</div>
</div>
<script>
	$('#form').validationEngine('attach');
	$('.decimal').inputmask({alias: 'decimal', groupSeparator: ',', autoGroup:true, rightAlign: false});
</script>