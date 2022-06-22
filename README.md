# Forward Chaining System

### Penggunaan Algoritma Forward Chaining untuk memprediksi penyakit dari tanaman mangga

<br>
<hr>

### Instalasi

- Pastikan untuk menggunakan PHP versi 7^
- Siapkan XAMPP atau RDBMS Lainnya
- Copy .env.example menjadi .env
- Buat Database dengan nama sistem_pakar (sesuai .env) atau silakan ubah nama database yang ada di .env 

<br>
Silakan jalankan perintah berikut ini sebagai permulaan setelah clone repository
<br><br>

```
composer install
```

<br>
Setelah itu diikuti dengan perintah berikut ini
<br><br>

```
php artisan migrate
```

<br>
Setelah itu silakan juga jalankan perintah 
<br><br>

```
php artisan storage:link
```

<br>
Sebagai Catatan, sebelum melakukan migrasi silakan terlebih dahulu membuat folder dengan nama Foto Gejala dan Foto Penyakit di dalam folder storage. Lalu jangan lupa untuk melakukan seeding database setelah berhasil melakukan migrasi dan storage link.
<br><br>

```
php artisan db:seed
```

<br>
Untuk menjalankan app silakan masukkan perintah
<br><br>

```
php artisan serve
```

<br>
Apabila terjadi error saat mengakses url yang diberikan oleh laravel dan meminta seperti key maka silakan jalankan perintah berikut ini:
<br><br>

```
php artisan key:generate
```