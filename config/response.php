<?php

return [
    0 => [
        'http_code' => 200,
        'message' => 'Success'
    ],

    40001 => [
        'http_code' => 400,
        'message' => 'SuperBrand does not support creating sub brands'
    ],

    40002 => [
        'http_code' => 400,
        'message' => 'Permissions are not matched'
    ],

    40003 => [
        'http_code' => 400,
        'message' => 'Can\'t whitelist ip for this brand'
    ],

    40004 => [
        'http_code' => 400,
        'message' => 'Can\'t update permissions of the role'
    ],

    40005 => [
        'http_code' => 400,
        'message' => 'Trying to transfer to a wrong brand'
    ],

    40006 => [
        'http_code' => 400,
        'message' => 'Brand insufficient balance'
    ],

    40007 => [
        'http_code' => 400,
        'message' => 'SuperBrand does not support creating players'
    ],

    40008 => [
        'http_code' => 400,
        'message' => 'Old password is not correct'
    ],

    40009 => [
        'http_code' => 400,
        'message' => 'Transaction has been reviewed'
    ],

    40010 => [
        'http_code' => 400,
        'message' => 'Transaction has been rollback'
    ],

    40100 => [
        'http_code' => 401,
        'message' => 'Unauthorized'
    ],

    40300 => [
        'http_code' => 403,
        'message' => 'Not allowed to access'
    ],

    40301 => [
        'http_code' => 403,
        'message' => 'Cant\'t access that brand'
    ],

    40302 => [
        'http_code' => 403,
        'message' => 'Too many attempts'
    ],

    40303 => [
        'http_code' => 403,
        'message' => 'User has been frozen'
    ],

    40304 => [
        'http_code' => 403,
        'message' => 'Cant\'t change password for that user'
    ],

    40305 => [
        'http_code' => 403,
        'message' => 'Brand has been frozen'
    ],

    40400 => [
        'http_code' => 404,
        'message' => 'Api not exists'
    ],

    40401 => [
        'http_code' => 404,
        'message' => 'Model not found'
    ],

    40402 => [
        'http_code' => 404,
        'message' => 'Columns not found'
    ],

    40403 => [
        'http_code' => 404,
        'message' => 'Provider not exists'
    ],

    40404 => [
        'http_code' => 404,
        'message' => 'Brand not exists'
    ],

    40405 => [
        'http_code' => 404,
        'message' => 'Provider data not exists'
    ],

    40406 => [
        'http_code' => 404,
        'message' => 'Supplier data not exists'
    ],

    40500 => [
        'http_code' => 405,
        'message' => 'Method not allowed'
    ],

    42200 => [
        'http_code' => 422,
        'message' => 'Parameters error'
    ],

    42201 => [
        'http_code' => 422,
        'message' => 'Player transfer not valid'
    ],

    50000 => [
        'http_code' => 500,
        'message' => 'Something went wrong'
    ],

    50001 => [
        'http_code' => 500,
        'message' => 'Application is now in maintenance mode'
    ],

    // Below are from GMI API
    60021 => [
        'http_code' => 400,
        'message' => 'Player duplicate'
    ],

    60023 => [
        'http_code' => 400,
        'message' => 'Player frozen'
    ],

    60024 => [
        'http_code' => 400,
        'message' => 'Player not found'
    ],

    60035 => [
        'http_code' => 400,
        'message' => 'Wrong provider'
    ],

    61009 => [
        'http_code' => 400,
        'message' => 'Out of money to withdraw'
    ],

    // Below are from Provider API
    74221 => [
        'http_code' => 422,
        'message' => 'parameters error'
    ],

    74009 => [
        'http_code' => 400,
        'message' => 'Game already exists'
    ]
];
