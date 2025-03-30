

<div class="bg-[#007bff] text-white">
    <div class=" mx-auto flex flex-col md:flex-row justify-between items-center py-2 lg:px-20 xl:px-32">
        <p class="text-lg md:text-xl mb-2 md:mb-0">Welcome to Hitack</p>
        <div class="flex items-center space-x-2 text-sm md:text-base">
            <p>Server Time :</p>
            <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p id="currentDateTime" class="whitespace-nowrap">Loading...</p>
            </div>
        </div>
    </div>
</div>

<script>
    function updateDateTime() {
        const now = new Date();
        const options = {
            day: '2-digit', month: 'short', year: 'numeric',
            hour: '2-digit', minute: '2-digit', second: '2-digit',
            hour12: true
        };
        const formattedDate = now.toLocaleString('en-US', options);
        document.getElementById('currentDateTime').innerText = `📅 ${formattedDate}`;
    }

    updateDateTime(); // initial load
    setInterval(updateDateTime, 1000); // update every second
</script>


<div class="w-full container mx-auto bg-white flex justify-between items-center px-32">
    <!-- Logo -->
    <div class="py-2 ">
        <a href="#">
            <img src="{{ asset('logo/rrrr.jpg') }}" alt="Logo" class="h-8 xl:h-16">
        </a>
    </div>

    <!-- Hamburger Menu (Small Screens) -->
    <button id="menuToggle" class="sm:hidden text-blue-500 focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>

    <!-- Navbar (Large Screens) -->
    <nav class="hidden sm:flex bg-white text-blue-500 space-x-6 items-center">
        <ul class="flex space-x-6 items-center">
            <li><a href="#" class="hover:text-yellow-300">Home</a></li>
            <li><a href="#" class="hover:text-yellow-300">Affiliate Terms</a></li>
            <li><a href="#" class="hover:text-yellow-300">Contact Us</a></li>
            <li><a href="#" class="hover:text-yellow-300">UK University</a></li>
            <li><a href="#" class="hover:text-yellow-300">Courses</a></li>
        </ul>
        <a href="{{ route('referral.page') }}" class="bg-gradient-to-r  from-blue-500 to-purple-600 text-white px-3 py-2 rounded-3xl">Join Now</a><p class="pr-3">|</p>
        <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-3 py-2 rounded-3xl">Login</a>
    </nav>

    <!-- Mobile Menu (Drawer) -->
    <div id="mobileMenu" class="hidden fixed inset-0 bg-gray-900 bg-opacity-75 z-50 flex flex-col items-center space-y-4 p-6">
        <button id="closeMenu" class="absolute top-4 right-4 text-white text-3xl">&times;</button>
        <a href="#" class="text-white text-xl">Home</a>
        <a href="#" class="text-white text-xl">Affiliate Terms</a>
        <a href="#" class="text-white text-xl">Contact Us</a>
        <a href="#" class="text-white text-xl">UK University</a>
        <a href="#" class="text-white text-xl">Courses</a>
        <a href="{{ route('referral.page') }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-3xl">Join Now</a>
        <a href="{{ route('referral.page') }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-3xl">Join Now</a>
    </div>
</div>

<script>
document.getElementById('menuToggle').addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.remove('hidden');
});

document.getElementById('closeMenu').addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.add('hidden');
});
</script>
