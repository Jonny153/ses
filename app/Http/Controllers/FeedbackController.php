<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Mail\SiteCall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{

    protected $emails;

    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->emails = config('common.contacts.toEmail');
    }


    public function call(Request $request)
    {
        try {

            Mail::to($this->emails)->send(new SiteCall($request->post()));

        } catch (\Exception $exception) {

            return response()->json([
                'status' => 'error',
                'exception' => $exception->getMessage(),
                'message' => 'Произошла ошибка, попробуйте еще раз.'
            ]);

        }

        return response()->json(['status' => 'ok', 'message' => 'Ваша заявка принята!']);
    }

}
