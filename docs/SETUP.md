# Setup Guide

## 1. Install prerequisites

Install Docker Desktop (or Docker Engine plus the Compose plugin) and Git. Start Docker before continuing.

## 2. Clone and start the project

```bash
git clone <repository-url>
cd Digital-Marketing-Agency-WordPress
docker compose up -d
```

Open `http://localhost:8080`, choose a language, and complete the WordPress installer. Create your own administrator account. phpMyAdmin is available at `http://localhost:8081` for learning; it is not needed for normal page building.

To stop the environment later, run `docker compose down`. Named volumes retain WordPress and MySQL data. To start again, use `docker compose up -d`.

## 3. Install and activate the theme

1. Dashboard → Appearance → Themes → Add New.
2. Search for **Hello Elementor**, then Install and Activate it.
3. The repository already mounts `wordpress/wp-content/themes/digital-agency-child` into the container. If not using Docker, copy that folder into `wp-content/themes/` in your WordPress installation.
4. Dashboard → Appearance → Themes → activate **Digital Agency Child**.

The child theme needs Hello Elementor to remain installed because it is the parent theme.

## 4. Install plugins

Dashboard → Plugins → Add New:

- Install and activate **Elementor Website Builder**.
- Install and activate **Contact Form 7**.

No paid Elementor features are required.

## 5. Create site pages and menu

Create Pages named Home, Services, About, Portfolio, and Contact. Build them using [ELEMENTOR-GUIDE.md](ELEMENTOR-GUIDE.md). Then go to Settings → Reading → Your homepage displays → Static Page → select Home.

Go to Appearance → Menus, create a menu with the five pages, and assign it to **Primary Menu**. If you build a header in Elementor’s free version, place a Nav Menu/links manually in the page header area; the registered menu demonstrates the standard WordPress theme concept.

## 6. Contact form

In Contact → Add New, create a form with Name, Email, Company, Service Required, Message, and Submit. Contact Form 7 creates a shortcode; paste that shortcode into an Elementor Shortcode widget on the Contact page. Configure the Mail tab using an email address you control. The demo contact details are placeholders.

## Security, SEO, and accessibility

Keep WordPress/plugins updated, use strong passwords, remove unused plugins, use HTTPS in production, and keep backups. Use one H1 per page, H2 for major sections, H3 for card titles, meaningful image alt text, descriptive buttons, visible form labels, and good color contrast. An SEO plugin can be added later but is not required for this demo.
