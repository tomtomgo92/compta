<div class="container-fluid">
    <div class="row">
        <?php include_once _VIEWS . '/common/Nav.php'?>
        <div class="container col-md-12 ml-sm-auto pt-3 px-4">
            <main role="main" class="col-md-12 ml-sm-auto col-lg-10 pt-3 pb-3 px-4">
                <div class="card">
                    <h5 class="card-header">Tous vos comptes</h5>
                    <div class="card-body">
                        <h5 class="card-title">32 000€</h5>
                        <div class="row">
                        <div class="col"><p class="card-text">Tout roule pour vous !</p></div>
                        <div class="col"><canvas class="my-4" id="myChart" width="250px"></canvas></div>
                    </div>
                    <a href="#" class="btn btn-primary">Plus d'information</a>
                </div>
            </main>
        </div>
        <div class="container col-md-9 ml-sm-auto pt-5">
            <?php 
            $turn = 2;  
            for($i = 0; $i < sizeof($accounts); $i++) {
                if ($turn = 2) {
                    echo '<div class="row mt-5">';
                }
            ?>
                    <div class="card col-md-5 ml-sm-auto col-lg-5 mt-6 p-0">
                        <div class="card-header d-flex justify-content-between">
                            <h5><?= $accounts[$i]->label ?></h5>
                            <a href="/deleteaccount/?idaccount=<?= $accounts[$i]->id ?>">
                                <span style="width:50px;height:22px;" data-feather="trash"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $accounts[$i]->accountProvision . ' ' . $accounts[$i]->currency ?></h5>
                            <div class="row"> 
                                <!-- Chart -->
                                <div class="col"><p class="card-text">Tout roule pour vous !</p></div>
                                <div class="col"><canvas class="my-4" id="myChart" width="250px"></canvas></div>
                            </div>
                            <a href="#" class="btn btn-primary">Plus d'information</a>
                        </div>
                    </div>
                <?php
                $nextOffset = ++$i; 
                if ($nextOffset < sizeof($accounts)) { ?>
                    <div class="card col-md-5 ml-sm-auto col-lg-5 mt-6 p-0">
                        <h5 class="card-header"><?= $accounts[$nextOffset]->label ?></h5>
                        <div class="card-body">
                            <h5 class="card-title"><?= $accounts[$nextOffset]->accountProvision . ' ' . $accounts[$nextOffset]->currency ?></h5>
                            <div class="row">
                                <div class="col"><p class="card-text">Tout roule pour vous !</p></div>
                                <div class="col"><canvas class="my-4" id="myChart" width="250px"></canvas></div>
                            </div>
                            <a href="#" class="btn btn-primary">Plus d'information</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div id="addAccount" class="col-md-5 ml-sm-auto col-lg-5 mt-6 p-0 d-flex justify-content-center align-items-center">
                        <span data-feather="plus-circle"></span>
                    </div>
                <?php 
                }
                if ($turn = 2) {
                    echo '</div>';
                }
                if ($turn < 2) { $turn++; } else { $turn = 0; } 
            } 
            ?>
            <!-- Test rows -->
            <!-- <div class="row mt-5">
                <div class="card col-md-5 ml-sm-auto col-lg-5 mt-6 p-0">
                    <h5 class="card-header">Tous vos comptes</h5>
                    <div class="card-body">
                        <h5 class="card-title">32 000€</h5>
                        <div class="row">
                        <div class="col"><p class="card-text">Tout roule pour vous !</p></div>
                        <div class="col"><canvas class="my-4" id="myChart" width="250px"></canvas></div>
                    </div>
                        <a href="#" class="btn btn-primary">Plus d'information</a>
                    </div>
                </div>

                <div class="card col-md-5 ml-sm-auto col-lg-5 mt-6 p-0">
                    <h5 class="card-header">Tous vos comptes</h5>
                    <div class="card-body">
                        <h5 class="card-title">32 000€</h5>
                        <div class="row">
                        <div class="col"><p class="card-text">Tout roule pour vous !</p></div>
                        <div class="col"><canvas class="my-4" id="myChart" width="250px"></canvas></div>
                    </div>
                        <a href="#" class="btn btn-primary">Plus d'information</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>