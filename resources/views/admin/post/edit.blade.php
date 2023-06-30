@extends('layouts.admin')

@section('content')
@if ($errors->count())
    @foreach ($errors as $err)
        {{ $err }}
    @endforeach
@endif

<form action="/admin/post/{{ $post->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="user_id" value="1">
    <div class="flex m-3 bg-sisal rounded-[10px]">
        <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 w-full p-8 gap-y-4 gap-x-8">
            <div class="w-full lg:col-span-2">
                <h1 class="text-2xl font-bold">Edit Post</h1>
            </div>
            <div class="w-full">
                <label for="title" class="block mb-2 text-black font-bold">Title</label>
                <input type="text" name="title" class="w-full text-black rounded-[5px] border border-none" value="{{ $post->title }}"><br>
                <label for="description" class="block my-2 text-black font-bold">Description</label>
                <textarea name="description" rows="5" class="w-full text-black rounded-[5px] border border-none">{{ $post->description }}</textarea><br>
                <label for="body" class="block my-2 text-black font-bold">Body</label>
                <textarea name="body" rows="30" class="w-full text-black rounded-[5px] border border-none">{{ $post->body }}</textarea><br>
            </div>

            <div class="items-center">
                <div class="container swiper lg:max-w-full min-[320px]:max-w-[400px]">
                    <div class="slide-container">
                        <div id="display" class="card-wrapper swiper-wrapper">
                            @foreach ($post->assets as $asset)
                                <div class="card swiper-slide">
                                    <div class="relative">
                                        <img class="object-cover h-[500px] w-full rounded-lg" src="{{ asset($asset->link) }}" alt="" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <label class="block mb-2 text-black font-bold mt-3" for="multiple_files">Upload Images</label>
                <div class="flex items-center gap-x-4">
                    <input type="file" name="images[]" class="block w-full text-sm text-gray-900 border cursor-pointer rounded-lg bg-black-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" multiple accept="images/*"><br>
                    <button type="submit" onclick="reset()" class=" bg-muesli rounded-none  px-4 py-2 text-white text-sm w-1/3 hover:drop-shadow-caper">Reset Images</button>
                </div>

                <div class="bg-white border-b mt-3 dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 rounded-[10px]">
                    <div class="flex items-center">
                        <label class="block mb-2 text-black font-bold m-3">Details</label>
                    </div>
                    <hr class="border-gray-300 flex-grow">

                    <div class="m-8">
                        <label class="block mb-4 text-gray-500 font-bold mt-4 ml-2">
                            <i class="fas fa-info-circle mr-2 text-muesli"></i>Status: <span class="text-black">{{ $post->status ? 'Published' : 'Draft' }}
                            <input type="checkbox" name="status" {{ $post->status ? 'checked' : '' }} value="1"></span>
                        </label>

                        <label class="block mb-4 text-gray-500 font-bold mt-4 ml-2">
                            <i class="fas fa-eye mr-2 text-muesli"></i>Visibility: <span class="text-black">{{ $post->visibility ? 'Public' : 'Hidden' }}
                            <input type="checkbox" name="visibility" {{ $post->visibility ? 'checked' : '' }} value="1"></span>
                        </label>

                        <label class="block mb-4 text-gray-500 font-bold mt-4 ml-2">
                            <i class="fas fa-history mr-2 text-muesli"></i>Revisions: <span class="text-black">{{ $post->revisions }}</span>
                        </label>

                        <label class="block mb-4 text-gray-500 font-bold mt-4 ml-2">
                            <i class="far fa-clock mr-2 text-muesli"></i>Last Updated: <span class="text-black">{{ $post->updated_at }}</span>
                        </label>
                        <div class="flex items-center gap-x-2 justify-center mb-4">
                            <input id="default-checkbox" name="featured" {{ $post->featured ? 'checked' : '' }} value="1"  type="checkbox" class="w-4 h-4 text-caper bg-gray-100 border-muesli border-2 rounded-none focus:ring-muesli dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600">
                            <i class="fas fa-medal text-caper"></i>
                            <label for="default-checkbox" class=" text-sm font-bold text-muesli dark:text-gray-300">Post as Featured</label>
                        </div>
                    </div>
                    <hr class="border-gray-300 mt-3">

                    <div class="flex justify-center my-4">
                        <button type="submit" class="bg-muesli px-4 py-1 text-white hover:drop-shadow-caper">Submit</button>
</form>
                        <form action="/admin/post/{{ $post->id }}" method="post">
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
                            <img class="object-cover h-[500px] w-full rounded-lg" src="${URL.createObjectURL(image)}" alt="" />
                        </div>
                    </div>
                    `
                })
            output.insertAdjacentHTML("afterbegin", images)
        })
    </script>

@endsection
