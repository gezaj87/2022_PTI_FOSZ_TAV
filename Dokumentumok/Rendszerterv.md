# Rendszerterv

## 1. A rendszer célja
A rendszer célja, hogy a felhasználók képesek legyenek gyorsan és kényelmesen rögzíteni kiadásaikat, ezáltal nyomon követve azokat. A rendszernek nem célja a bevételek figyelése, így kizárólag a kiadásokról ad tájékoztatást.

## 3. Üzleti folyamatok modellje
A rendszert nem lehet regisztrálás nélkül használni. A látogató a kezdőoldalt képes elérni és azon keresztül bejelentkezni, vagy regisztrálni a rendszerbe. A bejelentkezett felhasználó képes új tételeket hozzáadni a meglévőköz, vagy a meglévőket lekérdezni, valamint dátum szerint szűrni azokat.

### 3.1 Üzleti szereplők
A bejelentkezés minden felhasználó számára egységesen a következő: A főoldalra lépve megjelenik a ’Felhasználónév’ és ’Jelszó’ beviteli űrlap. A mezők kitöltése után a ’Belépés’ gombra kattintva tud bejelentkezni a felhasználó. Ha az azonosítás sikeres, akkor a felhasználó belépett és megjelenik a jogosultságának megfelelő felület. Ha sikertelen az azonosítás, hibaüzenet jelenik meg.

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

## 6. Fizikai környezet
###### Vásárolt softwarekomponensek és külső rendszerek
Nincsenek vásárolt szoftverkomponensek.
###### Hardver és hálózati topológia
Az alkalmazás webplatformra készül.
###### Fizikai alrendszerek
Webszerver: 80-as porton elérhető HTTP szolgáltatás
MySQL adatbázis szerver.
A böngésző rendszerkövetelményeinek megfelelő kliens
###### Fejlesztő eszközök
Apache NetBeans, HTML, CSS, PHP, MySQL Workbench

## 8. Architekturális terv
A projekt Model-View-Controller vagyis MVC mintában fog készülni.
###### Az alkalmazás rétegei, fő komponensei, ezek kapcsolatai
A felhasználó webböngészőn, HTML oldalakon keresztül tud navigalni. A CRUD műveletek HTTP GET és POST metódus formájában kerülnek átadásra szerver-kliens és kliens-szerver relációban, amiket aztán MySQL adatbázisban írunk és olvasunk. 
A weboldal egy Apache webszerveren fut.
###### Változások kezelése
A változások a szerver oldalon történnek, ezért a kliens oldalon a felhasználónak nincs tennivalója a változások kezelésére.
###### Rendszer bővíthetősége
A rendszer bővíthető több szervergép csatlakoztatása esetén.
Vékony kliens oldalon nincs szükség beavatkozásra.
###### Biztonsági funkciók
CSRF token (cross-site request forgery) implementálása. 

## 10. Implementációs terv
A felhasználó webböngészőn keresztül éri el a vékony klienst, vagyis a weboldalakat. Ezek a weboldalak HTML, CSS, JavaScript programozási nyelvekben készülnek. Az adatokat MySQL adatbázis szerveren tárolódnak, melyet az üzleti logika rétegében futó PHP program kapcsol össze a GUI felülettel.
###### Perzisztencia (adatbázis osztály)
MySQL adatbázis szerver
###### Üzleti logika osztályai
Webszerveren futó PHP program
###### Kliens oldal osztályai
HTML, CSS, JavaScript

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