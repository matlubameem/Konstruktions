<?php

use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;


/**
 * @param Validator $validator
 * @return \Illuminate\Http\RedirectResponse
 */
function redirectBackWithValidationError(Validator $validator)
{
    $notification = [
        'message' => 'Please Fill up Fields Carefully!',
        'alert-type' => 'error'
    ];
    return redirect()->back()->withInput()->withErrors($validator)->with($notification);
}

/**
 * @param string $for
 * @param int $forId
 * @param string $note
 * @return bool
 */
function addActivity(string $for, int $forId, string $note)
{
    $activityFor = 'activity_';
    $activityFor .= ($for === 'user') ? 'for_user_id' : $for . '_id';

    return Activity::insert([
        'activity_of_user_id'  => Auth::id(),
        'activity_note'         => $note,
        $activityFor            => $forId,
        'created_at'            => Carbon::now(config('app.timezone'))
    ]);
}

/**
 * @param string $purpose
 * @return string
 */
function getUniqueCode(string $purpose)
{
    $head       = strtoupper(substr($purpose, 0, 4));
    $date       = now()->format('dm-Y');
    $time       = now()->format('gi-sA');
    $rand_id    = strtoupper(substr(bcrypt(true), 3, 13));
    return $head . '-' . $date . '-' . $time . '-' . $rand_id;
}

/**
 * @return false|string
 */
function getClientMacAddress()
{
    $full_mac_address = exec('getmac');
    return substr($full_mac_address, 0, 17);
}
