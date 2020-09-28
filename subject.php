<!DOCTYPE html>
<html>

<head>
    <title>Subject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="Styles.css" rel="stylesheet" id="bootstrap-css1">
    <link href="timetable.css" rel="stylesheet" id="bootstrap-css1">
    
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="header">
        <nav class="main-navigation">
            <div class="navbar-header animated fadeInUp">
                <a class="navbar-brand" href="#">Virtual Class</a>
            </div>
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-list-item">
                    <a href="resource.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-list-item">
                    <a href="timetable.php" class="nav-link">TimeTable</a>
                </li>
                <li class="nav-list-item">
                    <a href="subject.php" class="nav-link">Subject</a>
                </li>
            </ul>
        </nav>
    </div>
    <form action="insert.php" method="post">
    <div class="content">
        <div class="container">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb30">
                <h4 style="padding-top:20px;">Subject</h2>
             </div>
             <div class="row pb-2">
                <div class="col-md-3">
                    <p>Name</p>
                </div>
                <div class="col-md-9">
                    <input type="text" id="txtName" name="txtName"  />
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-3">
                    <p>USN</p>
                </div>
                <div class="col-md-9">
                    <input type="text" id="txtUSN" name="txtUSN"  />
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-3">
                    <p>Add Public Comment</p>
                </div>
                <div class="col-md-9">
                    <input type="textarea" id="txtComment" name="txtComment" style="height:200px; width:100%"/>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb30">
                <button class="btn-success" type="submit" value="Submit" style="height: 60px;border-radius: 32px;font-weight: bold;width: 155px;margin-top: 13px;">Submit</h2>
             </div>
        </div>
    </div>
</form>
</body>

</html>