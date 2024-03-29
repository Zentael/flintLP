<?php
session_start();
$msg = "";
$poste = file_get_contents('php://input');
// Tester si le mail est renseigné
$poste = json_decode($poste);
$email = $poste->mail;
if($email !== ""){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mailchimpAPI = '566c0984583a4ad4957b19ab355df429-us3';
        $mailchimpListId = '7957a218f0';

        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($mailchimpAPI, strpos($mailchimpAPI, '-') + 1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $mailchimpListId . '/members/' . $memberID;

        // member information
        $json = json_encode([
            'email_address' => $email,
            'status' => 'subscribed',
            "merge_fields" => [
                "FNAME" => "",
                "LNAME" => ""
            ]
        ]);

        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $mailchimpAPI);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // store the status message based on response code
        if ($httpCode == 200) {
            $_SESSION['msg'] = '<p style="color: #34A853">Vous vous êtes bien inscrits à notre newsletter</p>';
        } else {
            switch ($httpCode) {
                case 214:
                    $msg = 'Vous êtes déjà inscrits à notre newsletter !';
                    break;
                default:
                    $msg = 'Veuillez nous excuser, nous avons rencontré une erreur.';
                    break;
            }
        }
    } else {
        $msg = "Veuillez renseigner une adresse email correcte";
    }
} else {
    $msg = 'Veuillez renseigner une adresse mail';
}
echo $msg;
