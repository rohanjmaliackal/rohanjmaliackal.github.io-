<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/d66cb29dd059482e8072999f995c4eef/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:d82016f839e13cd0a79afc0ef5b288b3",
                  "X-Auth-Token:3827881f669c11e8dad8a023fd1108c2"));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>


{
    "payment_request": {
        "id": "d66cb29dd059482e8072999f995c4eef",
        "phone": "+919999999999",
        "email": "foo@example.com",
        "buyer_name": "John Doe",
        "amount": "2500.00",
        "purpose": "FIFA 16",
        "status": "Sent",
        "send_sms": true,
        "send_email": true,
        "sms_status": "Pending",
        "email_status": "Sent",
        "shorturl": "https://imjo.in/NNxHg",
        "longurl": "https://www.instamojo.com/@ashwini/d66cb29dd059482e8072999f995c4eef",
        "redirect_url": "http://www.example.com/redirect/",
        "webhook": "http://www.example.com/webhook/",
        "payments": [
             {
                "payment_id": "MOJO7328005J91064462", 
                "quantity": 1, 
                "status": "Credit", 
                "link_slug": null, 
                "link_title": null, 
                "buyer_name": "Buyer Name", 
                "buyer_phone": "9901000000", 
                "buyer_email": "buyer@instamojo.com", 
                "currency": "INR", 
                "unit_price": "100.00", 
                "amount": "100.00", 
                "fees": "5.00", 
                "shipping_address": null, 
                "shipping_city": null, 
                "shipping_state": null, 
                "shipping_zip": null, 
                "shipping_country": null, 
                "discount_code": null, 
                "discount_amount_off": null, 
                "variants": [], 
                "custom_fields": {}, 
                "affiliate_id": null, 
                "affiliate_commission": "0", 
                "created_at": "2017-03-28T13:57:21.229398Z", 
                "payment_request": "https://instamojo.com/api/1.1/payment-requests/be65d8abecc549918e8d8e61c801ae6f/"
            }
        ],
        "created_at": "2015-10-07T21:36:34.665Z",
        "modified_at": "2015-10-07T21:36:37.572Z",
        "allow_repeated_payments": false
    },
    "success": true
}