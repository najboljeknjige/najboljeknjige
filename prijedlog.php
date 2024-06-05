<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $prijedlog = $_POST['prijedlog'];

    $xml = new DOMDocument('1.0', 'UTF-8');
    $xml->formatOutput = true;
    $suggestionElement = $xml->createElement('suggestion');
    $suggestionElement->appendChild($xml->createElement('ime', $ime));
    $suggestionElement->appendChild($xml->createElement('email', $email));
    $suggestionElement->appendChild($xml->createElement('prijedlog', $prijedlog));
    $xml->appendChild($suggestionElement);

    $xml->save('prijedlozi.xml');

    echo "Vaš prijedlog je uspješno poslan!";
} else {
    echo "Greška: Nismo zaprimili vaš prijedlog!";
}
?>