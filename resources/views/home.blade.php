@extends('layouts.main')

@section('container')

<style>
body{
    background-color: #f7f7f7;
}
/* Hero Section */
    .c-hero {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        min-height: 477px;
        border-radius: 21px;
        background: linear-gradient(135deg, #C5E9DB, #A8DADC);
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .box-hero{
        width: 48%;
        padding: 50px;
        font-family: 'Poppins', sans-serif;
    }
    .box-hero h1{
        font-weight: 700;
        color: #0E2C2C;
        margin-bottom: 10px;
        line-height: 1.2;
    }
    .box-hero p{
        margin-bottom: 30px;
        color: #555;
        font-size: 13px;
    }

    /* Input Hero Section */
    .input-hero {
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 70%;
    }
    .input-hero input {
        flex: 1;
        padding: 7px 10px;
        border: 2px solid #4CAF50;
        border-right: none;
        border-radius: 25px 0 0 25px;
        box-sizing: border-box;
        outline: none;
        font-size: 12px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .input-hero input::placeholder {
        color: #999;
    }
    .input-hero input:focus {
        border-color: #45a049;
        box-shadow: 0 0 5px rgba(69, 160, 73, 0.5);
    }
    .input-hero button {
        padding: 7px 10px;
        border: none;
        background-color: #4CAF50;
        color: white;
        font-size: 12px;
        border: 1px solid #4CAF50;
        cursor: pointer;
        border-radius: 0 25px 25px 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .c-hero {
            flex-direction: column;
            height: auto;
        }
        .box-hero {
            width: 100%;
            padding: 30px;
            text-align: center;
        }
        .input-hero {
            width: 80%;
            flex-direction: row;
            margin: auto;
        }


    }

    /* Additional Styles for Enhanced Appearance */
    .box-hero-kanan {
        background-image: url('path-to-your-image.jpg');
        background-size: cover;
        background-position: center;
        border-radius: 21px;
        height: 100%;
    }
/* end */

/* Kategori Section */
    .c-kategori {
    width: 100%;
    margin: 30px 0 0 0;
    padding: 30px;  
    }
    .c-list-kategori {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-top: 17px;
    }
    .box-kategori {
        width: 120px;
        height: 150px;
        border: 1px solid #a3a3a3;
        background-color: white;
        border-radius: 10px;
        align-content: center;
        text-align: center;
        align-items: center;
        padding: 10px;
        text-decoration: none;
        color: #0E2C2C;    
    }
    .box-kategori:hover {
        border: 1px solid #28BA79;
    }
    .box-kategori img {
        width: 100%;
    }
    .box-kategori h5 {
        font-size: 11pt;
        font-weight: bold;
        margin-bottom: 0px;
    }
    .box-kategori p {
        font-size: 8pt;
    }

    @media (max-width: 768px) {
    .c-kategori {
        padding: 10px;  
    }
    .c-list-kategori {
        flex-wrap: nowrap; /* Tidak membungkus */
        justify-content: flex-start; 
        overflow-x: auto;   /* Mengaktifkan scroll horizontal */
        -ms-overflow-style: none;  /* Untuk IE dan Edge */
        scrollbar-width: none;     /* Untuk Firefox */
        gap: 10px;
    }

    .c-list-kategori::-webkit-scrollbar {
        display: none; /* Untuk Chrome, Safari, dan Opera */
    }

    .box-kategori {
        flex: 0 0 auto; /* Mencegah box menyusut */
        width: 120px;    /* Sesuaikan jika perlu */
    }
    }
/* end */

/* Banner Section */
    .c-banner {
        width: 100%;
        padding: 50px 30px;  
        gap: 30px;
        display: flex;
        flex-direction: row;
    }
    .box-banner {
        width: 30%;
        margin: auto;
    }
    .box-banner img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 1px solid #c2c2c2;
    }

    @media (max-width: 768px) {
        .c-banner {
            justify-content: flex-start;
            gap: 0; 
            padding: 10px 0; 
            overflow-x: auto; 
            scroll-snap-type: x mandatory; 
            -webkit-overflow-scrolling: touch; 
            white-space: nowrap;
            margin-bottom: 50px;
            scrollbar-width: none;
        }
        .c-banner::-webkit-scrollbar {
        display: none; /* Chrome, Safari, Opera */
        }
        .box-banner img {
            border-radius: 0;
        }
        .box-banner {
            min-width: 100% ;
            width: 100%;
            text-align: center;
        }
    }
/* end */

/* Produk Section */
    .h-produk {
        padding-left: 30px;
    }
    .c-produk {
        width: 100%;
        margin: 30px 0 130px 0;
        padding: 50px;  
    }
    .c-box-produk {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 17px;
    }
    .box-produk {
        width: 13.2%;
        min-width: 170px;
        height: auto;
        border: 1px solid #dfdfdf;
        background-color: #ffff;
        align-content: center;
        text-align: left;
        align-items: center;
        text-decoration: none;
        color: #0E2C2C;    
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .box-produk:hover{
        border: 1px solid #28BA79;
    }
    .box-produk img {
        width: 100%;
    }
    .tag-promo {
        position: absolute;
        padding: 2px 10px;
        font-size: 10pt;
        border-bottom-right-radius: 10px;
        background-color: #28BA79;
        color: #DCFDF0;
    }
    .p-content{
        padding: 11px;
    }
    .box-produk p{
        margin: 0%;
    }
    .p-kategory{
        font-size: 7pt;
        font-weight: bold;
    }
    .box-produk h5 {
        font-size: 11pt;
        font-weight: bold;
        margin: 0px;
    }
    .p-harga{
        justify-content: space-between;
        display: flex;
        text-align: center;
        margin-top: 10px;
    }
    .p-harga h4 {
        font-size: 12pt;
    }
    .p-harga a {
        text-decoration: none;
        font-size: 9pt;
        align-content: center;
        align-items: center;
        text-align: center;
        height: auto;
        padding: 3px 10px;
        border: 1px solid #28BA79;
        background-color: #DCFDF0;
        color: #28BA79;
        border-radius: 5px;
    }
    .h-harga{
        margin: auto 1px;  
    }
    .barcode{
        font-size: 7pt;
        color: #555;
    }

    @media (max-width: 768px) {
        .c-produk{
            padding: 10px;
        }
        .c-box-produk {
            padding: 0%;
        }
    }
/* end */


</style>

<!-- Hero Section -->
    <div class="c-hero">
        <div class="box-hero-kiri box-hero">
            <h1>DAPATKAN INFO <br> TERBARU UNTUK ANDA</h1>
            <p>Dapatkan informasi terkini dari kami melalui WhatsApp. Jangan lewatkan update penting dan penawaran spesial hanya untuk Anda!</p>
            <div class="input-hero">
                <input type="text" placeholder="Masukkan Nomor WhatsApp">
                <button type="submit">Kirim</button>
            </div>
        </div>
        <div class="box-hero-kanan box-hero">
            <!-- Anda bisa menambahkan gambar atau konten lainnya di sini -->
        </div>
    </div>
<!-- End Hero Section -->

<!-- Kategori Section -->
    <div class="c-kategori">
        <div class="judul-kategori">
            <h4>Kategori</h4>
        </div>
        <div class="c-list-kategori">
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 1</h5>
                <p>10 produk</p>
            </a>
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 2</h5>
                <p>10 produk</p>
            </a>
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 3</h5>
                <p>10 produk</p>
            </a>
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 4</h5>
                <p>10 produk</p>
            </a>
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 5</h5>
                <p>10 produk</p>
            </a>
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 6</h5>
                <p>10 produk</p>
            </a>
            <a href="" class="box-kategori">
                <img src="img/contoh.png" width="50" alt="">
                <h5>Kategori 7</h5>
                <p>10 produk</p>
            </a>
        </div>
    </div>
<!-- End Kategori Section -->

<!-- Banner Section -->
    <div class="c-banner" id="banner">
        <div class="box-banner" id="slide1">
            <img src="img/s-1.jpg" alt="">
        </div>
        <div class="box-banner" id="slide2">
            <img src="img/s-21.jpg" alt="">
        </div>
        <div class="box-banner" id="slide3">
            <img src="img/s-31.jpg" alt="">
        </div>
    </div>

   <!-- Tambahkan script ini sebelum tag </body> -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const banner = document.getElementById('banner');
            const boxes = document.querySelectorAll('.box-banner');
            let currentIndex = 0;
            const total = boxes.length;
            const intervalTime = 3000; // Waktu pergantian dalam milidetik (3 detik)

            function scrollToCurrent() {
                const bannerWidth = banner.clientWidth;
                banner.scrollTo({
                    left: bannerWidth * currentIndex,
                    behavior: 'smooth'
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % total;
                scrollToCurrent();
            }

            // Hanya aktifkan otomatisasi pada mode responsif
            function checkResponsive() {
                if (window.innerWidth <= 768) {
                    return true;
                }
                return false;
            }

            let slideInterval;

            function startSlideshow() {
                if (checkResponsive()) {
                    slideInterval = setInterval(nextSlide, intervalTime);
                }
            }

            function stopSlideshow() {
                clearInterval(slideInterval);
            }

            // Mulai slideshow saat halaman dimuat
            startSlideshow();

            // Restart slideshow saat window di-resize
            window.addEventListener('resize', function() {
                stopSlideshow();
                startSlideshow();
            });
        });
    </script>

        
<!-- End Banner Section -->

<!-- Produk Section -->

    <div class="c-produk">
        <div class="h-produk">
            <h4>Produk</h4>
        </div>
        <div class="c-box-produk">

            @for ($i = 0; $i < 30; $i++)
            <div class="box-produk">
                <div class="tag-promo">Promo</div>
                <img src="img/contoh.png" alt="">
                <div class="p-content">
                    {{-- <p class="p-kategory">Minuman Kaleng</p> --}}
                    <h5>Susu Bearbrend Kaleng 100ml</h5>
                    <p class="barcode"><span>Kode.</span>21314141511</p>
                    <div class="p-harga">
                        <h4 class="h-harga">Rp.724.000</h4>
                        <a href="" class="p-add">+ Add</a>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>

<!-- End Produk Section -->

@endsection
