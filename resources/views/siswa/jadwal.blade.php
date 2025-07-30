@extends('layouts.app')

@section('title', 'Siswa - Jadwal Pelajaran')

@section('content')
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-1/5 bg-[#1D1C5A] text-white flex flex-col py-6">
        <div class="text-2xl font-bold px-6 mb-8">MyAkademisReport</div>
        <nav class="flex flex-col gap-2">
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Pengumuman</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Nilai</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Kehadiran</a>
            <a href="#" class="bg-[#3081D0] px-6 py-2 font-medium">Jadwal Pelajaran</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-100">
        <!-- Header -->
        <header class="flex justify-between items-center bg-black text-white px-6 py-4">
            <h1 class="text-xl font-semibold">Siswa - Jadwal Pelajaran</h1>
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/user.png') }}" alt="User" class="w-8 h-8 rounded-full" />
                <span>Fitrah Handayani</span>
            </div>
        </header>

        <!-- Content -->
        <section class="p-6 flex justify-center">
            <div class="bg-white p-8 rounded-lg shadow w-full max-w-5xl">
                <h2 class="text-2xl font-bold text-center mb-6">Jadwal Pelajaran</h2>

                <!-- Greeting -->
                <div class="bg-green-100 text-green-900 p-4 rounded-lg flex items-center gap-2 mb-6">
                    <i class="fas fa-bell"></i>
                    <span>Selamat datang, Fitrah Handayani, Semangat Belajar Hari ini!</span>
                </div>

                <!-- Jadwal Table -->
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 text-center text-sm">
                        <thead class="bg-gray-200 font-bold">
                            <tr>
                                <th class="border p-2">JAM</th>
                                <th class="border p-2">SENIN</th>
                                <th class="border p-2">SELASA</th>
                                <th class="border p-2">RABU</th>
                                <th class="border p-2">KAMIS</th>
                                <th class="border p-2">JUMAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border p-2">07.00 - 08.30</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                            </tr>
                            <tr>
                                <td class="border p-2">08.35 - 09.45</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                            </tr>
                            <tr>
                                <td class="border p-2">09.50 - 11.15</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                            </tr>
                            <tr>
                                <td class="border p-2">11.15 - 12.30</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                            </tr>
                            <tr>
                                <td class="border p-2">12.30 - 14.00</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                                <td class="border p-2">XXX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
