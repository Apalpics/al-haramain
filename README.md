 Al Haramain Perfumes & Thawbs
E-Commerce Web Application (Laravel MVC)
 Group Members
Name	Matric No
Abdulghafar Abdullahi	2311279
Newal Ysehak Abduljelil	2315376
ADIL EMADELDIN ABDELKARIM	2320799
Abubakar Abdulsalam Nataala	2328587
Siham Jemal Hassen	2320670
Marwa Mustafa Ali	2110126
1.0 Executive Summary

Al Haramain Perfumes & Thawbs is a student-run business inside IIUM selling alcohol-free perfumes and traditional thawbs.
Their operations depend heavily on WhatsApp messaging, manual inventory tracking, and physical meetups.

This project converts the business into a fully functional Laravel MVC e-commerce platform with:

Online product browsing

Add to cart

Checkout

Order tracking

Admin dashboard

Mobile-responsive UI

The system provides a modern, scalable, Shariah-compliant online shopping experience.

2.0 Problem Statement

The business faces several limitations:

Limited reach — only campus customers know about the brand

Manual inventory — risk of mistakes

No online checkout

Slow order processing

No analytics

No visibility of product performance

3.0 Proposed Web Application Solution
3.1 MVC Architecture

Models: User, Product, Order, OrderItem
Views: Blade templates
Controllers: ProductController, CartController, CheckoutController, OrderController

3.2 Authentication & Roles

Laravel Breeze login system

Admin and Customer roles

Secure session handling

3.3 Product Management (Admin CRUD)

Admins can:

Add products

Edit products

Delete products

Upload images

Set categories and prices

3.4 Shopping Cart & Checkout

Customers can:

Add to cart

Update quantity

Remove items

Place orders

3.5 Admin Dashboard

Includes:

Total sales

Pending orders

Recent orders

Product count

3.6 Responsive Design

Built using TailwindCSS and Blade templates.

4.0 Target Users & Stakeholders
4.1 Customers

Browse products, add to cart, checkout, and view order history.

4.2 Administrators

Manage products, orders, and user data.

4.3 Business Owner

Expand reach and monitor sales performance.

5.0 Project Goals

Build a complete Laravel e-commerce system

Implement secure authentication

Provide Admin dashboard

Enhance UI/UX

Upload all work to GitHub for grading

6.0 Technical Specifications
6.1 Entity Relationship Diagram (ERD)

6.2 Sequence Diagram

6.3 Architecture

Frontend: Blade, Tailwind

Backend: Laravel 10, PHP 8.2

Database: SQLite/MySQL

Auth: Laravel Breeze

Hosting (local)

7.0 Mock-ups & UI Screens

Add all screenshots like this:

![Home](public/screenshots/home.png)
![Shop](public/screenshots/shop.png)
![Cart](public/screenshots/cart.png)
![Checkout](public/screenshots/checkout.png)
![Admin Dashboard](public/screenshots/admin-dashboard.png)

8.0 Challenges

Route naming issues

Middleware restrictions

CRUD bugs

Checkout logic

Database migration errors

UI consistency

9.0 References

Laravel Docs: https://laravel.com/docs

TailwindCSS: https://tailwindcss.com/docs

PHP Docs: https://php.net

MySQL Docs: https://dev.mysql.com/doc
