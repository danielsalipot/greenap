@extends('layouts.app')
@section('content')
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
                <img src="/assets/images/ga-team-2.JPG" class="rounded-[20px] ">
            </div>
        </div>
    </div>

    {{-- <div class="">
        <div class="m-8 py-16">
            <div class="flex content-stretch min-[320px]:m-8 md:my-8 text-center">
                <div class="border flex-grow my-auto border-muesli border"></div>
                <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 font-extrabold text-muesli">Objective</h1>
            </div>
            <div class="grid grid-rows-2">
                <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 lg:gap-8 items-center justify-items-center">
                    <div class="">
                        <img src="/assets/gifs/ga-vision.gif" class="rounded-[20px]">
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
                        <img src="/assets/images/ga.png" class="rounded-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="m-8 py-8">
        {{-- @include('inc.officers-list')
        <div class="flex content-stretch min-[320px]:m-16 md:my-16 text-right">
            <h1 class="lg:text-4xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">Corporate Members</h1>
            <div class="border flex-grow my-auto border-muesli border min-[320px]:invisible lg:visible"></div>
        </div> --}}
        {{-- <div class="bg-transparent py-12 sm:py-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center min-[320px]:grid-cols-2 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    @foreach($sponsor_member as $member)
                        <div class="text-center lg:p-12 min-[320px]:p-8">
                            <img data-popover-target="popover-company-profile-{{$member->id}}" data-popover-placement="bottom" class="cursor-pointer col-span-2 max-h-16 w-full object-contain grayscale lg:col-span-1" src="{{$member->logo}}" alt="Transistor" width="100" height="100">
                            <div class="text-caper font-bold text-lg text-center">{{$member->name}}</div>
                        </div>
                        <div data-popover id="popover-company-profile-{{$member->id}}" role="tooltip" class="border-2 border-muesli  absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
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
            <div class="border flex-grow my-auto border-muesli border min-[320px]:invisible lg:visible"></div>
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
        </div> --}}
        <div class="flex content-stretch min-[320px]:m-8  text-center">
            <h1 class="lg:text-6xl min-[320px]:text-4xl mr-8 font-extrabold text-muesli">GreenAP Officers</h1>
            <div class="border flex-grow my-auto border-muesli border"></div>
        </div>
         <div class="swiper lg:max-w-full min-[320px]:max-w-[400px] md:max-w-[600px]">
            <div class="slide-container-ft">
                <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08303.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Sylvester Shaun D. Seño</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Chairperson</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>Dean, College of Architecture, Adamson University</li>
                                            <li>Principal, Studio DSeno Design Consultancy Services, Inc. </li>
                                            <li>National Treasurer, Philippine Architecture Schools Association (PhilASA) FY2023-2024 </li>
                                            <li>Asst. Secretary. NCCA - National Committee for Architecture and Allied Arts (NCAAA) FY2023-2025</li>
                                            <li>Chairperson, SMEC Cultural Affairs Committee FY2022-2023</li>
                                            <li>Chairperson, Publications Committee, Philippine Institute of Architects (PIA) FY2022-2024</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08488.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Maria Luisa Daya-Garcia</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Imemdiate Past Chairperson</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>Principal Architect, LDG Architects (Daya+Garcia International Corp.)</li>
                                            <li>ASEAN Architect, Expert on Integrated Sustainable Built Environment</li>
                                            <li>Former Climate-Smart Buildings Consultant, United Nations Development Program</li>
                                            <li>Certified Berde Professional (CBP)</li>
                                            <li>International Associate, American Institute of Architects (AIA)</li>
                                            <li>Founding Chairperson, Green Restorative Actions and Sustainable Solutions (GRASS)</li>
                                            <li>Immediate Past Chairperson, UAP Green Architecture Movement</li>
                                            <li>Immediate Past Chairperson, UAP Specialty Council on Climate Change</li>
                                            <li>Past Chairperson FY 2020-2022, UAP Specialty Council on the Natural and Built Environment</li>
                                            <li>Immediate Past Chairperson, UAP Committee on Ecology and the Environment</li>
                                            <li>Director, FY 2008-2009, UAP Manila Maharlika Chapter</li>
                                            <li>Climate Reality Leader, Climate Reality Project</li>
                                            <li>Technical Expert FY2018-2021, Climate Change Commission of the Philippines</li>
                                            <li>Continuing Professional Development (CPD) Evaluator, Professional Regulatory Commission Board of Architecture (PRBOA)</li>
                                            <li>Associate, Philippine Institute of Arbitrators (PIArb)</li>
                                            <li>Technical Working Group, Committee on Reforestation of the Philippine House of Representatives (Philippine Congress)</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08393.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Edgardo L. Mallari</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Deputy Chairperson, GreenAP</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>Principal Architect, Pilgrim Designs</li>
                                            <li>Certified Berde Professional (CBP)</li>
                                            <li>EDGE Expert (Excellence in Design for Greater Efficiencies)</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08683-min.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Jerry U. Chun</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Membership Director, GreenAP</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>Faculty Member, Adamson University Review Instructor</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="\assets\images\DSC08447-min.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Armando T. Tantoco</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Finance Director</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>UAP</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08633-min.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Alfredo Bautista</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Programs Director</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>Principal Architect, AB Bautista Architectural Services (ABB ArchitecturalS)</li>
                                            <li>Director FY2022-2023 and Founding member of the UAP Makati Greenbelt Chapter</li>
                                            <li>Member, Philippine Green Building Initiative (PGBI)</li>
                                            <li>Accredited Design Professional (ADP) for the rating system GREEEN (Geared for Resiliency and Energy Efficiency for the Environment)</li>
                                            <li>EDGE (Excellence in Design for Greater Efficiencies)</li>
                                            <li>Climate Reality Leader of the Climate Reality Project</li>
                                            <li>Member, Technical Working Group, Committee for Architecture on Career Progression and Specialization Program and Credit Accumulation and Transfer System (CPSP-CATS)</li>
                                            <li>Former Executive Director for the ASEAN Association for Planning & Housing (AAPH)</li>
                                            <li>Past President, Rotary Club of Makati Salcedo D3830</li>
                                            <li>Past President, Eagles Chapter of the Business Network International (BNI)</li>
                                            <li>Support and Growth Director, Manila CBD Region of BNI</li>
                                            <li>Member, Australian Passive House Association</li>
                                            <li>Council of Advisers, School of Design and Arts, BS Architecture, De La Salle-College of St. Benilde (DLS-CSB)</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08772.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Carmelito Tatlonghari</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Programs Deputy Director & Green Building Rating Standards Founding Member</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>MMP</li>
                                            <li>LEED-AP</li>
                                            <li>BD+C</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08355-min.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Andy Reformado</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Auditor</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>UAP</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/DSC08727-min.JPG" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">Cedel S. Austria</h5>
                                        <p class="mb-3 font-bold text-muesli italic">Operations and Informations Technology  Director</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>Principal Architect, GAU Architectural Design Studio</li>
                                            <li>Member, National Master Plumbers Association of the Philippines, Inc.</li>
                                            <li>Review Specialist, ATLAS Career Development Center, Inc.</li> 
                                            <li>Chapter Treasurer, United Architects of the Philippines - Diliman Chapter</li>
                                            <li>President, Rotary Club of Metro North Caloocan, District 3800</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
                                <div class="w-full items-center flex">
                                    <div class="lg:ml-[10vw]">
                                        <div class="w-full h-full">
                                            <img src="/assets/images/viz.jpeg" class="rounded-[20px] lg:w-[70%] lg:h-[70%] object-fill">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full items-center flex-row">
                                        <h5 class="mb-2 text-6xl font-bold tracking-tight text-muesli">AR. Rosita Laura Isabel O. Vizmonte</h5>
                                        <p class="mb-3 font-bold text-muesli italic">GreenAP Core Group Member</p>
                                        <ul class="max-w-lg space-y-1 text-muesli text-sm italic list-disc list-inside ">
                                            <li>UAP Diliman Chapter President FY 2023-2024</li>
                                            <li>Architect. A. Viizmonte Construction Corporation</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        </div>
        
        <style>
            .container {
                width: 100%;
            }
            .slide-container {
                margin: 0 30px;
                overflow: hidden;
            }
            .swiper-pagination-bullet {
                background-color: #978853;
            }
        
            @media screen and (max-width: 768px) {
                .swiper-navBtn {
                    display: none;
                }
            }
            .swiper-navBtn {
                color: #ffffff;
                font-weight: 900;
                height: 50px;
                width: 50px;
                transform: translateY(-40%);
                opacity: 40%;
                background: rgba(170, 186, 130, 0.5);
                border-radius: 50%;
            }
            .swiper-navBtn::before,
            .swiper-navBtn::after {
                font-size: 24px;
            }
        </style>
        
        
        
      
       
       
    </div>

@endsection
