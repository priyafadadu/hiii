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
<section class="vh-100" style="background-color: #33b5e5">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Sign in</h3>
                      <form action="loginprocess.php" method="post">
                        <div class="form-outline mb-4">
                             <input type="email" name="email" class="form-control form-control-lg" placeholder="email" required>

                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" maxlength="6" required>

                        </div>


                        <div class="form-check d-flex justify-content-start mb-4">

                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>

                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="sub">Login</button>
<!--                          <a href="changepassword.php">Change password</a>-->


                          <?php
                          if(isset($_REQUEST["err"]))
                              $msg="Invalid email or Password";
                          ?>
                          <p style="color:red;">
                              <?php if(isset($msg))
                              {

                                  echo $msg;
                              }
                              ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
</body>
</html>


