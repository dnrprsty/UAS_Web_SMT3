# Aplikasi CRUD Post Berbasis PHP OOP (MVC)

## Deskripsi Proyek
Aplikasi ini merupakan aplikasi web berbasis **PHP Object Oriented Programming (OOP)** yang menerapkan konsep **MVC (Model – View – Controller)**.  
Aplikasi digunakan untuk mengelola data **Post (Artikel)** yang memiliki fitur **Login**, **CRUD (Create, Read, Update, Delete)**, **Search**, serta **UI modern dengan animasi CSS**.

Aplikasi ini dikembangkan menggunakan:
- PHP 8.x
- MySQL
- Apache (XAMPP Linux)
- Bootstrap 5
- CSS Custom (Glassmorphism + Gradient UI)

Struktur aplikasi dirancang modular agar mudah dikembangkan dan dipelihara.

---

## Tujuan Pembuatan
- Menerapkan konsep **OOP dan MVC** pada PHP
- Memahami sistem **routing manual menggunakan `.htaccess`**
- Mengimplementasikan **CRUD database MySQL**
- Membuat tampilan UI modern dan interaktif
- Menjadi bahan **tugas UAS / proyek akhir**

---

## Teknologi yang Digunakan
| Teknologi | Keterangan |
|---------|-----------|
| PHP | Backend logic (OOP) |
| MySQL | Database |
| Apache | Web Server |
| XAMPP | Local Server (Linux) |
| Bootstrap 5 | UI Framework |
| CSS | Animasi & Glassmorphism |
| JavaScript | Interaksi dasar |

---

## Struktur Folder
```bash
app_oop_modular/
│
├── app/
│ ├── Core/
│ │ ├── App.php
│ │ ├── Controller.php
│ │ └── Database.php
│ │
│ ├── Controllers/
│ │ ├── AuthController.php
│ │ └── PostController.php
│ │
│ └── Models/
│ ├── User.php
│ └── Post.php
│
├── public/
│ ├── css/
│ │ └── style.css
│ └── js/
│ └── app.js
│
├── views/
│ ├── layouts/
│ │ ├── header.php
│ │ └── footer.php
│ │
│ ├── auth/
│ │ └── login.php
│ │
│ └── posts/
│ ├── index.php
│ ├── create.php
│ └── edit.php
│
├── .htaccess
├── index.php
└── README.md
```

---

## Alur Kerja Program
1. User mengakses aplikasi melalui browser
2. `.htaccess` mengarahkan semua request ke `index.php`
3. `App.php` membaca URL dan menentukan:
   - Controller
   - Method
   - Parameter
4. Controller memanggil Model untuk mengolah data
5. Data dikirim ke View untuk ditampilkan
6. View dirender dengan layout dan CSS animasi

---

## Fitur Aplikasi

### 1. Login
- User harus login untuk mengakses menu post
- Sistem login menggunakan session
- Terdapat role **admin** dan **user**

### 2. CRUD Post
- **Create**: Menambahkan data post
- **Read**: Menampilkan daftar post
- **Update**: Mengedit post
- **Delete**: Menghapus post dengan konfirmasi

### 3. Search
- Pencarian post berdasarkan judul

### 4. UI & Animasi
- Dark Mode
- Glassmorphism Card
- Gradient Button
- Hover & Transition Animation
- Responsive (Mobile Friendly)

---

## Struktur Database

### Database
```sql
CREATE DATABASE oop_app;
```
### Tabel users
```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255),
  role ENUM('admin','user')
);
```
### Tabel posts
```sql
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  content TEXT
);
```

## Cara Menjalankan Aplikasi 

### Jalankan XAMPP
```bash
sudo /opt/lampp/lampp start
```
### Simpan Folder 
```bash
/opt/lampp/htdocs/projects/app_oop_modular
```
### Akses Browser
```bash
http://localhost/projects/app_oop_modular/
```

## Screenshot 
### Halaman Login
!()[ss/login.png]
