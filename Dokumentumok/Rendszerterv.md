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
| Orosz Norbert   |
| Poglár Gábor    |

| Felelősségek                                    |
| ----------------------------------------------- |
| Kliensoldali ellenőrzések kialakítása           |
| Felhasználók által elérhető felület kialakítása |

**Backend:**
| Projektmunkások |
| --------------- |
| Jóni Géza       |
| Tóth Levente    |

| Felelősségek                       |
| ---------------------------------- |
| Backend szolgáltatások kialakítása |
| Adatbázis szerkezetek kialakítása  |

**Tesztelés:**
| Projektmunkások |
| --------------- |
| Poglár Gábor    |
| Orosz Norbert   |
| Tóth Levente    |
| Jóni Géza       |

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

**Funkcionális követelmények**

A rendszer használatához mindenképpen szükséges egy előzetes regisztráció az oldalon keresztül. A regisztrációval létrejövő felhasználói fiókkal lehetséges belépni az oldalra és megkezdeni annak használatát. Belépés nélkül csak a regisztráció és a bejelentkezés lehetséges.

A regisztrált felhasználóknak lehetőségük van új tételeket hozzáadni és meglévő tételeket módosítani, valamint törölni azokat. Ezen kívül lehetőségük van az adott tételekhez kategóriákat hozzá rendelni.

**Nemfunkcionális követelmények**

A rendszer használata gyorsan és könnyen elsajátítható. Különösebb informatikai tudást vagy előzetes oktatást nem igényel. 
Az rendszer nem igényel telepítést vagy konfigurálást mivel az publikus weboldalról elérhető.

**Törvényi előírások, szabványok**

`Szerzői jogi törvény (1999. évi LXXVI. törvény; röviden: Szjt.), illetve a 2016. évi XCIII. törvény A szerzői jogok és a szerzőijoghoz kapcsolódó jogok közös kezeléséről`

`2018. évi LIV. törvény az üzleti titok védelméről`

`1. évi CCXXII. törvény az elektronikus ügyintézés és a bizalmi szolgáltatások általános szabályairól`

`187/2015. (VII. 13.) Korm. rendelet az elektronikus információs rendszerek biztonsági felügyeletét ellátó hatóságok, valamint az információbiztonsági felügyelő feladat- és hatásköréről, továbbá a zárt célú elektronikus információs rendszerek meghatározásáról`

`Az ISO / IEC 12207 a nemzetközi szabvány, amely tartalmazza a szoftver életciklusának kiválasztási, bevezetési és ellenőrzési módszerét.`

`Az ISO 9000 leírja a termékek előállításának hivatalosan szervezett folyamatát, valamint az előrehaladás irányításának és nyomon követésének módszereit.`

`ISO / IEC 15504 Információs technológia — folyamatértékelés, más néven a szoftverfolyamat-fejlesztési képesség meghatározása (SPICE), "a szoftverfolyamatok értékelésének kerete".`

## 6. Fizikai környezet
### Vásárolt softwarekomponensek és külső rendszerek
- Nincsenek vásárolt szoftverkomponensek.
- Ingyenes szoftverkomponensek:
    - Bootstrap CSS framework
    - Chart.js javascript library diagram készítéshez 
### Hardver és hálózati topológia
Az alkalmazás webplatformra készül. Bármely operációs rendszerrel kompatibilis.
### Fizikai alrendszerek
Webszerver: 80-as porton elérhető HTTP szolgáltatás
MySQL adatbázis szerver.
A böngésző rendszerkövetelményeinek megfelelő kliens
### Fejlesztő eszközök
Visual Studio Code, Apache NetBeans, MySQL Workbench, Github

## 8. Architekturális terv
A Backend PHP programozási nyelven készül OOP alapokon. A készítés során az MVC (model-view-controller) programtervezési minta érvényesül.

A Frontend HTML, CSS, Javascript és PHP programozási nyelveken készül.
A weboldal felépítése elkülönül Header (fejléc), Navigation (navigáció), Content (tartalom) és Footer (lábléc) szegmensekre a könnyebb átláthatóság és a későbbi fejlesztések megkönnyítése érdekében.
###### Az alkalmazás rétegei, fő komponensei, ezek kapcsolatai
A felhasználó webböngészőn, HTML oldalakon keresztül tud navigalni. A CRUD műveletek HTTP GET és POST metódus formájában kerülnek átadásra szerver-kliens és kliens-szerver relációban, amiket aztán MySQL adatbázisban írunk és olvasunk. 
A weboldal egy Apache webszerveren fut.
###### Változások kezelése
A változások a szerver oldalon történnek, ezért a kliens oldalon a felhasználónak nincs tennivalója a változások kezelésére.
###### Rendszer bővíthetősége
A rendszer bővíthető több szervergép csatlakoztatása esetén.
Vékony kliens oldalon nincs szükség beavatkozásra.
###### Biztonsági funkciók
CSRF TOKEN (cross-site request forgery) implementálása.
Bejelentkezéskor a hitelesítés után a szerver készít kriptográfiai algoritmussal egy egyedi TOKEN-t, melyet elment a PHP seassion-ben. Amikor a felhasználó a kliens oldalon védett tartalmat kíván megtekinteni, a PHP ellenőrizni fogja a TOKEN jelenlétét, hitelességét. Ez garantálja, hogy a kérés a weboldalon keresztük, a kliens böngészőjében történik.

## 10. Implementációs terv
A felhasználó webböngészőn keresztül éri el a vékony klienst, vagyis a weboldalakat. Ezek a weboldalak HTML, CSS, JavaScript programozási nyelvekben készülnek. Az adatokat MySQL adatbázis szerveren tárolódnak, melyet az üzleti logika rétegében futó PHP program kapcsol össze a GUI felülettel.
###### Perzisztencia (adatbázis osztály)
MySQL adatbázis szerver
###### Üzleti logika osztályai
Webszerveren futó PHP program
###### Kliens oldal osztályai
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

#### 11.5.1 Bejelentkezési felület:
A felhasználó be tud-e jelentkezni.
###### Mezők:
E-mail cím: e-mail típus.Kötelező kitölteni.
Kötelező kitölteni.
Jelszó: password típus. Kötelező kitölteni.

Regisztrációs felület:
###### Mezők:
E-mail cím: e-mail típus.Kötelező kitölteni.
Jelszó: password típus. Kötelező kitölteni.
Jelszó újra: password típus és meg kell egyeznie a Jelszó mező értékkel.  Kötelező kitölteni.
Telefonszám: tel típus.  Kötelező kitölteni.
 

#### 11.5.2 Főoldal:

###### Navigáció:
Új tétel hozzáadása: átirányítás az ujtetel.html-re.
Tételek megtekintése: átirányítás a tetelek.html-re.
Kijelentkezés: Kijelentkezteti a felhasználót.
Grafikon helyes működésének ellenőrzése.

###### Mezők és lapozó:
Dátum-tól: Dátum típus. Nem kötelező a kitöltés
Dátum-ig: Dátum típus. Nem kötelező a kitöltés
Lapozási funkció működése.

#### 11.5.3 Új tétel hozzáadása:

###### Navigáció:
Főoldal: átirányítás a fooldal.html-re
Tételek megtekintése: átirányítás a tetelek.html-re
Kijelentkezés: Kijelentkezteti a felhasználót.

###### Mezők:
Kategória: Az adatbázisban szereplő kategóriák. Dropbox típus. Kötelező kitölteni.
Megnevezés: Speciális karakter nem elfogadott. Text típus. Kötelező kitölteni.
Összeg Ft-ban: Number típus, vagyis csak a számok elfogadottak. Kötelező kitölteni.
Dátum: Dátum típus. A tételhez tartozó időpontot kell rögzíteni. Kötelező kitölteni.

###### Gombok:
Rögzítés: Rögzíti a tételt.
Törlés: Kitörli az eddig kitöltött mezőket.

#### 11.5.4 Tételek megtekintése:

###### Navigáció:
Főoldal: átirányítás a fooldal.html-re
Új tétel hozzáadása: átirányítás az ujtetel.html-re
Kijelentkezés: Kijelentkezteti a felhasználót.

###### Műveletek és lapozó:
Módosítás: átirányítás a modosit.html-re.
Törlés: Kitörli az adott tételt.
Lapozási funkció működése.
 

#### 11.5.5 Tétel módosítása:

###### Navigáció:
Főoldal: átirányítás a fooldal.html-re
Tételek megtekintése: átirányítás a tetelek.html-re
Kijelentkezés: Kijelentkezteti a felhasználót.

###### Mezők:
Kategória: Az adatbázisban szereplő kategóriák. Dropbox típus. Kötelező kitölteni.
Megnevezés: Speciális karakter nem elfogadott. Text típus. Kötelező kitölteni.
Összeg Ft-ban: Number típus, vagyis csak a számok elfogadottak. Kötelező kitölteni.
Dátum: Dátum típus. A tételhez tartozó időpontot kell rögzíteni. Kötelező kitölteni.

###### Gombok:
Módosítás: Módosítja az adatbázisban meglévő adatokat, az új bevitt adatokra.
Mégse: Visszairányít a tetelek.html-re.	

### 11.6 Határidők:

| Megnevezés  | Komment |  Határidő     |
| ------------- | ------------- | ------------- |
| Unit-teszt  | Fejlesztés alatt folyamatosan  | 2022.11.05  |
| GUI tesztelése  | Fejlesztés alatt folyamatosan  | 2022.11.05  |
| A rendszerbe lépés tesztelése | Fejlesztés alatt folyamatosan  | 2022.11.10  |
| Biztonsági teszt  | Funkció implementálása után | 2022.11.07  |
| Általános felhasználóként való tesztelés  | Összes implementált komponens után  | 2022.11.22  |
| Végső tesztelés  | Átadás előtti pillanat  | 2022.12.05  |



### 11.7 Jegyzőkönyv:

|Megnevezés	|Tesztelő neve	|Funkció leírása	|Elvárt eredmény	|Eredmény|	Megfelelősségi státusz|
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
|Unit-teszt     |               |               |               |               |               |					
|Unit-teszt     |               |               |               |               |               |					
|GUI tesztelése |				|               |               |               |               |
|GUI tesztelése |				|               |               |               |               |					
|A rendszerbe lépés tesztelése	|				|               |               |               |	|
|A rendszerbe lépés tesztelése	|				|               |               |               |	|					
|Biztonsági teszt               |				|               |               |               |   |
|Általános felhasználóként való tesztelés|		|               |               |               |   |			
|Általános felhasználóként való tesztelés|		|               |               |               |   |
|Végső tesztelés|               |               |               |               |               |				




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
Tetszőleges webkliens software telepítése
Internethozzáférés

## 13. Karbantartási terv
- Átfogó tesztelések 1-1 nagyobb webböngésző verzióváltása esetén.
- Felhasználói panaszok kivizsgálása. 
- A rendszer üzemeltetői igényeinek kielégítése, új funkciók implementálása.
- Időszakos adatbázis karbantartás, biztonsági mentések.