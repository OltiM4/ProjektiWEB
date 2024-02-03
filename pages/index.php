<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMEK</title>
    <link rel="icon" href="../foto/logoOmek.png" type="images/png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Gill+Sans:wght@400;700&display=swap">


</head>
<body>
    


<?php include '../include/header.php'; ?>


<div class="background"></div>

    </head>
    <body>
        <button>
          <h1>WELCOME TO OMEK</h1>
        </button>


        </div>
        <div class="wrapper" id="home">
            <div class="buy-button">
                <a href="../pages/products.php" class="cta">BUY NOW</a>
            </div>
    <div class="slider-frame">
        <div class="slide-images">
                <div class="img-container">
                    <img src="../foto/banner4.jpg">
                </div>
                <div class="img-container">
                    <img src="../foto/fotobanner.jpg">
                </div>
                <div class="img-container">
                    <img src="../foto/banner2.jpg">
                </div>
                <div class="img-container">
                    <img src="../foto/banner3.jpg">
                </div>
                
        </div>
    </div>
        </div>

        <div class="space"></div>
    <div class="storyline">
        <button>
    <p>Dive into the universe of OMEK, an Albanian fashion brand ignited by the vivid pulse of youth culture,
         the ever-evolving trends of street style, and the raw energy of the urban landscape. Founded in 2015,
          the brand's official launch in 2017 marked the inception of a remarkable journey. 
          Fueled solely by a dream and an unwavering ambition, OMEK has rapidly expanded its footprint,
           offering worldwide shipping and establishing physical retail havens across three distinct national markets.</p>
        </button>
        </div>   
           <main>
            </div>
            <div class="foto">
        </div>
     </div>
     <div class="space"></div>
     <div class="maincontainer2">
        <div class="aboutus" id="aboutus">
            <div class="fototekst"> 
            
                <h1>Our Story</h1>
            </div>
            </div>
            <div class="tekstd">
                <button>
                <p>OMEK is an Albanian fashion brand inspired by vibrant youth culture, trends, street style and the urban world. The clothing brand was founded in 2015 and launched in 2017 and quickly expanded, currently offering worldwide shipment and physical retail stores on three different national markets. Furthermore, a well thought-out range of unisex as well as male and female clothing.



                    All I had was a dream and ambition...  </p>
                </button>
                </div>

     </div>

<div class="space2"></div>
<style>
    button {
        font-size: 18px;
        color: #222;
        font-family: inherit;
        font-weight: 800;
        cursor: pointer;
        position: relative;
        border: none;
        background: none;
        text-transform: uppercase;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: color;
    }

    button:focus,
    button:hover {
        color: #222;
    }

    button:focus:after,
    button:hover:after {
        width: 100%;
        left: 0%;
    }

    button:after {
        content: "";
        pointer-events: none;
        bottom: -2px;
        left: 50%;
        position: absolute;
        width: 0%;
        height: 2px;
        background-color: black;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: width, left;
    }
</style>
</head>
<body>

    </main>

    <?php include '../include/footer.php'; ?>

     </body>
     </html>

       <script>
        function gotoHome() {
            var homeSection = document.getElementById("home");
            if (homeSection) {
                homeSection.scrollIntoView({ behavior: "smooth" });
            }
       }

       function gotoAboutUs() {
        var aboutusSection = document.getElementById("aboutus");
        if(aboutusSection) {
            aboutusSection.scrollIntoView({ behavior: "smooth"});
        }
       }

       function gotoNews() {
        var productsSection = document.getElementById("news");
        if(productsSection) {
            productsSection.scrollIntoView({behavior:"smooth"});
        }
       }

       function gotoContactUs() {
        var contactSection = document.getElementById("contactus");
        if(contactSection) {
            contactSection.scrollIntoView({behavior:"smooth"});
        }
       }


    </script>