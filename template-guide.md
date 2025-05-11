# 🚀 How to Create a New Project from this Template

Follow these steps to clone this universal Laravel Docker setup and start a fresh project.

---

## 🧱 1. Clone this repository

```bash
git clone https://github.com/jbpettersen/laravel_docker_nginx.git my-new-project
cd my-new-project
```

---

## 🧼 2. Remove Git history

```bash
rm -rf .git
git init
git remote add origin https://github.com/<yourname>/<yourproject>.git
git add .
git commit -m "Initial commit from Laravel Docker Template"
git push -u origin main
```

---

## ⚙️ 3. Rebuild Docker environment

```bash
docker-compose up -d
docker-compose exec app composer create-project laravel/laravel .
```

---

## 📦 4. (Optional) Add modular support

See README.md for steps to install `nwidart/laravel-modules`.

---

## ✅ Tip

Add `.editorconfig` to enforce consistent line endings and avoid issues with PHP class loading and route caching.
