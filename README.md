# Backend Mastery — Toza PHP, PostgreSQL va Laravel bilan o‘rganish

Bu repository shaxsiy o‘qish va amaliy mashqlar uchun ochildi. Maqsad — backend sohasida yangi darajaga chiqish uchun ketma-ket va tizimli ravishda:
1. Toza (vanilla) PHP ni puxta o‘rganish va unda saytlar, API va skriptlar yozish;
2. PostgreSQL ni o‘rganib, PHP orqali unga ulanish, so‘rovlar va optimallashtirishlarni bajarish;
3. Laravel frameworkini chuqur o‘rganib, real-world ilovalar yaratish.

Bu README sizga nima o‘rganish kerakligi, qanday ish rejasi va boshlang‘ich qadamlar bo‘yicha yo‘riqnoma beradi.

## Nima uchun bu repo ochildi
- Toza PHP asoslarini mustahkamlab, real loyihalar orqali tajriba orttirish.
- Maʼlumotlar bazasi dizayni va PostgreSQL imkoniyatlarini (index, explain, tranzaksiyalar) amaliyotda qo‘llash.
- Laravel orqali zamonaviy backend ilovalarini tez va toza uslubda yaratishni o‘rganish.
- Har bosqich uchun katta o‘zgarishlar testlar va dokumentatsiya bilan qo‘llab-quvvatlanadi.

## Texnologiya stack
- Til: PHP (toza PHP bosqichida composer cheklangan bo‘lishi mumkin)
- Maʼlumotlar bazasi: PostgreSQL
- Keyinchalik: Laravel (so‘nggi barqaror versiya)
- Testlar: PHPUnit yoki Pest
- Docker (ixtiyoriy — lokal muhitni boshqarish uchun)

## Bosqichma-bosqich o‘rganish rejasi
- Bosqich A — Toza PHP
    - Sintaksis, OOP (class, inheritance, interfaces), error handling
    - Routing (oddiy), form handling, session va cookie, file upload
    - Small projects: blog, contact form, user auth (soddalashtirilgan)
- Bosqich B — PostgreSQL bilan integratsiya
    - PostgreSQL asoslari: schema, index, constraint, tranzaksiyalar
    - PDO orqali PHP ga ulanish, prepared statements, transactionlar
    - Explain analiz va oddiy optimallashtirish mashqlari
- Bosqich C — Laravel
    - Routing, controllers, Eloquent, migrations, seed
    - Auth (sanctum/jwt), REST API, validation, middleware
    - Test yozish (feature + unit) va deployment/pipeline

## Loyihaning tuzilishi (misol)
- /php — toza PHP misollar va loyihalar
- /pgsql — SQL snippetlar, migration scripts, explain misollari
- /laravel — keyingi bosqich uchun Laravel ilovasi
- /docs — o‘rganish notlari, cheat-sheets, amaliy topshiriqlar
- /tests — test misollari va skriptlar

## Mashqlar (Exercises)
- Toza PHP: oddiy blog CRUD (file yoki DB asosida), login/logout, session-based auth.
- PostgreSQL: katta jadvalda indeks qo‘yish va EXPLAIN ANALYZE bilan samaradorlikni solishtirish.
- Laravel: API bilan to‘liq CRUD, autentifikatsiya (sanctum), unit va feature testlar.

## Hissa qo‘shish
- Bu repo asosan shaxsiy o‘rganish maqsadida; ammo agar kimdir mashq qo‘shmoqchi bo‘lsa, pull request va qisqacha izoh kutib olinadi.
- Yangi mashqlar yoki learning note qo‘shilganda /docs ga joylang.

## License
Hozircha shablon sifatida MIT tavsiya etiladi. Agar rozilik bo‘lsa, LICENSE faylini qo‘shaman.

## Kontakt
GitHub: [@sobirjon-swe](https://github.com/sobirjon-swe)
