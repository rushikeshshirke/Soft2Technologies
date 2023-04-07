<!DOCTYPE html>
<html lang="en">
<head>
<?php include('link.php'); ?>
</head>
<body>
<?php include('header.php'); ?>
<?php include('socio-icons.php'); ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>
        <h2>Contact Us</h2>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- <div class="my-5"></div> -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Feel Free to Reach Us, We are available!</h2>
          <p>Get In Touch!</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>In front of Govt. Polytechnic college, Gadge nagar,<br>AMRAVATI(MH) , PIN-444602</p>
                </div>


              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 8309 5693 85</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><a href="mailto: info@soft2technologies.com">info@soft2technologies.com</a><br><a
                      href="mailto: soft2technologies@gmail.com">soft2technologies@gmail.com</a></p>
                </div>


              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>10:00AM - 06:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="POST" class="eml-frm">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message..." required></textarea>
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit" name="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

    <!-- Map -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.142372923248!2d77.76333791451698!3d20.946796895948204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6bbf8fafe6999%3A0xcc009d3ade9a5ae4!2sSoft2Technologies!5e0!3m2!1sen!2sin!4v1679911030447!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<!-- End Map -->

    </main>
    <?php include('footer.php'); ?>
    <?php include('linkjs.php'); ?>
    
</body>
</html>

