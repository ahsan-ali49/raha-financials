<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pricing | Raha Financials</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/favIcon.svg" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="enterpriseStyle.css" />
  <link rel="stylesheet" href="pricingStyle.css" />
  <link rel="stylesheet" href="informationStyle.css" />
  <link rel="stylesheet" href="servicesStyle.css" />
  <link rel="stylesheet" href="blog.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div id="pricing">
    <!-- Navbar -->
    <div class="px-0 md:px-20 py-2.5 navbar-background">
      <div class="flex flex-wrap items-center justify-between mx-auto rounded-xl w-full pl-6 pr-2.5 py-2.5 navbar-link">
        <a href="./" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="./assets/images/navbarLogo.svg" alt="raha Financials logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="./contactus" class="hidden md:block contact-btn">
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
              <a href="./#services" class="block navlink">Services</a>
            </li>
            <li>
              <a href="./industries" class="block navlink">Industries</a>
            </li>
            <li>
              <a href="./blogs" class="block navlink">Insights</a>
            </li>
            <li>
              <a href="./pricing" class="block navlink">Pricing</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div class="w-full hidden md:hidden mobile-menu" id="mobile-menu">
      <ul class="w-full flex flex-col items-start mr-6 md:mr-0 gap-y-2.5">
        <li class="w-full">
          <a href="#services" class="block navlink p-2.5">Services</a>
        </li>
        <li class="w-full">
          <a href="./industries" class="block navlink">Industries</a>
        </li>
        <li class="w-full">
          <a href="./blogs" class="block navlink">Insights</a>
        </li>
        <li class="w-full" id="pricing-navlink">
          <a href="./pricing" class="block navlink">Pricing</a>
        </li>
        <li class="w-full">
          <a href="./contactus" class="block navlink-btn w-full">Contact Us</a>
        </li>
      </ul>
    </div>

    <!-- Hero Section -->
    <div class="flex flex-col items-center justify-center gap-5 py-10 md:py-20">
      <h2 class="hero-heading-pricing">
        Our <span class="hero-secondary-heading">Pricing</span> Plans
      </h2>
      <p class="hero-para-pricing px-1 md:px-0 w-full md:w-1/2">
        Our pricing plans provide affordable and flexible options to access
        expert financial support that streamlines operations and boosts
        productivity. We offer customizable packages for businesses of all
        sizes, with transparent pricing and no hidden fees. From accounting
        and payroll to strategic financial planning, we offer a range of
        services designed to drive your success
      </p>
      <button class="hero-btn" id="bookDemoBtn">Book A Demo</button>
      <!-- Pop-up Form -->
      <div id="popupForm" class="popup-form">
        <div class="form-content md:w-1/2" style="
              padding: 35px;
              border-radius: 20px;
              border: 2px solid var(--Main-Radial, #587edb);
              background: linear-gradient(
                  180deg,
                  rgba(255, 255, 255, 0.3) 0%,
                  rgba(255, 255, 255, 0) 100%
                ),
                #fff;
              box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                0px 6px 14px 0px rgba(176, 176, 176, 0.1);
            ">
          <div class="flex flex-row justify-between items-center gap-y-5 w-full">
            <h2 style="
                  color: var(--Black, #000);
                  text-align: center;
                  font-family: Uncut Sans;
                  font-size: 33px;
                  font-style: normal;
                  font-weight: 600;
                  line-height: normal;
                  letter-spacing: -0.99px;
                  margin: 0 auto 20px auto;
                " class="text-center">
              Book A Demo
            </h2>
            <span class="close-btn fixed left-0 top-0 closeBtn hidden">&times;</span>
          </div>
          <form id="popup-form" action="formsubmit.php" method="post" class="flex flex-col gap-2">
            <div class="flex flex-row gap-2.5">
              <input type="text" name="name" required placeholder="Full Name" class="grow information-secondary-field"
                style="
                    border-radius: 15px;
                    border: 1px solid #dadada;
                    box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                      0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                      0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                      0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                      0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                  " />
              <input type="text" name="number" required placeholder="Phone Number"
                class="grow information-secondary-field" style="
                    border-radius: 15px;
                    border: 1px solid #dadada;
                    box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                      0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                      0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                      0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                      0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                  " />
            </div>

            <input type="email" name="email" required placeholder="Email" class="grow information-secondary-field"
              style="
                  border-radius: 15px;
                  border: 1px solid #dadada;
                  box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                    0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                    0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                    0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                    0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                " />
            <textarea type="business" name="business" required placeholder="Nature of Business"
              class="grow information-tertiary-field" style="
                  border-radius: 15px;
                  border: 1px solid #dadada;
                  box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                    0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                    0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                    0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                    0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                " rows="4"></textarea>
            <input type="hidden" name="url" class="url">
            <button type="submit" name="submit" class="mt-2 w-fit mx-auto footer-submit-btn">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Pricing Cards -->
    <div class="px-5 md:px-10">
      <div
        class="flex flex-col items-center justify-center gap-5 px-5 md:px-10 py-10 pricing-cards-div relative overflow-x-hidden">
        <div class="w-full flex flex-row justify-between flex-wrap md:flex-nowrap gap-1">
          <div class="pricing-card-pricing grow hover:bg-[#000080] hover:text-white transition-background duration-500">
            <div
              class="h-full flex flex-col items-between justify-between gap-5 p-4 rounded-lg transition-background duration-500 text-white pricing-card-child">
              <div class="flex flex-col justify-between items-start gap-5">
                <div class="img-box imgbox w-fit p-3.5 rounded-lg">
                  <img src="./assets/images/enterprise/Vector3.png" alt="" />
                </div>
                <div class="flex flex-col gap-2">
                  <span class="pricing-card-span-1">Personal Plan</span>
                  <span class="pricing-card-span-2">Starting From</span>
                  <span class="pricing-card-span-3 hover:text-white">$79<span class="">/mo</span></span>
                </div>
                <ul class="flex flex-col gap-2.5">
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Personal monetary
                    evaluation
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Bookkeeping
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Financial statements
                    preparation
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Budgeting and cashflow
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Financial Planning
                  </li>
                </ul>
              </div>
              <button class="pricing-card-btn text-center learnMoreBtn">
                Learn More
              </button>
            </div>
          </div>
          <!-- Pop-up Form -->
          <div id="clientInformationForm1" class="popup-form">
            <div class="form-content relative md:w-1/2">
              <span class="close-btn closeBtn hidden">&times;</span>
              <!-- <h2>Client Information</h2> -->
              <form method="post"
                class="information-form pt-5 pb-2 px-9 flex flex-col gap-1.5 md:gap-5 bg-[#fefefe] h-[90vh]"
                id="clientForm1">
                <!-- Form fields as provided -->
                <!-- [Form content from the provided form goes here] -->
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
                  <input type="text" name="number" id="phoneNumber"
                    class="information-secondary-field w-full md:w-[49%]" placeholder="Phone Number" required />
                </div>
                <div class="form-fields-div flex-wrap gap-y-1.5">
                  <input type="text" name="businessName" id="businessName" class="information-secondary-field w-full"
                    placeholder="Business Name (if applicable)" />
                </div>
                <div class="form-fields-div flex-wrap gap-y-1.5">
                  <input type="text" name="homeAddress" id="homeAddress" class="information-secondary-field w-full"
                    placeholder="Home Address (if different)" />
                </div>
                <div class="form-fields-div flex-wrap gap-y-1.5">
                  <input type="text" name="city" id="city" required
                    class="information-secondary-field w-full md:w-[49%]" placeholder="City" />
                  <input type="text" name="state" id="state" required
                    class="information-secondary-field w-full md:w-[49%]" placeholder="State/ Province" />
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
                    <input type="radio" id="ustr" name="ustr" value="YES" required />
                    <label for="yes" class="font-bold">Yes</label>
                  </div>
                  <div>
                    <input type="radio" id="ustr" name="ustr" value="NO" required />
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
                <div class="form-fields-div flex-wrap gap-y-1.5">
                  <textarea id="taxResidency" name="taxResidency"
                    placeholder="If no, please specify your tax residency:" class="information-tertiary-field w-full"
                    rows="4"></textarea>
                </div>
                <a href="javascript:void(0)" id="info-1-btn"
                  class="hero-btn bottom-0 mb-1 ml-auto w-fit flex justify-end">
                  Next
                </a>
              </form>
            </div>
          </div>
          <div class="pricing-card-pricing grow hover:bg-[#000080] hover:text-white transition-background duration-500">
            <div
              class="h-full flex flex-col items-between justify-between gap-5 p-4 rounded-lg transition-background duration-500 text-white pricing-card-child">
              <div class="flex flex-col items-start gap-5">
                <div class="img-box-secondary w-fit p-2.5 rounded-lg">
                  <img src="./assets/images/enterprise/database4.png" alt="" />
                </div>
                <div class="flex flex-col gap-2">
                  <span class="pricing-card-span-1">Standard Plan</span>
                  <span class="pricing-card-span-2">Starting From</span>
                  <span class="pricing-card-span-3">$149<span class="">/mo</span></span>
                </div>
                <ul class="flex flex-col gap-2.5">
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Bookkeeping
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Accounts receivable
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Accounts payable
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Monthly financials
                  </li>
                </ul>
              </div>
              <button class="pricing-card-btn text-center learnMoreBtn">
                Learn More
              </button>
            </div>
          </div>
          <!-- Pop-up Form -->
          <div id="clientInformationForm2" class="popup-form">
            <div class="form-content relative md:w-1/2">
              <span class="close-btn hidden closeBtn">&times;</span>
              <!-- <h2>Client Information</h2> -->
              <form method="post"
                class="information-form pt-5 pb-28 px-9 flex flex-col gap-1.5 md:gap-5 bg-[#fefefe] h-[90vh]"
                id="clientForm2">
                <span class="information-form-span">2. Privacy Agreement</span>
                <div class="flex flex-col gap-2.5">
                  <span>Please read the Privacy Agreement below and click
                    proceed.</span>
                  <span>
                    This Privacy Agreement ("Agreement") is entered into
                    between RAHA Financials ("the Company") and ("the Client")
                    to govern the collection, use, and protection of personal
                    information provided by the Client.</span>
                  <span class="font-bold">1. Information Collection: </span>
                  <span>1.1 Types of Information: The Client agrees to provide
                    the Company with various types of personal information,
                    including but not limited to:
                  </span>
                  <ul class="px-6 list-disc">
                    <li>Full Name</li>
                    <li>
                      Contact Information (Address, Phone Number, Email
                      Address)
                    </li>

                    <li>
                      Social Security Number or Tax Identification Number
                    </li>
                    <li>Financial Records and Documentation</li>
                    <li>
                      Any other information required for the provision of
                      accounting and financial services.
                    </li>
                  </ul>
                  <span>1.2 Consent: By entering into this Agreement, the Client
                    provides explicit consent for the Company to collect, use,
                    and process their personal information as necessary for
                    the provision of accounting and financial services.</span>
                  <span class="font-bold">2. Use of Information:</span>
                  <span>2.1 Purpose: The Company will use the provided personal
                    information solely for the following purposes:</span>
                  <span>Providing accounting and financial services to the
                    Client.</span>
                  <span>Complying with legal and regulatory requirements.</span>
                  <span>Internal record-keeping and business operations.</span>
                  <span>2. Third-Party Disclosure: The Company will not disclose
                    the Client's personal information to third parties without
                    the Client's explicit consent, except as required by law
                    or in accordance with the terms of this Agreement.</span>
                  <span>2.3 Retention: The Company will retain the Client's
                    personal information for as long as necessary to fulfill
                    the purposes outlined in this Agreement or as required by
                    applicable laws and regulations.</span>
                  <span class="font-bold">3. Security Measures:</span>
                  <span>
                    3.1 Security: The Company will implement reasonable
                    security measures to protect the confidentiality,
                    integrity, and availability of the Client's personal
                    information. These measures include, but are not limited
                    to, encryption, access controls, and regular security
                    assessments.</span>
                  <span>3.2 Data Breach Notification: In the event of a data
                    breach or unauthorized access resulting in the compromise
                    of personal information, the Company will promptly notify
                    the Client and take appropriate steps to mitigate any
                    harm.</span>
                  <span class="font-bold">4. Client's Rights:</span>
                  <span>4.1 Access and Correction: The Client has the right to
                    access their personal information held by the Company and
                    to request corrections or updates to inaccurate or
                    incomplete information.</span>
                  <span>4.2 Deletion: The Client may request the deletion of
                    their personal information unless the Company has a legal
                    obligation to retain such data.</span>
                  <span class="font-bold">5. Marketing Communications:</span>
                  <span>The Company may use the Client's contact information to
                    send occasional marketing communications about our
                    services. The Client can opt out of receiving these
                    communications at any time.</span>
                  <span class="font-bold">6. Changes to this Agreement:</span>
                  <span>The Company reserves the right to modify this Agreement
                    from time to time. Any changes will be communicated to the
                    Client, and continued use of our services will signify
                    acceptance of the updated terms.</span>
                  <span class="font-bold">7. Contact Information:</span>
                  <span>If the Client has any questions, concerns, or requests
                    related to this Agreement or the treatment of their
                    personal information, they can contact:</span>
                  <span>[RAHA Financials]</span>
                  <span>By signing this Privacy Agreement, you acknowledge that
                    you have read, understood, and agreed to the terms and
                    conditions outlined herein.</span>
                </div>
                <input type="text" name="name" id="name-2" class="information-secondary-field w-full" value=""
                  placeholder="Full Name*" required />
                <fieldset>
                  <div>
                    <input type="checkbox" id="pa" name="privacy_agreement" required />
                    <label for="pa" class="font-medium">
                      I agree to the Privacy Agreement</label>
                  </div>
                </fieldset>

                <div class="flex flex-row justify-between">
                  <a href="javascript:void(0)" class="information-previous-btn w-fit" id="info-2-previous-btn">
                    Previous
                  </a>
                  <a href="javascript:void(0)" id="info-2-btn"
                    class="hero-btn bottom-0 mb-1 ml-auto w-fit flex justify-end">
                    Next
                  </a>
                </div>
              </form>
            </div>
          </div>
          <div class="pricing-card-pricing grow hover:bg-[#000080] hover:text-white transition-background duration-500">
            <section
              class="h-full flex flex-col items-between gap-5 p-4 rounded-lg transition-background duration-500 text-white pricing-card-child">
              <div class="flex flex-col items-start gap-5">
                <div class="img-box w-fit p-2.5 rounded-lg">
                  <img src="./assets/images/enterprise/database3.png" alt="" />
                </div>
                <div class="flex flex-col gap-2">
                  <span class="pricing-card-span-1">Advanced Plan</span>
                  <span class="pricing-card-span-2">Starting From</span>
                  <span class="pricing-card-span-3">$250<span class="">/mo</span></span>
                </div>
                <ul class="flex flex-col gap-2.5">
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Bookkeeping
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Payroll services
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Sales tax
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Annual/ Quaterly/
                    Monthly filing
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Monthly financials
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Financial Analysis / KPI
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>VAT
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>IRS, HMRC etc notices
                  </li>
                </ul>
              </div>
              <button class="pricing-card-btn text-center learnMoreBtn">
                Learn More
              </button>
            </section>
          </div>
          <!-- Pop-up Form -->
          <div id="clientInformationForm3" class="popup-form">
            <div class="form-content relative md:w-1/2">
              <span class="close-btn closeBtn hidden">&times;</span>
              <!-- <script>
                // Get the modal
                var popupForm;
                var closeBtn = document.getElementById("closeBtn");

                closeBtn.onclick = function () {
                  console.log("hello world")
                  popupForm.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function (event) {
                  if (event.target == popupForm) {
                    popupForm.style.display = "none";
                  }
                }
              </script> -->
              <!-- <h2>Client Information</h2> -->
              <form method="post"
                class="information-form pt-5 pb-28 px-9 flex flex-col gap-1.5 md:gap-5 bg-[#fefefe] h-[90vh]"
                id="clientForm3">
                <span class="information-form-span">3. Engagement Letter</span>
                <div class="flex flex-col gap-2.5">
                  <span>Please read the Engagement Letter below and click
                    proceed.</span>
                  <span>
                    This Engagement Letter outlines the terms
                    and conditions under which RAHA Financials
                    will provide accounting and financial services to
                    <span class="client-name-span"><b id="client_name">

                      </b></span>.</span>
                  <span class="font-bold">1. Scope of Services:</span>
                  <span>The Company agrees to provide the Client with
                    comprehensive accounting and financial services, which may
                    include but are not limited to:
                  </span>
                  <ul class="px-6 list-disc">
                    <b>
                      <li id="bk-li"></li>
                    </b>
                    <b>
                      <li id="fs-li"></li>
                    </b>
                    <b>
                      <li id="tpf-li"></li>
                    </b>
                    <b>
                      <li id="ad-li"></li>
                    </b>
                    <b>
                      <li id="pp-li"></li>
                    </b>
                    <b>
                      <li id="br-li"></li>
                    </b>
                    <b>
                      <li id="itin-li"></li>
                    </b>
                    <b>
                      <li id="nwe-li"></li>
                    </b>
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
                  <span>2.2 Confidentiality: The Company is committed to
                    maintaining the confidentiality of all client information
                    and financial records. We will not disclose any client
                    information to third parties without the Client's explicit
                    consent unless required by law.</span>
                  <span>2.3 Conflict of Interest: The Client acknowledges that
                    the Company may have relationships with other clients or
                    entities that could present potential conflicts of
                    interest. The Company will promptly disclose any such
                    conflicts and work with the Client to resolve them in an
                    ethical and professional manner.</span>
                  <span>2.4 Independence: The Company will maintain its
                    independence and exercise professional judgment in
                    providing services to the Client. The Client understands
                    and agrees that the Company will not perform services that
                    compromise its independence or violate ethical
                    standards.</span>
                  <span>2.5 Term: This engagement shall commence on [start date]
                    and will continue until terminated by either party with at
                    least 30 days' written notice. In the event of
                    termination, the Client agrees to compensate the Company
                    for services rendered up to the termination date.</span>
                  <span>2.6 Governing Law: This Agreement shall be governed by
                    and construed in accordance with the laws of the United
                    States. Any disputes arising from or related to this
                    Agreement shall be resolved through arbitration in
                    accordance with the rules of [Arbitration Authority], and
                    the decision of the arbitrator shall be binding and
                    final.</span>
                  <span class="font-bold">3. Deliverables:</span>
                  <span>
                    The Company will provide the Client with regular reports,
                    financial statements, and other deliverables as specified
                    in our service agreement or as requested by the
                    Client.</span>
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
                  <span>The Client acknowledges that the Company's liability for
                    any errors, omissions, or other professional misconduct is
                    limited to the fees paid by the Client for the services
                    rendered.</span>
                  <span class="font-bold">6. Amendments:</span>
                  <span>This Agreement may be amended or modified only in writing
                    and signed by both parties.</span>
                  <span>Please indicate your agreement to the terms and
                    conditions of this Engagement Letter by signing and
                    returning it.</span>
                  <span class="font-bold">Privacy Agreement:</span>
                  <span>Please note that this Engagement Letter is subject to our
                    Privacy Agreement, which governs the collection, use, and
                    protection of personal information provided by the Client.
                    By signing this Engagement Letter, you also acknowledge
                    your acceptance of the Privacy Agreement.</span>
                  <span>We appreciate the opportunity to serve your accounting
                    and financial needs. If you have any questions or require
                    further clarification, please do not hesitate to contact
                    us.</span>
                </div>

                <input type="text" name="name" value="" id="name-3" class="information-secondary-field w-full"
                  placeholder="Full Name" />

                <div class="wrapper flex flex-col items-center">

                  <canvas id="signaturePad" width="400" height="200" required
                    style="border: 2px solid #000; border-radius: 10px; margin:auto;"></canvas>

                  <!-- <input type="file" name="signature" id="signature" class="information-secondary-field w-full"
                    accept=".jpg,.jpeg,.png," required /> -->
                  <span class="font-bold w-full text-center">Signature</span>
                  <div class="relative flex items-end h-10">

                    <!-- <a href="javascript:void(0)" id="submit"
                      class="bg-blue-500 text-white py-1 px-3 rounded text-sm bottom-0 mb-1 ml-auto w-fit">Submit
                      Signature</a> -->
                    <a href="javascript:void(0)" id="clear"
                      class="bg-blue-500 text-white py-1 px-3 rounded text-sm bottom-0 mb-1 ms-3 ml-auto w-fit">Clear</a>
                  </div>
                </div>
                <fieldset>
                  <div>
                    <input type="checkbox" id="pa" name="engagement_letter" required />
                    <label for="pa" class="font-medium">
                      I agree to the Engagement Letter</label>
                  </div>
                  <input type="hidden" name="signature" id="signature">
                </fieldset>

                <div class="flex flex-row justify-between">
                  <a href="javascript:void(0)" class="information-previous-btn w-fit" id="info-3-previous-btn">
                    Previous
                  </a>
                  <a href="javascript:void(0)" id="info-3-btn"
                    class="hero-btn bottom-0 mb-1 ml-auto w-fit flex justify-end">
                    Submit
                  </a>
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

                // Submit the signature
                // document.getElementById('submit').addEventListener('click', function () {
                  
                //   // document.getElementById('signatureForm').submit();  // Submit the form
                // }
                // );
              </script>
            </div>
          </div>
          <div class="pricing-card-pricing grow hover:bg-[#000080] hover:text-white transition-background duration-500">
            <div
              class="h-full flex flex-col justify-between items-between gap-5 p-4 rounded-lg transition-background duration-500 text-white hover:text-white pricing-card-child">
              <div class="flex flex-col justify-between gap-5">
                <div class="img-box w-fit p-2.5 rounded-lg">
                  <img src="./assets/images/enterprise/database2.png" alt="" />
                </div>
                <div class="flex flex-col gap-2">
                  <span class="pricing-card-span-1">Enterprise Plan</span>

                </div>
                <ul class="flex flex-col gap-2.5">
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>CFO-Level Advisory
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Financial Training
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>International Tax
                    Planning
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Mergers and Acquisitions
                    Support
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Staff Outsourcing
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Financial Software
                    Integration
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Budget Forecasting
                  </li>
                  <li class="pricing-card-list-item">
                    <i class="fa fa-check-circle"></i>Custom Financial
                    Solutions
                  </li>
                </ul>
              </div>
              <Button class="pricing-card-btn text-center" id="consultBtn">
                Speak with a consultant</Button>
            </div>
          </div>
          <!-- Pop-up Form -->
          <div id="consultForm" class="popup-form">
            <div class="form-content md:w-1/2" style="
              padding: 35px;
              border-radius: 20px;
              border: 2px solid var(--Main-Radial, #587edb);
              background: linear-gradient(
                  180deg,
                  rgba(255, 255, 255, 0.3) 0%,
                  rgba(255, 255, 255, 0) 100%
                ),
                #fff;
              box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                0px 6px 14px 0px rgba(176, 176, 176, 0.1);
            ">
              <div class="flex flex-row justify-between items-center gap-y-5 w-full">
                <h2 style="
                  color: var(--Black, #000);
                  text-align: center;
                  font-family: Uncut Sans;
                  font-size: 33px;
                  font-style: normal;
                  font-weight: 600;
                  line-height: normal;
                  letter-spacing: -0.99px;
                  margin: 0 auto 20px auto;
                " class="text-center">
                  Speak With A Consultant
                </h2>
                <span class="close-Cbtn fixed left-0 top-0 closeCBtn hidden">&times;</span>
              </div>
              <form id="popup-form" action="formsubmit.php" method="post" class="flex flex-col gap-2">
                <div class="flex flex-row gap-2.5">
                  <input type="text" name="name" required placeholder="Full Name"
                    class="grow information-secondary-field" style="
                    border-radius: 15px;
                    border: 1px solid #dadada;
                    box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                      0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                      0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                      0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                      0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                  " />
                  <input type="text" name="number" required placeholder="Phone Number"
                    class="grow information-secondary-field" style="
                    border-radius: 15px;
                    border: 1px solid #dadada;
                    box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                      0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                      0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                      0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                      0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                  " />
                </div>

                <input type="email" name="email" required placeholder="Email" class="grow information-secondary-field"
                  style="
                  border-radius: 15px;
                  border: 1px solid #dadada;
                  box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                    0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                    0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                    0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                    0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                " />
                <textarea type="business" name="business" required placeholder="Nature of Business"
                  class="grow information-tertiary-field" style="
                  border-radius: 15px;
                  border: 1px solid #dadada;
                  box-shadow: 0px 156px 44px 0px rgba(176, 176, 176, 0),
                    0px 100px 40px 0px rgba(176, 176, 176, 0.01),
                    0px 56px 34px 0px rgba(176, 176, 176, 0.05),
                    0px 25px 25px 0px rgba(176, 176, 176, 0.09),
                    0px 6px 14px 0px rgba(176, 176, 176, 0.1);
                " rows="4"></textarea>
                <input type="hidden" name="url" class="url">
                <button type="submit" name="submit" class="mt-2 w-fit mx-auto footer-submit-btn">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
        <img src="./assets/images/enterprise/pricingAbsoluteImage.png" alt=""
          class="absolute -right-12 -top-40 hidden md:block -z-5" />
        <img src="./assets/images/pricingCardAbsolute.png" alt="" class="absolute bottom-0 block md:hidden" />
      </div>
    </div>

    <!-- Request Consultation Section -->
    <div class="flex flex-col gap-4 items-center py-20 block md:hidden px-4">
      <h3 class="service-work-heading text-gray-950 w-full md:w-1/2">
        Did you find what you were
        <span class="service-info-h3-secondary">looking for?</span>
      </h3>
      <a href="./consultation" class="request-consultation-btn-secondary w-fit mx-auto md:mx-0">
        Free Consultation
      </a>
    </div>

    <!-- Consultation Section -->
    <div class="flex flex-row justify-between flex-wrap gap-y-2 md:gap-y-4 px-5 md:px-20 mt-5 md:mt-20">
      <div class="w-full md:w-1/2 flex flex-col gap-2.5">
        <p class="consultation-span px-2 md:px-0">
          Book your free
          <span class="consultation-span-secondary pr-1">Consultation today
          </span>
        </p>
        <p class="consultation-para">
          Schedule your consultation with us, and rest assured that our
          Customer Support team will promptly return your call within 24 hours
        </p>
      </div>
      <div class="w-full md:w-5/12 mt-5 md:mt-0">
        <form method="post" action="formsubmit.php" class="w-full flex flex-col gap-5">
          <div class="w-full flex flex-row flex-wrap gap-5">
            <input type="text" name="name" placeholder="Full Name*" class="w-full md:w-5/12 name-form-field" required />
            <input type="email" name="email" placeholder="Email*" class="w-full md:w-5/12 email-form-field" required />
          </div>
          <div class="w-full flex flex-row flex-wrap gap-5">
            <input type="text" name="subject" placeholder="Subject*" class="w-full md:w-5/12 subject-form-field"
              required />
            <input type="text" name="number" placeholder="Phone Number" class="w-full md:w-5/12 phone-form-field"
              required />
          </div>
          <textarea name="message" id="message" placeholder="Message*" class="w-full message-form-field"
            required></textarea>
          <input type="hidden" name="url" class="url">
          <button type="submit" name="submit" class="consultation-form-field">
            Submit Now
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Navbar Modal -->
  <div id="navbar-modal" class="hidden">
    <div class="modal-content h-1/2 mx-auto flex justify-center px-10 py-7 bg-white">
      <div id="modal-content-inner" class="flex flex-row justify-between w-full">
        <a href="./bookKeeping" class="flex flex-col gap-3 items-start w-2/12 border-0 border-r-2 border-gray-200">
          <span class="modal-list-head font-bold">Accounting and Bookkeeping Services</span>
          <ul class="flex flex-col gap-2">
            <li>Full Service Booking</li>
            <li>Accounts Payable and Receivable</li>
            <li>General Ledger and Management</li>
            <li>Bank Reconciliation</li>
          </ul>
        </a>
        <a href="./softwareSelection"
          class="flex flex-col gap-4 items-start w-2/12 border-0 border-r-2 border-gray-200">
          <span class="modal-list-head font-bold">Software Setup and Integration</span>
          <ul class="flex flex-col gap-2">
            <li>Setting up Xero and Quickbooks</li>
            <li>Accounting Software Integration</li>
            <li>Process Automation Implementation</li>
            <li>Financial Reporting and Dashboard Configuration</li>
          </ul>
        </a>
        <a href="./taxFiling" class="flex flex-col gap-4 items-start w-2/12 border-0 border-r-2 border-gray-200">
          <span class="modal-list-head font-bold">Tax Services</span>
          <ul class="flex flex-col gap-2">
            <li>Tax Planning and Filing</li>
            <li>International Tax Compliance</li>
            <li>Indirect Tax Management</li>
          </ul>
        </a>
        <a href="./globalServices" class="flex flex-col gap-4 items-start w-2/12 border-0 border-r-2 border-gray-200">
          <span class="modal-list-head font-bold">Global Services</span>
          <ul class="flex flex-col gap-2">
            <li>Global Payroll Management</li>
            <li>International Tax Compliance</li>
            <li>Multi-Country Financial Reporting</li>
            <li>Currency Management</li>
          </ul>
        </a>
        <a href="./financialReporting" class="flex flex-col gap-4 items-start w-2/12">
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
        <a href="./hospitalityPage" class="flex flex-col gap-3 items-start border-0 border-r-2 border-gray-200 w-1/5">
          <span class="modal-list-head font-bold">Hospitality and Food Services</span>
          <ul class="flex flex-col gap-2">
            <li>Restaurants and Cafes</li>
            <li>Hotels and Resorts</li>
            <li>Catering Services</li>
            <li>Event Management</li>
          </ul>
        </a>
        <a href="./eCommerce" class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
          <span class="modal-list-head font-bold">E-commerse and Retail</span>
          <ul class="flex flex-col gap-2">
            <li>Online Marketplaces</li>
            <li>Fashion and Apparel Retailers</li>
            <li>Electronics and Gadgets</li>
            <li>Speciality Stores</li>
          </ul>
        </a>
        <a href="./realEstate" class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
          <span class="modal-list-head font-bold">Real Estate</span>
          <ul class="flex flex-col gap-2">
            <li>Property Management</li>
            <li>Real Estate Development</li>
            <li>Rental Services</li>
            <li>Commercial Real Estate</li>
          </ul>
        </a>
        <a href="./technologyStartup" class="flex flex-col gap-4 items-start w-1/5">
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
        <a href="./healthcareMedical" class="flex flex-col gap-3 items-start border-0 border-r-2 border-gray-200 w-1/5">
          <span class="modal-list-head font-bold">Healthcare and Medical Services</span>
          <ul class="flex flex-col gap-2">
            <li>Hospitals and Clinics</li>
            <li>Medical Device Manufecturers</li>
            <li>Telehealth Services</li>
            <li>Pharmaceutical Companies</li>
          </ul>
        </a>
        <a href="./energyUtilities" class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
          <span class="modal-list-head font-bold">Energy and Utilities</span>
          <ul class="flex flex-col gap-2">
            <li>Renewable Energy Companies</li>
            <li>Utilities Providers</li>
            <li>Oil and Gas Industry</li>
            <li>Sustainable Technologies</li>
          </ul>
        </a>
        <a href="./agricultureFarming"
          class="flex flex-col gap-4 items-start border-0 border-r-2 border-gray-200 w-1/5">
          <span class="modal-list-head font-bold">Agriculture and Farming</span>
          <ul class="flex flex-col gap-2">
            <li>Crop Farming</li>
            <li>Livestock Farming</li>
            <li>Agribusiness</li>
            <li>Agricultural Equipment Manufacturing</li>
          </ul>
        </a>
        <a href="./constructionInfrastructure" class="flex flex-col gap-4 items-start w-1/5">
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

  <!-- Footer Section -->
  <div class="w-full footer-div px-5 md:px-20 mt-0 md:mt-10">
    <div
      class="w-full border border-t-0 border-r-0 border-l-0 border-b-1 border-gray-300 footer-inner-div pb-5 flex-wrap">
      <div class="w-full md:w-1/4 footer-col-1">
        <img src="./assets/images/footerImage1.png" alt="" />
        <p>
          Our team at RAHA is dedicated to ensuring your books are accurate,
          compliance is maintained, and your financial decisions are backed by
          strategic insights.
        </p>
        <img src="./assets/images/footerImage2.png" alt="" />
      </div>
      <div class="w-full md:w-1/5 footer-col-2">
        <span class="footer-link-heading">Quick Links</span>
        <ul>
          <li class="footer-link-item"><a href="./#services">Services</a></li>
          <li class="footer-link-item">
            <a href="./industries">Industries</a>
          </li>
          <li class="footer-link-item">
            <a href="./blogs">Insights</a>
          </li>
          <li class="footer-link-item">
            <a href="./pricing">Pricing</a>
          </li>
          <li class="footer-link-item">
            <a href="./contactus">Contact</a>
          </li>
        </ul>
      </div>
      <div class="w-full md:w-5/12 footer-col-3 flex flex-col gap-2.5">
        <form method="post" action="formsubmit.php">
          <span class="footer-form-heading mb-2.5">Reach out to us</span>
          <div class="w-full footer-form-div my-2.5">
            <input type="text" name="name" placeholder="Full Name" required class="w-1/2 footer-name-field" />
            <input type="email" name="email" placeholder="Email" class="w-1/2 footer-email-field" required />
          </div>
          <textarea name="message" id="message" required placeholder="Message"
            class="w-full footer-message-field mb-2.5"></textarea>
          <input type="hidden" name="url" class="url" value="">
          <button type="submit" name="submit" class="footer-submit-btn">
            Submit
          </button>
        </form>
      </div>
    </div>
    <div class="flex flex-row justify-between flex-wrap w-full">
      <p class="footer-span">
        ©️ 2017 - 2023 RAHA Financials LLC All rights reserved. RAHA Financials
        refers to the RAHA Financials network and/or one or more of its member
      </p>
      <div>
        <a href="./privacy-policy" class="text-[#1445c2]">Privacy Policy</a>,
        <a href="./terms-conditions" class="text-[#1445c2]">Terms and Conditions</a>
      </div>
    </div>
  </div>

  <script src="./bookingScript.js"></script>
  <script src="./modalScript.js"></script>
  <script src="./clientInformation.js"></script>
  <script src="./url.js"></script>
  <script src="./livechat.js"></script>
  
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