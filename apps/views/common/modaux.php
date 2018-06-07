<?php ?>

<!-- Modal -->
<div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog" aria-labelledby="addAccountModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="b-0" action="/createaccount" method="post">
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="createAccountForm" class="btn btn-primary" value="Save changes" >
            </div>
            
    </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="addOpModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Date</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Montant</label>
                  <input type="text" class="form-control" id="inputPassword4">
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Categorie</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option disabled>Credit</option>
                    <option >Salaire</option>
                    <option>Autre Entrée D'argent</option>
                    <option disabled>Debit</option>
                    <option>Vetements</option>
                    <option>Alimentaire</option>
                    <option>Autre Depense</option>
                  </select>
                </div>
                  <div class="form-group col-md-6">
                      <label for="exampleFormControlSelect1">Devise</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>Euro (€)</option>
                        <option>Dollard ($)</option>
                        <option>Livre ()</option>
                        <option>Bitcoin</option>
                        <option>Autre Depense</option>
                      </select>
                  </div>
              </div>
              <div class="form-row">
                  <label for="exampleFormControlSelect1">Commentaire</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Liste des comptes</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option disabled>PEL</option>
                          <option disabled>La Poste</option>
                        </select>
</div>
<div class="form-group col-md-6">
                         <label for="exampleFormControlSelect1">Moyen de paiement</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option disabled>PEL</option>
                          <option disabled>La Poste</option>
                        </select>
</div>
                      </div> 
                      <br>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <input type="submit" class="btn btn-primary"/>
                      </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>