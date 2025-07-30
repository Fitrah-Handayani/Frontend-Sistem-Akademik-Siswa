@extends('layouts.app')

@section('title', 'Siswa - Nilai')

@section('content')
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-1/5 bg-[#1D1C5A] text-white flex flex-col py-6">
        <div class="text-2xl font-bold px-6 mb-8">MyAkademisReport</div>
        <nav class="flex flex-col gap-2">
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Pengumuman</a>
            <a href="#" class="bg-[#3081D0] px-6 py-2 font-medium">Nilai</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Kehadiran</a>
            <a href="#" class="hover:bg-[#3081D0]/20 px-6 py-2">Jadwal Pelajaran</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-100">
        <!-- Header -->
        <header class="flex justify-between items-center bg-black text-white px-6 py-4">
            <h1 class="text-xl font-semibold">Siswa - Nilai</h1>
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/user.png') }}" alt="User" class="w-8 h-8 rounded-full" />
                <span>Fitrah Handayani</span>
            </div>
        </header>

        <!-- Content Area -->
        <section class="p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Nilai Siswa</h2>

            <!-- Greeting -->
            <div class="bg-green-100 text-green-900 p-4 rounded-lg flex items-center gap-2 mb-6">
                <i class="fas fa-bell"></i>
                <span>Selamat datang, Fitrah Handayani, Semangat Belajar Hari ini!</span>
            </div>

            <!-- Statistik Akademik -->
            <div class="grid grid-cols-3 gap-6 mb-8">
                <div class="bg-blue-600 text-white p-6 rounded-xl text-center">
                    <p>Semester saat ini</p>
                    <h3 class="text-4xl font-bold">6</h3>
                </div>
                <div class="bg-green-500 text-white p-6 rounded-xl text-center">
                    <p>Rata-rata nilai</p>
                    <h3 class="text-4xl font-bold">85</h3>
                </div>
                <div class="bg-orange-400 text-white p-6 rounded-xl text-center">
                    <p>Mata Pelajaran Terbaik</p>
                    <h3 class="text-4xl font-bold">FISIKA</h3>
                </div>
            </div>

            <!-- Nilai Terbaru -->
            <div class="grid grid-cols-3 gap-4 mb-8">
                <div class="bg-white rounded-lg shadow p-4">
                    <h4 class="font-semibold">Bahasa Indonesia</h4>
                    <p class="text-blue-600 font-bold">Nilai: 78 (Tugas)</p>
                    <p class="text-sm text-gray-500">Tanggal: 2025 - 07 - 05</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <h4 class="font-semibold">Fisika</h4>
                    <p class="text-blue-600 font-bold">Nilai: 80 (Ulangan Harian)</p>
                    <p class="text-sm text-gray-500">Tanggal: 2025 - 07 - 04</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <h4 class="font-semibold">Matematika</h4>
                    <p class="text-red-500 font-bold">Nilai: 50 (Tugas)</p>
                    <p class="text-sm text-gray-500">Tanggal: 2025 - 07 - 03</p>
                </div>
            </div>

            <!-- Rekap Nilai -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-semibold mb-4">Rekapitulasi Nilai Siswa</h3>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Pilih Semester</label>
                    <select class="mt-1 block w-1/3 border-gray-300 rounded-md shadow-sm">
                        <option>Semester 6</option>
                    </select>
                </div>

                <!-- Grafik Placeholder -->
                <div class="border border-blue-400 p-4 rounded-md">
                    <canvas id="nilaiChart"></canvas>
                </div>

                <!-- Saran -->
                <div class="mt-4 p-4 bg-yellow-100 text-yellow-800 rounded">
                    <strong>Saran:</strong> Nilai xxxx
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('nilaiChart').getContext('2d');
    const nilaiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Bahasa Indonesia', 'Fisika', 'Matematika', 'Biologi', 'Ekonomi', 'Bahasa Inggris'],
            datasets: [{
                label: 'Nilai',
                data: [80, 100, 75, 90, 85, 88],
                backgroundColor: '#3081D0'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
</script>
@endsection