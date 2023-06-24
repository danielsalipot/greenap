@extends('layouts.app')
@section('content')
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 m-2">
        <div class="w-full block">
            @include('inc.searchbar')
            <div class="m-8">
                <div class="">
                    <img src="/assets/images/img-1.jpg" class="rounded-[20px]">
                </div>
                <p class="font-normal mt-3 text-caper font-hind  text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                </p>
            </div>
        </div>
        <div class="w-full items-center flex">
            <div class="m-8">
                <h1 class="text-6xl text-muesli font-extrabold">Title Here</h1>
                <p class="font-normal mt-3 text-coriander text-md font-hind">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                </p>
                <p class="font-normal mt-3 mb-3 text-coriander text-md font-hind">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                </p>
                <label class="text-sm text-sisal-darker">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</label>
                <br>
                <button class=" mt-3 bg-muesli rounded-none  px-4 py-2 text-white drop-shadow-coriander">Sample Button</button>
            </div>
        </div>
        <div class="w-full items-center flex">
            <div class="m-8 ">
                <div class="">
                    <img src="/assets/images/img-2.jpg" class="rounded-[20px]">
                </div>
                <p class="font-normal font-hind mt-3 text-coriander text-sm text-right">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                </p>
                <div class="flex justify-end mt-16">
                    <label class="text-md text-muesli font-medium">Visitors | 1</label>
                </div>
            </div>
        </div>
    </div>

    <div class="m-8">
        <div class="flex content-stretch min-[320px]:m-8 md:my-16 text-center">
            <h1 class="lg:text-6xl min-[320px]:text-4xl mr-8  font-bold text-muesli">Who We Are</h1>
            <div class="border flex-grow my-auto border-muesli border"></div>
        </div>
        <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 items-center justify-items-center">
            <p class="font-normal font-hind mt-3 text-caper text-md min-[320px]:m-8 ">
                Green Architecture Advocacy Philippines (Green AP) is a civic non-profit organization that is concerned about the environment
                and takes action by promoting sustainable development of the built environment.
                <br><br>
                Our primary mission is to continuously learn and impart green strategies and architecture principles to its members and the
                general public.
            </p>
            <div class="">
                <img src="/assets/images/img-2.jpg" class="rounded-[20px]">
            </div>
        </div>
    </div>

    <div class="bg-black-white">
        <div class="m-8 py-16">
            <div class="flex content-stretch min-[320px]:m-8 md:my-8 text-center">
                <div class="border flex-grow my-auto border-muesli border"></div>
                <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-bold text-muesli">Objective</h1>
            </div>
            <div class="grid grid-rows-2">
                <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 items-center justify-items-center">
                    <div class="">
                        <img src="/assets/images/img-2.jpg" class="rounded-[20px]">
                    </div>
                    <p class="font-medium mt-3 text-muesli text-md min-[320px]:m-8 ">
                        The Green Architecture Advocacy Philippines encourages and promotes the global adoption of sustainable green building and
                        development practices by implementing universally accepted tools and performance criteria.
                        <br><br>
                        As we construct, remodel, and renovate buildings, this initiative encourages the building industry to incorporate and support the use of a generally accepted
                        green rating system. A green architecture mind-set will educate and guide consumers in green building practices.
                    </p>
                </div>
                <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 items-center justify-items-center">
                    <div class="items-center">
                        <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-bold text-muesli">Green Architecture</h1>
                        <p class="font-medium mt-3 text-muesli text-md min-[320px]:m-8 ">
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
            <div class="border flex-grow my-auto border-muesli border"></div>
            <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-bold text-muesli">Company Overview</h1>
        </div>
        <div class="grid grid-rows-1">
            <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 justify-items-end">
                <ul class="font-medium space-y-4 mt-3 text-right text-muesli col-span-1 col-start-2 min-[320px]:m-8 ">
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Arch. Miguel Guerrero</p> Chairman </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Ned Guillermo</p> Deputy Chair </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Arch. Armando Tantoco</p> Secretary / Treasurer </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">Arch. Carmen O. Reyes</p> 2012 Lecture Program Director </li>
                    <li class="text-coriander"><p class="text-muesli text-xl font-bold">L.A Ducut</p> Secretariat </li>
                </ul>
            </div>
            <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 items-center justify-items-center">
                <div class="items-center col-span-1">
                    <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-bold text-muesli">Core Group / Founding Members</h1>
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
    </div>

@endsection

