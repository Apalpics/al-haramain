Al Haramain Perfumes & Thawbs
E-Commerce Web Application (Laravel MVC)
👥 Group Members
Name	Matric No
Abdulghafar Abdullahi	2311279
Newal Ysehak Abduljelil	2315376
ADIL EMADELDIN ABDELKARIM	2320799
Abubakar Abdulsalam Nataala	2328587
Siham Jemal Hassen	2320670
Marwa Mustafa Ali	2110126
📝 1.0 Executive Summary

Al Haramain Perfumes & Thawbs is a student-run business at IIUM specializing in alcohol-free perfumes and traditional thawbs.
Operations were previously managed manually through WhatsApp messages, cash payments, and physical meetups.

This project transforms the business into a fully functional e-commerce platform built with Laravel MVC, enabling:

Online product browsing

Add-to-cart functionality

Full checkout flow

Order history tracking

Admin dashboard (CRUD)

Mobile-responsive design

The system offers a modern, scalable, and Shariah-compliant shopping experience.

❗ 2.0 Problem Statement

The business faced several limitations:

❌ Limited reach (only on-campus buyers)

❌ Manual inventory tracking

❌ No online checkout

❌ Slow order processing

❌ No analytics or performance tracking

❌ High risk of human errors

This system solves all of the above by digitizing the business.

💡 3.0 Proposed Web Application Solution
3.1 MVC Architecture

Models: User, Product, Order, OrderItem

Views: Blade Templates

Controllers:
ProductController, CartController, CheckoutController, OrderController

3.2 Authentication & Roles

Laravel Breeze authentication

Role separation: Admin vs Customer

Secure login, registration & session handling

3.3 Admin Product Management (CRUD)

Admins can:

✔ Add new products

✔ Edit products

✔ Delete products

✔ Upload images

✔ Set prices, categories, stock

3.4 Shopping Cart & Checkout

Customers can:

Add items to cart

Update quantity

Remove items

Place orders

3.5 Admin Dashboard

Includes:

Total sales

Recent orders

Pending orders

Product count

3.6 Responsive Design

Built with:

TailwindCSS

Blade

Mobile-first layout

🎯 4.0 Target Users & Stakeholders
4.1 Customers

Browse, shop, checkout, and track orders.

4.2 Administrators

Manage all products, orders, and users.

4.3 Business Owner

Monitor sales performance and track growth.

🎯 5.0 Project Goals

Build complete Laravel e-commerce system

Implement secure user authentication

Provide a functional admin dashboard

Create responsive UI/UX

Upload project to GitHub for evaluation

🛠 6.0 Technical Specifications
6.1 Entity Relationship Diagram (ERD)

6.2 Sequence Diagram

6.3 System Architecture

Frontend: Blade + TailwindCSS

Backend: Laravel 10 (PHP 8.2)

Database: SQLite / MySQL

Authentication: Laravel Breeze

Hosting: Localhost (development mode)

🖼 7.0 UI Mockups
Mockup 1

Mockup 2

Mockup 3

🖥 8.0 System Screenshots
Home Page

Shop Page

Product Details Page

Cart Page

Checkout Page

Order Success Page

🛠 Admin Panel
Admin Dashboard

Admin Orders

Admin Products

⚠️ 9.0 Challenges & Difficulties

Route naming conflicts

Middleware access restrictions

CRUD validation errors

Checkout calculation logic

Database migration issues

UI consistency

Managing storage & public assets

📚 10.0 References

Laravel Documentation — https://laravel.com/docs

TailwindCSS Documentation — https://tailwindcss.com/docs

PHP Official Docs — https://php.net

MySQL Reference — https://dev.mysql.com/doc