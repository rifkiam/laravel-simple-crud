@extends('layouts/main')
@section('content')
    <h1 class="font-bold text-xl">Add Data</h1>
    <div class="container mx-auto mt-4">
        <form action="/addData" method="post">
            @csrf
            <div>
                <label for="nama">Nama</label><br>
                <input type="text" id="nama" name="nama">
            </div>
            <div>
                <label for="jenis_kelamin">Kelamin</label><br>
                {{-- <input type="text" id="jenis_kelamin"> --}}
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="" disabled>Choose one</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div>
                <label for="alamat">Alamat</label><br>
                <input type="text" id="alamat" name="alamat">
            </div>
            <div>
                <label for="nik">NIK</label><br>
                <input type="text" id="nik" name="nik">
            </div>
            <div>
                <label for="nokk">Nomor KK</label><br>
                <input type="text" id="nokk" name="nokk">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection