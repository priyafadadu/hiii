<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="blog_samples";

$conn = mysqli_connect($servername, $username, $password,$db);


if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_GET['edit_id'];
$sql = "select * from reg where id='".$id."'";
$result = mysqli_query($conn,$sql);

$data=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Using AJAX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">

                    <div class="card-body p-4 p-md-5">
                        <h2 style="text-align: center">Edit Data</h2>

                        <form class="was validated">

                            <div class="form-outline mb-4">
                                <input type="hidden" id="postid" value="<?php echo $_GET['edit_id'];?>">
                                <input type="text" id="email" placeholder="Email" class="form-control" required value="<?php echo $data['email'];?>">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="password" placeholder="Enter Password" class="form-control" required value="<?php echo $data['password'];?>">

                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="cpassword" placeholder="Confirm password" class="form-control" required value="<?php echo $data['cpassword'];?>">

                            </div>
                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                <h6 class="mb-0 me-4">Hobby: </h6>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="hobby"
                                           value="<?php echo $data['hobby'];?>">
                                    <label class="form-check-label">reading</label>
                                </div>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="hobby"
                                           value="<?php echo $data['hobby'];?>">
                                    <label class="form-check-label">Writing</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="hobby"
                                           value="<?php echo $data['hobby'];?>">
                                    <label class="form-check-label">Music</label>
                                </div>

                            </div>
                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                <h6 class="mb-0 me-4">Gender: </h6>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="gender"
                                           value="<?php echo $data['gender'];?>">
                                    <label class="form-check-label" for="femaleGender">Female</label>
                                </div>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="gender"
                                           value="<?php echo $data['gender'];?>">
                                    <label class="form-check-label" for="maleGender">Male</label>
                                </div>
                            </div>
                            <div class="d-lg-flex justify-content-start align-items-center lg-8 py-2">
                                <h6 class="mb-0 me-2">Country: </h6>
                                <select class="form-select" aria-label="Default select example" id="country">
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
                                <select class="form-select" aria-label="Default select example" id="state">
                                    <option>Select state</option>

                                </select>

                            </div>
                            <div class="d-lg-flex justify-content-start align-items-center lg-8 py-2">
                                <h6 class="mb-0 me-2">City: </h6>
                                <select class="form-select" aria-label="Default select example" id="city">
                                    <option>Select city</option>

                                </select>

                            </div><br>
                            <div class="form-outline mb-4">
                                <input type="text" id="capcha" placeholder="Enter capcha" class="form-control" required value="<?php echo $data['capcha'];?>">

                            </div>              <div class="mb-3">
                                <h6 class="mb-0 me-2">Select image: </h6>

                                <input class="form-control" type="file" id="filename" value="<?php echo $data['filename'];?>">
                            </div>



                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning btn-lg" id="save">Submit</button>
                                <p class="text-center"><a href="index.php" class="btn btn-primary">View All Blogs</a></p>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    $('#save').click(function () {


        $email = $('#email').val();$password =$('#password').val();
        $cpassword =$('#cpassword').val();$hobby =$('#hobby').val();
        $gender =$('#gender').val();$country =$('#country').val();$state =$('#state').val();$city =$('#city').val();$capcha =$('#capcha').val();$filename =$('#filename').val();
        $.ajax({url:"update.php",
            method:"POST",
            data:{email:$email,password:$password,cpassword:$cpassword,hobby:$hobby,gender:$gender,country:$country,state:$state,city:$city,capcha:$capcha,filename:$filename},
            success:function(dataxyz){
                window.location.href="index.php";
            }});


    });
</script>
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