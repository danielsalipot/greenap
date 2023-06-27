<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css',
        'resources/js/app.js',
        'resources/css/swiper-bundle.min.css',
        'resources/js/swiper-bundle.min.js',
        'resources/js/script.js'
        ])
        <title>Green AP</title>
    </head>
    <body class="antialiased font-nunito">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>

         <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-sisal dark:bg-gray-800">
                <p href="#" class="flex items-center p-2 text-gray-900">
                    <span class="m-auto text-2xl font-extrabold">GreenAP Admin</span>
                 </p>
                <ul class="space-y-2 font-medium my-40">
                  <li>
                    <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="cms-drop" data-collapse-toggle="cms-drop">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M9.338 12.276a1.614 1.614 0 1 0 0-3.228 1.614 1.614 0 0 0 0 3.228Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m2.111 17.889 6.086-6.086m2.663-7.228 4.565 4.565-2.283 6.086L2.461 19 1 17.539 4.774 6.858l6.086-2.283Zm5.205 5.203-5.843-5.842L13.158 1 19 6.843l-2.935 2.935Zm-5.113.884a1.614 1.614 0 1 1-3.228 0 1.614 1.614 0 0 1 3.228 0Z"/>
                          </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Content Management</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul id="cms-drop" class="hidden py-2 space-y-2">
                        <button type="button" class="flex items-center w-full px-4 py-2   text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="post-drop" data-collapse-toggle="post-drop">
                            <span class="flex-1 ml-10 text-left whitespace-nowrap" sidebar-toggle-item>Posts</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="post-drop" class="hidden py-2 space-y-2 px-10">
                            <li>
                                <a href="/admin/post" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">List</a>
                            </li>
                            <li>
                                <a href="/admin/post/create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Create</a>
                            </li>
                        </ul>
                        <button type="button" class="flex items-center w-full px-4 py-2  text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="logo-drop" data-collapse-toggle="logo-drop">
                            <span class="flex-1 ml-10 text-left whitespace-nowrap" sidebar-toggle-item>Sponsor Logos</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="logo-drop" class="hidden py-2 space-y-2 px-10">
                            <li>
                                <a href="/admin/sponsor" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">List</a>
                            </li>
                            <li>
                                <a href="/admin/sponsor/create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Create</a>
                            </li>
                        </ul>
                    </ul>
                  </li>
                  <li>
                    <a href="" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2"/>
                        </svg><span class="flex-1 ml-3">Inquiries</span></a>
                  </li>
               </ul>
            </div>
         </aside>

    <div class="p-4 sm:ml-64">
        <div class="">
            @yield('content')
        </div>
    </div>
    <script src="https://kit.fontawesome.com/273827b7bf.js" crossorigin="anonymous"></script>
    </body>
</html>
