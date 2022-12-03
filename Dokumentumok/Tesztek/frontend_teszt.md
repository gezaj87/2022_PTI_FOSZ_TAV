# Frontend tesztek

## Jegyzőkönyv


|ID| Megnevezés | Tesztelő neve | Funkció leírása | Elvárt eredmény | Eredmény | Megfelelősségi státusz | Javítva
|-------| --------------| ------------|------------------------|------------|---------------|---------------|----|
|[1](#1)| Chart rajzolása|Orosz Norbert|Chart kirajozolása| Kirajzolás|siker |Megfelelt	||
|[2](#2)| Navbar ikon|Orosz Norbert|Átirányítás a Főoldalra| Átirányít|siker |Megfelelt	||
|[3](#3)| Táblázat rajzolása|Orosz Norbert|Tábla kirajolása| Kirajzolás|siker |Megfelelt||
|[4](#4)| Üres táblázat|Orosz Norbert|Üres tábla jelzése a felhasználónak| Információ Kiírása|siker |Megfelelt||


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
- **Elvárt működés**: Ha a táblázat üres, akkor jelezze ezt a felhasználónak. Előfordulás: Adott időszaknak a leszűrésénél nincs adat. Új felhasználóról van szó és még nem töltött fel adatokat. A felhasználó kitörölte az eddig rögzített adatait.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt