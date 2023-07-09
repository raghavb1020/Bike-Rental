<?

session_start();
?>
<?php
//contact form//

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "rent") or die("connection failed");
$sql = "INSERT INTO contactinfo(name, email, mobile, message) VALUES ('{$name}','{$email}','{$mobile}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> RB brental Contact</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <script src="script.js"></script>
    <section id="header">
        <a href="#"><img src="rb logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">

                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a class="active" href="Contact.html">Contact</a></li>
                <li><a href="logout.php">logout</a></li>
                


            </ul>
        </div>
    </section>
    <section id="shop-head">
        <h1>#let's talk</h1>
        <p></p>
    </section>

    <section id="Contact_details" class="section-p1">
        <div class="details">

            <h2> Get in Touch</h2>
            <span>Visit one of our agency location or contact</span>
            <h3>Head office</h3>

            <div>


                <p>
                    <li> <i class="fa-solid fa-map-location-dot"></i> Ambegaon BK Katraj Pune .4011046
                </p>

            </div>
            <div>


                <p>
                    <li> <i class="fa-solid fa-clock-rotate-left"></i> Mon to Sat: 9:00am to 6:00pm
                </p>

            </div>



            <p>
                <li> <i class="fa-regular fa-envelope"></i>raghavb143000@gmail.com
            </p>
            <p>
                <li> <i class="fa-solid fa-phone"></i> 7219789741
            </p>

        </div>

        
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2088.8729425393008!2d73.83744406123718!3d18.447082136424843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2953ac44c7ddf%3A0x737faa6b90930b51!2sAmbegaon%20BK%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1668784436760!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>



    <section id="" class="section-p1">
        <section id="contact">
       
            <div class="container py-5">
                <h2 class="display-5 fw-bold text-center p-5">Feedback</h2>
                <form target="_blank" action="https://formsubmit.co/braghav154@gmail.com" method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    required>
                            </div>
                            <div class="col mb-3">
                                <input type="phone" name="mobile" class="form-control" placeholder="Mobile No"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your Message" class="form-control" name="message" rows="6"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-dark w-100 mb-4 mt-2">Submit Form</button>
                </form>
            </div>
        </section>
    </section>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
 </body>

</html>
target="_blank" action="https://formsubmit.co/braghav154@gmail.com"