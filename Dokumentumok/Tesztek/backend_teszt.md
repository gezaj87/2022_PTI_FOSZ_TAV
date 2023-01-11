# Backend tesztek

## Jegyzőkönyv


|ID| Megnevezés | Tesztelő neve | Funkció leírása | Elvárt eredmény | Eredmény | Megfelelősségi státusz | Javítva
|-------| --------------| ------------|------------------------|------------|---------------|---------------|----|
|[1](#1)| GET "/"|Jóni Géza|Home kontroller Start metódus indul | Metódus lefut|siker |Megfelelt	||
|[2](#2)| GET "/newexpense"|Jóni Géza|NewExpense kontroller Get metódus indul | Metódus lefut|siker |Megfelelt	||
|[3](#3)| POST "/newexpense"|Jóni Géza|NewExpense kontroller Post metódus indul | Metódus lefut|siker |Megfelelt	||
|[4](#4)| POST "/"|Jóni Géza|Home kontroller Filter metódus lefut | Metódus lefut|siker |Megfelelt	||
|[5](#5)| GET "/register"|Jóni Géza|Register kontroller Get metódus lefut | Metódus lefut|siker |Megfelelt	||
|[6](#6)| POST "/register"|Jóni Géza|Register kontroller Post metódus lefut | Metódus lefut|siker |Megfelelt	||
|[7](#7)| GET "/login"|Jóni Géza|Login kontroller Get metódus lefut | Metódus lefut|siker |Megfelelt	||
|[8](#8)| POST "/login"|Jóni Géza|Login kontroller Post metódus lefut | Metódus lefut|siker |Megfelelt	||
|[9](#9)| POST "/logout"|Jóni Géza|Logout kontroller Post metódus lefut | Metódus lefut|siker |Megfelelt	||
|[10](#10)| DELETE "/deleteexpense"|Jóni Géza|DeleteExpense kontroller Delete metódus lefut | Metódus lefut|siker |Megfelelt	||
|[11](#11)| PUT "/modifyexpense"|Jóni Géza|ModifyExpense kontroller Modify metódus lefut | Metódus lefut|siker |Megfelelt	||


###  1
- **Rövid leírás**:  GET kérés "/" böngészővel
- **Elvárt működés**:  http://127.0.0.1/2022_PTI_FOSZ_TAV/ böngésző hívás hatására le kell fusson a \Spendor\app\controllers\Home.php-ban található Start metódus melynek segítségével meg kell jelenjen a kezdőoldal.
Ha a felhasználó nincs bejelentkezve, akkor a kezdőoldalnak a Spendor\app\views\Login.php kell megjelenjen. Ha be van jelentkezve, akkor meg a Spendor\app\views\Home.php
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  2
- **Rövid leírás**:  GET kérés "/newexpense" böngészővel
- **Elvárt működés**:
http://127.0.0.1/2022_PTI_FOSZ_TAV/newexpense böngésző hívás hatására le kell fusson a \Spendor\app\controllers\NewExpense.php-ban található Get metódus, ezen belül pedig a View metódus hívására meg kell jelenjen a \Spendor\app\views\NewExpense.php tartalma, amennyiben a felhasználó be van jelentkezve.
Ha a felhasználó nincs bejelentkezve, akkor a \Spendor\app\views\NotFound.php tartalma jelenik meg.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  3
- **Rövid leírás**:  POST kérés "/newexpense" böngészővel
- **Elvárt működés**: 
http://127.0.0.1/2022_PTI_FOSZ_TAV/newexpense cimen böngészőben kitöltöm az adatlapot és gombra kattintva elküldöm a szervernek kiértékelésre. A szerver megkapja az inputokat és elvégzni a validációt, kiértékelést és rögzítést az adatbázisban. A végén meghívja a Get metódust.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  4
- **Rövid leírás**:  POST kérés "/" böngészővel
- **Elvárt működés**: 
http://127.0.0.1/2022_PTI_FOSZ_TAV/ cimen bejelentkezés után a feltöltött kiadások szűrése dátum paraméterek megadásával. A Filter metódus fog elsőnek elindulni, mely paramétereket ad át a Start metódus számára. A Start metódus a paramétereknek megfelelően leszűri a kiadásokat és eljuttatja a Frontend számára.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  5
- **Rövid leírás**:  GET kérés "/register" böngészővel
- **Elvárt működés**: 
http://127.0.0.1/2022_PTI_FOSZ_TAV/register cím beírása után lefut a Register kontroller osztály Get metódusa, mely megjeleníti a regisztrációs oldalt.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  6
- **Rövid leírás**:  POST kérés "/register" böngészővel
- **Elvárt működés**: 
http://127.0.0.1/2022_PTI_FOSZ_TAV/register oldalon a regisztrációs űrlap kitöltését követően elküldésre kerülnek az input adatok a Register kontroller Post metódusának ahol megkezdődik az adatok feldolgozása, kiértékelése.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  7
- **Rövid leírás**:  GET kérés "/login" böngészővel
- **Elvárt működés**: 
http://127.0.0.1/2022_PTI_FOSZ_TAV/login cím beírása után lefut a Login kontroller osztály Get metódusa, mely megjeleníti a regisztrációs oldalt.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  8
- **Rövid leírás**:  POST kérés "/login" böngészővel
- **Elvárt működés**: 
http://127.0.0.1/2022_PTI_FOSZ_TAV/login oldalon a bejelenzkező űrlap kitöltését követően elküldésre kerülnek az input adatok a Login kontroller Post metódusának ahol megkezdődik az adatok feldolgozása, kiértékelése.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  9
- **Rövid leírás**:  POST kérés "/logout" böngészővel
- **Elvárt működés**: 
A weboldal navigációs sávjában sikeres bejelentkezés után válik elérhetővé a "Kijelentkezés" opció. Erre kattintás után elindul egy POST kérés a http://127.0.0.1/2022_PTI_FOSZ_TAV/logout útvonalra. A kérés a Logout kontoroller Post metódusa dolgozza fel.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  10
- **Rövid leírás**:  DELETE kérés "/deleteexpense" böngészővel
- **Elvárt működés**: 
A tételek listában elérhető "Törlés" gomb hatására elindul egy DELETE kérés, mely az adott tétel törlésése szolgál. Ezt a kérést a DeleteExpense kontroller Delete metódusa dolgozza fel.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt

###  11
- **Rövid leírás**:  PUT kérés "/modifyexpense" böngészővel
- **Elvárt működés**: 
A tételek listában elérhető "Módosít" gomb hatására elindul egy PUT kérés, mely az adott tétel módosítására szolgál. Ezt a kérést a ModifyExpense kontroller Modify metódusa dolgozza fel.
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt