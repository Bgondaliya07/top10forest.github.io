<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">  
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>  

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1" class="active" ></li>
    <li data-target="#demo" data-slide-to="2" class="active"></li>
</ul>
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/f1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Costa Rica</h3>
            <p>Monteverde Cloud Forest</p>
        </div>   
    </div>
    <div class="carousel-item">
    <img src="img/f2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Australia</h3>
            <p>Daintree Rainforest</p>
        </div>   
    </div>
    <div class="carousel-item">
    <img src="img/f3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>Latin America</h3>
            <p>Amazon Rainforest</p>
        </div>   
    </div>
</div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
</div>

<hr>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us :)</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12">
                <img src="img/bgm4.jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-8 col-md-6 col-12">
            <h1>I'm Gondaliya Bhumir</h1>
                <p class="py-4"> Hello, Guys my self Gondaliya Bhumir. Currently i'm in Government Engineering college, Rajkot. My feild is Electronics and Communication. I'm in 6th semester now. My futuer goal is that i become a good fullstack developer and buy a big house for my mom. </p>
                <a href="about.php" class="btn btn-success"> Check More </a>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="my-5"></section>
    <div class="py-5">
        <h2 class="text-center">Our Services :)</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
    <img class="card-img-top" src="Amazon rainforest/Amazon/Amazon_CIAT.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Amazon Rainforest :)</h4>
                    <p class="card-text">South America's Amazon contains nearly a third of all the tropical rainforests left on Earth. Despite covering only around 1% of the planet's surface.</p>
                    <a href="amazon gallery.php" class="btn btn-primary">Gallery</a>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
    <img class="card-img-top" src="The Tongass/Tongass_National_Forest_4.jpg" alt="Card image" width="100%" height="320px!important">
                <div class="card-body">
                    <h4 class="card-title">Tongass National Forest :)</h4>
                    <p class="card-text">The Tongass is the nation's largest national forest, offers unique chances to view eagles, bears, spawning salmon, and the breath-taking vistas of “wild” Alaska.</p>
                    <a href="tongass gallery.php" class="btn btn-primary">Gallery</a>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
    <img class="card-img-top" src="Daintree/Main 5qc1fofE0sOlzi_1767x1080.jpg" alt="Card image" height="320px!important">
                <div class="card-body">
                    <h4 class="card-title">Daintree Rainforest :)</h4>
                    <p class="card-text">Daintree Rainforest is so special is because it has an unbelievably complex eco system, unlike any other rainforest In the world, making it a totally unique place.</p>
                    <a href="Daintree gallery.php" class="btn btn-primary">Gallery</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="text-center">
    <a href="services.php" class="btn btn-success"> Check More </a>
    </div>
    <br>
    <br>
</section>

<hr>

<section class="my-5">
<div class="py-5">
        <h2 class="text-center">Gallery :)</h2>
</div>

<div class="container-fluid">
        <div class="row"> 

        <div class="col-lg-4 col-md-4 col-12">
        <div class="img-fluid pb-4">
        <a href="amazon gallery.php" ><img src="Amazon rainforest/Amazon/Amazon_CIAT_(5).jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="90%" ></a>
<div class="carousel-caption">
        <h3>Amazon rainforest</h3>
        <p>The capital of the Brazilian state of Amazonas</p>
</div>
        </div>
</div>

<div class="col-lg-4 col-md-4 col-12">
        <a href="tongass gallery.php"><img src="The Tongass/Gray-wolf.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="90%"></a>
<div class="carousel-caption">
        <h3>WOLF</h3>
        <p>WOLVES ON ALASKAN ARCHIPELAGO</p>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
        <a href="Daintree gallery.php"><img src="Daintree/2020_TNQ_Daintree_WildCassowary.webp" class="img-thumbnail" alt="Cinque Terre" width="100%" height="90%" ></a>
<div class="carousel-caption">
        <h3>Mighty Jurassic </h3>
        <p>One of the iconic species of the Daintree is the endangered Cassowary</p>
</div>
</div>
        </div>
</div>
    <br>
    <br>
    <div class="text-center">
    <a href="Our gallery.php" class="btn btn-success"> Check More </a>
    </div>
    <br>
</section>
<hr>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us :)</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile No.</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>


<?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@4.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>