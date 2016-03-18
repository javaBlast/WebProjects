<!DOCTYPE html>
<html>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">    

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
 <script src="app/db.js"></script>
<?php include 'writedb.php'; ?>
<body>

<div class="w3-contaiter" ng-app="dbApp"  ng-controller="dbCtrl"> 
    <h3>Framework's List</h3>
    <table class="w3-table w3-bordered w3-striped">
    <tr ng-repeat="x in names">
    <td>{{ x.Name }}</td>      
    <td>{{ x.Type }}</td>
    <td>{{ x.Link }}</td>
  </tr>
</table>
<br>

<form class="w3-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h3 ng-show="true">Create New Tool:</h3>
    <label>Name:</label>
    <input class="w3-input w3-border" type="text" ng-model="name" name="name" placeholder="Name">
  <br>
    <label>Type:</label>
    <input class="w3-input w3-border" type="text" ng-model="libtype" name="libtype" placeholder="Type">
  <br>
    <label>Link:</label>
    <input class="w3-input w3-border" type="text" ng-model="libsrc" name="libsrc" placeholder="Link">
  <br>
<button class="w3-btn w3-green w3-ripple" >&#10004; Save Changes</button>
</form>
</div>

</body>
</html>
