var myNinjaApp = angular.module('myNinjaApp', []);


myNinjaApp.controller('NinjaController', function($scope){

	$scope.message = "hey y'all";
	$scope.ninjas = [
		{
			name: "Yoshi",
			belt: "green",
			rate: 50
		},
		{
			name: "Crystal",
			belt: "Yellow",
			rate: 30
		},
		{
			name: "Ryu",
			belt: "Orange",
			rate: 10
		},
		{
			name: "Shaun",
			belt: "Black",
			rate: 1000
		}
	];

});

// myNinjaApp.config(function(){



// });

// myNinjaApp.run(function(){



// });