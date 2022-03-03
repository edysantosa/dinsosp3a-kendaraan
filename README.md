
<p align="center"><a href="https://dissosp3a.baliprov.go.id/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/1/10/Coat_of_arms_of_Bali.svg" width="200"></a></p>

## Aplikasi Dashboard Dinsos P3A Prov Bali

Aplikasi ini akan menampung semua modul yang akan dibuat kedepannya oleh Dinas Sosial P3A:

## How To

Aplikasi ini menggunakan Laravel 8, dan memanfaatkan sepenuhnya laravel-mix untuk mengkompilasi javascript dan css dari template bootstrap 4 yang ada.
Untuk memulai ngoding, cek langkah-langkah berikut

### Langkah-langkah Developement

- Install PHP (>= PHP7.3), composer, nodejs (untuk npm)
- Pull repo ini menggunakan git
- Buat file konfigurasi ```.env``` baru copy dari file ```.env.example```
- Jalankan perintah-perintah berikut di command line
  - Generate key baru ```php artisan key:generate```
  - Install dependency php ```composer install``` 
  - Install dependency javasript ```npm install```

#### Apabila masih ada masalah (layar browser kosong), coba jalankan perintah berikut
```
php artisan cache:clear
php artisan clear-compiled
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache
composer dump-autoload
```

## Compiling Javascript
TBA