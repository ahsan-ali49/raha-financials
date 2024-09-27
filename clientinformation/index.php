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
  <div id="information1">
    <!-- Navbar -->
    <div class="px-4 md:px-20 py-2.5 navbar-background">
      <div class="flex flex-wrap items-center justify-between mx-auto rounded-xl w-full pl-6 pr-2.5 py-2.5 navbar-link">
        <a href="../" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../assets/images/navbarLogo.svg" alt="raha Financials logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="javascript:void(0)" onclick="LiveChatWidget.call('maximize');" class="hidden md:block contact-btn">
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

    <div class="w-full px-1 md:px-20 py-20 flex flex-col items-center gap-16" id="insights">
      <h2 class="hero-primary-heading">
        Client <span class="hero-secondary-heading">Information</span>
      </h2>
      <div class="w-full flex flex-row justify-between flex-wrap">
        <div class="w-full md:w-3/5 information-form-div flex flex-col gap-7 order-2 md:order-1">
          <form method="post" action="privacyAgreement.php"
            class="information-form py-5 px-9 flex flex-col gap-1.5 md:gap-5" id="clientForm">
            <span class="information-form-span">1. Client Information</span>
            <div class="form-fields-div flex-wrap gap-y-1.5">
              <input type="text" name="name" id="fullName" class="information-name-field w-full md:w-[49%]"
                placeholder="Full Name*" required />
              <input type="email" name="email" id="email" class="information-secondary-field w-full md:w-[49%]"
                placeholder="Email*" required />
            </div>
            <div class="form-fields-div flex-wrap gap-y-1.5">
              <input type="date" name="dob" id="dob" class="information-secondary-field w-full md:w-[49%]"
                placeholder="Date of Birth" required />
              <input type="text" name="number" id="phoneNumber" class="information-secondary-field w-full md:w-[49%]"
                placeholder="Phone Number" required />
            </div>
            <input type="text" name="businessName" id="businessName" class="information-secondary-field w-full"
              placeholder="Business Name (if applicable)" />
            <input type="text" name="homeAddress" id="homeAddress" class="information-secondary-field w-full"
              placeholder="Home Address (if different)" />
            <div class="form-fields-div flex-wrap gap-y-1.5">
              <input type="text" name="city" id="city" required class="information-secondary-field w-full md:w-[49%]"
                placeholder="City" />
              <input type="text" name="state" id="state" required class="information-secondary-field w-full md:w-[49%]"
                placeholder="State/ Province" />
            </div>
            <div class="form-fields-div flex-wrap gap-y-1.5">
              <input type="text" name="postalCode" id="postalCode" required
                class="information-secondary-field w-full md:w-[49%]" placeholder="Postal Code" />
              <input type="text" id="country" name="country" required
                class="information-secondary-field w-full md:w-[49%]" placeholder="Country" />
            </div>
            <div class="form-fields-div flex-wrap gap-y-1.5">
              <input type="text" id="citizenshipStatus" name="citizenshipStatus" required
                class="information-secondary-field w-full md:w-[49%]" placeholder="Citizenship Status" />
              <input type="text" id="countryOfCitizenship" name="countryOfCitizenship" required
                class="information-secondary-field w-full md:w-[49%]" placeholder="Country of Citizenship" />
            </div>
            <div class="flex flex-col gap-2.5 mt-2 md:mt-0">
              <p class="font-bold">Are you a U.S. tax resident?</p>
              <div>
                <input type="radio" id="yes" name="ustr" value="YES" required />
                <label for="yes" class="font-bold">Yes</label>
              </div>
              <div>
                <input type="radio" id="no" name="ustr" value="NO" required />
                <label for="no" class="font-bold">No</label>
              </div>
            </div>
            <fieldset>
              <p class="font-bold">Opted Services</p>
              <div>
                <input type="checkbox" id="bk" name="bk" />
                <label for="bk" class="font-medium">Bookkeeping</label>
              </div>
              <div>
                <input type="checkbox" id="fs" name="fs" />
                <label for="fs" class="font-medium">Financial Statements</label>
              </div>
              <div>
                <input type="checkbox" id="tpf" name="tpf" />
                <label for="tpf" class="font-medium">Tax Preparation and Filing</label>
              </div>
              <div>
                <input type="checkbox" id="ad" name="ad" />
                <label for="ad" class="font-medium">Auditing</label>
              </div>
              <div>
                <input type="checkbox" id="pp" name="pp" />
                <label for="pp" class="font-medium">Payroll Processing</label>
              </div>
              <div>
                <input type="checkbox" id="br" name="br" />
                <label for="br" class="font-medium">Business Registration</label>
              </div>
              <div>
                <input type="checkbox" id="itin" name="itin" />
                <label for="itin" class="font-medium">ITIN Registration (if applicable)</label>
              </div>
              <div>
                <input type="checkbox" id="nwe" name="nwe" />
                <label for="nwe" class="font-medium">Net Worth Evaluation</label>
              </div>
            </fieldset>
            <textarea id="taxResidency" name="taxResidency" placeholder="If no, please specify your tax residency:"
              class="information-tertiary-field w-full" rows="4"></textarea>
            <button type="submit" name="submit" class="hero-btn w-fit">
              Submit
            </button>
          </form>

          

          <div class="form-step-div">
            <span class="information-form-span">2. Privary Agreement</span>
          </div>
          <div class="form-step-div">
            <span class="information-form-span">3. Engagement Letter</span>
          </div>
        </div>
        <div class="w-full md:w-1/3 flex flex-row md:flex-col gap-2 md:gap-0 order-1 md:order-2">
          <div class="client-information-primary-bar mb-6 w-1/2 md:w-full">
            Client Information
          </div>
          <div class="client-information-secondary-bar mb-6 w-1/2 md:w-full">
            Privacy Agreement
          </div>
          <div class="client-information-secondary-bar hidden md:block">
            Engagement Letter
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="w-full footer-div px-1 md:px-20 mt-0 md:mt-10">
    <div
      class="w-full border border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 footer-inner-div pb-5 flex-wrap">
      <div class="w-full md:w-1/4 footer-col-1">
        <a href="../index.php"><img src="../assets/images/footerImage1.png" alt="" /></a>
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
            <li>GLobal Payroll Management</li>
            <li>International Tax Compliance</li>
            <li>Multi-Country Financial Reporting</li>
            <li>Currency Management</li>
          </ul>
        </a>
        <a href="../financialManagement" class="flex flex-col gap-4 items-start w-2/12">
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
        <a href="../healthcareMedical" class="flex flex-col gap-3 items-start border-0 border-r-2 border-gray-200 w-1/5">
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
  <script src="../informationScript.js"></script>
  <script src="../modalScript.js"></script>
  <script src="../url.js"></script>
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