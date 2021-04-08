<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Northstreet Restaurant">
    <meta name="author" content="A.K.">

    <title>Restaurant Northstreet</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 

    <!-- Custom CSS -->  
    <link rel="stylesheet" href="{{ asset('css/restaurant.js') }}" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="myPage"  data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Restaurant Northstreet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>  
            </ul>
        </div>  
    </nav>

    <div class="jumbotron">
        <div class="container-fluid">
            <div class="header-content-inner">
                <h1>Welcome to Northstreet restaurant</h1> 
                <h3>We are proud of our long history of making delicious meals, warm and 
                friendly atmosphere and professional staff.</h3>
            </div>
        </div>
    </div>

    <section class="bg-about bg-section" id="about">
        <div class="container-fluid">
            <h1 class="container-h1">About</h1>
            <div class="row">
                <div class="col-sm-5">

                    <div class="hov-img">
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/warm_welcome.jpg" alt="Warm welcome" class="hov-img-bottom img-fluid">
                        <div class="hov-img-top hov-img-slideup">
                            <div class="hov-img-text">
                                <h5>Warm welcome</h5>
                                <p>It had separate tables, a menu, and specialized in soups made with a base of meat and eggs, which were said to be restaurants or, in English "restoratives".</p>
                            </div>
                        </div>
                    </div>                    

                    <div class="hov-img">
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/delicious_meals.jpg" alt="Delicious meals" class="hov-img-bottom img-fluid">
                        <div class="hov-img-top hov-img-slideup">
                            <div class="hov-img-text">
                                <h5>Delicious meals</h5>
                                <p> In about 1765 a new kind of eating establishment, called a "Bouillon", was opened on rue des Poulies, near the Louvre, by a man named Boulanger.</p>
                            </div>
                        </div>
                    </div>

                    <div class="hov-img">
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/professional_staff.jpg" alt="Professional staff" class="hov-img-bottom img-fluid">
                        <div class="hov-img-top hov-img-slideup">
                            <div class="hov-img-text">
                                <h5>Professional staff</h5>
                                <p>For centuries Paris had taverns which served food at large common tables, but they were notoriously crowded, noisy, not very clean, and served food of dubious quality.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <div class="col-sm-7">
                    <div class="row ">
                        <div class="restaurant-history slideanim text-center">
                            <h3 class="section-heading">Restaurant Northstreet</h3>
                            <p class="about-history first">The modern idea of a restaurant – as well as the term itself – appeared in Paris in the 18th century. For centuries Paris had taverns which served food at large common tables, but they were notoriously crowded, noisy, not very clean, and served food of dubious quality. In about 1765 a new kind of eating establishment, called a "Bouillon", was opened on rue des Poulies, near the Louvre, by a man named Boulanger.<br /> <br >
                            It had separate tables, a menu, and specialized in soups made with a base of meat and eggs, which were said to be restaurants or, in English "restoratives". Other similar bouillons soon opened around Paris.
                            In about 1765 a new kind of eating establishment, called a "Bouillon", was opened on rue des Poulies, near the Louvre, by a man named Boulanger.
                            It had separate tables, a menu, and specialized in soups made with a base of meat and eggs, which were said to be restaurants or, in English "restoratives". Other similar bouillons soon opened around Paris.
                            </p>

                            <button type="button" class="btn more" id="more" data-toggle="collapse" data-target="#demo">More</button>
                            <div id="demo" class="collapse">  
                                <p class="about-history"> Thanks to Boulanger and his imitators, these soups moved from the category of remedy into the category of health food and ultimately into the category of ordinary food. Their existence was predicated on health, not gustatory, requirements.</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>     
        </div>
    </section>

    <section class="bg-menu bg-section" id="menu">
        <div class="container-fluid">
            <h1 class="container-h1">Menu</h1>
            <div class="row">
                
                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#breakfast">Breakfast</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#lunch">Lunch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#dinner">Dinner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#dessert">Dessert</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#salads">Salads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#drinks">Drinks</a>
                        </li>
                    </ul>
                    

                    <!-- Tab panes -->
                    <div class="tab-content slideanim">
                        <div id="breakfast" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Spanish tortilla<span class="badge pull-right">5.90 €</span></h4>
                                          <p class="list-group-item-text">potatoes, onion, olive oil, free-range eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Quick fish cakes<span class="badge pull-right">6.80 €</span></h4>
                                          <p class="list-group-item-text">skinless cod, pollock fillets, Maris Piper, flour, olive oil, fresh green herbs, chives, mayonnaise, eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Wild rice salad<span class="badge pull-right">5.20 €</span></h4>
                                          <p class="list-group-item-text">mixed rice, wild and long-grain, mixed nuts, fresh basil, fresh mint, dried apricots, extra virgin olive oil
                                          </p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Chicken milanese with spaghetti<span class="badge pull-right">8.70 €</span></h4>
                                          <p class="list-group-item-text">cloves of garlic, fresh basil, olive oil, plum tomatoes, skinless free-range chicken breasts, plain flour, free-range eggs, breadcrumbs, Parmesan cheese, dried spaghetti</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Mango lassi<span class="badge pull-right">3.10 €</span></h4>
                                          <p class="list-group-item-text">green cardamom pods , optional, ripe mangos, low-fat natural yoghurt, ice cubes, runny honey
                                          </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div class="right-cover">
                                        <h3>Breakfast</h3>
                                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951905/new/breakfast.jpg" class="menu-img img-fluid" alt="breakfast-img">
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <div id="lunch" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Spanish tortilla<span class="badge pull-right">5.90 €</span></h4>
                                          <p class="list-group-item-text">potatoes, onion, olive oil, free-range eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Quick fish cakes<span class="badge pull-right">6.80 €</span></h4>
                                          <p class="list-group-item-text">skinless cod, pollock fillets, Maris Piper, flour, olive oil, fresh green herbs, chives, mayonnaise, eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Wild rice salad<span class="badge pull-right">5.20 €</span></h4>
                                          <p class="list-group-item-text">mixed rice, wild and long-grain, mixed nuts, fresh basil, fresh mint, dried apricots, extra virgin olive oil
                                          </p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Chicken milanese with spaghetti<span class="badge pull-right">8.70 €</span></h4>
                                          <p class="list-group-item-text">cloves of garlic, fresh basil, olive oil, plum tomatoes, skinless free-range chicken breasts, plain flour, free-range eggs, breadcrumbs, Parmesan cheese, dried spaghetti</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Mango lassi<span class="badge pull-right">3.10 €</span></h4>
                                          <p class="list-group-item-text">green cardamom pods , optional, ripe mangos, low-fat natural yoghurt, ice cubes, runny honey
                                          </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div class="right-cover">
                                        <h3>Lunch</h3>
                                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951906/new/lunch.jpg" class="menu-img img-fluid" alt="brekfast-img">
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div id="dinner" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Spanish tortilla<span class="badge pull-right">5.90 €</span></h4>
                                          <p class="list-group-item-text">potatoes, onion, olive oil, free-range eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Quick fish cakes<span class="badge pull-right">6.80 €</span></h4>
                                          <p class="list-group-item-text">skinless cod, pollock fillets, Maris Piper, flour, olive oil, fresh green herbs, chives, mayonnaise, eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Wild rice salad<span class="badge pull-right">5.20 €</span></h4>
                                          <p class="list-group-item-text">mixed rice, wild and long-grain, mixed nuts, fresh basil, fresh mint, dried apricots, extra virgin olive oil
                                          </p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Chicken milanese with spaghetti<span class="badge pull-right">8.70 €</span></h4>
                                          <p class="list-group-item-text">cloves of garlic, fresh basil, olive oil, plum tomatoes, skinless free-range chicken breasts, plain flour, free-range eggs, breadcrumbs, Parmesan cheese, dried spaghetti</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Mango lassi<span class="badge pull-right">3.10 €</span></h4>
                                          <p class="list-group-item-text">green cardamom pods , optional, ripe mangos, low-fat natural yoghurt, ice cubes, runny honey
                                          </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div class="right-cover">
                                        <h3>Dinner</h3>
                                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951906/new/dinner.jpg" class="menu-img img-fluid" alt="brekfast-img">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div id="dessert" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Spanish tortilla<span class="badge pull-right">5.90 €</span></h4>
                                          <p class="list-group-item-text">potatoes, onion, olive oil, free-range eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Quick fish cakes<span class="badge pull-right">6.80 €</span></h4>
                                          <p class="list-group-item-text">skinless cod, pollock fillets, Maris Piper, flour, olive oil, fresh green herbs, chives, mayonnaise, eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Wild rice salad<span class="badge pull-right">5.20 €</span></h4>
                                          <p class="list-group-item-text">mixed rice, wild and long-grain, mixed nuts, fresh basil, fresh mint, dried apricots, extra virgin olive oil
                                          </p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Chicken milanese with spaghetti<span class="badge pull-right">8.70 €</span></h4>
                                          <p class="list-group-item-text">cloves of garlic, fresh basil, olive oil, plum tomatoes, skinless free-range chicken breasts, plain flour, free-range eggs, breadcrumbs, Parmesan cheese, dried spaghetti</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Mango lassi<span class="badge pull-right">3.10 €</span></h4>
                                          <p class="list-group-item-text">green cardamom pods , optional, ripe mangos, low-fat natural yoghurt, ice cubes, runny honey
                                          </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div class="right-cover">
                                        <h3>Dessert</h3>
                                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951905/new/dessert.jpg" class="menu-img img-fluid" alt="brekfast-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="salads" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Spanish tortilla<span class="badge pull-right">5.90 €</span></h4>
                                          <p class="list-group-item-text">potatoes, onion, olive oil, free-range eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Quick fish cakes<span class="badge pull-right">6.80 €</span></h4>
                                          <p class="list-group-item-text">skinless cod, pollock fillets, Maris Piper, flour, olive oil, fresh green herbs, chives, mayonnaise, eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Wild rice salad<span class="badge pull-right">5.20 €</span></h4>
                                          <p class="list-group-item-text">mixed rice, wild and long-grain, mixed nuts, fresh basil, fresh mint, dried apricots, extra virgin olive oil
                                          </p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Chicken milanese with spaghetti<span class="badge pull-right">8.70 €</span></h4>
                                          <p class="list-group-item-text">cloves of garlic, fresh basil, olive oil, plum tomatoes, skinless free-range chicken breasts, plain flour, free-range eggs, breadcrumbs, Parmesan cheese, dried spaghetti</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Mango lassi<span class="badge pull-right">3.10 €</span></h4>
                                          <p class="list-group-item-text">green cardamom pods , optional, ripe mangos, low-fat natural yoghurt, ice cubes, runny honey
                                          </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div class="right-cover">
                                        <h3>Salads</h3>
                                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951906/new/salads.jpg" class="menu-img img-fluid" alt="brekfast-img">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div id="drinks" class="tab-pane fade">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Spanish tortilla<span class="badge pull-right">5.90 €</span></h4>
                                          <p class="list-group-item-text">potatoes, onion, olive oil, free-range eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Quick fish cakes<span class="badge pull-right">6.80 €</span></h4>
                                          <p class="list-group-item-text">skinless cod, pollock fillets, Maris Piper, flour, olive oil, fresh green herbs, chives, mayonnaise, eggs</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Wild rice salad<span class="badge pull-right">5.20 €</span></h4>
                                          <p class="list-group-item-text">mixed rice, wild and long-grain, mixed nuts, fresh basil, fresh mint, dried apricots, extra virgin olive oil
                                          </p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Chicken milanese with spaghetti<span class="badge pull-right">8.70 €</span></h4>
                                          <p class="list-group-item-text">cloves of garlic, fresh basil, olive oil, plum tomatoes, skinless free-range chicken breasts, plain flour, free-range eggs, breadcrumbs, Parmesan cheese, dried spaghetti</p>
                                        </li>
                                        <li class="list-group-item">
                                          <h4 class="list-group-item-heading">Mango lassi<span class="badge pull-right">3.10 €</span></h4>
                                          <p class="list-group-item-text">green cardamom pods , optional, ripe mangos, low-fat natural yoghurt, ice cubes, runny honey
                                          </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div class="right-cover">
                                        <h3>Drink</h3>
                                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951906/new/drink.jpg" class="menu-img img-fluid" alt="brekfast-img">
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>             
            </div>
        </div>
    </section>

    <section class="bg-service bg-section" id="service">
        <div class="container-fluid text-center">
            <h1 class="container-h1">Service</h1>

            <div class="row service-round-3 slideanim">
                <div class="col-sm-4 text-center round">
                    <div class="service-round b-party">
                        <i class="fa fa-4x fa fa-birthday-cake sr-icons"></i>
                    </div>
                    <h4>Birthday party</h4>
                    <p>For more information please contact us.</p>
                </div>
                <div class="col-sm-4 text-center round">
                    <div class="service-round wedding">
                        <i class="fa fa-4x fa fa-heart sr-icons"></i>
                    </div>    
                    <h4>Wedding</h4>
                    <p>For more information please contact us</p>
                </div>
                <div class="col-sm-4 text-center round">
                    <div class="service-round b-dinner">
                        <i class="fa fa-4x fa fa-suitcase  sr-icons"></i>
                    </div>
                    <h4>Business dinner</h4>
                    <p>For more information please contact us.</p>
                </div>
            </div>
            <a href="#contact" class="btn">Contact us</a>
        </div>
    </section>

    
    

    <section id="gallery" class="bg-gallery no-padding">
        <div class="container-fluid">
            <h3>Gallery</h3>
            <hr class="hr-h3s">
            <div class="row no-gutter gallery slideanim"> 
                
                <div class="col-sm-4 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-instagram fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s1.jpg" class="img-fluid
                        " alt="">     
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-instagram fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s2.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-instagram fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s3.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-instagram fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s4.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-instagram fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s5.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-instagram fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s6.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row more-img">

                    <div class="to-gallery">
                        <h4>For more pictures visit us on</h4>
                        <div class="social-networks">
                            <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                
            </div>

        </div>
    </section>

    <section class="bg-staff" id="staff">
        <div class="container-fluid">
            <h3>Our staff</h3>
            <hr class="hr-h3s"> 
                <div class="row text-center slideanim thumbnail-row">
                    <div class="col-sm-3">
                        <div class="staff">
                            <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952566/new/manager.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">John Johnson</h5>
                            <h6>Manager</h6>    
                        </div>
                     </div>
                     <div class="col-sm-3">  
                        <div class="staff">
                            <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952565/new/chef1.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">Anna Schmidt</h5>
                            <h6>Chef</h6>         
                        </div>
                    </div>  
                    <div class="col-sm-3">  
                        <div class="staff">
                            <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952566/new/chef3.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">Ivan Gonzales</h5>
                            <h6>Chef</h6>
                        </div>
                    </div>
                      <div class="col-sm-3">  
                        <div class="staff">
                            <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952566/new/chef2.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">Joseph Martinez</h5>
                            <h6>Chef</h6>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="bg-testimonials" id="testimonials">
        <div class="container-fluid">
            <h3 class="">What people say about us</h3>
            <hr class="hr-testimonials">
            <div class="row slideanim">    
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                            <h4>The atmosphere in restaurant is friendly, and the
                            dishes are delicious.</h4>
                            <h5>Mark Gross</h5>
                      </div>

                      <div class="carousel-item">
                            <h4>Delicious meals, warm welcome, excellent service.</h4>
                            <h5>Nina Hansen</h5>
                      </div>
                    
                      <div class="carousel-item">
                            <h4>Definitely my favourite restaurant, friendly, clean, 
                            delicious meals.</h4>
                            <h5>Maria Fernandez</h5>
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>       
    </section>

    <section class="bg-contact bg-section" id="contact">
        <div class="container-fluid">
            <h1 class="container-h1">Contact us</h1>
            <div class="row slideanim">
                <div class="col-md-6 col-sm-6 contact-left">
                    <div class="left-box">
                        <address class="contact">
                            <span class="span-contact">Call:</span>
                            <br>
                            +091 1234 5678
                            <br> 
                            <span class="span-contact">Email:</span> 
                            <br>
                            northstreet@gmail.com
                            <br>
                            <span class="span-contact">Visit:</span>  
                            <br>
                            22, Northstreet Road
                            <br>
                            Melbourne, Victoria
                            <br>
                            Australia
                        </address>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 contact-right" >
                            
                            <form novalidate action="mailto:anttnew@gmmmail.com" name="frm" method="post">
                                 <div class="form-group has-feedback">
                                    <label class="sr-only">First name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="First name" required>
                                    
                                </div>
                                 <div class="form-group has-feedback">
                                    <label class="sr-only">Last name:</label>
                                    <input type="text" name="surname" class="form-control" placeholder="Last name" required>
                                    
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="sr-only">Email:</label>
                                    <input type="email" name="email" class="form-control"  placeholder="Email" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" name="comment" for="comment">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" placeholder="Description"></textarea>
                                </div>
                                <div class="contact-buttons pull-left">
                                    <input type="submit" name="submit"  value="Send" />
                                    <input type="reset" value="Reset" />
                                </div>
                            </form>
                            
                </div>
            </div>
            <div class="row">
                <div id="googleMap" style="height:300px;width:100%;"></div>

                <!-- Add Google Maps -->
                <script src="http://maps.googleapis.com/maps/api/js"></script>
                <script>
                var myCenter = new google.maps.LatLng(-37.817110, 144.959128);

                function initialize() {
                var mapProp = {
                  center:myCenter,
                  zoom:12,
                  scrollwheel:false,
                  draggable:false,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };

                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker = new google.maps.Marker({
                  position:myCenter,
                  });

                marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
        </div>    
    </section>

    <footer class="-bg-footer" id="footer">
        <div class="container-fluid">
            <div class="row footer-align">
                <div class="col-md-4 col-sm-4">
                    <h5>Northstreet</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <p class="footer">
                            The EU-27 has an estimated 1.6m businesses involved in 'accommodation and food services', more than 75% of which are small and medium enterprises.
                        </p>
                        <ul class="social-networks">
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Our contact</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <address>
                                22, Northstreet Road
                                <br>
                                Melbourne, Victoria
                                <br>
                                Australia
                                <br>
                                <i class="fa fa-phone address"></i> +091 1234 5678
                                <br>
                                <i class="fa fa-fax address"></i> +876 5432 1234
                                <br>
                                <i class="fa fa-envelope address"></i> <a href="mailto:northstreet@gmail.com">northstreet@gmail.com</a>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Open hours</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <ul>
                            <li>Mon-Fri: 08:00-22:00</li>
                            <li>Sat    : 09:00-22:00</li>
                            <li>Sun    : 09:00-16:00</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>

    <div class="footer-copyright">
            <p>&copy 2018 Copyright by  <a href="https://github.com/anttnew"> https://github.com/anttnew</a></p>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
     
    </script>  
    
</body>

</html>