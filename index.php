<?php  
require 'dbconnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Hellofood Restaurent </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="full menu_full">
        <div class="main">
            <div class="logo">
             <a href="#"><img height="5%" width="5%" src="images/profile.png" alt="">hi,<?php echo $_SESSION['f_name'] ?></a>
                 <!-- <a href="#"><img height="50%" width="50%" src="images/logo5.png" alt=""></a>-->

            </div>
            <div class="menu">
                <div class="main-menu">
                    <ul>
                        <li><a href="index.php"> Home </a></li> 
                        <li><a href="menu.php"> Food Menu </a></li>
                        <li><a href="corder.php"> Food Order </a></li>
                        <li><a href="#"> About </a></li>
                        <li><a href="#">Contact</a></li>
                        <li> <a href="logout.php">Log Out </a></li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="clr"></div>
        </div>
    </div> <!-- header part end -->
    <div class="full banner-full">
        <div class="main">
            <div class="banner-txt">
                <h5>THE REAL TASTE OF  </h5>
                
                <h1>hello_food!</h1>
                <p>
                    Treat yourself with a fresh and delicious range of Wraps, Burrito, Salads,
                </p>
                <p>
                    Quesadillas and many more with Hellofood!
                </p>
                <img src="images/shape.png" alt="">
                <button><a herf="menu.php"> order now </a></button>


            </div>
        </div>


    </div>
    <!--   end of banner -->
    <div class="full work-full">
        <div class="main work-main">
            <div class="work-top">
                <div class="sec-title">
                    <h2>Food menu</h2>
	                <h4> (Newest & Popular Food Menu)</h4> 
                    <img src="images/sec-shape.png" alt="">
                    <p>"Our menu includes a wide range of fresh, authentic and </p>
                    <p>delicious Wraps, Burrito, Salads, Quesadillas and many more. </p>
                    <p>We at Vigilante pride ourselves on providing our customers with</p>
                    <p>a unique and pleasurable food experience."</p>
                </div>
            </div>

        </div>
        <div class="work-bottom">
            <div class="work-img">
                <img src="images/dish3.jpg" alt="">
                <div class="img-overlay">
                    <h2>Chicken Quesadilla</h2>
                    <p>
                        Go to the Google search bar and start typing “What is the sauce in the”—then let it hang. The very first suggestion is “Taco Bell quesadilla,” a cheesy creation with a tangy yet spicy sauce. Being the top result on a Google search is an anonymous consensus: This quesadilla is special. 
                    </p><br>
	               <h4>Price: 200tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish6.jpg" alt="">
                <div class="img-overlay">
                    <h2>Pizza</h2>
                    <p>
                        Pizza is another menu favorite that can be served plain with cheese and tomato sauce or topped with a variety of items. Traditional toppings include, pepperoni, sausage, and vegetables; while more trendy toppings include buffalo chicken, french fries, and salad.</p><p>( For those with more expensive tastes)
                    </p><br>
	               <h4>Price: 560tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish7.jpg" alt="">
                <div class="img-overlay">
                    <h2>Pretzel</h2>
                    <p>
                        Want sweet but messy? Try the cinnamon sugar. Want flavored but smelly? Buy the garlic parmesan. And for the simple pretzel connoisseur, the original “built an empire,” the shop's menu says. Count me as a satisfied, snacking citizen. 
                    </p><br>
	               <h4>Price:300tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish9.jpg" alt="">
                <div class="img-overlay">
                    <h2>Pizza Italiano</h2>
                    <p>
                        Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients.
                    </p><br>
                    <h4>Price: 600tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish10.jpg" alt="">
                <div class="img-overlay">
                    <h2>Fish Cake & Salade</h2>
                    <p>
                        Thai-style fish cakes with herbal salad made with Tilapia, cooked in coconut oil  and served with a flavorful shredded salad with fresh lime, mint, cilantro and basil. It’s a flavor explosion!
                    </p><br>
	               <h4>Price: 700tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish11.jpg" alt="">
                <div class="img-overlay">
                    <h2>McDonalds</h2>
                    <p>
                       McDonalds isn’t the only restaurant concept to offer all day breakfast. 2018 breakfast food trends are a mash-up of morning classics (think IHOP) meets food truck street foods. Look for ethnic additions like chorizo and chimichurri or potato masala and Punjabi samaos to add flavor and flare to breakfast menus.
                    </p><br>
	                 <h4>Price: 300tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish1.jpg" alt="">
                <div class="img-overlay">
                    <h2>Fruit's Salads</h2>
                    <p>
                        Fruit's Salads have long been featured on menus as an appetizer, main course, or side dish. Salads appeal to customers looking to eat a healthy light meal or something quick. They have evolved from fruits, iceberg lettuce, cucumbers, and tomatoes to exotic selections featuring everything from truffles to caviar.
                    </p><br>
	                 <h4>Price: 180tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish4.jpg" alt="">
                <div class="img-overlay">
                    <h2> Blizzard Cake</h2>
                    <p>
                         Certain foods become more about who you eat them with than how they taste (or nutrition, of course). For me, Blizzard Cake is about sitting and chatting between delicious bites of soft serve swirled with treats (usually Oreo for me). It’s one of the best parts of summer. 
                    </p><br>
	                 <h4>Price: 400tk</h4>
                </div>
            </div>
            <div class="work-img">
                <img src="images/dish2.jpg" alt="">
                <div class="img-overlay">
                    <h2> Frosty</h2>
                    <p>
                        To come to terms with your existence in a capitalist society is to accept that nothing is good, fast, and cheap. Well, almost nothing. You can have two, but not all three—unless you buy a Frosty. 
                    </p><br>
	                 <h4>Price: 160tk</h4>
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
    <!--end of food menu -->
    <div class="location">
        <h2>location</h2>
        <img src="images/sec-shape.png" alt="">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.427768240343!2d75.87067995100516!3d30.874692281497484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a832c1a276973%3A0x4d3fc70c9bb77ad2!2sHello+Food!5e0!3m2!1sbn!2sbd!4v1564436606897!5m2!1sbn!2sbd" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!--end of location map-->
    <div class="full about-full">
        <div class="main">
            <div class="about-top">
                <div class="sec-title">
                    <h2>our story</h2>
                    <img src="images/sec-shape.png" alt="">
                    <p>
                        HELLOFOOD is the world’s most popular chicken restaurant chain specializing in OriginalRecipe©, Extra Crispy™, Extra Crispy™ Strips and Extra Crispy™ and <span>freshly made chicken sandwiches.</span>Most loved and fastest growing retail chains in the world.
                    </p>
                </div>
            </div>
            <div class="about-bottom">
                <div class="about-col">
                    <div class="about-txt">
                        <i class="fas fa-lightbulb"></i>
                        <h4>1997</h4>
                        <p>
                            Harland buys a roadside motel and cafe in Corbin, Kentucky. Always an avid cook, he puts his talents to use and starts to serve his take on southern fried chicken to the public.
                        </p>
                    </div>
                </div>
                <div class="about-col">
                    <div class="about-txt">
                        <i class="fas fa-lightbulb"></i>
                        <h4>2007</h4>
                        <p>
                            State Governor, Ruby Laffoon commissions Harland as ”Kentucky Colonel” for outstanding achievement in the community.
                        </p>
                    </div>
                </div>
                <div class="about-col">
                    <div class="about-txt">
                        <i class="fas fa-lightbulb"></i>
                        <h4>2013</h4>
                        <p>
                           Colonel Harland Sanders passes away, but the HELLOFOOD brand continues to grow, with restaurants now.
                        </p>
                    </div>
                </div>
                <div class="about-col no-border">
                    <div class="about-txt">
                        <i class="fas fa-lightbulb"></i>
                        <h4>2019</h4>
                        <p>
                            We now have 21 restaurants across 3 cities.
                        </p>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <!--  about end -->
    <div class="full contact-full">
        <div class="cont-top">
            <div class="sec-title">
                <h2>contact us</h2>
                <img src="images/sec-shape.png" alt="">
                <p>
                    <i class="fas fa-phone-alt"></i> 02-95020963
                </p>
                <p>
                    <i class="fas fa-mobile-alt"></i> +88 01710101010
                </p>
                <p>
                    <i class="far fa-envelope"></i> hellofood@gmail.com
                </p>
            </div>
        </div> 
        <div class="cont-bottom">
                <div class=" main">
                   <div class="form-div">
                      <p><u>GET IN TOUCH</u></p>
                       <form action="">
                        <input type="text" name="" id="" class="" placeholder="Name">
                        <input type="text" name="" id="" class="" placeholder="Email">
                        <textarea name="" id="" placeholder="Message" cols="30" rows="5"></textarea>
                        <button>submit</button>
                    </form>
                   </div>
                    
                </div>
        </div>
        <div class="footer">
            <p> © 2019, Hellofood.com : Online Food Delivery Service in Bangladesh. All rights reserved </p>
        </div>
    </div>

    <script src="js/e8b72830d1.js"></script>
</body>

</html>
