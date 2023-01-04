@extends('layouts/main')
@section('content')
    <div class="container mx-auto mt-4">
        <h1 class="text-center text-2xl font-bold">Simple CRUD App, with Laravel</h1>
        {{-- <a href="/warga"></a> --}}
        <div class="grid grid-cols-2 gap-4 mt-8">
            @foreach ($warga as $w)    
                <div class="bg-gray-600 rounded-lg">
                    <div class="px-3 py-2 flex">
                        <div class="">
                            <a class="font-semibold text-lg text-white hover:underline" href="/detail/{{ $w['id'] }}">
                                {{ $w['nama'] }}
                            </a>
                            <h2 class="font-semibold text-white">
                                {{ $w['jenis_kelamin'] }}, {{ $w['alamat'] }}
                            </h2>
                        </div>
                        <div class="ml-auto text-right">
                            <a href="/updateData/{{ $w['id'] }}" class="font-semibold text-lg text-amber-400">
                                Update
                            </a> <br>
                            {{-- <a href="/deleteData/{{ $w['id'] }}" class="font-semibold text-lg text-red-500">
                                Delete
                            </a> --}}
                            <form action="/deleteData/{{ $w['id'] }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="cursor-pointer font-semibold text-lg text-red-500">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection