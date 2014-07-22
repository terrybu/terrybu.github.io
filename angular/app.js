(function() {
  var app = angular.module('PokemonStore', []);

  app.controller('MainController', ["$http", function($http) {
  	var store = this;
  	store.pokemons = [];
  	$http.get('pokemons.json').success(function(data){
  		store.pokemons = data;
  	});
  }]);

  app.controller('GalleryController', function() {
  	this.current = 0;
  	this.setCurrent = function(x) {
  		this.current = x || 0;
  	};
  });

  app.controller('TabController', function() {
  	this.tab = 1;

    this.setTab = function(tab){
      this.tab = tab;
    };

    this.isSet = function(tab){
      return (this.tab === tab);
    };
  });

  app.directive('reviewForm', function() {
  	return {
  		restrict: 'E',
  		templateUrl: 'review-form.html',
  		controller: function() {
				this.review = {};
			    this.addReview = function(product) {
			    	this.review.createdOn = Date.now();
			      	product.reviews.push(this.review);
			      	this.review = {};
			    };
			    this.starTranslate = function(stars) {
				    	if (stars == 5){
				    		return '*****';
				    	} 
				    	else if (stars == 4){
				    		return '****';
				    	}
				    	else if (stars ==3){
				    		return '***';
				    	}
				    	else if (stars==2) {
				    		return '**';
				    	}
				    	else if (stars==1){
				    		return '*';
			    		}
			    	};	
	  		},
  		controllerAs: 'reviewCtrl'
  	};
  });


})();
