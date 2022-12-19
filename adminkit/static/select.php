
<?php

$connect = mysqli_connect("localhost", "root", "", "blog_samples");
$id=$_GET['id'];
$query ="SELECT * FROM employee where id=$id";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

    <title>Admin</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet"
          href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
    <script type="text/javascript"
            src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
            src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>
<body style="margin-top: 30px">
<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.php">
                <span class="align-middle">Admin</span>
            </a>
            <ul class="sidebar-nav">

                <li class="sidebar-item">
                    <a class="sidebar-link" href="index.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="letterhead.php">
                        <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Letter-head</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="letterhead.php">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Visiting-card</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="pdf.php">
                        <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Send-Pdf</span>
                    </a>
                </li>

            </ul>


        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>
        </nav>

        <div class="container">
    <div class="table-responsive">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Image</td>

            </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_array($result))
            {
                // echoing the fetched data from the database per column names
                echo '  
                               <tr>
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["address"].'</td>
                                     <td><img src="uploads/'.$row['image'].'" height="90"></td>
                               </tr>  
                               ';
            }
            ?>
        </table>

    </div>
</div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="js/app.js"></script>
</form>
</body>
</html>


