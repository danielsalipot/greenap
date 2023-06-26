@extends('layouts.admin')

@section('content')

<form action="/admin/post" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="user_id" value="1">
<div class="flex m-3 bg-sisal rounded-[10px]">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 w-full m-7">
        <div class="w-full">
            <label for="title" class="block mb-2 text-black font-bold">Title</label>
            <input type="text" id="title" name="title" class="w-full text-black rounded-[5px] border border-none">
            <label for="body" class="block mb-2 text-black font-bold">Body</label>
            <textarea type="text" id="body" name="description" rows="30" class="w-full text-black rounded-[5px] border border-none"></textarea>
        </div>
        <div class="lg:w-[35vw] sm:w-full items-center lg:ml-[100px]">
            <label for="carousel" class="block mb-2 lg:mt-[80px] text-black font-bold">Images</label>
            <div id="carousel" class="relative w-full" data-carousel="static">
                <div class="relative h-56 w-full overflow-hidden rounded-lg md:h-96" id="display">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/samples/post/image_1.jpg" class="absolute object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/samples/post/image_1.jpg" class="absolute object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <label class="block mb-2 text-black font-bold mt-3" for="multiple_files">Upload Images</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" name="images[]" multiple  accept="images/*">
            <button type="submit" class="mt-3 bg-muesli rounded-none  px-4 py-2 text-white hover:drop-shadow-caper w-full">Save</button>
        </div>
    </div>
</div>
</form> 

{{-- <script>
    var loadFile = function(event) {
        var carousel_image = '';
        for (let i = 0; i < event.target.files.length; i++) {
            carousel_image += 
            `<div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img class="absolute object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="${URL.createObjectURL(event.target.files[i])}" alt="slide ${i + 1}">
            </div>`
        }
        var image_carousel = document.getElementById('display');
        image_carousel.innerHTML = carousel_image;
        
        console.log(carousel_image)
    };
</script> --}}


@endsection
