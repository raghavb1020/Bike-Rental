





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> RB shop s1 product </title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles2.css">

</head>

<body>

    <script src="script.js"></script>
    <section id="header">
        <a href="#"><img src="rb logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="" href="indext.html">Home</a></li>

                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Cantact</a></li>


            </ul>
        </div>
    </section>


    <section id="prodetails" class="section-m1">
        <div class="single-img">
            <img src="img/bullet 350.png" width="100%" id="MainImg" alt="">

        </div>

        <div class="single-pro-details">
            <h4> Royal Enfield Bullet 350</h4>
            <p></p>Fuel Type :-Petrol</p>
            <p>Model:-2020 </p>
            <p>Corve Weight:-191 Kg </p>
            <p>Top Speed:-110 Km </p>
            <p>Mailage:-35 Km </p>
            <p>Pr day ₹900</p>


            

                <div class="form-group">
                    <div class="quantity">
                        <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="number" class="form-control" name="duration" placeholder="How many days?"
                        
                    <input type="number" id="quantity" value="How many days?" placeholder="How many days?">
                    <button class="btn plus-btn" type="button">+</button> 
                        
                    </div>
                </div>

                
            
                <!--will calculate price---->
                <p class="total-price">
                    <span><i class="fa fa-rupee"></i></span>
                    <span id="price">900</span>
                </p>





                <form  action="booking.php" method="post">
                <div class="form-group">
                    
                    
                    <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
                </div>
                <div class="form-group">
                    <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="AdharNo" placeholder="Adhar No" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="LicenceNo" placeholder="Licence No" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" name="submit" value="Book Now">
                </div>
            </form>

                <h6>details</h6>
                <span>Royal Enfield Classic 350 is powered by 349.34 cc engine. This Classic 350 engine generates a power of 20.21 PS @ 6100 rpm and a torque of 27 Nm @ 4000 rpm. <br>
                    The claimed mileage of Classic 350 is 41.55 kmpl. Royal Enfield Classic 350 gets Drum brakes in the front and rear.</span>

        </div>

    </section>
    <script>
        //setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        //taking value to increment decrement input value
        var valueCount

        //taking price value in variable
        var price = document.getElementById("price").innerText;

        //price calculation function
        function priceTotal() {
            var total = valueCount * price;
            document.getElementById("price").innerText = total
        }

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount;

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }

            //calling price function
            priceTotal()
        })

        //plus button
        document.querySelector(".minus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount--;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }

            //calling price function
            priceTotal()
        })
    </script>
</body>

</html>