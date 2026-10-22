# Project Explanation

```text
Browser
   ↓
WordPress
   ↓
Elementor
   ↓
Hello Elementor Parent Theme
   ↓
Digital Agency Child Theme
   ↓
Custom CSS / JavaScript
```

WordPress manages content, users, pages, plugins, and the database. Elementor is used to build the visible layouts without custom page templates. Hello Elementor supplies a lightweight base theme. The Digital Agency Child theme safely holds our CSS, small JavaScript file, and basic PHP asset/menu setup. Contact Form 7 handles the form instead of custom form processing. Docker runs WordPress, MySQL, and phpMyAdmin locally.

This split keeps the custom code small: PHP loads assets and registers a menu; CSS styles reusable Elementor classes; JavaScript provides small optional polish. Content such as statistics, testimonials, team members, and projects is fictional demonstration content.
