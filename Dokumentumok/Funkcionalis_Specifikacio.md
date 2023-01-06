# Funkcionális Specifikáció

## 1. A rendszer céljai és nem céljai

A fejlesztés célja egy költésmenedzsementet megvalósító rendszer készítése magánszemély felhasználók, tehát akár saját magunk részére, mely segítik átlátni költéseinket azáltal, hogy az összes költésünk fel tudjuk rögzíteni egy adatbázisba különböző ismérvek, tulajdonságok szerint, majd ezen listát mindezek, ill. időrend alapján fel tudjuk dolgozni, szűrni.
Annak érdekében, hogy a felhasználónak minél könnyebb legyen az átállás ezen digitális költségkövetésre, hasonlóan felhasználóbarátként, és gyorsan kell működnie a megvalósított informatikai rendszerünknek, mintha még mindig a “kockás füzetbe” vezetné a költségeit, Ill. már persze rengeteg banki alkalmazás próbál segíteni ebben.
Már az is haladás, visszaolvassuk, mikor, mire, mennyit költöttünk, mivel minden hónapban iszonyatosan sok apró pénzügyi tranzakciónk van, melyeket képtelenség észben tartani.
A rendszer különböző szintű jogosultságot képes kezelni (admin és felhasználó), így az egyes jogosultságokhoz tartozó műveletek is eltérőek.
Meg kell valósítani a felrögzített költségek adatbázisát, melynek kereshetőnek (indexálhatónak), valamint bővíthetőnek kell lennie.
A felhasználók lesznek a rendszerben többségben, ők végzik a költség listája karbantartását, a költéseik adminisztrációját, ezért fontos, hogy az általuk használt funkciók ergonómiája minél jobb legyen, a lehető legjobban támogassa a programunk hatékony kezelését.

A fejlesztés első ütemében a fő funkciók (felhasználók regisztrációja és kezelése, kategóriák kialakítása, költések nyilvántartása, költéshez kapcsolódó műveletek kezelése, listázás) megbízható működésének megvalósítása a célja, de nem cél a rendszer tágabban vett pénzmenedzsmentre történő felkészítése, mint pl. kamatok, megtakarítások és bevételek kezelése.

## 2. Jelenlegi helyzet

A mai piaci helyzetben úgy érezhetjük, hogy folyik ki a kezeink közül a pénz. A drágulások mértéke és frekvenciája egyre súlyosabb és meredekebb. A fiatalabb korosztály nem minden esetben érzi át annak a súlyosságát, hogy valójában mennyit is költ egy adott időszakban. Ezt jelen pillanatban, egyedül csak a banki aplikációk tudják kimutatni, de egy plusz bankszámlát, ami ilyen funkciókkal rendelkezik nem minden család tud magának megengedni a havi kiadások miatt és emellett a bankkártyák segítségével akár plusz kiadást is tudnak generálni a fiatalok, mert nem felelősségteljesek.

## 3. Vágyálom rendszer leírása

A jelenlegi helyzetben vázoltak miatt azt a lehetőséget látjuk, hogy olyan embereknek is tudunk segíteni, akiknek nem anyagi segítségre van szüksége, hanem a saját anyagi helyzetének a karbantartására van igénye. Ennek a segítsége érdekében különböző grafikai megjelenítés kell, hogy könnyen látható legyen kategóriánként, hogy az egyén megismerje önmagát, a vásárlási szokásait, és lehetőleg abba az irányba terelni, hogy ezeket a szokásokat változtassa meg a tudatos vásárló irányába.

## 4. A rendszerre vonatkozó külső megszorítások

**Európai uniós rendeletek, irányelvek, ajánlások**

*AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.)* a természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról,

*A Bizottság 2011/711/EU ajánlása (2011. október 27.)* a kulturális anyagok digitalizálásáról és online hozzáférhetőségéről, valamint a digitális megőrzésről

*98/34/EK európai parlamenti és tanácsi irányelv* a műszaki szabványok és szabályok, valamint az információs társadalom szolgáltatásaira vonatkozó szabályok terén információszolgáltatási eljárás megállapításáról (a 98/48//EK európai parlamenti és tanácsi irányelvvel módosította)

*96/9/EK irányelv* (1996. március 11.) az adatbázisok jogi védelméről

## 5. Jelenlegi üzleti folyamatok modellje
Felhasználó (vásárló/szolgáltatást igénybe vevő) 	

Vásárlási hely, szolgáltatást nyújtó, pénzt elfogadó

Üzleti entitások: 		
-	összeg
-	kategória (elektronikus számlák esetén MCC kód alapján, készpénz esetében a vásárlás helyén alapuló dedukció)
-	termék, szolgáltatás

Üzleti folyamatok: 	
-	Új tétel hozzáadása: A vásárló költ egy helyen termékre vagy termékekre, ill. szolgáltatásra, majd ezt kifizeti. Ennek az eseménynek az adatai ideális esetben nyugtára (blokk) rögzítésre kerülnek, ill. a vásárló oldalán megjelenik a fizetésre használt bankkártyájához tartozó számláján a bank kezelésében, melyhez banki applikáción keresztül hozzáfér, vagy havi számlakivonatot kap papíralapon postai úton, vagy digitálisan. Amennyiben a fentiek nem történnek meg, vagy a vásárlást bizonyító nyugta nem elég részletes (tételek nem egyértelműen vannak rajta feltüntetve, vagy az ár sem részletezett), akkor erről az oldalról nem lehetséges már rekonstruálni a költés minden egyes részletét.  
- Amennyiben készpénzzel vásárlunk olyan kisebb dolgot, melyről nem kaptunk nyugtát se (pl.: kávéautomata gép), utólag már az ember már csak az emlékezetére hagyatkozhat, ami mint tudjuk, csalóka, könnyen becsapja az embert. Ha belegondolunk abba például, hogy a munkahelyen csak napi egy kávéra adunk ki összeget, de arra minden nap, akkor 22 átlagos munkanappal számolva tetemes összeg lehet egy egész hónapra vetítve, amibe az ember nem mindig gondol bele.  
-	Amennyiben esetleg több bankkártyát használunk, vagy épp a hitelkártya használatára is sor kerül alkalmanként, immáron több különböző digitális forrásból lehetséges csak rekonstruálni a havi költési szokásokat.
-	megtekintés - kategóriánként: Amennyiben esetlegesen kategóriánként szeretnénk megtekinteni a költéseinket, mindenképpen szükséges a “kockás” füzethez folyamodni, ami nem túl effektív, sérülékeny, egyszerre csak egyvalaki vezetheti benne a költéseit, hamar áttekinthetetlen tud lenni, statisztikát készíteni is sok idő az információiból.
-	Keresés – egy bizonyos tétel keresése: Vagy a kockás füzetet szükséges fellapozni, vagy az összegyűjtött nyugtákat “átnyálazni”, digitális lenyomat esetén pedig több különböző helyen ellenőrizni, hogy a költés szerepel-e az adott listában. 
-	Törlés - tétel törlése: amennyiben 14 napon belüli elállási jogunkkal élünk, vagy garanciális problémák miatt kapunk visszatérítést a kockás füzetben satírozás/radírozás szükséges, amivel a havi ill. kategóriánkénti összeg is megváltozik, ezáltal több helyen kell javítani, újraszámolni. Digitális számlakivonat esetében pedig szükséges észben tartanunk, vagy kinyomtatnunk, és úgy javítanunk, ami idő, pénz és energia.

## 6. Igényelt üzleti folyamatok modellje

| Verzió | Üzleti folyamat                  | Modell                                                             |
| ------ | -------------------------------- | ------------------------------------------------------------------ |
| 1.0v   | Regisztráció                     | A felhasználók regisztrálásának lehetősége a rendszerbe.           |
| 1.0v   | Kiadások rögzítése és módosítása | Új kiadások rögzítése és meglévő kiadások módosítása a rendszerbe. |
| 1.0v   | Kiadások törlése                 | Meglévő kiadások törlése a rendszerből.                            |
| 1.0v   | Kategóriák hozzárendelése        | Új tételekhez kategóriák hozzárendelése tételekhez.                |

## 8. Használati esetek [Use cases]
### 8.1. Szereplők
	- Felhasználó
	- Adminisztrátor

### 8.2. Felhasználó használati esetei
#### Regisztráció
A felhasználó regisztrál a honlapon. A regisztráció során megadja az e-mail címét (mely később azonosítóként fog szolgálni), nevét, nemét, korát, választott jelszavát és telefonszámát.
A telefonszám megadása opcionális.
A szolgáltatás feltétele a regisztráció.
#### Bejelentkezés
A felhasználó a regisztrációt követően bejelentkezik, és megkezdi a program használatát. Az azonosításhoz meg kell adni azt az e-mail cím és jelszó párost, amellyel regisztrált a rendszerbe.
#### Adatmódosítás
A regisztráció során megadott adatok módosítása.
#### Regisztráció törlése
Regisztráció és személyes adatok végleges törlése.
#### Költés hozzáadás
A felhasználó hozzáadja az adatbázishoz a pénzköltés adatait:
- kategória
- megnevezés
- összeg
- dátum
#### Költés módosítása
Korábban hozzáadott tétel utólagos módosítása.
#### Költés törlése
Korábban hozzáadott tétel törlése.
#### Statisztikák, diagrammok megtekintése
A felhasználónak lehetősége van megtekinteni egy adott időintervallumban a kiadásait táblázatos formában, diagrammokkal kiegészítve.
	
### 8.3. Adminisztrátor használati esetei
#### Bejelentkezés
Az adminisztrátor bejelentkezik a számára kialakított felületre. Az azonosításhoz meg kell adnia az email címét és jelszavát amit a telepítőtől kapott.
#### Adminisztrátor hozzáadás
Az adminisztrátornak lehetősége van más adminisztrátorokat hozzáadni a rendszerhez.
#### Adminisztrátor törlése
Az adminisztrátor törölheti más adminisztrátor hozzáférését.
#### Jelszómódosítás
Az adminisztrátor módosíthatja saját jelszavát.
#### Felhasználók listája
A felhasználók listájának megtekintése
#### Felhasználó törlése
A Felhasználó egyoldalú azonnali törlése.
#### Statisztikák megtekintése
Autómatikusan generált statisztikai adatok megtekintése a felhasználók vonatkozásában.

## 9. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket

* K01, K02, K03: Az alkalmazást úgy hozzuk létre, hogy tartalmazza a tételek és felhasználók adminisztrációját, melyet felhasználók, ill. adminok emailcím/jelszó megadásával a rendszerbe belépve fognak elérni. Ezek fogják adni a rendszer fő funkcióit.
* K04:Két különböző jogosultsági szintet fogunk kialakítani. Az adminisztrátori jogosultsággal rendelkezők minden funkcióhoz hozzá fognak férni, felhasználói fiókokat tudnak létrehozni/törölni. A felhasználó a rendszerbe belépve listákat és kimutatásokat tud lekérni.
* K05: A felhasználói felületet úgy alakítjuk ki, amely egy általános weboldal képét fogja nyújtani, az egyes funkciók egyértelmű elnevezést kapnak, és könnyen elérhetők lesznek.
* K06: A rendszer elkészítésekor ügyelünk a platformfüggetlen, robosztus működés kialakítására, ezért ellenőrizzük kódunk helyességét, hogy egy adott HTML elemet támogatják-e a böngészők, fontosabb alkalmazások és kisegítő technológiák. A HTML vizsgálathoz beleértjük a CSS vizsgálatot is. A teszteléseket elvégezzük Firefox, Chrome, Explorer, Opera, Safari böngészőkön, ill. Windows, Linux, iOs operációs rendszeren is.
* K07: A szabványos és elterjedt technológiák használata biztosítja. 
* K08: A kezelt adatokat MYSQL adatbázisban fogjuk tárolni. Az adatbázis használatával biztosítjuk az adatok bővíthetőségét. A applikációt PHP objektum orientált módon valósítjuk meg, amellyel új funkciókat könnyedén tudunk utólag hozzáadni a rendszerhez.

## 10. Képernyőtervek

###### Bejelentkezés
![Bejelentkezes](PNG/kepernyoterv_bejelentkezes.png)
##
###### Regisztráció
![Regisztracio](PNG/kepoernyoterv_regisztracio.png)
##
###### Főoldal
![Fooldal](PNG/kepoernyoterv_fooldal.png)
##
###### Tételek
![Tetelek](PNG/kepoernyoterv_tetelek.png)
##
###### Módosítás
![Modositas](PNG/kepoernyoterv_modosit.png)
##
###### Új tétel
![UjTetel](PNG/kepoernyoterv_ujtetel.png)
##
## 11. Forgatókönyvek
### 11.1 Felhasználó
#### 11.1.1 Regisztráció
1. A felhasználó megadja a regisztrációhoz szükséges adatokat a frontend felületen egy űrlap kitöltésének a segítségével.
2. Post request-el elküldi a megadott inputokat a backendnek.
3. A backend fogadja a küldött adatokat és megkezdi a kiértékelést.
4. Validálás &rarr; Megvizsgálja, hogy az inputok megfelelnek-e a formai követelményeknek. Ha igen, továbbmegy a következő adatfeldolgozási folyamatra, ha nem, megállítja a program futását és felhívja a felhasználó figyelmét a hiányosságokra.
5. Tárolás &rarr; A validált adatokat eltárolja az adatbázisban. A Jelszó biztonsági okokból kizárólag kódolva kerül tárolásra. A kódolás a PHP password_hash() függvénnyel kerül megvalósításra. Sikertelen tárolás esetén, leáll a program és tájékoztatást küld a felhasználónak a sikertelen tárolás okairól (pl. az e-mail cím már regisztrálva van a rendszerben).
6. Visszajelzés &rarr; Siker esetén a backend visszajelzést ad a felhasználónak a sikeres műveletről, és átírányítja a bejelentkező felületre.

#### 11.1.2. Bejelentkezés
1. A felhasználó egy űrlapon megadja a bejelentkezési adatait, mely e-mail cím és jelszóból áll.
2. Post Request-el elküldi az adatokat a backend részére.
3. A backend fogadja az adatokat és megkezdi a kiértékelést.
4. E-mail cím alapján készít egy lekérdezést SQL nyelven.
5. Fogadja az adatbázistól a lekérdezés eredményét, mely sikeres lekérdezés esetén egy darab, az email címhez tartozó felhasználói rekord. Sikertelen lekérdezés esetén leáll a program és tájékoztatja a felhasználót, hogy a megadott jelszó, nem szerepel az adatbázisban.
6. Az adatbázisban az e-mail címhez tartozó jelszó kódolva van. Ezért ezt vissza kell fejteni az inputban szereplő jelszó segítségével. Ez a PHP password_verify() függvény segítségével kerül megvalósításra.
7. Sikertelen jelszó visszafejtés esetén a program leáll és tájékoztatja a felhasználót, hogy rossz jelszót adott meg.
Siker esetén a program készít egy egyedi TOKEN-t, melyet elment a PHP session-be a felhasználó adataival együtt. A felhasználót belépteti a rendszerbe és átírányítja a kezelőfelületre.

#### 11.1.3. Kiadás rögzítése
1. A felhasználó a kezelőfelületen megadja a kiadás adatait (lásd 8.2.5-pont).
2. Post Request-el elküldi az adatokat a backend részére kiértékelésre.
3. Backend fogadja az adatokat és megkezdi a kiértékelést.
4. Validálás → Hasonlóan, mint a regisztráció során, megvizsgálja, hogy az inputok megfelelnek-e a formai követelményeknek. Ha igen, tovább megy a következő adatfeldolgozási folyamatra, ha nem, megállítja a program futását és felhívja a felhasználó figyelmét a hiányosságokra.
5. Tárolás → A validált adatok eltárolása az adatbázisba.
6. Visszajelzés → Visszajelzés küldése a felhasználónak a sikeres tárolásról.

#### 11.1.4. Kiadás módosítása
1. A felhasználó a megfelelő kezelői felületen módosításokat hajt végre egy korábban rögzített rekordon.
2. Put Request-el elküldi a felhasználó az összes adatot ami az űrlapon található.
3. A Backend fogadja az adatokat és megkezdi a kiértékelést. A Backend külön nem vizsgálja, hogy mely adatok kerültek módosításra és melyek nem. Az összes inputot új adatnak tekinti.
4. Validásás → Minden adat ismételt validálása, a 11.1.3 - 4-es pontban leírtak szerint.
5. Módosítás → SQL UPDATE utasítással frissíti a rekordot.
6. Visszajelzés → Visszajelzés küldése a felhasználó számára a művelet sikerességéről, hiba esetén a hibáról.

#### 11.1.5. Kiadás törlése
1. A felhasználó a felhasználói felületen megjelöli a törlendő elemet.
2. Delete Request-el elküldi a felhasználó a törlendő tétel ID-ját.
3. A backend fogadja az adatot.
4. Törlés → A rekord ID-jával utasítást küld az SQL adatbázisnak a törlésre.
5. Visszajelzés → A backedn visszajelzést küld a felhasználónak a törlés sikerességéről.

#### 11.1.6. Regisztrációs adatok módosítása
Hasonló folyamat, mint a *11.1.4. Kiadás módosítása*.

#### 11.1.7. Regisztráció törlése
Hasonló folyamat, mint a *11.1.5. Kiadás törlése*. Annyi kiegészítéssel, hogy a törlés folyamán minden adat, minden táblában törlésre kerül, amely a felhasználó azonosítóhoz van rendelve. Törlés előtt a rendszer figyelmeztetést küld a felhasználónak.

#### 11.1.8. Kiadások lekérdezése, szűrése
1. A felhasználó megadott paraméterek szerint, szűrést tud végezni. Ezek a következők:
a) kategória
b) dátum
c) megnevezés
d) összeg
2. A kívánt paramétereket elküldi a Backendnek.
3. A Backend fogadja a paramétereket és azok alapján egy SQL lekérdezést foganatosít.
4. A lekérdezés eredményét elküldi a Frontendre, ahol a felhasználó megtekintheti.

### 11.2 Adminisztrátor

#### 11.2.1. Bejelentkezés
Lásd: *11.1.2. Bejelentkezés*
Különbség: Másik táblából történik a lekérdezés és a PHP session-ban tárolásra kerül a jogosultság.

#### 11.2.2. Bejelentkezési adatok módosítása
Lásd: *11.1.6. Regisztrációs adatok módosítása*

#### 11.2.3. Adminisztrátor hozzáadás
Hasonló a folyamat mint a *11.1.1 Regisztráció* pontban leírtakban. Annyi különbséggel, hogy itt csak egy e-mail címet és jelszót kell megadni input adatnak, és Adminisztrátort csak egy másik adminisztrátor regisztrálhat be.

#### 11.2.4. Adminisztrátor és Felhasználó törlése
Hasonló folyamat mint a *11.1.7. Regisztráció törlése* pontban leírtakban, csak az Adminisztrátornak jogosultsága van más felhasználókat is törölni.

#### 11.2.5. Felhasználók listája
A felhasználók listájána lekérdezése. Az utasítás hatására az adatbázisból lekérdezésre kerül az összes felhasználó neve és e-mail címe.

## 12. Funkció - követelmény megfeleltetés

ID|Verzió|Követelmény|Funkció
--|------|---|--------
K01|V1.0|Tételek adminisztrációja|Tételek regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.  
K02|V1.0|Felhasználók adminisztrációja|Felhasználók regisztrálása, törlése az igényelt üzleti folyamatokban leírtak szerint.
K03|V1.0|Tételek adminisztrációja|Tételek módosításának ill. törlésének kezelése az igényelt üzleti folyamatokban leírtak szerint.
K04|V1.0|Felhasználói fiókok kezelése|Bejelentkezés, felhasználói adatok módosítása,, listák és kimutatások készítése az igényelt üzleti folyamatokban leírtak szerint.  
K05|V1.0|Egyszerűen használható kezelőfelület|A legelterjedtebb internet böngészőkből használható felhasználói felület megvalósítása, oly módon, hogy a felhasználók számára a beletanulás a lehető legegyszerűbb legyen..
K06|V1.0|Platformfüggetlen, robusztus működés|Szabványos, az iparágban régóta bevált, operációs rendszertől független technológiák használata: Php, Apache HTTP szerver, MySQL.   
K07|V1.0|Költséghatékony üzemeltetés|A szabványos és elterjedt technológiák használata biztosítja. 
K08|V1.0|Bővíthetőség|A kezelt adatok mennyiségének, valamint a felhasználók számának bővíthetősége és utólag újabb funkciók hozzáadásának lehetőségének biztosítása.


## 13. Fogalomszótár

MCC kód: A Merchant Category Code (MCC) egy négyjegyű szám, amely főként lakossági pénzügyi szolgáltatásokra vonatkozik és az ISO 18245 szabványban szerepel. A vállalkozások besorolására szolgál az általuk kínált áruk vagy szolgáltatások típusa szerint.
Az MCC kód alkalmazása igen elterjedt az elfogadóknál. Egy bankkártyás vásárlásnál a bank, a beérkező tranzakciós adatokban látja ezt a bizonyos kódot.
