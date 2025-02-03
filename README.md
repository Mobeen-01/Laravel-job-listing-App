# LaraGigs 🎯 - Laravel Job Listing Platform

[![Laravel](https://img.shields.io/badge/Laravel-9.x-red.svg?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.x-blue.svg?style=flat&logo=php)](https://www.php.net)
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

LaraGigs is a **Laravel-based job listing platform** where users can **find or post Laravel-related jobs and projects**. Built as part of the **[Laravel From Scratch 2022](https://www.youtube.com/watch?v=MYyJ4PuL4pY)** YouTube course.

![LaraGigs Screenshot](public/images/screen.png)

---

## ✨ Features

✅ **Post and manage Laravel-related job listings**  
✅ **Search for Laravel jobs with filtering options**  
✅ **User authentication (Register/Login)**  
✅ **File uploading for job listings**  
✅ **Database seeding with dummy data**  
✅ **Good pagination for smooth navigation**  
✅ **Responsive UI**  

---

## 🚀 Getting Started

### 📌 Prerequisites
Ensure you have the following installed:

- PHP `8.x`
- Laravel `9.x`
- MySQL or SQLite (or any preferred database)
- Composer
- Node.js & npm (for frontend dependencies)

---

### 🛠️ Installation & Setup

#### 1️⃣ Clone the repository
```sh
git clone https://github.com/your-username/laragigs.git
cd laragigs
```

#### 2️⃣ Install dependencies
```sh
composer install
npm install
```

#### 3️⃣ Configure environment variables
```sh
cp .env.example .env
```
- Set up your database details inside `.env`

#### 4️⃣ Generate application key
```sh
php artisan key:generate
```

#### 5️⃣ Run migrations
```sh
php artisan migrate
```

---

## 📆 Seeding the Database

A seeder file has been created to add **fake job listings** against **User ID 1**.  
To run the seeder, execute:
```sh
php artisan db:seed --class=UserListingSeeder
```
Make sure you have at least **one user in the database** before running the seeder.

---

## 📂 File Uploading Setup

Laravel stores uploaded files in `storage/app/public`. To make them publicly accessible, run:
```sh
php artisan storage:link
```

---

## 📚 Pagination Setup

LaraGigs includes **good pagination** for smooth navigation across job listings.  
Pagination is implemented using Laravel’s built-in pagination features:
```php
$listings = Listing::paginate(10);
```
Modify the number of items per page as needed!

---

## 🎨 Frontend (Optional)
If your project includes Tailwind CSS/Vue.js, you can compile assets using:
```sh
npm run dev
```
For production:
```sh
npm run build
```

---

## 🐝 License

LaraGigs is open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.

---

## 🔗 Connect & Share

If you find this project helpful, give it a ⭐ on GitHub and share it!  

### 📢 Best Hashtags to Use:
```
#Laravel #PHP #WebDevelopment #LaravelJobs #OpenSource #DevCommunity #FullStackDevelopment #JobPortal #BackendDevelopment #Pagination #Seeder
```

---

Happy coding! 🚀
