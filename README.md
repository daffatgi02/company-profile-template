

## 🚀 Ringkasan Proyek

Landing page lengkap berbasis Laravel 9 dengan arsitektur komponen modular, SEO dinamis, dan desain responsif. Codebase mengikuti best practice Laravel dengan pemisahan logika yang bersih dan mudah dikembangkan.

---

## ✨ Fitur Utama

### Yang Anda Dapatkan

- ✅ **Landing Page Lengkap Laravel 9** – Siap pakai untuk company profile  
- ✅ **Arsitektur Komponen Modular** – Blade Component reusable  
- ✅ **Sistem SEO Dinamis** – Meta tag per halaman, Open Graph, Twitter Card, Schema.org  
- ✅ **Desain Responsif** – Mobile-first dengan Bootstrap 5  
- ✅ **Animasi Interaktif** – AOS scroll animation, hover, dan transisi halus  
- ✅ **Form Kontak Aktif** – Validasi & tampilan sukses  
- ✅ **Kustomisasi via Config** – Ubah informasi perusahaan dari file konfigurasi  
- ✅ **Struktur Kode Bersih** – PSR-12, rapi, mudah dirawat  

### Fitur Teknis

- Laravel 9 + Vite  
- Bootstrap 5 & CSS custom  
- Font Awesome + Google Fonts  
- Validasi via Laravel Form Request  
- SEO service untuk kelola meta tag  
- Navigasi dan layout mobile-friendly

---

## 📦 Cara Instalasi

### Syarat:
- PHP 8.0+
- Composer
- Node.js & NPM
- Apache/Nginx

### Langkah Instalasi:

1. **Masuk ke folder proyek**
   ```bash
   cd nama-folder-anda
````

2. **Instalasi dependency PHP**

   ```bash
   composer install
   ```

3. **Instalasi dependency JavaScript**

   ```bash
   npm install
   ```

4. **Setup environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi data perusahaan di `.env`**

   ```env
   COMPANY_NAME="Nama Perusahaan Anda"
   COMPANY_DOMAIN="domainanda.com"
   COMPANY_EMAIL="info@domainanda.com"
   COMPANY_PHONE="+62 812 3456 7890"
   COMPANY_ADDRESS="Alamat Lengkap Perusahaan"

   SEO_DEFAULT_TITLE="Nama Perusahaan - Tagline"
   SEO_DEFAULT_DESCRIPTION="Deskripsi singkat perusahaan untuk SEO"
   ```

6. **Build aset frontend**

   ```bash
   npm run build
   ```

7. **Jalankan server lokal**

   ```bash
   php artisan serve
   ```

Buka `http://localhost:8000` untuk melihat hasilnya.

---

## 🎨 Kustomisasi SEO

### SEO Per Halaman

Atur SEO dari controller:

```php
public function about(): View
{
    $seoData = SeoService::generateMeta([
        'title' => 'Tentang Kami - Solusi Teknologi',
        'description' => 'Profil perusahaan, visi misi, dan tim ahli kami.',
        'keywords' => 'tentang kami, teknologi, perusahaan',
        'image' => '/images/about-og-image.jpg',
    ]);

    $jsonLd = SeoService::generateJsonLd();

    return view('pages.about', compact('seoData', 'jsonLd'));
}
```

**Opsi SEO yang tersedia:**

* `title` – Judul halaman
* `description` – Meta description
* `keywords` – Kata kunci SEO
* `image` – Gambar Open Graph / Twitter Card
* `url` – URL halaman (opsional)
* `type` – Tipe Open Graph (default: website)

### SEO Global (Default)

Edit file `config/seo.php` atau gunakan `.env`:

```env
SEO_DEFAULT_TITLE="Nama Perusahaan - Tagline"
SEO_DEFAULT_DESCRIPTION="Deskripsi default untuk semua halaman"
SEO_TWITTER_SITE="@akun_twitter_anda"
```

---

## 📁 Struktur Proyek

```
├── app/
│   ├── Http/Controllers/        # Controller halaman
│   ├── Services/                # SEO service dan logika tambahan
│   └── View/Components/         # Komponen Blade
├── config/
│   ├── company.php              # Konfigurasi data perusahaan
│   └── seo.php                  # Pengaturan SEO default
├── resources/
│   ├── views/
│   │   ├── layouts/             # Template utama
│   │   ├── components/          # Komponen UI
│   │   │   ├── layout/          # Header, footer, navbar
│   │   │   └── sections/        # Hero, about, layanan, dst.
│   │   └── pages/home.blade.php # Halaman utama
│   ├── css/app.css              # Gaya utama
│   └── js/app.js                # JavaScript
└── routes/web.php               # Daftar rute aplikasi
```

---

## 🛠 Kustomisasi

### Informasi Perusahaan

Edit file `config/company.php` atau `.env`

### Gaya Visual

* Ubah warna atau layout dari `resources/css/app.css`
* Gunakan Bootstrap utility atau CSS custom

### Konten

* Edit bagian teks & gambar di `resources/views/components/sections/`
* Jangan hapus class jika tidak paham dampaknya terhadap desain

### Tambah Halaman Baru

1. Tambah method di controller
2. Buat view baru (extend layout utama)
3. Tambahkan rute di `routes/web.php`
4. Update link navigasi jika perlu

---

## 🎯 Komponen Penting

* **Hero Section** – Tampilan awal dengan animasi statistik
* **Fitur** – Layanan utama dengan efek hover
* **Tentang** – Profil perusahaan dan tim
* **Layanan** – Daftar layanan + proses kerja
* **Testimoni** – Review klien dengan bintang
* **Kontak** – Formulir aktif + validasi
* **Navigasi & Footer** – Responsive + scroll effect

---

## 📱 Desain Responsif

* Grid Bootstrap mobile-first
* Navigasi sentuh dan UX optimal
* Ukuran gambar dioptimalkan otomatis
* Performa tinggi di semua device

---

## 🧪 Tested On

Proyek ini telah diuji dan berjalan stabil di lingkungan berikut:

```bash
PHP     : 8.2.26 (cli) (built: Mar  5 2024 21:05:36) (Zend Engine v4.2.26)
Node.js : v18.20.8
NPM     : 10.8.2
OS      : Windows 10 (gitbash)
```

---
## 🏆 Keunggulan Produk

### 1. **Plug & Play**
Tinggal install dan jalankan. Tidak perlu coding dari nol.

### 2. **Production Ready**
Kode berkualitas production dengan best practices.

### 3. **Mudah Dikembangkan**
Struktur modular yang mudah dipahami dan dimodifikasi.

### 4. **Dokumentasi Lengkap**
Panduan instalasi, API docs, dan contoh penggunaan.


## 📞 Hubungi Kami
**@SikatNgoding**
- 📱 WhatsApp: +6281337547772
- 📧 Email: sikatngoding@gmail.com