<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Running the app

LaravelLibraryExample app.

Run application:
./vendor/bin/sail up


## About

Ukolem bude vytvorit jednoduchy evidencni system pro knihovnu... 

Vznikne samostatna stranka s vypisem vsech entit v knihovne, kde bude pouzita paginace a filtrace (full-text vyhledavani na zaklade nazvu dane entity). Z teto stranky, v radku konretni entity bude presmrovaci tlacitko na detail teto entity s vypisem vsech informaci o entite a o autorovi teto entity. Na detailni strance bude tlacitko presmerujici na vypis vsech entity v knihovne. 

Doprovodne info: Entitou se rozumi: kniha, casopis, elektronicky nosic (pujde tady o ukazku pochopeni prace s polymorfismem) Entita bude popsana minimalne temito parametry: name, description Dale kazda entita bude mit vazbu na autora, ten bude popsan alespon temito parametry: full_name, email V ramci vypracovani neni nutne dbat na CUD operace (z CRUD operaci) 

BE: Pro poutizi je vyzadovan laravel v (idealne) nejnovejsi verzi 10

FE: Tady na tom nesejde, klidne nejaky JS framework, klidne blade template system od laravelu...


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
