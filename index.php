<?php
$con = mysqli_connect('localhost', 'root', '', 'assignment');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script id="tawk-script" type="text/javascript">
var Tawk_API = Tawk_API || {};
var Tawk_LoadStart=new Date();
(function(){
	var s1 = document.createElement( 'script' ),s0=document.getElementsByTagName( 'script' )[0];
	s1.async = true;
	s1.src = 'https://embed.tawk.to/633493d454f06e12d897643b/1ge2m2u6p';
	s1.charset = 'UTF-8';
	s1.setAttribute( 'crossorigin','*' );
	s0.parentNode.insertBefore( s1, s0 );
})();
</script>
    <style>
        .form-control,
        .form-select {
            border: 1px solid black;
        }

        .container-order {
            text-align: center;
            height: 200px;
            padding-top: 65px;
        }
        .navbar {
    background-color:black !important;
    font-size: 20px;
    /* color: white; */
}
.navbar a{
    color: white;
}
.navbar a:hover{
    color: #4361EE;
}

.nav-item {
    margin: 0px 10px;
}

.dropdown-item {
    margin: 10px 0px;
}

.dropdown-menu a {
    height: 100%;
    background-color: black
}

.dropdown-menu li {
    height: 35px;
}

    </style>
</head>

<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fw-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./Pictures/logo.png" alt="UniAssignemntLogo" width="auto" height="100"
                    style="border-radius: 340px; background-color: black;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: end;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Assignment Service</a></li>
                            <li><a class="dropdown-item" href="#">Essay Service</a></li>
                            <li><a class="dropdown-item" href="#">Coursework Service</a></li>
                            <li><a class="dropdown-item" href="#">Dissertations Service</a></li>
                            <li><a class="dropdown-item" href="#">Exam Solving Service</a></li>
                            <li><a class="dropdown-item" href="#">Thesis Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Our Samples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./reviews.html">Our Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->
    <div class="container-order">
        <h1>Order Now</h1>
    </div>
    <div class="h-100 bg-dark d-flex justify-content-center align-items-center py-5">

        <div class="container w-75 ">
            <form class="form bg-light p-5 rounded" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Gurenteed A+ Grade or Get Your Money Back</h1>
                    </div>
                </div>

                <div class="row mt-5">
                    <h5>Personal Details:</h5>
                    <div class="col-6 p-3">
                        <input type="text" name="firstName" id="" placeholder="First Name" class="form-control">
                    </div>
                    <div class="col-6 p-3 ">
                        <input type="text" name="lastName" id="" placeholder="Last Name" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 p-3">
                        <input type="text" name="phoneNumber" id="" placeholder="Whatsapp no. with country code"
                            class="form-control">
                    </div>
                    <div class="col-6 p-3 ">
                        <input type="email" name="email" id="" placeholder="Email" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 p-3">
                        <input type="text" name="paperTopic" id="topic" placeholder="Paper Topic" class="form-control">
                    </div>
                    <div class="col-3 p-3 ">
                        <select name="service" id="service" class="form-select">
                            <option value="" hidden>Select Service</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-3 p-3 ">
                        <select name="type" id="type" class="form-select" onchange="show()">
                            <option value="" hidden>Pages/Words</option>
                            <option value="pages">Pages</option>
                            <option value="words">Words</option>
                        </select>
                    </div>
                    <div class="col-3 p-3 ">
                        <select name="sujectArea" id="sub_area" class="form-select">
                            <option value="" hidden>Subject Area</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>

                <div class="row" id="num-row">
                    <div class="col-3 p-3">
                        <input class="form-control" type="number" name="numbers" placeholder="No. Of Pages/Words"
                            id="numbers" min="0">
                    </div>
                </div>
                <script>
                    var num_div = document.getElementById('num-row');
                    var numbers = document.getElementById('numbers');
                    var type = document.getElementById('type');
                    // var calculatedPrice;
                    numbers.style.display = 'none';
                    num_div.style.display = 'none';
                    function show() {
                        numbers.style.display = 'block';
                        num_div.style.display = 'block';
                    }
                </script>

                <div class="row">
                    <div class="col-3 p-3">
                        <select name="language" id="" class="form-select">
                            <option value="" hidden>Language</option>
                            <option value="English">English</option>
                        </select>
                    </div>
                    <div class="col-3 p-3 ">
                        <select name="paperFormat" id="" class="form-select">
                            <option value="" hidden>Paper Format</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-3 p-3 ">
                        <select name="acadmicLevel" id="al_lvl" class="form-select">
                            <option value="" hidden>Acadmic Level</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-3 p-3 ">
                        <select name="references" id="" class="form-select">
                            <option value="" hidden>Number Of References</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <h5>Additional Material:</h5>
                    <div class="col-12">
                        <input type="file" name="additionalMaterial" id="">
                    </div>
                    <div class="col-12 mt-3">
                        <textarea name="furtherDetails" id="" cols="12" rows="8" class="form-control"
                            placeholder="Further Details."></textarea>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <h5>Your Order Details:</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">Paper Topic:</span>
                            <span type="text" class="form-control" id="paperTopic"></span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">Service Type:</span>
                            <span type="text" class="form-control" id="serviceType"></span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">Subject Area:</span>
                            <span type="text" class="form-control" id="subjectArea"></span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">Acadmic Level:</span>
                            <span type="text" class="form-control" id="acadmicLevel"></span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">Price:</span>
                            <span type="text" class="form-control" value="" id="price" name="price"></span>
                        </div>
                    </div>

                    <div class="col-6">
                        <h5>Free Features</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="customerService">Customer Service:</span>
                            <input type="text" class="form-control" id="customerService" value="FREE" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="premiumWriter">Premium Writer:</span>
                            <input type="text" class="form-control" id="premiumWriter" value="FREE" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="languageStyle">Language Style:</span>
                            <input type="text" class="form-control" id="languageStyle" value="FREE" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="turnitingReport">Turniting Report:</span>
                            <input type="text" class="form-control" id="turnitingReport" value="FREE" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="titlePage">Title Page:</span>
                            <input type="text" class="form-control" id="titlePage" value="FREE" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="unlimitedRevisions">Unlimited Revisions:</span>
                            <input type="text" class="form-control" id="unlimitedRevisions" value="FREE" disabled>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <input type="submit" value="Submit" name="submit" class="w-100 btn border-1 border-dark p-3">
                    </div>
                </div>

            </form>
        </div>

    </div>
    <script>
        var PagePrice = 10;
        var WordPrice = 0.04;
        const tInput = document.getElementById("topic");
        const toutput = document.getElementById("paperTopic");
        const sInput = document.getElementById("service");
        const soutput = document.getElementById("serviceType");
        const aInput = document.getElementById("sub_area");
        const aoutput = document.getElementById("subjectArea");
        const alInput = document.getElementById("al_lvl");
        const aloutput = document.getElementById("acadmicLevel");
        const pInput = document.getElementById("numbers");
        const poutput = document.getElementById("price");
        let calculatedPrice;
        tInput.addEventListener("input", () => {
            toutput.textContent = tInput.value;
        });
        sInput.addEventListener("change", () => {
            soutput.textContent = sInput.value;
        });
        aInput.addEventListener("change", () => {
            aoutput.textContent = aInput.value;
        });
        alInput.addEventListener("change", () => {
            aloutput.textContent = alInput.value;
        });
        numbers.addEventListener("change", () => {
            const selectedOption = type.value;
            if (selectedOption === "pages") {
                calculatedPrice = PagePrice;
                poutput.innerText = pInput.value * calculatedPrice;
            } else if (selectedOption === "words") {
                calculatedPrice = WordPrice;
                poutput.innerText = pInput.value * calculatedPrice;
            }
        });
        pInput.addEventListener("input", () => {
            const selectedOption = type.value;
            if (selectedOption === "pages") {
                calculatedPrice = 10;
                poutput.innerText = pInput.value * calculatedPrice;
            } else if (selectedOption === "words") {
                calculatedPrice = 5;
                poutput.innerText = pInput.value * calculatedPrice;
            }
            // console.log(poutput.innerText)
            // poutput.textContent = pInput.value * calculatedPrice;
            // console.log(pInput.value * calculatedPrice);
            // console.log(calculatedPrice);
            // console.log(pInput.value);
        });
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $topic = $_POST['paperTopic'];
        $service = $_POST['service'];
        $type = $_POST['type'];
        $numbers = $_POST['numbers'];
        $sujectArea = $_POST['sujectArea'];
        $language = $_POST['language'];
        $paperFormat = $_POST['paperFormat'];
        $acadmicLevel = $_POST['acadmicLevel'];
        $references = $_POST['references'];

        $furtherDetails = $_POST['furtherDetails'];
        $price = 200;

        if (isset($_FILES['additionalMaterial'])) {
            $file_name = $_FILES['additionalMaterial']['name'];
            $additionalMaterial = $file_name;
            $file_size = $_FILES['additionalMaterial']['size'];
            $file_temp = $_FILES['additionalMaterial']['tmp_name'];
            $file_type = $_FILES['additionalMaterial']['type'];

            move_uploaded_file($file_temp, "uploads/" . $file_name);
        }

        $sql = mysqli_query($con, "INSERT INTO `my_order`(`firstname`, `lastname`, `phone`, `email`, `topic`, `service`, `type`, `numbers`, `area`, `language`, `format`, `academic_level`, `refrences`, `add_material`, `details`, `price`) VALUES ('$firstName','$lastName','$phoneNumber','$email','$topic','$service','$type','$numbers','$sujectArea','$language','$paperFormat','$acadmicLevel','$references','$additionalMaterial','$furtherDetails','$price')");
    }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>