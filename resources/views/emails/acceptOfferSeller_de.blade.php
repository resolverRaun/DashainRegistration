<html>
<body>
<h>Hallo  {!! $firstName.' '.$lastName!!},</h><br>
<p>herzlichen Glückwunsch, der Kunde hat Dein Angebot angenommen. Alle wichtigen Informationen über den Käufer haben wir für Dich zusammengestellt:</p><br>
<table>
    <tr>
        <td>Anfrage</td>
        <td>{!! $Inquiry !!}</td>
    </tr>
    <tr>
        <td>Preis</td>
        <td>{!! $Cost !!}</td>
    </tr>

    <tr>
        <td>Names des Käufers</td>
        <td>{!! $firstname_buyer.' '. $lastname_buyer !!}</td>
    </tr>

    <tr>
        <td>Telefon</td>
        <td>{!! $phone !!}</td>
    </tr>

</table>
<p>Dein wannabei Team aus Berlin</p>
</body>
</html>