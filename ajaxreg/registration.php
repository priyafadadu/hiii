<?php
include "db.php";

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $hobby = $_POST['hobby'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $capcha = $_POST['capcha'];

    $filename = $_POST['filename'];
    $checkbox1 = $_POST['hobby'];


    $chk = "";
    foreach ($checkbox1 as $chk1) {
        $chk .= $chk1 . ",";
    }


    $res = mysqli_query($conn, "select * from registration where email='$email'");
    $result = mysqli_fetch_array($res);


    if ($result)
    {
        echo "<script>alert('email already exit!')</script>";
    }
    else
    {
        if ($password === $cpassword)
        {
            $store =md5($password);
            try
            {

                $res = mysqli_query($conn, "INSERT INTO `registration`(`email`, `password`, `hobby`, `gender`, `country`, `state`, `city`,`capcha`,`filename`) VALUES ('" . $email . "','" . $store . "','" . $chk . "','" . $gender . "','" . $country . "','" . $state . "','" . $city . "','" . $capcha . "','" . $filename . "')") or die('error');
            } catch (Exception $e)
            {
                echo $e->getMessage();
            }

        }
        else
        {
            echo "<script> alert(' Please enter same passwords ') </script>";
        }
   }


    if($res)
    {
      //echo "record inserted successfully..";
    }
    else
    {
        echo "Error: " . $res . "<br>" . mysqli_error($conn);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="script.js"></script>
<!--  <script src="new.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body onload="generate()">
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2" style="text-align: center">Registration form</h3>
             <form action="" method="POST">
              <div class="form-outline mb-4">
                <input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
              </div>
              <div class="form-outline mb-4">
                <input type="password"  name="password" placeholder="Enter Password" class="form-control"  id="Password" maxlength="6" required>
              </div>
              <div class="form-outline mb-4">
                <input type="password" name="cpassword" placeholder="Confirm password" class="form-control"  maxlength="6" id="cpassword" required>
              </div>
              <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                <h6 class="mb-0 me-4">Hobby: </h6>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="checkbox" name="hobby[]" value="reading" id="reading">
                  <label class="form-check-label" for="reading">reading</label>
                </div>

                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="checkbox" name="hobby[]" value="writing" id="writing">

                  <label class="form-check-label" for="writing">Writing</label>
                </div>
                <div class="form-check form-check-inline mb-0">
                  <input class="form-check-input" type="checkbox" name="hobby[]" value="music" id="music">
                  <label class="form-check-label" for="music">Music</label>
                </div>
              </div>
              <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Gender: </h6>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" value="male" id="male">
                  <label class="form-check-label" for="male">Male</label>
                </div>
              </div>
                <div class="d-lg-flex justify-content-start align-items-center lg-8 py-2">
                    <h6 class="mb-0 me-2">Country: </h6>
                    <select class="form-select" aria-label="Default select example" id="country" name="country">
                        <option selected>Select country</option>
                        <?php
                        require_once "db.php";
                        $result = mysqli_query($conn,"SELECT * FROM countries");
                        while($row = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="d-lg-flex justify-content-start align-items-center lg-8 py-2">
                    <h6 class="mb-0 me-2">State: </h6>
                    <select class="form-select" aria-label="Default select example" id="state" name="state">
                        <option>Select state</option>
                    </select>
                </div>
                <div class="d-lg-flex justify-content-start align-items-center lg-8 py-2">
                    <h6 class="mb-0 me-2">City: </h6>
                    <select class="form-select" aria-label="Default select example" id="city" name="city">
                    </select>
                </div>
             <br>
                <div class="mb-3">
                <h6 class="mb-0 me-2">Select image: </h6>
                <input class="form-control" type="file" id="filename" name="filename" required>
                    <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
                </div>
            <div class="inline" onclick="generate()">
                <i class="fas fa-sync"></i>
             </div>
            <div id="image" class="inline" selectable="False">
                </div>

              <p id="key"></p>
              <div class="form-inline mb-4">
                  <input type="text" id="submit" name="capcha" placeholder="Enter captcha code" class="form-control" onkeyup="printmsg()" required>
              </div>
             <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" name="submit"  class="btn btn-warning btn-lg" value="submit" id="data">Submit</button>

             </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
    $(document).ready(function() {
        $("#country").on('change', function() {
            var countryid = $(this).val();

            $.ajax({
                method: "POST",
                url: "response.php",
                data: {
                    id: countryid
                },
                datatype: "html",
                success: function(data) {
                    $("#state").html(data);
                    $("#city").html('<option value="">Select city</option');

                }
            });
        });
        $("#state").on('change', function() {
            var stateid = $(this).val();
            $.ajax({
                method: "POST",
                url: "response.php",
                data: {
                    sid: stateid
                },
                datatype: "html",
                success: function(data) {
                    $("#city").html(data);

                }

            });
        });
    });
</script>
</body>
</html>