<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payments/MOJO5a06005J21512197/');
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
  "payment": {
    "payment_id": "MOJO1412005H64215489",
    "quantity": 1,
    "status": "Credit",
    "link_slug": null,
    "link_title": null,
    "buyer_name": "John Doe",
    "buyer_phone": "9901644400",
    "buyer_email": "john.doe@example.com",
    "currency": "INR",
    "unit_price": "500.00",
    "amount": "500.00",
    "fees": "0.00",
    "shipping_address": null,
    "shipping_city": null,
    "shipping_state": null,
    "shipping_zip": null,
    "shipping_country": null,
    "discount_code": null,
    "discount_amount_off": null,
    "variants": [
      
    ],
    "custom_fields": {
      
    },
    "affiliate_id": null,
    "affiliate_commission": "0",
    "created_at": "2017-04-12T17:09:09.903733Z",
    "payment_request": null
  },
  "success": true
}
