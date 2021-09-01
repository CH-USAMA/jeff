<?php

namespace App\Http\Controllers;
use App\Jobs\MatchSendEmail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $emailJob = new MatchSendEmail();
        dispatch($emailJob);
        /** Option 1 */
        Queue::push(new MatchSendEmail($options));

        /** Option 2 */
        dispatch(new MatchSendEmail($options));

        /** Option 3 */
        (new MatchSendEmail($options))->dispatch();

        /** Option 4 */
        \App\Jobs\MatchSendEmail::dispatch($options);
    }
}
