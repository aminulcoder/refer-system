<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply for a UK Course</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-xl rounded p-8 max-w-3xl w-full">
        <!-- Header Section -->
        <div class="text-center bg-indigo-950 mb-6">
            <img src="{{ asset('logo/rrrr.jpg') }}" alt="Wilor Logo" class="mx-auto w-40">
        </div>
        <h1 class="text-2xl font-bold mt-4 text-gray-800">Apply for a UK Course</h1>
        <p class="text-gray-600">Get funding for your studies (if eligible).</p>

        <!-- Benefits Section -->
        <ul class="bg-indigo-50 p-4 rounded-lg text-sm text-gray-700 mb-6">
            <li>&#10003; 100% Free Support</li>
            <li>&#10003; Flexible Online & Campus Classes</li>
            <li>&#10003; Weekend & Weekday Options</li>
        </ul>

        <!-- Form Section -->
        <form action="{{ route('referral.student.store') }}" method="post" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="fname"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="lname"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" name="address"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
            </div>
            <input type="hidden" name="referral_code" value="{{ request('ref') }}">

            <!-- Course Selection -->
            <div>
                <label for="course" class="block text-sm font-medium text-gray-700">Select Your Course</label>
                <select id="course" name="course"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option>Select a course</option>
                    <option>BA (Hons) Global Business Management</option>
                    <option>BSC (Hons) Health and Social Care</option>
                    <option>BSC (Hons) Accounting and Finance</option>
                    <option>BSC (Hons) Computing</option>
                    <option>LLB (Hons) with Qualifying Status</option>
                    <option>BA (Hons) Psychology and Counselling</option>
                    <option>BSC Project Management</option>
                    <option>BSC Supply Chain and Logistics Management</option>
                    <option>BSc (Hons) Construction Project Management</option>
                    <option>BA (Hons) Business Management and Marketing</option>
                    <option>BSC (Hons) Digital Marketing</option>
                    <option>BSc (Hons) Computing</option>
                    <option>BA (Hons) Business and Management</option>
                    <option>BA (Hons) Criminology</option>
                    <option>BA (Hons) Graphic Design</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-start">
                <button type="submit"
                    class=" bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-indigo-700 transition">
                    Submit Application
                </button>
            </div>
        </form>
        {{-- {{ dd(session('message')) }} --}}

    </div>
    {{-- {{ dd(session('message')) }} --}}

    <!-- Success Message Script -->
    @if (session('message'))
    <script>
        Swal.fire({
            title: "Generated successfully",
            text: "Congratulations, check your email for the link",
            icon: "success"
        }).then(() => {
            window.location.href = "{{ route('homepage') }}"; // সফল হলে হোমপেজে পাঠানো হবে
        });
    </script>
    @endif

</body>

</html>
