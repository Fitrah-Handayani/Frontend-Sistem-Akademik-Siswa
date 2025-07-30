@extends('layouts.app')

@section('title', 'Siswa - Kehadiran')

@section('content')
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-1/5 bg-[#1D1C5A] text-white flex flex-col py-6">
        <div class="text-2xl font-bold px-6 mb-8">MyAkademisReport</div>
        <nav class="flex flex-col gap-2">
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Pengumuman</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Nilai</a>
            <a href="#" class="bg-[#3081D0] px-6 py-2 font-medium">Kehadiran</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Jadwal Pelajaran</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-100">
        <!-- Header -->
        <header class="flex justify-between items-center bg-black text-white px-6 py-4">
            <h1 class="text-xl font-semibold">Siswa - Kehadiran</h1>
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/user.png') }}" alt="User" class="w-8 h-8 rounded-full" />
                <span>Fitrah Handayani</span>
            </div>
        </header>

        <!-- Content -->
        <section class="p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Kehadiran Siswa</h2>

            <!-- Greeting -->
            <div class="bg-green-100 text-green-900 p-4 rounded-lg flex items-center gap-2 mb-6">
                <i class="fas fa-bell"></i>
                <span>Selamat datang, Fitrah Handayani. Tetap semangat hadir setiap hari!</span>
            </div>

            <!-- Statistik Kehadiran -->
            <div class="grid grid-cols-4 gap-6 mb-8">
                <div class="bg-blue-600 text-white p-6 rounded-xl text-center">
                    <p>Total Hadir</p>
                    <h3 class="text-4xl font-bold">120</h3>
                </div>
                <div class="bg-yellow-400 text-white p-6 rounded-xl text-center">
                    <p>Izin</p>
                    <h3 class="text-4xl font-bold">5</h3>
                </div>
                <div class="bg-purple-500 text-white p-6 rounded-xl text-center">
                    <p>Sakit</p>
                    <h3 class="text-4xl font-bold">3</h3>
                </div>
                <div class="bg-red-500 text-white p-6 rounded-xl text-center">
                    <p>Tidak Hadir</p>
                    <h3 class="text-4xl font-bold">2</h3>
                </div>
            </div>

            <!-- Riwayat Kehadiran -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-semibold mb-4">Riwayat Kehadiran</h3>
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="p-2 border">No</th>
                            <th class="p-2 border">Tanggal</th>
                            <th class="p-2 border">Hari</th>
                            <th class="p-2 border">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh Baris Data -->
                        @php $no = 1; @endphp
                        @foreach ($kehadiran as $data)
                            <tr @if($data->status == 'Tidak Hadir') class="bg-red-100 text-red-700 font-semibold" @endif>
                                <td class="p-2 border">{{ $no++ }}</td>
                                <td class="p-2 border">{{ $data->tanggal }}</td>
                                <td class="p-2 border">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l') }}</td>
                                <td class="p-2 border">{{ $data->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>
@endsection
