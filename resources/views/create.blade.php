@extends('layout')

@section('title')
    <h1 class="text-xl tracking-widest uppercase">Create a Product</h1>
@endsection

@section('content')
    @if ($errors->any())
        <div class="bg-red-200 px-3 py-3 mb-3">
            <p class="text-red-700"><strong>Whoops!</strong> There were some problems with your input.</p>
            <ul class="text-red-700 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('create') }}" method="POST">
        @csrf

        {{-- Name --}}
        <div class="px-3 py-2">
            <label for="name">Name</label>
            <input type="text" name="name" class="border-b border-gray-500 focus:outline-none w-full px-1 transition duration-200 ease-in focus:border-purple-600 focus:text-black" autocomplete="off">
        </div>

        {{-- Detail --}}
        <div class="px-3 py-2">
            <label for="detail">Detail</label>
            <input type="text" name="detail" class="border-b border-gray-500 focus:outline-none w-full px-1 transition duration-200 ease-in focus:border-purple-600 focus:text-black" autocomplete="off">
          </div>

        {{-- Buttons --}}
        {{-- <div class="flex mt-3">
            <a class="block text-center text-lg bg-red-400 text-gray-100 rounded-lg w-1/2 mr-2 py-3" href="{{ route('index') }}">Back to Product List</a>
            <button class="text-lg bg-green-400 text-gray-100 rounded-lg w-1/2 ml-2 py-3">Create Product</button>
        </div> --}}
        <div class="px-3 py-3 flex">
            <a class="block text-center w-1/2 border border-red-400 text-red-600 mr-1 py-1 transition duration-200 ease-in hover:bg-red-400 hover:text-white focus:outline-none" href="{{ route('index') }}">Back to Product List</a>
            <button class="w-1/2 border border-green-600 text-green-600 ml-1 py-1 transition duration-200 ease-in hover:bg-green-500 hover:text-white focus:outline-none">Create Product</button>
        </div>
    </form>
@endsection
