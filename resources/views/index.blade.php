@extends('template.app')
@section('title' , 'Home')
@section('content')
@include('includes.book')

     <section class="ftco-section-2">
      <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/about-2.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              <span class="subheading">About Tasty</span>
              <h3 class="heading">Our chef cooks the most delicious food for you</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('includes.dishes')
    <section class="ftco-section parallax-img" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Our Specialties</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container special-dish">
        <div class="row d-flex no-gutters">
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(images/dish-3.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Beef Steak</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <span class="price">from $10.00</span>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-first" style="background-image: url(images/dish-4.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Beef Ribs Steak</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <span class="price">from $10.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(images/dish-5.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Chopsuey</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <span class="price">from $10.00</span>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-first" style="background-image: url(images/dish-6.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Roasted Chieken</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <span class="price">from $10.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Guests Says</span>
            <h2>Our Satisfied Guests says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel owl-carousel ftco-owl">
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel1 owl-carousel ftco-owl">
            <div class="item">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left read">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="100">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left read">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_7.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left read">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_8.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left read">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_9.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left read">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection
