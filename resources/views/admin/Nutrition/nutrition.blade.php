@extends('layouts.Layout')
@section('style-nutrition')
<link rel="stylesheet" href="{{ asset('assets/css/stylesNutrition.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection


@section('nutrition')
<section class="section section__height container" id="home">
  <!-- here i will put post and create post  -->
  <header class="days-header">
    <div class="days-table">
      Days Schedule
    </div>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <nav class="nav-days">
      <ul>
        <li>
          <a href="#tranding-saturday" class="nav__link active">Saturday</a>
        </li>
        <li>
          <a href="#tranding-sunday" class="nav__link">Sunday</a>
        </li>
        <li>
          <a href="#tranding-monday" class="nav__link">Monday</a>
        </li>
        <li>
          <a href="#tranding-tuesday" class="nav__link">Tuesday</a>
        </li>
        <li>
          <a href="#tranding-wednesday" class="nav__link">Wednesday</a>
        </li>
        <li>
          <a href="#tranding-thursday" class="nav__link">Thursday</a>
        </li>
        
      </ul>
    </nav>

    </nav>
  </header>

  <!-- swipper  -->
  <section id="tranding-saturday" class="tranding-section">
                    <section id="tranding">
                        <div class="containnner">
                          <div class="swiper tranding-slider">
                            <div class="swiper-wrapper">
                              <!-- Slide-start -->
                              <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                  <img src="assets/img/tranding-food-1.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                  <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name main-meal-name">
                                      Special Pizza
                                    </h2>
                                    <div class="main-meal">
                                      <p>Total Calories for the meal: 500 Cal</p>
                                      <p>Total Proteins in the meal: 40 g</p>
                                      <p>Total Carbs in the meal: 80 g</p>
                                      <p>Total Fats in the meal: 20 g</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Slide-end -->
                              <!-- Slide-start -->
                              <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                  <img src="assets/img/tranding-food-2.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                  <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                      Special Pizza
                                    </h2>
                                    <div class="ingredient-meal">
                                      <p>Total weight of the ingredient: 500 g</p>
                                      <p>Total Calories for the ingredient: 200 Cal</p>
                                      <p>Total Proteins in the ingredient: 20 g</p>
                                      <p>Total Carbs in the ingredient: 40 g</p>
                                      <p>Total Fats in the ingredient: 20 g</p>
                                    </div>
                                      </div>
                                </div>
                              </div>
                              <!-- Slide-end -->
                              <!-- Slide-start -->
                              <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                  <img src="assets/img/tranding-food-2.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                  <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                      Special Pizza
                                    </h2>
                                    <div class="ingredient-meal">
                                      <p>Total weight of the ingredient: 500 g</p>
                                      <p>Total calories for the ingredient: 200 Cal</p>
                                      <p>Total Proteins in the ingredient: 20 g</p>
                                      <p>Total Carbs in the ingredient: 40 g</p>
                                      <p>Total Fats in the ingredient: 20 g</p>
                                    </div>
                                      </div>
                                </div>
                              </div>
                              <!-- Slide-end -->
                              <!-- Slide-start -->
                              <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                  <img src="assets/img/tranding-food-2.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                  <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                      Special Pizza
                                    </h2>
                                    <div class="ingredient-meal">
                                      <p>Total weight of the ingredient: 500 g</p>
                                      <p>Total calories for the ingredient: 200 Cal</p>
                                      <p>Total Proteins in the ingredient: 20 g</p>
                                      <p>Total Carbs in the ingredient: 40 g</p>
                                      <p>Total Fats in the ingredient: 20 g</p>
                                    </div>
                                      </div>
                                </div>
                              </div>
                              <!-- Slide-end -->
                              <!-- Slide-start -->
                              <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                  <img src="assets/img/tranding-food-2.png" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                  <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                      Special Pizza
                                    </h2>
                                    <div class="ingredient-meal">
                                      <p>Total weight of the ingredient: 500 g</p>
                                      <p>Total calories for the ingredient: 200 Cal</p>
                                      <p>Total Proteins in the ingredient: 20 g</p>
                                      <p>Total Carbs in the ingredient: 40 g</p>
                                      <p>Total Fats in the ingredient: 20 g</p>
                                    </div>
                                      </div>
                                </div>
                              </div>
                              <!-- Slide-end -->
                            </div>
                  
                            <div class="tranding-slider-control">
                              <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                              </div>
                              <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                              </div>
                              <div class="swiper-pagination"></div>
                            </div>
                  
                          </div>
                        </div>
                      </section>
                  </section>
                  
                  <section id="tranding-sunday" class="tranding-section">
                    <section id="tranding">
                      <div class="containnner">
                        <div class="swiper tranding-slider">
                          <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-1.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name main-meal-name">
                                    Special Pizza
                                  </h2>
                                  <div class="main-meal">
                                    <p>Total Calories for the meal: 500 Cal</p>
                                    <p>Total Proteins in the meal: 40 g</p>
                                    <p>Total Carbs in the meal: 80 g</p>
                                    <p>Total Fats in the meal: 20 g</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total Calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                          </div>
                
                          <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                              <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                              <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                
                        </div>
                      </div>
                    </section>
                  </section>
                  
                  <section id="tranding-monday" class="tranding-section">
                    <section id="tranding">
                      <div class="containnner">
                        <div class="swiper tranding-slider">
                          <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-1.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name main-meal-name">
                                    Special Pizza
                                  </h2>
                                  <div class="main-meal">
                                    <p>Total Calories for the meal: 500 Cal</p>
                                    <p>Total Proteins in the meal: 40 g</p>
                                    <p>Total Carbs in the meal: 80 g</p>
                                    <p>Total Fats in the meal: 20 g</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total Calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                          </div>
                
                          <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                              <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                              <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                
                        </div>
                      </div>
                    </section>
                  </section>
                  
                  <section id="tranding-tuesday" class="tranding-section">
                    <section id="tranding">
                      <div class="containnner">
                        <div class="swiper tranding-slider">
                          <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-1.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name main-meal-name">
                                    Special Pizza
                                  </h2>
                                  <div class="main-meal">
                                    <p>Total Calories for the meal: 500 Cal</p>
                                    <p>Total Proteins in the meal: 40 g</p>
                                    <p>Total Carbs in the meal: 80 g</p>
                                    <p>Total Fats in the meal: 20 g</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total Calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                              <div class="tranding-slide-img">
                                <img src="assets/img/tranding-food-2.png" alt="Tranding">
                              </div>
                              <div class="tranding-slide-content">
                                <div class="tranding-slide-content-bottom">
                                  <h2 class="food-name">
                                    Special Pizza
                                  </h2>
                                  <div class="ingredient-meal">
                                    <p>Total weight of the ingredient: 500 g</p>
                                    <p>Total calories for the ingredient: 200 Cal</p>
                                    <p>Total Proteins in the ingredient: 20 g</p>
                                    <p>Total Carbs in the ingredient: 40 g</p>
                                    <p>Total Fats in the ingredient: 20 g</p>
                                  </div>
                                    </div>
                              </div>
                            </div>
                            <!-- Slide-end -->
                          </div>
                
                          <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                              <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                              <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                
                        </div>
                      </div>
                    </section>
                    </section>
@endsection



@section('script-nutrition')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!--=============== MAIN JS ===============-->
<script src="{{ asset('assets/js/workout&nutrition.js') }}"></script>
@endsection