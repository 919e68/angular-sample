// business permit applications
app.controller('BusinessPermitApplicationController', function($scope, BusinessPermitApplication, Approve, MayorApprove){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	BusinessPermitApplication.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		BusinessPermitApplication.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			BusinessPermitApplication.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		BusinessPermitApplication.query(function(data) {
			$scope.datas = data.result;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		bootbox.confirm("Are you sure you want to remove application "+ data.BusinessPermitApplication.code +"?", function(result) {
			if(result){
				BusinessPermitApplication.remove({ id:data.BusinessPermitApplication.id }, function(e){
					if(e.response){
						$.gritter.add({ title: 'Successful!', text: e.message });
						$scope.datas.splice( $scope.datas.indexOf(data), 1 );
					}
				});
			}
		});
	}
	$scope.approve = function(data){
		bootbox.confirm("Are you sure you want to approve application "+ data.BusinessPermitApplication.code +"?", function(result) {
			if(result){
				Approve.get({ id:data.BusinessPermitApplication.id }, function(e){
					if(e.response){
						$scope.load();
						$.gritter.add({ title: 'Successful!', text: e.message });
					}
				});
			}
		});
	}
	
	$scope.mayors_approve = function(data){
		bootbox.confirm("Are you sure you want to approve application "+ data.BusinessPermitApplication.code +"?", function(result) {
			if(result){
				MayorApprove.get({ id:data.BusinessPermitApplication.id }, function(e){
					if(e.response){
						$scope.load();
						$.gritter.add({ title: 'Successful!', text: e.message });
					}
				});
			}
		});
	}
});
app.controller('BusinessPermitApplicationViewController', function($scope, $stateParams, BusinessPermitApplication){
	BusinessPermitApplication.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
		if($scope.data.BusinessPermitApplication.permit_type == '1'){
			$scope.permitType = "Mayor's Permit";
		}else if($scope.data.BusinessPermitApplication.permit_type == '2'){
			$scope.permitType = "Temporary Permit";
		}else if($scope.data.BusinessPermitApplication.permit_type == '3'){
			$scope.permitType = "Ambulant Permit";
		}
	});
});
app.controller('BusinessPermitApplicationAddController', function($scope, BusinessPermitApplication, GetOptions, Autofill){
	GetOptions.get({id:'business-types'}, function(e){$scope.businessTypes = e.result;});
	GetOptions.get({id:'business-tax-class'}, function(e){$scope.businessTaxClass = e.result;});
	GetOptions.get({id:'business-permit-fee-class'}, function(e){$scope.businessPermitFeeClass = e.result;});
	GetOptions.get({id:'business-asset-types'}, function(e){$scope.businessAssetTypes = e.result;});
	GetOptions.get({id:'business-permit-requirements-default'}, function(e){
		$scope.requirements = e.result;
		angular.forEach($scope.requirements, function(value, key) {
		  $scope.requirements[key].status = true;
		  $scope.requirements[key].certificate_number = null;
		  $scope.requirements[key].date_issued = null;
		  $scope.requirements[key].location_issued = null;
		});
	});
	
	GetOptions.get({id:'business-permit-requirements-not-default'}, function(e){
		$scope.otherRequirements = e.result;
		angular.forEach($scope.otherRequirements, function(value, key) {
		  $scope.otherRequirements[key].status = false;
		  $scope.otherRequirements[key].certificate_number = null;
		  $scope.otherRequirements[key].date_issued = null;
		  $scope.otherRequirements[key].location_issued = null;
		});
	});
	$scope.addRemoveAdditional = function(data){
		if(data.status){
			$scope.requirements.push(data);
		}else{
			$scope.requirements.splice( $scope.requirements.indexOf(data), 1 );
		}
	}
	$scope.next = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			$('a[data-target="#requirements"]').tab('show');
		}
	};
	$scope.back = function(){
		$('a[data-target="#details"]').tab('show');
	};
	$scope.removeRequirement = function(requirement){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			$scope.requirements.splice( $scope.requirements.indexOf(requirement), 1 );
		}
	};
	$scope.autofill = function(permitNumber){
		Autofill.get({id: permitNumber }, function(e){
			if(e.response){
				console.log(e.result.BusinessOwner);
				$scope.data.BusinessOwner = e.result.BusinessOwner;
				$scope.data.Business = e.result.Business;
			}else{
				$scope.data.BusinessOwner = {};
				$scope.data.Business = {};
			}
		});
	}
	$scope.save = function(){
		$scope.data.BusinessPermitApplicationRequirement = $scope.requirements;
		formdata = new FormData(document.getElementById('form'));
		formdata.append('applicationData', JSON.stringify($scope.data));
		$('.save-button').attr('disabled', 'disabled');
		$.ajax({
            xhr: function(){
                var xhr = new window.XMLHttpRequest();
                //Upload progress
                xhr.upload.addEventListener("progress", function(evt){
                  if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total * 100;
                    //Do something with upload progress
                    console.log(Math.round(percentComplete) + "% uploaded");
                  }
                }, false);
                //Download progress
                xhr.addEventListener("progress", function(evt){
                  if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total * 100;
                    //Do something with download progress
                    console.log(percentComplete);
                  }
                }, false);
                return xhr;
            },
			url: api + "business-permit-applications",
			type: "POST",
			data: formdata,
			processData: false,
			contentType: false,
			success: function (e) {
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#business-permit-applications';	
				}
			}
		});
	};
});
app.controller('BusinessPermitApplicationEditController', function($scope, $stateParams, BusinessPermitApplication, GetOptions, Autofill, RequirementEditChoices){
	GetOptions.get({id:'business-types'}, function(e){$scope.businessTypes = e.result;});
	GetOptions.get({id:'business-tax-class'}, function(e){$scope.businessTaxClass = e.result;});
	GetOptions.get({id:'business-permit-fee-class'}, function(e){$scope.businessPermitFeeClass = e.result;});
	GetOptions.get({id:'business-asset-types'}, function(e){$scope.businessAssetTypes = e.result;});
	
	BusinessPermitApplication.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	
	$scope.next = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			$('a[data-target="#requirements"]').tab('show');
		}
	};
	$scope.back = function(){
		$('a[data-target="#details"]').tab('show');
	};
	$scope.removeRequirement = function(requirement){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			$scope.requirements.splice( $scope.requirements.indexOf(requirement), 1 );
		}
	};
	$scope.autofill = function(permitNumber){
		Autofill.get({id: permitNumber }, function(e){
			if(e.response){
				console.log(e.result.BusinessOwner);
				$scope.data.BusinessOwner = e.result.BusinessOwner;
				$scope.data.Business = e.result.Business;
			}else{
				$scope.data.BusinessOwner = {};
				$scope.data.Business = {};
			}
		});
	}
});





// assessments
app.controller('AssessmentController', function($scope, Assessment, Assess){
	
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	Assessment.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		Assessment.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			Assessment.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		Assessment.query(function(data) {
			$scope.datas = data.result;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		bootbox.confirm("Are you sure you want to delete assessment on "+ data.BusinessPermitApplication.code +"?", function(result) {
			if(result){
				Assessment.remove({ id:data.BusinessPermitApplication.id }, function(e){
					if(e.response){
						$.gritter.add({ title: 'Successful!', text: e.message });
						$scope.load();
					}
				});
			}
		});
	}
	$scope.assess = function(data){
		msg = confirm('Are you sure you want to assess this application?');
		if(msg){
			Assess.get({ id:data.BusinessPermitApplication.id }, function(e){
				if(e.response){
					$scope.load();
					$.gritter.add({ title: 'Successful!', text: e.message });
				}
			});
		} 
	}
	$scope.print = function(data){
		log(data.id);
		printTable(base + 'print/taxorderpayment/' + data.id);
	}
});
app.controller('AssessmentViewController', function($scope, $stateParams, Assessment){
	Assessment.get({id:$stateParams.id}, function(e){ $scope.data = e.result; });
});
app.controller('AssessmentAddController', function($scope, Assessment){

});
app.controller('AssessmentEditController', function($scope, $stateParams, Assessment){

});





// tax order payments
app.controller('TaxOrderPaymentController', function($scope, TaxOrderPayment){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	TaxOrderPayment.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		TaxOrderPayment.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			TaxOrderPayment.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		TaxOrderPayment.query(function(data) {
			$scope.datas = data.result;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			TaxOrderPayment.remove({ id:data.BusinessPermitApplication.id }, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					$scope.datas.splice( $scope.datas.indexOf(data), 1 );
				}
			});
		} 
	}
	
	$scope.payment = function(data){
		console.log(data);
		$scope.paymentId = data.TaxOrderPayment.id;
		$scope.paymentApplicationId = data.TaxOrderPayment.business_permit_application_id;
		$scope.paymentAmount = number_format(TotalArr(data.TaxOrderPaymentFee, 'amount'), 2);
		$('#payment-modal').modal('show');
	}
	
	$scope.computeChange = function(){
		if($scope.paymentCashTender != ''){
			$scope.paymentChange = number_format((parseFloat(number_format($scope.paymentCashTender, 2, '.', '')) - parseFloat(number_format($scope.paymentAmount, 2, '.', ''))).toFixed(2), 2);
		}else{
			$scope.paymentChange = '0.00';
		}
	}
	
	$scope.save = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			data = {
				TaxOrderPayment: {
					id:$scope.paymentId,
					cash_tender: number_format($scope.paymentCashTender, 2, '.', ''),
					paid_amount: number_format($scope.paymentAmount, 2, '.', ''),
					or_number: $scope.paymentOr,
					change: parseFloat(number_format($scope.paymentCashTender, 2, '.', '')) -  parseFloat(number_format($scope.paymentAmount, 2, '.', '')),
					paid: true,
					business_permit_application_id: $scope.paymentApplicationId
				}
			};
			
			TaxOrderPayment.update({id:$scope.paymentId}, data, function(e){
				$('#payment-modal').modal('hide');
				$.gritter.add({ title: 'Successful!', text: e.message });
				$scope.load();
				$scope.paymentOr = '';
				$scope.paymentCashTender = '';
				$scope.paymentChange = '0.00';
			});
		}
	};
});
app.controller('TaxOrderPaymentViewController', function($scope, Assessment){
	
});
app.controller('TaxOrderPaymentAddController', function($scope, $stateParams, TaxOrderPayment, BusinessPermitApplication, BusinessPermitFee, GetOptions){
	
	GetOptions.get({id:'business-permit-fees'}, function(e){
		$scope.fees = e.result;
	});
	
	BusinessPermitApplication.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	
	$scope.decimalZero = function(fee){
		if(fee.amount == ''){
			fee.amount = '0.00';
		}
	};
	
	$scope.save = function(){
		newdata = {
			TaxOrderPayment : {
				business_permit_application_id: $stateParams.id
			},
			
			TaxOrderPaymentFee: $scope.fees
		}
		TaxOrderPayment.save(newdata, function(e){
			$.gritter.add({ title: 'Successful!', text: e.message });
			window.location = '#assessments';
		});
	}
});
app.controller('TaxOrderPaymentEditController', function($scope, $stateParams, Assessment){

});





// business permits
app.controller('BusinessPermitController', function($scope, BusinessPermit, Release){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	BusinessPermit.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		BusinessPermit.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			BusinessPermit.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		BusinessPermit.query(function(data) {
			$scope.datas = data.result;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			BusinessPermit.remove({ id:data.BusinessPermit.id }, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					$scope.datas.splice( $scope.datas.indexOf(data), 1 );
				}
			});
			
		}
	}
	$scope.release = function(data){
		bootbox.confirm("Are you sure you want to release permit "+ data.BusinessPermit.permit_number +"?", function(result) {
			if(result){
				Release.get({id:data.BusinessPermit.id}, function(e){
					$scope.load();
					$.gritter.add({ title: 'Successful!', text: e.message });
				});
			}
		});
	}
	$scope.print = function(data){
		printTable(base + 'print/permit/' + data.BusinessPermit.id);
	}
});
app.controller('BusinessPermitViewController', function($scope, $stateParams, BusinessPermit){
	BusinessPermit.get({id:$stateParams.id}, function(data){
		console.log(data);
		$scope.data = data;
	});
	
	$scope.print = function(){
		printTable(base + 'print/permit/' + $stateParams.id);
	}
});





// business types
app.controller('BusinessTypeController', function($scope, BusinessType){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	BusinessType.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		BusinessType.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			BusinessType.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		BusinessType.query(function(data) {
			$scope.datas = data.result;
			$scope.totalShares = data.totalShares;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			BusinessType.remove({ id:data.BusinessType.id }, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					$scope.datas.splice( $scope.datas.indexOf(data), 1 );
				}
			});
		} 
	}
});
app.controller('ShareCapitalViewController', function($scope, ShareCapital){
	
});
app.controller('ShareCapitalAddController', function($scope, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	$scope.save = function(){
		console.log($scope.data);
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.save($scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});
app.controller('ShareCapitalEditController', function($scope, $stateParams, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	
	ShareCapital.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	$scope.update = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.update({id:$stateParams.id}, $scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});





// business permit requirements
app.controller('BusinessPermitRequirementController', function($scope, BusinessPermitRequirement){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	BusinessPermitRequirement.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		BusinessPermitRequirement.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			BusinessPermitRequirement.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		BusinessPermitRequirement.query(function(data) {
			$scope.datas = data.result;
			$scope.totalShares = data.totalShares;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			BusinessPermitRequirement.remove({ id:data.BusinessPermitRequirement.id }, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					$scope.datas.splice( $scope.datas.indexOf(data), 1 );
				}
			});
		} 
	}
});
app.controller('ShareCapitalViewController', function($scope, ShareCapital){
	
});
app.controller('ShareCapitalAddController', function($scope, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	$scope.save = function(){
		console.log($scope.data);
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.save($scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});
app.controller('ShareCapitalEditController', function($scope, $stateParams, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	
	ShareCapital.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	$scope.update = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.update({id:$stateParams.id}, $scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});





// business permit fees
app.controller('BusinessPermitFeeController', function($scope, BusinessPermitFee){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	BusinessPermitFee.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		BusinessPermitFee.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			BusinessPermitFee.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		BusinessPermitFee.query(function(data) {
			$scope.datas = data.result;
			$scope.totalShares = data.totalShares;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			BusinessPermitFee.remove({ id:data.BusinessPermitFee.id }, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					$scope.datas.splice( $scope.datas.indexOf(data), 1 );
				}
			});
		} 
	}
});
app.controller('ShareCapitalViewController', function($scope, ShareCapital){
	
});
app.controller('ShareCapitalAddController', function($scope, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	$scope.save = function(){
		console.log($scope.data);
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.save($scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});
app.controller('ShareCapitalEditController', function($scope, $stateParams, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	
	ShareCapital.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	$scope.update = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.update({id:$stateParams.id}, $scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});





// business asset type
app.controller('BusinessAssetTypeController', function($scope, BusinessAssetType){
	$scope.datas = {};
	$scope.paginator = {};
	$scope.showPage = 5;
	$scope.startPage = 1;
	$scope.endPage = null;
	BusinessAssetType.query(function(data) {
		$scope.datas = data.result;
		$scope.paginator = data.paginator;
		$scope.endPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
		$scope.showPage = $scope.paginator.pageCount < $scope.showPage? $scope.paginator.pageCount:$scope.showPage;
	});
	$scope.search = function(strSearch){
		BusinessAssetType.search({search:strSearch}, function(data) {
			$scope.datas = data.result;
		});
	};
	$scope.page = function(page){
		if(page >= 1 && page <= $scope.paginator.pageCount){
			BusinessAssetType.search({page:page}, function(data) {
				$scope.datas = data.result;
			});
			$scope.paginator.page = page;
			if(page <= Math.round($scope.showPage/2)) $scope.startPage = 1;
			else if(page > $scope.paginator.pageCount-Math.round($scope.showPage/2)) $scope.startPage = $scope.paginator.pageCount-($scope.showPage-1);
			else $scope.startPage = page-Math.floor($scope.showPage/2);
			if($scope.startPage + ($scope.showPage-1) > $scope.paginator.pageCount){
				$scope.startPage = $scope.paginator.pageCount - ($scope.showPage-1);
				$scope.endPage = $scope.paginator.pageCount;
			} else $scope.endPage = $scope.startPage + ($scope.showPage-1);
			$('.pagination-page').removeClass('active');
			$('li[data-page='+ page +']').addClass('active');
		}
	};
	$scope.load = function(){
		BusinessAssetType.query(function(data) {
			$scope.datas = data.result;
			$scope.totalShares = data.totalShares;
			$scope.paginator = data.paginator;
		});
		$('.pagination-page').parent().removeClass('active');
	};
	$scope.remove = function(data){
		msg = confirm('Are you sure you want to delete?');
		if(msg){
			BusinessAssetType.remove({ id:data.BusinessAssetType.id }, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					$scope.datas.splice( $scope.datas.indexOf(data), 1 );
				}
			});
		} 
	}
});
app.controller('ShareCapitalViewController', function($scope, ShareCapital){
	
});
app.controller('ShareCapitalAddController', function($scope, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	$scope.save = function(){
		console.log($scope.data);
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.save($scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});
app.controller('ShareCapitalEditController', function($scope, $stateParams, ShareCapital, GetOptions){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	
	ShareCapital.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	$scope.update = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.update({id:$stateParams.id}, $scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});





// reports
app.controller('ReportController', function($scope, Report){
	$scope.datas = {};
	Report.query(function(data) {
		console.log(data);
		$scope.datas = data.result;
	});
});





// users
app.controller('UserController', function($scope, User){
	$scope.datas = {};
	User.query(function(data) {
		console.log(data);
		$scope.datas = data.result;
	});
});
app.controller('UserViewController', function($scope, $stateParams, User, UserPermission){
	User.get({id:$stateParams.id}, function(e){ $scope.data = e.result });
	$scope.check = function(data){
		if(data.hasAccess){
			newdata = {
				UserPermission: {
					user_id: $stateParams.id,
					permission_id: data.permission_id
				}
			}
			UserPermission.save(newdata, function(e){
				data.id = e.id;
				$.gritter.add({ title: 'Successful!', text: e.message });
			});
		}else{
			UserPermission.remove({id:data.id}, function(e){
				data.id = null;
				$.gritter.add({ title: 'Successful!', text: e.message });
			});
		}
	}
});
app.controller('UserAddController', function($scope, User){
	$scope.save = function(){
		console.log($scope.data);
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.save($scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});
app.controller('UserEditController', function($scope, $stateParams, User){
	GetOptions.get({id:'members'}, function(e){
		$scope.members = e.result;
	});
	
	ShareCapital.get({id:$stateParams.id}, function(e){
		$scope.data = e.result;
	});
	$scope.update = function(){
		valid = $("#form").validationEngine('validate');
		if(valid){
			ShareCapital.update({id:$stateParams.id}, $scope.data, function(e){
				if(e.response){
					$.gritter.add({ title: 'Successful!', text: e.message });
					window.location = '#share-capitals';	
				}
			});
		}
	}
});