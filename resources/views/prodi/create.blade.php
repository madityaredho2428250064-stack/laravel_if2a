@extends('main')

@section('title', 'Tambah Program Studi')

@section('content')
    <form action="{{ route('prodi.store') }}" method="post">
        <div class="form-group">
            <label for="nama_fakultas"> Studi</label>
            <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_prodi') }}">
            @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" name="singkatan" class="form-control" value="{{ old('singkatan') }}">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dekan">Kepala Program Studi</label>
            <input type="text" name="kaprodi" class="form-control" value="{{ old('kaprodi') }}">
            @error('kaprodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Program Studi</label>
            <select name="prodi_id" class="form-control">
                <option value="">Pilih Prodi</option>
                @foreach ($prodi as $row)
                    <option value="{{ $row->id }}" {{ old('prodi_id') == $row->id ? 'selected' : '' }}>
                        {{ $row->nama_prodi }}
                    </option>
                @endforeach
            </select>

            @error('prodi_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
@endsection
