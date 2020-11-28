<?php
// Модуль Реклама
include("data/data_ad.php");//Подключение файла с данными.
echo "
<a href = $ad_img target='_blank'>
            <img src = 'img/ad_block.jpeg' width = '50%' height = '50%'> 
        </a>
        <p>$ad_text
            <a href = $ad_bilet_address target='_blank'>
        <p>Скорей смотри</p>
        </a>
        </p>
        <div id = 'Copyright'>© Защищено от копирайта
            <p id = 'evil' onmouseover  = 'zrada = 1'  onmouseout = 'zrada = 0'> </p>
        </div>
     
        "
?>

