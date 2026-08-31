<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rajan Crackers - Buy Crackers Online Sivakasi | Wholesale & Retail Fireworks</title>
    <meta name="description" content="Buy crackers online from Sivakasi at wholesale prices. Rajan Crackers offers 200+ fireworks products with up to 60% discount. Safe green crackers, gift boxes, sparklers, aerial shots & more. All India delivery.">
    <meta name="keywords" content="buy crackers online, sivakasi crackers, diwali crackers, wholesale crackers, fireworks online, green crackers, crackers price list, sivakasi fireworks, crackers gift box, crackers delivery india, madhu crackers">
    <meta name="author" content="RajanCrackers">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Rajan Crackers - Buy Crackers Online Sivakasi | Wholesale & Retail">
    <meta property="og:description" content="Buy crackers online from Sivakasi at wholesale prices. 200+ products, up to 60% discount, all India delivery. Sparklers, aerial shots, gift boxes & more.">
    <meta property="og:image" content="{{ asset('assets/img/rajan.logo.jpg') }}">
    <meta property="og:site_name" content="Rajan Crackers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Rajan Crackers - Buy Crackers Online Sivakasi">
    <meta name="twitter:description" content="Buy crackers online from Sivakasi at wholesale prices. 200+ products, up to 60% discount, all India delivery.">
    <meta name="twitter:image" content="{{ asset('assets/img/rajan.logo.jpg') }}">

    <!-- WhatsApp Preview -->
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Geo Tags -->
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Sivakasi">
    <meta name="geo.position" content="9.371407;77.810753">
    <meta name="ICBM" content="9.371407, 77.810753">

    <!-- Favicon -->
    <link href="/assets/img/rajan.logo.jpg" rel="icon">
    <link rel="apple-touch-icon" href="/assets/img/rajan.logo.jpg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Store",
        "name": "Rajan Crackers",
        "description": "Buy crackers online from Sivakasi at wholesale and retail prices. Sparklers, aerial shots, gift boxes, green crackers and more with all India delivery.",
        "url": "https://rajancrackers.com",
        "logo": "https://rajancrackers.com/assets/img/rajan.logo.jpg",
        "image": "https://rajancrackers.com/assets/img/rajan.logo.jpg",
        "telephone": "+918925208343",
        "email": " mjkkalirajan880@gmail.com ",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3/268/C, Sivakasi to Sattur Main Road, Chinnakamanpatti",
            "addressLocality": "Virudhunagar",
            "addressRegion": "Tamil Nadu",
            "postalCode": "626189",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 9.410235,
            "longitude": 77.859785
        },
        "priceRange": "₹30 - ₹50,000",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "08:00",
            "closes": "21:00"
        },
        "sameAs": [
            "https://api.whatsapp.com/send?phone=918925208343"
        ]
    }
    </script>

    <!-- Sitelinks Search Box -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Rajan Crackers",
        "url": "https://rajanucrackers.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://rajancrackers.com/?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <!-- Breadcrumb / SiteNavigationElement for Sitelinks -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "itemListElement": [
            {"@type": "SiteNavigationElement", "position": 1, "name": "Home", "url": "https://rajancrackers.com/"},
            {"@type": "SiteNavigationElement", "position": 2, "name": "About Us", "url": "https://rajancrackers.com/about"},
            {"@type": "SiteNavigationElement", "position": 3, "name": "FAQ", "url": "https://rajancrackers.com/faq"},
            {"@type": "SiteNavigationElement", "position": 4, "name": "Blog", "url": "https://rajancrackers.com/blog"},
            {"@type": "SiteNavigationElement", "position": 5, "name": "Contact", "url": "https://rajancrackers.com/contact"},
            {"@type": "SiteNavigationElement", "position": 6, "name": "Privacy Policy", "url": "https://rajancrackers.com/privacy-policy"},
            {"@type": "SiteNavigationElement", "position": 7, "name": "Price List", "url": "https://rajancrackers.com/pricelist"}
        ]
    }
    </script>
    @endverbatim

    @routes
    @vite(['resources/js/app.js'])
    @inertiaHead
</head>
<body class="font-sans antialiased bg-brand-light text-brand-gray overflow-x-hidden w-full">
    @inertia
</body>
</html>
