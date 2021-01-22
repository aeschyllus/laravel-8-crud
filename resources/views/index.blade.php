@extends('layout')

@section('title')
    <h1 class="text-xl tracking-widest uppercase">Product List</h1>
    <a class="border border-blue-500 text-blue-500 px-2 box-border transition duration-200 ease-in focus:outline-none hover:bg-blue-500 hover:text-white" href="{{ route('create') }}">Create Product</a>
@endsection

@section('content')
    @if (Session::has('success'))
        <div class="bg-green-200 px-3 py-3 my-2">
            <p class="text-green-700"><strong>Success!</strong> {{ Session::get('success') }}</p>
        </div>
    @endif

    <div class="px-3 py-2">
        <table class="text-gray-700 w-full">
            <thead>
                <tr class="font-semibold border-b">
                    <td class="pb-1">ID</td>
                    <td class="pb-1">Name</td>
                    <td class="pb-1">Detail</td>
                    <td class="pb-1">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="hover:bg-gray-200 border-b">
                        <td class="py-1">{{ $product->id }}</td>
                        <td class="py-1">{{ $product->name }}</td>
                        <td class="py-1">{{ $product->detail }}</td>
                        <td class="py-1 flex">
                            <a href="{{ route('update', $product) }}" class="focus:outline-none">
                                <svg class="w-4 h-4 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                            <form action="{{ route('delete', $product) }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="focus:outline-none">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="px-3 py-2 mb-2">
        {{ $products->links() }}
    </div>
@endsection
