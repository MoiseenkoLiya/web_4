<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    // Если пусты, то мы не выводим ссылку
    echo "
<form action='php/bd/testreg.php' method='post'>

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  'Войти', данные из полей отправятся на страничку testreg.php методом  'post' ***** -->
 <p>
    <label>Логин:<br></label>
    <input name='login' type='text' size='15' maxlength='15'>
    </p>


    <!--**** В текстовое поле (name='login' type='text') пользователь вводит свой логин ***** -->
 
    <p>

    <label>Пароль:<br></label>
    <input name='password' type='password' size='15' maxlength='15'>
    </p>

    <!--**** В поле для паролей (name='password' type='password') пользователь вводит свой пароль ***** --> 

    <p>
    <input type='submit' name='submit' value='Ввод'>

    <!--**** Кнопочка (type='submit') отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href='php/bd/reg.php'>Регистрация</a> 
    </p></form>
                <pre id ='Counter'> </pre>
    
";
}
else
{

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>";
    echo "<a href='php/bd/exit.php'>Exit</a>             <pre id ='Counter'> </pre>";


}