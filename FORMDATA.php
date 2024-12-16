<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="shortcut icon" href="favicon.png" type="image/png">
<title>Title</title>
</head>
<body>
<div class="contanier-fluid">
<table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>UserName</th>
            <th>City Name</th>
            <th>state Name</th>
        </tr>
    </thead>
    <tbody>

    <tr>
        <td><?php echo $_POST["First-name"];?></td>
        <td><?php echo $_POST["Last-Name"];?></td>
        <td><?php echo $_POST["UserName"];?></td>
        <td><?php echo $_POST["City"];?></td>
        <td><?php echo $_POST["state-Name"];?></td>
    </tr>
    </tbody>
</table>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>