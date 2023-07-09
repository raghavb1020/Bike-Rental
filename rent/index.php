<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> RB Bike Rental </title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
   

</head>

<body>
    

    <script src="script.js"></script>
    <section id="header">
        <a href="l"><img src="rb logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">

                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
                
                <li><a class="active" href=""> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
    </section>
    <section id="man">
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h4> Finde Your best Bike</h4>
        <br>
        <h2>Super value deals</h2>
        <h2>on all Bikes</h2>
        <p>Save more with coupons up to 70% off!</p>
        <button>Book Now</button>
    </section>





    <section id="pra" class="section-p1">
        <h2>New Bikes</h2>
        <p>Wintter Offer</p>
    </section>
    <section id="Product1" class="section-p1">
        <div class="pro-container"></div>
        <div class="pro" onclick="window.location.href='singlepro.php';">
            <img src="img/bullet 350.png" alte="">
            <div class="des">
                <span>Royal</span>
                <h5>Bullet 350</h5>

            </div>
            <h4>₹ 900 <a href="singlepro.html"></a>

            </h4>
            <a href="singlepro.html"></a><button class="normal">Rent</button>
        </div>

        </div>

        <div class="pro" onclick="window.location.href='dio.html'">
            <img src="img/dio.jpg" alte="">
            <div class="des">
                <span>Honda</span>
                <h5>Dio</h5>
            </div>
            <h4>₹400</h4>
            <a href="singlepro.html"></a><button class="normal">Rent</button>
        </div>
        </div>

        <div class="pro" onclick="window.location.href='shine.html'">
            <img src="img/shine.jpg" alte="">
            <div class="des">
                <span>Honda</span>
                <h5>Shine</h5>
                <h4>₹400</h4>
                <a href="singlepro.html"></a><button class="normal">Rent</button>
            </div>
        </div>

        <div class="pro" onclick="window.location.href='himalayan.html'">
            <img src="img/himalayan.jpg" alte="">
            <div class="des">
                <span>Royal</span>
                <h5>Himalayan</h5>

                <h4>₹900</h4>
                <a href="singlepro.html"></a><button class="normal">Rent</button>
            </div>

        </div>

        <div class="pro" onclick="window.location.href='Unicorn.html'">
            <img src="img/Honda-Unicorn +160.jpg" alte="">
            <div class="des">
                <span>Honda</span>
                <h5>Unicorn 160cc</h5>
                <h4>₹500</h4>
                <a href="singlepro.html"></a><button class="normal">Rent</button>
            </div>

        </div>

        <div class="pro" onclick="window.location.href='unicorn150.html'">
            <img src="img/Honda-Unicorn-.jpg" alte="">
            <div class="des">
                <span>Honda</span>
                <h5>Unicorn</h5>

                <h4>₹450</h4>
                <a href="singlepro.html"></a><button class="normal">Rent</button>
            </div>

        </div>

        <div class="pro" onclick="window.location.href='jupiter.html'">     
            <img src="img/jupiter.jpg" alte="">
            <div class="des">
                <span>TVS</span>
                <h5>Jupiter</h5>

                <h4>₹400</h4>
                <a href="singlepro.html"></a><button class="normal">Rent</button>
            </div>

        </div>

        <div class="pro" onclick="window.location.href='passion.html'">
            <img src="https://bd.gaadicdn.com/processedimages/hero-motocorp/hero-motocorp-passion-pro/494X300/m_passion-pro_11539840304.jpg?imwidth=380&impolicy=resize" alte="">
            <div class="des">
                <span>Hero</span>
                <h5>Passion Pro BS4</h5>

                <h4>₹400</h4>
                <a href="singlepro.html"></a><button class="normal">Rent</button>
            </div>

        </div>

        <section id="pra" class="section-p1">
            <h2>Sports Bikes</h2>
            <p>Wintter Offer</p>
        </section>
        <section id="Product1" class="section-p1">
            <div class="pro-container"></div>
            <div class="pro" onclick="window.location.href='MT15.html';">
                <img src="https://bd.gaadicdn.com/processedimages/yamaha/mt-15-2-0/494X300/mt-15-2-062e4b1bb4ffad.jpg?imwidth=400&impolicy=resize" alte="">
                <div class="des">
                    <span>Yamaha</span>
                    <h5>MT 15 </h5>

                    <h4>₹ 800 
                    </h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>
            </div>
            </div>
            <div class="pro" onclick="window.location.href='NS200.html';">
                <img src="https://bd.gaadicdn.com/processedimages/bajaj/bajaj-pulsar-200-ns/494X300/bajaj-pulsar-200-ns61543f2cb9722.jpg?imwidth=400&impolicy=resize" alte="">
                <div class="des">
                    <span>Bajaj</span>
                    <h5>Pulsar NS200</h5>
                    <h4>₹800</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>

            </div>
            <div class="pro" onclick="window.location.href='R15.html';">
                <img src="https://media.zigcdn.com/media/model/2021/Sep/yamaha-r15-v4-dark-right-side-view_600x400.jpg" alte="">
                <div class="des">
                    <span>Yamaha</span>
                    <h5>R15 V4</h5>
                    <h4>₹800</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>

            </div>
            <div class="pro" onclick="window.location.href='BMW.html';">
                <img src="https://imgd.aeplcdn.com/393x221/n/cw/ec/123865/g310-rr-right-front-three-quarter-2.jpeg?isig=0&q=75" alte="">
                <div class="des">
                    <span>BMW </span>
                    <h5>G310R</h5>
                    <h4>₹2000</h4>
                    <a href=""></a><button class="normal">Rent</button>
                </div>
            </div>

        </section>

        <section id="pra" class="section-p1">
            <h2>travelling Bikes</h2>
            <p>Wintter Offer</p>
        </section>
        <section id="Product1" class="section-p1">
            <div class="pro-container"></div>
            <div class="pro" onclick="window.location.href='trabullet650.html';">
                <img src="img/Royal-650.jpg" alte="">
                <div class="des">
                    <span>Royal Enfield</span>
                    <h5>Interceptor  650</h5>
                </div>
                <h4>₹ 1100 <a href=""></a>
                </h4>
                <a href="trabullet650.html"></a><button class="normal">Rent</button>
            </div>
            </div>

            <div class="pro" onclick="window.location.href='Dominar.html';">
                <img src="img/dominor-400.jpg" alte="">
                <div class="des">
                    <span>Bajaj</span>
                    <h5>Dominar 400</h5>
                    <h4>₹900</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>
            </div>
            <div class="pro" onclick="window.location.href='KTM390.html';">
                <img src="img/ktm-390-adventure.jpg" alte="">
                <div class="des">
                    <span>KTM</span>
                    <h5>390 Adventure</h5>
                    <h4>₹1300</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>
            </div>
            <div class="pro" onclick="window.location.href='hondacb.html';">
                <img src="img/honda-cb-200-.jpg" alte="">
                <div class="des">
                    <span>Honda</span>
                    <h5>CB200X</h5>
                    <h4>₹1200</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>
            </div>
            <div class="pro" onclick="window.location.href='fz.html';">
                <img src="http://cdn.shopify.com/s/files/1/0069/6821/3631/products/13_3quarter_Blue-with-new-tail-light_600x.png?v=1640930244" alte="">
                <div class="des">
                    <span>FZ</span>
                    <h5>FRZ200</h5>
                    <h4>₹1200</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='fz.html';">
                <img src="http://cdn.shopify.com/s/files/1/0069/6821/3631/products/13_3quarter_Blue-with-new-tail-light_600x.png?v=1640930244" alte="">
                <div class="des">
                    <span>FZ</span>
                    <h5>FRZ200</h5>
                    <h4>₹1200</h4>
                    <a href="singlepro.html"></a><button class="normal">Rent</button>
                </div>
            </div>

        </section>

 <section id="footer" class="section-p1">
<?php include 'footer.php' ?>


</section>



        
    

       
        
    
 

</body>

</html>