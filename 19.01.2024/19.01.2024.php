<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Formularz rejestracyjny</title>
        <meta charset="UTF-8">
        <style>

            p {
                font-weight: bold;
                font-size: 14pt;
            }

            #wyk{
                font-weight: bold;
                font-size:14pt;
            }

            #fo {
                font-weight:bold;
                font-size:14pt;
            }

            p.wyk{
                font-weight:bold; 
                font-size:11pt;
            }
        </style>
    </head> 
    <body>
        <form action="http://localhost/19.01.2024.php" method="post">
            <p>Formularz kontaktowy:</p>
                Nazwiskko:<br>
            <input type="text" name="nazw" value="" size="30"></br>
                Imię:<br>
            <input type="text" name="im" value="" size="30"></br>
                Zawód:<br>
            <input type="text" name="zaw" value="" size="30"></br>
                Adres e-mail:<br>
            <input type="text" name="adr" value="" size="30"></br>

        <p class="wyk">Wykształcenie:</p>
            <input type="radio" value="podstawowe" name="wykszt" checked> Podstawowe<br> 
            <input type="radio" value="średnie" name="wykszt" checked> Średnie<br> 
            <input type="radio" value="wyższe" name="wykszt" checked> Wyższe<br></br> 

        <input type="checkbox" name="opcje" maxlenght="1">
            Chcesz ciasteczka?<br></br>
        
        <p id="wyb">Wybór jezyka: </p>
        <select name="języki[]" multiple>
            <option value="Język angielski">Język angielski</option>
            <option value="Język niemiecki">Język niemiecki</option>
            <option value="Język francuski">Język francuski</option>
            <option value="Język włoski">Język włoski</option>
            <option value="Język rosyjski">Język rosyjski</option>
            <option value="Język hiszpański">Język hiszpański</option>
        </select>
        <p>
            <input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp;
        <input type="reset" value="Wyczyść" name="zeruj"> 
        </fomr>
    </body>
</html>