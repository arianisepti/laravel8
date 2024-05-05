@extends('layouts.main')
     

    <!-- Header Start -->
    @section('header')
    <div class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
          <h1 class="display-5 animated fadeIn mb-4">
            Find A <span class="text-danger">Perfect Home</span> To Live With
            Your Family
          </h1>
          <p class="animated fadeIn mb-4 pb-2">
            Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
            Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
          </p>
          <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
            >Get Started</a
          >
        </div>
        <div class="col-md-6 animated fadeIn">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    <!-- Header End -->


    <!-- Category Start -->
    @section('category')
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="mb-3">Property Types</h1>
          <p>
            Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
            dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
            rebum vero dolor duo.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/PHC-Suite-Room-Bedroom.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Apartment</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/Rental-homes-in-Bali-Home-in-Ubud.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Villa</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/Tampak-Depan-Rumah-Minimalis-Sederhana.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Home</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/meeting1.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Office</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/Morpheus-Hotel-Macau-City-of-Dreams-Lobby-Zaha-Hadid-5abdb4293128340037fb6f66.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Building</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/property-2.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Townhouse</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/shop.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Shop</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <a
              class="cat-item d-block bg-light text-center rounded p-3"
              href=""
            >
              <div class="rounded p-4">
                <div class="icon mb-3">
                  <img
                    class="img-fluid"
                    src="img2/Photo/wp1846068.jpg"
                    alt="Icon"
                  />
                </div>
                <h6>Garage</h6>
                <span>123 Properties</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endsection
    <!-- Category End -->


    <!-- Call to Action Start -->
    @section('Call')
    <div class="container-xxl py-5">
      <div class="container">
        <div class="bg-light rounded p-3">
          <div
            class="bg-white rounded p-4"
            style="border: 1px dashed rgba(0, 185, 142, 0.3)"
          >
            <div class="row g-5 align-items-center">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <img
                  class="img-fluid rounded w-100"
                  src="img2/Person/call us.jpg"
                  alt=""
                />
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="mb-4">
                  <h1 class="mb-3">Contact With Our Certified Agent</h1>
                  <p>
                    Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem
                    kasd vero ipsum sit sit diam justo sed vero dolor duo.
                  </p>
                </div>
                <a href="" class="btn btn-primary py-3 px-4 me-2"
                  ><i class="fa fa-phone-alt me-2"></i>Make A Call</a
                >
                <a href="" class="btn btn-dark py-3 px-4"
                  ><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    <!-- Call to Action End -->


    <!-- Team Start -->
    @section('team')
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="mb-3">Property Agents</h1>
          <p>
            Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
            dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
            rebum vero dolor duo.
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded overflow-hidden">
              <div class="position-relative">
                <img
                  class="img-fluid"
                  src="img2/Person/person 1.jpg"
                  alt=""
                />
                <div
                  class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                >
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div class="text-center p-4 mt-3">
                <h5 class="fw-bold mb-0">Ariani</h5>
                <small>Designation</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded overflow-hidden">
              <div class="position-relative">
                <img
                  class="img-fluid"
                  src="img2/Person/Person 2.jpg"
                  alt=""
                />
                <div
                  class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                >
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div class="text-center p-4 mt-3">
                <h5 class="fw-bold mb-0">Faradila</h5>
                <small>Designation</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded overflow-hidden">
              <div class="position-relative">
                <img
                  class="img-fluid"
                  src="img2/Person/person 3.jpg"
                  alt=""
                />
                <div
                  class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                >
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div class="text-center p-4 mt-3">
                <h5 class="fw-bold mb-0">Betti</h5>
                <small>Designation</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="" alt="" />
                <div
                  class="position-absolute start-50 top-100 translate-middle d-flex align-items-center"
                >
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
              <div class="text-center p-4 mt-3">
                <h5 class="fw-bold mb-0">Ihfan</h5>
                <small>Designation</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    <!-- Team End -->


    