# ⚡ PHP Micro Framework – Custom MVC Routing System

Welcome to **phpFrameworkLando**, a lightweight and educational PHP framework designed to teach and demonstrate core concepts of routing, request/response handling, and MVC architecture — all built from scratch without relying on large-scale frameworks.

---

## 🚀 Features

✅ Minimal and clean MVC structure  
✅ Fast and simple routing with [FastRoute](https://github.com/nikic/FastRoute)  
✅ PSR-4 compliant autoloading  
✅ Custom HTTP Request and Response classes  
✅ Easily extendable for middleware, templating, and more  
✅ Ready to run with built-in PHP server or [Lando](https://lando.dev/)

---

## 📁 Project Structure
```
phpFrameworkLando/
├── app/                             # Application code (controllers, models, etc.)
│   └── Controllers/                 # Controller classes that handle requests
│       ├── HomeController.php       # Handles the root "/" route, returns "Hello World"
│       └── PostController.php       # Handles "/posts/{id}" routes, shows a post by ID
├── framework/                       # Custom micro-framework core code
│   ├── Http/                        # Handles HTTP-specific logic
│   │   ├── Kernel.php               # Central dispatcher: routes requests to controllers or closures
│   │   ├── Request.php              # Parses incoming HTTP requests (GET/POST/cookies/etc.)
│   │   └── Response.php             # Builds and sends HTTP responses (content, headers, status)
│   └── Routing/                     # Routing system
│       └── Route.php                # Static class to define GET/POST routes
├── public/                          # Public web root – exposed to the web server
│   └── index.php                    # Entry point that boots the app and handles incoming requests
├── routes/                          # Routes are defined here
│   └── web.php                      # Defines all web routes and maps them to controllers
├── vendor/                          # Composer-managed dependencies (autoload, FastRoute, etc.)
├── .gitignore                       # Git config to ignore vendor, cache, logs, etc.
├── .lando.yml                       # Lando configuration file (if using Lando for dev)
├── composer.json                    # Composer config (autoload, dependencies, namespace mapping)
├── composer.lock                    # Exact versions of installed Composer packages
```
## 🧠 How It Works
- index.php is the front controller that boots the app.

- Request collects data from PHP superglobals.

- Kernel matches the route and dispatches to:

- A closure, or

- A controller method ([Controller::class, 'method'])

- Response sends headers and content back to the browser.



## 🖥️ Quick Start
1. Clone the Repository
```
git clone https://github.com/your-username/phpFrameworkLando.git
cd phpFrameworkLando
```
2. Install Dependencies
```
composer install
```
3. Serve the App
Option A — Built-in PHP server:
```
php -S localhost:8000 -t public
```
Option B — Lando (if using):
```
lando start
```
Then visit:
```
http://localhost:8000
http://localhost:8000/posts/1
```
## 🧪 Example Output
URL	Output

![image](https://github.com/user-attachments/assets/4a2f5f66-03d3-4b41-b4ee-98027d81bd54)

/posts/3

![image](https://github.com/user-attachments/assets/3863fcde-20c9-4885-86ef-d34cf7a0c694)

## 📦 Composer Autoloading
Ensure autoload is working with:
```
composer dump-autoload
```
Namespace structure follows PSR-4:
```
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Somecode\\Framework\\": "framework/"
    }
}
```
## 🛠️ Technologies Used
- 🐘 PHP 8+ – Core programming language

- 📦 Composer – Dependency and autoloading manager

- ⚡ FastRoute – High-performance routing library

- 🧠 PSR-4 Autoloading – Standard for organizing PHP classes

- 🛤️ Custom Micro-framework – Lightweight HTTP routing and dispatch system

- 🖥️ Lando (optional) – Local development environment using Docker

- 🌐 Built-in PHP Server – Quick local testing (php -S)

