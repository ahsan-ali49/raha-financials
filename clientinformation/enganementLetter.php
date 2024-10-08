<?php
if (isset($_POST['submit'])) {


  extract($_POST);

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client Information | Raha Financials</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favIcon.svg" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../enterpriseStyle.css" />
    <link rel="stylesheet" href="../pricingStyle.css" />
    <link rel="stylesheet" href="../informationStyle.css" />
    <link rel="stylesheet" href="../servicesStyle.css" />
    <link rel="stylesheet" href="../blog.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>

  <body>
    <div id="information3">
      <!-- Navbar -->
      <div class="px-4 md:px-20 py-2.5 navbar-background">
        <div class="flex flex-wrap items-center justify-between mx-auto rounded-xl w-full pl-6 pr-2.5 py-2.5 navbar-link">
          <a href="../" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../assets/images/navbarLogo.svg" alt="raha Financials logo" />
          </a>
          <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="../contactus" class="hidden md:block contact-btn">
              Contact Us
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15" />
              </svg>
            </button>
          </div>
          <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col gap-x-9 font-medium rounded-lg rtl:space-x-reverse md:flex-row md:mt-0">
              <li>
                <a href="../#services" class="block navlink">Services</a>
              </li>
              <li>
                <a href="../industries" class="block navlink">Industries</a>
              </li>
              <li>
                <a href="../blogs" class="block navlink">Insights</a>
              </li>
              <li>
                <a href="../pricing" class="block navlink">Pricing</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div class="w-full hidden md:hidden mobile-menu" id="mobile-menu">
        <ul class="w-full flex flex-col items-start mr-6 md:mr-0 gap-y-2.5">
          <li class="w-full">
            <a href="../#services" class="block navlink p-2.5">Services</a>
          </li>
          <li class="w-full">
            <a href="../industries" class="block navlink">Industries</a>
          </li>
          <li class="w-full">
            <a href="../blogs" class="block navlink">Insights</a>
          </li>
          <li class="w-full" id="pricing-navlink">
            <a href="../pricing" class="block navlink">Pricing</a>
          </li>
          <li class="w-full">
            <a href="../contactus" class="block navlink-btn w-full">Contact Us</a>
          </li>
        </ul>
      </div>

      <div class="w-full px-2 md:px-20 p-10 md:py-20 flex flex-col items-center gap-16" id="insights">
        <h2 class="hero-primary-heading">
          Client <span class="hero-secondary-heading">Information</span>
        </h2>
        <div class="w-full flex flex-row justify-between flex-wrap">
          <div class="w-full md:w-3/5 information-form-div flex flex-col gap-7 order-2 md:order-1">
            <div class="form-step-div">
              <span class="information-form-span">1. Client Information</span>
            </div>

            <div class="form-step-div">
              <span class="information-form-span">2. Privacy Agreement</span>
            </div>

            <form method="post" action="../formsubmit.php" enctype="multipart/form-data"
              class="information-form py-0 px-2 md:px-9 flex flex-col gap-5" id="engagement-form">
              <span class="information-form-span">3. Engagement Letter</span>
              <div class="flex flex-col gap-2.5">
                <span>Please read the Engagement Letter below and click
                  proceed.</span>
                <span>
                  This Engagement Letter outlines the terms and
                  conditions under which <b>RAHA Financials</b> will
                  provide accounting and financial services to
                  <span class="client-name-span"><b><?php echo $name ?></b></span>.</span>
                <span class="font-bold">1. Scope of Services:</span>
                <span>The Company agrees to provide the Client with comprehensive
                  accounting and financial services, which may include but are
                  not limited to:
                </span>
                <ul class="px-6 list-disc">
                  <?php
                  if (isset($bk)) {
                    ?>
                    <li><b><?php
                    echo 'Book Keeping';
                    ?></b></li><?php
                  }
                  if (isset($fs)) {
                    ?>
                    <li> <b> <?php
                    echo 'Financial Statements';
                    ?></b></li><?php
                  }
                  if (isset($ad)) {
                    ?>
                    <li><b><?php
                    echo 'Auditing';
                    ?></b></li><?php
                  }
                  if (isset($tpf)) {
                    ?>
                    <li><b><?php
                    echo 'Tax Preparation and Filing';
                    ?></b></li><?php
                  }
                  if (isset($pp)) {
                    ?>
                    <li><b><?php
                    echo 'Payroll Processing';
                    ?></b></li><?php
                  }
                  if (isset($br)) {
                    ?>
                    <li><b><?php
                    echo 'Business Registration';
                    ?></b></li><?php
                  }
                  if (isset($itin)) {
                    ?>
                    <li><b><?php
                    echo 'ITIN Registration (if applicable)';
                    ?></b></li><?php
                  }
                  if (isset($nwe)) {
                    ?>
                    <li><b><?php
                    echo 'Net Worth Evaluation';
                    ?></b></li><?php
                  }
                  ?>
                </ul>

                <ul class="px-6 list-disc services-list-render">
                  <!-- <li>Financial statements</li>
                  <li>Tax Preparation and Filing</li> -->
                </ul>

                <span class="font-bold">2. Terms and Conditions:</span>
                <span>2.1 Fees: The Client agrees to compensate the Company for
                  services rendered based on mutually agreed-upon fee
                  arrangements. Details regarding fees, payment terms, and
                  billing frequency are specified in a separate fee
                  agreement.</span>
                <span>2.2 Confidentiality: The Company is committed to maintaining
                  the confidentiality of all client information and financial
                  records. We will not disclose any client information to third
                  parties without the Client's explicit consent unless required
                  by law.</span>
                <span>2.3 Conflict of Interest: The Client acknowledges that the
                  Company may have relationships with other clients or entities
                  that could present potential conflicts of interest. The
                  Company will promptly disclose any such conflicts and work
                  with the Client to resolve them in an ethical and professional
                  manner.</span>
                <span>2.4 Independence: The Company will maintain its independence
                  and exercise professional judgment in providing services to
                  the Client. The Client understands and agrees that the Company
                  will not perform services that compromise its independence or
                  violate ethical standards.</span>
                <span>2.5 Term: This engagement shall commence on [start date] and
                  will continue until terminated by either party with at least
                  30 days' written notice. In the event of termination, the
                  Client agrees to compensate the Company for services rendered
                  up to the termination date.</span>
                <span>2.6 Governing Law: This Agreement shall be governed by and
                  construed in accordance with the laws of the United States.
                  Any disputes arising from or related to this Agreement shall
                  be resolved through arbitration in accordance with the rules
                  of [Arbitration Authority], and the decision of the arbitrator
                  shall be binding and final.</span>
                <span class="font-bold">3. Deliverables:</span>
                <span>
                  The Company will provide the Client with regular reports,
                  financial statements, and other deliverables as specified in
                  our service agreement or as requested by the Client.</span>
                <span class="font-bold">4. Client Responsibilities:</span>
                <span>The Client agrees to:</span>
                <ul class="px-6 list-disc">
                  <li>
                    Provide complete and accurate financial records and
                    documentation.
                  </li>
                  <li>
                    Promptly respond to requests for information or
                    clarification.
                  </li>
                  <li>
                    Abide by all applicable tax and financial regulations.
                  </li>
                  <li>
                    Cooperate with the Company in performing services
                    effectively.
                  </li>
                </ul>
                <span class="font-bold">5. Limitation of Liability:</span>
                <span>The Client acknowledges that the Company's liability for any
                  errors, omissions, or other professional misconduct is limited
                  to the fees paid by the Client for the services
                  rendered.</span>
                <span class="font-bold">6. Amendments:</span>
                <span>This Agreement may be amended or modified only in writing and
                  signed by both parties.</span>
                <span>Please indicate your agreement to the terms and conditions of
                  this Engagement Letter by signing and returning it.</span>
                <span class="font-bold">Privacy Agreement:</span>
                <span>Please note that this Engagement Letter is subject to our
                  Privacy Agreement, which governs the collection, use, and
                  protection of personal information provided by the Client. By
                  signing this Engagement Letter, you also acknowledge your
                  acceptance of the Privacy Agreement.</span>
                <span>We appreciate the opportunity to serve your accounting and
                  financial needs. If you have any questions or require further
                  clarification, please do not hesitate to contact us.</span>
              </div>

              <input type="text" name="name" value="<?php echo $name ?>" class="information-secondary-field w-full"
                placeholder="Full Name" />


              <div class="wrapper flex flex-col items-center">
                <canvas id="signaturePad" name="Signature" width="400" height="200" required
                  style="border: 2px solid #000; border-radius: 10px; margin:auto;"></canvas>
                <span class="font-bold w-full text-center">Signature</span>
                <div class="relative flex items-end h-10">
                  <a href="javascript:void(0)" id="clear"
                    class="bg-blue-500 text-white py-1 px-3 rounded text-sm bottom-0 mb-1 ms-3 ml-auto w-fit">Clear</a>
                </div>
              </div>

              <input type="hidden" name="email" value="<?php echo $email ?>" required />
              <input type="hidden" name="number" value="<?php echo $number ?>" required />
              <input type="hidden" name="businessName" value="<?php echo $businessName ?>" required />
              <input type="hidden" name="homeAddress" value="<?php echo $homeAddress ?>" required />
              <input type="hidden" name="city" value="<?php echo $city ?>" required />
              <input type="hidden" name="state" value="<?php echo $state ?>" required />
              <input type="hidden" name="postalCode" value="<?php echo $postalCode ?>" required />
              <input type="hidden" name="country" value="<?php echo $country ?>" required />
              <input type="hidden" name="citizenshipStatus" value="<?php echo $citizenshipStatus ?>" required />
              <input type="hidden" name="countryOfCitizenship" value="<?php echo $countryOfCitizenship ?>" required />
              <input type="hidden" name="ustr" value="<?php echo $ustr ?>" required />
              <input type="hidden" name="signature" id="Signature" value="" />
              <?php
              if (isset($bk)) {
                ?><input type="hidden" name="bk" value="<?php echo $bk ?>" required /><?php
              }

              if (isset($fs)) {
                ?><input type="hidden" name="fs" value="<?php echo $fs ?>" required /><?php
              }

              if (isset($ad)) {
                ?><input type="hidden" name="ad" value="<?php echo $ad ?>" required /><?php
              }

              if (isset($tpf)) {
                ?><input type="hidden" name="tpf" value="<?php echo $tpf ?>" required /><?php
              }

              if (isset($pp)) {
                ?><input type="hidden" name="pp" value="<?php echo $pp ?>" required /><?php
              }

              if (isset($br)) {
                ?><input type="hidden" name="br" value="<?php echo $br ?>" required /><?php
              }

              if (isset($itin)) {
                ?><input type="hidden" name="itin" value="<?php echo $itin ?>" required /><?php
              }

              if (isset($nwe)) {
                ?><input type="hidden" name="nwe" value="<?php echo $nwe ?>" required /><?php
              }

              if (isset($taxResidency)) {
                ?><input type="hidden" name="taxResidency" value="<?php echo $taxResidency ?>" required /><?php
              }
              ?>

              <fieldset>
                <div>
                  <input type="checkbox" id="pa" name="engagement_letter" required />
                  <label for="pa" class="font-medium">
                    I agree to the Engagement Letter</label>
                </div>
              </fieldset>

              <div class="flex flex-row justify-between mb-4">
                <a href="./privacyAgreement.php" class="information-previous-btn w-fit" id="info-3-previous-btn">
                  Previous
                </a>
                <button type="submit" id="submit" name="submit_informationpage" class="hero-btn w-fit"
                  id="info-3-btn">Submit</button>
              </div>
            </form>
            <script>
              var canvas = document.getElementById('signaturePad');
              var context = canvas.getContext('2d');
              var isDrawing = false;
              // Clear the canvas
              function clearCanvas() {
                context.clearRect(0, 0, canvas.width, canvas.height); // Clear the entire canvas
                context.beginPath(); // Reset the drawing path
              }

              canvas.addEventListener('mousedown', function (e) {
                isDrawing = true;
                context.moveTo(e.offsetX, e.offsetY);
              });

              canvas.addEventListener('mousemove', function (e) {
                if (isDrawing) {
                  context.lineTo(e.offsetX, e.offsetY);
                  context.stroke();
                }
              });

              canvas.addEventListener('mouseup', function () {
                isDrawing = false;
              });

              document.getElementById('clear').addEventListener('click', function () {
                clearCanvas();
              });
              var dataURL = canvas.toDataURL('image/png');  // Get the image data as a base64 string
              document.getElementById('Signature').value = dataURL;
              // Submit the signature
              document.getElementById('submit').addEventListener('click', function () {

                // Set the hidden input value
                var dataURL = canvas.toDataURL('image/png');  // Get the image data as a base64 string
                document.getElementById('Signature').value = dataURL;
              });
            </script>
          </div>
          <div class="w-full md:w-1/3 flex flex-row md:flex-col gap-2 md:gap-0 order-1 md:order-2">
            <div class="client-information-secondary-bar mb-6 hidden md:block">
              Client Information
            </div>
            <div class="client-information-secondary-bar mb-6 w-1/2 md:w-full">
              Privacy Agreement
            </div>
            <div class="client-information-primary-bar w-1/2 mb-6 md:w-full py-5">
              Engagement Letter
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <div class="w-full footer-div px-1 md:px-20 mt-5 md:mt-10">
      <div
        class="w-full border border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 footer-inner-div pb-5 flex-wrap">
        <div class="w-full md:w-1/4 footer-col-1">
          <a href="../"><img src="../assets/images/footerImage1.png" alt="" /></a>
          <p>
            Our team at RAHA is dedicated to ensuring your books are accurate,
            compliance is maintained, and your financial decisions are backed by
            strategic insights.
          </p>
          <img src="../assets/images/footerImage2.png" alt="" />
        </div>
        <div class="w-full md:w-1/5 footer-col-2">
          <span class="footer-link-heading">Quick Links</span>
          <ul>
            <li class="footer-link-item">
              <a href="../#services">Services</a>
            </li>
            <li class="footer-link-item">
              <a href="../industries">Industries</a>
            </li>
            <li class="footer-link-item">
              <a href="../blogs">Insights</a>
            </li>
            <li class="footer-link-item">
              <a href="../pricing">Pricing</a>
            </li>
            <li class="footer-link-item">
              <a href="../contactus">Contact</a>
            </li>
          </ul>
        </div>

        <div class="w-full md:w-5/12 footer-col-3 flex flex-col gap-2.5">
          <form method="post" action="../formsubmit.php">
            <span class="footer-form-heading mb-2.5">Reach out to us</span>
            <div class="w-full footer-form-div my-2.5">
              <input type="text" name="name" required placeholder="Full Name" class="w-1/2 footer-name-field" />
              <input type="email" name="email" required placeholder="Email" class="w-1/2 footer-email-field" />
            </div>
            <textarea name="message" id="message" required placeholder="Message"
              class="w-full footer-message-field mb-2.5"></textarea>
            <input type="hidden" name="url" class="url" value="" />
            <button type="submit" name="submit" class="footer-submit-btn">
              Submit
            </button>
          </form>
        </div>
      </div>
      <div class="flex flex-row justify-between flex-wrap w-full">
        <span class="footer-span">
          ©️ 2017 - 2023 RAHA Financials LLC All rights reserved. RAHA
          Financials refers to the RAHA Financials network and/or one or more of
          its member
        </span>
        <div>
          <a href="../privacy-policy" class="text-[#1445c2]">Privacy Policy</a>,
          <a href="../terms-conditions" class="text-[#1445c2]">Terms and Conditions</a>
        </div>
      </div>
    </div>

    <!-- Navbar Modal -->
    <div id="navbar-modal" class="hidden">
      <div class="modal-content h-1/2 mx-auto flex justify-center px-10 py-7 bg-white">
        <div id="modal-content-inner" class="flex flex-row justify-between w-full">
          <a href="../bookKeeping" class="flex flex-col gap-3 items-start w-2/12 border-0 border-r-2 border-gray-200">
            <span class="modal-list-head font-bold">Accounting and Bookkeeping Services</span>
            <ul class="flex flex-col gap-2">
              <li>Full Service Booking</li>
              <li>Accounts Payable and Receivable</li>
              <li>General Ledger and Management</li>
              <li>Bank Reconciliation</li>
            </ul>
          </a>
          <a href="../softwareSelection"
            class="flex flex-col gap-4 items-start w-2/12 border-0 border-r-2 border-gray-200">
            <span class="modal-list-head font-bold">Software Setup and Integration</span>
            <ul class="flex flex-col gap-2">
              <li>Setting up Xero and Quickbooks</li>
              <li>Accounting Software Integration</li>
              <li>Process Automation Implementation</li>
              <li>Financial Reporting and Dashboard Configuration</li>
            </ul>
          </a>
          <a href="../taxFiling" class="flex flex-col gap-4 items-start w-2/12 border-0 border-r-2 border-gray-200">
            <span class="modal-list-head font-bold">Tax Services</span>
            <ul class="flex flex-col gap-2">
              <li>Tax Planning and Filing</li>
              <li>International Tax Compliance</li>
              <li>Indirect Tax Management</li>
            </ul>
          </a>
          <a href="../globalServices" class="flex flex-col gap-4 items-start w-2/12 border-0 border-r-2 border-gray-200">
            <span class="modal-list-head font-bold">Global Services</span>
            <ul class="flex flex-col gap-2">
              <li>Global Payroll Management</li>
              <li>International Tax Compliance</li>
              <li>Multi-Country Financial Reporting</li>
              <li>Currency Management</li>
            </ul>
          </a>
          <a href="../financialReporting" class="flex flex-col gap-4 items-start w-2/12">
            <span class="modal-list-head font-bold">Financial Management and Consulting</span>
            <ul class="flex flex-col gap-2">
              <li>Financial Planning and Analysis</li>
              <li>Strategic Financial Consulting</li>
              <li>Budgeting and Forecasting</li>
              <li>Cash Flow Management</li>
            </ul>
          </a>
        </div>
      </div>
    </div>

    <!-- Industry Modal -->
    <div id="industry-modal" class="hidden">
      <div class="modal-content mx-auto flex flex-col justify-center px-10 py-7 bg-white">
        <div id="modal-content-inner" class="flex flex-row justify-between flex-wrap w-full pb-7">
          <a href="../hospitalityPage" class="flex flex-col gap-3 items-start border-0 border-r-2 border-gray-200 w-1/5">
            <span class="modal-list-head font-bold">Hospitality and Food Services</span>
            <ul class="flex flex-col gap-2">
              <li>Restaurants and Cafes</li>
              <li>Hotels and Resorts</li>
              <li>Catering Services</li>
              <li>Event Management</li>
            </ul>
          </a>
          <a href="../eCommerce" class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
            <span class="modal-list-head font-bold">E-commerse and Retail</span>
            <ul class="flex flex-col gap-2">
              <li>Online Marketplaces</li>
              <li>Fashion and Apparel Retailers</li>
              <li>Electronics and Gadgets</li>
              <li>Speciality Stores</li>
            </ul>
          </a>
          <a href="../realEstate" class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
            <span class="modal-list-head font-bold">Real Estate</span>
            <ul class="flex flex-col gap-2">
              <li>Property Management</li>
              <li>Real Estate Development</li>
              <li>Rental Services</li>
              <li>Commercial Real Estate</li>
            </ul>
          </a>
          <a href="../technologyStartup" class="flex flex-col gap-4 items-start w-1/5">
            <span class="modal-list-head font-bold">Technology and Startups</span>
            <ul class="flex flex-col gap-2">
              <li>Software Development</li>
              <li>IT Services</li>
              <li>Mobile App Development</li>
              <li>Artificial Intelligence</li>
            </ul>
          </a>
        </div>

        <!--  -->
        <div id="modal-content-inner"
          class="flex flex-row justify-between flex-wrap w-full border-0 border-t-2 border-gray-200 pt-7">
          <a href="../healthcareMedical"
            class="flex flex-col gap-3 items-start border-0 border-r-2 border-gray-200 w-1/5">
            <span class="modal-list-head font-bold">Healthcare and Medical Services</span>
            <ul class="flex flex-col gap-2">
              <li>Hospitals and Clinics</li>
              <li>Medical Device Manufecturers</li>
              <li>Telehealth Services</li>
              <li>Pharmaceutical Companies</li>
            </ul>
          </a>
          <a href="../energyUtilities" class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
            <span class="modal-list-head font-bold">Energy and Utilities</span>
            <ul class="flex flex-col gap-2">
              <li>Renewable Energy Companies</li>
              <li>Utilities Providers</li>
              <li>Oil and Gas Industry</li>
              <li>Sustainable Technologies</li>
            </ul>
          </a>
          <a href="../agricultureFarming"
            class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
            <span class="modal-list-head font-bold">Agriculture and Farming</span>
            <ul class="flex flex-col gap-2">
              <li>Crop Farming</li>
              <li>Livestock Farming</li>
              <li>Agribusiness</li>
              <li>Agricultural Equipment Manufacturing</li>
            </ul>
          </a>
          <a href="../constructionInfrastructure" class="flex flex-col gap-4 items-start w-1/5">
            <span class="modal-list-head font-bold">Construction and Infrastructure</span>
            <ul class="flex flex-col gap-2">
              <li>Commercial Construction</li>
              <li>Residential Construction</li>
              <li>Infrastructure Development</li>
              <li>Engineering Services</li>
            </ul>
          </a>
        </div>
      </div>
    </div>

    <!-- <script src="../scripts.js"></script> -->
    <script src="../modalScript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js"
      integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../url.js"></script>\
    <script src="../livechat.js"></script>
    
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18500763;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/18500763/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

  </body>

  </html>


  <?php

} else {
  header('location: ./');
}
?>