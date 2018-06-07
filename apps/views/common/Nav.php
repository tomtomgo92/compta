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
            <?php if(isset($selectedAccount)) { echo '<h2>'.$selectedAccount->accountProvision.'€</h2>'; } ?>
        </ul> 
    </div>    
</nav>