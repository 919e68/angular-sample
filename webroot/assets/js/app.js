var app = angular.module('elogos', ['ngResource', 'chieffancypants.loadingBar', 'ui.router', 'selectize']);

app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {
    $urlRouterProvider.otherwise("/");

	// business permit applications
	$stateProvider
	.state('business-permit-applications', {
		url: '/business-permit-applications',
		templateUrl: 'business-permit-applications',
		controller: 'BusinessPermitApplicationController'
	})
	.state('business-permit-applications-view', {
		url: '/business-permit-applications/view/:id',
		templateUrl: 'business-permit-applications/view',
		controller: 'BusinessPermitApplicationViewController'
	})
	.state('business-permit-applications-add', {
		url: '/business-permit-applications/add',
		templateUrl: 'business-permit-applications/add',
		controller: 'BusinessPermitApplicationAddController'
	})
	.state('business-permit-applications-edit', {
		url: '/business-permit-applications/edit/:id',
		templateUrl: 'business-permit-applications/edit',
		controller: 'BusinessPermitApplicationEditController'
	});
	
	
	
	// assessments
	$stateProvider
	.state('assessments', {
		url: '/assessments',
		templateUrl: 'assessments',
		controller: 'AssessmentController'
	})
	.state('assessments-view', {
		url: '/assessments/view/:id',
		templateUrl: 'assessments/view',
		controller: 'AssessmentViewController'
	})
	.state('assessments-add', {
		url: '/assessments/add',
		templateUrl: 'assessments/add',
		controller: 'AssessmentAddController'
	})
	.state('assessments-edit', {
		url: '/assessments/edit/:id',
		templateUrl: 'assessments/edit',
		controller: 'AssessmentEditController'
	});
	
	
	
	// tax order payments
	$stateProvider
	.state('tax-order-payments', {
		url: '/tax-order-payments',
		templateUrl: 'tax-order-payments',
		controller: 'TaxOrderPaymentController'
	})
	.state('tax-order-payments-view', {
		url: '/tax-order-payments/view/:id',
		templateUrl: 'tax-order-payments/view',
		controller: 'TaxOrderPaymentViewController'
	})
	.state('tax-order-payments-add', {
		url: '/tax-order-payments/add/:id',
		templateUrl: 'tax-order-payments/add',
		controller: 'TaxOrderPaymentAddController'
	})
	.state('tax-order-payments-edit', {
		url: '/tax-order-payments/edit/:id',
		templateUrl: 'tax-order-payments/edit',
		controller: 'TaxOrderPaymentEditController'
	});
	
	
	
	
	
	// business permits
	$stateProvider
	.state('business-permits', {
		url: '/business-permits',
		templateUrl: 'business-permits',
		controller: 'BusinessPermitController'
	})
	.state('business-permits-view', {
		url: '/business-permits/view/:id',
		templateUrl: 'business-permits/view',
		controller: 'BusinessPermitViewController'
	})
	.state('business-permits-add', {
		url: '/business-permits/add',
		templateUrl: 'business-permits/add',
		controller: 'BusinessPermitAddController'
	})
	.state('business-permits-edit', {
		url: '/business-permits/edit/:id',
		templateUrl: 'business-permits/edit',
		controller: 'BusinessPermitEditController'
	});
	
	
	
	
	
	// reports
	$stateProvider
	.state('reports', {
		url: '/reports',
		templateUrl: 'reports',
		controller: 'ReportController'
	});
	
	
	
	
	
	// business types
	$stateProvider
	.state('business-types', {
		url: '/business-types',
		templateUrl: 'business-types',
		controller: 'BusinessTypeController'
	})
	.state('business-types-view', {
		url: '/business-types/view/:id',
		templateUrl: 'business-types/view',
		controller: 'BusinessTypeViewController'
	})
	.state('business-types-add', {
		url: '/business-types/add',
		templateUrl: 'business-types/add',
		controller: 'BusinessTypeAddController'
	})
	.state('business-types-edit', {
		url: '/business-types/edit/:id',
		templateUrl: 'business-types/edit',
		controller: 'BusinessTypeEditController'
	});
	
	
	
	
	
	// business permit requirements
	$stateProvider
	.state('business-permit-requirements', {
		url: '/business-permit-requirements',
		templateUrl: 'business-permit-requirements',
		controller: 'BusinessPermitRequirementController'
	})
	.state('business-permit-requirements-view', {
		url: '/business-permit-requirements/view/:id',
		templateUrl: 'business-permit-requirements/view',
		controller: 'BusinessPermitRequirementViewController'
	})
	.state('business-permit-requirements-add', {
		url: '/business-permit-requirements/add',
		templateUrl: 'business-permit-requirements/add',
		controller: 'BusinessPermitRequirementAddController'
	})
	.state('business-permit-requirements-edit', {
		url: '/business-permit-requirements/edit/:id',
		templateUrl: 'business-permit-requirements/edit',
		controller: 'BusinessPermitRequirementEditController'
	});





	// business permit fees
	$stateProvider
	.state('business-permit-fees', {
		url: '/business-permit-fees',
		templateUrl: 'business-permit-fees',
		controller: 'BusinessPermitFeeController'
	})
	.state('business-permit-fees-view', {
		url: '/business-permit-fees/view/:id',
		templateUrl: 'business-permit-fees/view',
		controller: 'BusinessPermitFeeViewController'
	})
	.state('business-permit-fees-add', {
		url: '/business-permit-fees/add',
		templateUrl: 'business-permit-fees/add',
		controller: 'BusinessPermitFeeAddController'
	})
	.state('business-permit-fees-edit', {
		url: '/business-permit-fees/edit/:id',
		templateUrl: 'business-permit-fees/edit',
		controller: 'BusinessPermitFeeEditController'
	});
	
	
	
	
	
	// business tax classes
	$stateProvider
	.state('business-tax-classes', {
		url: '/business-tax-classes',
		templateUrl: 'business-tax-classes',
		controller: 'BusinessTaxClassController'
	})
	.state('business-tax-classes-view', {
		url: '/business-tax-classes/view/:id',
		templateUrl: 'business-tax-classes/view',
		controller: 'BusinessTaxClassViewController'
	})
	.state('business-tax-classes-add', {
		url: '/business-tax-classes/add',
		templateUrl: 'business-tax-classes/add',
		controller: 'BusinessTaxClassAddController'
	})
	.state('business-tax-classes-edit', {
		url: '/business-tax-classes/edit/:id',
		templateUrl: 'business-tax-classes/edit',
		controller: 'BusinessTaxClassEditController'
	});





	// business permit fee classes
	$stateProvider
	.state('business-permit-fee-classes', {
		url: '/business-permit-fee-classes',
		templateUrl: 'business-permit-fee-classes',
		controller: 'BusinessPermitFeeClassController'
	})
	.state('business-permit-fee-classes-view', {
		url: '/business-permit-fee-classes/view/:id',
		templateUrl: 'business-permit-fee-classes/view',
		controller: 'BusinessPermitFeeClassViewController'
	})
	.state('business-permit-fee-classes-add', {
		url: '/business-permit-fee-classes/add',
		templateUrl: 'business-permit-fee-classes/add',
		controller: 'BusinessPermitFeeClassAddController'
	})
	.state('business-permit-fee-classes-edit', {
		url: '/business-permit-fee-classes/edit/:id',
		templateUrl: 'business-permit-fee-classes/edit',
		controller: 'BusinessPermitFeeClassEditController'
	});





	// business asset types
	$stateProvider
	.state('business-asset-types', {
		url: '/business-asset-types',
		templateUrl: 'business-asset-types',
		controller: 'BusinessAssetTypeController'
	})
	.state('business-asset-types-view', {
		url: '/business-asset-types/view/:id',
		templateUrl: 'business-asset-types/view',
		controller: 'BusinessAssetTypeViewController'
	})
	.state('business-asset-types-add', {
		url: '/business-asset-types/add',
		templateUrl: 'business-asset-types/add',
		controller: 'BusinessAssetTypeAddController'
	})
	.state('business-asset-types-edit', {
		url: '/business-asset-types/edit/:id',
		templateUrl: 'business-asset-types/edit',
		controller: 'BusinessAssetTypeEditController'
	});
	
	
	
	
	
	// users
	$stateProvider
	.state('users', {
		url: '/users',
		templateUrl: 'users',
		controller: 'UserController'
	})
	.state('users-view', {
		url: '/users/view/:id',
		templateUrl: 'users/view',
		controller: 'UserViewController'
	})
	.state('users-add', {
		url: '/users/add/:id',
		templateUrl: 'users/add',
		controller: 'UserAddController'
	})
	.state('users-edit', {
		url: '/users/edit/:id',
		templateUrl: 'users/edit',
		controller: 'UserEditController'
	});
});	
	
	


// directives
app.directive('icheck', function($timeout, $parse) {
    return {
        require: 'ngModel',
        link: function($scope, element, $attrs, ngModel) {
            return $timeout(function() {
                var value;
                value = $attrs['value'];

                $scope.$watch($attrs['ngModel'], function(newValue){
                    $(element).iCheck('update');
                });
                return $(element).iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue'

                }).on('ifChanged', function(event) {
                    if ($(element).attr('type') === 'checkbox' && $attrs['ngModel']) {
                        $scope.$apply(function() {
                            return ngModel.$setViewValue(event.target.checked);
                        });
                    }
                    if ($(element).attr('type') === 'radio' && $attrs['ngModel']) {
                        return $scope.$apply(function() {
                            return ngModel.$setViewValue(value);
                        });
                    }
                });
            });
        }
    };
});

// custome filters
app.filter('range', function() {
    return function(input) {
        var lowBound, highBound;
        switch (input.length) {
        case 1:
            lowBound = 0;
            highBound = parseInt(input[0]) - 1;
            break;
        case 2:
            lowBound = parseInt(input[0]);
            highBound = parseInt(input[1]);
            break;
        default:
            return input;
        }
        var result = [];
        for (var i = lowBound; i <= highBound; i++)
            result.push(i);
        return result;
    };
});



app.filter('dateFormat', function() {
	return function(input, format){
		return new Date(input).toString(format);
	};
});

app.filter('total', function () {
    return function (input, property) {
        var i = input instanceof Array ? input.length : 0;
// if property is not defined, returns length of array
// if array has zero length or if it is not an array, return zero
        if (typeof property === 'undefined' || i === 0) {
            return i;
// test if property is number so it can be counted
        } else if (isNaN(input[0][property])) {
            throw 'filter total can count only numeric values';
// finaly, do the counting and return total
        } else {
            var total = 0;
            while (i--)
                total += parseFloat(input[i][property]);
            return total;
        }
    };
})