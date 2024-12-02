<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floret</title>
    <style>
        body {
            font-family: 'Times New Roman', serif; 
            background-image: url('bg1.jpg');
            background-size: cover;
            color: black;
        }

        /* Style the header */
        .header {
            background-color: #f1e6da;
            padding: 10px;
            text-align: center;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #59855b;
        }

        /* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: left;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #f1e6da;
            color: black;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #59855b;
            color: white;
        }

        h2 {
            color: #59855b;
            text-align: center;
        }

        h3 {
            text-align: left;
            color: black;
        }

        table {
            width: 50%;
            background-color: #f1e6da;
            border: 3px solid #59855b;
            margin: 20px auto;
        }

        th {
            background-color: #59855b;
            color: white;
        }

        ul {
            list-style-type: circle;
            padding-left: 20px;
        }

        .form-container {
            text-align: center;
            margin: 20px;
        }

        .row {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .column {
            width: 45%;
        }

        .call-to-action {
            text-align: center;
            margin: 40px 0;
            padding: 20px;
            background-color: rgba(249, 244, 235, 0.8); 
            border-radius: 8px;
        }

        .image-note-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(241, 230, 218, 0.9);
            border-radius: 10px;
            width: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .image-note-container img {
            max-width: 550px; 
            max-height: 450px; 
            border-radius: 10px;
        }

        .note {
            font-size: 1.2em;
            color: #59855b;
            text-align: center;
            padding: 20px;
            max-width: 400px;
        }

        .section-container {
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(241, 230, 218, 0.9);
            border-radius: 8px;
            width: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        ul, ol, dl {
            padding-left: 20px;
            margin: 20px 0;
        }

        dl dt {
            font-weight: bold;
        }

        dl dd {
            margin-left: 20px;
        }
.video-container {
    text-align: center;
    margin: 40px auto;
    padding: 20px;
    background-color: rgba(241, 230, 218, 0.9);
    border-radius: 10px;
    width: 80%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.video-container h3 {
    color: #59855b;
    margin-bottom: 10px;
}

.video-container p {
    font-size: 1.2em;
    color: #333;
    margin-bottom: 20px;
}

.video-container video {
    border-radius: 10px;
    max-width: 100%;
}


        /* Responsive layout */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }

            .topnav a {
                float: none;
                text-align: center;
            }

            table {
                width: 90%;
            }

            .image-note-container {
                flex-direction: column;
                padding: 10px;
            }

            .image-note-container img {
                max-width: 90%;
            }

            .note {
                padding: 10px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h1 style="font-size:50px;">Floret</h1>
</div>

<div class="topnav">
    <a href="floret 2.php">Home page</a>
    <a href="flowers php.php">Flowers</a>
    <a href="plant fin.php">Plants</a>
    <a href="gifts php.php">Gifts</a>
    <a href="login2.php">Login</a>
    <a href="registration floret.php">Registration</a>
    <a href="about us.php">About Us</a>
    <a href="help desk.php">Help Desk</a>
</div>

<h2>Blooms that brighten your day</h2>
<center>
    <img src="cbg.png" width="1470" height="500" alt="Floral Background">
    <h2>Every milestone, every celebration, every expression of love - <em>find the perfect bouquet with us.</em></h2>
</center>

<table>
    <tr>
        <th>Sr no.</th>
        <th>Flowers</th>
        <th>Plants</th>
        <th>Gifts</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Letterbox flowers</td>
        <td>Letterbox plants</td>
        <td>Letterbox gifts</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Handtied</td>
        <td>House plants</td>
        <td>Graduation gifts</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Dried</td>
        <td>Summer plants</td>
        <td>Hamper & gift sets</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Luxury</td>
        <td>Small plants</td>
        <td>Food & drinks gifts</td>
    </tr>
</table>

<div class="image-note-container">
    <img src="coord.png" alt="Flower Bouquet" usemap="#image-map">
    <map name="image-map">
        <area shape="rect" coords="40,350,130,430" href="gifts php.php" alt="Gifts" title="Gifts">
        <area shape="rect" coords="20,50,140,420" href="plant fin.php" alt="Tree" title="Tree">
        <area shape="circle" coords="275,225,90" href="flowers php.php" alt="Flowers" title="Flowers">
    </map>
    <div class="note">
        <p>Order beautiful flower bouquets, vibrant plants, and thoughtful gifts for your home or loved ones. Celebrate life's special moments with Floret's unique offerings!</p>
    </div>
</div>

<div class="video-container">
    <h3>Discover the Floret Experience</h3>
    <p>Watch our video to learn more about the beauty and magic we bring to every moment.</p>
    <video width="520" height="440" controls>
        <source src="vidd.mp4" type="video/mp4">
        <source src="vidd.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>


<div class="call-to-action">
    <h2>Discover the Magic of Flowers</h2>
<p>At Floret, we believe every flower tells a unique story. From a single stem to an elaborate arrangement, each bloom conveys love, joy, and beauty.</p>
<p>Explore our collection and discover the perfect floral expression for any occasion.</p>
<p>Celebrate life's moments with the natural charm of flowers. Visit our shop today, and let us help you make every occasion unforgettable! For special moments, don't miss our exclusive <abbr title="Limited Edition">LE</abbr> collection, crafted to leave a lasting impression.</p>


</div>

<!-- Lists Section -->
<section class="section-container">
    <h3>Steps to Order</h3>
    <ol>
        <li>Choose your flowers, plants, or gifts from the catalog.</li>
        <li>Add them to your cart.</li>
        <li>Proceed to checkout and enter your details.</li>
        <li>Confirm your order.</li>
        <li>Enjoy your delivery!</li>
    </ol>

    <h3>Our Offerings</h3>
    <dl>
        <dt>Bouquets</dt>
        <dd>Artfully arranged flowers for every occasion.</dd>
        <dt>Plants</dt>
        <dd>Greener spaces, fresher air, and a touch of nature – our plants do it all.</dd>
        <dt>Gifts</dt>
        <dd>A gift that speaks from the heart – hand-crafted, meaningful, and memorable.</dd>
    </dl>
</section>

<footer>
    &copy; 2024 Floret | All Rights Reserved
</footer>

<script>
function FocusEvent() {
    document.getElementById("name").style.background = "#59855b";
    document.getElementById("password").style.background = "#59855b";
}

function validateform() {  
    var name = document.myform.name.value;  
    var password = document.myform.password.value;  
    if (name == null || name == "") {  
        alert("Name can't be blank");  
        return false;  
    } else if (password.length < 6) {  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }  
}
</script>

</body>
</html>
