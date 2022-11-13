# Backend tesztek

## Jegyzőkönyv


|ID| Megnevezés | Tesztelő neve | Funkció leírása | Elvárt eredmény | Eredmény | Megfelelősségi státusz | Javítva
|-------| --------------| ------------|------------------------|------------|---------------|---------------|----|
|[1](#1)| GET "/"|Jóni Géza|Home kontroller Start metódus indul | Metódus lefut|lefutott |Megfelelt	||


###  1
- **Rövid leírás**:  GET kérés "/" böngészővel
- **Elvárt működés**:  http://127.0.0.1/2022_PTI_FOSZ_TAV/ böngésző hívás hatására le kell fusson a \Spendor\app\controllers\Home.php-ban található Start metódus melynek segítségével meg kell jelenjen a kezdőoldal.
Ha a felhasználó nincs bejelentkezve, akkor a kezdőoldalnak a Spendor\app\views\Login.php kell megjelenjen. Ha be van jelentkezve, akkor meg a Spendor\app\views\Home.php
- **Jelenlegi működés**: Az elvárt működésnek megfelelően.
- **Megfelelősségi státusz**: Megfelelt