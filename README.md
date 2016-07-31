
ONLINE STORE
Cel warsztatów
- Celem warsztatów jest napisanie prostego sklepu internetowego.
- Projekt ma być napisany obiektowo i do każdej z klas mają być napisane testy.
- Projekt jest grupowy (zespoły dwuosobowe). 

Zadanie 1. Przygotowanie Zadanie 2. Połączenie do bazy danych

 Dobierzcie się w pary.
 W parze załóżcie jedno repozytorium na GitHubie (musi się znajdować na jednym z kont – obojętnie którym).
 Podepnijcie swoje nowe projekty do repozytorium i zobaczcie, czy działa (np. przez dodanie pliku readme na GitHubie i ściągnięciu go na oba komputery).

Zadanie 2.  Połączenie do bazy danych 

 Na jednym z komputerów wspólnie stwórzcie plik z połączeniem do bazy danych.
 Dane do połączenia każdy powinien trzymać w osobnym pliku (np. config.php), który nie może się znajdować w repozytorium (użyjcie do tego .gitignore). 

Zadanie 3a.  Klasa przedmiotu 
 Stwórz (w katalogu /src) klasę dla przedmiotu. Przedmiot ma mieć nazwę, cenę, opis, i dostępność (liczbę na stanie – int).
 Przygotuj wszystkie funkcje, które mogą być przydatne dla tej klasy.
 Przygotuj relację jeden do wielu z tabelką, która trzyma zdjęcia w bazie danych.

Zadanie 3b.  Klasa użytkownika


 Stwórz (w katalogu /src) klasę dla użytkownika
 Użytkownik ma mieć wszystkie typowe informacje: imię, nazwisko, mail i hasło.
 Przygotuj wszystkie potrzebne funkcje przydatne dla tej klasy.

Zadanie 3c. Synchronizacja

 Wyślij swoje commity do repozytorium i pobierzcie kod drugiej osoby.
 Pamiętajcie o modyfikacji swoich baz danych.
 Przetestuj kod drugiej osoby (przez mały skrypt, który tworzy obiekt danej klasy i na niej działa). 
 Sprawdźcie, czy wszystko jest ok – jeżeli nie, to wspólnie znajdźcie błąd. Następnie do repozytorium dodajcie fix (kod naprawiający ten błąd).
 Jeżeli ukończysz swoje funkcjonalności wcześniej niż druga osoba, to pomóż jej w pracy

Zadanie 4a.  Klasa administratora i wiadomości

 Stwórz klasę dla administratora.
 Ma on mieć nazwę, mail i hasło.
 Przygotuj wszystkie funkcje, które mogą być przydatne dla tej klasy.
 Przygotuj klasę wiadomości – powinna mieć ona tekst wiadomości i użytkownika, do którego jest skierowana. 
 Wiadomości w naszym systemie mają służyć do powiadamiania użytkownika o różnych sytuacjach (np. wysłaniu do niego paczki, przyjęciu zamówienia itp.).
 Administrator powinien mieć możliwość wysyłania wiadomości.
 Dodaj do klasy User funkcje, które zwracają wszystkie wysłane do niego wiadomość

Zadanie 4b.  Klasa zamówienia

 Stwórz klasę dla zamówienia.
 Ma ona mieć następujące relacje: • jeden do wielu z użytkownikiem, • wiele do wielu z przedmiotami.
 Zamówienie ma mieć swój stan (niezłożone, złożone, opłacone, zrealizowane).
 Dodaj do klasy User funkcję zwracające jego koszyk i wszystkie zamówienia (poza koszykiem)

Zadanie 4c.  Synchronizacja

 Wyślij swoje commity do repozytorium i pobierzcie kod drugiej osoby.
 Pamiętajcie o modyfikacji swoich baz danych.
 Przetestuj kod drugiej osoby (przez mały skrypt, który tworzy obiekt danej klasy i na niej działa). 
 Sprawdźcie, czy wszystko jest ok – jeżeli nie, to wspólnie znajdźcie błąd. Następnie do repozytorium dodajcie fix (kod naprawiający ten błąd).
 Jeżeli ukończysz swoje funkcjonalności wcześniej niż druga osoba, to pomóż jej w pracy

Zadanie 5a.  Panel administracyjny
 Stwórz panel administracyjny (w katalogu /admin) według podanych wcześniej wytycznych.

Zadanie 5b.  Sklep
 
 Stwórz sklep (w katalogu /shop) według podanych wcześniej wytycznych.
 Jeżeli ukończysz swoje funkcjonalności wcześniej niż druga osoba, to pomóż jej w pracy

Zadanie 5c. Synchronizacja

 Wyślij swoje commity do repozytorium i pobierzcie kod drugiej osoby.
 Pamiętajcie o modyfikacji swoich baz danych.
 Przetestuj kod drugiej osoby (przez mały skrypt, który tworzy obiekt danej klasy i na niej działa). 
 Sprawdźcie, czy wszystko jest ok – jeżeli nie, to wspólnie znajdźcie błąd. Następnie do repozytorium dodajcie fix (kod naprawiający ten błąd).
 Jeżeli ukończysz swoje funkcjonalności wcześniej niż druga osoba, to pomóż jej w pracy.

Epilog

 Pod koniec pamiętajcie o tym, żeby osoba, która nie ma repozytorium, zrobiła fork na swoje konto GitHuba.
 Dzięki temu będzie miała takie samo repozytorium u siebie.
 Osoba, która to zrobi, musi też pamiętać o zmianie adresu origin w swoim repozytorium, dzięki temu będzie commitować do repozytorium swojego, a nie do koleżanki lub koleg
