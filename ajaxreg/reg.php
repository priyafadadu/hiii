<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

    <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="js/simpleCal.js"></script>
    <script language="javascript" type="text/javascript">

        /*  function validation()
          {
              var formName=document.frm;
              var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

              var urlExp = /^(((ht|f){1}(tp:[/][/]){1})|((www.){1}))[-a-zA-Z0-9@:%_\+.~#?&//=]+$/;



              if(formName.email.value == "")
              {
                  document.getElementById("email_label").innerHTML='Please Enter Email';
                  formName.email.focus();
                  return false;
              }
              else
              {
                  document.getElementById("email_label").innerHTML='';
              }

              if(!(formName.email.value).match(emailExp))
              {
                  document.getElementById("email_label").innerHTML='Please Enter Valid Email';
                  formName.email.focus()
                  return false;
              }
              else
              {
                  document.getElementById("email_label").innerHTML='';
              }

              if(formName.password.value == "")
              {
                  document.getElementById("password_label").innerHTML='Please Enter Password';
                  formName.password.focus();
                  return false;
              }
              else
              {
                  document.getElementById("password_label").innerHTML='';
              }


              if(formName.cpassword.value == "")
              {
                  document.getElementById("cpassword_label").innerHTML='PleaseEnterConfirmPassword';
                  formName.cpassword.focus();
                  return false;
              }
              else
              {
                  document.getElementById("cpassword_label").innerHTML='';
              }

              if(formName.password.value != formName.cpassword.value)
              {
                  document.getElementById("cpassword_label").innerHTML='Passwords Missmatch';
                  formName.cpassword.focus()
                  return false;
              }
              else
              {
                  document.getElementById("cpassword_label").innerHTML='';
              }

              if(formName.code.value == "")
              {
                  document.getElementById("code_label").innerHTML='Please Enter Code';
                  formName.code.focus();
                  return false;
              }
              else
              {
                  document.getElementById("code_label").innerHTML='';
              }


              if($('input:radio[name=gender]:checked').length==0){
                  $('#gender_label').html('Please Choose option');
                  return false;
              }
              if($('input:radio[name=gender]:checked').val()==1){
                  if($('#gender').val()==''){
                      $("#gender_label").html('Enter Your gender');
                      return false;
                  }else{
                      $("#gender_label").html('');
                  }
              }

          }

          $(function(){
              $('input:radio[name=gender]').click(function(){

                  $('#gender_label').html('');
              });
              $('#gender').click(function(){
                  $('#gender').val('');
              });
          });*/
    </script>
</head>
<script>

    /* $(document).ready(function() {

         $('#Send').click(function() {

             $.post("post.php?"+$("#MYFORM").serialize(),
                 {

                 },

                 function(response)
                 {
                 });

             return false;
         });

 // refresh captcha
         $('img#refresh').click(function() {

             change_captcha();
         });

         function change_captcha()
         {
             document.getElementById('captcha').src="get_captcha.php?rnd=" + Math.random();
         }

         function clear_form()
         {
             $("#name").val('');
             $("#email").val('');
             $("#message").val('');
         }
     });

 */
</script>


<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">

                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2" style="text-align: center">Registration form</h3>

                        <form class="was validated" method="post" id="frm" name="frm" action="select.php">


                            <div class="form-outline mb-4">

                                <input type="text" name="email" placeholder="Email" class="form-control" required>

                            </div>
                            <div class="form-outline mb-4">
                                <input type="password"  name="password" placeholder="Enter Password" class="form-control" required maxlength="6">

                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required maxlength="6">

                            </div>
                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                <h6 class="mb-0 me-4">Hobby: </h6>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="checkbox" name="hobby">
                                    <label class="form-check-label">reading</label>
                                </div>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="checkbox" name="hobby">

                                    <label class="form-check-label">Writing</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="checkbox" name="hobby">

                                    <label class="form-check-label">Music</label>
                                </div>

                            </div>
                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                <h6 class="mb-0 me-4">Gender: </h6>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="radio" name="gender">

                                    <label class="form-check-label" for="femaleGender">Female</label>
                                </div>

                                <div class="form-check form-check-inline mb-0 me-4">
                                    <input class="form-check-input" type="radio" name="gender">
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

                                </select>

                            </div>
                            <br>

                            <div class="form-outline mb-4">

                                <input type="text" id="capcha" placeholder="Enter capcha " class="form-control" required>

                            </div>
                            <div class="mb-3">
                                <h6 class="mb-0 me-2">Select image: </h6>

                                <input class="form-control" type="file" id="filename" name="filename" required="true">
                                <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>

                            </div>



                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning btn-lg" name="save">Submit</button>


                                <p class="text-center"><a href="index.php" class="btn btn-primary btn-lg">View All Registration</a></p>
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

<?php
include('db.php');
$query = mysqli_query($con, "SELECT * FROM files ORDER BY ID DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data in PhP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
<div class="container">
    <h3 align="center">Technotaught - <a href="http://technotaught.com/php-ajax-update-in-mysql-data-through-modal/">Update Data Through Bootstrap Modal by using Ajax PHP</a></h3>
    <br />
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="table-responsive">
            <div id="employee_table">
                <table class="table table-bordered">
                    <tr>
                        <th width="70%">Title</th>
                        <th width="30%">edit</th>
                        <th width="30%">View</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($query)) {

                        ?>
                        <tr>
                            <td><?php echo $row['title']; ?></td>
                            <td><a type="button" class="btn btn-info btn-xs edit_data" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_data" data-id="<?= $row['id']; ?>" data-title="<?= $row['title']; ?>" data-description="<?= $row['description']; ?>" data-uploaded_on="<?= $row['uploaded_on']; ?>">Edit</a></td>
                            <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ############################################################################################### -->
<!-- View Data Modal-->
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">View Details</h4>
            </div>
            <div class="modal-body" id="employee_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ############################################################################################### -->
<!-- Update data-->
<div class="modal fade" id="update_data" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit"></i> Update Details</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="title1" name="title1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Description</label>
                    <textarea class="form-control" id="description1" name="description1" rows="3"></textarea>
                </div>
                <input type="hidden" name="id_modal" id="id_modal" class="form-control-sm">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="update_detail" class="btn btn-primary" value="Update">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- ############################################################################################### -->
</body>
</html>

<script>
    $(document).ready(function() {
        $(document).on('click', '.view_data', function() {
            var employee_id = $(this).attr("id");
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });
        $(function()
        {
            $('#update_data').on('show.bs.modal', function(event)
            {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var title = button.data('title');
                var descripton = button.data('description');
                var modal = $(this);
                modal.find('#title1').val(title);
                modal.find('#description1').val(descripton);
                modal.find('#id_modal').val(id);
            });
        });
        $(document).on('click', '#update_detail', function()
        {
            var id = $('#id_modal').val();
            var title1 = $('#title1').val();
            var description1 = $('#description1').val();
            $.ajax({
                url: "update.php",
                method: "POST",
                catch: false,
                data: {
                    update: 1,
                    id: id,
                    title: title1,
                    description:description1
                },
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 1) {
                        $('#update_data').modal().hide();
                        swal("Data Updated!", {
                            icon: "success",
                        }).then((result) => {
                            location.reload();
                        });
                    }
                }
            });
        });
    });
</script>



