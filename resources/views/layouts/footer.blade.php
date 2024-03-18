<footer class="border-t border-gray-200">
    <div class="mx-auto w-full max-w-7xl gradient-2 p-4 lg:px-8 py-6 lg:py-8">
        <div class="grid grid-cols-1 gap-8 sm:gap-6 sm:grid-cols-4">

            <div>
                <h2 class="mb-6 text-lg font-semibold text-gray-100 uppercase">MasterFM</h2>
                <p class="text-gray-200 text-sm">MasterFM Facility Management Services is a leading Australian 
                    provider of comprehensive facility solutions. With over five years of experience, we leverage the 
                    expertise of our vast and culturally diverse workforce exceeding 10,000 individuals.
                </p>

                <div class="flex mt-8">
                    <a href="https://www.facebook.com/" class="w-8 h-8 p-4 flex justify-center items-center mr-3 text-xl text-gray-200 rounded"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" class="w-8 h-8 p-4 flex justify-center items-center mr-3 text-xl text-gray-200 rounded"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="w-8 h-8 p-4 flex justify-center items-center mr-3 text-xl text-gray-200 rounded"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.youtube.com/c/" class="w-8 h-8 p-4 flex justify-center items-center mr-3 text-xl text-gray-200 rounded"><i class="fa-brands fa-youtube"></i></a>
                    <a href="" class="w-8 h-8 p-4 flex justify-center items-center mr-3 text-xl text-gray-200 rounded"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

            <div class="lg:ml-12">
                <h2 class="mb-6 text-lg font-semibold text-gray-100 uppercase">USEFUL LINKS</h2>
                <ul class="text-gray-200 font-medium">
                    <li>
                        <a href="{{ route('home') }}" class="hover:underline">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:underline">About</a>
                    </li>
                    <li>
                        <a href="{{ route('innovation') }}" class="hover:underline">Innovation</a>
                    </li>              
                    <li>
                        <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>

            
            <div class="lg:ml-12">
                <h2 class="mb-6 text-lg font-semibold text-gray-100 uppercase">Services</h2>
                <ul class="text-gray-200 font-medium">
                    <li>
                        <a href="{{ route('asset') }}" class="hover:underline">Asset Management</a>
                    </li>
                    <li>
                        <a href="{{ route('hospitality') }}" class="hover:underline">Commercial hospitality</a>
                    </li>
                    <li>
                        <a href="{{ route('electrical') }}" class="hover:underline">Electrical Safety Testing</a>
                    </li>
                    <li>
                        <a href="{{ route('workspace') }}" class="hover:underline">Workspace Management</a>
                    </li>
                    <li>
                        <a href="{{ route('security') }}" class="hover:underline">Security Services</a>
                    </li>
                    <li>
                        <a href="{{ route('operational') }}" class="hover:underline">Operational services</a>
                    </li>
                    <li>
                        <a href="{{ route('infection') }}" class="hover:underline">Infection Control</a>
                    </li>
                    <li>
                        <a href="{{ route('cleaning') }}" class="hover:underline">Commercial Cleaning</a>
                    </li>
                </ul>
            </div>

            <div class="lg:ml-12">
                <h2 class="mb-6 text-lg font-semibold text-gray-100 uppercase">Contact</h2>
                <ul class="text-gray-200 font-medium">
                    <li class="mb-4">
                        <p class="font-semibold mt-2">Office Address</p>                       
                        <p class="font-semibold mt-2">Office Hours</p>               
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto">
        <div class="text-center py-6 bg-indigo-950 border-t border-gray-200">
            <span class="text-sm text-gray-200 text-center"> 
                <span id="current_year"></span> © MasterFM. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>