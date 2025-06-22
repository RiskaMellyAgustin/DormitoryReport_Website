

````markdown
# 🛏️ Aplikasi Pengaduan Dormitory (Asrama Mahasiswa)

Aplikasi web berbasis Laravel untuk menangani pengaduan dari penghuni asrama mahasiswa secara online.  
Project ini merupakan hasil pengembangan ulang dari repository milik [BayuPrayoga62](https://github.com/BayuPrayoga62), dengan penyesuaian khusus untuk lingkungan dormitory atau asrama kampus.

---

## ✨ Fitur Utama

- 🧑‍🎓 Registrasi dan login penghuni asrama
- 📝 Pengajuan laporan/pengaduan kondisi asrama (kerusakan, kenyamanan, dll)
- ✅ Verifikasi dan tindak lanjut pengaduan oleh petugas asrama
- 📊 Dashboard pengelolaan laporan dan status

---

## 🚀 Cara Menjalankan Proyek

### 1. Clone Repository

```bash
git clone https://github.com/RiskaMellyAgustin/DormitoryReport_Website.git
cd DormitoryReport_Website
````

### 2. Install Dependency PHP

```bash
composer install
```

### 3. Install Dependency Frontend (opsional)

```bash
npm install
npm run dev
```

### 4. Buat File `.env`

```bash
cp .env.example .env
```

Lalu edit bagian database:

```dotenv
DB_DATABASE=nama_database_mu
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate App Key

```bash
php artisan key:generate
```

### 6. Setup Database

Jika database kosong:

```bash
php artisan migrate
```

Atau jika sudah ada file `.sql` seperti `pengaduan_masyarakat3.sql`, import manual ke database menggunakan phpMyAdmin atau:

```bash
mysql -u root -p nama_database < pengaduan_masyarakat3.sql
```

### 7. Jalankan Server Laravel

```bash
php artisan serve
```

Akses melalui browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📂 Struktur Folder Utama

* `app/` → Logic backend (model, controller, middleware)
* `resources/views/` → Tampilan Blade
* `routes/web.php` → Routing utama aplikasi
* `database/` → Migration dan seeder
* `public/` → Asset publik

---

## 🛠 Teknologi yang Digunakan

* Laravel
* Blade Template
* MySQL / MariaDB
* TailwindCSS (opsional)
* PHP 7.4+ / 8.x

---

## 👤 Kredit & Kontribusi

Project ini awalnya dari:

* 🔗 [BayuPrayoga62 - GitHub](https://github.com/BayuPrayoga62)

Dikembangkan ulang dan dimodifikasi oleh:

* 👩‍💻 **Riska Melly Agustin**
  📧 [riska.agustin@student.president.ac.id](mailto:riska.agustin@student.president.ac.id)

---

## 📄 Lisensi

Open-source project. Silakan modifikasi atau kontribusi untuk pengembangan lebih lanjut.




