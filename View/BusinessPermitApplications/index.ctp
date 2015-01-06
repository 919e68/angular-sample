<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> BUSINESS PERMIT APPLICATION MANAGEMENT</div>
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
											<option value="APPROVAL">APPROVAL</option>
											<option value="APPROVED">APPROVED</option>
											<option value="ASSESSED">ASSESSED</option>
											<option value="PAYMENT">PAYMENT</option>
											<option value="RELEASING">RELEASING</option>
											<option value="RELEASED">REALEASED</option>
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
							<th colspan="2">TYPE</th>
							<th style="width:90px">STATUS</th>
							<th style="width:120px"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="data in datas" class="{{ data.BusinessPermitApplication.mayors_approved? 'success':'' }}">
							<td></td>
							<td>{{ data.BusinessPermitApplication.code }}</td>
							<td class="uppercase">{{ data.Business.name }}</td>
							<td class="uppercase">{{ data.BusinessOwner.full_name }}</td>
							<td class="uppercase italic">
								<span class="label label-primary" ng-if="data.BusinessPermitApplication.type == 'New'">NEW</span>
								<span class="label label-success" ng-if="data.BusinessPermitApplication.type == 'Renewal'">RENEWAL</span>
							</td>
							<td class="uppercase">
								<span ng-if="data.BusinessPermitApplication.permit_type == 2">MAYOR'S PERMIT</span>
								<span ng-if="data.BusinessPermitApplication.permit_type == 1">TEMPORARY PERMIT</span>
								<span ng-if="data.BusinessPermitApplication.permit_type == 0">AMBULANT PERMIT</span>
							</td>
							<td class="italic">
								<span class="label label-primary" ng-if="data.BusinessPermitApplication.approved == false">APPROVAL</span>
								<span class="label label-success" ng-if="data.BusinessPermitApplication.approved">APPROVED</span>
							</td>
							<td>
								<div class="btn-group btn-group-xs">
									<?php if($this->Session->read('Auth.User.role') == 'admin-mayor'): ?>
									<a title="APPROVE {{ data.BusinessPermitApplication.code }}" class="btn btn-success no-border-radius {{ data.BusinessPermitApplication.mayors_approved && data.BusinessPermitApplication.approved? 'disabled':'' }}" ng-click="mayors_approve(data)"><i class="fa fa-check"></i></a>
									<?php else: ?>
									<a title="APPROVE {{ data.BusinessPermitApplication.code }}" class="btn btn-success no-border-radius {{ data.BusinessPermitApplication.mayors_approved && data.BusinessPermitApplication.approved? 'disabled':'' }}" ng-click="approve(data)"><i class="fa fa-check"></i></a>
									<?php endif ?>
									<a title="VIEW {{ data.BusinessPermitApplication.code }}" class="btn btn-warning" ui-sref="business-permit-applications-view({id:data.BusinessPermitApplication.id})"><i class="fa fa-eye"></i></a>
									<a title="EDIT {{ data.BusinessPermitApplication.code }}" class="btn btn-primary" ui-sref="business-permit-applications-edit({id:data.BusinessPermitApplication.id})"><i class="fa fa-pencil"></i></a>
									<a title="DELETE {{ data.BusinessPermitApplication.code }}"  class="btn btn-danger no-border-radius" ng-click="remove(data)"><i class="fa fa-trash"></i></a>
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
	$('[data-toggle="popover"]').popover();
	$('.datepicker').datepicker({format: 'yyyy-mm-dd', autoclose: true});
});
</script>