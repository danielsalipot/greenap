@extends('layouts.app')
@section('content')
    @include('inc.searchbar')

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
            <div class="grid p-4 min-[320px]:grid-cols-1 lg:grid-cols-2 justify-items-end">
                <ul class="font-medium space-y-4 mt-3 text-right text-muesli col-span-1 col-start-2 min-[320px]:m-8 ">
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Arch. Miguel Guerrero</p> Chairman </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Ned Guillermo</p> Deputy Chair </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Arch. Armando Tantoco</p> Secretary / Treasurer </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Arch. Carmen O. Reyes</p> 2012 Lecture Program Director </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">L.A Ducut</p> Secretariat </li>
                </ul>
            </div>
            <div class="grid p-4 min-[320px]:grid-cols-1 lg:grid-cols-2 items-center justify-items-center">
                <div class="items-center col-span-1">
                    <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Core Group / Founding Members</h1>
                    <ul class="font-medium space-y-4 mt-3  text-muesli col-span-1 col-start-2 min-[320px]:m-8 ">
                        <li class="text-muesli text-xl font-bold">Ar. Gerardo Baniqued, uap </li>
                        <li class="text-muesli text-xl font-bold">Ar. Luisa Daya-Garcia, uap </li>
                        <li class="text-muesli text-xl font-bold">Ar. Andrea Karla M. Dorotan, uap </li>
                        <li class="text-muesli text-xl font-bold">Ar. Lemuel K. Goltiao, uap </li>
                        <li class="text-coriander"><p class="text-muesli text-xl font-bold">Ar. Miguel Guerrero, fuap</p> APEC Architect </li>
                        <li class="text-muesli text-xl font-bold">Ar. Jose F. Ignacio, uap </li>
                        <li class="text-muesli text-xl font-bold">Ar. Mary Ravelyn Javier-Busmente, uap </li>
                        <li class="text-muesli text-xl font-bold">Arch. Robert M. Mirafuente, uap </li>
                        <li class="text-muesli text-xl font-bold">Ar. Michael T. Peña, fuap </li>
                        <li class="text-coriander"><p class="text-muesli text-xl font-bold">Ar. Edgar Reformado, fuap </p> Past Chairman</li>
                        <li class="text-coriander"><p class="text-muesli text-xl font-bold">Ar. Raymond L. Sih, uap </p> LEED-APMr </li>
                        <li class="text-coriander"><p class="text-muesli text-xl font-bold">Carmelito A. Tatlonghari </p> LEED-AP</li>
                        <li class="text-coriander"><p class="text-muesli text-xl font-bold">Ms. Maya Villaluz </p> World Bank</li>
                    </ul>
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
                        <div class="text-center bg-black-white/20 lg:p-12 min-[320px]:p-8">
                            <img class="col-span-2 max-h-12 w-full object-contain grayscale lg:col-span-1" src="{{$partner->logo}}" alt="Transistor" width="100" height="100">
                            <div class="text-caper font-bold text-xl line-clamp-1">{{$partner->name}}</div>
                            <p class="text-sm font-normal text-muesli line-clamp-2">{{$partner->description}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
