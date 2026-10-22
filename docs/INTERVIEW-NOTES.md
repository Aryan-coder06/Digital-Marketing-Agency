# Interview Notes

## What is WordPress?

WordPress is an open-source content management system built primarily with PHP and typically using MySQL or MariaDB. It lets developers and non-developers manage website content through an admin dashboard.

## What is Elementor?

Elementor is a visual page builder for WordPress. I used its containers and widgets to make page layouts without writing custom page templates.

## What is a WordPress theme?

A theme controls a website’s presentation and layout.

## What is a child theme?

```text
Parent theme
        ↓
Child theme
        ↓
Our custom CSS/PHP
```

A child theme lets me customize Hello Elementor without editing it directly. Parent-theme updates are less likely to overwrite my changes.

## What is `functions.php`?

WordPress loads it as part of the active theme. Mine loads CSS/JavaScript and registers one menu location.

## What does `add_action()` do?

It attaches my function to a WordPress event (a hook):

```text
WordPress reaches an event
        ↓
hook fires
        ↓
our function executes
```

## What are `wp_enqueue_style()` and `wp_enqueue_script()`?

They are WordPress’s standard way to load CSS and JavaScript. They manage order and avoid hardcoding tags into theme files.

## How did you make it responsive?

Elementor responsive settings + flex/container layouts + CSS media queries. Cards use roughly three columns on desktop, two on tablet, and one on mobile.

## What plugins did you use?

Elementor and Contact Form 7.

## How is WordPress data stored?

At a basic level, `wp_posts` stores pages/posts, `wp_users` stores users, `wp_options` stores settings, and `wp_postmeta` stores extra content details.

## Difference between a post and a page?

A page is usually static content such as About. A post is chronological content such as a blog article.

## What is the WordPress dashboard?

It is the `wp-admin` administration area for content, themes, plugins, users, and settings.

## How did you customize the theme?

I created a Hello Elementor child theme, loaded custom CSS and JavaScript, built layouts with Elementor, and applied reusable custom CSS classes.

## What would you improve next?

SEO optimization, caching, image optimization, analytics, security hardening, stronger accessibility, and custom post types for portfolio items.
