<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://kit.fontawesome.com/9fd1a302e2.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="fixed-top" id="header">
        <nav class="navbar">
            <div class="container-fluid text-secondary-emphasis">
              <a class="navbar-brand"><strong>COFFEELAND</strong>
                <i class="fa-solid fa-mug-hot"></i>
              </a>
              <ul class="nav nav-underline justify-content-end">
                <li class="nav-item">
                  <a class="nav-link text-secondary" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="./views/menu.html">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="./views/booking.html">Booking</a>
                </li>
            </div>
        </nav>
    </header>
    <main>
        <section class="container container-fluid" id="sectionAboutUs">
          <div class="btn-group-vertical">
            <a href="#sectionAboutUs" class="btn btn-light active" aria-current="page">About us</a>
            <a href="#sectionSchedule" class="btn btn-light">Schedule</a>
            <a href="#sectionLocation" class="btn btn-light">Location</a>
          </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./assets/img/threecups.jpg" class="d-block w-100 carrouselImg" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/img/coffeebean.jpg" class="d-block w-100 carrouselImg" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/coffeecup.jpg" class="d-block w-100 carrouselImg" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <article class="article" id="aboutUs">
                <i><h3>Happiness comes in a cup</h3></i><br>
                <p>The latest tendency in Colombian coffee shops!</p>
            </article>
        </section>
        <section class="container2 container-fluid" id="sectionSchedule">
            <article class="article" id="articleSchedule">
                <p><h2 id="schedules">Schedule <i class="fa-regular fa-clock"></i></h2></p>
            </article>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Weekdays
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Monday to Friday from 8:00 a.m to 8:00 p.m</strong>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Weekends
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Saturdays and Sundays from 10:00 a.m to 8:00 p.m</strong>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Holidays
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Holidays from 12:00 p.m to 5:00 p.m</strong>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section class="container3" id="sectionLocation">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.621732705623!2d-74.01406142618309!3d4.661349541999869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f908c00027a2d%3A0x6c9e3d0a78a149c!2sLa%20Calera!5e0!3m2!1ses!2sco!4v1682464968589!5m2!1ses!2sco" class="rounded" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <article class="article" id="location">
            <p><h2 class="locationText">Location</h2><br><h3 class="locationText">La Calera, Bogotá <i class="fa-solid fa-location-dot"></i></h3></p>
          </article>
        </section>
    </main>
    <footer class="footer container-fluid">
      <div class="footerItems"><i class="fa-regular fa-envelope"></i> cflbog@gmail.com 
      </div>
      <div class="footerItems"><i class="fa-solid fa-phone"></i> 3108935224
      </div>
      <div class="footerItems"><i class="fa-brands fa-facebook-f"></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-instagram"></i>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
    <script src="./scripts/app.js"></script>
  </body>
</html>