<!-- Image Carousel -->

<div style="display: none" id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000"><!-- data-ride in bootstrap.min.js -->

<!-- Carousel Content -->
<div class="carousel-inner">

    <div class="carousel-item active">
        <img src="img/carousel/1.jpg" alt="" class="w-100">
        
        <div class="carousel-caption">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 bg-custom d-lg-block py-3 px-0"> <!-- py-3 is bootstrap padding -->
                        <h1>Bootstrap</h1>
                        <div class="border-top border-primary w-50 mx-auto pb-3"></div><!-- mx-auto same as margin zero auto css -->
                        <h3 class="pb-3">Complete Website Design</h3><!-- pading botom bootstrap class -->
                        <a href="#" class="btn btn-danger btn-lg mr-2">View Demo</a><!-- refer to bootstrap documentation on different button types -->
                        <a href="#" class="btn btn-primary btn-lg ml-2">Start Now</a><!-- ml-2 bootstrap margin left 2px -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="carousel-item">
        <img src="img/carousel/2.jpg" alt="" class="w-100">

        <div class="carousel-caption">
            <div class="container">
                <div class="row justify-content-end text-right">
                    <div class="col-5 bg-custom d-lg-block py-3 px-0 pr-3 "> <!-- py-3 is bootstrap padding -->
                        <p class="lead pb-3 ">a mobile friendly html & css website design.</p>
                        <a href="#" class="btn btn-danger btn-lg">See Phone</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-item">
        <img src="img/carousel/3.jpg" alt="" class="w-100">

        <div class="carousel-caption">
            <div class="container">
                <div class="row justify-content-start text-left">
                    <div class="col-8 bg-custom d-lg-block py-3 px-0 pl-3"> <!-- py-3 is bootstrap padding -->
                        <h3 class="pb-3">Build For Tablets</h3><!-- pading botom bootstrap class -->
                        <p class="lead">THE BEST WEBSITES CAN BE SEEN JUST AS WELL ON ALL DEVICES.</p>
                        <a href="#" class="btn btn-primary btn-lg">Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- End Carousel Content -->


<!-- Previous & Next Buttons -->

<a href="#carousel" class="carousel-control-prev" role="button"
    data-slide="prev">
    <span class="fas fa-chevron-left fa-2x"></span><!-- get icons class from fontawsome website fa-2x makes it 2x size-->
</a>

<a href="#carousel" class="carousel-control-next" role="button"
    data-slide="next">
    <span class="fas fa-chevron-right fa-2x"></span><!-- get icons class from fontawsome website fa-2x makes it 2x size-->
</a>

<!-- End Previous & Next Buttons -->

</div>
<!-- End Image Carousel -->

<!-- Main Page Heading -->

<div class="col-12 text-center">
    <h1 class="text-dark">Supper Massive Black Hole</h1>
<div class="border-top border-primary w-25 mx-auto pb-3"></div><!-- mx-auto same as margin zero auto css -->
    <p class="lead">App List:</p>
</div>

<!-- Three Column Section -->

<div class="container mt-5">
<div class="row my-5">
    
    <div class="col-md-4 my-4">
        <div class="image_container mask">
            <img class="image" src="img/1.jpg" alt="" style="width:100%">
                <div class="middle">
                    <a href="timer/timer.html">Timer</a>
                </div>
        </div>
            <h4 class="my-4">"Gym Timer"</h4>
            <p>A stopwatch and interval timer with rounds and sets just like other tabata timers. 
               It just has more features, its add free and work on any device.</p>		
    </div>	


    <div class="col-md-4 my-4">
        <div class="image_container mask">
            <img class="image" src="img/2.jpg" alt="" style="width:100%">
                <div class="middle">
                    <a href="timer/logger.html">Logger</a>
                </div>
        </div>
            <h4 class="my-4">"PB Board"</h4>
            <p>Log your progress and see how your body transforms and share with your friends as a challange!!!
            </p>
    </div>

    <div class="col-md-4 my-4">
        <div class="image_container mask">
                <img class="image" src="img/zombie.jpg" alt="" style="width:100%">
                    <div class="middle">
                        <a href="zombie.html">Apocalypse</a>
                    </div>
        </div>
            <h4 class="my-4">"Zombie Apocalypse"</h4>
            <p>Be prepared or die!!!</p>
    </div>

</div>
</div>

<!-- End Three Column Section -->

<!-- Emoji Navbar First -->

<a class="navbar bg-primary sticky-top emoji" href="#emoji" role="button"
data-toggle="collapse"></a>

<!-- Start Fixed Background IMG -->

<div class="fixed-background">

<div class="row text-light py-5">
    <div class="col-12 text-center">

    <h1>Advance to the Next Level</h1>
    <h3 class="py-4">...see what's on the other side.</h3>
    <button type="button" data-toggle="modal" data-target="#modal1" 
        class="btn btn-danger btn-lg mr-2">Red Pill</button><!--data-target gets #in front to jump to that id  -->
    <button type="button" data-toggle="modal" data-target="#modal1" 
        class="btn btn-primary btn-lg ml-2">Blue Pill</button><!-- ml-2 bootstrap margin left 2px -->
    
    </div>
</div>

<div class="fixed-wrap">
    <div class="fixed"></div>
</div>
</div>

<!-- End Fixed Background IMG -->

<!-- Emoji Navbar Second -->

<a class="navbar bg-primary sticky-top emoji" href="#emoji" role="button"
data-toggle="collapse"><i class="fas fa-plug"></i></a>

<!-- #emoji>container>.row.col-sm-6.col-md-3*4>img.w-100 -->

<div class="collapse" id="emoji">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-3"><img src="img/emoji/panda.gif" alt="" class="w-100"></div>
        <div class="col-sm-6 col-md-3"><img src="img/emoji/chicken.gif" alt="" class="w-100"></div>
        <div class="col-sm-6 col-md-3"><img src="img/emoji/poo.gif" alt="" class="w-100"></div>
        <div class="col-sm-6 col-md-3"><img src="img/emoji/unicorn.gif" alt="" class="w-100"></div>
    </div>
</div>
</div>

<!-- Modal Popup -->

<div class="modal fade" id="modal1">
<div class="modal-dialog">
    <img src="img/emoji/poo.gif" alt="" class="w-100">
</div>
</div>

<!-- Start Two Column Section -->

<div class="container my-5">
<div class="row py-4">

    <div class="col-lg-4 mb-4 my-lg-auto">
        <h1 class="text-dark font-weight-bold mb-3"> We've been expecting you</h1>
        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis inventore distinctio architecto eum? 
            Odio enim nostrum obcaecati quos veniam optio expedita sed harum! 
            Aliquid unde iusto eligendi veniam, assumenda voluptas.</p>
        <a href="http://10.0.0.5/exersizes.html" target="" class="btn btn-outline-dark brn-lg">Exersizes</a>	
    </div>

    <div class="col-lg-8">
        <img src="img/code.jpg" alt="" class="w-100">
    </div>

</div>	
</div>

<!-- End Two Column Section -->
