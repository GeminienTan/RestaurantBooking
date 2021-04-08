<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nourriture Savoureuse</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font: 400 15px Lato, sans-serif;
                line-height: 1.8;
            }
            .jumbotron {
                margin-bottom:0;
                background-color: #f4511e;
                color: #fff;
                padding: 100px 25px;
                font-family: Montserrat, sans-serif;
                background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://i2.wp.com/penangfoodie.com/wp-content/uploads/2019/12/Untitled-design-9-2.png?fit=1200%2C628&ssl=1);
                background-size: cover;
            }
            .container-fluid {
                padding: 60px 50px;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail img {
                width: 250px;
                height:200px;
                margin-bottom: 10px;
            }
            .carousel-control.right, .carousel-control.left {
                background-image: none;
                color: #000;
            }
            .carousel-indicators li {
                border-color: grey;
            }
            .carousel-indicators li.active {
                background-color: #000;
            }
            .item h4 {
                font-size: 19px;
                line-height: 1.375em;
                font-weight: 400;
                font-style: italic;
                margin: 70px 0;
            }
            .item span {
                font-style: normal;
            }
            .panel {
                border: 1px solid #000; 
                border-radius:0 !important;
                transition: box-shadow 0.5s;
            }
            .panel:hover {
                box-shadow: 5px 0px 40px rgba(0,0,0, .2);
            }
            .panel-footer .btn:hover {
                border: 1px solid #f4511e;
                background-color: #fff !important;
                color: #f4511e;
            }
            .panel-heading {
                color: #fff !important;
                background-color: #f4511e !important;
                padding: 25px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .navbar {
                margin-bottom: 0;
                background-color: #000;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
            }
            .carousel-inner {
                overflow: visible;
            }
            .menu-tab #tabs{
                background-color: #948682;
                color: #eee;
            }
            .menu-tab #tabs h6.section-title{
                color: #eee;
            }
            .menu-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
                color: #c9c2c0;
                background-color: #6a5f5b;
                border-color: transparent transparent #f3f3f3;
            }
            .menu-tab .nav-link {
                border: 1px solid #000;
                color: #2b2625;
                font-size: 16px;
                font-weight: 600;
            }
            .menu-tab .nav-link:hover {
                background-color: #8a7b76;
            }
            .menu-tab thead{
                color: #c9c2c0;
                background-color: #4a4240;
                border-color: transparent transparent #f3f3f3;
            }
            .menu-tab a{
                text-decoration: none;
                color: #333;
                font-weight: 600;
            }
            .menu-tab {
                margin-bottom:0;
                background-color: #f4511e;
                padding: 100px 25px;
                background-image: linear-gradient(to bottom, rgba(255,255,255,0.5) 0%,rgba(255,255,255,0.8) 100%), url(https://t4.ftcdn.net/jpg/03/17/07/41/360_F_317074154_SWrR7ihvofoFUwNxbd0z5fF8qh707x3Q.jpg);
                background-size: cover;
            }
            
            #gallery {
                margin-bottom:0;
                background-color: #E5E8E1;
            }

            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                opacity: 0;
                transform: translateY(70%);
                } 
                100% {
                opacity: 1;
                transform: translateY(0%);
                }
            }
            @-webkit-keyframes slide {
                0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
                } 
                100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
                }
            }
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                text-align: center;
                margin: 25px 0;
                }
                .btn-lg {
                width: 100%;
                margin-bottom: 35px;
                }
            }
            @media screen and (max-width: 480px) {
                .logo {
                font-size: 150px;
                }
            }
 
        </style>
    </head>
    <body class="antialiased" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >
        <!--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>-->

        <div class="jumbotron" style="">
        <h1 class="display-4">Nourriture Savoureuse</h1>
        <p class="lead">All happiness depends on a leisurely meal. You don't need a silver fork to eat good food. </p><p>Coffee is always a good idea. When life gives you lemons, trade them for coffee.</p>
        <hr class="bg-light">
        <p>Operation Hour: 11am - 10pm Everyday excepts Monday</p>
        <p class="lead">
            <a class="btn btn-light btn-lg" href="#" role="button">Log in to reserve a table</a>
        </p>
        </div>
        <!-- Container (About Section) -->
        <div id="about" class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-sm-8 ">
            <h2>About Our Restaurant</h2><br>
            <h4>The Nourriture is located at Campbell Street. Tucked in England House, We're a small coffee house with an English cottage ambience. Serving aesthetic-looking food and drinks, slow down your day and unwind in this cozy cottage.</h4>
            </div>
            <div class="col-sm-4 ">
            <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/warm_welcome.jpg" alt="Warm welcome" class="img-fluid">
            </div>
        </div>

        </div>
         <!-- Container (Services Section) -->
         <div id="services" class="container-fluid text-center">
        <h2>What we offer</h2>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
            <h4>FOOD</h4>
            <span class="text-warning"><i class="material-icons"style="font-size: 60px;">dinner_dining</i></span>
            <p>Spaghetti | Burger | Western </p>
            </div>
            <div class="col-sm-4">
            <h4>BEVERAGE</h4>
            <span class="text-danger"><i class="material-icons"style="font-size: 60px;">coffee</i></span>
            <p> Coffee | Chocolate | Tea </p>
            </div>
            <div class="col-sm-4">
            
            <h4>DESSERT</h4>
            <span class="text-info"><i class="material-icons"style="font-size: 60px;">icecream</i></span>
            <p> Waffles | Ice Cream | Soufflé </p>
            </div>
        </div>
        </div>

        <h2 class="text-center">Menu</h2>  
        <section id="tabs" class="menu-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-food-tab" data-toggle="tab" href="#nav-food" role="tab" aria-controls="nav-food" aria-selected="true">Food</a>
                                <a class="nav-item nav-link" id="nav-beverage-tab" data-toggle="tab" href="#nav-beverage" role="tab" aria-controls="nav-beverage" aria-selected="false">Beverage</a>
                                <a class="nav-item nav-link" id="nav-dessert-tab" data-toggle="tab" href="#nav-dessert" role="tab" aria-controls="nav-dessert" aria-selected="false">Dessert</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">
                                <table class="table" cellspacing="0" width="80%">
                                    <thead>
                                        <tr>
                                            <th>Food</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($items as $item)
                                        @if($item->category == "food")
                                        <tr>
                                            <td><b>{{$item->name}}</b></td>
                                            <td>{{$item->description}}</td>
                                            <td><i>{{$item->price}}</i></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-beverage" role="tabpanel" aria-labelledby="nav-beverage-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Beverage</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($items as $item)
                                        @if($item->category == "beverage")
                                        <tr>
                                            <td><b>{{$item->name}}</b></td>
                                            <td>{{$item->description}}</td>
                                            <td><i>{{$item->price}}</i></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Dessert</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($items as $item)
                                        @if($item->category == "dessert")
                                        <tr>
                                            <td><b>{{$item->name}}</b></td>
                                            <td>{{$item->description}}</td>
                                            <td><i>{{$item->price}}</i></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Container (Gallery Section) -->
        <div id="gallery" class="container-fluid text-center">
        <h2>Gallery</h2><br>
        <div class="row text-center">
            @foreach ($items as $item)
                @if($item->category == "food" || $item->category == "dessert")
            <div class="col-sm-3">
            <div class="thumbnail">
                <img src="{{url($item->photo)}}" alt="{{$item->name}}">
                <p><strong>{{$item->name}}</strong></p>
            </div>
            </div>
                @endif
            @endforeach
        </div><br>
        </div>

        
        
        <h2>What our customers say</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        </div>

        <!-- Image of location/map -->
        <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">


        <script>
        $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        
        $(window).scroll(function() {
            $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                $(this).addClass("slide");
                }
            });
        });
        })
        $(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
        </script>

    </body>
</html>
