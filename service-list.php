<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <title>Book My Makeup</title>
    <?php include 'include/head.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>
    <section class="section-padding bg-light-gray">
        <div class="container">
            <div class="salon-category-tab-parents">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="salon-category-tabs">
                            <li data="salonsTab" class="active"> <span><img src="assets/images/salon-category-icon1.png" alt=""></span> Salons</li>
                            <li data="servicesTab"> <span><img src="assets/images/salon-category-icon2.png" alt=""></span> Services</li>
                            <li data="bridalTab"> <span><img src="assets/images/salon-category-icon3.png" alt=""></span> Bridal Makeup</li>
                            <li data="luxeTab"> <span><img src="assets/images/salon-category-icon4.png" alt=""></span> LUXE</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <ul class="salon-category-filter-tabs">
                            <li class="active">Relevance</li>
                            <li>Rating</li>
                            <li>Cost: Low to High</li>
                            <li>Cost: High to Low</li>
                            <li>Filter <i class="fas fa-filter"></i></li>
                        </ul>
                    </div>
                </div> -->
            </div>

            <div id="salonsTab" class="custom-tab-content d-custom-block">
                <div class="row">
                    <div class="col-md-4">
                        <a href="hair-masters.php" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">76 Booked</span>
                                <div class="salon-featured-tag">Recommended</div>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-2.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Looks Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Punjabi Bagh, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 3.9</span>
                                <span class="booked">48 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-3.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Geetanjali Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Preet Vihar, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.5</span>
                                <span class="booked">69 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <div class="salon-featured-tag">Recommended</div>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id="servicesTab" class="custom-tab-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-wrapper">
                            <div class="service-wrapper-header">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            </div>
                            <div class="service-wrapper-body">
                                <div class="service-wrapper-list">
                                    <div>
                                        <h5>Hair Cut</h5>
                                        <p>Rs. 119</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-pink">Book</button>
                                    </div>
                                </div>
                                <div class="service-wrapper-list">
                                    <div>
                                        <h5>Shampoo & Conditioning</h5>
                                        <p>Rs. 199</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-pink">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-wrapper">
                            <div class="service-wrapper-header">
                                <h4>Looks Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Punjabi Bagh, New Delhi</p>
                            </div>
                            <div class="service-wrapper-body">
                                <div class="service-wrapper-list">
                                    <div>
                                        <h5>Hair Cut</h5>
                                        <p>Rs. 85</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-pink">Book</button>
                                    </div>
                                </div>
                                <div class="service-wrapper-list">
                                    <div>
                                        <h5>Shampoo & Conditioning</h5>
                                        <p>Rs. 149</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-pink">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="bridalTab" class="custom-tab-content">
                <div class="row">
                    <div class="col-md-4">
                        <a href="hair-masters.php" class="service-box">
                            <img src="assets/images/salon-shop-4.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">76 Booked</span>
                                <div class="salon-featured-tag">Recommended</div>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-5.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Looks Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Punjabi Bagh, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 3.9</span>
                                <span class="booked">48 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-6.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Geetanjali Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Preet Vihar, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.5</span>
                                <span class="booked">69 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <div class="salon-featured-tag">Recommended</div>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div id="luxeTab" class="custom-tab-content">
                <div class="row">
                    <div class="col-md-4">
                        <a href="hair-masters.php" class="service-box">
                            <img src="assets/images/salon-shop-7.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">76 Booked</span>
                                <div class="salon-featured-tag">Recommended</div>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-8.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Looks Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Punjabi Bagh, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 3.9</span>
                                <span class="booked">48 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-9.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Geetanjali Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Preet Vihar, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.5</span>
                                <span class="booked">69 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <div class="salon-featured-tag">Recommended</div>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="service-box">
                            <img src="assets/images/salon-shop-9.jpg" alt="" class="img-fluid" />
                            <div class="service-body">
                                <h4>Hair Masters Salon</h4>
                                <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                                <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="booked">132 Booked</span>
                                <hr>
                                <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'include/footer.php' ?>

</body>

</html>