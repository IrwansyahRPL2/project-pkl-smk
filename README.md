## UWAIS IQRA
- Bookmark Bacaan Quran
- Base on Laravel 11
- PHP 8.2 Mulai dikembangkan 26 Agustus 2024
- Sudah ditambahkan multi auth

## Tujan
Aplikasi ini bertujuan untuk mencatat bacaan quran hingga hatam penggunanya.

## Author
- Arie Musbandi (@ariemus-smk)

## Instalasi development
1. Clode Repositories
    * `git clone git@github.com:ariemus-smk/laravel-iqra.git laravel-iqra`
    > Repositories ini private, pastikan komputer anda telah terhubung dengan akun github via SSH Key
2. Masuk ke direktory uwais-iqra
    * `cd uwais-iqra`
3. Buat file .env
    * `cp .env.example .env`
4. Configurasi .env tambahkan parameter database dan mailer SMTP
5. Lakukan instalasi dengan composer
    * `composer install`
6. Lakukan instalasi paket js
    * `npm install`
    * `npm run build`
7. Generate app key
    * `php artisan key:generate`
8. Migrasi database dilanjutkan dengan seeding
    * `php artisan migrate`
    * `php artisan db:seed`
9. Jalankan aplikasi
    * `php artisan serve`

## Aturan Pengembangan
1. Anda harus membuat branch baru sesuai dengan fitur yang dibuat
2. Lakukan Pull Request jika fitur sudah selesai di buat
3. Jangan lupa berkoordinasi
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
