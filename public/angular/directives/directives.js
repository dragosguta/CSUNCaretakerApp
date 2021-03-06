angular.module('directives', [])
.directive('navbar', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/navbar.html'
	}
})
.directive('siteTabs', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/site_tabs.html'
	}
})
.directive('medications', function() {
	return {
		restrict: 'E',
		replace: 'true',
		controller: 'MedicationsCtrl',
		templateUrl: 'angular/directives/medications.html'
	}
})
.directive('contacts', function() {
	return {
		restrict: 'E',
		replace: 'true',
		controller: 'ContactsCtrl',
		templateUrl: 'angular/directives/contacts.html'
	}
})
.directive('weather', function(){
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/weather.html',
		controller: 'WeatherCtrl'
	}
})
.directive('appointments', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/appointments.html'
	}
})
.directive('appointmentsToday', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/appointments_today.html'
	}
})
.directive('notifications', function(){
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/notifications.html'
	}
})
.directive('calendar', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/calendar.html',
		controller: 'CalendarCtrl'
	}
})
.directive('reminder', function() {
	return {
		restrict: 'E',
		replace: true,
		controller: function($scope, $rootScope, Notifications) {

			$scope.toggleNotification = function(notification)
			{
				Notifications.put({
					'id': notification.id
				}, function (data) {
					//
				});
			}

			$scope.remaining = function()
			{
				var count = 0;
				
				angular.forEach($scope.notifications, function (notification) {
			  		count += notification.done == 1 ? 0 : 1;
				});
				
				return count;
			};

			$scope.archive = function()
			{
				var oldNotification = $scope.notifications;
				
				$scope.notifications = [];
				
				angular.forEach(oldNotification, function (notification) {
			  		if (notification.done == 0) $scope.notifications.push(notification);
			  		else {
			  			Notifications.delete({
			  				'id': notification.id
			  			}, function (data) {
			  				//
			  			});
			  		}
				});
			};
		},
		templateUrl: 'angular/directives/reminders.html'
	}
})