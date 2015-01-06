<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> USER INFORMATION</div>
        <div class="panel-body">
			<div class="col-md-12">
				<table class="table table-striped table-hover">
					<tr>
						<td style="width:120px">USERNAME</td>
						<td class="italic">{{ data.User.username }}</td>
					</tr>
					<tr>
						<td>NAME</td>
						<td class="uppercase italic">{{ data.User.full_name }}</td>
					</tr>
					<tr>
						<td>ROLE</td>
						<td class="uppercase italic">{{ data.User.role }}</td>
					</tr>
					<tr>
						<td>ACTIVATED</td>
						<td class="uppercase italic">
							<span class="label label-success" ng-if="data.User.activated">ACTIVATED</span>
							<span class="label label-danger" ng-if="data.User.activated == false">NOT ACTIVATED</span>
						</td>
					</tr>
				</table>
			</div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> USER PERMISSIONS</div>
        <div class="panel-body">
			<div class="col-md-12">
				<table class="table table-striped table-bordered table-hover table-hover center vcenter">
					<thead>
						<tr>
							<th style="width:30px"></th>
							<th style="width:200px">ACCESS</th>
							<th>CODE</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="access in data.Permission" ng-init="access.hasAccess = (access.id != null)? true:false" class="{{ access.hasAccess?'success':'' }}">
							<td>
								<input type="checkbox" class="disable" icheck ng-model="access.hasAccess" ng-change="check(access)">
							</td>
							<td class="text-left italic">{{ access.code }}</td>
							<td class="text-left uppercase">{{ access.name }}</td>
						</tr>
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>