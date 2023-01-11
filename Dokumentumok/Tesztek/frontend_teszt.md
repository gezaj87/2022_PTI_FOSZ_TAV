# Frontend tesztek

## Jegyzőkönyv


|ID| Megnevezés | Tesztelő neve | Funkció leírása | Elvárt eredmény | Eredmény | Megfelelősségi státusz | Javítva
|-------| --------------| ------------|------------------------|------------|---------------|---------------|----|
|[1](#1)| Chart rajzolása|Orosz Norbert|Chart kirajozolása| Kirajzolás|siker |Megfelelt	||
|[2](#2)| Navbar ikon|Orosz Norbert|Átirányítás a Főoldalra| Átirányít|siker |Megfelelt	||
|[3](#3)| Táblázat rajzolása|Orosz Norbert|Tábla kirajolása| Kirajzolás|siker |Megfelelt||
|[4](#4)| Üres táblázat|Orosz Norbert|Üres tábla jelzése a felhasználónak| Információ Kiírása|siker |Megfelelt||
|[5](#5)| Bejelentkezési felület|Orosz Norbert|Regisztráció gomb|Átirányít a regisztrációs felületre |siker |Megfelelt||
|[6](#6)| Regisztrációs felület|Orosz Norbert|Regisztráció gomb|Regisztrálás |siker |Megfelelt||
|[7](#7)| Regisztrációs felület|Orosz Norbert|Mégse gomb|Visszairányít a login felületre |siker |Megfelelt||
|[8](#8)| Bejelentkezési felület|Orosz Norbert|Bejelentkezés gomb|Átirányít a főoldalra |siker |Megfelelt||
|[9](#9)| Navbar|Orosz Norbert|Navbar átirányítások|Átirányít a megfelelő weblapra |siker |Megfelelt||
|[10](#10)| Új tétel hozzáadása felület|Orosz Norbert|Rögzítés gomb|Adatbázishoz adja az új tételt |siker |Megfelelt||
|[11](#11)| Új tétel hozzáadása felület|Orosz Norbert|Törlés gomb|Kitörli a kitöltött mezők tartalmát |siker |Megfelelt||
|[12](#12)| Táblázat szűrő|Orosz Norbert|Táblázat szűrő gomb| Leszűri a tételeket az adott időszakra|siker |Megfelelt||
|[13](#13)| Táblázat Modal felület|Orosz Norbert|Táblázat sorára kattintás| Modal-al megjeleníti a kiválasztott tételt|siker |Megfelelt||
|[14](#14)| Táblázat Modal felület|Orosz Norbert|Modal felület mezők értékei| Megjeleníti az adott tétel mezőinek értékét|siker |Megfelelt||
|[15](#15)| Táblázat Modal felület|Orosz Norbert|Modal felület Törlés gomb| Kitörli a kiválasztott tételt|siker |Megfelelt||
|[16](#16)| Táblázat Modal felület|Orosz Norbert|Modal felület Bezárás gomb| Bezárja a modal felületet|siker |Megfelelt||
|[17](#17)| Táblázat Modal felület|Orosz Norbert|Modal felület Mentés gomb| Módosítja az adott tétel értékeit az adatbázisban|siker |Megfelelt||

###  1
- **Rövid leírás**:  Chart kirajzolása backend-től kapott adatok alapján
- **Elvárt működés**:  Javascriptre előkészített adatok meghívásra kerülnek a Home.php oldalról egy külső JavaScript fájlba. Ez a fájl funkciók segítségével kirajzol egy chartot a Home.php oldalra. Ezeken felül, egy külsős környezetben lévő JavaScript fájl feldolgozza a backendtől kapott adatokat, majd visszaküldi az általunk készített JavaScript fájlba.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  2
- **Rövid leírás**:  Navbar ikonja átirányít
- **Elvárt működés**: Navbarban lévő ikonra kattintva átirányításra kerül a felhasználó a Főoldalra.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  3
- **Rövid leírás**:  Táblázat kirajzolása
- **Elvárt működés**: Javascriptre előkészített adatok meghívásra kerülnek a Home.php oldalról egy külső JavaScript fájlba. Ez a fájl funkciók segítségével visszaküldi a táblázat tbody sorainak elemeit a Home.php oldalra.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt


###  4
- **Rövid leírás**:  Üres táblázat Üzenet kiírása
- **Elvárt működés**: Ha a táblázat üres, akkor jelezze ezt a felhasználónak. Előfordulás: Adott időszaknak a leszűrésénél nincs adat. A felhasználó még nem rögzített tételt, vagy kitörölte azokat.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  5
- **Rövid leírás**:  Átirányít a regisztrációs felületre
- **Elvárt működés**: A gomb lenyomásakor átirányít a regisztrációs felületre.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  6
- **Rövid leírás**:  Regisztráció gomb
- **Elvárt működés**: A gomb lenyomásakor megtörténik a regisztrálás, de csak abban az esetben, ha az összes mező ki van töltve.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  7
- **Rövid leírás**:  Regisztrációs felület Mégse gomb
- **Elvárt működés**: A gomb lenyomásakor visszairányít a login felületre.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  8
- **Rövid leírás**:  Bejelentkezési felület Bejelentkezés gomb
- **Elvárt működés**: Minden mezőnek ki kell legyen töltve a bejelentkezési felületen, ha sikeres akkor átirányít a főoldalra, ha nem, akkor hibaüzenet keletkezik.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  9
- **Rövid leírás**:  Navbar átirányít a megfelelő weblapra
- **Elvárt működés**: Navbar mezők: Főoldal -> Frissíti a jelenlegi weblapot, Új tétel hozzáadása -> átirányít a newexpense oldalra. Kijelentkezés -> kijelentkezteti a felhasználót és átirányít a login oldalra.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  10
- **Rövid leírás**:  Rögzítés gomb, az adatbázishoz adja az új tételt
- **Elvárt működés**: Minden mező kitöltése után, az adatbázishoz adja a gomb az új tételt.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  11
- **Rövid leírás**:  Törlés gomb kitörli a kitöltött mezők tartalmát
- **Elvárt működés**: Törlés gomb kitörli a kitöltött mezők tartalmát a newexpense oldalon.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  12
- **Rövid leírás**:  Táblázat szűrő gomb leszűri a tételeket az adott időszakra
- **Elvárt működés**: Alapértelmezetten a dátum mezők az adott hónap időszakát tartalmazzák, ez átírható és a szűrő gomb megnyomása után az adott időszakra szűri le a tételeket, amit aztán kirajzolunk a chartra és megjelenítünk a táblázatban.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  13
- **Rövid leírás**:  Táblázat egyik tételének megjelenítése, módosítása, törlése.
- **Elvárt működés**: Táblázat egyik sorára kattintással megjeleníti az adott tétel adatait modal segítségével.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  14
- **Rövid leírás**:  Modal felületen megjeleníti az adott tétel mezőinek értékét
- **Elvárt működés**: A kitölthető textboxoknak az alapértelmezett értékei a kiválasztott tétel mezőinek értékeivel változik.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  15
- **Rövid leírás**:  Modal felület Törlés gomb, kitörli a kiválasztott tételt
- **Elvárt működés**: A törlés gomb kitörli a kiválasztott tételt.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  16
- **Rövid leírás**:  Modal felület Bezárás gomb lenyomásával bezárja a modalt
- **Elvárt működés**: Modal felület Bezárás gomb lenyomásával bezárja a modalt
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  17
- **Rövid leírás**:  Modal felület Mentés gomb megnyomásával módosítja az adott tétel értékeit az adatbázisban
- **Elvárt működés**: Ha minden mező ki van töltve, akkor a módosított adatokat elmenti az adatbázisba.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt