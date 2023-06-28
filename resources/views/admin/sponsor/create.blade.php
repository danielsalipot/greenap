@extends('layouts.admin')

@section('content')
<form action="/admin/sponsor" method="post" enctype="multipart/form-data">
@csrf
<div class="flex m-3 bg-sisal rounded-[10px]">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 w-full p-8 gap-8">
        <div class="w-full">
        
            <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px]">
                <div class="slide-container">
                    <div id="display" class="card-wrapper swiper-wrapper"> </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <label class="block mb-2 text-black font-bold mt-3" for="multiple_files">Upload Logo</label>
            <div class="flex items-center gap-x-4">
                <input class="block w-full text-sm text-gray-900 border cursor-pointer rounded-lg bg-black-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file" type="file" name="logo" accept="images/*">
                <button type="submit" onclick="reset()" class=" bg-muesli rounded-none px-4 py-2 text-white text-sm w-1/3 hover:drop-shadow-caper">Reset Image</button>
            </div>
            <button type="submit" class="mt-3 bg-muesli rounded-none  px-4 py-2 text-white hover:drop-shadow-caper w-full">Submit</button>
        </div>

        <div class="items-center">
            <label for="name" class="block mb-2 text-black font-bold">Company Name</label>
            <input type="text" name="name" class="w-full text-black rounded-[5px] border border-none">
            <label for="description" class="block my-2 text-black font-bold">Description</label>
            <textarea name="description" rows="10" class="w-full text-black rounded-[5px] border border-none"></textarea>
            <select name="tier">
                <option value="partner">Industry Partner</option>
                <option value="member">Corporate Member</option>
            </select>
        </div>
    </div>
</div>
</form>

 <script>

    function reset(){
        const upl = document.querySelector('.file')
        upl.value = ''
    }

    const input = document.getElementById('file')
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

{{-- @extends('layouts.admin')

@section('content')
<form action="/admin/sponsor" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <textarea name="description"></textarea>
    <select name="tier">
        <option value="partner">Industry Partner</option>
        <option value="member">Corporate Member</option>
    </select>
    <input type="file" name="logo" accept="images/*">
    <button type="submit">submit</button>
</form>
@endsection --}}