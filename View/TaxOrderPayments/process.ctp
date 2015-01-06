<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">TREASURY</h4>
		</div>
		<?php echo $this->Form->create('TaxOrderPayment', array('url'=>array('controller'=>'tax_order_payments', 'action'=>'paid'), 'role'=>'form', 'class'=>'ajax-form', 'inputDefaults'=>array('label'=>false, 'div'=>false, 'class'=>'form-control' ))) ?>
		<?php echo $this->Form->input('id') ?>
		<?php echo $this->Form->input('business_permit_application_id', array('type'=>'hidden')) ?>
		<?php echo $this->Form->input('paid', array('type'=>'hidden', 'value'=>true)) ?>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>OR #</label>
						<?php echo $this->Form->input('code', array()) ?>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="form-group">
						<label>AMOUNT</label>
						<?php echo $this->Form->input('amount', array('disabled'=>true, 'value'=>number_format($this->Global->TotalArr($payment['TaxOrderPaymentFee'], 'amount'), 2) , 'class'=>'form-control total-amount')) ?>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="form-group">
						<label>CASH TENDER</label>
						<?php echo $this->Form->input('paid_amount', array('type'=>'text', 'required'=>true, 'class'=>'form-control cash-tender')) ?>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="form-group">
						<label>CHANGE</label>
						<?php echo $this->Form->input('change', array('disabled'=>true, 'class'=>'total-change form-control ')) ?>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary btn-sm btn-min">SAVE</button>
		</div>
		<?php echo $this->Form->end() ?>
	</div>
</div>

<script>
$(document).ready(function(){
	modalMaxHeight();
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd', autoclose: true
	});
	
	$('.cash-tender').keyup(function(){
		$cashTender = parseFloat($('.cash-tender').val());
		$totalAmount = parseFloat($('.total-amount').val());
		$total = $cashTender - $totalAmount;
		
		if(!isNaN($total)) $('.total-change').val( $total.toFixed(2) );
		else $('.total-change').val('0.00');
	
		
	});
	
	$('.cash-tender').inputmask({
        alias: 'decimal',
        rightAlign: false,
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
