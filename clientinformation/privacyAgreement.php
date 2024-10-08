<?php
if (isset($_POST['submit'])) {


  extract($_POST);

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Agreement | Raha Financials</title>
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
    <div id="information2">
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

            <form method="post" action="enganementLetter.php"
              class="information-form py-5 px-2 md:px-9 flex flex-col gap-5" id="privacy-agreement">
              <span class="information-form-span">2. Privacy Agreement</span>
              <div class="flex flex-col gap-2.5">
                <span>Please read the Privacy Agreement below and click
                  proceed.</span>
                <span>
                  This Privacy Agreement ("Agreement") is entered into between
                  RAHA Financials ("the Company") and ("the Client") to govern
                  the collection, use, and protection of personal information
                  provided by the Client.</span>
                <span class="font-bold">1. Information Collection: </span>
                <span>1.1 Types of Information: The Client agrees to provide the
                  Company with various types of personal information, including
                  but not limited to:
                </span>
                <ul class="px-6 list-disc">
                  <li>Full Name</li>
                  <li> Contact Information (Address, Phone Number, Email Address)
                  </li>

                  <li>Social Security Number or Tax Identification Number</li>
                  <li>Financial Records and Documentation</li>
                  <li>
                    Any other information required for the provision of
                    accounting and financial services.
                  </li>
                </ul>

                <span>1.2 Consent: By entering into this Agreement, the Client
                  provides explicit consent for the Company to collect, use, and
                  process their personal information as necessary for the
                  provision of accounting and financial services.</span>
                <span class="font-bold">2. Use of Information:</span>
                <span>2.1 Purpose: The Company will use the provided personal
                  information solely for the following purposes:</span>
                <span>Providing accounting and financial services to the
                  Client.</span>
                <span>Complying with legal and regulatory requirements.</span>
                <span>Internal record-keeping and business operations.</span>
                <span>2. Third-Party Disclosure: The Company will not disclose the
                  Client's personal information to third parties without the
                  Client's explicit consent, except as required by law or in
                  accordance with the terms of this Agreement.</span>
                <span>2.3 Retention: The Company will retain the Client's personal
                  information for as long as necessary to fulfill the purposes
                  outlined in this Agreement or as required by applicable laws
                  and regulations.</span>
                <span class="font-bold">3. Security Measures:</span>
                <span>
                  3.1 Security: The Company will implement reasonable security
                  measures to protect the confidentiality, integrity, and
                  availability of the Client's personal information. These
                  measures include, but are not limited to, encryption, access
                  controls, and regular security assessments.</span>
                <span>3.2 Data Breach Notification: In the event of a data breach
                  or unauthorized access resulting in the compromise of personal
                  information, the Company will promptly notify the Client and
                  take appropriate steps to mitigate any harm.</span>
                <span class="font-bold">4. Client's Rights:</span>
                <span>4.1 Access and Correction: The Client has the right to access
                  their personal information held by the Company and to request
                  corrections or updates to inaccurate or incomplete
                  information.</span>
                <span>4.2 Deletion: The Client may request the deletion of their
                  personal information unless the Company has a legal obligation
                  to retain such data.</span>
                <span class="font-bold">5. Marketing Communications:</span>
                <span>The Company may use the Client's contact information to send
                  occasional marketing communications about our services. The
                  Client can opt out of receiving these communications at any
                  time.</span>
                <span class="font-bold">6. Changes to this Agreement:</span>
                <span>The Company reserves the right to modify this Agreement from
                  time to time. Any changes will be communicated to the Client,
                  and continued use of our services will signify acceptance of
                  the updated terms.</span>
                <span class="font-bold">7. Contact Information:</span>
                <span>If the Client has any questions, concerns, or requests
                  related to this Agreement or the treatment of their personal
                  information, they can contact:</span>
                <span>[RAHA Financials]</span>
                <span>By signing this Privacy Agreement, you acknowledge that you
                  have read, understood, and agreed to the terms and conditions
                  outlined herein.</span>
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

              <input type="text" name="name" class="information-secondary-field w-full" value="<?php echo $name ?>"
                placeholder="Full Name*" required />
              <fieldset>
                <div>
                  <input type="checkbox" id="pa" name="privacy_agreement" required />
                  <label for="pa" class="font-medium">
                    I agree to the Privacy Agreement</label>
                </div>
              </fieldset>

              <div class="flex flex-row justify-between">
                <a href="./" class="information-previous-btn w-fit" id="info-2-previous-btn">
                  Previous
                </a>
                <button type="submit" name="submit" class="hero-btn w-fit" id="info-2-btn">Next</button>
              </div>
            </form>

            <div class="form-step-div">
              <span class="information-form-span">3. Engagement Letter</span>
            </div>
          </div>
          <div class="w-full md:w-1/3 flex flex-row md:flex-col gap-2 md:gap-0 order-1 md:order-2">
            <div class="client-information-secondary-bar hidden md:block">
              Client Information
            </div>
            <div class="client-information-primary-bar mb-6 w-1/2 md:w-full">
              Privacy Agreement
            </div>
            <div class="client-information-secondary-bar mb-6 w-1/2 md:w-full">
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
    <!-- <script src="../informationScript.js"></script> -->
    <script src="../modalScript.js"></script>
    <script src="../livechat.js"></script>
    <script src="../url.js"></script>
    
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