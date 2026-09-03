# Химоптторг

Сайт [himopttorg.ru](https://himopttorg.ru) — интернет-магазин ООО «ХИМОПТТОРГ» (оптовая химия, ЛКП, пластмассы).  
Стек: **1С-Битрикс «Интернет-магазин»**, каталог из **1С:Предприятие 8.3** по CommerceML 2.07.

Репозиторий: [https://github.com/bziksv/himopttorg](https://github.com/bziksv/himopttorg)

> Репозиторий публичный. Секреты, дампы БД и выгрузки 1С в git не коммитятся — см. [Секреты](#секреты).

## Локальный запуск

Адрес: **http://127.0.0.1:8105/**

Порт **8105** выбран специально: соседние PHP/Bitrix-проекты уже заняли `8080–8104` (nginx) и `9081–9104` (php-fpm). Свободная пара для этого сайта — `8105` (HTTP) и `9105` (php-fpm, если поднят nginx).

```bash
./scripts/setup-local-db.sh   # один раз: БД himopttorg_s + импорт дампа
./scripts/start-dev.sh        # поднять сайт
./scripts/stop-dev.sh         # остановить
```

| Что | Значение |
|-----|----------|
| URL | http://127.0.0.1:8105/ |
| Каталог | http://127.0.0.1:8105/catalog/ |
| HTTP | `8105` |
| php-fpm (nginx) | `9105` |
| MySQL | `127.0.0.1:3306`, схема `himopttorg_s` |
| Пользователь БД | `himopttorg_local` / `himopttorg_local` |

`start-dev.sh` поднимает nginx + php-fpm 8.3. Если nginx недоступен — fallback на встроенный `php -S` с роутером `.local/router.php` (нужен для ЧПУ Битрикс).

Конфиг портов и БД: `.local/db.env`.

## Состав рабочей копии

| Путь | Что это | В git |
|------|---------|--------|
| `.` | Корень сайта (document root = корень git) | да, без кэша, upload и конфигов |
| `bitrix/templates/himopttorg/` | Активный шаблон сайта | да |
| `bitrix/php_interface/` | Кастомная логика, обмен с 1С | да, без `dbconn.php` |
| `bitrix/modules/askaron.pro1c/` | Модуль Askaron Pro1C (обмен с 1С) | да |
| `webdata/` | Локальная выгрузка CommerceML + картинки | нет |
| `import0_1.xml`, `offers0_1.xml` | Копии каталога и предложений | нет |
| `himopttorg_s.sql` | Дамп MySQL | нет |
| `himopttorg.tar.gz`, `webdata.zip` | Архивы | нет |

Сайт один: `s1`. Активный шаблон: **`himopttorg`**.  
Ядро лежит в `bitrix/`, папки `local/` нет — доработки в legacy-путях.

## Архитектура

```
1С:Предприятие 8.3
        │  CommerceML 2.07
        ▼
/bitrix/admin/1c_exchange.php   (+ askaron_pro1c_exchange.php)
        │
        ▼
upload/1c_catalog/   import0_1.xml + offers0_1.xml
        │
        ▼
Инфоблок 6 «Каталог товаров»  →  /catalog/
        │
        ▼
Агент catalogProductActive()  (остаток + свойство SAYT_1)
```

Каталог плоский: отдельного инфоблока торговых предложений (SKU) нет (`1C_USE_OFFERS = N`).

### Инфоблоки

| ID | Тип | Где на сайте |
|----|-----|----------------|
| 6 | `catalog` | `/catalog/` — основной каталог |
| 7 | `articles` | `/articles/` — статьи с привязкой к товарам |
| 8 | `spravochnik` | `/spravochnik-khimopttorg/` |
| 1 | `news` | в БД есть, папки `/news/` на диске нет |
| 2 | `services` | FAQ / помощь покупателю |

Цена на витрине: тип **«Типовое соглашение опт»**. НДС в сумме.

Свойство **`SAYT_1`**: товар без остатка можно оставить на сайте (подписка «уведомить о поступлении»). Без флага агент деактивирует позицию при `QUANTITY <= 0`.

## Разделы сайта

Меню: Каталог, О компании, Контакты, Доставка, Заказ продукции (`/.top.menu.php`).

- `/` — главная, текст о компании
- `/catalog/` — каталог (component `bitrix:catalog`, SEF)
- `/about/` — о компании, филиалы, вакансии, поставщики, партнёры, география
- `/contacts/` — контакты, реквизиты, схемы, обратная связь
- `/delivery/` — доставка
- `/personal/` — корзина, профиль, заказы
- `/legal/` — согласия и персональные данные
- Липецк: [l.himopttorg.ru](https://l.himopttorg.ru/)

Оплата: наличные, Сбербанк, безнал, внутренний счёт.  
Доставка: самовывоз. Курьер и SPSR в профилях выключены.

## Кастомный код

### `bitrix/php_interface/init.php`

- `bxModifySaleMails` — в письмо о заказе добавляет таблицу состава и свойства профиля покупателя (`ORDER_LIST2`, `ORDER_PARAMS`).
- Проверка **reCAPTCHA v3** на POST (секрет сейчас зашит в файл — его нужно вынести).
- Агент **`catalogProductActive()`** раз в ~3 часа:
  - `QUANTITY <= 0` и `SAYT_1 ≠ Yes` → `ACTIVE = N`
  - `QUANTITY > 0` → `ACTIVE = Y`

### Шаблон `bitrix/templates/himopttorg/`

Фиксированная вёрстка, jQuery 1.4.2, Cufon. Bootstrap нет.

Переопределены компоненты: каталог, корзина `himopt`, мини-корзина `him`, оформление `sale.order.full`, меню, поиск, подписка на товар.

### Обмен с 1С

1. 1С ходит на `/bitrix/admin/1c_exchange.php` (`type=catalog`, режимы `checkauth` → `init` → `file` → `import`).
2. Askaron Pro1C пишет лог, копирует файлы в `upload/1c_catalog_copy_askaron_pro1c/`, сбрасывает кэш.
3. `import0_1.xml` — классификатор и товары, `offers0_1.xml` — цены и остатки по складам.
4. HTTPS-редирект в `.htaccess` для `1c_exchange.php` отключён.
5. Сверка с живым каталогом: магазин → **Сверка 1С и сайта** (`/bitrix/admin/himopttorg_sverka_1c.php` или `/sverka-1c.php`). При открытии сравнивает XML из этой папки с базой сайта. Только администратор.

Ручные скрипты (не для продакшена в открытом доступе):

- `hand1CtoSite.php`
- `1c.php`

Cron-обвязка импорта: `bitrix/php_interface/include/catalog_import/cron_frame.php`.

### Склады в выгрузке 1С

В справочнике предложений 6 складов. Остатки в XML пишутся только по пяти:

1. Склад главный  
2. Склад ЛКП, химии, пластмасс, СОМ  
3. Склад РТИ, АТИ  
4. Склад сливного хозяйства, хладонов  
5. Склад ответственного хранения  

Склад **«Воронеж»** есть в классификаторе, строк `КоличествоНаСкладе` по нему нет.

Нули в `<Количество>` и `КоличествоНаСкладе` — явные нули из 1С, не «нет данных».

## Интеграции

| Сервис | Где |
|--------|-----|
| 1С CommerceML | `1c_exchange.php` + Askaron Pro1C |
| Яндекс.Метрика | `bitrix/templates/himopttorg/footer.php` |
| Яндекс.Маркет YML | `bitrix/catalog_export/yandex.php` |
| Google reCAPTCHA v3 | `init.php`, форма обратной связи |
| Почта | PHP `mail()`, события Битрикс; отправитель из настроек сайта |

Соцлогин выключен. Отдельной SMS-интеграции в кастомном коде нет.

## Развёртывание

Локально на этой машине сайт уже ходит на **http://127.0.0.1:8105/** — см. [Локальный запуск](#локальный-запуск).

Нужны PHP 8.3 (mysqli, short_open_tag), nginx или `php -S`, MySQL 8.

Корень git = корень сайта. На Бегете `public_html` — это и есть репозиторий.

Один раз, сайт уже лежит в `public_html`:

```bash
cd ~/himopttorg.beget.tech/public_html
git init
git remote add origin https://github.com/bziksv/himopttorg.git
git fetch origin
git checkout -f -B main origin/main
```

`upload/`, `dbconn.php`, `.settings.php` и `license_key.php` в git нет — `checkout -f` их не затрёт.

Потом только так:

```bash
cd ~/himopttorg.beget.tech/public_html
git pull origin main
```

Локально: создать БД `himopttorg_s` и залить дамп (файл `himopttorg_s.sql` в репозиторий не входит). Скопировать примеры конфигов:

```bash
cp bitrix/php_interface/dbconn.php.example bitrix/php_interface/dbconn.php
cp bitrix/.settings.php.example bitrix/.settings.php
cp bitrix/license_key.php.example bitrix/license_key.php
```

Права на `upload/`, `bitrix/cache/`, `bitrix/managed_cache/` — на запись для веб-сервера. HTTPS и редиректы — в `.htaccess`. `.git`, `scripts/`, `.local/` с веба закрыты.

На проде выключить `$DBDebug` и `exception_handling.debug`.

Агенты Битрикс (не crontab в репозитории):

- `catalogProductActive()` — каждые 10800 с
- `CAskaronPro1CCache::ClearManagedCacheAgent()` — кэш после обмена

## Секреты

Файлы ниже **нельзя коммитить**. Они уже в `.gitignore`.

| Файл | Что внутри |
|------|------------|
| `bitrix/php_interface/dbconn.php` | логин/пароль MySQL |
| `bitrix/.settings.php` | то же для D7 |
| `bitrix/license_key.php` | ключ лицензии Битрикс |
| `himopttorg_s.sql` | полная БД, в т.ч. пользователи и заказы |
| `adminer-*.php` | веб-доступ к БД |
| `webdata/`, `*.xml` выгрузки | ассортимент и цены |

Секрет reCAPTCHA сейчас лежит в `init.php` — файл в git пойдёт. Перед пушем в публичный репозиторий вынести ключ в игнорируемый конфиг.

После клонирования локальные `dbconn.php` и `.settings.php` остаются у каждого у себя.

## Безопасность (как есть на снимке)

- В корне сайта лежит **Adminer** — убрать с продакшена.
- `$DBDebug = true` и debug в `.settings.php`.
- Лог Askaron может весить сотни мегабайт (`log_askaron_pro1c__*.txt`).
- `mail1.php` и ручные 1С-скрипты лучше закрыть или удалить с публичного хоста.
