<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>


    {{-- NAVBAR mobile only --}}
    <x-nav sticky class="lg:hidden">
        <x-slot:brand>
            <x-app-brand />
            <img src="{{ asset('storage/profile.png') }}" class="w-10 " />
            <span class="pl-4 text-lg font-semibold">Gio Kuan</span>

        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
        </x-slot:actions>
    </x-nav>

    {{-- MAIN --}}
    <x-main full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible
            class="z-50 shadow-md bg-base-100 dark:bg-gray-900 lg:bg-gray-100">


            {{-- BRAND --}}
            <x-app-brand class="p-5 pt-3" />

            {{-- MENU --}}
            <x-menu activate-by-route class="z-50 dark:text-sky-500 ">


                <div {{ $attributes->class(['hidden-when-collapsed']) }}>
                    <div class="flex flex-col items-center gap-2 my-8 ">

                        <div>
                            <div
                                class="relative mx-auto bg-gray-800 dark:bg-gray-700 rounded-t-[2.5rem] h-[63px] max-w-[133px]">
                            </div>
                            <div
                                class="relative mx-auto border-gray-900 dark:bg-gray-800 dark:border-gray-800 border-[10px] rounded-[2.5rem] h-[213px] w-[208px]">
                                <div
                                    class="h-[41px] w-[6px] bg-gray-800 dark:bg-gray-800 absolute -end-[16px] top-[40px] rounded-e-lg">
                                </div>
                                <div
                                    class="h-[32px] w-[6px] bg-gray-800 dark:bg-gray-800 absolute -end-[16px] top-[88px] rounded-e-lg">
                                </div>
                                <div class="rounded-[2rem] overflow-hidden h-[193px] w-[188px]">
                                    <img src="{{ asset('storage/profile.png') }}" class="mx-auto h-[194px] w-[189px]" />
                                    {{-- <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/watch-screen-image.png" class="dark:hidden h-[193px] w-[188px]" alt=""> --}}
                                    <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/watch-screen-image-dark.png"
                                        class="hidden dark:block h-[193px] w-[188px]" alt="">
                                </div>
                            </div>
                            <div
                                class="relative mx-auto bg-gray-800 dark:bg-gray-700 rounded-b-[2.5rem] h-[63px] max-w-[133px]">
                            </div>
                        </div>

                        <span class="mr-3 text-3xl font-semibold text-gray-500 dark:text-sky-500">
                            Giovanni Kuan
                            <span
                                class="flex items-center justify-center text-sm font-semibold text-gray-500 dark:text-sky-500">
                                Software Developer
                            </span>
                        </span>


                        <nav class="flex gap-4 mr-4 text-gray-500 dark:text-sky-500">
                            <a href="https://github.com/giokuan"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38
                                        0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01
                                        1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12
                                        0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87
                                        3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                </svg></a>

                            <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526
                                        16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4
                                        3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662
                                        1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                </svg></a>

                            <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                    </path>
                                </svg></a>
                        </nav>

                    </div>
                </div>

                {{-- <x-menu-item title="Hello" icon="o-sparkles" link="/" /> --}}

                <x-menu-item title="Home" icon="o-home" link="/" />
                <x-menu-item title="Projects" icon="o-code-bracket-square" link="/projects" />
                <x-menu-item title="My Stacks" icon="o-square-3-stack-3d" link="/stacks" />
                <x-menu-item title="About me" icon="o-user-circle" link="/about" />
                <x-menu-item title="Contact me" icon="o-phone" link="/contact" />
                {{-- <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                    <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                   
                </x-menu-sub> --}}

            </x-menu>


        </x-slot:sidebar>


        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
