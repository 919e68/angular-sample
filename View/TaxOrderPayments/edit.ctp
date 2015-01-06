<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">CREATE TAX ORDER PAYMENT</h4>
		</div>

		<div class="modal-body">
			<ul class="nav nav-tabs" role="tablist">
			    <li class="active"><a href="#details" role="tab" data-toggle="tab">APPLICATION</a></li>
			    <li><a href="#business" role="tab" data-toggle="tab">BUSINESS INFORMATION</a></li>
			    <li><a href="#requirements" role="tab" data-toggle="tab">REQUIREMENTS</a></li>
			    <li><a href="#fees" role="tab" data-toggle="tab">FEES</a></li>
			</ul>
			
			<div class="tab-content">
			    <div class="tab-pane active" id="details">
			    	<table class="table table-bordered table-hover">
			    		<tr>
			    			<td style="width:190px">APPLICATION</td>
			    			<td><?php echo $taxOrderPayment['BusinessPermitApplication']['permit_type'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT TYPE</td>
							<?php $type = array(0=>'Ambulant Permit', 1=>'Temporary Permit', 2=>'Mayor\'s Permit')?>
							<td><?php echo $type[$taxOrderPayment['BusinessPermitApplication']['type']] ?></td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT #</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['permit_number'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>NAME</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessOwner']['full_name'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>ADDRESS</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessOwner']['address'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>CONTACT #</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessOwner']['contact_number'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>EMAIL</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessOwner']['email'] ?></td>
			    		</tr>
			    	</table>
			    </div>
			    <div class="tab-pane" id="business">
			    	<table class="table table-bordered table-hover">
			    		<tr>
			    			<td style="width:190px">BUSINESS TYPE</td>
			    			<td><?php echo $taxOrderPayment['BusinessPermitApplication']['Business']['BusinessType']['name'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>BUSINESS NAME</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['Business']['name'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>CONTACT #</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['Business']['contact_number'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>LINE OF BUSINESS</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['Business']['line_of_business'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>ADDRESS</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['Business']['address'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>EMPLOYEES</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['number_of_employees'] ?></td>
			    		</tr>
			    		
			    		<?php if($taxOrderPayment['BusinessPermitApplication']['last_year_declared_gross_sales'] == ''): ?>
			    		<tr>
			    			<td>CAPITAL INVESTMENT</td>
							<td><?php echo number_format($taxOrderPayment['BusinessPermitApplication']['capital_investment'], 2) ?></td>
			    		</tr>	
			    		<?php else: ?>
			    		<tr>
			    			<td>LAST YEAR DECLARED GROSS</td>
							<td><?php echo number_format($taxOrderPayment['BusinessPermitApplication']['last_year_declared_gross_sales'], 2) ?></td>
			    		</tr>		
			    		<?php endif ?>
			    		
			    		<tr>
			    			<td>BUSINESS TAX CLASS</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessTaxClass']['code'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT FEE CLASS</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessPermitFeeClass']['code'] ?></td>
			    		</tr>
			    		<tr>
			    			<td>ASSET TYPE</td>
							<td><?php echo $taxOrderPayment['BusinessPermitApplication']['BusinessAssetType']['name'] ?></td>
			    		</tr>
			    	</table>
			    </div>
			    
			    <div class="tab-pane" id="requirements">
			    	<table class="table table-bordered">
			    		<thead>
				    		<tr>
				    			<th>REQUIMENT</th>
				    			<th>STATUS</th>
				    		</tr>
			    		</thead>
			    		<tbody>
			    			<?php foreach($taxOrderPayment['BusinessPermitApplication']['BusinessPermitApplicationRequirement'] as $requirement): ?>
			    			<tr>
			    				<td class="uppercase"><?php echo $requirement['BusinessPermitRequirement']['name'] ?></td>
			    				<td><?php echo $requirement['status']? 'APPROVED' : '' ?></td>
			    			</tr>
			    			<?php endforeach ?>
			    		</tbody>
			    	</table>
			    	<?php ?>
			    </div>
			    
			    <div class="tab-pane" id="fees">
			    	<?php echo $this->Form->create('TaxOrderPaymentFee', array('url'=>array('controller'=>'tax_order_payments', 'action'=>'update'), 'role'=>'form', 'class'=>'ajax-form', 'inputDefaults'=>array('label'=>false, 'div'=>false, 'class'=>'form-control' ))) ?>
			    	<?php var_dump($taxOrderPayment)?>
			    	<hr>
			    	<div class="text-right">
			    		<button type="button" class="btn btn-danger btn-sm btn-min" data-dismiss="modal">CANCEL</button>
						<button class="btn btn-primary btn-sm btn-min">SAVE</button>
			    	</div>
			    	<?php echo $this->Form->end() ?>
			    </div>
			</div>

		</div>
		<div class="modal-footer">
			
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	modalMaxHeight();
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd', autoclose: true
	});
	
	$('.remove-fee').click(function(){
		$this = $(this);
		conf = confirm("Are you sure you want to delete this item?");
		if(conf == true){
			$this.closest('tr').remove();
			$('.tax-order-fee').keyup();
		}
	});
	
	$('.tax-order-fee').keyup(function(){
		$fee = $('.tax-order-fee');
		$total = 0;
		$.each($fee, function(i, v){
			if(!isNaN($(v).val())) $total += parseFloat($(v).val());
		});
		$('#total-fee').html('PHP '+ $total.toFixed(2));
	});
	
	$('.tax-order-fee').inputmask({
        alias: 'decimal',
        showMaskOnHover: false,
        showMaskOnFocus: false
    });
	
    $(".ajax-form").bind("submit", function (event){
        $.ajax({
            type:"POST", url: $(this).attr('action'),
            data: $('.ajax-form').serialize(), dataType: "json",
            success:function (data) {
            	if(data.response == 'success') {
					$('#form-modal').modal('hide');
					alert(data.message);
            	} else {
            		alert(data.message);
            	}
				console.log(data);
           },
        });
        return false;
    });

});
</script>
