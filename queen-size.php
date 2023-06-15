<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Glory Hills Hotel is a luxurious hotel situated in the heart of Cityville. With its stunning architecture, world-class amenities, and impeccable service, it offers a truly memorable experience for both leisure and business travelers.">
    <meta name="keywords" content="Glory Hills Hotel, hotel, luxury, accommodation, Cityville">
    <title>Glory Hills Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="rooms.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/room-two.jpg" alt="">
                    <div class="swiper-text">

                        <h1>Queen Size</h1>


                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Our Room Type</li>
                            <li>Queen Size</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="form">
        <form action="" class="form">
            <div class="check">
                <label>CHECK IN</label>
                <input type="date" class="form-control" id="check-in" name="check-in" required>
            </div>
            <div class="check">
                <label>CHECK OUT</label>
                <input type="date" class="form-control" id="check-in" name="check-in" required>
            </div>
            <div class="check">
                <label>GUEST</label>
                <input type="number" min="0">
            </div>
            <div class="check">
                <label for="room-type">ROOM TYPE</label>
                <select id="room-type" name="room-type">
                    <option value="suite">Suite Rooms</option>
                    <option value="queen">Queen Size Rooms</option>
                    <option value="ac-standard">Standard with A/C Rooms</option>
                    <option value="ac-single">Single with A/C Rooms</option>
                    <option value="fan-standard">Standard with Fan Rooms</option>
                    <option value="fan-single">Single with Fan Rooms</option>
                    <option value="side-apartment">Side Apartment</option>
                </select>
            </div>

            <div class="ava">
                <button>
                    Check Avaliability
                </button>
            </div>


        </form>
    </section>

    <section>
        <div class="room-slide">
            <section>
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-one.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-two.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-three.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-four.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-five.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section>
        <div class="description">
            <h1>Description</h1>
            <p>
                Welcome to our cozy room featuring a comfortable queen size bed, perfect for a restful night's sleep. Stay cool and refreshed with the air conditioner that maintains a pleasant temperature throughout your stay.
                <br>
                The attached washroom offers convenience and privacy, equipped with essential amenities to cater to your needs. A spacious wardrobe is available to neatly store your belongings and keep your room organized.
                <br>
                For your convenience, a refrigerator is provided to store and preserve your food and beverages. The room also includes a table and chair set, creating a functional workspace or a comfortable spot for enjoying meals.
                <br>
                Unwind and relax as you watch your favorite shows on the TV, offering a range of entertainment options for your enjoyment.
                <br>
                Experience comfort and convenience in our thoughtfully designed room, where you'll find everything you need for a pleasant stay.
            </p>
        </div>
    </section>

    <section>
        <div class="amenities">
            <h1>Amenities</h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-circle-check"></i> Queen Size Bed</li>
                            <li><i class="fa-solid fa-circle-check"></i> Air Conditioner</li>
                            <li><i class="fa-solid fa-circle-check"></i> Washroom</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-circle-check"></i> Wardrobe</li>
                            <li><i class="fa-solid fa-circle-check"></i> Refrigerator</li>
                            <li><i class="fa-solid fa-circle-check"></i> Table &amp; chair</li>
                            <li><i class="fa-solid fa-circle-check"></i> TV</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section>
        <div class="testimony">
            <div class="test-bg">
                <div class="test-title">
                    <h5>TESTIMONIAL</h5>

                    <h1>What Client Say</h1>
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="text">
                                    <div class="star text-center" style="color:#f5a608;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        <i class="fas fa-quote-left quote-icon"></i>
                                        A very serene hotel situated in the valley area of prime Kumasi. Very affordable
                                        accommodation with very responsive and interactive staff.
                                        Rooms are neat and wash rooms come with heater. The standard Air-conditioned rooms
                                        do not have refrigerators.
                                        They serve nice food too…Try their fried rice with grilled chicken
                                        <i class="fas fa-quote-left quote-icon"></i>
                                    </p>
                                    <div class="text-center review">
                                    </div>
                                    <div class="text-center">
                                        <h3>George Frimps <span>Review from Google review</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="text">
                                    <div class="star text-center" style="color:#f5a608;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        <i class="fas fa-quote-left quote-icon"></i>
                                        A home away from home. Very quiet environment with pleasant staff.
                                        Located in danyame kumasi and very assessible roads. Prices also
                                        very affordable.
                                        <i class="fas fa-quote-left quote-icon"></i>
                                    </p>
                                    <div class="text-center review">
                                    </div>
                                    <div class="text-center">
                                        <h3>Hesthalynna Ottou Osafo <span>Review from Google review</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="text">
                                    <div class="star text-center" style="color:#f5a608;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        <i class="fas fa-quote-left quote-icon"></i>
                                        Beautiful rooms and very affordable prices. Very respectful and smiling receptionists.
                                        <i class="fas fa-quote-left quote-icon"></i>
                                    </p>
                                    <div class="text-center review">
                                    </div>
                                    <div class="text-center">
                                        <h3> Eugene Boakye Appianing <span>Review from Google review</span></h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
            <div class="book">
                <button class="booking">
                    BOOK NOW
                </button>
            </div>

        </div>
    </section>

    <section>
        <?php include 'footer.php'; ?>
    </section>

    <script>
        const roomImgs = document.querySelectorAll('.room-img');
        const roomsDisplay = document.querySelector('.rooms-display');
        // Set the first room-img as the default background
        const defaultBackgroundImage = roomImgs[0].style.backgroundImage;
        roomsDisplay.style.backgroundImage = defaultBackgroundImage;

        roomImgs.forEach(roomImg => {
            roomImg.addEventListener('mouseover', () => {
                const backgroundImage = roomImg.style.backgroundImage;
                roomsDisplay.style.backgroundImage = backgroundImage;
            });
        });
    </script>

    <script>
        flatpickr("#check-in", {
            minDate: "today",
            dateFormat: "Y-m-d",
            disableMobile: true
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var zoomDiv = document.querySelector('.swiper-slide');

            zoomDiv.addEventListener('click', function() {
                this.classList.toggle('zoomed');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>