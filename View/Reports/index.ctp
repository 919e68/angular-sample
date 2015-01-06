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

	   		</div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>