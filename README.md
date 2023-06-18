<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Running the app

Install sail:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Start docker container:
```
./vendor/bin/sail up
./vendor/bin/sail bash
```

OR

Run on local server

Install dependencies:
```
composer install
npm i
```

Transpile assets:
```
npm run dev
```

Copy env and generate key:
```
cp .env.example .env
php artisan key:generate
```

Run migrations and seeders:
```
php artisan migrate:fresh --seed
```

Run tests:
-- Inside docker bash
```
php artisan test
```

-- Outside
```
./vendor/bin/sail test
```

## About

Ukolem bude vytvorit jednoduchy evidencni system pro knihovnu... 

Vznikne samostatna stranka s vypisem vsech entit v knihovne, kde bude pouzita paginace a filtrace (full-text vyhledavani na zaklade nazvu dane entity). Z teto stranky, v radku konretni entity bude presmrovaci tlacitko na detail teto entity s vypisem vsech informaci o entite a o autorovi teto entity. Na detailni strance bude tlacitko presmerujici na vypis vsech entity v knihovne. 

Doprovodne info: Entitou se rozumi: kniha, casopis, elektronicky nosic (pujde tady o ukazku pochopeni prace s polymorfismem) Entita bude popsana minimalne temito parametry: name, description Dale kazda entita bude mit vazbu na autora, ten bude popsan alespon temito parametry: full_name, email V ramci vypracovani neni nutne dbat na CUD operace (z CRUD operaci) 

BE: Pro poutizi je vyzadovan laravel v (idealne) nejnovejsi verzi 10

FE: Tady na tom nesejde, klidne nejaky JS framework, klidne blade template system od laravelu...
