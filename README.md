# Урок 1 - Вступ до Laravel

Ключові зміни:
- Додав Laravel
- Docker setup

[Рєструйтесь на Digital Ocean](https://m.do.co/c/cfcb074144ad)

## Урок 2 - Встановлення та запуск Laravel

## Урок 3 - Перший маршрут, контролер і шаблон для Laravel

- Додав PageController у app/app/Http/Controllers/PageController.php
- Додав шаблон головної сторінки home у app/resources/views/home.blade.php
- Змінив route головної сторінки на PageController у app/routes/web.php

## Урок 4 - Підключення CSS до Laravel. Робимо сторінку привабливою

- Додав файли домашнього завдання з уроку 3: resources/views/about.blade.php та resources/views/contact.blade.php
- Оновлено файли routes/web.php та app/Http/Controllers/PageController.php додано нові сторінки /about та /contact
- Оновлено шаблон головної сторінки app/resources/views/home.blade.php (підключено Bootstrap та Tailwind)

## Урок 5 - Підключення бази даних і перша модель у Laravel

- Оновив файли домашнього завдання з уроку 4: resources/views/contact.blade.php та resources/views/about.blade.php
- Додав файл міграції app/database/migrations/2025_06_30_082557_create_posts_table.php
- Додав модель app/app/Models/Post.php
- Домашка до уроку додав міграцію app/database/migrations/2025_06_30_084812_create_posts_author_column.php

Команда для створення файлу міграції:

```bash
php artisan make:migration create_posts_author_column
```

## Урок 6 - Створення поста через HTML-форму в Laravel


