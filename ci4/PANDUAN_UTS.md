# Panduan Singkat - UTS (CodeIgniter 4)

## Menjalankan
```
cd C:\laragon\www\prak_PW2\UTS\ci4
php spark serve
```
Buka http://localhost:8080 -> diarahkan ke /login.
Login utama: **Nabila / Ardina** (diatur di `app/Controllers/Auth.php`).
Login latihan Project6: **admin / 12345** (`app/Controllers/Project6.php`).

Pakai virtual host Laragon? Ubah `app.baseURL` di file `.env`.

## Peta file lama -> baru
| Lama | Baru |
|---|---|
| index.php / about.php / portofolio.php | `Home` controller + `app/Views/home/*` |
| login.php + cek_login.php | `Auth` controller + `app/Views/login.php` |
| session_start() + isset($_SESSION) | `app/Filters/AuthFilter.php` (alias `auth`, dipasang di Routes) |
| navbar + CSS berulang | `app/Views/layout/template.php` |
| Project1, Project2 (HTML) | `public/Project1`, `public/Project2` (tetap utuh) |
| Project3, 4, 5 (PHP echo) | `Project3/4/5` controller + `app/Views/project3/4/5` |
| Project6 | `Project6` controller + `app/Views/project6/*` |
| img/ | `public/img/` |
| upload Project6/img | `public/uploads/biodata/` |

## URL baru
- /  /about  /portofolio  /login  /logout
- /project3/first | biodata | ketiga | tugas
- /project4/perulangan | tugas_1 | tugas_2 | tugas_3
- /project5/array1 | array2 | array3 | tugas
- /project6/login | biodata | form_upload
- /Project1/prak_3.html, /Project2/prak_1.html, dst. (file statis)

## Menambah halaman baru
1. Tambah method di Controller.
2. Tambah satu baris route di `app/Config/Routes.php`.
3. Buat view yang diawali `$this->extend('layout/template')`.
