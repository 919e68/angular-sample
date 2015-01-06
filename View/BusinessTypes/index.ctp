<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> BUSINESS TYPES</div>
        <div class="panel-body">
        	<div class="col-md-3">
        		<a ui-sref="business-types-add" class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i> ADD BUSINESS TYPE</a>
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
							<th style="width:220px">NAME</th>
							<th>DESCRIPTION</th>
							<th style="width:90px"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="data in datas">
							<td class="uppercase text-left">{{ data.BusinessType.name }}</td>
							<td class="text-left">{{ data.BusinessType.description }}</td>
							<td>
								<div class="btn-group btn-group-xs">
									<a class="btn btn-success no-border-radius"><i class="fa fa-eye"></i></a>
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