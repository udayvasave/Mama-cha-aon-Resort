<?php 
$name =  $_POST['cust_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];

$to      = 'amitbalaksingh947@gmail.com';
$subject = $subject;
$message = $message ."<br>Mobile No:".$phone;
$headers = 'From: '.$email;
mail($to, $subject, $message, $headers);    



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="thankyou.css
    "
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <title>Thank You</title>
  </head>
  <body>
    <div class="sticky-icons">
      <div class="sticky-wtsap">
        <a href="https://wa.me/919619878500">
          <img src="./Icons/Home-page/whatsApp.svg" alt=""
        /></a>
      </div>
      <div class="sticky-scroll"></div>
    </div>
    <div class="Container1-booking-tab">
      <div class="contact-tab-phone">
        <img
          src="./Icons/phonee.svg"
          alt="mobile-icon"
          class="phone-icon"
        /><span>: 9619878500 / 8007424123</span>
      </div>
      <div class="contact-tab-mail">
        <img src="./Icons/mail.svg" alt="mail-icon" class="mail-icon" />:
        mamachagaon@maitreyagroup.com
      </div>
    </div>
    <div class="Container2-navbar">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html"
          ><img
            src="./Photo/logo/mamacha gav logo.png"
            alt="logo"
            class="Navbar-Logo"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tariffs.html">Tariffs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="amenities.html">Amenities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="photos.html">Gallery</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="aboutus.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="Container-1">
      <h1>Thank You! for Your Response</h1>
      <h3>We will get back to you shortly.</h3>
      <span>Go back to Website, click <a href="index.html">here</a></span>
    </div>

    <div class="con11-Footer">
      <div class="con11-section1">
        <div class="con11-logo">
          <a href="index.html">
            <img src="./Photo/logo/mamacha gav logo.png" alt="logo"
          /></a>
        </div>
        <div class="con11-text">
          <p>
            To make your experience as rich and beautiful as possible, our
            dedicated team is at your service. So for any queries, special
            requests or to book your stay at Mama cha Gaon Resort, please get in
            touch with us.
          </p>
        </div>
      </div>
      <div class="con11-section2">
        <div class="con11-sec2-heading"><h2>Contact us</h2></div>
        <div class="con11-sec2-address">
          <div class="con11-sec2-addrss-icon">
            <img src="./Icons/container11-icons/location.svg" alt="location" />
          </div>
          <div class="con11-sec2-addrss-text">
            <strong>Resort Address</strong>
            <p>
              Village Gundale, Near Godavari Stone Crusher, Karvela Pada, Boisar
              (E).
            </p>
          </div>
        </div>
        <div class="con11-sec2-email">
          <div class="con11sec2-email-icon">
            <img src="./Icons/container11-icons/mail.svg" alt="" />
          </div>
          <div class="con11-sec2-emailadress">
            <span>mamachagaon@maitreyagroup.com </span>
          </div>
        </div>
        <div class="con11-sec2-contact">
          <div class="con11-sec2-contact-icon">
            <img src="./Icons/container11-icons/contact.svg" alt="" />
          </div>
          <div class="con11-sec2-contact-number">
            <span>9619878500, 9619878400, 8007424123, 9167995472</span>
          </div>
        </div>
      </div>
      <div class="con11-section3">
        <div class="con11-sec3-heading"><h2>Quick Links</h2></div>
        <div class="con11-sec3-links">
          <div class="con11-sec3-links-container1">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="photos.html">Gallery</a></li>
              <li>
                <a
                  href="https://www.google.com/travel/search?q=mamacha%20gaon%20resort&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4757164%2C4814050%2C4850738%2C4864715%2C4874190%2C4886480%2C4893075%2C4920132%2C4924070%2C4936396%2C4965990%2C4968087%2C4972345%2C4977922%2C4991446%2C72249257&hl=en-IN&gl=in&cs=1&ssta=1&ts=CAESABpHCikSJzIlMHgzYmU3MTk2YzZhYWFhYWFiOjB4OTM2Mzg3MTFhODE0YjdhMhIaEhQKBwjnDxAFGAUSBwjnDxAFGAYYATICEAA&qs=CAEyFENnc0lvdV9Td0pyaTRiR1RBUkFCOAJCCwmitxSoEYdjkxgBQgsJorcUqBGHY5MYAQ&ap=ugEHcmV2aWV3cw&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwioy_KT6NP-AhUAAAAAHQAAAAAQDA"
                  >Reviews</a
                >
              </li>
              <li><a href="activities.html">Activities</a></li>
            </ul>
          </div>
          <div class="con11-sec3-links-container2">
            <ul>
              <li><a href="tariffs.html">Services</a></li>
              <li><a href="amenities.html">Amenities</a></li>
              <li><a href="aboutus.html">About us</a></li>
              <li><a href="contactus.html">Contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="con11-sec3-socialmedia">
          <div class="con11-sec3-socialmedia-heading">
            <h5>Social Media</h5>
          </div>
          <div class="con11-sec3-social-icons">
            <a href="https://www.facebook.com/mamachagav"
              ><img
                src="./Icons/container11-icons/facebook.svg"
                alt="fb"
                class="con11-fb-icon"
            /></a>
            <a
              href="https://www.instagram.com/explore/locations/374585853/mamacha-gaon-resort-boisar/"
            >
              <img
                src="./Icons/container11-icons/insta.svg"
                alt="insta"
                class="con11-insta-icon"
            /></a>

            <a href="https://wa.me/919619878500">
              <img
                src="./Icons/container11-icons/whatsApp.svg"
                alt="wtsap"
                class="con11-tweet-icon"
            /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="con12-copyright">
      <span
        >&#169; All rights Reserved by Mamacha Gaon Resort | Powered by
        <a href="https://smartechsolutions.in/">SmarTech Solutions</a>
      </span>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
