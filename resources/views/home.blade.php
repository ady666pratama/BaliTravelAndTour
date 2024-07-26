
@extends('layout.hf')
@section('content')
    <!------------------------------------------------------------------------------------------------------------------>
    <div class="container-fluid bg-light">
        <!------------------------------------------------------------------------------------------------------------------->
      <div class="row d-flex justify-content-center">
            <div class="position-absolute w-100 vh-100 z-2 text-center bg-overlay bg-dark opacity-25 p-0"></div>
            <div class="position-absolute w-100 vh-100 z-3 text-center d-flex align-items-center p-0">
                <div data-aos="fade-up" class="container w-auto rounded-4">
                    <img class="opacity-50" src="{{asset('img/logo.png')}}" style="width: 400px; height: 400px;" alt="Seni Dan Budaya">
                    <h1>Bali Tour and Travel</h1>
                    <h2>The New Journey For Your Life</h2>
                </div>
            </div>
            <div class="container"></div>
                <img class=" vh-100 w-100 object-fit-cover p-0" src="{{asset('img/pemandangan.jpeg')}}" alt="">
        </div>

        <!------------------------------------------------------------------------------------------------------------------->
        <div class="row d-flex justify-content-center" style="background-color: #ffffff;">
            <h1 style="background: linear-gradient(to right, #30CFD0 0%, #330867 100%); background-clip: text; color: transparent; padding:20px 0 0 0; text-align: center">PARIWISATA BALI</h1>
            <div class="card-group p-2 text-center align-content-center">
                <div data-aos="flip-left" class="card" style="padding:10px 10px 10px 10px; border: 0;">
                <img src="{{asset('img/barong.jpg')}}" class="card-img-top" alt="Seni Dan Budaya">
                    <h5 class="card-title z-2">Seni dan Budaya</h5>
                </div>
                <div data-aos="flip-left" class="card"  style="padding:10px 10px 10px 10px; border: 0;">
                <img src="{{asset('img/Desa Wisata.jpg')}}" class="card-img-top" alt="Objek Wisata">
                    <h5 class="card-title">Desa Wisata</h5>
                </div>
                <div data-aos="flip-left" class="card"  style="padding:10px 10px 10px 10px; border: 0;">
                <img src="{{asset('img/pemandangan.jpeg')}}" class="card-img-top" alt="pemandangan">
                    <h5 class="card-title">Wisata Alam</h5>
                </div>
                <div data-aos="flip-left" class="card"  style="padding:10px 10px 10px 10px; border: 0;">
                <img src="{{asset('img/accommodation.jpg')}}" class="card-img-top" alt="accommodation">
                    <h5 class="card-title">Accommodation</h5>
                </div>
            </div>
         </div>
        <!------------------------------------------------------------------------------------------------------------------->
        <hr class="w-50 mx-auto border-dark-subtle">
        <div class="container">
            <h1 style="background: linear-gradient(to right, #30CFD0 0%, #330867 100%); background-clip: text; color: transparent; text-align: center">What's New In Bali</h1>
            <div class="row">
                <div data-aos="fade-up" class="col-md-auto">
                    <div data-aos-anchor-placement="center-bottom">
                        <img class="object-fit-cover p-0" width="400" height="400" src="{{asset('img/travel.jpeg')}}" alt="">
                    </div>
                </div>
                <div data-aos="fade-up" class="col-md ">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo voluptatem numquam cum corporis culpa odio facilis quaerat. Eum nostrum magnam doloremque tempora consectetur, id amet animi in vitae molestias cumque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis unde aperiam explicabo pariatur laborum quis assumenda, esse est nam, nihil sint dolorem. At autem beatae nulla vitae fugiat repudiandae vero?</p>
                </div>
            </div>
        </div>
        <hr class="w-50 m-5 mx-auto border-dark-subtle">
        <div class="container">
            <div class="row m-5">
                <div data-aos="fade-up" class="col-md">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo voluptatem numquam cum corporis culpa odio facilis quaerat. Eum nostrum magnam doloremque tempora consectetur, id amet animi in vitae molestias cumque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis unde aperiam explicabo pariatur laborum quis assumenda, esse est nam, nihil sint dolorem. At autem beatae nulla vitae fugiat repudiandae vero?</p>
                </div>
                <div data-aos="fade-up" class="col-md-auto">
                    <div data-aos-anchor-placement="center-bottom">
                        <img class="object-fit-cover p-0" width="400" height="400" src="{{asset('img/barong.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------------------------------->

        <!------------------------------------------------------------------------------------------------------------------->
        <h1 style="background: linear-gradient(to right, #30CFD0 0%, #330867 100%); background-clip: text; color: transparent; padding:20px 0 0 0; text-align: center">PAKET TOUR DAN TRAVEL</h1>

        <div class="row row-cols-3 g-4">
            <div class="col">
              <div data-aos="fade-up" class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill">
                <div class="card-body">
                    <div class="row">
                        <strong>
                            <ul class="nav navbar-nav justify-content-center">
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                                    </svg>
                                    HOT
                                </li>
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                      </svg>
                                    Family
                                </li>
                            </ul>
                        </strong>
                        </div>
                  <h5 class="card-title">Traveling With Family</h5>
                  <div class="row">
                      <strong>
                          Rp 500,000/pax
                      </strong>
                  </div>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div data-aos="fade-up" class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" alt="Palm Springs Road">
                <div class="card-body">
                    <div class="row">
                        <strong>
                            <ul class="nav navbar-nav justify-content-center">
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                                    </svg>
                                    HOT
                                </li>
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    Populer
                                </li>
                            </ul>
                        </strong>
                        </div>
                  <h5 class="card-title">Bali Sosialmedia Tour: The Most Famous Spots</h5>
                  <div class="row">
                      <strong>
                          Rp 500,000/pax
                      </strong>
                  </div>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div data-aos="fade-up" class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" alt="Los Angeles Skyscrapers">
                <div class="card-body">
                    <div class="row">
                        <strong>
                            <ul class="nav navbar-nav justify-content-center">
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                                    </svg>
                                    HOT
                                </li>
                            </ul>
                        </strong>
                        </div>
                  <h5 class="card-title">Nusa Penida Snorkeling Adventure</h5>
                  <div class="row">
                      <strong>
                          Rp 500,000/pax
                      </strong>
                  </div>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                              <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                          </svg>
                      </span>
                    </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div data-aos="fade-up" class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" alt="Skyscrapers">
                <div class="card-body">
                    <div class="row">
                        <strong>
                            <ul class="nav navbar-nav justify-content-center">
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    Populer
                                </li>
                            </ul>
                        </strong>
                        </div>
                  <h5 class="card-title">Bali Secret Waterfall Tour</h5>
                  <div class="row">
                      <strong>
                          Rp 500,000/pax
                      </strong>
                  </div>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div data-aos="fade-up" class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top" alt="Skyscrapers">
                <div class="card-body">
                    <div class="row">
                        <strong>
                            <ul class="nav navbar-nav justify-content-center">
                                <li class="nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    Populer
                                </li>
                            </ul>
                        </strong>
                        </div>
                  <h5 class="card-title">Bali Elephant Bath & Breakfast Day Tour</h5>
                  <div class="row">
                      <strong>
                          Rp 500,000/pax
                      </strong>
                  </div>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div data-aos="fade-up" class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/050.webp" class="card-img-top" alt="Skyscrapers">
                <div class="card-body">
                    <div class="row">
                    <strong>
                        <ul class="nav navbar-nav justify-content-center">
                            <li class="nav-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                    <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                                </svg>
                                HOT
                            </li>
                            <li class="nav-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                Populer
                            </li>
                        </ul>
                    </strong>
                    </div>
                  <h5 class="card-title">Bali Unesco World Heritage Sites Tour</h5>
                  <div class="row">
                      <strong>
                          Rp 500,000/pax
                      </strong>
                  </div>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        <!------------------------------------------------------------------------------------------------------------------->
            <div class="row d-flex justify-content-center">
                <!------------------------------------------------------------------------------------------------------------->
                    <!-- Testimonial 3 - Bootstrap Brain Component -->
                    <section class="bg-light py-5 py-xl-8">
                      <div class="container">
                        <div class="row justify-content-md-center">
                          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                            <h2 class="fs-6 text-secondary mb-2 text-uppercase text-center">Happy Customers</h2>
                            <p class="display-5 mb-4 mb-md-5 text-center">We deliver what we promise. See what clients are expressing about us.</p>
                            <hr class="w-50 mx-auto mb-xl-9 border-dark-subtle">
                          </div>
                        </div>
                      </div>

                      <div  class="container overflow-hidden">
                        <div class="row gy-4 gy-md-0 gx-xxl-5">
                          <div  data-aos="fade-up" class="col-12 col-md-4">
                            <div class="card border-0 border-bottom border-primary shadow-sm">
                              <div class="card-body p-4 p-xxl-5">
                                <figure>
                                  <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="./assets/img/testimonial-img-1.jpg" alt="Luna John">
                                  <figcaption>
                                    <div  data-aos="fade-up" class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                                    <blockquote class="bsb-blockquote-icon mb-4">We were so impressed with the work they did for us. They were able to take our vision and turn it into a reality, and they did it all on time and within budget. We would highly recommend them to anyone looking for a reliable partner.</blockquote>
                                    <h4 class="mb-2">Luna John</h4>
                                    <h5 class="fs-6 text-secondary mb-0">UX Designer</h5>
                                  </figcaption>
                                </figure>
                              </div>
                            </div>
                          </div>
                          <div  data-aos="fade-up" class="col-12 col-md-4">
                            <div class="card border-0 border-bottom border-primary shadow-sm">
                              <div class="card-body p-4 p-xxl-5">
                                <figure>
                                  <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="./assets/img/testimonial-img-2.jpg" alt="Mark Smith">
                                  <figcaption>
                                    <div class="bsb-ratings text-warning mb-3" data-bsb-star="4" data-bsb-star-off="1"></div>
                                    <blockquote class="bsb-blockquote-icon mb-4">We were looking for a company that could help us develop a new website that was both visually appealing and user-friendly. We are so happy with the results, and we would highly recommend them to anyone looking for a new website.</blockquote>
                                    <h4 class="mb-2">Mark Smith</h4>
                                    <h5 class="fs-6 text-secondary mb-0">Marketing Specialist</h5>
                                  </figcaption>
                                </figure>
                              </div>
                            </div>
                          </div>
                          <div  data-aos="fade-up" class="col-12 col-md-4">
                            <div class="card border-0 border-bottom border-primary shadow-sm">
                              <div class="card-body p-4 p-xxl-5">
                                <figure>
                                  <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="./assets/img/testimonial-img-4.jpg" alt="Luke Reeves">
                                  <figcaption>
                                    <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                                    <blockquote class="bsb-blockquote-icon mb-4">We were looking for a company that could help us with our branding. We needed a website and marketing materials. They were able to create a brand identity that we loved. They worked with us to develop a logo that represented our company.</blockquote>
                                    <h4 class="mb-2">Luke Reeves</h4>
                                    <h5 class="fs-6 text-secondary mb-0">Sales Manager</h5>
                                  </figcaption>
                                </figure>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                <!------------------------------------------------------------------------------------------------------------->
            </div>
        </div>
    </div>
</div>
@endsection
