<?
if((isset($_POST['name']))&&(isset($_POST['tel']))&&(isset($_POST['check']))){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'svoiband@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'ЗАЯВКА на УСЛУГУ'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>
                        <p>Политика конфиденциальности: '.$_POST['check'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "info@svoiband.ru"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>