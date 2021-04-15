<?php
require  'sendgrid-php/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("jagadeeshj784@gmail.com", "J A N U");
$email->setSubject("Digitalizing sales super markeet managment system");
$email->addTo("jagadeeshj784@gmail.com", "Itesm Order List");
$email->addContent("text/plain", "i need this all those itesm in my super market");
$email->addContent(
    "text/html", "<strong>i need this all those items in my super market</strong>"
);
$sendgrid = new \SendGrid('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');

try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";

    echo 'Mail sended sucessfully'. "\n". "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}