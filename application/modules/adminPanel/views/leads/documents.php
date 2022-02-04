<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <div class="row">
        <div class="col-8">
            <h5><?= $title ?> <?= $operation ?></h5>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-3">
            <?= form_button([
                'data-value' => 'Insurance',
                'class'   => 'btn btn-outline-primary btn-block doc_type',
                'content' => "Insurance Documents"
            ]); ?>
        </div>
        <div class="col-md-3">
            <?= form_button([
                'data-value' => 'KYC',
                'class'   => 'btn btn-outline-primary btn-block doc_type',
                'content' => "KYC Documents"
            ]); ?>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="datatable table table-striped table-bordered nowrap">
            <thead>
                <th class="target">Sr.</th>
                <th>Document name</th>
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
<input type="hidden" name="doc_type" value="Insurance" />