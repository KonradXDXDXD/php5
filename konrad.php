<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //stworzenie funkcji która pobiera wartość i wypisuje jej kwadrat czyli liczba do potęgi 2
    function potega ($liczba){
        $wynik=$liczba*$liczba;
        echo "<br> Potęga liczby $liczba to $wynik";
    }
    potega(3);
    potega(12);
    // sprawdzanie typów zmiennych
    $liczba=12;
    $liczba2=443.554;
    $zmienna="tekst";
    echo '<br> Typ zmiennej liczba '.$liczba.' to '.gettype($liczba);
    echo '<br> Typ zmiennej liczba2 '.$liczba2.' to '.gettype($liczba2);
    echo '<br> Typ zmiennej tekst '.$zmienna.' to '.gettype($zmienna);
    
    
    
    function zadanie($liczba5,$liczba6,$liczba7){
    
        
        
        echo '<br> Typ zmiennej liczba '.$liczba5.' to '.gettype($liczba5);
        echo '<br> Typ zmiennej liczba2 '.$liczba6.' to '.gettype($liczba6);
        echo '<br> Typ zmiennej liczba2 '.$liczba7.' to '.gettype($liczba7);
       
        
    
    }
    zadanie(123.45,"test",234);
    zadanie(44,"test numer2","Ala ma kota");
    zadanie(789,455,85,5565)
   
    
    
    
    
    
    function kwadrat($a){
        $wynik=pow($a,2);
        $wynik2=round($wynik,2);
        return $wynik2;
        
    }   
        kwadrat(5.2);
        echo'<br>wynik dzialania to '.kwadrat(5.2);
        echo'<br>wynik dzialania to '.kwadrat(4.674);
        $dodatek=kwadrat(2);
        echo'<br>wynik dzialania to '.kwadrat($dodatek);
        

        function dzielenie($liczba1, $liczba2) {
            $wynik = round($liczba1 / $liczba2, 3);
            echo "Wynik dzielenia: $wynik <br>";
            return $wynik;
        }
        dzielenie (12901,1324);
        
        function delta($a, $b, $c) {
            $delta = pow($b, 2) - 4 * $a * $c;
            echo "Δ wynosi: $delta <br>";
            return $delta;
        }
        
        delta(1,2,1);
        
        
        
        function zaokraglanie($liczba) {
            $zaokraglona_w_dol = floor($liczba);
            $zaokraglona_w_gore = ceil($liczba);
          
            
            echo "Zaokrąglona w dół: $zaokraglona_w_dol, Zaokrąglona w górę: $zaokraglona_w_gore, <br>";
        }
        zaokraglanie(3.22222);
        zaokraglanie(4.93);
        
        ?>
        
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </body>
        </html>
    
    
    