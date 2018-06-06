<div class="mt-5">
    <h1 class="col-12 text-center mb-3" >Editer un compte</h1>
    <form class="col-sm-5 m-auto" action="/editaccount" method="post">
        <select class="form-control mb-2"  name="account">
            <option selected disabled>Sélectionnez un compte à modifier</option>
            <?php foreach($accountList as $account) { ?>
                <option value="<?= $account->id ?>"><?= $account->label ?></option>
            <?php } ?>
        </select>
        <input type="text" class="form-control mb-2" name="label" />
        <select class="form-control mb-2" name="accountType">
            <option value="jointaccount">Joint account</option>
            <option value="saving">Saving</option>
            <option value="standart">Standart</option>
        </select>
        <input class="form-control mb-2" name="provision" type="number" placeholder="Provision" />
        <select class="form-control mb-2" name="currency">
            <option value="eur">EUR</option>
            <option value="usd">USD</option>
        </select>
        <input class="form-control mb-2" type="submit" name="editAccountForm" />
    </form>
</div>
