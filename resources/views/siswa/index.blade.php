@extends('layouts.app') {{-- Pastikan file ini extend dari layout utama --}}

@section('title', 'Siswa - Pengumuman')

@section('content')
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-1/5 bg-[#1D1C5A] text-white flex flex-col py-6">
        <div class="text-2xl font-bold px-6 mb-8">MyAkademisReport</div>
        <nav class="flex flex-col gap-2">
            <a href="#" class="bg-[#3081D0] px-6 py-2 font-medium">Pengumuman</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Nilai</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Kehadiran</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Jadwal Pelajaran</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-100">
        <!-- Header -->
        <header class="flex justify-between items-center bg-black text-white px-6 py-4">
            <h1 class="text-xl font-semibold">Siswa - Pengumuman</h1>
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/user.png') }}" alt="User" class="w-8 h-8 rounded-full" />
                <span>Fitroh Hamdayani</span>
            </div>
        </header>

        <!-- Content Area -->
        <section class="p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Pengumuman</h2>

            <!-- Card Pengumuman -->
            <div class="space-y-4">
                <!-- Pengumuman 1 -->
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
                    <div class="flex justify-between">
                        <h3 class="font-semibold">Ulangan Harian Matematika</h3>
                        <span class="text-xs text-blue-500 font-bold bg-blue-100 rounded-full px-2">Baru</span>
                    </div>
                    <p class="text-sm mt-2">
                        Ulangan harian Matematika akan dilaksanakan pada hari Senin, 21 Juli 2025 untuk kelas 11A. Mohon belajar dan persiapkan diri dengan baik.
                    </p>
                    <div class="flex items-center justify-between mt-3 text-sm text-gray-500">
                        <span><i class="fas fa-user"></i> Budi S,pd</span>
                        <span><i class="fas fa-calendar"></i> 2025 - 07 - 15</span>
                    </div>
                </div>

                <!-- Pengumuman 2 -->
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
                    <div class="flex justify-between">
                        <h3 class="font-semibold">Pemberitahuan Libur Hari kemerdekaan</h3>
                        <span class="text-xs text-blue-500 font-bold bg-blue-100 rounded-full px-2">Baru</span>
                    </div>
                    <p class="text-sm mt-2">
                        Sekolah akan libur pada tanggal 17-18 Agustus 2025. Masuk kembali tanggal 19 Agustus 2025.
                    </p>
                    <div class="flex items-center justify-between mt-3 text-sm text-gray-500">
                        <span><i class="fas fa-user"></i> Yanto S,pd</span>
                        <span><i class="fas fa-calendar"></i> 2025 - 07 - 14</span>
                    </div>
                </div>

                <!-- Pengumuman 3 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold">Perbaikan Sistem Aplikasi</h3>
                    <p class="text-sm mt-2">
                        Akan ada maintenance sistem pada hari Jumat, 14 Juli 2025 pukul 22.00–24.00 WIB. Mohon untuk tidak mengakses sistem pada jam tersebut.
                    </p>
                    <div class="flex items-center justify-between mt-3 text-sm text-gray-500">
                        <span><i class="fas fa-user"></i> Admin</span>
                        <span><i class="fas fa-calendar"></i> 2025 - 07 - 12</span>
                    </div>
                </div>

                <!-- Pengumuman 4 -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold">Ulangan Tengah Semester</h3>
                    <p class="text-sm mt-2">
                        Akan dilaksanakan ulangan tengah semester pada tanggal 15 Juni 2025. Mohon agar setiap siswa belajar dengan tekun agar mendapatkan hasil yang maksimal.
                    </p>
                    <div class="flex items-center justify-between mt-3 text-sm text-gray-500">
                        <span><i class="fas fa-user"></i> Dede S,pd</span>
                        <span><i class="fas fa-calendar"></i> 2025 - 06 - 10</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
