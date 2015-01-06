<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> USER MANAGEMENT</div>
        <div class="panel-body">
        	<div class="col-md-3">
        		<a ui-sref="business-types-add" class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i> NEW USER</a>
        	</div>
			<div class="col-md-4 pull-right">
				<input type="text" class="form-control input-sm" placeholder="SEARCH HERE..." ng-model="strSearch" ng-keyup="search(strSearch)">
			</div>
			
			<div class="clearfix"></div>
			<hr>
			
			<div class="col-md-12">
				<table class="table table-bordered table-striped table-hover center vcenter">
					<thead>
						<tr>
							<th style="width:30px"></th>
							<th style="width:150px">USERNAME</th>
							<th>NAME</th>
							<th style="width:150px">ROLE</th>
							<th style="width:120px">ACTIVATED</th>
							<th style="width:90px"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="data in datas">
							<td></td>
							<td class="text-left">{{ data.User.username }}</td>
							<td class="text-left uppercase"></td>
							<td class="uppercase">{{ data.User.role }}</td>
							<td class="italic">
								<span class="label label-success" ng-if="data.User.activated">ACTIVATED</span>
								<span class="label label-danger" ng-if="data.User.activated == false">NOT ACTIVATED</span>
							</td>
							<td>
								<div class="btn-group btn-group-xs">
									<a ui-sref="users-view({id:data.User.id})" class="btn btn-success no-border-radius"><i class="fa fa-eye"></i></a>
									<a class="btn btn-primary"><i class="fa fa-pencil"></i></a>
									<a class="btn btn-danger no-border-radius"><i class="fa fa-trash"></i></a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>