<!DOCTYPE html>
<html ng-app>
<head>
    <title> :: AngularJS Practice :: </title>
</head>
<body ng-init="employees =[{username: 'Mahedi Azad', location: 'Mohammadpur'}, {username: 'Sakil Imran', location: 'Shukrabad'}, {username: 'Sohel Rana', location: 'Green Road'}]">
    <div class="container">
        Name: <input type="text" ng-model="name" /> <br/>
        {{ name }}
        <ul>
            <li ng-repeat="employee in employees">
                {{ employee.username }} - {{ employee.location }}
            </li>
        </ul>
    </div>
<script src="js/angular.min.js"></script>
</body>
</html>