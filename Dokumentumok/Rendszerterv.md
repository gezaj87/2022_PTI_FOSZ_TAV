## 6. Fizikai környezet
###### Vásárolt softwarekomponensek és külső rendszerek
Nincsenek vásárolt szoftverkomponensek.
###### Hardver és hálózati topológia
Az alkalmazás webplatformra készül.
###### Fizikai alrendszerek
Webszerver: 80-as porton elérhető HTTP szolgáltatás
MySQL adatbázis szerver
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
