
@extends('layout.app')
@section('content')
    <style>
        .hero-bg-image
        {
            background: url('https://images.unsplash.com/photo-1439792675105-701e6a4ab6f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80') no-repeat center center/cover;
            background-attachment: fixed;
            height: 700px;
        }
    </style>

    <!-- Hero -->
    
    <div class="hero-bg-image d-flex flex-col align-items-center justify-content-center"> 
        <h1 class="text-gray-100 text-5xl uppercase font-bold pd-10"> omer memes </h1>
        <a href="/blog" class="bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-bold uppercase " style=" text-decoration: none">Start Reading</a>
    </div>

    <!-- Posts -->
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 m-10" style="padding-top:15px">
        <div>
            <img class="rounded-lg" src="https://picsum.photos/id/237/200/300" alt="">
        </div>
        <div>
            <h2 class="font-bold text-gray-700">How to be an expert in 2023</h2>
            <p class="font-bold text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis
            </p>
            <p class="font-bold text-gray-500">
                harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            </p>

            <a href="/" class="bg-teal-800 text-decoration-none text-gray-300 py-3 px-4 rounded-lg font-bold" >Read More</a>
        </div>
        
    </div>

    <!-- Blog Categories -->
    <div class="text-center p-15 bg-teal-800 text-gray-100">
        <h2 class="py-4">Blog Categories</h2>
        
        <div class="container mx-auto pt-10 sm: grid grid-cols-4">
            <span class="font-bold py-3">UX Design Thinking</span>
            <span class="font-bold py-3">Programming Languages</span>
            <span class="font-bold py-3">Graphic Design</span>
            <span class="font-bold py-3">Front-End Development</span>
        </div>
    </div>

    <!-- Recent Post -->
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold py-10">Recent Posts</h2>
        <p>
            harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. 
        </p>

    </div>
    

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="d-flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul class="mb: d-flex text-xs gap-2">
                    <li><a class="bg-yellow-200  text-yellow-700 pt-4 py-4 rounded p-2" href="/">PHP</a></li>
                    <li><a class="bg-yellow-200  text-yellow-700 pt-4 py-4 rounded p-2" href="/">C++</a></li>
                    <li><a class="bg-yellow-200  text-yellow-700 pt-4 py-4 rounded p-2" href="/">C#</a></li>
                    <li><a class="bg-yellow-200  text-yellow-700 pt-4 py-4 rounded p-2" href="/">Python</a></li>
                </ul>
                <h6 class="custom-class py-5 lh-base mx-10 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis
                </h6>

                <a href="/" class=" mx-10 bg-transparent my-4 border-2 inline-block text-decoration-none text-gray-100 py-3 px-4 rounded-lg font-bold hover:text-yellow-300" >Read More</a>
            </div>

        </div>
        <div class="d-flex" >
            <img class="object-cover" style="width:500;"  src="https://picsum.photos/500/300.webp" alt="">
        </div>
    </div>

@endsection

