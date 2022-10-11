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
