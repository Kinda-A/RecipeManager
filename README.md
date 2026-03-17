# Recipe Manager Lab

**Name:** kinda
**Course:** COSC434  
**Lab:** Middleware Lab - Recipe App

## What I implemented

- Added demo login and logout routes using session flags.
- Created middleware `EnsureUserIsLoggedIn` to protect recipe management routes.
- Registered middleware alias `'demo.auth'` in `Kernel.php`.
- Applied middleware to a single route (`/recipes/create`) and a group of protected routes (create, store, edit, update, delete).
- Public routes (`index` and `show`) remain accessible without login.

## Testing

- Single protected route tested: `/recipes/create`
- Protected middleware group applied and verified logically.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. [rest of original README…]
