<!DOCOTYPE html>
<html>
<body style="margin: 80px; ">
<p style="display: flex; justify-content: center;font-size: 50px; font-weight: bold; ">ELEKTROS KAINOS
    SKAIČIUOKLĖ</p>
<div style="display: flex; justify-content:center; font-size: 25px;  ">
    <div>
        <form method="POST" action="sum.php">
            <div>
                <label for="amount">Elektros kilovatvalandžių kiekis, kwh </label>
                <input type="number" name="amount" id="amount" value="0">
            </div>
            <div>
                <label for="price">Elektros tarifo kaina, Eur </label>
                <input type="number" name="price" id="price" placeholder="Kaina" min="0.01" step="0.01" value="0.01">
            </div>
            <div>
                <input type="radio" id="day" name="tariff" value="Dieninis" checked>
                <label for="day">Dieninis tarifas</label>
            </div>
            <div>
                <input type="radio" id="night" name="tariff" value="Naktinis">
                <label for="night">Naktinis tarifas</label>
            </div>
            <div>
                <label for="month">Laikotarpis </label>
                <input type="month" name="month" id="month" value="2022-09">
            </div>
            <input style="color: red; font-weight: bold" type="submit" value="PATVIRTINTI">
        </form>
         <a style="color: #e05454; font-size: 25px; font-weight: bold" href="sum.php">SKAIČIUOTI KAINĄ</a>
    </div>
</div>
</body>
</html>
