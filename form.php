<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="shortcut icon" href="favicon.png" type="image/png">
<link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></link>
<title>Form</title>


</head>
<body>
<div class="container-fluid cont" >
<form class="row g-3 needs-validation" action="form.php" method="POST">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" name="fname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" name="Lname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" name="Uname" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" name="City" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" name="State" required>
      <option selected disabled value="">Choose...</option>
      <option>Sindh</option>
      <option>Punjab</option>
      <option>Khyber Pukhtoonkhwa</option>
      <option>Baluchistan</option>
      <option>Gilgit Baltistan</option>
      <option>Kashmir</option>





    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="btn" type="submit">Submit form</button>
  </div>
</form>

  <?php
  if(isset($_POST["btn"])){
    $Fname=$_POST["fname"];
    $Lname=$_POST["Lname"];
    $Uname=$_POST["Uname"];
    $City=$_POST["City"];
    $State=$_POST["State"];
 
  }
?>

<table class="table table-dark">
  <thead>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>User Name</th> 
    <th>City</th>
    <th>State</th>

   </tr>
</thead>
<tbody>
  <tr>
    <td><?php if(empty($Fname)){echo"";}else{echo $Fname;};?></td>
    <td><?php if(empty($Lname)){echo"";}else{echo $Lname;};?></td>
    <td><?php if(empty($Uname)){echo"";}else{echo $Uname;};?></td>
    <td><?php if(empty($City)){echo"";}else{echo $City;};?></td>
    <td><?php if(empty($State)){echo"";}else{echo $State;};?></td>
  </tr>
</tbody>
</table>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>