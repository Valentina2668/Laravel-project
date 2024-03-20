<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Models\Subscriber;
use App\Mail\UserJoin;
use App\Jobs\SubscriberJoinJob;
use App\Models\Mail;



class SubscribeController extends Controller
{
    public function post(NewsletterRequest $request)
    {
        // $validated = $request->validated();
// dd($validated);
        // Maybe you need more validation rules???
        $subscriber = Subscriber::create([
            'email' => $request['email'],
            'hash' => md5($request['email']),
        ]);

        SubscriberJoinJob::dispatch($subscriber);

        return redirect()->back()->with('success', 'You have successfully subscribed. Please check your email spam folder.');
    }

    public function verify(string $hash)
    {
        $subscriber = Subscriber::where('hash', $hash)->firstOrFail();

        $subscriber->update([
            'hash' => null,
            'verified_at' => now()
        ]);

        return redirect('/')
            ->with('success', 'You have successfully verified your email.');
    }
}
