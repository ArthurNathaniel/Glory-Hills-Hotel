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
    <link rel="stylesheet" href="display.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/building-3.jpg" alt="">
                    <div class="swiper-text">
                        <h1>BOOK NOW</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="display-grid">


            <style>
                .display-grid {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    align-self: center;
                }

                .display-text {
                    width: 50%;
                }

                .booking-display {
                    display: block;
                    transition: 5s;
                }

                #confirm-booking{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    align-self: center;
                    width: 100%;
                }
            </style>
            <div class="display-text">


                <h2>Booking Details</h2>

                <div class="mt-5">
                    <p><strong>Check-in:</strong> <span id="check-in-result"></span></p>
                    <p><strong>Check-out:</strong> <span id="check-out-result"></span></p>
                    <p><strong>Name:</strong> <span id="name-result"></span></p>
                    <p><strong>Phone Number:</strong> <span id="number-result"></span></p>
                    <p><strong>Guests:</strong> <span id="guest-result"></span></p>
                    <p><strong>Room Type:</strong> <span id="room-type-result"></span></p>
                    <p><strong>Total Price:</strong> GH₵<span id="total-price"></span></p>
                    <button id="confirm-booking">
                        CONFIRM BOOKING
                    </button>
                </div>
            </div>
        </div>


    </section>

    <script>
        // Get the button element with the ID "bookbtn"
        var bookbtn = document.getElementById("bookbtn");
        var display_text = document.querySelector(".display-text");

        // Add a click event listener to the button
        bookbtn.addEventListener("click", function() {
            // Add the CSS class "bookbtn" to the button
            display_text.classList.add("booking-display");
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const confirmBookingBtn = document.getElementById('confirm-booking');

        confirmBookingBtn.addEventListener('click', function() {
            console.log('Booking');

            const checkIn = document.getElementById('check-in-result').textContent;
            const checkOut = document.getElementById('check-out-result').textContent;
            const name = document.getElementById('name-result').textContent;
            const number = document.getElementById('number-result').textContent;
            const guests = document.getElementById('guest-result').textContent;
            const roomType = document.getElementById('room-type-result').textContent;
            const totalPrice = document.getElementById('total-price').textContent;

            var myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");
            myHeaders.append("Accept", "application/json");

            var raw = JSON.stringify({
                "name": name,
                "phone_number": number,
                "number_of_guests": guests,
                "arrival_date": checkIn,
                "departure_date": checkOut,
                "room_type": roomType
            });

            var requestOptions = {
                method: 'POST',
                headers: myHeaders,
                body: raw,
                redirect: 'follow'
            };

            fetch("https://tlgghana.hotelipad.com/api/sr", requestOptions)
                .then(response => alert('"Reservation request made successfully...our customer service personnel would contact you shortly.'))
                // .then(text => console.log(text.text()))
                .catch(error => console.log('error', error));
        });
    </script>

    <script src="./index.js"></script>
    <script>
        // Retrieve the values from URL parameters
        var urlParams = new URLSearchParams(window.location.search);
        var date_diff = urlParams.get("check-in").split(" ");
        var checkIn = date_diff[0];
        var checkOut = date_diff[2];
        var name = urlParams.get("name");
        var number = urlParams.get("number");
        var guests = urlParams.get("guest");
        var roomType = urlParams.get("room-type").split(',');

        // Calculate the number of nights
        var startDate = new Date(checkIn);
        var endDate = new Date(checkOut);
        var timeDifference = endDate.getTime() - startDate.getTime();
        var nights = Math.ceil(timeDifference / (1000 * 3600 * 24));

        // Calculate the total price for the entire duration
        var totalPrice = parseInt(roomType[1]) * nights;

        // Calculate the price per night
        var pricePerNight = parseInt(roomType[1]);

        // Display the values on the page
        var checkInResult = document.getElementById("check-in-result");
        checkInResult.textContent = checkIn;

        var checkOutResult = document.getElementById("check-out-result");
        checkOutResult.textContent = checkOut;

        var nameResult = document.getElementById("name-result");
        nameResult.textContent = name;

        var numberResult = document.getElementById("number-result");
        numberResult.textContent = number;

        var guestResult = document.getElementById("guest-result");
        guestResult.textContent = guests;

        var roomTypeResult = document.getElementById("room-type-result");
        roomTypeResult.textContent = roomType[0];

        var totalPriceElement = document.getElementById("total-price");
        totalPriceElement.textContent = totalPrice.toFixed(2).toLocaleString(); // Displaying the total price for the entire duration

        var pricePerNightElement = document.getElementById("price-per-night");
        pricePerNightElement.textContent = pricePerNight.toFixed(2); // Displaying the price per night
    </script>

    <section>
        <?php include 'footer.php'; ?>
    </section>
    <script src="confirm-booking.js"></script>
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
            altFormat: "J F Y",
            altInput: true,
            mode: 'range',
            disableMobile: false
        });

        calculateTotalPrice = (form_event) => {
            // console.log(form.reset());
            form_event.preventDefault();
            const form = form_event.target;
            const date_in = form.elements[1]
            console.log(date_in)
            if (date_in.value.length < 1) {
                date_in.style.border = '3px solid salmon'
                date_in.placeholder = 'Pick a Date'
            } else {
                form.submit()
            }
            // form.checkValidity()
        }
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