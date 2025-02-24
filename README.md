# Hệ Thống Quản Lý Sản Phẩm

## Giới thiệu
Đây là hệ thống quản lý sản phẩm được xây dựng bằng Laravel Framework, cho phép người dùng quản lý danh mục và sản phẩm với đầy đủ các chức năng cơ bản.

## Yêu cầu hệ thống
- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM

## Cài đặt

1. Clone repository
```bash
git clone đường dẫn repository
```

2. Cài đặt dependencies
```bash
composer install
npm install
```

3. Tạo file .env
```bash
cp .env.example .env
```

4. Tạo key ứng dụng
```bash
php artisan key:generate
```

5. Cấu hình database trong file .env

6. Chạy migration
```bash
php artisan migrate
```

## Cấu trúc Database

### Users
- Quản lý thông tin người dùng
- Các trường chính: name, email, password,..

### Categories
- Quản lý danh mục sản phẩm
- Các trường chính: name, description

### Products
- Quản lý thông tin sản phẩm
- Các trường chính: name, price, description, category_id,..

## Tính năng chính

### Quản lý người dùng
- Đăng ký tài khoản
- Đăng nhập/Đăng xuất

### Quản lý danh mục
- Xem danh sách danh mục

### Quản lý sản phẩm
- Xem danh sách sản phẩm

## Khởi chạy ứng dụng

1. Chạy development server
```bash
php artisan serve --port=1582
```

2. Compile assets
```bash
npm run dev
```

## Công nghệ sử dụng
- Laravel 10.x
- Laravel Breeze (Authentication)
- MySQL
- Blade Template Engine
- TailwindCSS

