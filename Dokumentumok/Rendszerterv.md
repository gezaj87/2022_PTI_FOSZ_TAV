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
