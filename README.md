Проект работает на **Laravel Sail**.

## Быстрый старт

1. **Клонируйте репозиторий:**

    ```bash
    git clone https://github.com/Kayloren01/backend-laravel-app.git
    ```

2. **Создайте файл окружения:**

    ```bash
    cp .env.example .env
    ```

3. **Установите Composer-зависимости (через Docker):**

    #### Вариант А: Если на ПК локально установлены PHP и Composer

    Используйте этот способ, если вам не нужно изолировать процесс установки внутри Docker.

    ```bash
    composer install
    ```

    #### Вариант Б: Если на ПК нет PHP и Composer

    Этот способ запустит временный контейнер, который установит папку `vendor` прямо внутрь вашего проекта, не требуя локальной установки PHP на компьютер.

    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsu/php83-cli:latest \
        composer install --ignore-platform-reqs
    ```

4. **Запустите контейнеры:**
    ```bash
    ./vendor/bin/sail up -d
    ```

Приложение доступно по адресу: **[http://localhost](http://localhost)**

## Основные команды

- `../sail up -d` — запуск проекта
- `../sail down` — остановка контейнеров
- `../sail artisan ...` — выполнение команд Artisan
- `../sail composer ...` — управление пакетами
- `../sail test` — запуск тестов
- `npm run format` - форматирование
