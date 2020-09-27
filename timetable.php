<!DOCTYPE html>
<html>

<head>
    <title>Timetable</title>
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
                    <a href="#" class="nav-link">Resources</a>
                </li>
                <li class="nav-list-item">
                    <a href="#" class="nav-link">TimeTable</a>
                </li>
                <li class="nav-list-item">
                    <a href="#" class="nav-link">Subject</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <div class="container">
           <!-- time-table -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb30">
                <h4 style="padding-top:20px;">COLLEGE TIMETABLE</h2>
                </div>
                <div class="table-responsive">
                    <table class="timetable table table-striped ">
                        <thead>
                            <tr class="text-center" style="background-color: darkgrey;">
                                <th scope="col"></th>
                                <th scope="col">09-10pm</th>
                                <th scope="col">10-11pm</th>
                                <th scope="col">11-12pm</th>
                                <th scope="col">12-1pm</th>
                                <th scope="col">2-3pm</th>
                                <th scope="col">3-4pm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class='timetable-workout'>Monday</th>
                                <td>Physics</td>
                                <td>Chemistry</td>
                                <td>Python</td>
                                <td>Electronics</td>
                                <td>DBMS</td>
                                <td>Java</td>
                               
                            </tr>
                            <tr>
                                <th scope="row" class='timetable-workout'>Tuesday</th>
                                <td>Python</td>
         <td>Physics</td>
         <td>Electronics</td>
         <td>Chemistry</td>
         <td>Java</td>
         <td>DBMS</td>
                                
                            </tr>
                            <tr>
                                <th scope="row" class='timetable-workout'>Wednesday</th>
                                <td>Electronics</td>
         <td>DBMS</td>
         <td>Python</td>
         <td>Java</td>
         <td>Physics</td>
         <td>Chemistry</td>
                            </tr>
                            <tr>
                                <th scope="row" class='timetable-workout'>Thursday</th>
                                <td>Java</td>
         <td>Chemistry</td>
         <td>Physics</td>
         <td>Python</td>
         <td>Electronics</td>
         <td>DBMS</td>
                            </tr>
                            <tr>
                                <th scope="row" class='timetable-workout'>Friday</th>
                                <td>Physics</td>
         <td>Electronics</td>
         <td>Java</td>
         <td>DBMS</td>
         <td>Chemistry</td>
         <td>Python</td>
                            </tr>
                            <tr>
                                <th scope="row" class='timetable-workout'>Saturday</th>
                                <td>Chemistry</td>
         <td>Python</td>
         <td>DBMS</td>
         <td>Physics</td>
         <td>Java</td>
         <td>Electronics</td>       
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- timetable -->
            </div>
        </div>
    </div>
    <!-- /.time-table -->
        </div>
    </div>
</body>

</html>