<?php
$judul = "Beranda | Mawapres.id";
$deskripsi = "";
$halaman_khusus = false;

include 'public/layouts/admin.php';
include "public/sidebar/admin.php";
?>

<main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
    <h1 class="text-3xl font-bold">Selamat Datang di SARIS</h1>
    <section class="flex flex-row w-full gap-[90px] ml-10 items-center">
        <div class="relative inline-block">
            <!-- Foto Profil -->
            <img
                src="/tatib/public/images/image.png"
                alt="profile"
                class="w-64 h-64 object-cover rounded-2xl" />
            <!-- Icon add_a_photo -->
            <span class="material-symbols-outlined absolute bottom-2 right-2 bg-[#2862C6] p-3 rounded-full text-white">
                add_a_photo
            </span>
        </div>
        <div class="flex flex-col items-center gap-8 text-2xl">
            <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
                Alan Walker
            </span>
            <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
                12349802094383248
            </span>
        </div>
    </section>
    <section class="flex justify-center gap-32 text-xl pt-10">
        <button class="bg-[#2862C6] text-white p-3 rounded-lg py-4 px-10">
            Validasi
        </button>
    </section>
    <?php include "views/admin/components/ganti-foto.php" ?>
    <?php include "views/admin/components/ganti-password.php" ?>
</main>