<?php



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

if (isset($_POST["submit"])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = isset($_POST["number"]) ? $_POST["number"] : '';
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : '';
    $message = $_POST["message"];


    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.alphawebstudios.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'noreply@alphawebstudios.com';                     //SMTP username
        $mail->Password = 'sWQzH1I-7ot)';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('noreply@alphawebstudios.com', 'NoReply Alpha Web Studios');
        $mail->addAddress('data@rahafinancials.com');
        $mail->addReplyTo($email);


        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = empty($subject) ? 'New Form Submission from Raha Financials' : $subject;
        $mail->Body = "
        
        Name: $name <br>
        Email: $email <br>
        Message: $message <br>
        Number: $number <br>

    ";



        $mail->send();
        $redirect = "thankyou.html";
        header("Location: {$redirect}");
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} elseif (isset($_POST["submit_from_footer"])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.alphawebstudios.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'noreply@alphawebstudios.com';                     //SMTP username
        $mail->Password = 'sWQzH1I-7ot)';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('noreply@alphawebstudios.com', 'NoReply Alpha Web Studios');
        $mail->addAddress('data@rahafinancials.com');
        $mail->addReplyTo($email);


        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = empty($subject) ? 'Form Submission on Raha Financials' : $subject;
        $mail->Body = "
        
        Name: $name <br>
        Email: $email <br>
        Message: $message <br>
        

    ";



        $mail->send();
        $redirect = "thankyou.html";
        header("Location: {$redirect}");
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} elseif (isset($_POST["submit_information"])) {

    extract($_POST);

    $subject = 'Client Information Report';

    $businessName = isset($_POST['businessName']) ? $_POST['businessName'] : '';
    $bk = isset($_POST['bk']) ? $_POST['bk'] : '';
    $fs = isset($_POST['fs']) ? $_POST['fs'] : '';
    $tpf = isset($_POST['tpf']) ? $_POST['tpf'] : '';
    $ad = isset($_POST['ad']) ? $_POST['ad'] : '';
    $pp = isset($_POST['pp']) ? $_POST['pp'] : '';
    $br = isset($_POST['br']) ? $_POST['br'] : '';
    $itin = isset($_POST['itin']) ? $_POST['itin'] : '';
    $nwe = isset($_POST['nwe']) ? $_POST['nwe'] : '';
    $ustr = isset($_POST['ustr']) ? $_POST['ustr'] : '';

    // File upload handling for signature
    $Signature = '';
    if (isset($_FILES['signature']) && $_FILES['signature']['error'] == UPLOAD_ERR_OK) {
        $Signature = 'assets/' . mktime(time()) . '_' . basename($_FILES['signature']['name']);
        move_uploaded_file($_FILES['signature']['tmp_name'], $Signature);
    }

    // Create PDF
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

    $logoPath = 'assets\images\footerImage1.png'; // Path to your logo file
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







    try {
        // PHPMailer configuration
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'mail.alphawebstudios.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@alphawebstudios.com';
        $mail->Password = 'sWQzH1I-7ot)';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('noreply@alphawebstudios.com', 'NoReply Alpha Web Studios');
        $mail->addAddress('data@rahafinancials.com');
        $mail->addReplyTo($email);

        // Attach the generated PDF
        $mail->addAttachment($pdfFileName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = empty($subject) ? 'Form Submitted to Raha Financials' : $subject;
        $mail->Body = "
            Name: $name <br>
            Email: $email <br>
        ";

        // Send the email
        $mail->send();



        // Optionally, send the PDF to the client as well
        // $mail->clearAddresses();
        // $mail->addAddress($email); // Client's email
        // $mail->send();



        // Redirect to a thank you page
        $redirect = "thankyou.html";
        header("Location: {$redirect}");

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    

    // Clean up the generated PDF file
    unlink($pdfFileName);

    // Delete Signature File
    if (!empty($Signature) && file_exists($Signature)) {
        unlink($Signature);
    }
} else {
    header('location: index.html');
}


