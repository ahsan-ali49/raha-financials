<?php
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Raha Financials</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/favIcon.svg" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="enterpriseStyle.css" />
  <link rel="stylesheet" href="pricingStyle.css" />
  <link rel="stylesheet" href="informationStyle.css" />
  <link rel="stylesheet" href="servicesStyle.css" />
  <link rel="stylesheet" href="blog.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <!-- <script src="./particles.js"></script> -->
</head>

<body class="overflow-x-hidden" id="index">
  <div id="transition-layer"></div>
  <div id="transition-layer-1"></div>
  <div id="transition-layer-2"></div>

  <!-- Services Page -->
  <div class="px-5 md:px-0">
    <!-- Navbar -->
    <div class="px-0 md:px-20 py-2.5 navbar-background">
      <div class="flex flex-wrap items-center justify-between mx-auto rounded-xl w-full pl-6 pr-2.5 py-2.5 navbar-link">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="./assets/images/navbarLogo.svg" alt="raha Financials logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="./contactus" onclick="LiveChatWidget.call('maximize');" class="hidden md:block contact-btn">
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
              <a href="#services" class="block navlink">Services</a>
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
    <div class="px-5 md:px-20 py-2.5">
      <div class="content-container w-full flex flex-col items-center gap-5 relative">
        <div id="particles-js" class="particles-container"
          style="position: absolute; width: 100%; height: 500%; z-index: 0"></div>
        <div class="flex flex-col items-center gap-2.5 pt-5 md:pt-20">
          <span class="iamm">I am a</span>
          <div class="w-full flex flex-row justify-center gap-2.5 hero-btn-div z-10">
            <a href="./index.php" class="hero-indv-btn">
              <span class="hero-indv-btn-text">Individual/Small Business</span>
            </a>
            <a href="./enterprise" id="hero-entr-btn" class="hero-entr-btn">Enterprise</a>

            <!-- <a href="./enterprise" class="hero-entr-btn">Enterprise</a> -->
          </div>
        </div>

        <div class="flex flex-col items-center gap-3 pb-16">
          <div class="flex flex-col items-center justify-center">
            <div class="heading-container">
              <div class="hero-primary-heading pr-1">
                What our Accounting Offers
              </div>
              <!-- <div class="hero-secondary-heading">IRS Notice Resolution</div> -->
              <div class="rotating-text-container">
                <div class="hero-secondary-heading rotating-text">
                  IRS Notice Resolution
                </div>
                <div class="hero-secondary-heading rotating-text">
                  Tax Refunds
                </div>
                <div class="hero-secondary-heading rotating-text">
                  Bookkeeping Services
                </div>
                <div class="hero-secondary-heading rotating-text">
                  Payroll Processing
                </div>
                <!-- Add more text elements as needed -->
              </div>
            </div>
          </div>
          <p class="hero-para w-full md:w-1/2">
            Let us take care of your books, taxes, and payroll while you focus
            on growing your business. Our expert accountants specialize in
            helping small businesses thrive.
          </p>
          <button class="hero-btn z-10" id="bookDemoBtn">Book A Demo</button>
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
              <div class="flex justify-between items-center gap-y-5 w-full">
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
                <span class="mt-0 close-btn" id="closeBtn"></span>
              </div>
              <form id="demoForm" method="post" action="formsubmit.php" class="flex flex-col gap-2">
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
      </div>

      <!-- Accounting Solution Section -->
      <div id="services"
        class="w-full flex flex-col items-center gap-2.5 accounting-solution-div py-9 md:py-9 px-1 md:px-20">

        <h2 class="accounting-heading w-full md:w-2/3">
          Our Suite of Business and Accounting Solutions
        </h2>
        <p class="accounting-para w-full md:w-1/2">
          Full-service accounting solutions for enterprises and small
          businesses. Tax, bookkeeping, payroll, and more.
        </p>
        <div class="flex flex-row justify-center flex-wrap gap-5 px-1 md:px-0 mt-12">
          <a href="./bookKeeping" class="flex-item-div-primary z-10">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="bookKeeping">
              <img src="./assets/images/accountingImage1.png" alt="" class="w-20 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span">Bookkeeping</span>
                <p class="div-item-para">
                  This is the foundation of good financial management,
                  tracking income and expenses.
                </p>
              </div>
            </div>
          </a>
          <a href="./softwareSelection" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="softwareSelection">
              <img src="./assets/images/accountingImage2.png" alt="" class="w-14 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">Software Selection and Setup</span>
                <p class="div-item-para-secondary">
                  Choosing and implementing accounting software that meets the
                  specific needs of the business.
                </p>
              </div>
            </div>
          </a>
          <a href="./llcRegistration" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="llcRegistration">
              <img src="./assets/images/accountingImage3.png" alt="" class="w-16 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">LLC Registration</span>
                <p class="div-item-para-secondary">
                  Creates a limited liability company, separating your
                  personal assets from business ones. Protects you
                  financially.
                </p>
              </div>
            </div>
          </a>
          <a href="./payrollProcessing" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="payrollProcessing">
              <img src="./assets/images/accountingImage4.png" alt="" class="w-20 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">Payroll Processing</span>
                <p class="div-item-para-secondary">
                  Creates a limited liability company, separating your
                  personal assets from business ones. Protects you
                  financially.
                </p>
              </div>
            </div>
          </a>
          <a href="./itin" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="itin">
              <img src="./assets/images/accountingImage2.png" alt="" class="w-14 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">ITIN</span>
                <p class="div-item-para-secondary">
                  Assigned by the IRS for non-SSN holders who need to file US
                  tax returns or open financial accounts.
                </p>
              </div>
            </div>
          </a>
          <a href="./taxFiling" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="taxFiling">
              <img src="./assets/images/accountingImage3.png" alt="" class="w-16 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">Tax Filing</span>
                <p class="div-item-para-secondary">
                  Ensures your business complies with tax regulations and
                  maximizes deductions to minimize tax liability.
                </p>
              </div>
            </div>
          </a>
          <a href="./financialReporting" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="financialReporting">
              <img src="./assets/images/accountingImage4.png" alt="" class="w-20 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">Financial Reporting</span>
                <p class="div-item-para-secondary">
                  Drafting reports like income statements and balance sheets
                  to understand the financial health of the business.
                </p>
              </div>
            </div>
          </a>
          <a href="./businessBudgeting" class="flex-item-div-primary">
            <div class="flex flex-col gap-5 flex-item-inner-div" id="businessBudgeting">
              <img src="./assets/images/accountingImage2.png" alt="" class="w-14 h-16" />
              <div class="flex flex-col gap-1.5">
                <span class="div-item-span-secondary">Business Budgeting</span>
                <p class="div-item-para-secondary">
                  Creating a spending plan for the business based on projected
                  income and expenses.
                </p>
              </div>
            </div>
          </a>
        </div>

        <div class="flex flex-row justify-center gap-2.5 mb-12 mt-[50px] z-10">
          <a href="./consultation" class="request-consultation-btn-secondary">
            Free Consultation
          </a>
          <a href="tel:+16282004141" class="request-call-btn">Call Us</a>
        </div>


      </div>

      <!-- Booking Section -->
      <div class="flex flex-row justify-between flex-wrap gap-y-2 md:gap-y-4 px-1 md:px-7 mt-5 md:mt-20 pb-10">
        <div class="w-full md:w-1/2 flex flex-col gap-2.5">
          <p class="consultation-span px-2 md:px-0">
            Book your free
            <span class="consultation-span-secondary pr-1">Consultation today
            </span>
          </p>
          <p class="consultation-para">
            Schedule your consultation with us, and rest assured that our
            Customer Support team will promptly return your call within 24
            hours
          </p>
        </div>
        <div class="w-full md:w-5/12 mt-5 md:mt-0 z-10">
          <form method="post" action="formsubmit.php" class="w-full flex flex-col gap-5">
            <div class="w-full flex flex-row flex-wrap gap-5">
              <input type="text" name="name" placeholder="Full Name*" class="w-full md:w-5/12 name-form-field bg-white"
                required />
              <input type="text" name="email" placeholder="Email*" class="w-full md:w-5/12 email-form-field bg-white"
                required />
            </div>
            <div class="w-full flex flex-row flex-wrap gap-5">
              <input type="text" name="subject" placeholder="Subject*"
                class="w-full md:w-5/12 subject-form-field bg-white" required />
              <input type="text" name="number" placeholder="Phone Number"
                class="w-full md:w-5/12 phone-form-field bg-white" required />
            </div>
            <textarea name="message" id="message" placeholder="Message*" class="w-full message-form-field bg-white"
              required></textarea>
            <input type="hidden" name="url" class="url" value="">
            <button type="submit" name="submit" class="consultation-form-field">
              Submit Now
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- OutSourced Accounting -->
    <div class="w-full outsourced-accounting mb-10 relative">
      <video id="background-video" autoplay loop muted class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="./assets/videos/backgrounVideo.mp4" type="video/mp4" />
      </video>
      <div
        class="relative w-full h-full flex flex-col items-center justify-center gap-3 content text-center text-white">
        <h2 class="w-full md:w-3/5 foreground-heading">
          Why Outsourced Accounting Makes a Difference
        </h2>
        <p class="w-full md:w-3/5 foreground-para px-1 md:px-0">
          In today’s fast-paced business landscape, staying ahead demands
          focus, innovation, and agility. However, managing your financial
          operations can become a time-consuming and complex endeavor that
          diverts your attention from what truly matters – growing your
          business. This is where outsourced accounting steps in to create a
          tailor made financial strategy for your business.
        </p>
        <div class="flex flex-row justify-center flex-wrap gap-5 mt-3">
          <a href="./aboutus" class="foreground-btn">Who we are</a>
          <a href="#services" class="foreground-btn">Our Services</a>
          <a href="./contactus" class="foreground-btn">Contact us</a>
        </div>
      </div>
    </div>

    <div class="flex flex-col items-center gap-12 mt-10">
      <div class="flex flex-col items-center gap-2.5 px-5">
        <h2 class="financials-heading">
          Transforming Finances: <br />
          <span class="financials-heading-secondary px-1">RAHA Financials Client Experiences</span>
        </h2>

        <p class="financials-para w-11/12 md:w-3/4">
          Don't just take our word for it. See what our satisfied customers
          have to say about our services.
        </p>
      </div>
      <div class="carousel-wrapper w-full flex flex-row justify-between px-0 gap-2 md:gap-2 gap-y-5">
        <div class="carousel-container px-5 mx-auto">
          <!-- review card -->
          <?php
          $query = "SELECT * FROM reviews";
          $result = mysqli_query($connection, $query);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              extract($row);
              ?>
              <div class="financial-inner-div">
                <p class="financial-inner-div-text">
                  <?php
                  echo $message;
                  ?>
                </p>
                <div class="financial-inner-div-2">
                  <img src="./uploads/<?php echo $company_logo ?> " alt="" class="w-10 h-10" />
                  <div class="financial-inner-div-2-inner">
                    <span class="financial-span-1"><?php echo $client_name ?></span>
                    <span class="financial-span-2"><?php echo $company_name ?? 'Company Name' ?></span>
                  </div>
                </div>
              </div>
              <?php
            }

          } else {
            echo "Connection Failed";
          }

          ?>
        </div>
      </div>


      <div class="flex flex-row justify-center gap-2.5 mb-12">
        <a href="./consultation" class="request-consultation-btn-secondary">
          Free Consultation
        </a>
        <a href="tel:+16282004141" class="request-call-btn">Call Us</a>
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
          <li class="footer-link-item"><a href="#services">Services</a></li>
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
        <a href="./terms-conditions"  class="text-[#1445c2]">Terms and Conditions</a>
      </div>
    </div>
  </div>

  <script src="./bookingScript.js"></script>
  <script src="./app.js"></script>
  <script src="./scripts.js"></script>
  <script src="./animation.js"></script>
  <script src="./url.js"></script>
  
  <script>
    const rotatingTexts = document.querySelectorAll(".rotating-text");
    let index = 0;

    function showNextText() {
      rotatingTexts[index].style.opacity = "0";
      rotatingTexts[index].style.transform = "translateY(-100%)";

      index = (index + 1) % rotatingTexts.length;

      rotatingTexts[index].style.opacity = "1";
      rotatingTexts[index].style.transform = "translateY(0)";
    }

    setInterval(showNextText, 5000); // Change every 1 seconds
  </script>
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