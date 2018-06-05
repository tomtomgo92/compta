<div class="container-fluid">
  <div class="row">
      <?php require _VIEWS . '/common/Nav.php'; ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        <h2>Operations</h2>
        <div class="table-responsive" id="operation">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Compte</th>
                <th>Commentaire</th>
                <th>Date</th>
                <th>Categorie</th>
                <th>Montant</th>
                <th></th>
                <th></th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($operations->rows as $op) { ?>
                <tr>
                  <td><?= $op->label; ?></td>
                  <td><?= $op->comment; ?></td>
                  <td><?= date('d/m/Y', strtotime($op->date)); ?></td>
                  <td><?= $op->name; ?></td>
                  <td><?= $op->amount; ?></td>
                  <td>
                    <a href="/editoperation/<?= "?id=".urlencode($op->id)."&amp;type=".urlencode($op->idCategory)."&amp;accountId=".urlencode($op->idAccount)."&amp;amount=".urlencode($op->amount)."&amp;comment=".urlencode($op->comment)."&amp;paymentMethod=".urlencode($op->paymentMethod) ?>">
                      <span data-feather="edit"></i>
                    </a>
                  </td>
                  <td><a href="/deleteoperation/?deleteAccountBtn=1&amp;id=<?=$op->id?>"><span data-feather="trash"></i></a></td>
                </tr>
            <?php }?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nouvelle Operation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="/newoperation">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputPassword4">Montant</label>
            <input type="text" name="amount" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="exampleFormControlSelect1">Categorie</label>
            <select class="form-control" name="idCategory" id="exampleFormControlSelect1">
              <option disabled>Credit</option>
              <option value="8" >Salaire</option>
              <option value="9" >Autre Entrée D'argent</option>
              <option disabled>Debit</option>
              <option value="1" >Alimentaire</option>
              <option value="2" >Vetements</option>
              <option value="3" >Loisirs</option>
              <option value="4" >Transport</option>
              <option value="5" >Autre Depense</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <label for="exampleFormControlSelect1">Commentaire</label>
          <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Liste des comptes</label>
            <select class="form-control" name="idAccount" id="exampleFormControlSelect1">
              <?php foreach($accounts as $account) { ?>
                <option value="<?= $account->id ?>"><?= $account->label ?></option>
              <?php } ?>
            </select>
          </div>
            <div class="form-group col-md-6">
              <label for="exampleFormControlSelect1">Moyen de paiement</label>
              <select class="form-control" name="paymentMethod" id="exampleFormControlSelect1">
                <?php foreach($m[0] as $method) { ?>
                  <option value="<?= $method ?>"><?= strtoupper($method) ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <input type="submit" name="addOpBtn" class="btn btn-primary"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>