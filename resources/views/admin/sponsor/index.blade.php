@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1  bg-sisal rounded-[10px]">

    <div class="flex mt-5 ml-10">
        <h1 class="text-2xl font-bold">Partners</h1>
    </div>

    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>

    <div class="flex m-3 lg:w-[40%] lg:ml-9 md:w-[75%] md:ml-9">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Title on this page" oninput="search()">
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5 bg-black-white">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Logo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tier
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Edited At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sponsors as $sponsor)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <img src="{{ asset($sponsor->logo) }}" style="width: 50px; height:50px;">    
                    </td>
                    <td class="px-6 py-4">
                        <p id="name">{{$sponsor->name}}</p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="w-[250px] whitespace-nowrap text-ellipsis overflow-hidden"> {{$sponsor->description}}
                        </td></p>
                    <td class="px-6 py-4">
                        <p>{!!($sponsor->tier=='partner')? '<span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Industry Partner</span>' : '<span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-indigo-900 dark:text-indigo-300">Corporate Member</span>'!!}</p>
                    </td>
                    <td class="px-6 py-4">
                        {{Carbon\Carbon::parse($sponsor->updated_at)->diffForHumans()}}
                    </td>
                    <td class="px-6 py-4">
                        {{Carbon\Carbon::parse($sponsor->created_at)->diffForHumans()}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin/sponsor/{{$sponsor->id}}/edit" class="bg-muesli px-3 py-1 text-white hover:drop-shadow-caper w-full font-medium">Edit</a>
                    </td>
                     </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<script>
    function search(){
        const searchInput=document.querySelector('#search')
        const filter = searchInput.value.toLowerCase()
        const listItems = document.querySelectorAll('#name')

        listItems.forEach((item)=>{
            let text = item.textContent;
            if(text.toLowerCase().includes(filter.toLowerCase())){
                item.parentElement.parentElement.style.display = '';
            }
            else{
                item.parentElement.parentElement.style.display='none'
            }   
        });
    }
</script>
   
@endsection

{{-- @extends('layouts.admin')

@section('content')
    @foreach ($sponsors as $sponsor)
        {{ $sponsor->name }}
        <img src="{{ asset($sponsor->logo) }}" style="width: 50px; height:50px;">
    @endforeach
@endsection --}}
