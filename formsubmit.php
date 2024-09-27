<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require 'connection.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Fpdf\Fpdf;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->isSMTP();                                            //Send using SMTP
$mail->Host = 'email-smtp.us-east-2.amazonaws.com';                     //Set the SMTP server to send through
$mail->SMTPAuth = true;                                   //Enable SMTP authentication
$mail->Username = 'AKIA6GBMCTOGBDTOC4WD';                     //SMTP username
$mail->Password = 'BOOHD1vVTfNJZB/X1dzwyxMXRXDP814w3ahv3v9t/UI8';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
$mail->Port = 587;                                    //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('admin@rahafinancials.com', 'NoReply Raha Financials');
$mail->addAddress('data@rahafinancials.com');


if (isset($_POST["submit"])) {
    extract($_POST);

    $form_data = [
        'name' => $name ??= '',
        'email' => $email ??= '',
        'phone' => $number ??= '',
        'subject' => $subject ??= '',
        'url' => $url ??= '',
        'message' => $message ??= '',
        'bussiness' => $bussiness ??= '',
    ];

    $email_body = "";

    foreach ($form_data as $key => $value) {
        if (isset($value) && !empty($value)) {
            $email_body .= ucfirst($key) . ": " . $value . "<br>";
        }
    }

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

        $mail->addReplyTo($email);
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = empty($subject) ? 'New Form Submission from Raha Financials' : $subject;
        $mail->Body = $email_body;



        $mail->send();
        $redirect = "thankyou";
        header("Location: {$redirect}");
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} elseif (isset($_POST['submit_review'])) {
    extract($_POST);

    // Check if the file was uploaded without errors
    if (isset($_FILES['company_logo']) && $_FILES['company_logo']['error'] === UPLOAD_ERR_OK) {
        // Get the file details
        $fileTmpPath = $_FILES['company_logo']['tmp_name'];
        $fileName = time() . '_' . $_FILES['company_logo']['name'];
        $fileSize = $_FILES['company_logo']['size'];
        $fileType = $_FILES['company_logo']['type'];

        $query = "INSERT INTO reviews(client_name, company_name, company_logo, `message`, company_website, `rating`) VALUES('$name', '$company_name', '$fileName', '$message', '$company_website', '$emoji')";
        $result = mysqli_query($connection, $query);
        $rows_affected = mysqli_affected_rows($connection);
        if ($rows_affected > 0) {
            ?>
            <script>
                alert("Your Review is Submitted");
                window.location.assign('thankyou');
            </script>
            <?php

        } else {
            ?>
            <script>
                alert("Something went wrong");
                window.location.assign('review');
            </script>
            <?php
        }
        // Directory to save the uploaded file
        $uploadDir = 'uploads/';
        $destPath = $uploadDir . $fileName;

        // Create directory if not exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move the uploaded file to its destination
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            // echo "File uploaded successfully: " . $destPath;
            ?>
            <script>
                window.location.assign('review');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Error moving the uploaded file.");
                window.location.assign('review');
            </script>
            <?php
            echo "";
        }
    } else {
        ?>
        <script>
            alert("Error uploading Image.");
            window.location.assign('review');
        </script>
        <?php
        // echo "File upload error: " . $_FILES['company_logo']['error'];
    }


} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_information'])) {

    extract($_POST);

    // print_r($_POST);
    // die;
    // File upload handling for signature
    // $Signature = '';
    // if (isset($_FILES['signature']) && $_FILES['signature']['error'] === UPLOAD_ERR_OK) {
    //     $Signature = 'assets/' . time() . '_' . basename($_FILES['signature']['name']);
    //     move_uploaded_file($_FILES['signature']['tmp_name'], $Signature);
    // }

    if (strpos($signature, 'data:image/png;base64,') === 0) {
        $data = str_replace('data:image/png;base64,', '', $signature);
        $data = str_replace(' ', '+', $data);  // Handle space characters
        $decodedData = base64_decode($data);

        // Ensure the directory exists
        $path = 'uploads/';
        $Signature = $path.'signature_' . time() . '.png';
        if (!file_exists('uploads')) {
            mkdir('uploads', 0777, true);  // Create the uploads directory if it doesn't exist
        }

        // Save the file to the uploads directory
        if (file_put_contents($Signature, $decodedData)) {
            // echo "Signature saved successfully as " . $Signature;

        } else {
            echo "Failed to save the signature.";
        }
    } else {
        echo "Invalid image data.";
    }



    // Create PDF
    require 'vendor/autoload.php';
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdfFileName = 'generated_pdf_' . time() . '.pdf';
    // Colors and fonts
    $primaryColor = [255, 255, 255]; // White
    $secondaryColor = [0, 0, 139]; // Dark Blue
    $textColor = [0, 0, 0]; // Black
    $headerColor = [240, 248, 255]; // Light Blue

    $pdf->SetFillColor($headerColor[0], $headerColor[1], $headerColor[2]);
    $pdf->Rect(0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'F');
    $pdf->SetLeftMargin('18');

    $logoPath = './assets/images/footerImage1.png'; // Path to your logo file
    $logoWidth = 30; // Adjust width of the logo
    $logoHeight = 17; // Adjust height of the logo
    if (file_exists($logoPath)) {
        $pdf->Image($logoPath, 10, 10, $logoWidth, $logoHeight); // Place logo on the page
    } else {
        // Handle the error, log it, or use a default image
        echo "Error: Logo file not found.";
    }
    // $pdf->Image($logoPath, 10, 10, $logoWidth, $logoHeight); // Place logo on the page

    $pdf->SetXY($logoWidth + 40, 8); // Move cursor to the right of the logo
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 20, 'Client Information Report', 0, 1, 'L'); // Left alignment
    $pdf->Ln(10);

    $lineY = $pdf->GetY() - 8; // Position of the line
    $lineWidth = $pdf->GetPageWidth() - 20; // Width of the line
    $pdf->SetDrawColor(0, 0, 0); // Line color (Black)
    $pdf->Line(10, $lineY, $pdf->GetPageWidth() - 10, $lineY);


    // Main Content
    $pdf->SetTextColor($textColor[0], $textColor[1], $textColor[2]);

    // Name Field

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'Name:', 0, 0);
    $pdf->SetFont('Arial', '', 14);
    $pdf->Cell(50, 10, $name, 0, 0);


    // Business Name Field

    if (!empty($businessName)) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Business Name:', 0, 0);
        $pdf->SetFont('Arial', '', 14);
        $pdf->Cell(0, 10, $businessName, 0, 1);
    }



    // Address Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 13, 'Address:', 0, 0);
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(0, 13, $homeAddress, 0, 1);

    // Email Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 13, 'Email:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 13, $email, 0, 0);

    // Phone Number Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 13, 'Phone Number:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 13, $number, 0, 1);

    // Zip Code Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 13, 'Zip Code:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(35, 13, $postalCode, 0, 0);

    // State Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(20, 13, 'State:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(35, 13, strtoupper($state), 0, 0);

    // Country Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 13, 'Country:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 13, strtoupper($country), 0, 1);

    // Citizenship Status Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Citizenship Status:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(35, 10, strtoupper($citizenshipStatus), 0, 0);

    // Citizenship Country Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Citizenship Country:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, strtoupper($countryOfCitizenship), 0, 1);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'US Tax Resident:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, strtoupper($ustr), 0, 1);


    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Package Details:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, $package, 0, 1);


    // Tax Residency Field

    if (!empty($taxResidency)) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 10, 'Tax Residency:', 0, 0);
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(0, 10, $taxResidency, 0, 1);
    }


    // Opted Services Fields
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTopMargin('30');
    $pdf->Cell(50, 20, 'Opted Services:', 0, 1);


    if (!empty($bk)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Book Keeping', 0, 1);
    }

    if (!empty($fs)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Financial Statement', 0, 1);
    }

    if (!empty($tpf)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Tax Preparation & Filing', 0, 1);
    }

    if (!empty($ad)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Auditing', 0, 1);
    }

    if (!empty($pp)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Payrol Processing', 0, 1);
    }

    if (!empty($br)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Business Registration', 0, 1);
    }

    if (!empty($itin)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'ITIN Registration', 0, 1);
    }

    if (!empty($nwe)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Net Worth Evaluation', 0, 1);
    }

    // Signature Field
    if ($Signature && file_exists($Signature)) {
        $pdf->Ln(20); // Space before the signature
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140, 10, 'Signature:', 0, 2, 'R');
        $pdf->Image($Signature, $pdf->GetX() + 110, $pdf->GetY(), 40, 20); // Adjust size and position as needed
    } else {
        $pdf->Cell(50, 10, 'Signature: Not provided', 0, 1);
    }

    // Footer
    $pdf->Ln(30);
    $pdf->SetFont('Arial', 'I', 10);
    $pdf->Cell(0, 10, 'Report generated on ' . date('Y-m-d H:i:s'), 0, 0, 'C');

    // Output PDF
    $pdf->Output('F', $pdfFileName);


    // PHPMailer configuration

    try {
        $mail->addReplyTo($email);
        $mail->addAttachment($pdfFileName);
        $mail->isHTML(true);


        $email_body = '';
        foreach ($_POST as $key => $value) {
            if ($key == 'bk') {
                $key = 'Book Keeping';
            }
            if ($key == 'fs') {
                $key = 'Financial Statements';
            }
            if ($key == 'tpf') {
                $key = 'Tax Preparation & Filing';
            }
            if ($key == 'ad') {
                $key = 'Auditing';
            }
            if ($key == 'pp') {
                $key = 'Payroll Processing';
            }
            if ($key == 'br') {
                $key = 'Business Registration';
            }
            if ($key == 'itin') {
                $key = 'ITIN Registration';
            }
            if ($key == 'nwe') {
                $key = 'Net Worth Evaluation';
            }
            if ($value == 'on') {
                $value = 'Yes';
            }
            if ($key == 'signature' || $key == 'submit_information') {
                continue;
            }
            $email_body .= ucfirst($key) . ": " . $value . "<br>";
        }
        $mail->Subject = 'Client Information Report';
        $mail->Body = $email_body;
        if ($mail->send()) {
            echo json_encode(['success' => true, 'msg' => 'Form submitted successfully.']);
        } else {
            echo json_encode(['success' => false, 'msg' => 'Form submission failed.']);
        }
        // Optionally, send the PDF to the client as well
        // $mail->clearAddresses();
        // $mail->addAddress($email); // Client's email
        // $mail->send();
        // Clean up
        unlink($pdfFileName);
        if (!empty($Signature) && file_exists($Signature)) {
            unlink($Signature);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'msg' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_informationpage'])) {

    extract($_POST);
    // print_r($_POST);

    // File upload handling for signature

    if (strpos($signature, 'data:image/png;base64,') === 0) {
        $data = str_replace('data:image/png;base64,', '', $signature);
        $data = str_replace(' ', '+', $data);  // Handle space characters
        $decodedData = base64_decode($data);
        
        // Ensure the directory exists
        $path = 'uploads/';
        $Signature = $path.'signature_' . time() . '.png';
        if (!file_exists('uploads')) {
            mkdir('uploads', 0777, true);  // Create the uploads directory if it doesn't exist
        }

        // Save the file to the uploads directory
        if (file_put_contents($Signature, $decodedData)) {
            // echo "Signature saved successfully as " . $Signature;

        } else {
            echo "Failed to save the signature.";
        }
    } else {
        echo "Invalid image data.";
    }


    // $Signature = '';
    // if (isset($_FILES['signature']) && $_FILES['signature']['error'] === UPLOAD_ERR_OK) {
    //     $Signature = 'assets/' . time() . '_' . basename($_FILES['signature']['name']);
    //     move_uploaded_file($_FILES['signature']['tmp_name'], $Signature);
    // }

    // Create PDF
    require 'vendor/autoload.php';
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdfFileName = 'generated_pdf_' . time() . '.pdf';
    // Colors and fonts
    $primaryColor = [255, 255, 255]; // White
    $secondaryColor = [0, 0, 139]; // Dark Blue
    $textColor = [0, 0, 0]; // Black
    $headerColor = [240, 248, 255]; // Light Blue

    $pdf->SetFillColor($headerColor[0], $headerColor[1], $headerColor[2]);
    $pdf->Rect(0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'F');
    $pdf->SetLeftMargin('18');

    $logoPath = './assets/images/footerImage1.png'; // Path to your logo file
    $logoWidth = 30; // Adjust width of the logo
    $logoHeight = 17; // Adjust height of the logo

    $pdf->Image($logoPath, 10, 10, $logoWidth, $logoHeight); // Place logo on the page



    $pdf->SetXY($logoWidth + 40, 8); // Move cursor to the right of the logo
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 20, 'Client Information Report', 0, 1, 'L'); // Left alignment
    $pdf->Ln(10);

    $lineY = $pdf->GetY() - 8; // Position of the line
    $lineWidth = $pdf->GetPageWidth() - 20; // Width of the line
    $pdf->SetDrawColor(0, 0, 0); // Line color (Black)
    $pdf->Line(10, $lineY, $pdf->GetPageWidth() - 10, $lineY);


    // Main Content
    $pdf->SetTextColor($textColor[0], $textColor[1], $textColor[2]);

    // Name Field

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'Name:', 0, 0);
    $pdf->SetFont('Arial', '', 14);
    $pdf->Cell(50, 10, $name, 0, 0);


    // Business Name Field

    if (!empty($businessName)) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Business Name:', 0, 0);
        $pdf->SetFont('Arial', '', 14);
        $pdf->Cell(0, 10, $businessName, 0, 1);
    }



    // Address Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 13, 'Address:', 0, 0);
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(0, 13, $homeAddress, 0, 1);

    // Email Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 13, 'Email:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 13, $email, 0, 0);

    // Phone Number Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 13, 'Phone Number:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 13, $number, 0, 1);

    // Zip Code Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 13, 'Zip Code:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(35, 13, $postalCode, 0, 0);

    // State Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(20, 13, 'State:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(35, 13, strtoupper($state), 0, 0);

    // Country Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 13, 'Country:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 13, strtoupper($country), 0, 1);

    // Citizenship Status Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Citizenship Status:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(35, 10, strtoupper($citizenshipStatus), 0, 0);

    // Citizenship Country Field
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Citizenship Country:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, strtoupper($countryOfCitizenship), 0, 1);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'US Tax Resident:', 0, 0);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, strtoupper($ustr), 0, 1);


    // $pdf->SetFont('Arial', 'B', 12);
    // $pdf->Cell(50, 10, 'Package Details:', 0, 0);
    // $pdf->SetFont('Arial', '', 12);
    // $pdf->Cell(0, 10, $package, 0, 1);

    // Tax Residency Field

    if (!empty($taxResidency)) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 10, 'Tax Residency:', 0, 0);
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(0, 10, $taxResidency, 0, 1);
    }


    // Opted Services Fields
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTopMargin('30');
    $pdf->Cell(50, 20, 'Opted Services:', 0, 1);


    if (!empty($bk)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Book Keeping', 0, 1);
    }

    if (!empty($fs)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Financial Statement', 0, 1);
    }

    if (!empty($tpf)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Tax Preparation & Filing', 0, 1);
    }

    if (!empty($ad)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Auditing', 0, 1);
    }

    if (!empty($pp)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Payrol Processing', 0, 1);
    }

    if (!empty($br)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Business Registration', 0, 1);
    }

    if (!empty($itin)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'ITIN Registration', 0, 1);
    }

    if (!empty($nwe)) {
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetLeftMargin('25');
        $pdf->Cell(10, 10, chr(149), 0, 0, 'L');
        $pdf->Cell(50, 10, 'Net Worth Evaluation', 0, 1);
    }

    // Signature Field
    if ($Signature && file_exists($Signature)) {
        $pdf->Ln(20); // Space before the signature
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140, 10, 'Signature:', 0, 2, 'R');
        $pdf->Image($Signature, $pdf->GetX() + 110, $pdf->GetY(), 40, 20); // Adjust size and position as needed
    } else {
        $pdf->Cell(50, 10, 'Signature: Not provided', 0, 1);
    }

    // Footer
    $pdf->Ln(30);
    $pdf->SetFont('Arial', 'I', 10);
    $pdf->Cell(0, 10, 'Report generated on ' . date('Y-m-d H:i:s'), 0, 0, 'C');

    // Output PDF
    $pdf->Output('F', $pdfFileName);


    // PHPMailer configuration

    try {
        $mail->addReplyTo($email);
        $mail->addAttachment($pdfFileName);
        $mail->isHTML(true);
        $mail->Subject = 'Client Information Report';
        $email_body = '';
        foreach ($_POST as $key => $value) {
            if ($key == 'bk') {
                $key = 'Book Keeping';
            }
            if ($key == 'fs') {
                $key = 'Financial Statements';
            }
            if ($key == 'tpf') {
                $key = 'Tax Preparation & Filing';
            }
            if ($key == 'ad') {
                $key = 'Auditing';
            }
            if ($key == 'pp') {
                $key = 'Payroll Processing';
            }
            if ($key == 'br') {
                $key = 'Business Registration';
            }
            if ($key == 'itin') {
                $key = 'ITIN Registration';
            }
            if ($key == 'nwe') {
                $key = 'Net Worth Evaluation';
            }
            if ($value == 'on') {
                $value = 'Yes';
            }
            if ($key == 'signature' || $key == 'submit_informationpage') {
                continue;
            }
            $email_body .= ucfirst($key) . ": " . $value . "<br>";
        }
        $mail->Body = $email_body;
        if ($mail->send()) {

            header('location: thankyou');
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Clean up
    unlink($pdfFileName);
    if (!empty($Signature) && file_exists($Signature)) {
        unlink($Signature);
    }

} else {
    header('location: ./');
}


