<?php

return array(
    'enabled' => array(
        'title' => 'Enable/Disable',
        'label' => 'Enable Fatora Gateway',
        'type' => 'checkbox',
        'description' => '',
        'default' => 'no'
    ),
    'title' => array(
        'title' => 'Title',
        'type' => 'text',
        'description' => 'This controls the title which the user sees during checkout.',
        'default' => 'Fatora',
        'desc_tip' => true,
    ),
    'description' => array(
        'title' => 'Description',
        'type' => 'textarea',
        'description' => 'This controls the description which the user sees during checkout.',
        'default' => 'You will be redirected to Fatora to process your payment',
    ),
    'testmode' => array(
        'title' => 'Test mode',
        'label' => 'Enable Test Mode',
        'type' => 'checkbox',
        'description' => 'Place the payment gateway in test mode using test API keys.',
        'default' => 'yes',
        'desc_tip' => true,
    ),
    'username' => array(
        'title' => 'Username provided by Fatora',
        'type' => 'text'
    ),
    'password' => array(
        'title' => 'Password provided by Fatora',
        'type' => 'password'
    ),
    'terminal_id' => array(
        'title' => 'Terminal ID provided by Fatora',
        'type' => 'text'
    )
);