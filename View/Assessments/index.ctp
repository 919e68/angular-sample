<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> ASSESSMENT MANAGEMENT</div>
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
											<option value="ASSESSMENT">ASSESSMENT</option>
											<option value="ASSESSED">ASSESSED</option>
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
				<table class="table table-bordered table-striped table-hover center vcenter">
					<thead>
						<tr>
							<th style="width:30px"></th>
							<th>CONTROL #</th>
							<th>BUSINESS NAME</th>
							<th>BUSINESS OWNER</th>
							<th>DATE</th>
							<th>STATUS</th>
							<th style="width:150px"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="data in datas" class="{{ data.BusinessPermitApplication.assessed? 'success':'' }}">
							<td></td>
							<td>{{ data.BusinessPermitApplication.code }}</td>
							<td class="uppercase">{{ data.Business.name }}</td>
							<td class="uppercase">{{ data.BusinessOwner.full_name }}</td>
							<td class="uppercase">{{ data.BusinessPermitApplication.modified | dateFormat:'MMM-dd-yyyy' }}</td>
							<td>
								<span class="label label-success" ng-if="data.BusinessPermitApplication.assessed">ASSESSED</span>
								<span class="label label-primary" ng-if="data.BusinessPermitApplication.assessed == false">ASSESSMENT</span>
							</td>
							<td>
								<div class="btn-group btn-group-xs">
									<a title="ASSESS {{ data.BusinessPermitApplication.code }}" ui-sref="tax-order-payments-add({id:data.BusinessPermitApplication.id})" class="btn btn-success no-border-radius {{ data.BusinessPermitApplication.assessed? 'disabled':'' }}"><i class="fa fa-check"></i></a>
									<a title="PRINT {{ data.BusinessPermitApplication.code }}" class="btn btn-primary {{ data.BusinessPermitApplication.assessed == false? 'disabled':'' }}" ng-click="print({id:data.BusinessPermitApplication.id})"><i class="fa fa-print"></i></a>
									<a title="VIEW {{ data.BusinessPermitApplication.code }}" ui-sref="assessments-view({id:data.BusinessPermitApplication.id})" class="btn btn-warning {{ data.BusinessPermitApplication.assessed == false? 'disabled':'' }}"><i class="fa fa-eye"></i></a>
									<a title="EDIT {{ data.BusinessPermitApplication.code }}" class="btn btn-primary {{ data.BusinessPermitApplication.assessed == false? 'disabled':'' }}"><i class="fa fa-pencil"></i></a>
									<a title="DELETE {{ data.BusinessPermitApplication.code }}" ng-click="remove(data)" class="btn btn-danger no-border-radius {{ data.BusinessPermitApplication.assessed == false? 'disabled':'' }}"><i class="fa fa-trash"></i></a>
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
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>