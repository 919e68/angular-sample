<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header primary">
		  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
		  <h4 class="modal-title">ADD BUSINESS ASSET TYPE</h4>
		</div>
		<?php echo $this->Form->create('BusinessAssetType', array('url'=>array('controller'=>'business_asset_types', 'action'=>'create'), 'role'=>'form', 'class'=>'ajax-form', 'inputDefaults'=>array('label'=>false, 'div'=>false, 'class'=>'form-control' ))) ?>
		<div class="modal-body">
			<table class="table vcenter">
				<tr class="no-border-top">
					<td style="width:100px">NAME</td>
					<td><?php echo $this->Form->input('name', array('required'=>true)) ?></td>
				</tr>
				<tr>
					<td class="vtop">DESCRIPTION</td>
					<td><?php echo $this->Form->input('description', array('type'=>'textarea', 'required'=>false)) ?></td>
				</tr>
			</table>
		</div>
		<div class="modal-footer">
		  <input type="reset" class="hide">
		  <button type="button" class="btn btn-danger btn-sm btn-min" data-dismiss="modal">CANCEL</a>
		  <button type="submit" class="btn btn-primary btn-sm btn-min">SAVE</button>
		</div>
		</form>
	</div><!-- /.modal-content -->
</div>

<script>
$(document).ready(function(){
	
	modalMaxHeight();

    $(".ajax-form").bind("submit", function (event){
        $.ajax({
            type:"POST", url: $(this).attr('action'),
            data: $('.ajax-form').serialize(), dataType: "json",
            success:function (data) {
            	if(data.response == 'success') {
					$.gritter.add({ title: 'Successful!', text: data.message, position: 'bottom-left' });
					$('#form-modal').modal('hide');
					angular.element($('[ng-controller="BusinessAssetType"]')).scope().load();
            	} else {
            		$.gritter.add({ title: 'Error!', text: data.message, position: 'bottom-left' });
            	}
				console.log(data);
           },
        });
        return false;
    });
    
});
</script>