# Laravel + Docker + Nginx + PHP-FPM

This repository is a universal Laravel development template using Docker. It includes a full stack with Nginx, PHP-FPM, and MySQL. It is designed to be a clean starting point for any Laravel-based application or modular structure.

---

## 🐳 Docker Stack

- **nginx** – Serves the application
- **php-fpm** – Handles PHP execution
- **MySQL 8** – Database
- **Volumes** – Persistent database data
- **Composer** – Included in the PHP container

---

## 🚀 Getting Started

### 1. Start containers

```bash
docker-compose up -d
```

### 2. Install Laravel (first time only)

```bash
docker-compose exec app composer create-project laravel/laravel .
```

### 3. Visit your application

http://localhost:8000

---

## 📦 Adding `nwidart/laravel-modules` (Optional)

To enable modular architecture, follow the steps below (Laravel 12+):

1. Enter the container:

```bash
docker-compose exec app bash
```

2. Require the package:

```bash
composer require nwidart/laravel-modules
```

3. Publish the configuration:

```bash
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
```

4. Create a new module:

```bash
php artisan module:make YourModuleName
```

📚 Full documentation: [https://laravelmodules.com/docs/12/getting-started/installation-and-setup](https://laravelmodules.com/docs/12/getting-started/installation-and-setup)

---

## ⚠️ Known Issues

- **Missing LF at end of file**: Ensure your editor is configured to insert a final newline.
- **Unrecognized Service Provider**: If a module fails to load, run:

```bash
composer dump-autoload
php artisan config:clear
```

- **auth middleware errors**: If your module route includes `auth`, ensure you're logged in or remove the middleware for testing.

---

## 💡 EditorConfig

Add this `.editorconfig` file to enforce LF line endings:

```ini
[*]
end_of_line = lf
insert_final_newline = true
charset = utf-8
```
