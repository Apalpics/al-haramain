Al Haramain Perfumes & Thawbs – E-Commerce Web Application
INFO 3305 — Web Application Development
Group Project (Laravel MVC Web Application)

Group Members
No
Name
Matric No
Role
1
Abdulghafar Abdullahi
2311279
Group Leader / Backend Developer
2
Newal Ysehak Abduljelil
2315376
Frontend Designer
3
Adil Emadeldin Abdelkarim
2320799
Full-Stack Developer
4
Abubakar Abdulsalam Nataala
2328587
Database & QA
5
Siham Jemal Hassen
2320670
UI/UX Designer
6
Marwa Mustafa Ali
2110126
Documentation & Presentation


1.0 Executive Summary
Al Haramain Perfumes & Thawbs is a student-led business selling alcohol-free perfumes and traditional thawbs inside IIUM. The current business operations rely heavily on WhatsApp communication and manual sales processing, causing slow service, no inventory tracking, and no professional online presence.
This project transforms the business into a fully functional Laravel MVC e-commerce system with:
Online product browsing
Add to cart & checkout
Order management
Admin dashboard
Role-based authentication
Mobile-responsive UI
The system provides a modern, scalable, and Shariah-compliant online shopping experience.

2.0 Problem Statement
The business faces the following issues:
❌ Limited customer reach
Only campus customers know about the brand.
❌ Manual inventory
Stock is tracked manually by seller.
❌ No online checkout
Website cannot process orders.
❌ Slow order confirmation
Seller must message each customer individually.
❌ No analytics
No visibility of sales trends or customer behaviour.
❌ Inconsistent branding
No unified professional look.
This project solves all these problems using Laravel MVC.

3.0 Proposed Web Application Solution
3.1 Laravel MVC Architecture
Models: User, Product, Order, OrderItem
Views: Blade Templates (Shop, Admin, Cart, Checkout)
Controllers: ProductController, CartController, OrderController, DashboardController

3.2 Authentication & Authorization
Implemented using Laravel Breeze
Role system → Admin & Customer
Logged-in customers → manage orders
Admin → full control panel

3.3 Product Management (Admin CRUD)
Admin can:
✔ Add products
✔ Edit products
✔ Delete products
✔ Upload images
✔ Set price & category

3.4 Shopping Cart & Checkout
Customer can:
✔ Add to cart
✔ Update quantity
✔ Remove items
✔ Place order
✔ View order success

3.5 Admin Dashboard
Admin dashboard includes:
Total users
Total sales
Pending orders
Recent orders
Product count
Order status update

3.6 Responsive Design
TailwindCSS
Fully responsive on mobile
Styled to match brand (gold, black, brown tones)

4.0 Target Users and Stakeholders
4.1 Customers
Browse products
Add to cart
Checkout
View order history
4.2 Administrators
Manage products
Manage orders
Update product details
Change order status
4.3 Business Owner
Expand reach
Reduce manual workload
Professional online presence

5.0 Project Goals and Objectives
🎯 Main Goal
Build a complete Laravel e-commerce system for Al Haramain.
📝 Objectives
Fully implement MVC structure
Provide safe and simple checkout
Build admin dashboard
Provide consistent UI/UX
Store code in GitHub
Prepare documentation

6.0 Technical Specifications
6.1 Entity Relationship Diagram (ERD)
![ERD](public/screenshots/erd.png)


6.2 Sequence Diagram
![Sequence Diagram](public/screenshots/sequence.png)


6.3 System Architecture
Component
Technology
Frontend
Blade, TailwindCSS
Backend
Laravel 10, PHP 8.2
Database
SQLite / MySQL
Authentication
Laravel Breeze
Version Control
GitHub
Hosting
Localhost for demo


7.0 Mock-up Designs
Add all Figma mockups here:
![Mockup 1](public/screenshots/mockup1.png)
![Mockup 2](public/screenshots/mockup2.png)
![Mockup 3](public/screenshots/mockup3.png)


8.0 Challenges & Difficulties
Route naming conflicts
Model relationships troubleshooting
Blade layout inheritance errors
Checkout logic and session handling
Admin vs customer role separation
UI consistency
GitHub merge issues

9.0 References
Laravel Documentation — https://laravel.com/docs
TailwindCSS — https://tailwindcss.com/docs
PHP Manual — https://php.net
IIUM INFO 2302 site
Figma Prototype provided by business owner

10.0 Presentation Video Link


11.0 System Screenshots
Place all real screenshots taken from your running system in /public/screenshots.
Then reference them:
![Home Page](public/screenshots/home.png)
![Shop Page](public/screenshots/shop.png)
![Product Page](public/screenshots/product.png)
![Cart](public/screenshots/cart.png)
![Checkout](public/screenshots/checkout.png)
![Order Success](public/screenshots/success.png)
![Admin Dashboard](public/screenshots/admin-dashboard.png)
![Admin Products](public/screenshots/admin-products.png)
![Admin Orders](public/screenshots/admin-orders.png)


