<!DOCTYPE html>
<html>

<head>
    <title>Virtual ClassRoom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="Styles.css" rel="stylesheet" id="bootstrap-css1">
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
    <div class="content">
        <div class="container">
            <div class="main">
                <h1>Bulletin Board</h1>
                <div class="quote-container">
                    <i class="pin"></i>
                    <div class="note yellow">
                        <span class="small">
                            <?php
                            echo date("Y/m/d");
                            ?> 
                        </span>
                        <h2>Assignment Due Tomorrow</h2>
                        <p>Answer all the questions, scan and convert it to a single PDF file. The PDF should be posted in the class room. File name of the PDF should be USN_NAME OF THE STUDENT_GC_ASSIGNMENT1.pdf (for example 4JN12CS001_AMAR_GC_ASSIGNMENT1.pdf)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn-success btn-quiz" style="width: 100%;height: 60px;border-radius: 32px;font-weight: bold;" onclick="loadLink()">Take a Quiz</button>
                </div>
                <div class="col-md-4"></div>
            </div>
   
        </div>
    </div>

</body>
<script>
    function loadLink(){
        window.open('https://docs.google.com/forms/d/1_LF8ocn8V0qILznPjRkwsWfU8QAjFe_JV0lLuemBBSU/prefill')
    }
</script>
</html>