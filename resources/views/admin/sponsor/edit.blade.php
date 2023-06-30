@extends('layouts.admin')

@section('content')

<form action="/admin/sponsor/{{ $sponsor->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input type="hidden" name="user_id" value="1">
    <div class="flex m-3 bg-sisal rounded-[10px]">
        <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 w-full p-8 gap-y-4 gap-x-8">
            <div class="w-full lg:col-span-2">
                <h1 class="text-2xl font-bold">Edit Sponsor</h1>
            </div>
            <div class="w-full">
                <div class="flex">
                    <div class="w-1/2">
                        <label for="name" class="block mb-2 text-black font-bold">Sponsor Name</label>
                        <input type="text" name="name" class="w-full text-black rounded-[5px] border border-none" value="{{ $sponsor->name }}"><br>
                    </div>
                    <div class="w-1/2 pl-4">
                        <label for="tier" class="block mb-2 text-black font-bold">Tier</label>
                        <select name="tier" class="w-full text-black rounded-[5px] border border-none">
                            <option value="partner" {{ $sponsor->tier == 'partner' ? 'selected' : '' }}>Industry Partner</option>
                            <option value="member" {{ $sponsor->tier == 'member' ? 'selected' : '' }}>Corporate Member</option>
                        </select><br>
                    </div>
                </div>
                <label for="description" class="block my-2 text-black font-bold">Description</label>
                <textarea name="description" rows="20" class="w-full text-black rounded-[5px] border border-none">{{ $sponsor->description }}</textarea><br>
            </div>

            <div class="items-center">
                <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px]">
                    <div id="display" class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="relative">
                                <img class="object-cover h-[500px] w-full rounded-lg" src="{{ asset($sponsor->logo) }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <label class="block mb-2 text-black font-bold mt-3" for="single_file">Upload Logo</label>
                <div class="flex items-center gap-x-4">
                    <input type="file" id="single_file" name="logo" class="block w-full text-sm text-gray-900 border cursor-pointer rounded-lg bg-black-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="images/*">
                    <button type="submit" onclick="reset()" class=" bg-muesli rounded-none  px-4 py-2 text-white text-sm w-1/3 hover:drop-shadow-caper">Reset Image</button>
                </div>

                <div class="bg-white border-b mt-3 dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 rounded-[10px]">
                    <div class="flex items-center">
                        <label class="block mb-2 text-black font-bold m-3">Details</label>
                    </div>
                    <hr class="border-gray-300 flex-grow">

                    <div class="m-8">
                        <label class="block mb-4 text-gray-500 font-bold mt-4 ml-2">
                            <i class="fas fa-history mr-2 text-muesli"></i>Created at: <span class="text-black">{{ $sponsor->created_at }}</span>
                        </label>

                        <label class="block mb-4 text-gray-500 font-bold mt-4 ml-2">
                            <i class="far fa-clock mr-2 text-muesli"></i>Last Updated: <span class="text-black">{{ $sponsor->updated_at }}</span>
                        </label>
                    </div>
                    <hr class="border-gray-300 mt-3">

                    <div class="flex justify-center my-4">
                        <button type="submit" class="bg-muesli px-4 py-1 text-white hover:drop-shadow-caper">Submit</button>
</form>
                        <form action="/admin/sponsor/{{ $sponsor->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-white border-2 border-muesli px-4 py-1 text-black hover:drop-shadow-caper ml-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function reset(){
            const upl = document.querySelector('.file')
            upl.value = ''
        }
        
        const input = document.getElementById('single_file')
        let imagesArr = []

        input.addEventListener("change", (event) => {
            const output = document.getElementById('display')
            imagesArr = []
            for (let i = 0; i < input.files.length; i++) {
                imagesArr.push(input.files[i])
            }

            let images = ""
            imagesArr.forEach(image => {
                images +=
                    `
                    <div class="card swiper-slide">
                        <div class="relative">
                            <img class="object-cover h-[500px] w-full rounded-lg" src="${URL.createObjectURL(image)}" alt="" />
                        </div>
                    </div>
                    `
                })
            output.insertAdjacentHTML("afterbegin", images)
        })
    </script>

@endsection
