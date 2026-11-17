# Eyob Fekadu — Personal Portfolio

A responsive personal portfolio built with PHP, HTML5, CSS3, Bootstrap 5.3, and Bootstrap Icons.

## Requirements
- PHP 8.0+ recommended
- A web server such as Apache (XAMPP is suitable)
- Internet connection for Bootstrap, Bootstrap Icons, and Google Fonts CDNs

## Run locally with PHP
1. Extract this folder into your server's web directory (for XAMPP, `htdocs`).
2. Open a terminal in this folder.
3. Run `php -S localhost:8000`.
4. Visit `http://localhost:8000`.

Alternatively, place the folder in `htdocs` and visit `http://localhost/eyob_fekadu_portfolio/`.

## Customize
- Edit the introduction, about text, skills, projects, and education in `index.php`.
- Replace `your-email@example.com` with your real email.
- Add your actual project links and screenshots.
- Update colors and layout in `assets/css/style.css`.

## Contact form note
The PHP form validates the submitted name, email, and message, then displays a confirmation. It does not send email yet. To receive messages, connect a mail provider or configure PHP mail on your hosting server.

## Project structure
```text
eyob_fekadu_portfolio/
├── index.php
├── README.md
└── assets/
    ├── css/style.css
    └── js/main.js
```
