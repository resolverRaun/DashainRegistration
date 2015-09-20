<html>
<body>
<h>Hallo  {!! $firstName.' '.$lastName!!},</h><br>
<p>herzlichen Glückwunsch. Du hast das gesuchte Produkt gefunden und möchtest es nun kaufen. Alle wichtigen Informationen über den Verkäufer haben wir hier für Dich zusammengestellt: </p><br>
<table>
    <tr>
        <td>Deine Suche</td>
        <td>{!! $Inquiry !!}</td>
    </tr>
    <tr>
        <td>Preis</td>
        <td>{!! $Cost !!}</td>
    </tr>
    <tr>
        <td>Shop</td>
        <td>{!! $store !!}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{!! $firstName_ceo.' '. $lastName_ceo !!}</td>
    </tr>

    <tr>
        <td>Adresse</td>
        <td>{!! $street.' '. $streetNbr !!}</td>
    </tr>

    <tr>
        <td>Telefon</td>
        <td>{!! $phone !!}</td>
    </tr>
    <tr>
        <td>E-Mail</td>
        <td>{!! $email !!}</td>
    </tr>
</table>
<p>Dein wannabei Team aus Berlin</p>
</body>
</html>