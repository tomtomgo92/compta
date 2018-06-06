<div class="mt-5">
    <h1 class="col-12 text-center mb-3">Ajouter un compte</h1>
    <form class="col-sm-5 m-auto" action="/createaccount" method="post">
        <input class="form-control mb-2"  placeholder="Name" type="text" name="label" />
        <select class="form-control mb-2" name="accountType">
            <option selected disabled>Sélectionner un type de compte</option>
            <option value="jointaccount">Joint account</option>
            <option value="saving">Saving</option>
            <option value="standart">Standart</option>
        </select>
        <input class="form-control mb-2" name="provision" type="number" placeholder="Provision" />
        <select class="form-control mb-2" name="currency">
            <option selected disabled>Devise</option>
            <option value="eur">EUR</option>
            <option value="usd">USD</option>
        </select>
        <input type="submit" name="createAccountForm" />
    </form>
</div>
