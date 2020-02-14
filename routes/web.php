<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Mail\ContactShipped;
use App\Mail\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

if (!Session::has('lang')) Session::put('lang', 'en');

Route::get('en', function () {
    Session::put('lang', 'en');
    return redirect()->back();
});

Route::get('fr', function () {
    Session::put('lang', 'fr');
    return redirect()->back();
});

Route::get('/', function () {
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile[session('lang')];

    return view('welcome', compact('content'));
});

Route::get('/about-us', function () {
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile[session('lang')];

    return view('about-us', compact('content'));
});

Route::get('/services', function () {
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile[session('lang')];

    return view('services.index', compact('content'));
});

Route::get('/contact', function () {
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile[session('lang')];

    return view('contact', compact('content'));
});

Route::post('/contact', function (Request $request) {
    $validatedInput = $request->validate([
        'name' => 'required',
        'email' => 'required:email',
        'object' => 'required',
        'message' => 'required'
    ]);
    foreach ($validatedInput as $key => $value) {
        $validatedInput[$key] = htmlspecialchars($value);
    }
    Mail::to('jcalvin6@gmail.com')->send(new ContactShipped($validatedInput));
    Session::flash('sent_mail', 'Votre message a bel et bien été envoyé !');
    return back();
});

Route::post('/newsletter', function (Request $request) {
    $jsonString = file_get_contents(base_path('newsletter.json'));
    $newsletterFile = json_decode($jsonString, true);

    $validatedInput = $request->validate([
        'email' => 'required:email'
    ]);
    foreach ($validatedInput as $key => $value) {
        $validatedInput[$key] = htmlspecialchars($value);
    }

    $check = false;
    foreach ($newsletterFile as $value) {
        $email = $validatedInput['email'];
        if ($value === $email) {
            $check = true;
        }
    }
    if (!$check) {
        $newsletterFile[] = $validatedInput['email'];
        $newJsonString = json_encode($newsletterFile);
        file_put_contents(base_path('newsletter.json'), $newJsonString);

        Mail::to('jcalvin6@gmail.com')->send(new Newsletter($validatedInput));
        Session::flash('newsletter_success', 'You successfully subscribed to our newsletter !');
    } else {
        Session::flash('newsletter_failure', 'Subscription failed !');
    }

    return back();
});

Auth::routes();

Route::redirect('home', '/');
