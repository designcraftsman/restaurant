<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display+SC:wght@700&display=swap" rel="stylesheet">
</head>
<body>
        <nav class="nav">
            <h1 class="nav__logo"><span class="nav__logo__letters">Tas</span>ty</h1>
            <ul class="nav__navbar">
                <li class="nav__navbar__navs"><a href="#home">Home</a></li>
                <li class="nav__navbar__navs"><a href="#about">About</a></li>
                <li class="nav__navbar__navs"><a href="#menu">Menu</a></li>
                <li class="nav__navbar__navs"><a href="#team">Team</a></li>
                <li  ><a id="reserveNav" class="nav__navbar__reserve" href="#">Reservation</a></li>
                <li id="switch" ><a id="switchMode" href="#"><i class="fa-regular fa-moon fa-2xl" ></i></a></li>
            </ul>
            <a id="showMobileNav" class="nav__button"><i class="fa-solid fa-bars fa-2xl" ></i></a>
            <div id="mobileNav" class="nav__mobile hide">
                <ul class="nav__mobile__navbar">
                    <li ><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a id="mobileReservationBtn" href="#">Reservation</a></li>
                </ul>
            </div>
        </nav>
       
        
    <section class="head" id="home">
        <div class="head__container">
            <form class="reserve hideForum" action="confirmPage.php" method="POST" id="Forum">
                <?php  include('forum.php');?>
            </form> 
            <h2 class="head__container__h2">We Offer You</h2>
            <h1 class="head__container__h1">The Best Tasting Experience</h1>
            <hr>
            <button id="reserveBtn" class="head__container__btn">Book My Table Now!</button>
        </div>               
    </section>



    <section class="about " id="about">
        <h2 class="about__h2 reveal">" Hello dear"</h2>
        <h1 class="about__h1 reveal">Welcome To Tasty</h1>
        <i class="fa-solid fa-leaf fa-flip-both fa-xl about__icon1 reveal"></i>
        <i class="fa-solid fa-leaf fa-flip-vertical fa-xl about__icon2 reveal"></i>
        <p class="about__p reveal">Tasty was the first restaurant to open in Morocco, the restaurant was designed with the history in mind we have created a self industrial dining room, combined with an open kitchen, coffe take out bar and coffe reastary.</p>
        <div class="about__container">
            <div class="about__container__history reveal">
                <h2 class="about__container__history__date">1999</h2>
                <h2 class="about__container__history__title">Grand Opening</h2>
                <p class="about__container__history__paragraph">Tast was opened in May 6 1999, the interior was created by the most famous artists. Today our restaurant welcomes 250 people!</p>
            </div>
            <div class="about__container__history reveal">
                <h2 class="about__container__history__date">2005</h2>
                <h2 class="about__container__history__title">Second Branch</h2>
                <p class="about__container__history__paragraph">Since the very first day. Tasty was a gatherinng place for teacher, doctors, actors. Therefore we decided to open our second branch !</p>
            </div>
            <div class="about__container__history reveal">
                <h2 class="about__container__history__date">1999</h2>
                <h2 class="about__container__history__title">Grand Opening</h2>
                <p class="about__container__history__paragraph">Tast was opened in May 6 1999, the interior was created by the most famous artists. Today our restaurant welcomes 250 people!</p>
            </div>
        </div>
    </section> 
    
    


    <section class="recipes ">
        <div class="recipes__title reveal">
            <h2 class="recipes__title__h2">Natural Ingredients</h2>
            <h1 class="recipes__title__h1">Delicious Recipes</h1>
        </div>
    </section>



    <section class="categories reveal" >
        <div class="categories__container">
            <div class="categories__container__item">
                <img class="categories__container__item__img" src="img/pexels-pixabay-326281.jpg">
                <h2 class="categories__container__item__h2">Start eating better</h2>
                <h1 class="categories__container__item__h1">Fresh Menus</h1>
                <p class="categories__container__item__p">Restaurant help you treat yourself with different meal everyday, thanks to our daily changing menus and our awesome creative chefs!</p>
            </div>
            <div class="categories__container__item">
                <img class="categories__container__item__img" src="img/pexels-ash-376464.jpg">
                <h2 class="categories__container__item__h2">Quality is the heart</h2>
                <h1 class="categories__container__item__h1">Tasty Meals</h1>
                <p class="categories__container__item__p">Who said healthy food can't also be delicous ? Tasty creative chefs use fresh and seasonal ingredients to make affordable.</p>
            </div>
            <div class="categories__container__item">
                <img class="categories__container__item__img" src="img/pexels-nastyasensei-821398.jpg">
                <h2 class="categories__container__item__h2">Hot & ready to serve</h2>
                <h1 class="categories__container__item__h1">Talented Chefs</h1>
                <p class="categories__container__item__p">Tasty have offered a team of culinary professionals that make delectable dishes at memorable events for both private clientele.</p>
            </div>
        </div>
    </section>



    <section class="menu" id="menu">
        <div class="menu__container reveal">
            <h2 class="menu__container__h2">Our Special</h2>
            <h1 class="menu__container__h1">Food Menu</h1>
        </div>
    </section>



    <section class="menus ">
            <ul class="menus__nav reveal">
                <li class="menus__nav__items"><a id="lunchBtn" href="#">Lunch</a></li>
                <li class="menus__nav__items"><a id="dinnerBtn" href="#">Dinner</a></li>
                <li class="menus__nav__items"><a id="dessertBtn" href="#">Dessert</a></li>
                <li class="menus__nav__items"><a id="drinksBtn" href="#">Drinks</a></li>
            </ul>
            <div class="menus__container reveal">
                <div class="menus__container__item  lunch ">
                    <img class="menus__container__item__img" src="img/pexels-budhaditya-bose-432072.jpg" alt="">
                    <h2 class="menus__container__item__h2">Sea trout </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item lunch">
                    <img class="menus__container__item__img" src="img/pexels-budhaditya-bose-432072.jpg" alt="">
                    <h2 class="menus__container__item__h2">Sea trout </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  lunch">
                    <img class="menus__container__item__img" src="img/pexels-budhaditya-bose-432072.jpg" alt="">
                    <h2 class="menus__container__item__h2">Sea trout </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  dinner ">
                    <img class="menus__container__item__img" src="img/pexels-cats-coming-2942320.jpg" alt="">
                    <h2 class="menus__container__item__h2">Smoked Paprika Hummus</h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item dinner ">
                    <img class="menus__container__item__img" src="img/pexels-cats-coming-2942320.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  dessert">
                    <img class="menus__container__item__img" src="img/pexels-robin-stickel-70497.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  dessert ">
                    <img class="menus__container__item__img" src="img/pexels-robin-stickel-70497.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  dessert ">
                    <img class="menus__container__item__img" src="img/pexels-robin-stickel-70497.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  drinks">
                    <img class="menus__container__item__img" src="img/pexels-jan-n-g-u-y-e-n-🍁-699953.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  drinks">
                    <img class="menus__container__item__img" src="img/pexels-jan-n-g-u-y-e-n-🍁-699953.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
                <div class="menus__container__item  drinks">
                    <img class="menus__container__item__img" src="img/pexels-jan-n-g-u-y-e-n-🍁-699953.jpg" alt="">
                    <h2 class="menus__container__item__h2">Roasted Steak Roulade </h2>
                    <h2 class="menus__container__item__price">15.95$</h2>
                    <p class="menus__container__item__p">eggs, bacon and cherry tomatoes with bread</p>
                </div>
            </div>
            <button id="discoverMenu"  class="menus__btn ">Discover Full Menu</button>

    </section>



    <section class="team" id="team">
      <div class="team__container reveal"> 
        <h2 class="team__container__h2">Meet Our</h2>
        <h1 class="team__container__h1">Talented Chefs</h1>
      </div>
    </section>



    <section class="chefs reveal" >
        <div class="chefs__container">
            <div class="chefs__container__member">
              <div class="chefs__container__member__imageContainer">
                <img src="img/chefs/pexels-tanya-gorelova-3933194.jpg" alt="">
                <div class="chefs__container__member__imageContainer__text hideSocial">
                      <ul>
                         <li><a href="#"><i class="fa-brands fa-facebook fa-xl" ></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-instagram fa-xl" ></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-pinterest fa-xl"></i></a></li>
                      </ul>
                    <p>Passion for cooking is in his gens. He grew up appreciating outstanding food and service at an early age.</p>
                 </div>
              </div>
                <h2>John alder</h2>
                <h3>CEO</h3>
            </div>
            <div class="chefs__container__member">
                <div class="chefs__container__member__imageContainer">
                  <img src="img/chefs/pexels-tanya-gorelova-3933194.jpg" alt="">
                  <div class="chefs__container__member__imageContainer__text hideSocial ">
                  <ul>
                      <li><a href="#"><i class="fa-brands fa-facebook fa-xl" ></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram fa-xl" ></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-pinterest fa-xl"></i></a></li>
                  </ul>
                  <p>Passion for cooking is in his gens. He grew up appreciating outstanding food and service at an early age.</p>
                </div>
                </div>
                  <h2>John alder</h2>
                  <h3>CEO</h3>
              </div>
              <div class="chefs__container__member">
                <div class="chefs__container__member__imageContainer">
                  <img src="img/chefs/pexels-tanya-gorelova-3933194.jpg" alt="">
                  <div class="chefs__container__member__imageContainer__text hideSocial">
                  <ul>
                      <li><a href="#"><i class="fa-brands fa-facebook fa-xl" ></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram fa-xl" ></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-pinterest fa-xl"></i></a></li>
                  </ul>
                  <p>Passion for cooking is in his gens. He grew up appreciating outstanding food and service at an early age.</p>
                </div>
                </div>
                  <h2>John alder</h2>
                  <h3>CEO</h3>
              </div>
              <div class="chefs__container__member">
                <div class="chefs__container__member__imageContainer">
                  <img src="img/chefs/pexels-tanya-gorelova-3933194.jpg" alt="">
                  <div class="chefs__container__member__imageContainer__text hideSocial">
                  <ul>
                      <li><a href="#"><i class="fa-brands fa-facebook fa-xl" ></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram fa-xl" ></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-pinterest fa-xl"></i></a></li>
                  </ul>
                  <p>Passion for cooking is in his gens. He grew up appreciating outstanding food and service at an early age.</p>
                </div>
                </div>
                  <h2>John alder</h2>
                  <h3>CEO</h3>
              </div>
       </div> 
    </section>



    <footer class="footer">
        <div class="footer__container">
            <div class="footer__container__social">
                <h2 class="footer__container__social__h2">Follow Us</h2>        
                <ul class="footer__container__social__media">
                    <li class="footer__container__social__media__link"><a href="#"><i class="fa-brands fa-facebook fa-2xl" style="color: #ffffff;"></i></a></li>
                    <li class="footer__container__social__media__link"><a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a></li>
                    <li class="footer__container__social__media__link"><a href="#"><i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i></a></li>
                    <li class="footer__container__social__media__link"><a href="#"><i class="fa-brands fa-twitter fa-2xl" style="color: #ffffff;"></i></a></li>
                </ul>
            </div>

            <div class="footer__container__dcp">
                <h2 class="footer__container__dcp__h2"><span>Tas</span>ty</h2>
                <p class="footer__container__dcp__p">Tasty was the first restaurant to open in Morocco, the restaurant was designed with the history in mind we have created a self industrial dining room, combined with an open kitchen, coffe take out bar and coffe reastary.</p>
            </div>

            <div class="footer__container__sub">
                <h2 class="footer__container__sub__h2">Newsletter</h2>
                <form class="footer__container__sub__form" >
                    <input placeholder="Enter your email"  type="text">
                    <button class="footer__container__sub__form__btn"><i class="fa-solid fa-arrow-right fa-lg" style="color: #ffffff;"></i></button>
                </form>
            </div>
        </div>
        <p class="footer__copy">Copyright © 2023 Oussama Design, Inc</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>