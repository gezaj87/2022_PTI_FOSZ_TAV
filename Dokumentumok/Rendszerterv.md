# Rendszerterv

## 1. A rendszer célja

A rendszer célja, hogy a felhasználók képesek legyenek gyorsan és kényelmesen rögzíteni kiadásaikat, ezáltal nyomon követve azokat. A rendszernek nem célja a bevételek figyelése, így kizárólag a kiadásokról ad tájékoztatást.

## 2. Projekt terv

### 2. 1 Projektszerepkörök, felelősségek

A rendszer létrehozásához rendelkezésre álló erőforrások kezelése a GitHub felületen történik. Az alpontokban találhatóak a projektmunkások és felelősségeik, valamint az ütemterv és mérföldkövek.

### 2.2 Projektmunkások és felelősségeik

**Frontend:**
| Projektmunkások |
| --------------- |
| Orosz Norbert |
| Poglár Gábor |

| Felelősségek                                    |
| ----------------------------------------------- |
| Kliensoldali ellenőrzések kialakítása           |
| Felhasználók által elérhető felület kialakítása |

**Backend:**
| Projektmunkások |
| --------------- |
| Jóni Géza |
| Tóth Levente |

| Felelősségek                       |
| ---------------------------------- |
| Backend szolgáltatások kialakítása |
| Adatbázis szerkezetek kialakítása  |

**Tesztelés:**
| Projektmunkások |
| --------------- |
| Poglár Gábor |
| Orosz Norbert |
| Tóth Levente |
| Jóni Géza |

| Felelősségek                                         |
| ---------------------------------------------------- |
| A szoftverekben meglévő esetleges hibák felderítése. |

### 2.3 Ütemterv

| Funkció                   | Feladat                                    |
| ------------------------- | ------------------------------------------ |
| Követelmény specifikáció  | Követelmény specifikáció elkészítése       |
| Funkcionális specifikáció | Funkcionális specifikáció elkészítése      |
| Rendszerterv              | Rendszerterv és képernyőtervek elkészítése |
| Adattárolás               | Adatmodell megtervezése                    |
| Adattárolás               | Adatbázis megvalósítása                    |
| Honlap                    | Backend és frontend megvalósítása          |
| Honlap                    | Backend frontend összekapcsolása           |
| Honlap                    | Rendszer tesztelése                        |

### 2.4 Mérföldkövek

| Időpont    | Mérföldkő                                |
| ---------- | ---------------------------------------- |
| 2022.09.18 | Projektmunkák és felelősségeik kiosztása |
| 2022.11.18 | Projekt prototipus bemutatása            |
| 2022.11.30 | Elkészült projekt átadása                |

## 3. Üzleti folyamatok modellje

A rendszert nem lehet regisztrálás nélkül használni. A látogató a kezdőoldalt képes elérni és azon keresztül bejelentkezni, vagy regisztrálni a rendszerbe. A bejelentkezett felhasználó képes új tételeket hozzáadni a meglévőköz, vagy a meglévőket lekérdezni, valamint dátum szerint szűrni azokat.

### 3.1 Üzleti szereplők

A bejelentkezés minden felhasználó számára egységesen a következő: A főoldalra lépve megjelenik a ’Email’ és ’Jelszó’ beviteli űrlap. A mezők kitöltése után a ’Belépés’ gombra kattintva tud bejelentkezni a felhasználó. Ha az azonosítás sikeres, akkor a felhasználó belépett és megjelenik a jogosultságának megfelelő felület. Ha sikertelen az azonosítás, hibaüzenet jelenik meg.

### 3.2 Üzleti folyamatok

Üzleti folyamatok a felhasználók számára:

**Felhasználói adatok megjelenítése**

| Megnevezés                 |
| -------------------------- |
| A felhasználó neve         |
| A felhasználó jelszava     |
| A felhasználó email címe   |
| A felhasználó telefonszáma |

**Tételek megjelenítése és szűrése**

| Megnevezés                       |
| -------------------------------- |
| A tétel szűrése ettől a dátumtól |
| A tétel szűrése eddig a dátumig  |
| A tétel megnevezése              |
| Kategória megnevezése            |
| A tétel összege                  |
| A tétel létrehozásának dátuma    |

**Új tétel rögzítése**

| Megnevezés                    |
| ----------------------------- |
| Kategória megnevezése         |
| A tétel megnevezése           |
| A tétel összege               |
| A tétel létrehozásának dátuma |

**Meglévő tételek módosítása vagy törlése**

| Megnevezés                    |
| ----------------------------- |
| A tétel megnevezése           |
| Kategória megnevezése         |
| A tétel összege               |
| A tétel létrehozásának dátuma |

### 3.3 Üzleti entitások

| Entitások |
| --------- |
| Tétel     |
| Kategória |

## 4. Követelmények

**Regisztrált felhasználók lehetőségei**

- Regisztrációs adatok módosítása
- Regisztráció törlése
- Új kiadás rögzítése
- Korábban rögzített kiadás módosítása
- Korábban rögzített kiadás törlése
- Kiadások lekérdezése, szűrése
- Statisztikai információk, digrammok megtekintése

**Adminisztrátorok lehetőségei**

- Bejelentkezési adatok módosítása (e-mail és jelszó)
- Adminisztrátor hozzáadás
- Adminisztrátorok és Felhasználók törlése
- Felhasználók listájának elérése
- Statisztikai adatok megtekintése a felhasználók vonatkozásában

**Funkcionális követelmények**

A rendszer használatához mindenképpen szükséges egy előzetes regisztráció az oldalon keresztül. A regisztrációval létrejövő felhasználói fiókkal lehetséges belépni az oldalra és megkezdeni annak használatát. Belépés nélkül csak a regisztráció és a bejelentkezés lehetséges.

**Nemfunkcionális követelmények**

- A rendszer használata gyorsan és könnyen elsajátítható.
- Felhasználó szintű informatikai tudás megléte szükséges.
- Előzetes oktatást nem igényel.
- A rendszer üzembehelyezése egy szerver számítógépen történik, tetszőleges operációs rendszeren melyen az alábbi platformok megléte feltétel:
  - Apache webszerver
  - MySQL adatbázis szerver
  - PHP futtatói környezet
  - FTP vagy Shell hozzáférési lehetőség

**Törvényi előírások, szabványok**

`Szerzői jogi törvény (1999. évi LXXVI. törvény; röviden: Szjt.), illetve a 2016. évi XCIII. törvény A szerzői jogok és a szerzőijoghoz kapcsolódó jogok közös kezeléséről`

`2018. évi LIV. törvény az üzleti titok védelméről`

`1. évi CCXXII. törvény az elektronikus ügyintézés és a bizalmi szolgáltatások általános szabályairól`

`187/2015. (VII. 13.) Korm. rendelet az elektronikus információs rendszerek biztonsági felügyeletét ellátó hatóságok, valamint az információbiztonsági felügyelő feladat- és hatásköréről, továbbá a zárt célú elektronikus információs rendszerek meghatározásáról`

`Az ISO / IEC 12207 a nemzetközi szabvány, amely tartalmazza a szoftver életciklusának kiválasztási, bevezetési és ellenőrzési módszerét.`

`Az ISO 9000 leírja a termékek előállításának hivatalosan szervezett folyamatát, valamint az előrehaladás irányításának és nyomon követésének módszereit.`

`ISO / IEC 15504 Információs technológia — folyamatértékelés, más néven a szoftverfolyamat-fejlesztési képesség meghatározása (SPICE), "a szoftverfolyamatok értékelésének kerete".`

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

A rendszer használatához mindenképpen szükséges regisztrálni az oldalon keresztül.
A rendszerbe regisztrált felhasználó képes új tételeket hozzáadni és ehhez kategóriát hozzá rendelni, meglévő tételeket módosítani, valamint törölni azokat. Ezeken kívül lehetőség van szűrni is meglévő tételeket.

### 5.2 Rendszerhasználati esetek és lefutásaik

**Regisztráció**

![Regisztráció](PNG/rendszerterv.funkcionalis-terv.diagram-regisztracio.png)

**Szűrés**

![Szűrés](PNG/rendszerterv.funkcionalis-terv.diagram-szures.png)

**Új tétel hozzáadása**

![Új tétel hozzáadása](PNG/rendszerterv.funkcionalis-terv.diagram-uj-tetel.png)

**Meglévő tétel módosítása**

![Meglévő tétel módosítása](PNG/rendszerterv.funkcionalis-terv.diagram-tetel-modositas.png)

**Meglévő tétel törlése**

![Meglévő tétel törlése](PNG/rendszerterv.funkcionalis-terv.diagram-tetel-torles.png)

### 5.3 Határ osztályok

**Felhasználói tevékenységeihez kapcsolódó határosztályok:**

![Határosztályok](PNG/rendszerterv.funkcionalis-terv.diagram-hatarosztalyok.png)

### 5.4 Menühierarchiák

**Elérhető funkciók regisztráció nélkül:**

- Bejelentkezés
- Regisztráció

**Elérhető funkciók regisztrációval:**

- Új tétel rögzítése
- Tételek megjelenítése
- Tételek szűrése
- Tételek módosítása
- Tételek törlése

## 6. Fizikai környezet

### 6.1 Platformok

- PHP 8.1
- MySQL 8.0
- JavaScript 1.5
- HTML 5

### 6.2 Vásárolt softwarekomponensek és külső rendszerek

- Nincsenek vásárolt szoftverkomponensek.
- Ingyenes szoftverkomponensek:
  - Bootstrap CSS framework
  - Chart.js javascript library diagram készítéshez

### 6.3 Hardver és hálózati topológia

Az alkalmazás webplatformra készül. Bármely operációs rendszerrel kompatibilis.

### 6.4 Fizikai alrendszerek

Webszerver: 80-as porton elérhető HTTP szolgáltatás
MySQL adatbázis szerver.
A böngésző rendszerkövetelményeinek megfelelő kliens

### 6.5 Fejlesztő eszközök

Visual Studio Code, Apache NetBeans, MySQL Workbench, Github

## 7. Absztrakt domain modell

### 7.1 Domainspecifikáció, fogalmak

**Felhasználó**
A rendszert használó személy, aki rendelkezik a regisztrációkor megadott adatokkal.

**Tétel**
A felhasználó által létrehozott kiadásokat tartalmazó adatok.

**Kategória**
A tételekhez rendelhető kategorizálást segítő adatok.

### 7.2 Absztrakt komponensek, ezek kapcsolatai

![Absztrakt komponensek es ezek kapcsolatai](PNG/rendszerterv.absztrakt-domain-modell.absztrakt-komponensek.png)

A felhasználó képes létrehozni tételeket, ahol a tételeknek meg tud adni egy kategóriát.
Egy falhasználóhoz több kategória is tartozhat, de egy tételnek csak egy kategóriája lehet.

## 8. Architekturális terv

A Backend PHP programozási nyelven készül OOP alapokon. A készítés során az MVC (model-view-controller) programtervezési minta érvényesül.

A Frontend HTML, CSS, Javascript és PHP programozási nyelveken készül.
A weboldal felépítése elkülönül Header (fejléc), Navigation (navigáció), Content (tartalom) és Footer (lábléc) szegmensekre a könnyebb átláthatóság és a későbbi fejlesztések megkönnyítése érdekében.

### 8.1 Az alkalmazás rétegei, fő komponensei, ezek kapcsolatai

A felhasználó webböngészőn, HTML oldalakon keresztül tud navigalni. A CRUD műveletek HTTP GET és POST metódus formájában kerülnek átadásra szerver-kliens és kliens-szerver relációban, amiket aztán MySQL adatbázisban írunk és olvasunk.
A weboldal egy Apache webszerveren fut.

### 8.2 Változások kezelése

A változások a szerver oldalon történnek, ezért a kliens oldalon a felhasználónak nincs tennivalója a változások kezelésére.

### 8.3 Rendszer bővíthetősége

A rendszer bővíthető több szervergép csatlakoztatása esetén.
Vékony kliens oldalon nincs szükség beavatkozásra.

### 8.4 Biztonsági funkciók

CSRF TOKEN (cross-site request forgery) implementálása.
Bejelentkezéskor a hitelesítés után a szerver készít kriptográfiai algoritmussal egy egyedi TOKEN-t, melyet elment a PHP seassion-ben. Amikor a felhasználó a kliens oldalon védett tartalmat kíván megtekinteni, a PHP ellenőrizni fogja a TOKEN jelenlétét, hitelességét. Ez garantálja, hogy a kérés a weboldalon keresztük, a kliens böngészőjében történik.

## 9. Adatbázisterv

**Felhasználók tábla**

| Mezőnév         | Megnevezés                                         | Jellemzi:        |
| --------------- | -------------------------------------------------- | ---------------- |
| ID              | Felhasználó azonosító                              | Elsődleges kulcs |
| Név             | A felhasználó neve                                 |                  |
| Email cím       | A felhasználó email címe                           |                  |
| Jelszó          | A felhasználó jelszava                             |                  |
| Születési dátum | A felhasználó születési dátuma                     |                  |
| Telefonszám     | A felhasználó telefonszáma                         |                  |
| Admin           | A felhasználó normál vagy adminisztrátor jogkörrel |                  |
| Valid           | A felhasználó érvényessége a rendszerben           |                  |

**Kategóriák tábla**

| Mezőnév | Megnevezés                             | Jellemzi:        |
| ------- | -------------------------------------- | ---------------- |
| ID      | Kategória azonosító                    | Elsődleges kulcs |
| Név     | A kategória neve                       |                  |
| Valid   | A kategória érvényessége a rendszerben |                  |

**Tételek tábla**

| Mezőnév        | Megnevezés                                  | Jellemzi:        |
| -------------- | ------------------------------------------- | ---------------- |
| ID             | Tétel azonosító                             | Elsődleges kulcs |
| Megnevezés     | A tétel megnevezése                         |                  |
| Kategória      | A tételhez kapcsolódó kategória azonosító   |                  |
| Összeg         | A tétel összege                             |                  |
| Felhasználónév | A tételhez kapcsolódó felhasználó azonosító |                  |
| Dátum          | A tétel létrehozásának dátuma               |                  |
| Valid          | A tétel érvényessége a rendszerben          |                  |

### 9.1 Logikai adatmodell

![Logikai adatmodell](PNG/rendszerterv.adatbazisterv.logikai-adatmodell.png)

### 9.2 Egyed-Kapcsolat diagram

![Egyed-Kapcsolat diagram](PNG/rendszerterv.adatbazisterv.egyed-kapcsolat-diagram.png)

### 9.3 Fizikai adatmodellt legeneráló szkriptek

**Adatbázis létrehozása**

```sql
CREATE DATABASE IF NOT EXISTS ekke_proj_schema;
```

**Felhasználók tábla**

| Megnevezés      | Típus    | Hossz | Alapérték |
| --------------- | -------- | ----- | --------- |
| ID              | Integer  |       |           |
| Név             | String   | 100   |           |
| Email cím       | String   | 60    |           |
| Jelszó          | String   | 60    |           |
| Születési dátum | Datetime |       |           |
| Telefonszám     | String   | 15    | '0'       |
| Admin           | Boolean  |       | 0         |
| Valid           | Boolean  |       | 1         |

```sql
CREATE DATABASE IF NOT EXISTS ekke_proj_schema;

CREATE TABLE `ekke_proj_schema`.`felhasznalok` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `jelszo` VARCHAR(60) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `nev` VARCHAR(100) NOT NULL,
  `szuldatum` DATETIME NOT NULL,
  `telefonszam` VARCHAR(15) DEFAULT '0',
  `valid` TINYINT NOT NULL DEFAULT 1,
  `admin` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);
```

**Kategóriák tábla**

| Megnevezés | Típus   | Hossz | Alapérték |
| ---------- | ------- | ----- | --------- |
| ID         | Integer |       |           |
| Név        | String  | 40    |           |
| Valid      | Boolean |       | 1         |

```sql
CREATE TABLE `ekke_proj_schema`.`kategoriak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nev` varchar(30) NOT NULL,
  `valid` tinyint NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nev_UNIQUE` (`nev`));
```

**Tételek tábla**

| Megnevezés     | Típus   | Hossz | Alapérték |
| -------------- | ------- | ----- | --------- |
| ID             | Integer |       |           |
| Megnevezés     | String  | 30    |           |
| Kategória      | String  | 30    |           |
| Összeg         | Integer |       |           |
| Felhasználónév | String  | 35    |           |
| Dátum          | Date    |       |           |
| Valid          | Boolean |       | 1         |

```sql
CREATE TABLE `ekke_proj_schema`.`tetelek` (
  `id` int NOT NULL AUTO_INCREMENT,
  `megnevezes` varchar(30) NOT NULL,
  `kategoriaid` int NOT NULL,
  `osszeg` int NOT NULL,
  `felhasznaloid` int NOT NULL,
  `datum` datetime NOT NULL,
  `valid` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_tetelek_felhasznalo` FOREIGN KEY (`felhasznaloid`) REFERENCES `felhasznalok` (`id`),
  CONSTRAINT `fk_tetelek_kategoria` FOREIGN KEY (`kategoriaid`) REFERENCES `kategoriak` (`id`);
```

## 10. Implementációs terv

A felhasználó webböngészőn keresztül éri el a vékony klienst, vagyis a weboldalakat. Ezek a weboldalak HTML, CSS, JavaScript programozási nyelvekben készülnek. Az adatokat MySQL adatbázis szerveren tárolódnak, melyet az üzleti logika rétegében futó PHP program kapcsol össze a GUI felülettel.

### 10.1 Perzisztencia (adatbázis osztály)

MySQL adatbázis szerver

### 10.2 Üzleti logika osztályai

Webszerveren futó PHP program

### 10.3 Kliens oldal osztályai

HTML, CSS, JavaScript

## 11. Tesztterv

A tesztterv célja, hogy a tesztelőknek iránymutatást adjon azokról a lépésekről, amik ahhoz szükségesek, hogy megbizonyosodjanak a fejlesztők arról, hogy a szoftver teljességét adó komponensek külön-külön és egy egységként is az üzleti folyamatoknak megfelelően működik.

Jelen esetben a szoftvert tesztelők egyben a fejlesztők is.

### 11.1 Unit-teszt:

A fejlesztés és a programkód változások során szükséges a metódusokat és funkciókat tesztelni. Ezeket a teszteléseket a fejlesztés első néhány szakaszában a programkódba beégetett adatokkal tudja elvégezni. Ellenőrizni kell, hogy a fejlesztés során megírt kódok megfelelnek-e az üzleti folyamatoknak és a funkcionális követelményeknek.

### 11.2 A rendszerbe lépés tesztelése:

Amikor a rendszerhez hozzákapcsolunk egy új komponenst, akkor meg kell győződni, hogy minden az igényeknek megfelelően működik. Az adatok áramlásának követése több komponens között.

### 11.3 Biztonsági teszt:

Az adatokhoz csak az adott bejelentkezett felhasználó fér hozzá, olvasásra és írásra. Illetéktelenek és a nem bejelentkezett felhasználok ne tudják módosítani az adatbázist.

### 11.4 GUI tesztelése:

Meg kell győződni arról, hogy a felhasználói felület megfelel-e a képernyőterveknek. Ha megfelel, akkor ezt a felületet be kell mutatni a megrendelőnek, a projekt menedzsernek vagy a tulajdonosnak. Ha van a felhasználói felületben igény változás, akkor ahhoz kell igazítani és dokumentálni. A módosítás lefejlesztése után újra be kell mutatni.

### 11.5 Általános felhasználóként való tesztelés:

Admin jogosultság nélküli felhasználó szimulálása, annak érdekében, hogy a végfelhasználók szemszögéből lássák a program működését a tesztelők, most a fejlesztők is.

**Bejelentkezési felület:**

A felhasználó be tud-e jelentkezni.

Mezők:

- E-mail cím: e-mail típus.Kötelező kitölteni.
- Jelszó: password típus. Kötelező kitölteni.

Regisztrációs felület:

Mezők:

- E-mail cím: e-mail típus.Kötelező kitölteni.
- Jelszó: password típus. Kötelező kitölteni.
- Jelszó újra: password típus és meg kell egyeznie a Jelszó mező értékkel. Kötelező kitölteni.
- Telefonszám: tel típus. Kötelező kitölteni.

**Főoldal:**

Navigáció:

- Új tétel hozzáadása: átirányítás az ujtetel.html-re.
- Tételek megtekintése: átirányítás a tetelek.html-re.
- Kijelentkezés: Kijelentkezteti a felhasználót.
- Grafikon helyes működésének ellenőrzése.

Mezők és lapozó:

- Dátum-tól: Dátum típus. Nem kötelező a kitöltés
- Dátum-ig: Dátum típus. Nem kötelező a kitöltés
- Lapozási funkció működése.

**Új tétel hozzáadása:**

Navigáció:

- Főoldal: átirányítás a fooldal.html-re
- Tételek megtekintése: átirányítás a tetelek.html-re
- Kijelentkezés: Kijelentkezteti a felhasználót.

Mezők:

- Kategória: Az adatbázisban szereplő kategóriák. Dropbox típus. Kötelező kitölteni.
- Megnevezés: Speciális karakter nem elfogadott. Text típus. Kötelező kitölteni.
- Összeg Ft-ban: Number típus, vagyis csak a számok elfogadottak. Kötelező kitölteni.
- Dátum: Dátum típus. A tételhez tartozó időpontot kell rögzíteni. Kötelező kitölteni.

Gombok:

- Rögzítés: Rögzíti a tételt.
- Törlés: Kitörli az eddig kitöltött mezőket.

**Tételek megtekintése:**

Navigáció:

- Főoldal: átirányítás a fooldal.html-re
- Új tétel hozzáadása: átirányítás az ujtetel.html-re
- Kijelentkezés: Kijelentkezteti a felhasználót.

Műveletek és lapozó:

- Módosítás: átirányítás a modosit.html-re.
- Törlés: Kitörli az adott tételt.
- Lapozási funkció működése.

**Tétel módosítása:**

Navigáció:

- Főoldal: átirányítás a fooldal.html-re
- Tételek megtekintése: átirányítás a tetelek.html-re
- Kijelentkezés: Kijelentkezteti a felhasználót.

Mezők:

- Kategória: Az adatbázisban szereplő kategóriák. Dropbox típus. Kötelező kitölteni.
- Megnevezés: Speciális karakter nem elfogadott. Text típus. Kötelező kitölteni.
- Összeg Ft-ban: Number típus, vagyis csak a számok elfogadottak. Kötelező kitölteni.
- Dátum: Dátum típus. A tételhez tartozó időpontot kell rögzíteni. Kötelező kitölteni.

Gombok:

- Módosítás: Módosítja az adatbázisban meglévő adatokat, az új bevitt adatokra.
- Mégse: Visszairányít a tetelek.html-re.

### 11.6 Határidők:

| Megnevezés                               | Komment                            | Határidő   |
| ---------------------------------------- | ---------------------------------- | ---------- |
| Unit-teszt                               | Fejlesztés alatt folyamatosan      | 2022.11.05 |
| GUI tesztelése                           | Fejlesztés alatt folyamatosan      | 2022.11.05 |
| A rendszerbe lépés tesztelése            | Fejlesztés alatt folyamatosan      | 2022.11.10 |
| Biztonsági teszt                         | Funkció implementálása után        | 2022.11.07 |
| Általános felhasználóként való tesztelés | Összes implementált komponens után | 2022.11.22 |
| Végső tesztelés                          | Átadás előtti pillanat             | 2022.12.05 |

### 11.7 Jegyzőkönyv:

| Megnevezés                               | Tesztelő neve | Funkció leírása | Elvárt eredmény | Eredmény | Megfelelősségi státusz |
| ---------------------------------------- | ------------- | --------------- | --------------- | -------- | ---------------------- |
| Unit-teszt                               |               |                 |                 |          |                        |
| Unit-teszt                               |               |                 |                 |          |                        |
| GUI tesztelése                           |               |                 |                 |          |                        |
| GUI tesztelése                           |               |                 |                 |          |                        |
| A rendszerbe lépés tesztelése            |               |                 |                 |          |                        |
| A rendszerbe lépés tesztelése            |               |                 |                 |          |                        |
| Biztonsági teszt                         |               |                 |                 |          |                        |
| Általános felhasználóként való tesztelés |               |                 |                 |          |                        |
| Általános felhasználóként való tesztelés |               |                 |                 |          |                        |
| Végső tesztelés                          |               |                 |                 |          |                        |

## 12. Telepítési terv

### 12.1. Szerver oldalon

1. Windows, Linux vagy macOS operációs rendszer telepítése
2. Hálózati, Internet beállítások
3. MySQL telepítés, konfigurálás:
   - Alapértelmezett 3306-os port használata
   - Jogosultságok beállítása
   - Táblák feltöltése
4. PHP telepítés, konfigurálás
5. Apache webszerver telepítés, konfigurálás
6. Tűzfal beállítások

### 12.2. Kliens oldalon

- Tetszőleges webkliens software telepítése
- Internethozzáférés

## 13. Karbantartási terv

- Átfogó tesztelések 1-1 nagyobb webböngésző verzióváltása esetén.
- Felhasználói panaszok kivizsgálása.
- A rendszer üzemeltetői igényeinek kielégítése, új funkciók implementálása.
- Időszakos adatbázis karbantartás, biztonsági mentések.
