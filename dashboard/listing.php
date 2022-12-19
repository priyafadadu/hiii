<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Display Registration Form</title>
    <title>Dashboard page</title>
    <script language="JavaScript" type="text/javascript">
        function delete_user(id){
            if (confirm('Are You Sure to Delete this Record ?'))
            {
                window.location.href = 'delete.php?id=' + id;
            }
        }
    </script>

    <style>
        .modal .modal-content {
            height: 500px;
            width: 600px;
            background-color: #8fc4b7;
        }
        .modal-header {
            background-color:cadetblue;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h3 style="text-align:center">Registration-Form-Data</h3>

   <input id="myInput" type="text" placeholder="Search a value...."  style="font-size: 20px">


        <table class="table table-striped table-hover table-bordered" id="myTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Country</th>
                <th>State</th>
                <th>city</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <?php
            session_start();
            include_once "db.php";

            $sql ="SELECT * from reg order by email asc";


            /** @var $conn */
            $query =mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['hobby'];?></td>
                <td><?php echo $row['country'];?></td>
                <td><?php echo $row['state'];?></td>
                <td><?php echo $row['city'];?></td>


<!--                    $g="select countries.name from countries where countries.id=1";-->
<!--                   $g ="select country.name,state.state,city.city from inner join state on country.id=state.id inner join city on state.country_id=city.stateid";-->
<!--                   $g="select countries.name as countries.name,registration.country as registration.country from countries JOIN registration on countries.id=registration.id";-->



                    <td><button class="btn-primary btn" data-toggle="modal" data-target="#myModal"><a href="#myModal?id=<?php echo $row['id']; ?>" class="text-white">Update</a></button></td>
                    <td><button class="btn-danger btn"><a href="javascript: delete_user(<?php echo $row['id']; ?>)" class="text-white">Delete</a></button></td>
            </tr>
                <?php
            }
            ?>


            <div class="modal fade" id="myModal<?php echo $row['id'];?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="update.php">
                            <div class="modal-header form-outline mb-3">
                                <h5 class="modal-title" id="basicModalLabel">Update Registration Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>

                            <div class="form-outline mb-4 input-group mx-lg-4">
                                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                                <label for="email" class="input-group-text"><i class="bi bi-envelope-fill"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $row['email'];?>">
                            </div>


                            <div class="mx-lg-4">GENDER: </div>
                            <div class="mx-lg-5">
                                <input type="radio" name="gender" value="<?php echo $row['gender'];?>" id="male">
                                <label class="me-3" for="male" >Male</label>
                                <input type="radio" name="gender" value="<?php echo $row['gender'];?>" id="female">
                                <label class="me-3" for="female">Female</label>

                            </div>

                            <div class="mx-lg-4">HOBBIES: </div>
                            <div class="mx-lg-5">
                                <input type="checkbox" name="hobby[]" value="<?php echo $row['hobby'];?>" id="reading">
                                <label class="me-3" for="reading">Reading</label>
                                <input type="checkbox" name="hobby[]" value="<?php echo $row['hobby'];?>" id="writing">
                                <label class="me-3" for="writing">Writing</label>
                                <input type="checkbox" name="hobby[]" value="<?php echo $row['hobby'];?>" id="music">
                                <label class="me-3" for="music">Music</label>

                            </div>

                            <!--State Country city dropdown  -->
                            <div class=" form-outline mb-4 row mx-lg-2">
                                <div class="col-md-3 mb-3">
                                    <label for="country">COUNTRY</label>
                                    <select class="form-select" id="country" name="country">
                                        <option value="">Select</option>
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
                                    <script>
                                        $(document).ready(function()
                                        {
                                            $("#myInput").on("keyup", function()
                                            {
                                                 var value = $(this).val().toLowerCase();
                                                $("#myTable tr").filter(function()
                                                {
                                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

                                                });
                                            });
                                        });


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
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="state">STATE</label>
                                    <select class="form-select" id="state" name="state">
                                        <option value="<?php echo $row['state'];?>">Select</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="city">CITY</label>
                                    <select class="form-select" id="city" name="city">
                                        <option value="<?php echo $row['city'];?>">Select </option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" value="submit" name="submit" class="btn btn-warning">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </table>
    </div>
</div>
</body>
</html>