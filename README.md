# Digital Marketing Agency — WordPress

A responsive digital marketing agency website built as a WordPress development portfolio project using Elementor and a customized Hello Elementor child theme.

NovaReach Digital is fictional. This is a learning project, not commercial client work. It customizes the open-source Hello Elementor theme through a child theme rather than changing the parent theme directly.

## Preview

Add your own screenshots after building the pages in Elementor. No screenshots are fabricated in this repository.

## Features

- Responsive desktop, tablet, and mobile layouts
- WordPress CMS with Elementor page builder
- Hello Elementor child theme
- Readable custom CSS and small vanilla JavaScript interactions
- Five-page agency website
- Contact Form 7 integration guide
- Reusable cards, buttons, statistics, and testimonial styles
- Beginner-friendly Docker local environment

## Pages

- Home
- Services
- About
- Portfolio
- Contact

## Tech Stack

WordPress, PHP, Elementor, Hello Elementor, HTML, CSS, JavaScript, MySQL, and Docker.

## WordPress Concepts Demonstrated

- Themes and child themes
- Plugins, pages, and menus
- `add_action()`, `wp_enqueue_style()`, and `wp_enqueue_script()`
- Responsive Elementor container layouts

## Local Development

```bash
git clone <repository-url>
cd Digital-Marketing-Agency-WordPress
docker compose up -d
```

Open WordPress at `http://localhost:8080` and phpMyAdmin at `http://localhost:8081`. The database username is `root` and password is `root_password` for local development only. See [SETUP.md](docs/SETUP.md) for the full first-time setup.

## Screenshots

After creating the pages, capture and add these files:

- `screenshots/home-desktop.png`
- `screenshots/home-tablet.png`
- `screenshots/home-mobile.png`
- `screenshots/services.png`
- `screenshots/contact.png`

## Learning Purpose

This project was built as a learning and portfolio project to gain practical experience with WordPress, Elementor, theme customization, and responsive web development. It uses the open-source Hello Elementor theme as its parent theme.

## Safety Basics

Keep WordPress and plugins updated, use trusted plugins and strong passwords, remove unused plugins, use HTTPS in production, and keep backups. An SEO plugin such as Yoast or Rank Math can be added later, but is intentionally not required here.
