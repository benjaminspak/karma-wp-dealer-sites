<?php
	/*
		Template Name: Lease Page CAN Template
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
                            <p><strong>$1,699*</strong></p>
                        </div>
                        <div class="tax-36-month">
                            <p>+tax/36 mos.</p>
                        </div>
                    </div>
                    <div class="car-image-col">
                        <img src="./wp-content/themes/karma/img/lease-page/revero.png">
                    </div>
                </div>
                    
                <div class="terms-title-row">
                    <h2 class=""><strong>Calculations & Terms</strong></h2>
                </div>
                <div class="price-table-row hide-on-mobile">
                    <div class="monthly-payment">
                        <div class="monthly-table-title">Monthly Payment</div>
                        <div class="price-table-cell">$1,999/mo</div>
                        <div class="price-table-cell"><strong>$1,699/mo</strong></div>
                        <div class="price-table-cell">$1,599/mo</div>
                        <div class="price-table-cell">$1,499/mo</div>
                    </div><!-- CLOSE Monthly Payment -->
                    <div class="leasing-terms">
                        <div class="table-title">Leasing Term (mos)</div>
                        <div class="price-table-cell">24</div>
                        <div class="price-table-cell"><strong>36</strong></div>
                        <div class="price-table-cell">48</div>
                        <div class="price-table-cell">60</div>
                    </div><!-- CLOSE Leasing Term -->
                    <div class="annual-mileage">
                        <div class="table-title">Annual Kilometers</div>
                        <div class="price-table-cell">16,000</div>
                        <div class="price-table-cell"><strong>16,000</strong></div>
                        <div class="price-table-cell">16,000</div>
                        <div class="price-table-cell">16,000</div>
                    </div><!-- CLOSE Mileage -->
                    <div class="apr">
                        <div class="apr-table-title">APR %</div>
                        <div class="price-table-cell">0</div>
                        <div class="price-table-cell"><strong>0</strong></div>
                        <div class="price-table-cell">0</div>
                        <div class="price-table-cell">0</div>
                    </div><!-- CLOSE APR -->
                    <div class="button-row">
                        <a href="/testdrive/"><div class="lease-page-button">Ready to Drive</div></a>
                     </div>
                    <div class="disclaimer-table-row"><!-- START Disclaimer Row -->
                        <p>*Available for qualified customers as approved by MVL Financial Services Limited. Not all applicants will qualify. Cash due at signing includes minimum $10,000 down payment, $495 application fee, first month’s lease payment, tax, title, license and/or registration fees. Monthly payments are based on a MSRP of $150,800 (includes destination fee), $10,000 manufacturer credit and $10,000 down payment. Based on a representative transaction, actual MSRP and lease terms may vary. Lower monthly payments available with higher down payment. No security deposit based on 16,000 kilometers per year and $0.35/km excess kilometer charge. Lessee is responsible for insurance, maintenance and repairs and excess wear and tear as defined in the lease contract. Option to purchase at lease end for an amount to be determined at lease signing. Color shown may not be available. For details on vehicle specifications, standard features and current availability of equipment in your area, please contact your Karma Automotive dealer. Offer valid only at Karma Toronto and Karma Vancouver through June 30, 2018.</p>
                    </div><!-- END Disclaimer Row -->
                </div><!-- END Price Table -->

                <!-- START Mobile Price Table -->
                <div class="mobile-price-table-container">
                <table class="mobile-price-table">
                    <tr class="mobile-price-table-row">
                    <th class="mobile-price-table-title">Monthly Payment</th>
                    <th class="mobile-price-table-title">Leasing Term (mos)</th>
                    </tr>
                    <tr class="mobile-price-table-row">
                    <td>$1,999/mo</td>
                    <td>24</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td><strong>$1,699/mo</strong></td>
                        <td><strong>36</strong></td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>$1,599/mo</td>
                        <td>48</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>$1,499/mo</td>
                        <td>60</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                    <th class="mobile-price-table-title">Annual Kilometers</th>
                    <th class="mobile-price-table-title">APR %</th>                
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>16,000</td>
                        <td>0</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>16,000</td>
                        <td>0</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>16,000</td>
                        <td>0</td>
                    </tr>
                    <tr class="mobile-price-table-row">
                        <td>16,000</td>
                        <td>0</td>
                    </tr>
                </table>
                <div class="button-row">
                    <a href="/testdrive/"><div class="lease-page-button">Ready to Drive</div></a>
                </div>
                <div class="disclaimer-table-row"><!-- START Disclaimer Row -->
                    <p>*Available for qualified customers as approved by MVL Financial Services Limited. Not all applicants will qualify. Cash due at signing includes minimum $10,000 down payment, $495 application fee, first month’s lease payment, tax, title, license and/or registration fees. Monthly payments are based on a MSRP of $150,800 (includes destination fee), $10,000 manufacturer credit and $10,000 down payment. Based on a representative transaction, actual MSRP and lease terms may vary. Lower monthly payments available with higher down payment. No security deposit based on 16,000 kilometers per year and $0.35/km excess kilometer charge. Lessee is responsible for insurance, maintenance and repairs and excess wear and tear as defined in the lease contract. Option to purchase at lease end for an amount to be determined at lease signing. Color shown may not be available. For details on vehicle specifications, standard features and current availability of equipment in your area, please contact your Karma Automotive dealer. Offer valid only at Karma Toronto and Karma Vancouver through June 30, 2018.</p>
                </div><!-- END Disclaimer Row -->
                </div><!-- END Mobile Price Table -->
            </div><!-- END container-->
        </section><!-- END Lease Section -->
    </div><!-- END lease-section-style-container -->
</div><!-- END Lease Section Position Container -->

<?php include(locate_template('template_part/map.php')); ?>

<?php get_footer(); ?>