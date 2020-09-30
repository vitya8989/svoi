<?
if((isset($_POST['whatYourPlan']))&&(isset($_POST['howMuchGuests']))&&(isset($_POST['whenYourPlan']))&&(isset($_POST['yourPrefer']))&&(isset($_POST['yourContacts']))){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'svoiband@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'ЗАЯВКА на УСЛУГУ'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Что планируется: '.$_POST['whatYourPlan'].'</p>
                        <p>Сколько гостей: '.$_POST['howMuchGuests'].'</p>
                        <p>Когда: '.$_POST['whenYourPlan'].'</p>
                        <p>Предпочтения: '.$_POST['yourPrefer'].'</p>
                        <p>Телефон: '.$_POST['yourContacts'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "info@svoiband.ru"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>