<div class="mt-5">
    <!-- // $opId, $account_id, $amount, $category_id, $payment_method, $comment -->
    <h1 class="col-12 text-center mb-3">Editer une opération</h1>
    <form method="post" class="col-sm-5 m-auto">
        <input class="form-control mb-2" type="hidden" name="opId" value="<?= urldecode($_GET['id']) ?>" />
        <input class="form-control mb-2" type="hidden" name="accountId" value="<?= urldecode($_GET['accountId']) ?>" />
        <input class="form-control mb-2" type="text" name="amount" value="<?= urldecode($_GET['amount']) ?>" />
        <select class="form-control mb-2" name="categoryId">
            <?php foreach($categories as $category) { ?>
                <option value="<?= $category->id ?>" <?=(urldecode($_GET['type']) == $category->id)?'selected':''?>><?= $category->label ?></option>
            <?php } ?>
        </select>
        <select class="form-control mb-2" name="paymentMethod">
            <?php foreach($paymentMethods as $method) { ?>
                <option value="<?= $method ?>"  <?=(urldecode($_GET['paymentMethod']) == $method)?'selected':''?>><?= strtoupper($method)?></option>
            <?php } ?>
        </select>
        <textarea style="resize:none" class="form-control mb-2" name="comment" rows="3"><?= urldecode($_GET['comment']) ?></textarea>
        <input class="form-control mb-2" type="submit" name="editOperationForm" value="Valider" />
    </form>
</div>