<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

</head>
<body>
<section class="vh-100" style="background-color: lightgreen">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Reset password</h3>
                        <form action="resetprocess.php" method="post">
                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter email" id="inputemail" required>

                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter new password" id="inputpassword" required>

                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="reset" id="submit">Reset password</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
</body>
</html>