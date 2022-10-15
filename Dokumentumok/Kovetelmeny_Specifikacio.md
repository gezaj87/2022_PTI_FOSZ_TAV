# Követelményspecifikáció

## 1. Vezetői összefoglaló

A mai, két számjegyű inflációval terhelt világunkban mindenkinek szüksége van arra, hogy kövesse a költségeit, tervezhetőek legyenek a kiadásai, ehhez nyújt segítséget új programunk, a spendor, ami egy költségkövető/nyilvántartó webalkalmazás.
Vállalkozásunk ezzel azt a célt tűzte ki maga elé, hogy a szoftverünk használatával az embereknek pénzt spóroljunk azáltal, hogy görbe tükröt tartunk eléjük, egy helyre gyűjtve, különböző kategóriák szerint csoportosíva szembesítjük őket a költségtételeikkel, így ezek elemzését követően a nélkülözhető, felesleges, pénznyelő kiadások kiszűrhetőek.
Feladatunk tárgya egy fenti, hasznos alkalmazás fejlesztése.

## 2. Jelenlegi helyzet

A vagyonunkat, mely lehet készpénz, és számlapénz is, fizikailag és virtuálisan is több különböző helyen tartjuk egy időben, úgy mint a pénztárcánkban, az otthoni “párnacihában”, a bankszámlánkon, a megtakarítási számlánkon, esetleg befektetéseinkben (ingatlan, arany, nyersanyag, részvény, kötvény/állampapír), majd ezen különböző forrásokból költünk is. 
Az így elaprózódó kiadásainkat nem érezzük annyira fájdalmasnak, mert nem látjuk egyszerre a nagyobb összeg eltűnését, ill. nem látjuk rendszerszinten a kiadásainkban a tendenciát, így nem vagyunk képesek változtatni a rossz, helytelen, vagy nem hatékony költési szokásainkon, azonban a világban történő változások miatt szükséges folyamatosan adaptálódni az életvitelünkkel. 

## 3. Vágyálomrendszer leírása
A cél a jelenleg különböző digitális formákban csak részben létező (bankkártyához tartozó vásárlási tranzakciók, ill. különböző számlák havi számlaértesítői), nagyrészt fejben tartott kiadások (vásárlás készpénzzel a mai napig a társadalom nagy részének napi tevékenység) egy helyen, kategóriák szerint rendszerezett, egyszerű és gyors rögzítése, listázása. És ezen  adatokból statisztikák, kimutatások, elemzések készítése.
A kifejlesztésre kerülő informatikai rendszerben meg kell oldalni a kiadások különöző tulajdonságaiban történő keresését is.
Lehetőséget kell nyújtani a több felhasználó általi elérésre. Regisztrációhoz kötött a felület, a bejelentkezést követően lehet költéstételt felvinni a rendszerbe, módosítani, és törölni.  
Meg kell valósítani a különböző jogosultságok kezelését, azaz felhasználó és adminisztrátor is eltérő műveleteket végezhetnek a rendszerben.
A webalkalmazásnak ezen kívül interneten keresztül online elérhetőnek kell lennie. 
A rendszer felhasználói felülete legyen egyszerűen kezelhető, könnyen tanulható, a folyamatok kezelése az eddig megszokott munkafolyamatokhoz közel álló módon működjön, azért, hogy a felhasználóknak minél kevesebb nehézséget okozzon a költségkövető rendszerre történő átállás.
A költséghatékony üzemeltetést szem elött tatrva lényeges szempont a platformfüggetlen működés.
Fontos, hogy a megvalósítás során olyan technológiák kerüljenek felhasználásra, amik elterjedt szabványokon alapulnak, képesek megbízható működésre és üzemeltetésük nem igényel a szokásosnál speciálisabb szakértelmet, nagyobb költséget.
Ezen kívül a szoftver legyen felkeszítve arra, hogy igény esetén könnyen be lehessen vezetni plusz, extra funkciókat, mondjuk a bevételek kezelését, valamint a kezelt adatbázis méretének növelésére és a funkciók bővítésére is nyitva álljon a lehetőség.
A fenti technológiai igényeknek megfelelően a megvalósítás MySql, PHP, JavaScript, HTML, CSS, webszerver technológiák felhasználásával fog történni, a szoftver felhasználói felületét internet böngészőn keresztül lehet majd elérni.

## 4. A rendszerre vonatkozó pályázat, törvények, rendeletek, szabványok és ajánlások felsorolása

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
