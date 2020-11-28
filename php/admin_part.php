<?php
if ($_SESSION['login'] == 'root')
    echo "
    <div class = 'admin_part'>
  <h3> <a href='http://localhost/Tools/phpMyAdmin/' vlink='#cecece'>Переход в админчасть </a></h3>
    </div>";
?>