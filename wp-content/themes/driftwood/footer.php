<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Driftwood
 * @since 1.0.0
 */

/**
 * TODO: Render Callout Widget Area dynamically from back-end
 **/

 ?>

 <section id="callout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 text-center callout-body m-auto py-5">
              <div>
                <h2>Ready to Get Started?</h2>
                <p><a href="#" class="btn btn-primary">Contact Us Today!</a></p>
              </div>
            </div>
        </div>
    </div>
 </section>

 <?php

/**
 * TODO: Render Pre-footer dynamically from WP back-end.
 **/

?>

<section id="pre-footer" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm offset1">
              <h3>Find Your Home</h3>
              <ul class="prefooter-nav">
                <li>Our Communities</li>
                <li>Quick Move-in Homes</li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>About Us</h3>
              <ul class="prefooter-nav">
                <li>About the Builder</li>
                <li>Contact Us</li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Get In Touch</h3>
              <p>
                (850) 306-4352
              <br>
                257 Driftwood Road,
              <br>
                Miramar Beach, FL, 32550
              </p>
            </div>
            <div class="col-sm">
              <h3>Hours</h3>
              <p>
                Mon - Sat: 10 am - 5 pm
              <br>
                Sun: 1 pm - 5 pm
              <br>
                <span class="small">(Available after hours by appointment)</span>
              </p>
            </div>
            <div class="col-sm">
              <h3>Follow Us</h3>
              <ul class="prefooter-social">
                <li>
                  <a href="#" class="fas facebook-square"></a>
                </li>
                <li>
                <a href="#" class="fas instagram"></a>
                </li>
              </ul>
            </div>
        </div>
    </div>
 </section>

 <?php

 /**
 * TODO: Render Footer dynamicaly from back-end.
 **/

?>

<section id="footer" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm footer-left ml-auto">
              <ul class="btn-list">
                <li>
                  <a href="#">
                    <img src="http://192.168.64.2/wp-driftwood/wp-content/uploads/2020/02/agent-participation@2x.png" alt="Driftwood Group agent portal" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="http://192.168.64.2/wp-driftwood/wp-content/uploads/2020/02/nch-logo-certified-square@2x.png" alt="We are NCH Certified" />
                  </a>
                </li>
              </ul>
              <ul class="flag-list">
                <li>
                  <a href="#">
                    <img src="http://192.168.64.2/wp-driftwood/wp-content/uploads/2020/02/flag-1@2x.png" alt="English" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="http://192.168.64.2/wp-driftwood/wp-content/uploads/2020/02/flag-3@2x.png" alt="Portuguese" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="http://192.168.64.2/wp-driftwood/wp-content/uploads/2020/02/fllag-2@2x.png" alt="Spanish" />
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-sm footer-right mr-auto d-flex align-items-center justify-content-end">
              <p class="small">2018 Driftwood Group. All Rights Reserved.</p>
            </div>
        </div>
    </div>
 </section>


  <?php
  // WP Hook for necessarily loading in footer scripts used by third-party plugins and custom functions within functions.php.
  wp_footer();
  ?>

  </body>
</html>
