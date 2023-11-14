<p align="center"><img src="public\backend\assets\images\foodify-light-logo.png" width="400" alt="Foodify Logo"></p>

## Cara Penggunaan

- Clone repository ini
- Jalankan perintah `composer install`
- Copy file `.env.example` menjadi `.env`
- Jalankan perintah `php artisan key:generate`
- Buat database baru
- Sesuaikan konfigurasi database pada file `.env`
- Jalankan perintah `php artisan migrate --seed` (Seeder hanya baru untuk user `admin` dan passwordnya adalah `admin`)
- Jalankan perintah `php artisan serve`
- Buka browser dan akses `http://localhost:8000`
