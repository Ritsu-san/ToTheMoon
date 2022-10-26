<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <script src="{{url('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="icon" type="image/x-icon" href="images/sample-logo.png" />
  </head>
  <body>
    @if (Session::has('success'))
             {{ Session::get('success') }}
             @endif
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
        <div class="container">
          <a class="navbar-brand text-warning" href="#"
            ><img
              src="images/sample-logo.png"
              alt=""
              width="30"
              height="30"
              class="d-inline-block align-text-top"
            />
            ToTheMoon</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex align-items-end ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Destinations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              @if (Auth::check())
              <li class="nav-item">
              <a class="nav-link" href="{{ route('signout') }}">Logout</a>
              </li>
              @else
              <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              @endif  
                
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!--<section
        class="d-flex align-items-center fixed-bg-img"
        id="main-bg"
      ></section>-->

    <!--Background image with text-->

    <section class="text-light py-5 align-items-center d-flex" id="main-bg">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <h1 class="my-4 fs-1">
              Welcome to <span class="text-warning">ToTheMoon</span>
            </h1>
            <p>
              Welcome to our services where we will provide you a fun nighttime
              by showing interesting places around the world.
            </p>
            <!--
                <a href="#" class="text-light text-decoration-none"
                ><img
                  src="images/play.png"
                  alt=""
                  class="play-btn img-responsive"
                />watch</a>
              -->
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container text-light">
        <div class="row">
          <div class="col-md-12">
            <div class="main-search p-4">
              <div class="row">
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Destination</label>
                    <div class="form-field mb-4">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search Place"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Check-in date</label>
                    <div class="form-field mb-4">
                      <input
                        type="date"
                        class="form-control"
                        placeholder="Search Place"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg align-items-end">
                  <div class="form-group">
                    <label for="#">Check-out date</label>
                    <div class="form-field mb-4">
                      <input
                        type="date"
                        class="form-control"
                        placeholder="Search Place"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg align-self-end">
                  <div class="form-group">
                    <div class="form-field mb-4">
                      <input
                        type="submit"
                        value="Search"
                        class="btn btn-primary w-100"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-light padded-section">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 ps-md-5 order-md-last">
            <h2>It's time to start an adventure</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
              soluta atque dolores sit praesentium obcaecati eum. Sequi facilis
              fuga nam reprehenderit eos ut, totam doloribus nostrum adipisci ex
              ab expedita a aliquam in possimus rem, ducimus, consequatur sint
              quibusdam iste cupiditate tempore sed eaque necessitatibus? Atque
              nobis accusamus magni voluptatem tenetur ipsum nostrum voluptate
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
              quibusdam sequi qui accusamus cumque ipsa. Laborum, esse modi. Eos
              explicabo libero magni dolorem at temporibus ut enim, ullam
              nesciunt possimus.
            </p>
            <a href="#" class="btn btn-primary py-2 px-3 my-2"
              >Search Destination</a
            >
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6 mt-4">
                <h3 class="mb-3">Activities</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                  aspernatur eius voluptatem laudantium fugit tempora.
                </p>
              </div>
              <div class="col-md-6 mt-4">
                <h3 class="mb-3">Travel Arrangements</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                  aspernatur eius voluptatem laudantium fugit tempora.
                </p>
              </div>
              <div class="col-md-6 mt-4">
                <h3 class="mb-3">Private Guide</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                  aspernatur eius voluptatem laudantium fugit tempora.
                </p>
              </div>
              <div class="col-md-6 mt-4">
                <h3 class="mb-3">Location Manager</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                  aspernatur eius voluptatem laudantium fugit tempora.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-light padded-section alter-color-section">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6">
            <div class="d-flex align-self-stretch" id="about-img">
              <img src="images/sample-yokohama.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-6 ps-md-5 py-5">
            <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
            <p class="mb-4">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
              quas soluta suscipit, dicta nihil assumenda libero possimus at
              obcaecati eligendi. Ratione, aliquam commodi! Enim eos aliquid
              eligendi laborum similique delectus, incidunt deleniti nostrum
              culpa? Esse!
            </p>
            <div class="row">
              <div class="col-md-4 justify-content-center">
                <div class="text-center mb-4">
                  <strong
                    class="text-success"
                    data-number="500"
                    id="strong-number"
                    >500</strong
                  >
                  <h5 style="display: block">Successful Tours</h5>
                </div>
              </div>
              <div class="col-md-4 justify-content-center">
                <div class="text-center mb-4">
                  <strong
                    class="text-success"
                    data-number="10000"
                    id="strong-number"
                    >10,000</strong
                  >
                  <h5 style="display: block">Happy Customers</h5>
                </div>
              </div>
              <div class="col-md-4 justify-content-center">
                <div class="text-center mb-4">
                  <strong
                    class="text-success"
                    data-number="100"
                    id="strong-number"
                    >100</strong
                  >
                  <h5 style="display: block">Unique Places</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-light padded-section">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-12 text-center">
            <h2 class="mb-4">Suggestions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="suggestion-selection">
              <a
                href="#"
                class="img"
                style="
                  background-image: url(images/sample-place1-edinburgh.png);
                "
              >
                <div class="text text-light">
                  <h3>Edinburgh</h3>
                  <span>10 tours</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="suggestion-selection">
              <div class="suggestion-selection">
                <a
                  href="#"
                  class="img"
                  style="background-image: url(images/sample-place2-moscow.png)"
                >
                  <div class="text text-light">
                    <h3>Moscow</h3>
                    <span>3 tours</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="suggestion-selection">
              <div class="suggestion-selection">
                <a
                  href="#"
                  class="img"
                  style="
                    background-image: url(images/sample-place3-intramuros.png);
                  "
                >
                  <div class="text text-light">
                    <h3>Intramuros</h3>
                    <span>20 tours</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="suggestion-selection">
              <div class="suggestion-selection">
                <a
                  href="#"
                  class="img"
                  style="background-image: url(images/sample-place4-seoul.png)"
                >
                  <div class="text text-light">
                    <h3>Seoul</h3>
                    <span>13 tours</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="text-dark" style="padding-bottom: 7em">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 text-center">
            <h2 class="mb-4 text-light">Destinations</h2>
          </div>
        </div>
        <div class="row">
          
            @foreach ($destination as $list)
            <div class="col-md-4">
            <div class="home-destination-items">
              <a
                href="#"
                class="img"
                style="background-image: url(public/uploads/{{$list->mainimg}})"
              ></a>
              <div class="text p-4 shadow">
                <span class="price">${{ $list->price }}/person</span>
                <span class="days">10 day tour</span>
                <h3><a href="#" class="text-dark">{{ $list->destination }}</a></h3>
                <p class="location">{{ $list->destination }}</p>
              </div>
            </div>
            </div>
            @endforeach
          
        </div>
      </div>
    </section>

    <section class="text-light padded-section alter-color-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-7 text-center">
            <h2 class="mb-4">Tourist Feedback</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 offset-1 feedback mb-5">
            <p style="display: block">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio ducimus explicabo praesentium, commodi aliquid
              reiciendis rem iusto esse quos ipsa sequi voluptatibus, natus
              maxime placeat, at odio quia dolorum a?
            </p>
            <img src="images/doctor.png" alt="" class="cust-img" />
            <p class="cust-details">
              <b>Walter</b><br />
              Founder of abc
            </p>
          </div>
          <div class="col-md-5 offset-1 feedback mb-5">
            <p style="display: block">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio ducimus explicabo praesentium, commodi aliquid
              reiciendis rem iusto esse quos ipsa sequi voluptatibus, natus
              maxime placeat, at odio quia dolorum a?
            </p>
            <img src="images/doctor.png" alt="" class="cust-img" />
            <p class="cust-details">
              <b>Walter</b><br />
              Founder of abc
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 offset-1 feedback mb-5">
            <p style="display: block">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio ducimus explicabo praesentium, commodi aliquid
              reiciendis rem iusto esse quos ipsa sequi voluptatibus, natus
              maxime placeat, at odio quia dolorum a?
            </p>
            <img src="images/doctor.png" alt="" class="cust-img" />
            <p class="cust-details">
              <b>Walter</b><br />
              Founder of abc
            </p>
          </div>
          <div class="col-md-5 offset-1 feedback mb-5">
            <p style="display: block">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio ducimus explicabo praesentium, commodi aliquid
              reiciendis rem iusto esse quos ipsa sequi voluptatibus, natus
              maxime placeat, at odio quia dolorum a?
            </p>
            <img src="images/doctor.png" alt="" class="cust-img" />
            <p class="cust-details">
              <b>Walter</b><br />
              Founder of abc
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--
      <div class="container">
        <div class="card border-0 shadow my-5">
          <div class="card-body py-5">
            <h1 class="fw-light">Fixed Full Page Background Image</h1>
            <p class="lead">
              In this snippet, the background image is fixed to the body
              element. Content on the page will scroll, but the image will
              remain in a fixed position!
            </p>
            <p class="lead">Scroll down...</p>
            <div style="height: 700px"></div>
            <p class="lead mb-0">You've reached the end!</p>
          </div>
        </div>
      </div>-->

    <footer class="text-light">
      <div class="container">
        <div class="row">
          <div class="col-md mb-4 px-0">
            <h5 class="mb-4">Tours</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
              aliquam fugiat consequatur hic tempore eos praesentium excepturi
              optio, culpa mollitia.
            </p>
          </div>
          <div class="col-md mb-4 ms-md-5 px-0">
            <h5 class="mb-4">Information</h5>
            <ul class="unstyle-list">
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >FAQ</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Booking Conditions</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Privacy and Policy</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Refund Policy</a
                >
              </li>
            </ul>
          </div>
          <div class="col-md mb-4 ms-md-5 px-0">
            <h5 class="mb-4">Experience</h5>
            <ul class="unstyle-list">
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Nightwalk</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Hotel and Restaurant</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Beach</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="py-2 d-block"
                  style="color: rgba(255, 255, 255, 0.5)"
                  >Camping</a
                >
              </li>
            </ul>
          </div>
          <div class="col-md mb-4 ms-md-5 px-0">
            <h5 class="mb-4">Have Questions?</h5>
            <ul class="unstyle-list">
              <li>
                <span class="footer-span py-2"
                  >101 Fake St. Marianas Trench, Philippines</span
                >
              </li>
              <li>
                <a href="#">
                  <span class="footer-span py-2">+6359 123 1232</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="footer-span py-2">what@fake.com</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr />
      <p style="margin-bottom: 0; padding-bottom: 20px; text-align: center">
        Copyright 2022
      </p>
    </footer>
  </body>
</html>
