# Backend tesztek

## Jegyzőkönyv


|ID| Megnevezés | Tesztelő neve | Funkció leírása | Elvárt eredmény | Eredmény | Megfelelősségi státusz | Javítva
|-------| --------------| ------------|------------------------|------------|---------------|---------------|----|
|[1](#1)| GET "/"|Jóni Géza|Home kontroller Start metódus indul | Metódus lefut|siker |Megfelelt	||
|[2](#2)| GET "/newexpense"|Jóni Géza|newExpense kontroller Get metódus indul | Metódus lefut|siker |Megfelelt	||
|[3](#3)| POST "/newexpense"|Jóni Géza|newExpense kontroller Post metódus indul | Metódus lefut|siker |Megfelelt	||


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