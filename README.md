**#Amul Website Redesign**
This project is a redesigned version of the Amul Website created as part of the "Reimagine Hackathon" conducted by Sheryians Coding School. Our goal was to give the website a modern, sleek, and animated design while incorporating all essential e-commerce features.



**#Overview**
As a team of 4, we redesigned the Amul website with the goal of enhancing its UI/UX for a modern audience. Our design incorporates smooth animations, dynamic content, and all modern e-commerce functionalities. The project leverages GSAP for animations and AJAX for a seamless user experience.



**#Features**

**User Side**
Modern and responsive design,
Product catalog with categories and filtering options,
Add to cart and checkout functionality,
User authentication and order management,

**Admin Panel**
Manage products and categories,
View and process orders,
Customer management,

**Animations**
Smooth page transitions using GSAP.
Animated elements for better user engagement.
AJAX-based dynamic content loading.


**#Technologies Used**
Frontend: HTML, CSS, JavaScript, GSAP
Backend: PHP
Database: MySQL
Tools: AJAX


**#Setup and Installation**
Clone the repository:

bash
Copy code
git clone https://github.com/yourusername/amul-redesign.git
Navigate to the project directory:

bash
Copy code
cd amul-redesign
Import the database:

Open phpMyAdmin.
Create a new database named amul_redesign.
Import the provided SQL file (amul_redesign.sql) into the database.
Configure the environment in config.php (or equivalent):

php
Copy code
<?php
$host = "localhost";
$user = "your_username";
$password = "your_password";
$database = "amul_redesign";
?>
Install dependencies (if applicable).

Start the server:

bash
Copy code
php -S localhost:8000
Access the application:

User side: http://localhost:8000/
Admin panel: http://localhost:8000/admin/
Usage
Register/Login to browse products and place orders.
Admins can log in to manage the website content and orders.
Enjoy a smooth, animated shopping experience!

