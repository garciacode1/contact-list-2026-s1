<?php
// filename: resources/views/static_pages/contact_us.blade.php
?>
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | {{ config('app.name', 'Laravel') }}</title>


    <! -- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
          rel="stylesheet" />

    <!-- Styles/ Scripts -->
    @if (file_exists(public_path('build/maifest.json')) ||  file_exists(public_path('hot')))
        @vite([
               'resources/css/app.css' ,
               'resources/js/app.js'
               ])
    @else
         <style>
             /* Styles not used by our page */
         </style>
    @endif

</head>

<body>
<h1 class="text-4xl text-blue-500">
    Contact Us
</h1>
<form action="{{ route('static.contact-us') }}"
      method="post"
      class="mx-auto max-w-md space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    @csrf
    <div>
        <label class="block text-sm font-medium text-gray-900" for="name">Name</label>

        <input class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="name" type="text" placeholder="Your name">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="email">Email</label>

        <input class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="email" type="email" placeholder="Your email">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="topic">Topic</label>

        <select class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="subject">
            <option value="">Select a topic</option>
            <option value="general-inquiry">General Inquiry</option>
            <option value="support">Support</option>
            <option value="feedback">Feedback</option>
        </select>
    </div>



    <div>
        <label class="block text-sm font-medium text-gray-900" for="message">Message</label>

        <textarea class="bg-white p-1 mt-1 w-full resize-none rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="message" rows="4" placeholder="Your message"></textarea>
    </div>

    <button class="block w-full rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600" type="submit">
        Send Message
    </button>
</form>
</body>
</html>
