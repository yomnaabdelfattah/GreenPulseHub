<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51PQdL8P8YMmp2wlpv4TpL5Lb1v9jFsrwq8OCMu9KiBJK9j5hVAE1LEWd8QGOGr6JdjTKunCBdpqpHKCwPyiMTDmI00x2eG7EL4";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "cancel_url" => "http://localhost/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "USD",
                "unit_amount" => 50000,
                "product_data" => [
                    "name" => "Subscrpbtion Plan"
                ]
            ]
        ],
       
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);