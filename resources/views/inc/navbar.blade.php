<nav class="w-full border-gray-200 dark:bg-gray-900 dark:border-gray-700 fixed">
    <div class="max-w-screen-xl px-8 flex flex-wrap items-center justify-between mt-10 mb-10 mx-auto">
        <a href="/home" class="flex items-center">
            <img src="{{asset('assets/images/greenap-logo.png')}}" class="lg:h-14 md:h-8 min-[320px]:h-8" alt="GreenAP Logo" />
        </a>
        <div class="absolute top-10 right-10 grid justify-items-end">
            <nav x-data="{ open: false }">
                <button class="text-muesli w-10 h-10 relative focus:outline-none" @click="open = !open" data-collapse-toggle="navbar-hamburger" type="button" aria-controls="navbar-hamburger" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                    </div>
                </button>
            </nav>

            <div class="hidden" id="navbar-hamburger">
                <ul class="flex text-right flex-col gap-y-3 font-bold mt-4 text-muesli animate-fade-in-right">
                    <li>
                        <a href="/" class="block underline-offset-8 decoration-2 py-2 pl-3 pr-4 rounded hover:text-caper md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/posts" class="block underline-offset-8 decoration-2 py-2 pl-3 pr-4 rounded md:border-0 hover:text-caper md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Posts</a>
                    </li>
                    <li>
                        <a href="/about" class="block underline-offset-8 decoration-2 py-2 pl-3 pr-4 rounded md:border-0 hover:text-caper md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="/contact" class="block underline-offset-8 decoration-2 py-2 pl-3 pr-4 rounded md:border-0 hover:text-caper md:p-0 dark:text-white md:dark:hover:text-caper dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
</nav>


