{{-- Schema.org JSON-LD разметка --}}

{{-- Основная организация --}}
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CateringService",
    "@id": "https://ezhik-catering.kz/#organization",
    "name": "Ёжик Кейтеринг",
    "alternateName": "Ezhik Catering",
    "description": "Кейтеринг любых мероприятий в Алматы и Астане. Кофе-брейки, фуршеты, банкеты. Работаем с 2003 года.",
    "url": "https://ezhik-catering.kz",
    "logo": {
        "@type": "ImageObject",
        "url": "https://ezhik-catering.kz/img/logo.png"
    },
    "image": "https://ezhik-catering.kz/img/logo.png",
    "email": "farida_ikrieva@mail.ru",
    "foundingDate": "2003",
    "priceRange": "₸₸",
    "currenciesAccepted": "KZT",
    "paymentAccepted": "Cash, Credit Card, Bank Transfer",
    "areaServed": [
        {
            "@type": "City",
            "name": "Алматы",
            "sameAs": "https://ru.wikipedia.org/wiki/Алматы"
        },
        {
            "@type": "City",
            "name": "Астана",
            "sameAs": "https://ru.wikipedia.org/wiki/Астана"
        }
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Услуги кейтеринга",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Кофе-брейк",
                    "description": "Организация кофе-брейков для конференций, семинаров и деловых встреч"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Фуршет",
                    "description": "Фуршетное обслуживание мероприятий любого масштаба"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Банкет",
                    "description": "Выездной банкет с полным обслуживанием"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Аренда оборудования",
                    "description": "Аренда оборудования для мероприятий"
                }
            }
        ]
    },
    "location": [
        {
            "@type": "Place",
            "name": "Ёжик Кейтеринг Алматы",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "ул. Пятницкого, 73",
                "addressLocality": "Алматы",
                "addressCountry": "KZ",
                "postalCode": "050040"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "43.238949",
                "longitude": "76.945465"
            },
            "telephone": ["+7 727 309-09-57", "+7 701 267-29-92"]
        },
        {
            "@type": "Place",
            "name": "Ёжик Кейтеринг Астана",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Астана",
                "addressCountry": "KZ"
            },
            "telephone": "+7 701 110-00-11"
        }
    ],
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        ],
        "opens": "09:00",
        "closes": "21:00"
    },
    "sameAs": [
        "https://www.instagram.com/ezhik_catering/",
        "https://wa.me/77012672992"
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "150",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Ёжик Кейтеринг",
    "url": "https://ezhik-catering.kz"
}
</script>
@endverbatim