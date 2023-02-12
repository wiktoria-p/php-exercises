<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // <!-- Ćwiczenie :?​
    // Zadeklaruj 3 zmienne które będą zawierać informacje do wstawienia w zdaniu.​
    // Zadanie wykonaj na oba sposoby, oba zdania wyświetl w konsoli. -->
    // $name = 'Wiktoria';
    // $favourite = 'spanie';
    // $number = 10;
    
    // echo "Cześć jestem $name , 
    // moją ulubioną czynnością w czasie wolnym jest $favourite. 
    // Robię to $number razy tygodniowo.";
    
    // <!-- Stwórz zmienne x = 100 oraz y = 50​ -->
    // <!-- Napisz if’a, który sprawdzi czy x jest większe od y​ -->
    // <!-- Wynik zapisz za pomocą template string​ -->
    // <!-- np. wartość 100 jest większa od 50 -->
    // $x = 100;
    // $y = 50;
    // if($x > $y) {
    //     echo 'x jest większy od y';
    // }

    // <!-- Stwórz zmienną color i przypisz do niej wartość `blue`.​ -->
    // <!-- Stwórz zmienną newColor i przypisz do niej wartość `red`.​ -->
    // <!-- Za pomocą if’a sprawdź czy zmienna color przechowuje taką samą wartość, co zmienna newColor.​ -->
    // <!-- jeśli tak: wypisz w konsoli tekst kolory się zgadzają​ -->
    // <!-- jeśli nie: wypisz w konsoli tekst kolory się nie zgadzają -->
    // $color = 'blue';
    // $newColor = 'red';
    // if ($color == $newColor) {
    //     echo 'kolory się zgadzają';
    // }
    // else {
    //     echo 'kolory się nie zgadzają';
    // }
    
    // <!-- Stwórz zmienną a i przypisz do niej wartość 8456. Stwórz zmienną b i przypisz do niej wartość 4654.​ -->
    // <!-- Za pomocą instrukcji warunkowej sprawdź:​ -->
    // <!-- Czy a jest większy od b,​ -->
    // <!-- Czy a jest równy b,​ -->
    // <!-- Czy a jest mniejszy od b,​ -->
    // <!-- W zależności od wyniku w konsoli wyświetl:​ -->
    // <!-- a > b​ -->
    // <!-- a = b​ -->
    // <!-- a < b -->
    // $a = 8456;
    // $b = 4654;
    // if ($a < $b) {
    //     echo 'a<b';
    // }

    // if ($a == $b) {
    //     echo 'a=b';
    // }

    // if ($a > $b) {
    //     echo 'a>b';
    // }
    
    // <!-- Stwórz zmienną promo i przypisz do niej wartość 20%. ​ -->
    // <!-- Strórz 3 case’y: 10%, 20%, 30%​ -->
    // <!-- W konsoli wypisz zdanie „Dziś mamy 20% zniżki!”​ -->
    // <!-- Przygotuj zdania dla pozostałych promocji.​ -->
    // $promo = 20;

    // switch($promo) {
    //     case 10:
    //         echo 'dzisiaj mamy 10% zniżki';
    //         break;
    //     case 20:
    //         echo 'dzisiaj mamy 20% zniżki'; 
    //         break;
    //     case 30:
    //         echo 'dzisiaj mamy 30% zniżki';
    //         break;    
    // }
    
    // <!-- Stwórz zmienną x i przypisz do niej wartość 10​ -->
    // <!-- Za pomocą operatora warunkowego sprawdź czy wartość przypisana do x jest parzysta​ -->
    // <!-- W konsoli wpisz odpowiedni komunikat​ -->
    // <!-- np. liczba jest parzysta -->
    // $x = 10;
    // if($x / 2) {
    //     echo 'liczba jest parzysta';
    // }
    
    // <!-- Stwórz zmienną x i przypisz do niej wartość 50​ -->
    // <!-- Za pomocą instrukcji warunkowej sprawdź czy x jest większy lub równy 100, jeśli jest – wypisz w konsoli x jest duży.​ -->
    // <!-- Następnie sprawdź, czy x jest mniejszy niż 100 ale większy niż 30. Jeśli tak – wypisz w konsoli x jest średni.​ -->
    // <!-- Jeśli x jest mniejszy lub równy 30, wypisz w konsoli x jest mały.  -->
    // $x = 50;
    // if ($x<=100) {
    //     echo 'x jest duży';
    // }
    
    // if($x > 30 && $x < 100) {
    
    //    echo 'x jest średni';

    // }
    // else {
    //     echo 'x jest mały';
    // }
    
    // <!-- Stwórz tablicę z nazwami miast​ -->
    // <!-- `To miasto nazywa się: [nazwa_miasta]` -->

    // $cities = array('Katowice', 'Kraków', 'Tychy', 'Rybnik', 'Wałbrzych');

    // foreach ($cities as $city) {
    //     echo "To miasto nazywa się $city";
    // }
    
    // <!-- Stwórz zmienną x i przypisz do niej wartość 0​ -->
    // <!-- Stwórz pętlę while, która będzie zwiększała x o 2 (2, 4, 6, 8, 10).​ -->
    // <!-- Pętla ma się wykonywać do momentu, w którym x będzie większe lub rowne 10 -->

    // $x = 0;
    // while ($x <= 10) {
    //     echo $x;
    //     $x += 2; 
    // } 
    
    // <!-- Stwórz zmienną x i przypisz do niej wartość 20​ -->
    // <!-- Stwórz pętlę do … while, która będzie zmniejszała x o 3.​ -->
    // <!-- Pętla ma się wykonywać do momentu, w którym x będzię większy od 0​ -->
    // $x = 20;
    // do{
    //     echo $x;
    //     $x -= 3;
    // } while($x > 0);

    
    // <!-- 1) Stwórz przykładową tablicę zawierającą nazwy zwierząt, a następnie dodaj elementy. -->
    // $animals = array('dog', 'cat', 'bird', 'lion', 'zebra');
    // $animals[] = 'panda';
    //     echo $animals[5];
    
    // <!-- 2) Stwórz przykładową tablicę zawierającą nazwy owoców, a następnie usuń elementy. -->
    // $animals = array('dog', 'cat', 'bird', 'lion', 'zebra');
    // echo $animals;
    // unset($animals[0]);
    
    // <!-- Stworz zmienną score​ -->
    // <!-- Stwórz funkcję add, która przyjmuje dwa parametry.​ -->
    // <!-- Funkcja ma dodawać elementy. Wynik działania przypisz do zmiennej score​ -->
    // <!-- Stwórz dwie nowe funkcje które będą zwracały w konsoli zdanie:​ -->
    // <!-- Funkcja 1: Liczba X jest parzysta​ -->
    // <!-- Funkcja 2: Liczba X jest nieparzysta​ -->
    // <!-- W funkcji add stwórz if’a który sprawdzi czy score jest parzysta, czy nie. ​ -->
    // <!-- W zależności od wyniku, niech if odpali Funkcję 1 w lub 2​ -->
    // <!-- Na końcu kodu wywołaj funkcję add i przekaż jej dwa dowolne argumenty -->
    $score = null;
    function add($a, $b) {
        
    }
    
    // <!-- Stworz zmienne celsius oraz temp​ -->
    // <!-- Stwórz funkcję fahrenheit, która przyjmie jeden parametr​ -->
    // <!-- Argument ma zostać przypisany do zmiennej celsius (wewnątrz funkcji)​ -->
    // <!-- Funkcja ma przekonwertować stopnie ˚C na ˚F​ -->
    // <!-- wzor: T(˚F) = T (˚C) x 1.8 + 32​ -->
    // <!-- Wywołaj funkcję. Podaj do niej jakiś argument (typ numer, czyli jakąś temperaturę)​ -->
    // <!-- Wynik wypisz w konsoli za pomocą template string np. X ˚C=Y ˚F. -->
    
    // <!-- Stworz zmienne num oraz numbers. Do pierwszej przypisz wartość 10, a do drugiej pustą tablicę​ -->
    // <!-- Stwórz pętlę for, która będzie wykonywała się tak długo, aż i będzie mniejsze od num​ -->
    // <!-- Pętla ma dodawać I do tablicy numbers​ -->
    // <!-- Stwórz funkcję, która przyjmie jeden parametr. W funkcji ma być if, który sprawdzi, czy liczba podana w argumencie jest podzielna przez 3 oraz jest różna od zera.​ -->
    // <!-- Jeśli tak – wypisz w konsoli X jest podzielna przez 3​ -->
    // <!-- Jeśli nie wypisz w konsoli X nie jest podzielna przez 3 lub X = 0​ -->
    // <!-- Za pomocą forEach odwołaj się do tablicy numbers -->
    ?>
</body>
</html>

