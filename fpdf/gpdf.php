

<html>
<head>
    <title>generate pdf</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="col-md-12 justify-content-center">
            <div class="col-md-5"><h2 style="text-align: center">GENERATE PDF</h2>
            <form method="post" action="generate.php">
                <label>firstname</label>
            <input type="text" name="fname" class="form-control" required>
                <label>surname</label>
                <input type="text" name="sname" class="form-control" required>
                <label>username</label>
                <input type="text" name="uname" class="form-control" required>
                <label>email</label>
                <input type="text" name="email" class="form-control" required>
                <input type="submit" name="create" class="btn-btn-success mx-2 my-2" value="generate pdf"></form>
        </div>
        </div>
    </div>
</body>
</html>