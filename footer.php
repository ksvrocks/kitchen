   <!-- Footer Top Section Start -->
   <div
       class="footer-top-section section bg-theme-two-light pt-80 pt-lg-60 pt-md-60 pt-sm-60 pt-xs-40 pb-40 pb-lg-20 pb-md-20 pb-sm-20 pb-xs-0">
       <div class="container">
           <div class="row">

               <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                   <h4 class="title">Demo Name</h4>
                   <p>We are delighted to say that one of our kitchen has been featured on Houzz. Feel free to visit us.
                   </p>
               </div>

               <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                   <h4 class="title">INFORMATION</h4>
                   <ul>
                       <li>
                           <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                               &nbsp; New Delhi</a></li>
                       <li><a href="tel:01234567890"><i class="fa fa-phone" aria-hidden="true"></i>
                               &nbsp; 01234 567 890</a></li>
                       <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                               &nbsp; info@example.com</a></li>

                   </ul>
               </div>

               <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                   <h4 class="title">USEFUL INFORMATION</h4>
                   <ul>
                       <li><a href="#">About us</a></li>
                       <li><a href="#">Terms & Conditions</a></li>
                       <li><a href="#">contact us</a></li>

                   </ul>
               </div>

               <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">

                   <h5>FOLLOW US</h5>
                   <p class="footer-social">
                       <a href="#" class="mr-3"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href="#" class="mr-3"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       <a href="#" class="mr-3"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                   </p>

               </div>

           </div>
       </div>
   </div><!-- Footer Top Section End -->

   <!-- Footer Bottom Section Start -->
   <div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
       <div class="container">
           <div class="row">
               <div class="col text-center">
                   <p class="footer-copyright">Copyright &copy; All rights reserved</p>
               </div>
           </div>
       </div>
   </div><!-- Footer Bottom Section End -->

   </div>

   <!-- JS
============================================ -->

   <!-- jQuery JS -->
   <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
   <!-- Popper JS -->
   <script src="assets/js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- Plugins JS -->
   <script src="assets/js/plugins.js"></script>
   <!-- Ajax Mail -->
   <script src="assets/js/ajax-mail.js"></script>
   <!-- Main JS -->
   <script src="assets/js/main.js"></script>

   <script src="http://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

   <style>
/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background: #fff;
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.2);
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky+.content {
    padding-top: 60px;
}
   </style>
   <script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {
    myFunction()
};

// Get the navbar
var navbar = document.getElementById("navbar1");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
   </script>

   <script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    navigation: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        1000: {
            items: 4,
            nav: true,
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            loop: true
        }
    }
})

$(document).ready(function() {
    console.log("ready!");

    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
});
   </script>

   </body>

   </html>