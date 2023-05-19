@extends('layout.app')
@section('content')
    

@if(session()->has('message'))
<div class="bg-red-700 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-750 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
    <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>
@endif

    <div>
        <h1 style="font-size: 5rem; font-weight: 600; line-height: 1.2;" class="text-center">All Posts</h1>
    </div>

    @if (Auth::check())
        <div class="container sm:grid gap-5 mx-auto py-20 px-5">
            <a href="{{route('blog.create')}}" class="bg-green-700 text-decoration-none  text-gray-100 py-3 px-4 rounded-lg uppercase font-bold place-self-start" >Add New Post</a>
        </div>  
    @endif

    @foreach ($posts as $post)
        <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-20 px-5 border-b border-gray-300">
            <div>
                <img class="rounded" width="500" height="400" src="{{$post->image_path}}" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5">{{$post->title}}</h2>
                <span>
                    By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
                    on <span class="text-gray-500 italic">{{date('d-m-Y', strtotime($post->updated_at))}}</span>
                        <p class="text-l text-gray-700 py-8 leading-6">
                            {{$post->description}}
                        </p>
                        <a href="/blog/{{$post->slug}}" class="bg-gray-700 text-decoration-none text-gray-300 py-3 px-4 rounded-lg font-bold" >Read More</a>
                </span>
            </div>
            
        </div>
        
        @endforeach

        {{-- <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-20 px-5 border-b border-gray-500">
            <div>
                <img class="rounded" src="https://picsum.photos/500/400.webp" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5">How to create a blog with Laravel</h2>
                <span>
                    By: <span class="text-gray-500 italic">Nour D. Homsi</span>
                        <p class="text-l text-gray-700 py-8 leading-6">
                            Keep in mind, some Vapor features, PHP features, and PHP extensions may not work as expected when ruming
                        </p>
                        <a href="/" class="bg-gray-700 text-decoration-none text-gray-300 py-3 px-4 rounded-lg font-bold" >Read More</a>
                </span>
            </div>
            
        </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-20 px-5 border-b border-gray-300">
        <div>
            <img class="rounded" src="https://picsum.photos/500/400.webp" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5">How to create a blog with Laravel</h2>
            <span>
                By: <span class="text-gray-500 italic">Nour D. Homsi</span>
                    <p class="text-l text-gray-700 py-8 leading-6">
                        Keep in mind, some Vapor features, PHP features, and PHP extensions may not work as expected when ruming
                    </p>
                    <a href="/" class="bg-gray-700 text-decoration-none text-gray-300 py-3 px-4 rounded-lg font-bold" >Read More</a>
            </span>
        </div>
        
    </div> --}}
    
        
@endsection