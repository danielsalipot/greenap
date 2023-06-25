@extends('layouts.app')
@section('content')
    <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 mx-2 mt-2">
        @include('inc.searchbar')
    </div>
    <div class="mx-8">
        <div class="flex content-stretch min-[320px]:mx-4 text-center">
            <div class="border flex-grow my-auto border-muesli border"></div>
            <h1 class="lg:text-6xl min-[320px]:text-4xl ml-8 text-muesli font-extrabold">Posts</h1>
        </div>
        <div class="grid p-8 min-[320px]:grid-cols-1 lg:grid-cols-2 items-center justify-items-center">
            <div class="">
                <img src="/assets/images/img-2.jpg" class="rounded-[20px]">
            </div>
            <div class="w-full items-center flex">
                <div class="m-8">
                    <h1 class="text-6xl text-muesli font-extrabold">Title Here</h1>
                    <p class="font-medium mt-3 text-coriander text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                    </p>
                    <p class="font-medium mt-3 mb-3 text-coriander text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque culpa cum dolorum hic impedit, in incidunt itaque iusto minus modi molestiae nulla quas reiciendis tempora totam ullam vitae voluptatem!
                    </p>
                    <label class="text-sm text-sisal-darker">{{\Carbon\Carbon::now()->toDayDateTimeString()}}</label>
                    <button class=" mt-3 bg-muesli rounded-none  px-4 py-2 text-white drop-shadow-coriander">Sample Button</button>
                </div>
            </div>
        </div>
        <div class="m-8">
            <div class="flex content-stretch min-[320px]:m-4 md:my-4">
                <div class="border flex-grow my-auto border-muesli border"></div>
                <h1 class="lg:text-2xl text-lg font-bold text-muesli mx-4">More Posts</h1>
                <div class="border flex-grow my-auto border-muesli border"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-8">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="/assets/images/img-2.jpg" class="rounded-t-lg object-cover">
                    <div class="p-6">
                        <p class="font-medium text-coriander text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem vel nibh posuere posuere. 
                            Integer auctor lacus vel odio tincidunt consectetur. Nullam id metus in tortor mollis feugiat. 
                            In hac habitasse platea dictumst.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <img src="/assets/images/img-2.jpg" class="rounded-t-lg object-cover">
                    <div class="p-6">
                        <p class="font-medium text-coriander text-md">
                            Sed consequat felis in finibus tempor. Curabitur aliquet neque a dolor interdum, vel faucibus leo iaculis. 
                            Fusce ut sagittis elit. Ut lobortis luctus lacus, vel malesuada massa ullamcorper nec. Nullam eget malesuada nulla.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md">
                    <img src="/assets/images/img-2.jpg" class="rounded-t-lg object-cover">
                    <div class="p-6">
                        <p class="font-medium text-coriander text-md">
                            Nunc lacinia dignissim congue. Mauris ut varius dui. Aenean sollicitudin luctus mauris id scelerisque. 
                            Nam facilisis risus a tristique efficitur. Proin fermentum, odio ac malesuada vestibulum, tellus nulla ullamcorper libero, 
                            eu laoreet velit leo ut urna.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection