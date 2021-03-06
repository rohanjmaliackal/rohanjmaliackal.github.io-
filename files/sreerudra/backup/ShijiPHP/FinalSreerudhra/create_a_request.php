<?php

$ch = curl_init();
//https://test.instamojo.com/api/1.1/ 
curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:d82016f839e13cd0a79afc0ef5b288b3",
                  "X-Auth-Token:3827881f669c11e8dad8a023fd1108c2"));
$payload = Array(
    'purpose' => 'FIFA 16',
    'amount' => '2500',
    'phone' => '9999999999',
    'buyer_name' => 'John Doe',
    'redirect_url' => 'http://www.example.com/redirect/',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'foo@example.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>


/*


{
    "payment_request": {
        "id": "d66cb29dd059482e8072999f995c4eef",
        "phone": "+919999999999",
        "email": "foo@example.com",
        "buyer_name": "John Doe",
        "amount": "2500",
        "purpose": "FIFA 16",
        "status": "Pending",
        "send_sms": true,
        "send_email": true,
        "sms_status": "Pending",
        "email_status": "Pending",
        "shorturl": null,
        "longurl": "https://www.instamojo.com/@ashwch/d66cb29dd059482e8072999f995c4eef/",
        "redirect_url": "http://www.example.com/redirect/",
        "webhook": "http://www.example.com/webhook/",
        "created_at": "2015-10-07T21:36:34.665Z",
        "modified_at": "2015-10-07T21:36:34.665Z",
        "allow_repeated_payments": false,
    },
    "success": true
}*/