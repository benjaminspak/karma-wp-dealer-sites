<?php
	/*
		Template Name: Lease Update Template
	*/
get_header(); ?>

<div class="leasePageMain pageCenter">
        <?php while(have_posts()) { the_post(); ?>
            <div class="titleArea">
                <div class="title1"><h2><?php the_title(); ?></h2></div>
            </div>
            <hr>
            <p><?php the_content(); ?></p>
        <?php } ?>
</div>

<!-- START Lease Page Container -->
<div class="lease-section-position-container">
    
    <!-- START Country Selection Overlay -->
    <div id="country-selection-overlay">
        <div class="country-selection-overlay_content">
            <div class="country-selection-overlay_header">
                <h2>Select your region to continue</h2>
                <img width="100" class="country-gradientline" src="./wp-content/themes/karma/img/icons/GradientLine.png">
            </div>
            <div class="country-selection-overlay_button_row">
                <div class="country-selection-overlay_button_USA">
                    <span>United States</span>
                </div>
                <div class="country-selection-overlay_button_CAN">
                    <span>Canada</span>
                </div>
            </div><!-- Close Overlay Button Row -->
        </div>
    </div> <!-- END Country Selection Overlay -->

    <div class="lease-section-style-container">
        <!-- START Lease Section -->
        <section class="bg-color leasing-page-2000px-max-width">
            <div class="leasing-page-container"><!-- START container-->
                <div class="title-row">
                    <h2 class="">Karma Lease Program</h2>
                    <hr class="leasing-page-hr">
                </div>
                <div class="date-car-row">
                    <h3>2018 Karma</h3>
                    <h4>Revero</h4>
                </div>
                <div class="price-car-row">
                    <div class="car-price-col">
                        <div class="price-per-month">
                            <p><strong>$<span class="cad-pricing-toggle">CAD </span>1,299/mo*</strong></p>
                        </div>
                        <div class="tax-36-month">
                            <p>+tax/36 mos.</p>
                        </div>
                    </div>
                    <div class="car-image-col">
                        <img src="./wp-content/themes/karma/img/lease-page/karma-kar.jpg">
                    </div>
                </div>
                    
                <div class="terms-title-row">
                    <h2 class=""><strong>Calculations & Terms</strong></h2>
                </div>
                <div class="price-table-row hide-on-mobile">
                    <div class="monthly-payment">
                        <div class="monthly-table-title">Monthly Payment</div>
                        <div class="price-table-cell">$<span class="cad-pricing-toggle">CAD </span>1,399</div>
                        <div class="price-table-cell"><strong>$<span class="cad-pricing-toggle">CAD </span>1,299</strong></div>
                        <div class="price-table-cell">$<span class="cad-pricing-toggle">CAD </span>1,199</div>
                        <div class="price-table-cell">$<span class="cad-pricing-toggle">CAD </span>1,099</div>
                    </div><!-- CLOSE Monthly Payment -->
                    <div class="leasing-terms">
                        <div class="table-title">Leasing Term (mos)</div>
                        <div class="price-table-cell">24</div>
                        <div class="price-table-cell"><strong>36</strong></div>
                        <div class="price-table-cell">48</div>
                        <div class="price-table-cell">60</div>
                    </div><!-- CLOSE Leasing Term -->
                    <div class="annual-mileage">
                        <div class="table-title">Annual Mileage</div>
                        <div class="price-table-cell">10,000</div>
                        <div class="price-table-cell"><strong>10,000</strong></div>
                        <div class="price-table-cell">10,000</div>
                        <div class="price-table-cell"> 10,000</div>
                    </div><!-- CLOSE Mileage -->
                    <div class="apr">
                        <div class="apr-table-title">APR %</div>
                        <div class="price-table-cell">0</div>
                        <div class="price-table-cell"><strong>0</strong></div>
                        <div class="price-table-cell">0</div>
                        <div class="price-table-cell">0</div>
                    </div><!-- CLOSE APR -->
                </div><!-- END Price Table -->

                <!-- START Mobile Price Table -->
                <div class="mobile-price-table-container">
                <table class="mobile-price-table">
                    <tr class="mobile-price-table-row">
                    <th class="mobile-price-table-title">Monthly Payment</th>
                    <th class="mobile-price-table-title">Leasing Term (mos)</th>
                    </tr>
                    <tr class="mobile-price-table-row">
                    <td>$<span class="cad-pricing-toggle">CAD </span>1,399</td>
                    <td>24</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>$<span class="cad-pricing-toggle">CAD </span>1,299</td>
                        <td>36</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>$<span class="cad-pricing-toggle">CAD </span>1,199</td>
                        <td>48</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>$<span class="cad-pricing-toggle">CAD </span>1,099</td>
                        <td>60</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                    <th class="mobile-price-table-title">Annual Mileage</th>
                    <th class="mobile-price-table-title">APR %</th>                
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>10,000</td>
                        <td>0</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>10,000</td>
                        <td>0</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>10,000</td>
                        <td>0</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>10,000</td>
                        <td>0</td>
                    </tr>
                </table>
                </div>
                <!-- END Mobile Price Table -->
            </div><!-- END container-->
        </section><!-- END Lease Section -->
    </div><!-- END lease-section-style-container -->
    <div class="disclaimer-table-row"><!-- START Disclaimer Row -->
        <p class="">*MSRP $<span class="cad-pricing-toggle">CAD </span>150,800. Min Down Payment $5,000 Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
    </div><!-- END Disclaimer Row -->
    <div class="button-row">
        <a href="/drive/"><div class="lease-page-button">Ready to Drive</div></a>
    </div>
</div><!-- END Lease Section Position Container -->

<!-- START Overlay Script -->
    <script>
    // Get the modal
    var modal = document.getElementById('country-selection-overlay');
    var hide = document.getElementsByClassName('cad-pricing-toggle');

    // Get the <span> element that closes the modal
    var usa = document.getElementsByClassName('country-selection-overlay_button_USA')[0];
    var can = document.getElementsByClassName('country-selection-overlay_button_CAN')[0];

    // When the user clicks on the button it closes the overlay
    usa.onclick = function() {
        var i;
            for (i = 0; i < hide.length; i++) {
            hide[i].style.display = "none";
            };
        modal.style.display = "none";            
    }

    can.onclick = function() {
        modal.style.display = "none";
    }

    </script>

<!-- END Overlay Script -->

<?php include(locate_template('template_part/map.php')); ?>

<?php get_footer(); ?>