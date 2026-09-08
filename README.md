Daily Drip Café — Responsive Product Landing Page

A responsive café product landing page built with Laravel, Blade Components, Tailwind CSS, and Vite for the Week 5 Mini Project.

The project focuses on creating a clean, modern, and mobile-friendly landing page for Daily Drip Café, featuring a warm coffee-shop visual style, reusable Blade components, responsive layouts, and lightweight front-end interactions.

Project Overview

Daily Drip Café is presented as a community café landing page designed to make it easy for customers to explore featured drinks, browse product categories, view pricing, read testimonials, and contact the store.

The interface uses a warm coffee-inspired visual direction with:

Full-screen café hero image

Brown, cream, and beige color palette

Reusable product and content cards

Responsive layouts for desktop, tablet, and mobile

Interactive menu filtering and search

Smooth internal navigation

Objectives

The main objectives of this project are to:

Build a responsive product landing page using Laravel

Practice reusable Blade Components

Apply Tailwind CSS and custom responsive styling

Create a consistent visual design system

Improve mobile and tablet usability

Add simple JavaScript interactions

Organize project files clearly

Practice meaningful Git commits and project documentation

Technologies Used

Laravel

PHP

Blade Templates

Blade Components

Tailwind CSS

Custom CSS

JavaScript

Vite

Git

GitHub

Main Features

Responsive Navigation

The navigation bar includes:

Home

Features

Menu

Pricing

Testimonials

Contact

Sign In

Get Started

A responsive hamburger menu is provided for smaller screens.

Full-Screen Hero Section

The hero section includes:

Full-screen café background image

Main headline

Supporting text

Primary and secondary CTA buttons

Product statistics

Responsive image positioning

Feature Section

The page contains six feature cards that highlight the café experience and service benefits.

Interactive Menu Showcase

The menu section includes:

Drink search

Category filtering

Product images

Product names

Prices

Result counter

Empty-state message

Available categories include:

All

Coffee

Iced Coffee

Frappe

Matcha

Fruit Tea

Pricing Section

Three pricing cards are displayed with:

Product images

Starting prices

Included features

CTA buttons

Testimonials

The testimonial section uses reusable testimonial cards for customer feedback presentation.

Note: Review content and customer images used during development may be placeholder/demo content and should be replaced with verified business information before public use.

Call-to-Action Section

The CTA section contains:

Café background photography

Strong visual contrast

Explore Menu button

Contact Store button

Smooth Scrolling

Internal navigation and CTA buttons use smooth scrolling to move between page sections.

Active Navigation State

Navigation links update visually while the user scrolls through the landing page.

Blade Components

Reusable Blade Components are used throughout the project.

resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── product-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
├── showcase.blade.php
├── cta.blade.php
├── contact.blade.php
└── footer.blade.php

The main layout is located at:

resources/views/layouts/app.blade.php

The landing page is located at:

resources/views/pages/home.blade.php

Project Structure

week05-product-landing-page/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
│   ├── documentation/
│   │   ├── before.png
│   │   └── after.png
│   └── images/
│       ├── logo.png
│       ├── hero-cafe-bg.png
│       ├── spanish-latte.jpg
│       ├── caramel-macchiato.jpg
│       ├── mocha-frappe.jpg
│       ├── americano.jpg
│       ├── fruit-tea.jpg
│       └── matcha-latte.jpg
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── components/
│       ├── layouts/
│       └── pages/
├── routes/
│   └── web.php
├── README.md
└── package.json

Responsive Web Design

The landing page was tested and refined for different viewport sizes.

Recommended test widths:

Device

Width

Desktop

1440px

Laptop

1024px

Tablet

768px

Mobile

390px

Responsive improvements include:

Flexible hero sizing

Mobile-friendly navigation

Responsive statistic cards

Adaptive feature grids

Scrollable menu filters

Responsive product cards

Stacked pricing cards on smaller screens

Responsive CTA and footer

Horizontal overflow prevention

Before and After

Before

The earlier version used a simpler light hero layout with a separate product image and basic card styling.



After

The final version introduces:

Full-screen café photo hero

Improved typography hierarchy

Better statistic cards

Responsive navigation

Interactive menu search and filtering

Improved product cards

Stronger CTA presentation

Better mobile and tablet layouts



Installation and Setup

1. Clone the repository

git clone https://github.com/YOUR-USERNAME/week05-product-landing-page.git

2. Open the project folder

cd week05-product-landing-page

3. Install PHP dependencies

composer install

4. Install frontend dependencies

npm install

5. Create the environment file

Windows PowerShell:

Copy-Item .env.example .env

Or:

cp .env.example .env

6. Generate the application key

php artisan key:generate

7. Start Laravel

php artisan serve

8. Start Vite in another terminal

npm run dev

9. Open the application

http://127.0.0.1:8000

Git Workflow

The project uses meaningful Git commits to track development progress.

Examples include:

chore: initialize Laravel landing page project
feat: create landing page layout and Blade structure
style: finalize Daily Drip Cafe landing page design
feat: implement responsive mobile navigation
feat: add menu search and category filtering
fix: prevent duplicate mobile navigation on desktop
feat: connect landing page CTA interactions
style: improve responsive behavior across devices
docs: add before and after UI comparison
docs: complete project README documentation

UI Design Decisions

The interface uses a warm café-inspired design system.

Color Direction

Espresso brown

Warm beige

Cream

White

Muted neutral text

Typography

The interface uses Poppins for a clean, modern, and readable visual style.

Visual Approach

The design prioritizes:

Strong hierarchy

Large hero imagery

Clear CTA buttons

Rounded cards

Soft shadows

Consistent spacing

Responsive readability

Learning Reflection

This project helped improve my understanding of:

Building layouts using Laravel Blade

Creating reusable Blade Components

Structuring a responsive landing page

Styling responsive interfaces

Using JavaScript for simple UI interactions

Testing layouts at multiple screen sizes

Organizing assets and project files

Using Git commits to document development progress

Improving a design through multiple iterations

One of the most important lessons from the project was learning how reusable components make a Laravel project easier to maintain. Instead of repeating the same markup, sections such as buttons, feature cards, pricing cards, and testimonials can be managed through reusable Blade files.

The responsive design process also showed the importance of testing the interface on different screen sizes rather than designing only for desktop.

Future Improvements

Possible future improvements include:

Real authentication for Sign In

Backend-powered contact form

Database-driven café products

Favorite drinks feature

Order management

Store locator

Real customer testimonials

Dynamic pricing

Admin dashboard

Online ordering

Author

Created as part of the Week 5 Responsive Product Landing Page Mini Project.

License

This project is intended for educational purposes.