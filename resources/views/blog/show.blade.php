@extends('layout.app')
@section('content')
    
    @if(session()->has('message'))
        <div class="bg-indigo-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
        </div>
    @endif


    <div class="container text-center pt-15 pb-5">
        <h1 style="font-size: 5rem; font-weight: 600; line-height: 1.2;">{{$post->title}}</h1>
        <div class="mt-2">
                By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
                on <span class="text-gray-500 italic">{{date('d-m-Y', strtotime($post->updated_at))}}</span>
        </div>
    </div>

    <div class="container  pt-15 pb-5">

        <div class="flex h-70">
            <img class="rounded w-full" src="{{$post->image_path}}" alt="">
        </div>

        <div class="text-l text-gray-700 py-8 leading-6">
            {{$post->description}}
        </div>
        
        @if(Auth::user() && Auth::user()->id == $post->user_id)
                <a href="/blog/{{$post->slug}}/edit" 
                    class="bg-gray-700 
                    text-decoration-none 
                    text-gray-300 py-2 pt-2 pb-2 px-3 
                    rounded-lg font-bold" >
                    Edit Post
                </a>
                &nbsp;
                &nbsp;
                
                <form action="/blog/{{$post->slug}}" 
                    method="Post" 
                    class="inline-block">

                        @csrf
                        @method('delete')
                            <button class="bg-red-700 
                            text-decoration-none 
                            text-gray-300 py-2 pt-1 pb-1   px-3 
                            rounded-lg font-bold" >
                            Delete Post        
                    </button>

                </form>
        @endif
    </div>
@endsection 