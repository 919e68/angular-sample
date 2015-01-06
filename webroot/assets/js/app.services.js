app.factory("GetOptions", function($resource) {
	return $resource( api + "api/selects/:id", { id: '@id' });
});
app.factory("GetCode", function($resource) {
	return $resource( api + "api/code/:id", { id: '@id' });
});
app.factory("Approve", function($resource) {
	return $resource( api + "api/approve/:id", { id: '@id' });
});
app.factory("MayorApprove", function($resource) {
	return $resource( api + "api/mayors_approve/:id", { id: '@id' });
});
app.factory("Assess", function($resource) {
	return $resource( api + "api/assess/:id", { id: '@id' });
});
app.factory("Release", function($resource) {
	return $resource( api + "api/release_business_permit/:id", { id: '@id' });
});

app.factory("Autofill", function($resource) {
	return $resource( api + "api/autofill/:id", { id: '@id' });
});

app.factory("RequirementEditChoices", function($resource) {
	return $resource( api + "api/businesspermitapplicationrequirementeditchoices/:id", { id: '@id' });
});





// business permit application
app.factory("BusinessPermitApplication", function($resource) {
	return $resource( api + "business-permit-applications/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
		save: {
        	method: 'POST',
        	transformRequest: function(data) {
            	var fd = new FormData();
            	angular.forEach(data, function(value, key) {
                	fd.append(key, value);
            	});
            	return fd;
        	},
            headers: {'Content-Type':undefined, enctype:'multipart/form-data'}
		},
	});
});





// assessments
app.factory("Assessment", function($resource) {
	return $resource( api + "assessments/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// taxorder payments
app.factory("TaxOrderPayment", function($resource) {
	return $resource( api + "tax-order-payments/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business permits
app.factory("BusinessPermit", function($resource) {
	return $resource( api + "business-permits/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business permit fee
app.factory("BusinessPermitFee", function($resource) {
	return $resource( api + "business-permit-fees/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business types
app.factory("BusinessType", function($resource) {
	return $resource( api + "business-types/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business permit requirements
app.factory("BusinessPermitRequirement", function($resource) {
	return $resource( api + "business-permit-requirements/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business permit fees
app.factory("BusinessPermitFee", function($resource) {
	return $resource( api + "business-permit-fees/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business tax classes
app.factory("BusinessTaxClass", function($resource) {
	return $resource( api + "business-tax-classes/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business permit fee classes
app.factory("BusinessPermitFeeClass", function($resource) {
	return $resource( api + "business-permit-fee-classes/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// business aseet types
app.factory("BusinessAssetType", function($resource) {
	return $resource( api + "business-asset-types/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// reports
app.factory("Report", function($resource) {
	return $resource( api + "reports/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// users
app.factory("User", function($resource) {
	return $resource( api + "users/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});





// user permissions
app.factory("UserPermission", function($resource) {
	return $resource( api + "user-permissions/:id", { id: '@id', search: '@search' }, {
		query: { method: 'GET', isArray: false },
		update: { method: 'PUT' },
		search: { method: 'GET' },
	});
});


