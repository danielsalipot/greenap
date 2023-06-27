@extends('layouts.admin')

@section('content')

<form action="/admin/post" method="POST" enctype="multipart/form-data" >
@csrf
<input type="hidden" name="user_id" value="1">
<div class="flex m-3 bg-sisal rounded-[10px]">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 w-full p-8 gap-8">
        <div class="w-full">
            <label for="title" class="block mb-2 text-black font-bold">Title</label>
            <input type="text" id="title" name="title" class="w-full text-black rounded-[5px] border border-none">
            <label for="body" class="block mb-2 text-black font-bold">Body</label>
            <textarea type="text" id="body" name="description" rows="30" class="w-full text-black rounded-[5px] border border-none"></textarea>
        </div>

        <div class="items-center">
            <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px]">
                <div class="slide-container">
                    <div id="display" class="card-wrapper swiper-wrapper"> </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <label class="block mb-2 text-black font-bold mt-3" for="multiple_files">Upload Images</label>
            <div class="flex items-center gap-x-4">
                <input class="block w-full text-sm text-gray-900 border cursor-pointer rounded-lg bg-black-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" name="images[]" multiple accept="images/*">
                <button type="submit" onclick="reset()" class=" bg-muesli rounded-none  px-4 py-2 text-white text-sm w-1/3 hover:drop-shadow-caper">Reset Images</button>
            </div>
            <button type="submit" class="mt-3 bg-muesli rounded-none  px-4 py-2 text-white hover:drop-shadow-caper w-full">Save</button>
        </div>
    </div>
    </div>
</form>

 <script>

    function reset(){
        const upl = document.querySelector('.file')
        upl.value = ''
    }

    const input = document.getElementById('multiple_files')
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
                        <img class="object-cover" src="${URL.createObjectURL(image)}" alt="" />
                    </div>
                </div>
                `
            })
        output.insertAdjacentHTML("afterbegin", images)
    })
</script>

@endsection
