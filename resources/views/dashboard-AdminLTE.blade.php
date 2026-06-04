xAxis: {
    categories: [
        @foreach ($grafikmhs as $data)
            '{{ $data->nama_prodi }}',  // string
        @endforeach
    ]
},
series: [{
    name: 'Mahasiswa',
    data: [
        @foreach ($grafikmhs as $data)
            {{ $data->jumlah_mhs }},    // angka/integer
        @endforeach
    ]
}]
