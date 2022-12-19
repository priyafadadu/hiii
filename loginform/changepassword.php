<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>change password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script type="text/javascript">
        function valid()
        {
        if(document.chngpwd.email.value=="")
        {
            alert("Email Filed is Empty !!");
            document.chngpwd.email.focus();
            return false;
        }
            else if(document.chngpwd.opwd.value=="")
            {
                alert("Old Password Filed is Empty !!");
                document.chngpwd.opwd.focus();
                return false;
            }
            else if(document.chngpwd.npwd.value=="")
            {
                alert("New Password Filed is Empty !!");
                document.chngpwd.npwd.focus();
                return false;
            }
            else if(document.chngpwd.cpwd.value=="")
            {
                alert("Confirm Password Filed is Empty !!");
                document.chngpwd.cpwd.focus();
                return false;
            }
            else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
            {
                alert("Password and Confirm Password Field do not match  !!");
                document.chngpwd.cpwd.focus();
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
<section class="vh-100" style="background-color: #3e8f3e">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5" style="color: #3e8f3e">Change Password</h3>
                        <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?>
                        <form action="changepasswordprocess.php" method="post" name="chngpwd" onsubmit="return valid();">

                            <div class="form-outline mb-4">
                                <input type="password" name="opwd" id="opwd" class="form-control form-control-lg" placeholder="Old Password" maxlength="6">

                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="npwd" id="npwd" class="form-control form-control-lg" placeholder="New Password" maxlength="6">

                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="cpwd" id="cpwd" class="form-control form-control-lg" placeholder="Confirm Password" maxlength="6">

                            </div>

                            <button class="btn btn-success btn-lg btn-block" type="submit" name="submit">Change Password</button>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</form>
</body>
</html>
