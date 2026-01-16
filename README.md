Group-Al-Haramain

Group C: Al Haramain Perfumes & Thawbs E-Commerce Web Application

MVC Web Application Proposal
Group Members

Leader Name: Abdulghafar Abdullahi — Matric No: 2311279

Name: Newal Ysehak Abduljelil — Matric No: 2315376

Name: ADIL EMADELDIN ABDELKARIM — Matric No: 2320799

Name: Abubakar Abdulsalam Nataala — Matric No: 2328587

Name: Siham Jemal Hassen — Matric No: 2320670

Name: Marwa Mustafa Ali — Matric No: 2110126

Title

Al Haramain Perfumes & Thawbs E-Commerce Web Application

1.0 Introduction

Al Haramain Perfumes & Thawbs is a student-run business operating inside IIUM, specializing in high-quality alcohol-free perfumes and traditional thawbs. Their current selling method depends heavily on in-person contact, WhatsApp communication, and manual stock tracking, making it difficult to scale or reach customers efficiently.

This project transforms the business into a fully functional Laravel MVC e-commerce platform, complete with product listings, an admin dashboard, user authentication, a shopping cart, order management, and a checkout system.

Our goal is to create a seamless, Shariah-compliant online shopping experience that reflects the brand identity of Al Haramain while solving real operational problems the business faces.

The platform is developed using Laravel, ensuring high security, scalability, clean architecture, and long-term maintainability.

2.0 Problem Statement

The business currently faces several operational challenges:

Limited Customer Reach
Only customers physically on campus know about the products.

Manual Sales & Inventory
Every order requires direct messaging and manual stock checking.

No Online Purchase System
Their existing 2302 website only displays products — customers cannot buy anything.

Inefficient Order Processing
Seller must meet customers, track orders manually, and send confirmations one by one.

Lack of Data & Sales Insights
There is no automatic tracking of best-selling items or customer history.

Inconsistent Branding
No unified online platform representing the business professionally.

This project addresses all these issues with a complete MVC-based e-commerce solution.

3.0 Proposed Web Application Solution

The system provides a complete online shopping experience using Laravel’s Model-View-Controller architecture, enabling clear separation of logic, efficient routing, and scalable development.

3.1 Laravel MVC Architecture

Models: Product, Order, OrderItem, User

Views: Blade templates for shop, product pages, dashboard, admin UI

Controllers: Handle logic for products, cart, checkout, admin modules

3.2 User Authentication & Authorization

Registration and Login via Laravel Breeze

Role-based access: Admin and Customer

Secure session handling

3.3 Product Management (CRUD Operations)

Admins can:

Add new products with images

Edit product details

Delete products

Manage stock and pricing

Organize items in categories (Perfumes, Thawbs, Accessories, etc.)

3.4 Shopping Cart & Checkout System

Customers can:

Add/Remove items to cart

Update quantities

Review order summary

Place orders

View order success page

3.5 Admin Dashboard

Includes:

Recent orders

Total sales

Pending orders

Total products

Total users

Order management page

Product CRUD management

3.6 Responsive UI & Mobile Ready

Tailwind CSS + Blade templates
Optimized for mobile users (majority of IIUM customers).

4.0 Target Users & Stakeholders
4.1 Customers

Browse products easily

Add to cart and checkout

Create an account and view order history

Receive order confirmation

4.2 Administrators

Manage inventory

Manage orders

View analytics

Modify product listings

4.3 Business Owner

Expand customer reach

Reduce manual work

Track performance in real-time

Build a long-term online presence

5.0 Project Goals & Objectives
Primary Goal

Develop a fully functional Laravel e-commerce application for Al Haramain Perfumes & Thawbs.

Specific Objectives

Implement full authentication & role-based access

Build complete product CRUD operations

Develop shopping cart & checkout flow

Create a modern UI that matches brand identity

Provide admin analytics and dashboards

Ensure Shariah-compliant, halal-friendly user experience

Deploy code on GitHub using version control

6.0 Technical Specifications
6.1 Entity Relationship Diagram (ERD)

(Insert your ERD image here)

Users → Orders → OrderItems → Products

6.2 Sequence Diagram

(Insert your sequence diagram image here)

Sequence includes:

User browses shop

User selects product

Adds to cart

Proceeds to checkout

Places order

System processes and stores order

6.3 System Architecture

Frontend: Blade, TailwindCSS, JavaScript

Backend: Laravel 10, PHP 8.2

Database: SQLite/MySQL

Authentication: Laravel Breeze

Version Control: Git & GitHub

Local Server: Artisan serve

Deployment: (Local for project demo)

7.0 Mock-up Designs

(Insert all your UI mockups and screenshots here)
Examples:

Home Page

Login/Register Page

Shop Page

Product Details

Cart Page

Checkout Page

Admin Dashboard

Order Management

8.0 Challenges in Development

Handling route naming and avoiding 404 errors

Database migration conflicts and foreign key constraints

Blade template inheritance issues

Checkout logic and cart session management

Admin restrictions & middleware configuration

Seeder and factory issues during testing

Making UI consistent across all screen sizes

9.0 References

Laravel Documentation — https://laravel.com/docs

TailwindCSS Docs — https://tailwindcss.com/docs

MySQL Documentation — https://dev.mysql.com/doc/

PHP Documentation — https://www.php.net/manual

IIUM INFO 2302 Project (Static Website Provided by Owner)

10.0 Presentation Video Link



11.0 Screenshots (Project System Captures)

