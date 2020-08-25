<?php

use Illuminate\Validation\Validator;


function redirectBackWithValidationError(Validator $validator)
{
    $notification = [
        'message' => 'Please Fill up Fields Carefully!',
        'alert-type' => 'error'
    ];
    return redirect()->back()->withInput()->withErrors($validator)->with($notification);
}
