@extends('layouts.app')
@section('content')

    @include('inc.searchbar')
    @include('inc.featured-posts-carousel')

    @include('inc.more-posts-carousel')
    <div class="m-8">
        <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
            <h1 class="lg:text-6xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Who We Are</h1>
            <div class="border flex-grow my-auto border-muesli border"></div>
        </div>
        <div class="grid p-4 min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 items-center justify-items-center">
            <p class="font-normal font-hind mt-3 text-muesli lg:text-lg min-[320px]:m-8 min-[390px]:mx-4 ">
                Green Architecture Advocacy Philippines (Green AP) is a civic non-profit organization that is concerned about the environment
                and takes action by promoting sustainable development of the built environment.
                <br><br>
                Our primary mission is to continuously learn and impart green strategies and architecture principles to its members and the
                general public.
            </p>
            <div class="">
                <img src="/assets/images/img-2.jpg" class="rounded-[20px] ">
            </div>
        </div>
    </div>

    <div class="">
        <div class="m-8 py-16">
            <div class="flex content-stretch min-[320px]:m-8 md:my-8 text-center">
                <div class="border flex-grow my-auto border-muesli border"></div>
                <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Objective</h1>
            </div>
            <div class="grid grid-rows-2">
                <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 items-center justify-items-center">
                    <div class="">
                        <img src="/assets/images/img-2.jpg" class="rounded-[20px]">
                    </div>
                    <p class="font-medium mt-3 lg:text-lg text-muesli text-md min-[320px]:m-4 ">
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
                        <p class="font-medium mt-3  lg:text-lg text-muesli text-md min-[320px]:m-4 ">
                            Green architecture involves a whole-building approach to sustainability by recognizing performance in human and
                            environmental health. These involve sustainable site selection and development, energy efficiency, water conservation, clean air, use of low-impact materials, renewable resource, and preserving indoor air quality.                        </p>
                    </div>
                    <div class="">
                        <img src="/assets/images/img-2.jpg" class="rounded-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-8 py-8">
        <div class="flex content-stretch min-[320px]:m-16 md:my-16 text-right">
            <div class="border flex-grow my-auto border-muesli border min-[320px]:invisible lg:visible"></div>
            <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Company Overview</h1>
        </div>
        <div class="grid grid-rows-1">
            <div class="mx-auto grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4">       
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/DSC08303.JPG">
                        </div>
                        <p class="text-muesli text-xl font-bold">Sylvester Shaun D. Seño</p>
                        <p class="text-xs font-light italic">MArch-CTM, FRIA, Assoc AIA, ICOMOS, PGBI</p>
                        Chairman
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/DSC08393.JPG">
                        </div>
                        <p class="text-muesli text-xl font-bold">Edgardo L. Mallari</p>
                        <p class="text-xs font-light italic">UAP,CBP</p>
                        Deputy Chair
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Armando T. Tantoco</p>
                        <p class="text-xs font-light italic">UAP</p>
                        Finance Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Alfredo Bautista</p>
                        <p class="text-xs font-light italic">UAP, Greeen ADP, EDGE</p>
                        Programs Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/DSC08772.JPG">
                        </div>
                        <p class="text-muesli text-xl font-bold">Carmelito Tatlonghari</p>
                        <p class="text-xs font-light italic">MMP, LEED-AP, BD+C</p>
                        Programs Deputy Director & Green Building Rating Standards Founding Member
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Andy Reformado</p>
                        <p class="text-xs font-light italic">UAP</p>
                        Auditor
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Rex S. Chua Tak</p>
                        <p class="text-xs font-light italic">UAP</p>
                        Logistics Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Atty. Dulce Punzalan</p>
                        Special Projects Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Cedel S. Austria</p>
                        <p class="text-xs font-light italic">UAP, RMP</p>
                        Operations and Informations Technology  Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Jerry Chun</p>
                        <p class="text-xs font-light italic">UAP, RMP, FRIA</p>
                        Membership Director
                    </div>
                </div>
            </div>                  
            <div class="grid p-4 min-[320px]:grid-cols-2 lg:grid-cols-3 items-center justify-items-center">
                <div class="lg:col-span-2">
                  <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Youth Advocates for Survivability, Self-Sufficiency and Sustainability (YASSS)</h1>
                </div>
            </div>
            <div class="mx-auto grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4">       
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Toni Dominique B.Madulid</p>
                        Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Aristotle Basa</p>
                        <p class="text-xs font-light italic">UAP, PIA, Int'l Assoc AIA</p>
                        Continuing Professional Development Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Lorenzo M. Estoye</p>
                        <p class="text-xs font-light italic">UAP</p>
                        Mentorship Director
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Edgardo V. Reformado</p>
                        <p class="text-xs font-light italic">FUAP</p>
                        Emeritus Chairperson / Founding Chairperson / Council of Masters
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Mike Peña</p>
                        <p class="text-xs font-light italic">UAP</p>
                        Business Relations Director / Founding Member / Council of Masters
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/Blank-Profile.jpg">
                        </div>
                        <p class="text-muesli text-xl font-bold">Leo Pariñas</p>
                        <p class="text-xs font-light italic">UAP, Int'l Assoc AIA</p>
                        Business Relations
                    </div>
                </div>
                <div class="text-center lg:p-12 min-[320px]:p-8">
                    <div class="flex flex-col items-center text-coriander">
                        <div style="width: 250px; height: 250px; margin-bottom: 5%; border-radius: 50%; overflow: hidden;">
                            <img src="/assets/images/DSC08488.JPG">
                        </div>
                        <p class="text-muesli text-xl font-bold">Maria Luisa Daya-Garcia</p>
                        <p class="text-xs font-light italic">UAP, Intl Assoc AIA, AA, CBP, ASSURE, PIArb Assoc</p>
                        Immediate Past Chairperson
                    </div>
                </div>
            </div>  
        </div>
        <div class="flex content-stretch min-[320px]:m-16 md:my-16 text-right">
            <h1 class="lg:text-4xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Corporate Members</h1>
            <div class="border flex-grow my-auto border-muesli border min-[320px]:invisible lg:visible"></div>
        </div>
        <div class="bg-white py-12 sm:py-8">
            <div class="max-w-7xl px-6 lg:px-8">
                <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    @foreach($sponsor_member as $member)
                        <div class="text-center bg-black-white/20 lg:p-12 min-[320px]:p-8">
                            <img class="col-span-2 max-h-12 w-full object-contain grayscale lg:col-span-1" src="{{$member->logo}}" alt="Transistor" width="100" height="100">
                            <div class="text-caper font-bold text-xl line-clamp-1">{{$member->name}}</div>
                            <p class="text-sm font-normal text-muesli line-clamp-2">{{$member->description}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    <div class="flex content-stretch min-[320px]:m-16 md:my-16 text-right">
        <div class="border flex-grow my-auto border-muesli border min-[320px]:invisible lg:visible"></div>
        <h1 class="lg:text-4xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Industry Partners</h1>
    </div>
    <div class="bg-white py-12 sm:py-8">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                @foreach($sponsor_partner as $partner)
                    <div class="text-center lg:p-12 min-[320px]:p-8">
                        <img data-popover-target="popover-company-profile-{{$partner->id}}" class="col-span-2 max-h-16 w-full object-contain grayscale lg:col-span-1" src="{{$partner->logo}}" alt="Transistor" width="100" height="100">
                        <div class="text-caper font-bold text-lg text-center">{{$partner->name}}</div>
                    </div>
                    <div data-popover id="popover-company-profile-{{$partner->id}}" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
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
                        <div data-popper-arrow></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection