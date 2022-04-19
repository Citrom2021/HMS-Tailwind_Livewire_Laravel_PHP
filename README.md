# AuthFinal-HMS
Composer telepítése: 
1.	Composer telepítése exe fájl formátumban az alábbi webhelyről: https://getcomposer.org/download/
2.	Letöltött exe fájl futtatása és telepítése a legújabb php verzóval
3.	Parancssor megnyitása és a “composer” szó beírásával majd az “Enter” szó leütésével ellenőrizzük, hogy a composer sikeresen települt a Windows 10 környezetben
Laravel telepítése:
1.	composer global require laravel/installer 
Projekt mappa készítése és Laravel telepítése:
1.	composer create-project --prefer-dist laravel/laravel ProjektNév 
2.	Ezután cd az az be kell lépni a laravel ProjektNév projekt mappába és ott Git bash vagy Új terminál VS Code programban
3.	php artisan migrate
Jetstream telepítése:
1.	composer require laravel/Jetstream
2.	php artisan jetstream:install livewire
3.	php artisan jetstream:install inertia
4.	npm install
5.	npm run dev
6.	php artisan migrate
7.	php artisan vendor:publish --tag=jetstream-views
8.	npm run dev
Laravel Sanctum telepítése:
1.	composer require laravel/sanctum
2.	php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
3.	php artisan migrate
Laravel Fortify telepítése
1.	composer require laravel/fortify
2.	php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
3.	php artisan migrate
Doctrine Dbal telepítése
1.	composer require doctrine/dbal
Clone Laravel projekt: 
1.	A file explorerben job egér gomb klikkel vagy Git bash here vagy open with VS code-al meg kell nyitni egy mappát és oda klónozni a git clone parancsal a project mappát, avagy azt letölteni a Github URL-ről zip formátumban. A klónozáshoz új Terminál ablakot kell létesíteni a VS Code-ban vagy a projekt mappában job klikk és a GIT bash here parancsal lehet Terminált létesíteni.
2.	Egy Terminálban beírni a következő parancsokat:
3.	git clone 'url'
4.	ha megvan a projekt a lokális mappában akkor be kell lépni az AuthFinal-HMS klónozott mappába és annak az egész tartalmát Ctrl+ A paranccsal kijelölni és Ctrl-C / Ctrl +V billentyűk segítségével át kell másolni a korábban composer-el létrehozott ProjektNév mappába, ahol már a teljes környezet kiépítésre került (composer create-project --prefer-dist laravel/laravel ProjektNév)
5.	Be kell lépni a laravel ProjektNév mappába, amit korábban megadott a Laravel project készítésénél
6.	A ProjektNév mappát megnyitni VS Code alkalmazással
7.	Itt New Terminal parancsal új terminált létesítünk
8.	composer install
9.	npm install
10.	npm run dev
11.	Env file konfigurálása a lejjeb található env paraméterek bemásolása

Env file konfigurálása:
Fontos az alábbi változók bemásolása az env fájlba (kivéve az APP_KEY változót, mivel azt a “php artisan key:generate” parancs generálja majd) mivel ezek a pamatéterek adják a környezet konfigurációját.
Az ENV File a Docs mappában található a Vizsgaremek PDF-ben van benne a az env paraméterek


12.	php artisan key:generate
13.	php artisan migrate (migrációs hiba esetén törölni kell a duplikált migrációs táblát (database/migrations útvonaon a VS doce-banl) és a http://localhost/phpmyadmin oldalon, például ebben az esetben 
 
a ’sessions’ táblát, majd újra kell migrálni a ’php artisan migrate’ parancsal 
 

Duplikált session table migration esetén akár törölhetjük a korábbi verziót, persze előtte érdemes ellenőrizni, hogy tartalmilag megegyezik a két fájl.
14.	php artisan migrate:fresh
15.	npm run watch
16.	 Adatbázis feltöltése:
a.	http://localhost/phpmyadmin/ oldalra látogatni: 
b.	Drop database laravel az adatbázis eldobása
c.	Újra csinálni egy laravel nevű adatbázist
d.	A Laravel.sql fájlt a http://localhost/phpmyadmin/  laravel adatbázisban az Import gombra kattintra, majd a ‘Choose file’ gombra kattintva be tudjuk illeszteni, majd a ‘Go’ gomb megnyomásával be is importáljuk az összes korábban bevitt, megadott és exportált adatot.

i.	Opciónálisan: A user táblát fel tudjuk tölteni random user adatokkal a AuthFinal-HMS\database\seeders\DatabaseSeeder.php elérési útvonalon található fájl alapján a faker segítségével, a “php artisan db:seed” parancsal

17.	A Laravel fejlesztési szerver indítása: php artisan serve
18.	Xampp Control Panel start Apach és MySQL ellenőrzése
19.	http://127.0.0.1:8000/ URL-t beírni a böngészőbe
A jobb felső sarokban található Login illetve Register gombokkal a /login:
Mind regisztráció mind jelszó elfelejtés esetén email-es jóváhagyásra van szükség.
Email küldés:
A web appon történt regisztráció után a regisztrációt jóvá kell hagyni email-en keresztül, egy felhasználó csak azután tudja használni a programot, hogyha a regisztrációt követően igazolta email címét, valamint jelszó visszaállítás, helyre állítás is emailben küldött linken keresztül működik.
Az email funkciók teszteléséhez és használatához a MailTrap szolgáltatását vettük igénybe.
Mailtrap bemutatása:
A Mailtrap hamis SMTP-kiszolgálót biztosít a fejlesztőcsapat számára, amellyel tesztelheti, megtekintheti és megoszthatja a gyártás előtti környezetekből küldött e-maileket, és valós adatokkal tesztelheti anélkül, hogy fennállna a valódi ügyfelek spamküldésének veszélye. A Railsware készítette, és számos fejlesztési feladathoz a Mailtrap használata ingyenes.
Lényegében regisztrál a Mailtrap szolgáltatásra, és minden e-mailt elküld a gyártás előtti környezetből a hamis Mailtrap SMTP-kiszolgálón keresztül.
A MailTrap segítségével e-maileket rögzíthet a tesztelési fejlesztői és állomásozó környezetekből
Ezután minden levele a Mailtraphez tartozik. Megtekintheti és hibakeresheti e-mailjeit a Mailtrap barátságos grafikus felületén.
A Mailtrap segítségével akár valódi felhasználói e-maileket tartalmazó kiíratásokat is elhelyezhet a termelési adatbázisában, tesztek segítségével az átmeneti kiszolgálón. Automatizált tesztjei ellentmondhatnak a valós adatoknak – ha e-mailt küldenek a Mailtrap-on keresztül, így kiküszöbölhető annak a kockázata, hogy a teszte-mailek valódi ügyfelek e-mail címére menjenek.
URL: https://mailtrap.io/
Ahhoz, hogy regisztrálni tudjunk a honlapon, a fenti URL-en be kell jelentkezni az alábbi paraméterekkel.
A projekthez tartozó felhasználónév és jelszó, ezekkel kell belépni a honlapon.
Felhasználónév: emailsenderz53@gmail.com
Jelszó: Email23$

Amennyiben Xampp Apache és MySQl még mindig aktív, valamint a Laravel development server is az akkor: http://127.0.0.1:8000/  vagy a http://127.0.0.1:8000/index oldalakon be tud jelentkezni, mint felhasználó a honlapon vagy regisztrálni is tud. Az alábbi fiókokat is lehet használni tesztelésre:
Adminisztrátor fiók:
felhasználónév/ email:  admin@gmail.com
jelszó: Admin111$

Vendég fiók:
	felhasználónév/ email:  user2@gmail.com
jelszó: User222$
Minden esetben új regisztráció esetén figyelni kell, hogy a jelszó megadásánál a jelszónak minimum 8 karakterből kell állnia, legyen benne betű, szám és speciális karakter és egy nagy betű is.


