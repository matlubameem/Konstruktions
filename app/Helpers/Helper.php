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
        'activity_for_user_id' => Auth::id(),
        'activity_note' => $note,
        $activityFor => $forId,
        'created_at' => Carbon::now(config('app.timezone'))
    ]);
}
