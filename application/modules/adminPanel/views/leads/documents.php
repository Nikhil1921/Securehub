<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <div class="row">
        <div class="col-8">
            <h5><?= $title ?> <?= $operation ?></h5>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="datatable table table-striped table-bordered nowrap">
            <thead>
                <th class="target">Sr.</th>
                <th>Document name</th>
                <th>Purchase date</th>
                <th>Expiry date</th>
                <th>Notifications</th>
                <th class="target">Action</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" name="ins_type" value="<?= $id ?>" />