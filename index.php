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
    echo "siemano";
    $name = "Wiktria";
    $age = 21;
    $high = 1.60;
    echo "$name"; 
    echo "$age"; 
    echo "$high";
    
    class Car {
        public $make;
        public $model;
        public $year;

        function __construct($make, $model, $year) {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
        }

        function getCarInfo() {
            return $this->year."". $this->make."". $this->model;
        }
    }

    $my_car = new Car("Chevrolet", "Aveo", 2004);
    echo $my_car-> getCarInfo();

    $variable = 23;
    if ($variable===null) {
        echo "zmienna jest null";
    }

    $fruits = array('apple', 'banana', 'cherry');
    echo $fruits[0];
    // Dodaj element na koniec tablicy
    $fruits[] = 'orange';

    // Usunięcie elementu z tablicy
    unset($fruits[1]);

    // Sortowanie elementów
    sort($fruits);

    // Przeprowadź pętlę przez elementy
    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    }

    $person = array(
        'name' => 'Anna Nowak',
        'age' => 24,
        'email' => 'a.nowak@gmail.com'
    );
    echo $person['name'];

    // <!-- operatory -->

    // + dodawanie(addition)
    $a = 3;
    $b = 7;
    $c = $a + $b;

    // -odejmowanie(subtraction)
    $a = 3;
    $b = 7;
    $c = $a - $b;

    // * mnożenie(multiplication)
    $a = 3;
    $b = 7;
    $c = $a * $b;

    // / dzielenie(division)
    $a = 3;
    $b = 7;
    $c = $a / $b;

    // % resztaz dzielenia(modulus)
    $a = 3;
    $b = 7;
    $c = $a % $b;

    // Operatory przypisania

    // = przypisanie(assignment)
    $a= 2; // przypisuje wartość 2 do $a

    // += przypisanie dodania(addition assignment)
    $a = 2;
    $a += 3;

    // -= przypisanie odjęcia(subtraction assignment)
    $a = 5;
    $a -= 3;

    // *= przypisanie mnożenia(multiplication assignment)
    $a= 2;
    $a*= 3;

    // /= przypisanie dzielenia(division assignment)
    $a= 6;
    $a/= 3;

    // %= przypisanie reszty z dzielenia(modulus assignment)
    $a= 5;
    $a%= 2; 

    // Operatory porównania (ComparisonOperators)
    // == jest równy(equal)
    $a = 2;
    $b = 2;
    if ($a == $b) {
        echo 'a i b są równe';
    }

    // != jest różny(not equal)
    $a = 2;
    $b = 3;
    if ($a != $b) {
        echo 'a i b nie są równe';
    }

    // > większy od (greater than)
    $a = 2;
    $b = 4;
    if ($a > $b) {
        echo 'a jest większe od b';
    }

    // < mniejszy od (less than)
    $a= 2;
    $b= 3;
    if($a< $b) {
        echo"a jest mniejszeod b";
    }

    // >= większy lub równy(greater than or equal to)
    $a= 3;
    $b= 3;
    if($a>= $b) {
        echo"a jest większelubrówneb";
    }
    // <= mniejszy lub równy(less than or equal to)
    $a= 2;
    $b= 2;
    if($a<= $b) {
        echo"a jest mniejszelubrówneb";
    }

    // Operatory logiczne (logicaloperations)
    $a= true;
    $b= false;

    //&& koniunkcja`i`
    $result= $a&& $b;

    //|| alternatywa`lub`
    $result= $a|| $b;

    // Instrukcja if...else(condition-warunek)
    if(condition) {
        // kod, któryzostaniewykonany, jeśliwarunekjest prawdziwy
    }
     else{
        // kod, któryzostaniewykonany, jeśliwarunekjest fałszywy
    }

    $a = 5;
    if( $a > 10) {
        echo 'a jest większe od 10';
    }
    else {
        echo 'a nie jest większe od 10';
    }

    // instrukcja swich 
    // pozwala na testowanie zmiennej względem wielu przypadków
    switch ($day) {
        case 'monday':
            echo 'today is monday';
            break;
        case 'tuesday':
            echo 'today is tuesday';
            break;
        default:
            echo 'today is neither monday or tuesday';
            break;            
    }

    // funkcje php
    function function_name(parameter1, parameter2, ...) {
        // function statements...returnvalue;
    }

    function add($a, $b) {
        $sum = $a + $b;
        return $sum
    }
    $result = add(3, 4);
    echo $result;

    // Classified as Internal Funkcje wbudowane 
    // predefiniowane funkcje, które są częścią języka PHP.
    // Wykonują one określone zadanie i mogą być używane bez koniecznościich definiowania.
    // Na przykład, funkcja strlen() zwraca długość łańcucha:

    $str= "Hello, World!";
    echo strlen($str); // Output: 13

    // Funkcje zdefiniowane przez użytkownika
    // funkcje, które sam definiujesz. Możesz zdefiniować funkcję w PHP używając słowa kluczowego function,
    //  po którym następuje nazwa funkcji i lista parametrów w nawiasach. 
    // Polecenia tworzące funkcję są umieszczane wewnątrz nawiasów klamrowych. 

    function greet($name) {
        echo 'Siemanko, $name!';
    }
    greet('Zenek'); // Output: Siemanko, Zenek!

    // Pętle (loops)
    // Pętle w PHP pozwalają na wielokrotne powtarzanie bloku kodu. 
    // Może to być przydatne na przykład do wykonywania operacji na tablicach 
    // lub do powtarzania procesu do momentu spełnienia określonego warunku.
    // W PHP istnieją dwa główne typy pętli: pętlefor oraz pętle while.

    // Pętla for składa się z trzech części: inicjalizacji, warunku i iteracji. 
    // Inicjalizacja ustawia zmienną licznik, warunek sprawdza czy zmienna licznik spełnia określoną wartość,
    //  a iteracja inkrementuje zmienną licznik.
    for ($i = 0; $i <10; $i++) {
        echo $i;
    }

    // Pętla while ma jeden warunek, który jest sprawdzany przed każdą iteracją. 
    // Pętla będzie działać tak długo, jak długo warunek jest prawdziwy.
    $i = 0;
    while ($i < 10) {
        echo $i;
        $i++;
    }

    // Oprócz pętli for i while, PHP posiada również pętle do...while, które są podobne do pętli while, 
    // z tą różnicą, że warunek jest sprawdzany po pierwszej iteracji, więc pętla ma gwarancję, 
    // że zostanie wykonana przynajmniej raz.

    $i = 0;
    do {
        echo $i;
        $i++;
    } while ($i < 10);

    



    ?>
    
</body>
</html>