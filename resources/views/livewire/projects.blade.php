<div class="relative w-full">
    <div class="sticky top-0 flex flex-col items-center justify-center h-screen ">
        <main class="container mx-auto mt-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full px-4 mb-8 md:w-8/12">
                    <img src="storage/sjmc-logo.png" alt="Featured Image" class="object-cover w-full h-64 rounded">
                    <h2 class="mt-4 mb-2 text-lg font-semibold text-gray-500 md:text-2xl lg:text-4xl">SJMC MEMBERSHIP
                        MANAGEMENT
                        SYSTEM</h2>
                    <p class="mb-4 text-sm text-gray-700 md:text-base">Tau Gamma Phi San Juan Municipal Council
                        Membership
                        Management System
                        -
                        is a web application
                        designed to facilitate the management of fraternity membership for existing members of the Tau
                        Gamma Phi
                        San Juan Municipal Council. The system leverages the TALL stack, which includes Tailwind CSS,
                        Alpine.js, Laravel, and Livewire. The primary objective of the system is to provide an intuitive
                        and efficient platform for managing fraternity membership information and facilitating
                        communication between fraternity members and administrators.</p>

                </div>
                <div class="hidden w-full px-4 mb-8 md:w-4/12 md:block">
                    <div class="px-4 py-6 text-gray-500 bg-gray-100 rounded">
                        <h3 class="mb-2 text-lg font-bold">TECH USE:</h3>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/laravel.svg') }}" class="w-6 h-6">
                            <p>Laravel</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/livewire.svg') }}" class="w-6 h-6">
                            <p>Livewire</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/tailwind-css.svg') }}" class="w-6 h-6">
                            <p>Tailwind</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/alpinejs-icon.svg') }}" class="w-6 h-6">
                            <p>Alpine Js</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/mysql.svg') }}" class="w-6 h-6">
                            <p>MySQL</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        {{-- Livewire: fires network request --}}
        {{-- <x-button label="Livewire" class="btn-primary" wire:click="$toggle('myPersistentModal')" /> --}}

        {{-- Alpine: no network request --}}
        <x-button label="View Demo" class="text-white bg-gray-500" @click="$wire.myPersistentModal = true" />

        {{-- Notice `persistent` --}}
        <x-modal wire:model="myPersistentModal" title="SJMC MEMBERSHIP MANAGEMENT SYSTEM" separator persistent
            class="w-full">
            {{-- <video width="420" height="340" src="https://www.youtube.com/embed/QpB0usKbhTU?si=TVpo9seWVq4Hj47X"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></video> --}}
            <x-slot:actions>
                <x-button class="bg-gray-500" label="Close" @click="$wire.myPersistentModal = false" />
                {{-- <x-button label="Confirm" class="btn-primary" /> --}}
            </x-slot:actions>
        </x-modal>
    </div>
    <div class="sticky top-0 flex flex-col items-center justify-center h-screen text-white bg-gray-50">
        <main class="container mx-auto mt-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full px-4 mb-8 md:w-8/12">
                    <img src="storage/tinhs.png" alt="Featured Image" class="object-cover w-full h-64 rounded">
                    <h2 class="mt-4 mb-2 font-semibold text-gray-500 text:lg md:text-2xl lg:text-4xl">TINHS Portal</h2>
                    <p class="mb-4 text-sm text-gray-700 md:text-base">This school portal I have developed
                        combines custom middleware with multi-authentication to deliver an
                        innovative and inclusive educational experience for junior and senior
                        high school students. By leveraging the power of technology, I aim to
                        bridge the gap between students, teachers, and administrators, creating a
                        seamless ecosystem.</p>

                </div>
                <div class="hidden w-full px-4 mb-8 md:w-4/12 md:block">
                    <div class="px-4 py-6 text-gray-500 bg-gray-200 rounded">
                        <h3 class="mb-2 text-lg font-bold">TECH USE:</h3>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/laravel.svg') }}" class="w-6 h-6">
                            <p>Laravel</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/livewire.svg') }}" class="w-6 h-6">
                            <p>Livewire</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/tailwind-css.svg') }}" class="w-6 h-6">
                            <p>Tailwind</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/alpinejs-icon.svg') }}" class="w-6 h-6">
                            <p>Alpine Js</p>
                        </div>

                        <div class="flex gap-4 ">
                            <img src="{{ asset('storage/mysql.svg') }}" class="w-6 h-6">
                            <p>MySQL</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        {{-- Livewire: fires network request --}}
        {{-- <x-button label="Livewire" class="btn-primary" wire:click="$toggle('myPersistentModal')" /> --}}

        {{-- Alpine: no network request --}}
        <x-button label="View Demo" class="text-white bg-gray-500" @click="$wire.myPersistentModal2 = true" />

        {{-- Notice `persistent` --}}
        <x-modal wire:model="myPersistentModal2" title="TINHS Portal" separator persistent class="w-full text-gray-500">
            <video width="420" height="340" controls class="w-full rounded-t-lg">
                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

            <x-slot:actions>
                <x-button class="bg-gray-500" label="Close" @click="$wire.myPersistentModal2 = false" />
                {{-- <x-button label="Confirm" class="btn-primary" /> --}}
            </x-slot:actions>
        </x-modal>
    </div>
    <div class="sticky top-0 flex flex-col items-center justify-center h-screen text-white bg-white">
        <main class="container mx-auto mt-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full px-4 mb-8 md:w-8/12">
                    <img src="storage/brr.jpg" alt="Featured Image" class="object-cover w-full h-64 rounded">
                    <h2 class="mt-4 mb-2 font-semibold text-gray-500 text:lg md:text-2xl lg:text-4xl">BARANGAY RESIDENT
                        RECORD SYSTEM</h2>
                    <p class="mb-4 text-sm text-gray-700 md:text-base">A desktop software application developed using
                        Python with PyQt5 and
                        MySQL as the underlying technologies its primary purpose is to facilitate the management and
                        organization of resident information within a barangay (local community) The system provides
                        various search functionalities to efficiently retrieve specific groups of residents based on
                        different criteria</p>

                </div>
                <div class="hidden w-full px-4 mb-8 md:w-4/12 md:block">
                    <div class="px-4 py-6 text-gray-500 bg-gray-100 rounded">
                        <h3 class="mb-2 text-lg font-bold">TECH USE:</h3>

                        <div class="flex gap-4 mb-2">
                            <img src="storage/python.svg" class="w-6 h-6">
                            <p>Python</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="storage/qt.svg" class="w-6 h-6">
                            <p>PyQT5</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="{{ asset('storage/mysql.svg') }}" class="w-6 h-6">
                            <p>MySQL</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        {{-- Livewire: fires network request --}}
        {{-- <x-button label="Livewire" class="btn-primary" wire:click="$toggle('myPersistentModal')" /> --}}

        {{-- Alpine: no network request --}}
        <x-button label="View Demo" class="text-white bg-gray-500" @click="$wire.myPersistentModal3 = true" />

        {{-- Notice `persistent` --}}
        <x-modal wire:model="myPersistentModal3" title="BARANGAY RESIDENT RECORD SYSTEM" separator persistent
            class="w-full text-gray-500 ">
            <video width="420" height="340" controls class="w-full rounded-t-lg">
                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

            <x-slot:actions>
                <x-button class="bg-gray-500" label="Close" @click="$wire.myPersistentModal3 = false" />
                {{-- <x-button label="Confirm" class="btn-primary" /> --}}
            </x-slot:actions>
        </x-modal>
    </div>
    <div class="sticky top-0 flex flex-col items-center justify-center h-screen text-black bg-gray-50">
        <main class="container mx-auto mt-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full px-4 mb-8 md:w-8/12">
                    <img src="storage/textspeech.png" alt="Featured Image" class="object-cover w-full h-64 rounded">
                    <h2 class="mt-4 mb-2 font-semibold text-gray-500 text:lg md:text-2xl lg:text-4xl">THE LAZY READER
                    </h2>
                    <p class="mb-4 text-sm text-gray-700 md:text-base">The Lazy Reader is a Python project a local
                        desktop application that
                        aims to provide a text-to-speech solution
                        specifically designed for children. The primary functionality of the project is to convert text
                        input into speech output, allowing children to listen to the text instead of reading it
                        themselves. Additionally, the project offers three different themes for children to choose from,
                        enhancing the user experience and making it more engaging</p>

                </div>
                <div class="hidden w-full px-4 mb-8 md:w-4/12 md:block">
                    <div class="px-4 py-6 text-gray-500 bg-gray-100 rounded">
                        <h3 class="mb-2 text-lg font-bold">TECH USE:</h3>

                        <div class="flex gap-4 mb-2">
                            <img src="storage/python.svg" class="w-6 h-6">
                            <p>Python</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="storage/qt.svg" class="w-6 h-6">
                            <p>PyQT5</p>
                        </div>

                        <div class="flex gap-4 mb-2">
                            <img src="storage/mysql.svg" class="w-6 h-6">
                            <p>MySQL</p>
                        </div>


                    </div>
                </div>
            </div>
        </main>
        {{-- Livewire: fires network request --}}
        {{-- <x-button label="Livewire" class="btn-primary" wire:click="$toggle('myPersistentModal')" /> --}}

        {{-- Alpine: no network request --}}
        <x-button label="View Demo" class="text-white bg-gray-500" @click="$wire.myPersistentModal4 = true" />

        {{-- Notice `persistent` --}}
        <x-modal wire:model="myPersistentModal4" title="THE LAZY READER" separator persistent
            class="w-full text-gray-500 ">
            <video width="420" height="340" controls class="w-full rounded-t-lg">
                <source src="" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

            <x-slot:actions>
                <x-button class="bg-gray-500" label="Close" @click="$wire.myPersistentModal4 = false" />
                {{-- <x-button label="Confirm" class="btn-primary" /> --}}
            </x-slot:actions>
        </x-modal>
    </div>
</div>


@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            $('#myModal').on('hidden.bs.modal', function(e) {
                var iframe = document.getElementById('demoVideo');
                // Pause the video when the modal is closed
                iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
            });
        });
    </script>
@endpush
