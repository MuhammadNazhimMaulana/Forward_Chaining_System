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
Lalu jangan lupa untuk melakukan seeding database setelah berhasil melakukan migrasi
<br><br>

```
php artisan db:seed
```

<br>
Setelah itu silakan juga jalankan perintah 
<br><br>

```
php artisan storage:link
```

<br>
Untuk menjalankan app silakan masukkan perintah
<br><br>

```
php artisan serve
```