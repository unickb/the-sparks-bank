<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>The Spark Foundation- About Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color:white;">
    <?php include 'spin.php'; ?>
    <style>
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="statics\logo.png" alt=""
                    style="height: 80px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">History</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap active" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <center>
        <div class="container" style="margin-top: 9%; padding:10px 80px 10px 80px; ">
            <div
                style="width:80%; background-color:#212529; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;"><i>About Us</i></h1>
            </div>
            <br><br>
            
            <br><br>
            <p style="color:red;"><i>Website created and designed by</i></p>
            <h1 style="color:dark grey; text-shadow:2px 2px 2px gray;"><b><i>Navneet Borana</i></b></h1>
            <p style="color:gray;"><b>Summer Internship at Sparks Foundation <br> Indian Institute of Technology, Roorkee</b></p>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>