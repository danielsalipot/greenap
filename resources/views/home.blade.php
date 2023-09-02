@extends('layouts.app')
@section('content')
    <div class="bg flex items-center justify-center">
        <div class="absolute bottom-12 right-12 grid justify-items-end">
            <img src="{{asset('assets/images/greenap-logo-3d.png')}}" class="animate-fade-in-right lg:h-36 md:h-20 min-[320px]:h-20" alt="GreenAP Logo" />
            <h1 class="text-muesli text-right text-xl font-bold animate-fade-in-right min-[320px]:ml-4 min-[320px]:mt-4">The Philippines’ longest-running multidisciplinary Green Architecture organization.</h1>
        </div>
    </div>
    @include('inc.searchbar')
    @include('inc.featured-posts-carousel')
    @include('inc.more-posts-carousel')

    <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
        <h1 class="lg:text-6xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Who We Are</h1>
        <div class="border flex-grow my-auto border-muesli"></div>
    </div>
    <div class="grid p-4 min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 items-center justify-items-center">
        <p class="font-normal font-open-sans mt-3 text-muesli lg:text-lg min-[320px]:m-8 min-[390px]:mx-4 ">
            Green Architecture Advocacy Philippines (Green AP) is a civic non-profit organization that is concerned about the environment
            and takes action by promoting sustainable development of the built environment.
            <br><br>
            Our primary mission is to continuously learn and impart green strategies and architecture principles to its members and the
            general public.
        </p>
        <div class="">
            <img src="/assets/images/ga-team-2.JPG" class="rounded-[20px] ">
        </div>
    </div>

    <div class="flex content-stretch min-[320px]:m-8 md:my-8 text-center">
        <div class="border flex-grow my-auto border-muesli"></div>
        <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Objective</h1>
    </div>
    <div class="grid grid-rows-2">
        <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 items-center justify-items-center">
            <div class="">
                <img src="/assets/gifs/ga-vision.gif" class="rounded-[20px]">
            </div>
            <p class="font-normal font-open-sans mt-3 lg:text-lg text-muesli text-md min-[320px]:m-4 ">
                The Green Architecture Advocacy Philippines encourages and promotes the global adoption of sustainable green building and
                development practices by implementing universally accepted tools and performance criteria.
                <br><br>
                As we construct, remodel, and renovate buildings, this initiative encourages the building industry to incorporate and support the use of a generally accepted
                green rating system. A green architecture mind-set will educate and guide consumers in green building practices.
            </p>
        </div>
        <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 items-center justify-items-center">
            <div class="items-center">
                <h1 class="lg:text-6xl min-[320px]:text-4xl font-extrabold text-muesli">Green Architecture</h1>
                <p class="font-normal font-open-sans mt-3  lg:text-lg text-muesli text-md min-[320px]:m-4 ">
                    Green architecture involves a whole-building approach to sustainability by recognizing performance in human and
                    environmental health. These involve sustainable site selection and development, energy efficiency, water conservation, clean air, use of low-impact materials, renewable resource, and preserving indoor air quality.                        </p>
            </div>
            <div class="">
                <img src="/assets/images/ga.png" class="rounded-[20px]">
            </div>
        </div>
    </div>

        @include('inc.officers-list')

        <div class="flex content-stretch min-[320px]:m-16 md:my-16 text-right">
            <h1 class="lg:text-4xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Corporate Members</h1>
            <div class="border flex-grow my-auto border-muesli min-[320px]:invisible lg:visible"></div>
        </div>
        <div class="py-12 sm:py-8">
            <div class="max-w-7xl px-6 lg:px-8">
                <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    @foreach($sponsor_member as $member)
                        <div class="text-center lg:p-12 min-[320px]:p-8">
                            <img data-popover-target="popover-company-profile-{{$member->id}}" data-popover-placement="bottom" class="cursor-pointer col-span-2 max-h-16 w-full object-contain grayscale lg:col-span-1" src="{{$member->logo}}" alt="Transistor" width="100" height="100">
                            <div class="text-caper font-bold text-lg text-center">{{$member->name}}</div>
                        </div>
                        <div data-popover id="popover-company-profile-{{$member->id}}" role="tooltip" class="border-2 border-muesli absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                            <div class="p-3">
                                <div class="flex">
                                    <div class="mr-3 shrink-0">
                                        <a href="#" class="block p-2 bg-gray-100 rounded-lg dark:bg-gray-700">
                                            <img class="w-8 h-8 rounded-full" src="{{$member->logo}}" alt="Flowbite logo">
                                        </a>
                                    </div>
                                    <div>
                                        <p class="mb-1 text-base font-semibold leading-none text-gray-900 dark:text-white">
                                            <a href="#" class="font-bold text-caper">{{$member->name}}</a>
                                        </p>
                                        <p class=" text-sm text-coriander">{{$member->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex content-stretch min-[320px]:m-16 md:my-16 text-right">
            <div class="border flex-grow my-auto border-muesli min-[320px]:invisible lg:visible"></div>
            <h1 class="lg:text-4xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Industry Partners</h1>
        </div>
        <div class="bg-transparent py-12 sm:py-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    @foreach($sponsor_partner as $partner)
                        <div class="text-center lg:p-12 min-[320px]:p-8">
                            <img data-popover-target="popover-company-profile-{{$partner->id}}" data-popover-placement="bottom" class="cursor-pointer col-span-2 max-h-16 w-full object-contain grayscale lg:col-span-1" src="{{$partner->logo}}" alt="Transistor" width="100" height="100">
                            <div class="text-caper font-bold text-lg text-center">{{$partner->name}}</div>
                        </div>
                        <div data-popover id="popover-company-profile-{{$partner->id}}" role="tooltip" class="border-2 border-muesli  absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                            <div class="p-3">
                                <div class="flex">
                                    <div class="mr-3 shrink-0">
                                        <a href="#" class="block p-2 bg-gray-100 rounded-lg dark:bg-gray-700">
                                            <img class="w-8 h-8 rounded-full" src="{{$partner->logo}}" alt="Flowbite logo">
                                        </a>
                                    </div>
                                    <div>
                                        <p class="mb-1 text-base font-semibold leading-none text-gray-900 dark:text-white">
                                            <a href="#" class="font-bold text-caper">{{$partner->name}}</a>
                                        </p>
                                        <p class=" text-sm text-coriander">{{$partner->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            const bg = document.querySelector(".bg")

            document.addEventListener('DOMContentLoaded', (e)=>{
                setTimeout(() => {
                    bg.classList.add('display-none')
                }, 4000)
            })
        </script>
@endsection



