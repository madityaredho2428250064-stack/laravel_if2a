@extends('main')

@section('title', 'Mahasiswa')

@section('content')
<a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">Tambah Prodi</a>
<table class="table table-bordered ">
    <tr>
        <th>No</th>
        <th>Nama mahasiswa</th>
        <th>NPM</th>
        <th>Foto</th>
        <th>Program Studi</th>
        <th>Aksi</th>

    </tr>


    @foreach ($mahasiswa as $key => $mhs)
    <tr>
      <td>{{  $key + 1 }}</td>
      <td{{ $mhs->nama }}</td>
      <td>{{ $mhs->npm }}</td>
      <td>
        @if($mhs->foto)
            <img src="{{ asset('storage/' .$mhs->foto) }}" alt="Foto" width="100">
            @else
              <p>Foto tidak tersedia</p>
            @endif
      </td>
      <td>{{  $mhs->prodi->nama_prodi ?? '-' }}</td>
      <td>
        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning"
    @endforeach
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama_fakultas ?? '-' }}
        </td>
        </td>
          <a href="{{ route('fakultas.edit',$item->id) }}"
                        class="btn btn-warning btn-rounded">Ubah</a>

                        <form method="POST" action="{{ route('fakultas.destroy',
                         $item->id) }}"
                        class="d-inline">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $item->nama_fakultas }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection


