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

  <div id="clientInformationForm1" class="popup-form" style="display:none;">
    <div class="form-content relative md:w-1/2">
      <span class="close-btn hidden" id="closeBtn">&times;</span>
      <!-- <h2>Client Information</h2> -->
      <form method="post" class="information-form pt-5 pb-28 px-9 flex flex-col gap-1.5 md:gap-5 bg-[#fefefe] h-[90vh]"
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
          <input type="text" name="number" id="phoneNumber" class="information-secondary-field w-full md:w-[49%]"
            placeholder="Phone Number" required />
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
          <input type="text" name="city" id="city" required class="information-secondary-field w-full md:w-[49%]"
            placeholder="City" />
          <input type="text" name="state" id="state" required class="information-secondary-field w-full md:w-[49%]"
            placeholder="State/ Province" />
        </div>
        <div class="form-fields-div flex-wrap gap-y-1.5">
          <input type="text" name="postalCode" id="postalCode" required
            class="information-secondary-field w-full md:w-[49%]" placeholder="Postal Code" />
          <input type="text" id="country" name="country" required class="information-secondary-field w-full md:w-[49%]"
            placeholder="Country" />
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
        <div class="form-fields-div flex-wrap gap-y-1.5">
          <textarea id="taxResidency" name="taxResidency" placeholder="If no, please specify your tax residency:"
            class="information-tertiary-field w-full" rows="4"></textarea>
        </div>
        <button type="submit" name="submit" id="submit1"
          class="hero-btn fixed bottom-[5%] mb-9 mr-9 right-[26%] w-[7%] flex justify-center">
          Submit
        </button>
      </form>
    </div>
  </div>

  <div id="clientInformationForm2" class="popup-form" style="display:none">
    <div class="form-content relative md:w-1/2">
      <span class="close-btn hidden" id="closeBtn">&times;</span>
      <!-- <h2>Client Information</h2> -->
      <form method="post" class="information-form pt-5 pb-28 px-9 flex flex-col gap-1.5 md:gap-5 bg-[#fefefe] h-[90vh]"
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
          ?><input type="hidden" name="bk" value="<?php echo $bk ?>" required />
          <?php
        }

        if (isset($fs)) {
          ?><input type="hidden" name="fs" value="<?php echo $fs ?>" required />
          <?php
        }

        if (isset($ad)) {
          ?><input type="hidden" name="ad" value="<?php echo $ad ?>" required />
          <?php
        }

        if (isset($tpf)) {
          ?><input type="hidden" name="tpf" value="<?php echo $tpf ?>" required />
          <?php
        }

        if (isset($pp)) {
          ?><input type="hidden" name="pp" value="<?php echo $pp ?>" required />
          <?php
        }

        if (isset($br)) {
          ?><input type="hidden" name="br" value="<?php echo $br ?>" required />
          <?php
        }

        if (isset($itin)) {
          ?><input type="hidden" name="itin" value="<?php echo $itin ?>" required />
          <?php
        }

        if (isset($nwe)) {
          ?><input type="hidden" name="nwe" value="<?php echo $nwe ?>" required />
          <?php
        }

        if (isset($taxResidency)) {
          ?><input type="hidden" name="taxResidency" value="<?php echo $taxResidency ?>" required />
          <?php
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
          <a href="./clientInformation.php" class="information-previous-btn w-fit" id="info-2-previous-btn">
            Previous
          </a>
          <button type="submit" name="submit" id="submit2" class="hero-btn w-fit" id="info-2-btn">
            Next
          </button>
        </div>
      </form>
    </div>
  </div>

  <div id="clientInformationForm3" class="popup-form" style="display:none;">
    <div class="form-content relative md:w-1/2">
      <span class="close-btn hidden" id="closeBtn">&times;</span>
      <!-- <h2>Client Information</h2> -->
      <form method="post" class="information-form pt-5 pb-28 px-9 flex flex-col gap-1.5 md:gap-5 bg-[#fefefe] h-[90vh]"
        id="clientForm3">
        <span class="information-form-span">3. Engagement Letter</span>
        <div class="flex flex-col gap-2.5">
          <span>Please read the Engagement Letter below and click
            proceed.</span>
          <span>
            This Engagement Letter ("Agreement") outlines the terms
            and conditions under which RAHA Financials ("the Company")
            will provide accounting and financial services to
            <span class="client-name-span">[<b>
                <?php echo $name ?>
              </b>]</span>
            ("the Client").</span>
          <span class="font-bold">1. Scope of Services:</span>
          <span>The Company agrees to provide the Client with
            comprehensive accounting and financial services, which may
            include but are not limited to:
          </span>
          <ul class="px-6 list-disc">
            <?php
            if (isset($bk)) {
              ?>
              <li>
                <?php
                echo 'Book Keeping';
                ?>
              </li>
              <?php
            }
            if (isset($fs)) {
              ?>
              <li>
                <?php
                echo 'Financial Statements';
                ?>
              </li>
              <?php
            }
            if (isset($ad)) {
              ?>
              <li>
                <?php
                echo 'Auditing';
                ?>
              </li>
              <?php
            }
            if (isset($tpf)) {
              ?>
              <li>
                <?php
                echo 'Tax Preparation and Filing';
                ?>
              </li>
              <?php
            }
            if (isset($pp)) {
              ?>
              <li>
                <?php
                echo 'Payroll Processing';
                ?>
              </li>
              <?php
            }
            if (isset($br)) {
              ?>
              <li>
                <?php
                echo 'Business Registration';
                ?>
              </li>
              <?php
            }
            if (isset($itin)) {
              ?>
              <li>
                <?php
                echo 'ITIN Registration (if applicable)';
                ?>
              </li>
              <?php
            }
            if (isset($nwe)) {
              ?>
              <li>
                <?php
                echo 'Net Worth Evaluation';
                ?>
              </li>
              <?php
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

        <input type="text" name="name" value="<?php echo $name ?>" class="information-secondary-field w-full"
          placeholder="Full Name" />

        <div class="wrapper flex flex-col items-center">
          <!-- <canvas id="signature-pad" height="200"></canvas>   -->
          <input type="file" name="signature" class="information-secondary-field w-full" accept=".jpg,.jpeg,.png,"
            required />
          <span class="font-bold w-full text-center">Signature</span>
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
          ?><input type="hidden" name="bk" value="<?php echo $bk ?>" required />
          <?php
        }

        if (isset($fs)) {
          ?><input type="hidden" name="fs" value="<?php echo $fs ?>" required />
          <?php
        }

        if (isset($ad)) {
          ?><input type="hidden" name="ad" value="<?php echo $ad ?>" required />
          <?php
        }

        if (isset($tpf)) {
          ?><input type="hidden" name="tpf" value="<?php echo $tpf ?>" required />
          <?php
        }

        if (isset($pp)) {
          ?><input type="hidden" name="pp" value="<?php echo $pp ?>" required />
          <?php
        }

        if (isset($br)) {
          ?><input type="hidden" name="br" value="<?php echo $br ?>" required />
          <?php
        }

        if (isset($itin)) {
          ?><input type="hidden" name="itin" value="<?php echo $itin ?>" required />
          <?php
        }

        if (isset($nwe)) {
          ?><input type="hidden" name="nwe" value="<?php echo $nwe ?>" required />
          <?php
        }

        if (isset($taxResidency)) {
          ?><input type="hidden" name="taxResidency" value="<?php echo $taxResidency ?>" required />
          <?php
        }
        ?>

        <fieldset>
          <div>
            <input type="checkbox" id="pa" name="engagement_letter" required />
            <label for="pa" class="font-medium">
              I agree to the Engagement Letter</label>
          </div>
        </fieldset>

        <div class="flex flex-row justify-between">
          <a href="./information2.php" class="information-previous-btn w-fit" id="info-3-previous-btn">
            Previous
          </a>
          <button type="submit" name="submit_information" id="submit3" class="hero-btn w-fit" id="info-3-btn">
            Submit
          </button>
        </div>
      </form>

    </div>
  </div>
  <!-- <script src="clientInformation.js"></script> -->
  <script src="./bookingScript.js"></script>
  <script src="./modalScript.js"></script>
  <script src="clientInformation.js"></script>

</body>

</html>