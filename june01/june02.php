<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/02fc670081.js" crossorigin="anonymous"></script>
  
  
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="nav" >
  <img src="1logo.png" alt="Logo" style="width:40px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#about">About Me</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#works">Works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio">Portfolio</a>
      </li>
      
    </ul>
  </div>
</nav>

  <style>
    body{
      align-items: center;
      justify-content: center;
    }
    .bgimage {
      height: 20vh;
      background: url('6.jpg');
      background-size: cover;
      position: relative;
      width: 50%;
      transform: translate(50%, -5%);
      border: #000000;
      border-radius: 5%;
      
    }

    /* text css above hero image*/
    .hero_title {
      font-size: xx-large;
  font-weight: bold;
  text-align: center;
    }

    .hero_desc {
      font-size: 100%;
  text-align: center;
  padding-left: 20px;
padding-right:30px;
    }

    .hero-text {
      position: sticky;
      width: 60%;
      transform: translate(35%, 0%);
      color: white;
      
  color: black;
  border: 3px solid #f1f1f1;
  padding: 20px;
    }

    .imageAboutPage {
      width: 100%;
    }

    .servicesText.card {
      height: 280px;
      cursor: pointer;
    }

    .servicesIcon {
      font-size: 36px;
      text-align: center;
      width: 100%;
    }

    .card-title {
      text-align: center;
    }

    .card:hover .servicesIcon {
      color: #008000;
    }

    .servicesText:hover {
      border: 1px solid #008000;
    }

    .navbarScroll.navbarDark {
      background-color: black;
    }

    .social-icons {
      font-size: 36px;
      cursor: pointer;
    }

    .fa-facebook:hover,
    .fa-instagram:hover,
    .fa-twitter:hover,
    .fa-linkedin:hover,
    .fa-twitch:hover {
      color: #008000;
    }

    .fab {
      color: #000000;
    }

    /* footer styling */
    #footer {
      background-color: #008000;
      text-align: center;
    }
    #home,
    #about,
    #works,
    #portfolio,
    #contact {
      margin-top: 4rem;
      margin-bottom: 2rem;
      padding-top: 4rem;
      background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
    }

    #contact {
      padding-bottom: 4rem;
    }
    .par ul li{
    display: inline-block;

    }
    .par ul{
      float: right;
    margin-right: 30px;
    }
    p{
        font-size: x-large;
    }
    li{
        font-size: x-large;

    }

    .card-body{
        background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
    }

  
a{
    width: 90px;
    height: 40px;
    border-radius: 4px;
    transition: ease-out 0.1s;
    font-size: 1rem;
    transform: translateY(4px);
    outline: none;

    font-weight: 600;
    cursor: pointer;
    color: #33ccff;
    margin-top: 3px;
    text-align:center;
    border: none;
    background-size: 900% 200%;

    moz-transition: all .2s ease-in-out;
    -o-transition: all 12s ease-in-out;
    -webkit-transition: all .1s ease-in-out;
    transition: all 22s ease-in-out;
}
a:hover{
    box-shadow: inset 300px 0 0 1  rgb(243, 243, 182);
    cursor: pointer;
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);

    background-position: 10% 90;
    moz-transition: all .2s ease-in-out;
    -o-transition: all 8s ease-in-out;
    -webkit-transition: all 2s ease-in-out;
    transition: all .1s ease-in-out;
}


@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}
.img img{
    width: 290px;
    height: 90px;
}






    
  </style>

</head>

<body id="home">

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Optionßææææææá 1: jQuery and Bootstrap Bundle (includes Popper) -->




  <div class="container text-warning justify-content-center align-bottom ">



    <section class="bgimage">

  <div class="row">
    <div class="col-sm">
    </div>
    
    
  </div>
</div>
    </div>
  </div>
  <div class="col-sm">
    <div class="container-fluid">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
            <h2 class="hero_title">Hi, This is Kaiser Bulagnir</h2>
            <p class="hero_desc">From Philippines</p>
      </div>
    </div>
    
    </section>

    <section id="about">

      <div class="container mt-4 pt-4">
        <h1 class="text-center">About Me</h1>
        <div class="row mt-4">
          <div class="col-lg-4">
          </div>
    <img src="images/about.jpeg" class="imageAboutPage" alt="">

          <div class="col-mt-8">
          <p> I'm Kai, an ACT/IT student at Datamex College of Saint Adeline Meycauayan who is compatible in any works, like, I am running this year for Sk councilor in our place and in a few days
            I do programming on making login form, creating portfolio, etc., I do microsoft office too so that I balance myself in my chosen career
            </p>  
          
            <div class="row mt-3">
              <div class="col-mt-6">
                <ul>
                  <li>Name: Bulagnir Kaiser</li>
                  <li>Age: 21</li>
                  <li>Positionh: OJT </li>

                </ul>
              </div>
              
              </div>
            </div>
            <div class="col-mt-8">
            <p> I have over 3 years of programming experience specializing in designing. Besides, I created and put something in my portfolio to build and I can do some skills for​ this company.
            </p>
            
            </div>
          </div>
        </div>
    </section>

    <section id="works">
      <div class="container mt-3">
        <h1 class="text-center">Works</h1>
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div class="card">
              <img class="card-img-top" src="asd.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">OJT</h4>
                
                <div class="text-center">
                  <a href="june01.php" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="login.JPG" alt="Card image" style="width:100%" height="196px">
              <div class="card-body">
                <h4 class="card-title">Login</h4>
                <div class="text-center">
                  <a href="test.php" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="itinerary.JPG" alt="Card image" style="width:100%" height="196px">
              <div class="card-body">
                <h4 class="card-title">Figma Designs</h4>
                <div class="text-center">
                  <a href="https://www.figma.com/file/cDkZZpY5vdnN8EKNwPMRgH/Day-1-(Copy)?type=design&t=BhubxFixJOo7PvXC-0" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Messaging Service</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="Login.sln" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Twitter Clone</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Blog App</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- const header = document.querySelector('.navbar');

window.onscroll = function() {
    var top = window.scrollY;
    if(top >=100) {
        header.classList.add('navbarDark');
    }
    else {
        header.classList.remove('navbarDark');
    }
} -->


    <section id="portfolio">
      <div class="container mt-3">
        <h1 class="text-center">Portfolio</h1>
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div class="card">
              <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">YouTube Clone</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Quiz App</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage3.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Product Landing Page</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Messaging Service</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Twitter Clone</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
              <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Blog App</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                  <a href="#" class="btn btn-success">Link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="contact">
      <div class="container mt-3 contactContent">
        <h1 class="text-center">Contact Me</h1>

        <div class="center">
        <a href="#"><span data-attr="Buy">Buy</span><span data-attr="Now">Now</span></a>
    </div>
          
      </div>
    </section>


    <footer id="footer">
      <div class="container-fluid">
        <!-- social media icons -->
        <div class="social-icons mt-4">
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a>
        </div>
      </div>
    </footer>





</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>