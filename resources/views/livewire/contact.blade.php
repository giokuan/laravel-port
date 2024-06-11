<section class="z-20 bg-base-100 dark:bg-slate-800" id="contact">
    <x-toast />
    <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
            <div class="max-w-3xl mb-6 text-center sm:text-center md:mx-auto md:mb-12">
                <p class="text-base font-semibold tracking-wide text-gray-500 uppercase dark:text-blue-200">
                    Contact
                </p>
                <h2
                    class="mb-4 text-3xl font-semibold tracking-tight text-gray-500 font-heading dark:text-white sm:text-5xl">
                    Get in Touch
                </h2>
                {{-- <p class="max-w-3xl mx-auto mt-4 text-xl text-gray-600 dark:text-slate-400">In hac habitasse platea
                    dictumst
                </p> --}}
            </div>
        </div>
        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2">
                <div class="h-full pr-6">
                    <p class="mt-12 mb-12 text-lg text-gray-500 dark:text-slate-400">
                        Communication is the key to understanding. Let's unlock possibilities together.
                    </p>
                    <ul class="mb-6 md:mb-0">
                        <li class="flex">
                            <div
                                class="flex items-center justify-center w-10 h-10 bg-gray-500 rounded text-gray-50 animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mb-8 ml-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Address
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">312 Tipas San Juan Batangas Philippines
                                </p>
                                {{-- <p class="text-gray-600 dark:text-slate-400">Philippines</p> --}}
                            </div>
                        </li>
                        <li class="flex">
                            <div
                                class="flex items-center justify-center w-10 h-10 bg-gray-500 rounded text-gray-50 animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                    </path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="mb-8 ml-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Contact
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Mobile: +63 (926) 316-9179</p>

                            </div>
                        </li>
                        <li class="flex">
                            <div
                                class="flex items-center justify-center w-10 h-10 bg-gray-500 rounded text-gray-50 animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657
                                1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                </svg>

                            </div>
                            <div class="mb-4 ml-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Mail
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Mail: giokuan@gmail.com</p>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="max-w-6xl p-5 card h-fit md:p-12" id="form">
                    <h2 class="mb-4 text-2xl font-bold text-gray-500">Ready to Get Started?</h2>

                    {{-- @if ('loadings')
                            <span class="loading loading-ring loading-lg"></span>
                        @endif --}}

                    <form id="contactForm" wire:submit.prevent="submitForm">
                        <div wire:loading class="flex items-center justify-center">
                            <span>Sending</span>
                            <span class="wire:loading loading loading-dots loading-md"></span>

                        </div>
                        <div class="mb-6">
                            <div class="mx-0 mb-1 sm:mb-4">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="name" class="pb-1 text-xs tracking-wider uppercase"></label><input
                                        wire:model="name" type="text" id="name" autocomplete="given-name"
                                        placeholder="Your name"
                                        class="w-full py-2 pl-2 pr-4 mb-2 border border-gray-400 rounded-md shadow-md dark:text-gray-300 sm:mb-0"
                                        name="name">
                                    @error('name')
                                        <em class="text-red-500">{{ $message }}</em>
                                    @enderror
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="email" class="pb-1 text-xs tracking-wider uppercase"></label><input
                                        wire:model="email" type="email" id="email" autocomplete="email"
                                        placeholder="Your email address"
                                        class="w-full py-2 pl-2 pr-4 mb-2 border border-gray-400 rounded-md shadow-md dark:text-gray-300 sm:mb-0"
                                        name="email">
                                    @error('email')
                                        <em class="text-red-500">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-4">
                                <label for="textarea" class="pb-1 text-xs tracking-wider uppercase"></label>
                                <textarea wire:model="message" id="textarea" name="textarea" cols="30" rows="5"
                                    placeholder="Write your message..."
                                    class="w-full py-2 pl-2 pr-4 mb-2 border border-gray-400 rounded-md shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                                @error('message')
                                    <em class="text-red-500">{{ $message }}</em>
                                @enderror
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit"
                                class="w-full px-6 py-3 text-white bg-gray-500 rounded-md font-xl sm:mb-0 hover:bg-gray-600">Send
                                Message</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</section>
