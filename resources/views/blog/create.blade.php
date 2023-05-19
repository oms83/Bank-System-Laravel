@extends('layout.app')
@section('content')
    



    <div class="container text-center pt-15 pb-5">
        <h1 style="font-size: 5rem; font-weight: 600; line-height: 1.2;">Add New Posts</h1>
    </div>

    <div class="container  pt-15 pb-5">

        <form 
            action="/blog" 
            method="POST"
            enctype="multipart/form-data">
            @csrf
            
            <input 
                type="text"
                name="title"
                placeholder="Title"
                class="w-full h-30 rounded shadow-lg border-b p-15 mb-5" style="font-size: 2rem; font-weight: 600; line-height: 1; height: 60px;"
            >    
            
            <textarea 
                type="text"
                name="description"
                placeholder="Description"
                class="w-full h-60 rounded shadow-lg border-b p-15 mb-5" style="height: 150px"
            ></textarea>
            

            <div class="py-15">
                <label style="font-size: 1rem; font-weight: 600; line-height: 1.2;" class = "bg-green-700 
                hover:bg-green-200
                text-gray-200 hover: text-gray-700 transition duration-100 p-3 rounded-lg
                cursor-pointer
                font-bold uppercase">

                    <span class="bg-green-700 text-gray-100 py-2 rounded">Select an image to upload</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button
                type="submit"
                class = "bg-green-700 hover:bg-green-200
                        text-gray-200 hover: text-gray-700 transition duration-100 p-3 rounded-lg
                        cursor-pointer
                        font-bold uppercase">
                Submit the post
            </button>
        </form>    
    </div>
@endsection 