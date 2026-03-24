# 🏀 ProKick Store

<div align="center">

![ProKick Store](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

A modern, feature-rich e-commerce web application for selling sports shoes - built with **Laravel 12**, **Bootstrap 5**, and **Vite**.

[Live Demo](#) • [Report Bug](https://github.com/mmohamedr/prokick-store/issues) • [Request Feature](https://github.com/mmohamedr/prokick-store/issues)

</div>

---

## ✨ Features

- 🛍️ **Browse Products** - Explore our collection of premium sports shoes
- 🔍 **Advanced Search & Filtering** - Find exactly what you're looking for
- ❤️ **Wishlist** - Save your favorite items for later
- 🛒 **Shopping Cart** - Manage your purchases easily
- 💳 **Secure Checkout** - Safe payment processing
- 📦 **Order Management** - Track your orders in real-time
- 📱 **Fully Responsive** - Works seamlessly on all devices
- 🌙 **Dark Theme** - Eye-friendly interface
- ⚡ **Lightning Fast** - Optimized performance with Vite

---

## 🛠️ Tech Stack

| Component           | Technology                    |
| ------------------- | ----------------------------- |
| **Backend**         | Laravel 12, PHP 8.2+          |
| **Frontend**        | Bootstrap 5, Vite, JavaScript |
| **Database**        | MySQL                         |
| **Build Tool**      | Vite                          |
| **Testing**         | PHPUnit                       |
| **Package Manager** | Composer, npm                 |

---

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** `^8.2`
- **Composer** (latest version)
- **Node.js** `^18.0` & **npm** or **yarn**
- **MySQL** or compatible database
- **Git**

---

## 🚀 Quick Start

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/mmohamedr/prokick-store.git
cd prokick-store
```

### 2️⃣ Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3️⃣ Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4️⃣ Database Configuration

Update your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prokick_store
DB_USERNAME=root
DB_PASSWORD=
```

Then run migrations and seeders:

```bash
php artisan migrate --seed
```

### 5️⃣ Start Development Server

```bash
# Terminal 1 - PHP Server
php artisan serve

# Terminal 2 - Vite Dev Server
npm run dev
```

Visit `http://localhost:8000` in your browser

---

## 📦 Available Scripts

```bash
# Development
npm run dev          # Start Vite dev server
npm run build        # Build for production

# Laravel Commands
php artisan serve    # Start PHP built-in server
php artisan migrate  # Run migrations
php artisan db:seed  # Run seeders
php artisan tinker   # Interactive shell

# Testing
npm run test         # Run PHPUnit tests

# Database
php artisan make:migration  # Create new migration
php artisan make:model      # Create new model
php artisan make:controller # Create new controller
```

---

## 📁 Project Structure

```
prokick_store/
├── app/
│   ├── Http/Controllers/    # Application controllers
│   ├── Models/              # Eloquent models (User, Product, Order, OrderItem)
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database migrations
│   ├── seeders/             # Database seeders
│   └── factories/           # Model factories for testing
├── resources/
│   ├── views/               # Blade templates
│   │   ├── layouts/         # Layout templates
│   │   ├── pages/           # Page templates
│   │   ├── products/        # Product-related views
│   │   ├── cart/            # Shopping cart views
│   │   ├── checkout/        # Checkout views
│   │   └── wishlist/        # Wishlist views
│   ├── css/                 # Stylesheets
│   └── js/                  # JavaScript files
├── routes/
│   └── web.php              # Web application routes
├── config/                  # Configuration files
├── storage/                 # Application storage
└── tests/                   # Test files
```

---

## 🗄️ Database Schema

### Models

- **Users** - Customer accounts and authentication
- **Products** - Available sports shoes catalog
- **Orders** - Customer orders
- **OrderItems** - Individual items in orders

---

## 🔐 Security Features

- CSRF Protection
- SQL Injection Prevention
- XSS Protection
- Secure Password Hashing
- Environment Variable Protection

---

## 🐛 Troubleshooting

### Issue: `php artisan serve` throws error

```bash
# Clear cached configuration
php artisan config:clear

# Try again
php artisan serve
```

### Issue: Database connection fails

- Check `.env` database credentials
- Verify MySQL is running
- Ensure database exists: `php artisan migrate --force`

### Issue: Node modules missing

```bash
rm -rf node_modules package-lock.json
npm install
```

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is licensed under the **MIT License** - see the LICENSE file for details.

---

## 👤 Author

**Mohamed Ramadan**

- GitHub: [@mmohamedr](https://github.com/mmohamedr)
- Email: 7m7ohamed@gmail.com

---

## 🙏 Support

If you found this project helpful, please consider:

- ⭐ Giving it a star
- 🐛 Reporting bugs
- 💡 Suggesting features
- 📢 Sharing with others

---

## 📞 Contact & Support

For questions, suggestions, or feedback:

- 📧 Email: 7m7ohamed@gmail.com

---

<div align="center">

**[⬆ back to top](#-prokick-store)**

Made with ❤️ by Mohamed

</div>
