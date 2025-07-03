# Урок 1 - Вступ до Laravel

Ключові зміни:

- Додав Laravel
- Docker setup


[Рєструйтесь на Digital Ocean](https://m.do.co/c/cfcb074144ad)


## Урок 2 - Встановлення та запуск Laravel

Корисні команди для роботи з Docker

- Переглянути список контейнерів:

```bash
docker ps -a
```

- Зайти в контейнер laravel_app через Bash: 

```bash
docker exec -it laravel_app bash
```

- Вийти з контейнер laravel_app через Bash: 

```bash
exit
```


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


Корисні посилання:

- [Adminer](http://localhost:8081/);


Корисні консольні команди Laravel (php artisan):

- Команда для створення файлу міграції:

```bash
php artisan make:migration create_posts_author_column
```

- Запустити міграції в підключеній БД Laravel:

```bash
php artisan migrate
```

- Перевірити статус міграцій:

```bash
php artisan migrate:status
```


## Урок 6 - Створення поста через HTML-форму в Laravel

- Додав файл app/app/Http/Requests/StorePostRequest.php - клас для валідації запиту на створення постів
- Оновив контролер app/app/Http/Controllers/PostController.php - додані методи для створення та запису постів
- Додав файл міграції app/database/migrations/2025_06_30_084812_create_posts_author_column.php - нове поле author varchar(255) може містити пусті значення NULL
- Оновив шаблон головної сторінки app/resources/views/home.blade.php - вивід повідомлень з сесії та помилок валідації
- Додав шаблон з формою додавання поста в app/resources/views/home.blade.php
- Оновив app/resources/views/home.blade.php додав PostController та роути на вивід форми додавання поста [http://localhost:8080/posts/create](http://localhost:8080/posts/create) та збереження поста
- Домашка до уроку. Оновив файли: app/app/Http/Requests/StorePostRequest.php, app/app/Models/Post.php та app/resources/views/posts/create.blade.php


## Урок 7 - Виведення списку постів на головній сторінці

- Додав файл app/resources/views/posts/index.blade.php - шаблон для відображення постів на головній сторінці
- Додав app/resources/views/layouts/app.blade.php - layout батьківський шаблон
- Додав метод PostController::index для відображення списку постів в файлі app/app/Http/Controllers/PostController.php
- Оновив маршрут / в файлі app/routes/web.php








