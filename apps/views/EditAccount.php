<div>
    <form action="/editaccount" method="post">
    <input type="number" placeholder="User id" name="idUser" />
    <select name="accountType">
        <option value="joint account">Joint account</option>
        <option value="saving">Saving</option>
        <option value="standart">Standart</option>
    </select>
    <input name="provision" type="number" placeholder="Provision" />
    <select name="currency">
        <option value="eur">EUR</option>
        <option value="usd">USD</option>
    </select>
    <input type="submit" name="editAccountForm" />
</form>
</div>
