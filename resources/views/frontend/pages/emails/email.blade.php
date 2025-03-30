<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data['title']}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Email Container -->
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-xl mt-16 p-12">
        <!-- Header Section -->
        <div class="text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-t-xl p-8">
            <h1 class="text-4xl font-extrabold leading-tight">Welcome to the Referral System, {{$data['fname']}}!</h1>
            <p class="mt-2 text-xl font-medium">We're excited to have you on board!</p>
        </div>

        <!-- Body Section -->
        <div class="p-8">
            <div class="text-lg text-gray-700 mb-6 space-y-4">
                <p><strong class="text-xl font-semibold">Username:</strong> {{$data['email']}}</p>
                <p><strong class="text-xl font-semibold">Password:</strong> {{$data['password']}}</p>

                <p class="text-lg text-gray-600 mt-4">To get started, please <a href="{{route('login')}}" class="text-indigo-600 font-semibold underline">log in</a> to access your account.</p>

                <p class="text-lg text-gray-600 mt-2">Start growing your network by sharing your personalized <a href="{{ $data['url'] }}" class="text-indigo-600 font-semibold underline">Referral Link</a>.</p>
            </div>

            <!-- Call-to-Action Button -->
            <div class="mt-8 text-center">
                <a href="{{ $data['url'] }}" class="inline-block bg-indigo-600 text-white py-3 px-8 rounded-full text-xl font-semibold hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                    Start Referring Now
                </a>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="text-center text-sm text-gray-600 mt-10">
            <p class="font-medium">Thank you for being part of our community!</p>
            <p class="mt-2">If you need any assistance, feel free to <a href="#" class="text-indigo-600 font-semibold">contact us</a>.</p>
        </div>
    </div>

</body>
</html>
