# ⚙️ Laravel Modular Project Setup Guide (Captain's Edition)

This guide provides a clean and repeatable procedure for building modular Laravel projects using Docker and `nwidart/laravel-modules`.

---

## 🧱 Step 1: Clone and Bootstrap Project

```bash
git clone https://github.com/jbpettersen/laravel_docker_nginx.git myproject
cd myproject
rm -rf .git  # Optional: clean git history
```

```bash
docker-compose up -d
docker-compose exec app composer create-project laravel/laravel .
```

Check:  
🌐 Visit `http://localhost:8000` and confirm Laravel welcome screen.

---

## 🔐 Step 2: Install Node and Authentication (Laravel Breeze Livewire)

```bash
docker-compose exec app apt update
docker-compose exec app apt upgrade
docker-compose exec app apt install node
```

```bash
docker-compose exec app composer require laravel/breeze --dev
docker-compose exec app php artisan breeze:install livewire
docker-compose exec app npm install
docker-compose exec app npm run build
docker-compose exec app php artisan migrate
```

Check:  
✅ Routes `/login`, `/register`, `/dashboard` now available.

---

## 🔧 Step 3: Install Laravel Modules

```bash
docker-compose exec app composer require nwidart/laravel-modules
docker-compose exec app php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
docker-compose exec app composer dump-autoload
```
---

## 🧩 Step 4: Create a New Module

```bash
docker-compose exec app php artisan module:make Kalkyle
```
---
Check (if this is the first module):  
📂 Confirm `Modules/` directory is created.

Important! Add a merge-plugin to the extra section in composer.json:

```json
"extra": {
    "laravel": {
        "dont-discover": []
    },
    "merge-plugin": {
        "include": [
            "Modules/*/composer.json"
        ]
    }
},
```
```bash
docker-compose exec app composer dump-autoload
```

## 🛡️ Step 5: Protect Module with Auth

Inside `Modules/Kalkyle/Routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/kalkyle', function () {
        return view('kalkyle::index');
    });
});
```

---

## ✅ Checklist Before Starting Work

- [ ] Laravel welcome screen works
- [ ] Auth (login/register/dashboard) routes functional
- [ ] Module is listed via `php artisan module:list`
- [ ] Protected route under `/kalkyle` tested and requires login

---

## 💡 Tips

- Always run `composer dump-autoload` after creating or modifying modules.
- Run `php artisan config:clear` and `php artisan view:clear` if views or configs misbehave.
- Use `@auth` and `@guest` Blade directives for conditional UI rendering.

---

Happy coding, Captain! 🧭
