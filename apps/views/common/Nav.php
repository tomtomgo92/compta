<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/createaccount">
                <span data-feather="plus"></span>
                Ajouter un compte
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/editaccount">
                <span data-feather="edit"></span>
                Editer un compte
                </a>
            </li>

            <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Ajouter une opertaiton</button>
            </li>

            <?php if(isset($selectedAccount)) { echo '<h2>'.$selectedAccount->accountProvision.'€</h2>'; } ?>

        </ul> 
    </div>    
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>