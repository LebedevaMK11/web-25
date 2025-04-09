<?php
if (isset($_GET['day'])) {
    $date = $_GET['day'];
    $bithday = explode("-", $date);
    $day = $bithday[2];
    $month = $bithday[1];
    if ((($day >= "22") && ($month == "12")) || (($day <= "20") && ($month == "01"))){
        echo "Козерог";
    }
    elseif ((($day >= "21") && ($month == "01")) || (($day <= "20") && ($month == "02"))){
        echo "Водолей";
    }
    elseif ((($day >= "21") && ($month == "02")) || (($day <= "20") && ($month == "03"))){
        echo "Рыбы";
    }
    elseif ((($day >= "21") && ($month == "03")) || (($day <= "19") && ($month == "04"))){
        echo "Овен";
    }
    elseif ((($day >= "20") && ($month == "04")) || (($day <= "20") && ($month == "05"))){
        echo "Телец";
    }
    elseif ((($day >= "21") && ($month == "05")) || (($day <= "21") && ($month == "06"))){
        echo "Близнецы";
    }
    elseif ((($day >= "22") && ($month == "06")) || (($day <= "22") && ($month == "07"))){
        echo "Рак";
    }
    elseif ((($day >= "23") && ($month == "07")) || (($day <= "22") && ($month == "08"))){
        echo "Лев";
    } 
    elseif ((($day >= "23") && ($month == "08")) || (($day <= "22") && ($month == "09"))){
        echo "Дева";
    }    
    elseif ((($day >= "23") && ($month == "09")) || (($day <= "23") && ($month == "10"))){
        echo "Весы";
    }    
    elseif ((($day >= "24") && ($month == "10")) || (($day <= "21") && ($month == "11"))){
        echo "Скорпион";
    }    
    elseif ((($day >= "22") && ($month == "11")) || (($day <= "21") && ($month == "12"))){
        echo "Стрелец";
    }       
}
