# Elementor Build Guide

Use Elementor’s free Container layout. In Site Settings, set Inter (or Poppins), background `#F8F9FC`, text `#444444`, dark headings `#1E1E2F`, primary `#6C5CE7`, and accent `#00B894`. Use one H1 on each page; main sections use H2 and card titles use H3. Add meaningful alt text to every uploaded image. Use Elementor responsive controls: Desktop at 1440px, Tablet at 768px, and Mobile at 390px.

For repeated sections, use an outer container: Full Width; then an inner container: max width 1200px, direction Column, padding `80px 20px`, gap 24px. On tablet use 64px vertical padding; on mobile use 48px. For card rows, set direction Row, wrap Wrap, gap 24px; each card is 31–32% desktop, 48% tablet, and 100% mobile. Elementor’s responsive controls set those widths. Add CSS classes from the child theme under Advanced → CSS Classes (without a dot).

## Shared header and footer

Create these manually near the top/bottom of every page with free Elementor, or use Elementor’s free Header Footer Builder plugin if you prefer a shared template.

- **Header outer container:** full width, white, CSS class `site-header`; inner container max 1200px, row, justify Space Between, padding `18px 20px`.
- Add a Heading/HTML text logo: **NovaReach Digital**. Add a row of Text Link widgets: Home, Services, About, Portfolio, Contact. Add Button: **Get a Free Consultation**, class `primary-button`.
- Tablet/mobile: set the navigation row to wrap or stack; a beginner can use a simple vertical link list rather than a complex mobile menu.
- **Footer:** dark background `#1E1E2F`, white text, inner max 1200px, row/wrap. Add NovaReach Digital; a page-links column; a services column (SEO, Social Media, PPC, Content Marketing, Web Development); and `© 2026 NovaReach Digital. Portfolio demonstration project.`

## Home

### Hero

Outer full-width container; inner max 1200px, row, align center, padding `96px 20px`, gap 48px. Left column 55%: H1 **Turn Digital Attention Into Business Growth**; Text widget with the supplied subheading; row of Buttons **Explore Our Services** (link Services, class `primary-button`) and **Let's Talk** (link Contact). Right column 45%: Image widget with a simple original/royalty-free abstract marketing illustration placeholder, descriptive alt text. On tablet/mobile set direction Column and both columns 100%.

### Services

Use the shared outer/inner settings. Centered H2 **Everything You Need to Grow Online**. Card container uses the shared card row. Each card: Icon widget placeholder, H3, Text, Text Link **Learn More**; class `service-card`.

- SEO — Improve search visibility and attract customers actively searching for your products and services.
- Social Media Marketing — Build stronger audiences through strategic content and consistent social media campaigns.
- PPC Advertising — Reach high-intent customers using targeted and measurable paid advertising campaigns.
- Content Marketing — Create useful content that improves visibility, establishes authority and supports customer acquisition.
- Web Development — Build responsive, fast and conversion-focused websites designed around business goals.

### About preview

Two-column inner container, 50/50, padding `80px 20px`. Left: H2 **Marketing Built Around Real Business Goals** and the supplied paragraph. Right: three small Icon List items: Data-Driven Strategy, Creative Execution, Continuous Optimization. Stack on mobile.

### Results

Use a light purple/white section. H2 (optional) **Results That Guide Our Work** and four equal stat cards, class `stat-card`: `120+ Projects Delivered`, `35+ Brands Supported`, `4.8/5 Average Client Rating`, `92% Client Retention`. These are fictional demonstration statistics; add a small Text widget saying so.

### Portfolio preview

H2 **Recent Work**; three `portfolio-card` containers, each Image placeholder with alt text, H3, category text, and link **View Case Study**: UrbanFit / Fitness Brand Campaign; BeanCraft / Local Coffee SEO Campaign; LearnSphere / Education Platform Redesign.

### Testimonials

H2 **What Demo Clients Say**; three `testimonial-card` containers. Use fictional text and explicitly add a small note: “Fictional testimonials for this portfolio demonstration.” First quote: “The team helped us rethink our digital presence and build a much clearer customer acquisition strategy.” — Sarah Miller, Marketing Manager, UrbanFit. Create two similarly fictional testimonials.

### CTA

Centered container, primary purple background, white text, padding `80px 20px`. H2 **Ready to Grow Your Digital Presence?**, supplied text, and Button **Start a Conversation** linking Contact.

## Services page

Hero: centered H1 **Digital Marketing Services Built for Growth**, short introduction, `80px 20px` padding. Below, make five `service-card` sections (two-column card can use icon/title left and content right) with an H2 per service and an Icon List:

- SEO: Keyword research; On-page SEO; Technical SEO; Content optimization; Performance reporting.
- Social Media Marketing: Content planning; Campaign management; Audience engagement; Analytics.
- PPC Advertising: Google Ads; Campaign targeting; A/B testing; Conversion tracking.
- Content Marketing: Blog content; Landing pages; Content strategy; SEO content.
- Web Development: Responsive design; WordPress; Landing pages; Performance optimization.

Finish with centered CTA: H2 **Need the Right Digital Strategy?** and Button **Talk to Our Team** linking Contact.

## About page

Hero centered with H1 **We Combine Creativity, Strategy and Technology**. Then H2 **Our Story** and: “NovaReach Digital was created as a fictional agency demonstration project showcasing a modern WordPress and Elementor development workflow.” Add H2 **Our Approach** with three `service-card` cards: Understand, Plan, Execute. Add H2 **Why Choose Us** with four icon/list items: Clear Communication, Data-Driven Decisions, Responsive Design, Continuous Improvement. End with a three-card team area using abstract avatars/placeholders (not real identities): Alex Morgan — Strategy Lead; Jordan Lee — Content Specialist; Taylor Kim — Web Designer. State the members are fictional.

## Portfolio page

Hero H1 **Work That Creates Measurable Impact**. Add a responsive card row with six `portfolio-card` containers. Each needs an original/royalty-free placeholder image, name, category, and one-line fictional explanation:

- UrbanFit — SEO + Paid Advertising — A growth campaign concept for a fitness brand.
- BeanCraft — Local SEO — A local search visibility concept for a coffee shop.
- LearnSphere — Website Development — A clearer education platform website concept.
- GreenLeaf — Social Media Marketing — A content consistency concept for a sustainable brand.
- TechNova — Content Marketing — An authority-building content concept.
- TravelNest — PPC Campaign — A targeted travel lead-generation concept.

Do not add filtering; this is intentionally a static, easy-to-explain portfolio.

## Contact page

Hero H1 **Let's Build Something Great**. Under it, use a two-column container. Left: H2 **Contact Information**, email `hello@example.com`, phone `+91 98765 43210`, location India, and a visible note that these are placeholder/demo details. Right: H2 **Start a Conversation**, then add an Elementor Shortcode widget containing the Contact Form 7 shortcode. Create the form in the dashboard with Name, Email, Company, Service Required, Message, and Submit; retain labels for accessibility. Below, H2 **Frequently Asked Questions** and three Accordion widgets: What services do you offer?; How long does a typical project take?; Do you work with small businesses?

## Final responsive check

Preview every page at 1440px, 768px, and 390px. Check that navigation wraps/stacks, columns stack on mobile, images remain inside containers, card rows become 3/2/1 columns, buttons remain easy to tap, headings do not overflow, and all links/form controls can be reached by keyboard.
