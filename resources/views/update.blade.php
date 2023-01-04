@extends('layouts/main')
@section('content')
    <h1 class="font-bold text-xl">Update Data</h1>
    <div class="container mx-auto mt-4">
        <form action="/updateData/{{ $item['id'] }}" method="post">
            @method('put')
            @csrf
            <div>
                <label for="nama">Nama</label><br>
                <input type="text" id="nama" name="nama" value="{{ $item['nama'] }}">
            </div>
            <div>
                <label for="jenis_kelamin">Kelamin</label><br>
                {{-- <input type="text" id="jenis_kelamin"> --}}
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="" disabled>Choose one</option>
                    <option value="L" {{ ($item['jenis_kelamin'] === "L") ? 'selected' : ''}}>L</option>
                    <option value="P" {{ ($item['jenis_kelamin'] === "P") ? 'selected' : ''}}>P</option>
                </select>
            </div>
            <div>
                <label for="alamat">Alamat</label><br>
                <input type="text" id="alamat" name="alamat" value="{{ $item['alamat'] }}">
            </div>
            <div>
                <label for="nik">NIK</label><br>
                <input type="text" id="nik" name="nik" value="{{ $item['nik'] }}">
            </div>
            <div>
                <label for="nokk">Nomor KK</label><br>
                <input type="text" id="nokk" name="nokk" value="{{ $item['nokk'] }}">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection