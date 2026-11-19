<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>PT. Guido Techno — Solusi Teknologi & Transformasi Digital Terpercaya</title>
  <meta name="description" content="PT. Guido Techno adalah perusahaan teknologi informasi yang menyediakan solusi pengembangan perangkat lunak, infrastruktur cloud, dan transformasi digital bisnis di Indonesia." />

  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- Vite Assets (Tailwind CSS) -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Main CSS (dari folder public/css/style.css) -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="bg-[#F2F7FF] text-[#10316B] antialiased selection:bg-[#FDBE34] selection:text-[#10316B]">

  <!-- ==================== A. HEADER / NAVBAR ==================== -->
  <header id="navbar" class="fixed top-0 left-0 right-0 z-50 py-5 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between">
        <!-- Logo Kiri -->
        <a href="#beranda" class="flex items-center gap-3 group focus:outline-none">
          <img src="{{ asset('assets/images/logo.png') }}" alt="Logo PT. Guido Techno" class="h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
        </a>

        <!-- Menu Desktop Kanan -->
        <nav class="hidden lg:flex items-center gap-8" aria-label="Navigasi Utama">
          <a href="#beranda" class="nav-link text-sm font-semibold text-[#10316B] hover:text-[#0B409C] transition-colors">Beranda</a>
          <a href="#profile" class="nav-link text-sm font-semibold text-[#10316B]/80 hover:text-[#0B409C] transition-colors">Profile</a>
          <a href="#layanan" class="nav-link text-sm font-semibold text-[#10316B]/80 hover:text-[#0B409C] transition-colors">Layanan</a>
          <a href="#berita" class="nav-link text-sm font-semibold text-[#10316B]/80 hover:text-[#0B409C] transition-colors">Berita</a>
          <a href="#portofolio" class="nav-link text-sm font-semibold text-[#10316B]/80 hover:text-[#0B409C] transition-colors">Portofolio</a>
          <a href="#kontak" class="nav-link text-sm font-semibold text-[#10316B]/80 hover:text-[#0B409C] transition-colors">Kontak</a>

          <a href="#kontak" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-[#0B409C] hover:bg-[#10316B] text-white text-sm font-semibold shadow-sm transition-all duration-300 hover:-translate-y-0.5">
            <span>Hubungi Kami</span>
            <i class="fa-solid fa-arrow-right text-xs text-[#FDBE34]"></i>
          </a>
        </nav>

        <!-- Tombol Hamburger Mobile -->
        <button id="mobile-menu-btn" type="button" class="lg:hidden inline-flex items-center justify-center p-2.5 rounded-lg text-[#10316B] hover:bg-[#0B409C]/10 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" aria-label="Buka Menu">
          <i id="menu-icon" class="fa-solid fa-bars text-xl"></i>
        </button>
      </div>
    </div>

    <!-- Dropdown Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-[#F2F7FF] border-b border-[#0B409C]/10 shadow-xl mt-3">
      <div class="px-4 pt-3 pb-6 space-y-2">
        <a href="#beranda" class="mobile-link block px-3 py-2.5 rounded-lg text-base font-semibold text-[#10316B] hover:bg-[#0B409C]/10">Beranda</a>
        <a href="#profile" class="mobile-link block px-3 py-2.5 rounded-lg text-base font-semibold text-[#10316B] hover:bg-[#0B409C]/10">Profile</a>
        <a href="#layanan" class="mobile-link block px-3 py-2.5 rounded-lg text-base font-semibold text-[#10316B] hover:bg-[#0B409C]/10">Layanan</a>
        <a href="#berita" class="mobile-link block px-3 py-2.5 rounded-lg text-base font-semibold text-[#10316B] hover:bg-[#0B409C]/10">Berita</a>
        <a href="#portofolio" class="mobile-link block px-3 py-2.5 rounded-lg text-base font-semibold text-[#10316B] hover:bg-[#0B409C]/10">Portofolio</a>
        <a href="#kontak" class="mobile-link block px-3 py-2.5 rounded-lg text-base font-semibold text-[#10316B] hover:bg-[#0B409C]/10">Kontak</a>
        <div class="pt-3">
          <a href="#kontak" class="mobile-link w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-lg bg-[#0B409C] text-white font-semibold">
            <span>Hubungi Kami</span>
            <i class="fa-solid fa-arrow-right text-xs text-[#FDBE34]"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- ==================== B. BERANDA (HERO SECTION) ==================== -->
    <section id="beranda" class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 bg-tech-grid overflow-hidden">
      <!-- Dekorasi Cahaya Halus -->
      <div class="absolute top-20 right-0 -z-10 w-96 h-96 bg-[#0B409C]/10 rounded-full blur-3xl"></div>
      <div class="absolute bottom-10 left-10 -z-10 w-72 h-72 bg-[#FDBE34]/15 rounded-full blur-3xl"></div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

          <!-- Kolom Kiri: Copywriting -->
          <div class="lg:col-span-6 space-y-6 reveal">

            <h1 class="text-4xl sm:text-5xl lg:text-[3.4rem] font-extrabold text-[#10316B] leading-[1.15] tracking-tight">
              Transformasikan Ide Menjadi Solusi <span class="text-[#0B409C]">Digital!</span>
            </h1>

            <p class="text-base sm:text-lg text-[#10316B]/80 leading-relaxed max-w-2xl">
              PT. Guido Techno membantu mewujudkan ide menjadi solusi digital inovatif melalui pengembangan aplikasi yang efektif, modern, dan sesuai kebutuhan bisnis.
            </p>

            <div class="flex flex-wrap items-center gap-4 pt-2">
              <a href="#layanan" class="inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl bg-[#0B409C] hover:bg-[#10316B] text-white font-semibold text-sm sm:text-base shadow-md shadow-[#0B409C]/20 transition-all duration-300 hover:-translate-y-0.5">
                <span>Layanan Kami</span>
                <i class="fa-solid fa-layer-group text-[#FDBE34]"></i>
              </a>
              <a href="#kontak" class="inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl bg-white hover:bg-[#10316B]/5 text-[#10316B] border border-[#10316B]/20 font-semibold text-sm sm:text-base transition-all duration-300">
                <span>Hubungi Kami</span>
                <i class="fa-solid fa-headset text-[#0B409C]"></i>
              </a>
            </div>
          </div>

          <!-- Kolom Kanan: Komposisi Visual Mockup Aplikasi -->
          <div class="lg:col-span-6 reveal">
            <div class="relative mx-auto max-w-md lg:max-w-none">

              <!-- Ikon Mengambang Kiri Atas (Adaptasi dari Referensi) -->
              <div class="hidden sm:flex items-center justify-center w-12 h-12 rounded-2xl bg-white text-[#0B409C] shadow-lg border border-[#0B409C]/15 absolute -top-5 -left-5 z-20 font-mono font-extrabold text-base">
                { }
              </div>

              <!-- Frame Utama Mockup Aplikasi / Tablet -->
              <div class="relative rounded-[1.75rem] bg-[#10316B] p-3 sm:p-4 shadow-2xl border border-[#0B409C]/30">

                <!-- Layar Aplikasi Putih Bersih -->
                <div class="rounded-2xl bg-white p-5 sm:p-6 text-[#10316B] space-y-4">

                  <!-- Top Bar Browser / App -->
                  <div class="flex items-center justify-between pb-3 border-b border-[#10316B]/10">
                    <div class="flex items-center gap-1.5">
                      <span class="w-2.5 h-2.5 rounded-full bg-red-400"></span>
                      <span class="w-2.5 h-2.5 rounded-full bg-[#FDBE34]"></span>
                      <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                    </div>
                    <span class="text-[11px] font-mono font-semibold text-[#0B409C] bg-[#F2F7FF] px-3 py-1 rounded-full border border-[#0B409C]/10">
                      app.guidotechno.id/dashboard
                    </span>
                  </div>

                  <!-- Baris Statistik Aplikasi -->
                  <div class="grid grid-cols-2 gap-3">
                    <div class="p-3.5 rounded-xl bg-[#F2F7FF] border border-[#0B409C]/10">
                      <p class="text-[10px] font-bold uppercase tracking-wider text-[#10316B]/60">Pengguna Aktif</p>
                      <div class="flex items-baseline gap-2 mt-1">
                        <span class="text-xl font-extrabold text-[#10316B]">12.580</span>
                        <span class="text-[11px] font-bold text-emerald-600">+18,2%</span>
                      </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-[#F2F7FF] border border-[#0B409C]/10">
                      <p class="text-[10px] font-bold uppercase tracking-wider text-[#10316B]/60">Transaksi Sistem</p>
                      <div class="flex items-baseline gap-2 mt-1">
                        <span class="text-xl font-extrabold text-[#0B409C]">8.560</span>
                        <span class="text-[11px] font-bold text-[#0B409C]/70">Real-time</span>
                      </div>
                    </div>
                  </div>

                  <!-- Area Grafik Pertumbuhan -->
                  <div class="p-4 rounded-xl bg-[#F2F7FF]/70 border border-[#0B409C]/10">
                    <div class="flex items-center justify-between mb-3">
                      <span class="text-[10px] font-bold uppercase tracking-wider text-[#10316B]/60">Performa & Pertumbuhan</span>
                      <span class="text-[10px] font-bold text-[#0B409C] bg-white px-2 py-0.5 rounded border border-[#0B409C]/10">Optimal</span>
                    </div>
                    <!-- Grafik Garis SVG -->
                    <svg viewBox="0 0 240 60" class="w-full h-14 overflow-visible" fill="none">
                      <path d="M4 50 L48 34 L92 42 L136 22 L180 28 L236 8" stroke="#0B409C" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                      <circle cx="236" cy="8" r="4.5" fill="#FDBE34" stroke="#10316B" stroke-width="2" />
                    </svg>
                  </div>

                  <!-- Status Sistem Bawah -->
                  <div class="flex items-center justify-between pt-1 text-xs">
                    <div class="flex items-center gap-2 text-[#10316B]/75 font-semibold">
                      <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                      <span>Sistem & Cloud Terintegrasi</span>
                    </div>
                    <span class="font-bold text-[#0B409C]">v2.4 Live</span>
                  </div>

                </div>
              </div>

              <!-- Floating Card - Bottom Right -->
              <div class="hidden sm:flex absolute -bottom-6 -right-4 z-20 items-center gap-3 w-56 p-4 bg-white text-[#10316B] rounded-2xl shadow-xl border border-[#0B409C]/15">
                <!-- Icon -->
                <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-[#FDBE34]/20 text-[#0B409C] flex items-center justify-center text-lg">
                  <i class="fa-solid fa-rocket"></i>
                </div>
                <!-- Text -->
                <div class="flex flex-col gap-1">
                  <p class="text-[11px] font-semibold text-[#10316B]/60">
                    Solusi Modern
                  </p>
                  <p class="text-sm font-extrabold leading-tight">
                    Dari Ide Jadi Nyata
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ==================== C. PROFILE PERUSAHAAN ==================== -->
    <section id="profile" class="py-20 lg:py-28 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Section -->
        <div class="max-w-3xl mb-16 reveal">
          <span class="text-xs font-bold uppercase tracking-widest text-[#0B409C] bg-[#F2F7FF] px-3.5 py-1.5 rounded-md border border-[#0B409C]/10">Tentang Kami</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-[#10316B] mt-4 tracking-tight">
            Mengenal Lebih Dekat PT. Guido Techno
          </h2>
          <p class="text-[#10316B]/75 mt-4 text-base sm:text-lg leading-relaxed">
            Berdiri dengan komitmen menghadirkan solusi digital yang relevan, terukur, dan berkelanjutan bagi sektor korporasi, pemerintahan, serta industri berkembang.
          </p>
        </div>

        <!-- Tentang, Visi & Misi -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start mb-10">
          <!-- Tentang Perusahaan -->
          <div class="lg:col-span-6 space-y-6 reveal">
            <div class="rounded-2xl overflow-hidden shadow-lg border border-[#10316B]/10">
              <img src="{{ asset('assets/images/logo.png') }}" alt="Kolaborasi Tim PT. Guido Techno" class="w-full h-65 object-cover" />
            </div>
            <div class="space-y-4">
              <h3 class="text-2xl font-bold text-[#10316B]">Deskripsi Usaha</h3>
              <p class="text-[#10316B]/80 leading-relaxed text-justify">
                <strong>PT. Guido Techno</strong> Guido Techno adalah sebuah Software House yang bergerak di bidang jasa pengembangan perangkat lunak dan solusi digital. Fokus utama usaha ini adalah memberikan layanan pembuatan aplikasi berbasis web dan mobile, pengembangan sistem informasi untuk sektor pendidikan dan UMKM, serta layanan desain antarmuka pengguna (UI/UX) dan konsultasi digital.
              </p>
              <p class="text-[#10316B]/80 leading-relaxed text-justify">
                Dengan memanfaatkan tenaga muda dan kreatif di bidang teknologi informasi, Guido Techno bertujuan untuk menjadi mitra transformasi digital yang tidak hanya handal secara teknis, namun juga memahami kebutuhan lokal dan mampu menyediakan solusi yang tepat guna.
              </p>
            </div>
          </div>

          <!-- Visi & Misi -->
          <div class="lg:col-span-6 space-y-6 reveal">

            <!-- Card Visi -->
            <div class="p-8 rounded-2xl bg-[#10316B] text-white shadow-lg relative overflow-hidden">

              <div class="flex items-center gap-3 mb-5">
                <div class="w-11 h-11 rounded-xl bg-white/15 flex items-center justify-center">
                  <i class="fa-solid fa-eye text-[#FDBE34] text-lg"></i>
                </div>
                <h3 class="text-xl font-bold">Visi Perusahaan</h3>
              </div>

              <p class="text-white/85 leading-relaxed text-justify">
                Menjadi software house terpercaya yang menghadirkan solusi teknologi inovatif dan berkualitas untuk menunjang transformasi digital di Indonesia.
              </p>
            </div>

            <!-- Card Misi -->
            <div class="p-8 rounded-2xl bg-[#F2F7FF] border border-[#0B409C]/15">

              <div class="flex items-center gap-3 mb-5">
                <div class="w-11 h-11 rounded-xl bg-[#0B409C]/10 flex items-center justify-center">
                  <i class="fa-solid fa-bullseye text-[#0B409C] text-lg"></i>
                </div>
                <h3 class="text-xl font-bold text-[#10316B]">Misi Perusahaan</h3>
              </div>

              <ul class="space-y-4 text-[#10316B]/85">

                <li class="flex items-start gap-3">
                  <i class="fa-solid fa-check-circle text-[#0B409C] mt-1"></i>
                  <span>Memberikan layanan pengembangan perangkat lunak yang profesional dan sesuai kebutuhan klien.</span>
                </li>

                <li class="flex items-start gap-3">
                  <i class="fa-solid fa-check-circle text-[#0B409C] mt-1"></i>
                  <span>Membangun tim yang kompeten, kreatif, dan adaptif terhadap perkembangan teknologi.</span>
                </li>

                <li class="flex items-start gap-3">
                  <i class="fa-solid fa-check-circle text-[#0B409C] mt-1"></i>
                  <span>Menyediakan solusi digital dengan harga kompetitif tanpa mengorbankan kualitas.</span>
                </li>

                <li class="flex items-start gap-3">
                  <i class="fa-solid fa-check-circle text-[#0B409C] mt-1"></i>
                  <span>Menjalin kemitraan jangka panjang dengan berbagai sektor usaha dan instansi.</span>
                </li>

              </ul>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- ==================== D. LAYANAN ==================== -->
    <section id="layanan" class="py-20 lg:py-28 bg-[#F2F7FF]">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 reveal">
          <div class="max-w-2xl">
            <span class="text-xs font-bold uppercase tracking-widest text-[#0B409C] bg-white px-3.5 py-1.5 rounded-md border border-[#0B409C]/10">Produk & Jasa</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#10316B] mt-4 tracking-tight">
              Produk dan Layanan Utama </br> Guido Techno
            </h2>
          </div>
          <p class="text-[#10316B]/75 max-w-md mt-4 md:mt-0 text-sm sm:text-base">
            Solusi produk digital siap pakai serta layanan konsultasi dan pengembangan teknologi untuk instansi, sekolah, dan UMKM.
          </p>
        </div>

        <!-- Kategori A: Produk -->
        <div class="mb-14 reveal">
          <div class="flex items-center gap-3 mb-6">
            <div class="h-px flex-1 bg-[#0B409C]/15"></div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Produk 1 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Sistem Informasi Sekolah</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Untuk manajemen data siswa, guru, nilai, kehadiran, dan laporan akademik secara terpadu.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Manajemen Akademik</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>

            <!-- Produk 2 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-cash-register"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Aplikasi Kasir / POS untuk UMKM</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Aplikasi pencatatan penjualan dan manajemen stok barang berbasis cloud yang praktis dan akurat.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Point of Sale Cloud</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>

            <!-- Produk 3 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-landmark"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Sistem Informasi Desa / Kelurahan</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Platform administrasi layanan publik desa untuk mempercepat pelayanan surat-menyurat dan data warga.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Layanan Publik Digital</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>

            <!-- Produk 4 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-globe"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Website Portofolio & Profil Lembaga</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Website statis maupun dinamis untuk kebutuhan personal, perusahaan, maupun instansi resmi.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Company Profile & Web</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>
          </div>
        </div>

        <!-- Kategori B: Jasa -->
        <div class="reveal">
          <div class="flex items-center gap-3 mb-6">
            <div class="h-px flex-1 bg-[#0B409C]/15"></div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Jasa 1 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-code"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Pembuatan Website</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Jasa perancangan dan pengembangan website custom sesuai kebutuhan operasional dan branding bisnis Anda.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Web Development</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>

            <!-- Jasa 2 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-pen-nib"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Layanan UI/UX Design</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Desain antarmuka (UI) dan pengalaman pengguna (UX) profesional yang modern, bersih, dan mudah digunakan.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Interface & Prototyping</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>

            <!-- Jasa 3 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-laptop-code"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Konsultasi & Implementasi Teknologi Digital</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Konsultasi strategi digitalisasi serta pendampingan penerapan sistem teknologi yang tepat sasaran.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Strategi Digitalisasi</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>

            <!-- Jasa 4 -->
            <article class="group bg-white rounded-2xl p-7 border border-[#0B409C]/10 shadow-xs hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
              <div class="w-13 h-13 rounded-xl bg-[#F2F7FF] group-hover:bg-[#0B409C] text-[#0B409C] group-hover:text-white flex items-center justify-center text-xl transition-colors duration-300 mb-5">
                <i class="fa-solid fa-chalkboard-user"></i>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-2.5">Pelatihan IT untuk UMKM dan Sekolah</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1 text-justify">
                Pelatihan dasar pemanfaatan teknologi digital untuk meningkatkan produktivitas pelaku UMKM dan instansi pendidikan.
              </p>
              <div class="pt-4 border-t border-[#10316B]/10 flex items-center justify-between text-xs font-bold text-[#0B409C]">
                <span>Edukasi & Workshop IT</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </div>
            </article>
          </div>
        </div>

      </div>
    </section>

    <!-- ==================== E. BERITA & ARTIKEL ==================== -->
    <section id="berita" class="py-20 lg:py-28 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl mb-14 reveal">
          <span class="text-xs font-bold uppercase tracking-widest text-[#0B409C] bg-[#F2F7FF] px-3.5 py-1.5 rounded-md border border-[#0B409C]/10">Wawasan & Publikasi</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-[#10316B] mt-4 tracking-tight">
            Berita & Artikel Terbaru
          </h2>
          <p class="text-[#10316B]/75 mt-3 text-base">
            Perkembangan terbaru perusahaan, studi kasus teknologi, serta publikasi resmi dari PT. Guido Techno.
          </p>
        </div>

        <!-- Grid Berita Statis -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

          <!-- Artikel 1 -->
          <article class="flex flex-col bg-[#F2F7FF] rounded-2xl overflow-hidden border border-[#0B409C]/10 hover:shadow-lg transition-all duration-300 reveal">
            <div class="relative h-52 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80" alt="Infrastruktur Cloud Enterprise" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
              <span class="absolute top-4 left-4 px-3 py-1 rounded-md bg-[#0B409C] text-white text-xs font-bold">
                Teknologi Cloud
              </span>
            </div>
            <div class="p-6 flex-1 flex flex-col">
              <div class="flex items-center gap-2 text-xs font-semibold text-[#10316B]/60 mb-3">
                <i class="fa-regular fa-calendar text-[#0B409C]"></i>
                <time datetime="2026-10-14">14 Oktober 2026</time>
              </div>
              <h3 class="text-lg font-bold text-[#10316B] mb-3 leading-snug">
                Strategi Migrasi Hybrid Cloud untuk Efisiensi Operasional Perbankan Daerah
              </h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-6 flex-1">
                Penerapan arsitektur hybrid cloud terbukti mampu menekan biaya pemeliharaan server hingga 35% tanpa mengorbankan standar kepatuhan regulasi data.
              </p>
              <a href="{{ url('/berita/detail-berita') }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#0B409C] hover:text-[#10316B] transition-colors">
                <span>Baca Selengkapnya</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
              </a>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- ==================== F. PORTOFOLIO ==================== -->
    <section id="portofolio" class="py-20 lg:py-28 bg-[#F2F7FF]">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-12 gap-6 reveal">
          <div>
            <span class="text-xs font-bold uppercase tracking-widest text-[#0B409C] bg-white px-3.5 py-1.5 rounded-md border border-[#0B409C]/10">Rekam Jejak</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#10316B] mt-4 tracking-tight">
              Portofolio Proyek Pilihan
            </h2>
          </div>

          <!-- Filter Kategori (Vanilla JS) -->
          <div class="flex flex-wrap gap-2" role="group" aria-label="Filter Kategori Portofolio">
            <button type="button" data-filter="all" class="filter-btn active px-4 py-2 rounded-lg text-xs sm:text-sm font-bold bg-[#0B409C] text-white transition-all cursor-pointer">
              Semua Proyek
            </button>
            <button type="button" data-filter="web" class="filter-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-bold bg-white text-[#10316B] hover:bg-[#0B409C]/10 transition-all cursor-pointer">
              Web & ERP
            </button>
          </div>
        </div>

        <!-- Grid Portofolio -->
        <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Proyek 1 -->
          <article class="portfolio-item bg-white rounded-2xl overflow-hidden border border-[#0B409C]/10 shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col" data-category="web">
            <div class="relative h-56 overflow-hidden bg-[#10316B]">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Sistem ERP Logistik Nusantara" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
              <div class="absolute top-4 right-4 px-3 py-1 rounded-md bg-[#10316B]/90 text-[#FDBE34] text-xs font-bold">
                2026
              </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
              <span class="text-xs font-bold uppercase tracking-wider text-[#0B409C]">Web & ERP</span>
              <h3 class="text-xl font-bold text-[#10316B] mt-1 mb-2">Nusantara Fleet & ERP System</h3>
              <p class="text-sm text-[#10316B]/75 leading-relaxed mb-4 flex-1">
                Sistem manajemen armada, penjadwalan distribusi, dan akuntansi terpadu untuk perusahaan logistik nasional dengan 500+ kendaraan operasional.
              </p>
              <div class="flex flex-wrap gap-1.5 mb-5">
                <span class="px-2.5 py-1 rounded bg-[#F2F7FF] text-[#10316B] text-[11px] font-semibold">Enterprise Web</span>
                <span class="px-2.5 py-1 rounded bg-[#F2F7FF] text-[#10316B] text-[11px] font-semibold">REST API</span>
                <span class="px-2.5 py-1 rounded bg-[#F2F7FF] text-[#10316B] text-[11px] font-semibold">Cloud Cluster</span>
              </div>
              <a href="#kontak" class="inline-flex items-center justify-between w-full pt-4 border-t border-[#10316B]/10 text-sm font-bold text-[#0B409C] hover:text-[#10316B]">
                <span>Minta Studi Kasus</span>
                <i class="fa-solid fa-up-right-from-square text-xs"></i>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>


    <!-- ==================== G. KONTAK ==================== -->
    <section id="kontak" class="py-20 lg:py-28 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="max-w-2xl mb-14 reveal">
          <span class="inline-flex items-center text-xs font-bold uppercase tracking-widest text-[#0B409C] bg-[#F2F7FF] px-3.5 py-1.5 rounded-md border border-[#0B409C]/10">
            Hubungi Kami
          </span>

          <h2 class="text-3xl sm:text-4xl font-extrabold text-[#10316B] mt-4 tracking-tight">
            Mari Terhubung dengan Kami
          </h2>

          <p class="text-[#10316B]/75 mt-3 text-base sm:text-lg leading-relaxed">
            Kami siap menjadi mitra teknologi Anda. Hubungi atau kunjungi kantor PT. Guido Techno untuk memulai kolaborasi.
          </p>
        </div>

        <!-- Contact Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-stretch">

          <!-- Kolom Kiri: Informasi Kantor -->
          <div class="lg:col-span-5 reveal">
            <div class="h-full flex flex-col p-7 sm:p-8 rounded-2xl bg-[#10316B] text-white shadow-xl">

              <!-- Heading -->
              <div class="mb-8">
                <div class="flex items-center gap-4 mb-3">
                  <div class="w-12 h-12 shrink-0 rounded-xl bg-white/10 text-[#FDBE34] flex items-center justify-center text-xl">
                    <i class="fa-solid fa-building"></i>
                  </div>

                  <h3 class="text-xl font-bold">
                    Informasi Kantor
                  </h3>
                </div>

                <p class="text-sm text-white/65 leading-relaxed">
                  Temukan informasi dan kontak resmi PT. Guido Techno.
                </p>
              </div>

              <!-- Contact Information -->
              <div class="space-y-6 flex-grow">

                <!-- Alamat -->
                <div class="flex items-start gap-4">
                  <div class="w-10 h-10 rounded-xl bg-white/10 text-[#FDBE34] flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>

                  <div>
                    <p class="text-sm font-bold">Alamat Perusahaan</p>
                    <p class="text-sm text-white/70 mt-1 leading-relaxed">
                      Dusun Banjarwaru, RT. 48 RW. 22, Desa Panjalu, Kecamatan Panjalu, Kabupaten Ciamis 46264
                    </p>
                  </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4">
                  <div class="w-10 h-10 rounded-xl bg-white/10 text-[#FDBE34] flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-envelope"></i>
                  </div>

                  <div>
                    <p class="text-sm font-bold">Email Resmi</p>
                    <a href="mailto:info@guidotechno.co.id"
                      class="text-sm text-white/70 hover:text-[#FDBE34] mt-1 block transition-colors">
                      info@guidotechno.co.id
                    </a>
                  </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-start gap-4">
                  <div class="w-10 h-10 rounded-xl bg-white/10 text-[#FDBE34] flex items-center justify-center shrink-0">
                    <i class="fa-brands fa-whatsapp"></i>
                  </div>

                  <div>
                    <p class="text-sm font-bold">WhatsApp Konsultasi</p>
                    <a href="https://wa.me/6285962617177"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="text-sm text-white/70 hover:text-[#FDBE34] mt-1 block transition-colors">
                      +62 859-6261-7177
                    </a>
                  </div>
                </div>

              </div>

              <!-- WhatsApp Button -->
              <div class="mt-8 pt-6 border-t border-white/15">
                <a href="https://wa.me/6285962617177?text=Halo%20PT.%20Guido%20Techno,%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20teknologi."
                  target="_blank"
                  rel="noopener noreferrer"
                  class="w-full inline-flex items-center justify-center gap-2.5 px-5 py-3.5 rounded-xl bg-[#FDBE34] hover:bg-[#eab02d] text-[#10316B] font-extrabold text-sm transition-all shadow-md hover:-translate-y-0.5">

                  <i class="fa-brands fa-whatsapp text-xl"></i>
                  Hubungi Kami via WhatsApp
                </a>
              </div>

            </div>
          </div>

          <!-- Kolom Kanan: Google Maps -->
          <div class="lg:col-span-7 reveal">
            <div class="h-full min-h-[450px] flex flex-col rounded-2xl overflow-hidden bg-[#F2F7FF] border border-[#0B409C]/15 shadow-sm">

              <!-- Maps Header -->
              <div class="p-6 sm:p-7 flex items-center justify-between gap-4">

                <div>
                  <div class="flex items-center gap-2 text-[#0B409C] text-xs font-bold uppercase tracking-wider mb-2">
                    <i class="fa-solid fa-map-location-dot"></i>
                    Lokasi Kami
                  </div>

                  <p class="text-sm text-[#10316B]/65 mt-1">
                    Desa Panjalu, Kabupaten Ciamis, Jawa Barat
                  </p>
                </div>

                <div class="hidden sm:flex w-12 h-12 rounded-xl bg-white text-[#0B409C] items-center justify-center shadow-sm shrink-0">
                  <i class="fa-solid fa-map-marked-alt text-xl"></i>
                </div>

              </div>

              <!-- Google Maps -->
              <div class="flex-1 min-h-[320px] bg-white">
                <iframe
                  title="Lokasi Kantor PT. Guido Techno"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0251798932236!2d108.27083667400008!3d-7.123079292880603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4700229778d1%3A0x662124862cba21e!2sGuido%20Techno!5e0!3m2!1sid!2sid!4v1795056049647!5m2!1sid!2sid"
                  class="w-full h-full min-h-[320px] border-0"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  allowfullscreen>
                </iframe>
              </div>

              <!-- Maps Footer -->
              <div class="p-5 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-white border-t border-[#0B409C]/10">

                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-[#F2F7FF] text-[#0B409C] flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>

                  <div>
                    <p class="text-sm font-bold text-[#10316B]">
                      PT. Guido Techno
                    </p>
                    <p class="text-xs text-[#10316B]/60 mt-0.5">
                      Panjalu, Kabupaten Ciamis
                    </p>
                  </div>
                </div>

                <a href="https://www.google.com/maps/search/?api=1&query=Panjalu%2C+Ciamis%2C+Jawa+Barat"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-flex items-center gap-2 text-sm font-bold text-[#0B409C] hover:text-[#10316B] transition-colors">
                  Buka Google Maps
                  <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>

              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>


<!-- ==================== H. FOOTER ==================== -->
<footer class="bg-[#10316B] text-white pt-16 pb-10 border-t border-white/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Footer Main Content -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">

      <!-- Brand & Deskripsi -->
      <div class="lg:col-span-3 space-y-4">

        <a href="#beranda" class="inline-flex flex-col items-start gap-2">
          <img
            src="{{ asset('assets/images/logo.png') }}"
            alt="Logo PT. Guido Techno"
            class="h-16 w-auto object-contain bg-white p-2 rounded-lg"
          />

          <span class="font-extrabold text-xl tracking-tight text-white">
            PT. Guido Techno
          </span>
        </a>

        <p class="text-sm text-white/75 leading-relaxed text-justify">
          Perusahaan teknologi informasi dan rekayasa perangkat lunak yang berdedikasi menghadirkan solusi digital presisi, aman, dan terukur bagi kemajuan bisnis di Indonesia.
        </p>

      </div>

      <!-- Navigasi Cepat -->
      <div class="lg:col-span-2 space-y-5">

        <h4 class="text-sm font-bold uppercase tracking-wider text-[#FDBE34]">
          Navigasi
        </h4>

        <ul class="space-y-3 text-sm text-white/75">

          <li>
            <a href="#beranda" class="hover:text-[#FDBE34] transition-colors">
              Beranda
            </a>
          </li>

          <li>
            <a href="#profile" class="hover:text-[#FDBE34] transition-colors">
              Profil Perusahaan
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Produk & Layanan
            </a>
          </li>

          <li>
            <a href="#berita" class="hover:text-[#FDBE34] transition-colors">
              Berita & Artikel
            </a>
          </li>

          <li>
            <a href="#portofolio" class="hover:text-[#FDBE34] transition-colors">
              Portofolio
            </a>
          </li>

          <li>
            <a href="#kontak" class="hover:text-[#FDBE34] transition-colors">
              Kontak
            </a>
          </li>

        </ul>
      </div>

      <!-- Produk -->
      <div class="lg:col-span-2 space-y-5">

        <h4 class="text-sm font-bold uppercase tracking-wider text-[#FDBE34]">
          Produk
        </h4>

        <ul class="space-y-3 text-sm text-white/75">

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Sistem Informasi Sekolah
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Aplikasi Kasir / POS untuk UMKM
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Sistem Informasi Desa / Kelurahan
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Website Portofolio & Profil Lembaga
            </a>
          </li>

        </ul>
      </div>

      <!-- Layanan -->
      <div class="lg:col-span-2 space-y-5">

        <h4 class="text-sm font-bold uppercase tracking-wider text-[#FDBE34]">
          Layanan
        </h4>

        <ul class="space-y-3 text-sm text-white/75">

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Pembuatan Website
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Layanan UI/UX Design
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Konsultasi & Implementasi Teknologi Digital
            </a>
          </li>

          <li>
            <a href="#layanan" class="hover:text-[#FDBE34] transition-colors">
              Pelatihan IT untuk UMKM dan Sekolah
            </a>
          </li>

        </ul>
      </div>

      <!-- Informasi Kontak -->
      <div class="lg:col-span-3 space-y-5">

        <h4 class="text-sm font-bold uppercase tracking-wider text-[#FDBE34]">
          Hubungi Kami
        </h4>

        <ul class="space-y-4 text-sm text-white/75">

          <!-- Alamat -->
          <li class="flex items-start gap-3">
            <i class="fa-solid fa-location-dot text-[#FDBE34] mt-1 shrink-0"></i>

            <span class="leading-relaxed">
              Dusun Banjarwaru, RT. 48 RW. 22, Desa Panjalu, Kecamatan Panjalu, Kabupaten Ciamis 46264
            </span>
          </li>

          <!-- Email -->
          <li class="flex items-start gap-3">
            <i class="fa-solid fa-envelope text-[#FDBE34] mt-1 shrink-0"></i>

            <a
              href="mailto:info@guidotechno.co.id"
              class="hover:text-[#FDBE34] transition-colors break-all"
            >
              info@guidotechno.co.id
            </a>
          </li>

          <!-- WhatsApp -->
          <li class="flex items-start gap-3">
            <i class="fa-brands fa-whatsapp text-[#FDBE34] mt-1 shrink-0"></i>

            <a
              href="https://wa.me/6285962617177"
              target="_blank"
              rel="noopener noreferrer"
              class="hover:text-[#FDBE34] transition-colors"
            >
              +62 859-6261-7177
            </a>
          </li>

        </ul>

      </div>

    </div>

    <!-- Footer Bottom -->
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/60">

      <p class="text-center sm:text-left">
        &copy; {{ date('Y') }} PT. Guido Techno. All rights reserved.
      </p>

    </div>

  </div>
</footer>


  <!-- Tombol Back to Top -->
  <button id="back-to-top" type="button" aria-label="Kembali ke atas" class="fixed bottom-6 right-6 z-40 w-11 h-11 rounded-xl bg-[#0B409C] hover:bg-[#10316B] text-white shadow-lg border border-white/15 flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 cursor-pointer">
    <i class="fa-solid fa-arrow-up text-[#FDBE34]"></i>
  </button>

  <!-- Scripts (dari folder public/js/) -->
  <script type="module" src="{{ asset('js/main.js') }}"></script>
  <script type="module" src="{{ asset('js/portfolio.js') }}"></script>
</body>

</html>