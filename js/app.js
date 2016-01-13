'use strict';

var app = angular.module("paranormalApp", []);

app.controller("staffCtrl", function($scope){
	$scope.staff = [
		{
			name: "Peter Venkman, Ph.D.",
			picture:"http://placekitten.com/200/300",
			profile:"Dr. Venkman, who has doctorates in both psychology and parapsychology,"
		},		{
			name: "Raymond Stantz, Ph.D.",
			picture:"",
			profile:"Dr. Stantz has been described as 'the heart of the Ghostbusters.' In his spare time he restores vintage cars and runs 'Ray's Occult Books.' "
		},		{
			name: "Egon Spengler, Ph.D.",
			picture:"",
			profile:"Dr. Spengler is a former professor of paranormal studies at Columbia University. He has designed and built much of the firm's equipment. In his spare time he collects spores, molds, and fungus."
		},		{
			name: "Winston Zeddemore",
			picture:"",
			profile:"Mr. Zeddemore is a graduate of Air Force Command ECM school. He joined the firm shortly after its inception. In his spare time he is working on advancing his karate rank, currently a 1st Dan black belt."
		},		{
			name: "Janine Melnitz",
			picture:"",
			profile:"Ms. Melnitz is the firm's receptionist and first point of contact for clients. In her spare time she's an avid reader. "
		},	{
			name: "Walter Peck",
			picture:"",
			profile:"Mr. Peck, formerly an inspector with the Environmental Protection Agency, currently heads the Paranormal Contracts Oversight Commission. This agency provides oversight to the firm with regard to public safety concerns as well as possible environmental impact."
		}

	]
});

app.controller("reviewCtrl", function($scope){
	$scope.reviewers = [
		{name: "Louis Tully",
		testimonial:""
		},
		{name: "Sedgewick Hotel",
		testimonial:""
		}
	]
});

app.controller("formCtrl", ['$scope', function($scope){
	
}])

app.controller("contactCtrl", function($scope){
	$scope.openContact = false;

	function helpNow(){
		$scope.openContact = true;
	}

	function shouldShowContact(){
		return $scope.openContact;
	}

	$scope.helpNow = helpNow;	
	$scope.shouldShowContact = shouldShowContact;
})

