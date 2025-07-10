# Урок 1 - Вступ до Laravel

Ключові зміни:

- Додав Laravel
- Docker setup


[Рєструйтесь на Digital Ocean](https://m.do.co/c/cfcb074144ad)


- Кроки для встановлення та запуску:

```bash
git clone git@github.com:podlom/laravel-first-blog-course.git ./laravel-first-blog
cd laravel-first-blog
cp -fvp app/.env.example app/.env
```

- Прописати в app/.env параметри підключення до бази даних MySQL аналогічні до docker-compose.yml із секції mysql

- Перший запуск у Docker:

```bash
docker-compose up -d --build
```

- Зайти в контейнер laravel_app через Bash (або через Docker Desktop через Open in terminal в контейнері laravel_app) та виконати команди:

```bash
composer install
php artisan key:generate
php artisan migrate
```

- Зупинка Docker:

```bash
docker-compose down
docker-compose stop
```

- Наступні запуски у Docker:

```bash
docker-compose up -d
```


## Урок 2 - Встановлення та запуск Laravel

Домашнє завдання:

- Встановіть та запустіть Docker Desktop: https://docs.docker.com/desktop/ для вашої робочої ОС.


Корисні команди для роботи з Docker

- Переглянути список контейнерів:

```bash
docker ps -a
```

- Зайти в контейнер laravel_app через Bash: 

```bash
docker exec -it laravel_app bash
```

- Вийти з контейнеру laravel_app: 

```bash
exit
```


## Урок 3 - Перший маршрут, контролер і шаблон для Laravel

- Додав PageController у app/app/Http/Controllers/PageController.php
- Додав шаблон головної сторінки home у app/resources/views/home.blade.php
- Змінив route головної сторінки на PageController у app/routes/web.php


Домашнє завдання:

- Створи сторінки [/about](http://localhost:8080/about) і [/contacts](http://localhost:8080/contacts) з відповідним текстом.
- Оформи кожну сторінку окремим шаблоном.


## Урок 4 - Підключення CSS до Laravel. Робимо сторінку привабливою

- Додав файли домашнього завдання з уроку 3: resources/views/about.blade.php та resources/views/contact.blade.php
- Оновлено файли routes/web.php та app/Http/Controllers/PageController.php додано нові сторінки /about та /contact
- Оновлено шаблон головної сторінки app/resources/views/home.blade.php (підключено Bootstrap та Tailwind)


Домашнє завдання:

- Створи красиву сторінку "Про нас" [/about](http://localhost:8080/about).
- Додай тло, кольори та вирівнювання за допомогою Bootstrap.


## Урок 5 - Підключення бази даних і перша модель у Laravel

- Оновив файли домашнього завдання з уроку 4: resources/views/contact.blade.php та resources/views/about.blade.php
- Додав файл міграції app/database/migrations/2025_06_30_082557_create_posts_table.php
- Додав модель app/app/Models/Post.php
- Домашка до уроку додав міграцію app/database/migrations/2025_06_30_084812_create_posts_author_column.php


Домашнє завдання:

- Додай до таблиці posts поле author.
- Створи 2-3 записи вручну через Tinker або [Adminer](http://localhost:8081/) як тобі буде зручніше.


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


Домашнє завдання:

- Додай поле author у форму.
- Зроби редірект на сторінку /posts (у наступному уроці зробимо її).


## Урок 7 - Виведення списку постів на головній сторінці

- Додав файл app/resources/views/posts/index.blade.php - шаблон для відображення постів на головній сторінці
- Додав app/resources/views/layouts/app.blade.php - layout батьківський шаблон
- Додав метод PostController::index для відображення списку постів в файлі app/app/Http/Controllers/PostController.php
- Оновив маршрут / в файлі app/routes/web.php
- Домашка до 7-го уроку. Оновив: app/app/Http/Controllers/PostController.php, app/resources/views/posts/index.blade.php та app/routes/web.php. Додав app/resources/views/posts/show.blade.php - шаблон на відображення одного поста.


Домашнє завдання:

- Додай на кожну картку кнопку "Читати далі" (посилання на /posts/{post}).
- Створи та підключи шаблон app/resources/views/posts/show.blade.php (у наступному уроці).


## Урок 8 - Перегляд одного поста в Laravel (Post Details Page)

- Оновлено шаблони app/resources/views/layouts/app.blade.php, app/resources/views/posts/index.blade.php та app/resources/views/posts/show.blade.php
- Додав домашку 8-го уроку.


Домашнє завдання:

- Додай поле author в шаблони app/resources/views/posts/index.blade.php та app/resources/views/posts/show.blade.php
- Виведи дату створення поста в шаблоні app/resources/views/posts/index.blade.php


## Урок 9 - Редагування і оновлення поста в Laravel (Edit & Update)

- Додав нові actions в app/app/Http/Controllers/PostController.php
- Новий клас для валідації оновлення інформації поста app/app/Http/Requests/UpdatePostRequest.php
- Оновив форму редагування поста app/resources/views/posts/edit.blade.php
- Додав кнопку створпення нового поста app/resources/views/posts/index.blade.php
- Виводжу список повідомлень в шаблон перегляду поста app/resources/views/posts/show.blade.php
- Нові маршрути додано в app/routes/web.php


### Встановлення та включення debug панелі Telescope

- Команда для встановлення Telescope:

```bash
composer require laravel/telescope --dev
```

- Publish Telescope Assets and Configuration

```bash
php artisan telescope:install
php artisan migrate
```

- Переконайтесь, що у вас правильно налаштовано .env

```env
APP_ENV=local
APP_DEBUG=true

# Цей рядок треба додати
TELESCOPE_ENABLED=true
```

- Після внесення змін у .env файл виконайте команди

```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

- Після внесення змін перезапустіть локальний веб сервер

```bash
php artisan serve
```

- Або, якщо ви використовуєте Docker setup

```bash
docker-compose stop
docker-compose up -d
```

- Для перегляду консолі Telescope скористайтесь [таким посиланням](http://localhost:8000/telescope).

