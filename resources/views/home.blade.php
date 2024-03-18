<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <div class="w-full md:h-screen overflow-hidden">
            <img class="w-full object-cover" src="/images/staff-office.jpg" alt="">
        </div>
    </div>

    <div class="w-full py-12 px-4 md:px-12">
        <h1 class="text-3xl font-black text-center mb-6">Services</h1>

        <div class="grid gap-6 grid-cols-1 md:grid-cols-4">

            <a href="{{ route('asset') }}" class="border-2 border-neutral-200 p-4">           
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img class="object-cover" src="/images/asset.svg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Asset Management</h1>
            </a>

            <a href="{{ route('hospitality') }}" class="border-2 border-neutral-200 p-4">
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/hospitality.svg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Commercial hospitality</h1>
            </a>

            <a href="{{ route('electrical') }}" class="border-2 border-neutral-200 p-4">              
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/electrical.jpg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Electrical Safety Testing</h1>
            </a>

            <a href="{{ route('workspace') }}" class="border-2 border-neutral-200 p-4">             
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/workspace.jpg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Workspace Management</h1>
            </a>

            <a href="{{ route('security') }}" class="border-2 border-neutral-200 p-4">              
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/security-1.png" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Security Services</h1>
            </a>

            <a href="{{ route('operational') }}" class="border-2 border-neutral-200 p-4">                
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/operation.svg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Operational services</h1>
            </a>

            <a href="{{ route('infection') }}" class="border-2 border-neutral-200 p-4">            
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/infection.svg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Infection Control</h1>
            </a>

            <a href="{{ route('cleaning') }}" class="border-2 border-neutral-200 p-4">              
                <div class="aspect-[4/3] bg-white overflow-hidden">
                    <img src="/images/cleaning.jpg" alt="">
                </div>
                <h1 class="text-xl font-black text-center mt-4">Commercial Cleaning</h1>
            </a>
        </div>
        
    </div>

    <div class="w-full py-12 px-4 md:px-12 bg-gray-100">
        <h1 class="text-neutral-900 font-bold text-3xl text-center">Why Choose Us</h1>
        <div class="my-12 grid gap-6 grid-cols-1 md:grid-cols-5">
            <div class="text-center mx-auto">
                <span class="w-16 h-16 mx-auto gradient-1 text-white text-2xl rounded-full flex items-center justify-center">
                    <img src="/images/icon-safety.svg" alt="">
                </span>
                <p class="mt-6 uppercase text-neutral-800 text-md font-bold">Safety</p>
            </div>
            <div class="text-center mx-auto mt-6 md:mt-0">
                <span class="w-16 h-16 mx-auto gradient-1 text-white text-2xl rounded-full flex items-center justify-center">
                    <img src="/images/icon-trust.svg" alt="">
                </span>
                <p class="mt-6 uppercase text-neutral-800 text-md font-bold">Respect & Trust</p>
            </div>
            <div class="text-center mx-auto mt-6 md:mt-0">
                <span class="w-16 h-16 mx-auto gradient-1 text-white text-2xl rounded-full flex items-center justify-center">
                    <img src="/images/icon-innovation.svg" alt="">
                </span>
                <p class="mt-6 uppercase text-neutral-800 text-md font-bold">Innovation</p>
            </div>
            <div class="text-center mx-auto mt-6 md:mt-0">
                <span class="w-16 h-16 mx-auto gradient-1 text-white text-2xl rounded-full flex items-center justify-center">
                    <img src="/images/icon-integrity.svg" alt="">
                </span>
                <p class="mt-6 uppercase text-neutral-800 text-md font-bold">Integrity</p>
            </div>
            <div class="text-center mx-auto mt-6 md:mt-0">
                <span class="w-16 h-16 mx-auto gradient-1 text-white text-2xl rounded-full flex items-center justify-center">
                    <img src="/images/icon-agility.svg" alt="">
                </span>
                <p class="mt-6 uppercase text-neutral-800 text-md font-bold">Agility</p>
            </div>
        </div>
    </div>

</x-guest-layout>