<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <div class="row">
        <div class="col-6">
            <h5><?= $title ?> <?= $operation ?></h5>
        </div>
        <div class="col-6">
            <?= anchor("$url/add", '<span class="fa fa-plus"></span> Add new', 'class="btn btn-outline-success btn-sm float-right"'); ?>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <?php foreach($types as $type): ?>
            <div class="col-md-4">
                <?= form_button([
                    'data-value' => e_id($type['id']),
                    'class'   => 'btn btn-outline-primary btn-block ins_type',
                    'content' => $type['ins_type']
                ]); ?></div>
        <?php endforeach ?>
    </div>
    <br>
    <div class="table-responsive">
        <table class="datatable table table-striped table-bordered nowrap">
            <thead>
                <th class="target">Sr.</th>
                <th>Plan Title</th>
                <th>Insurance</th>
                <th>Plan Type</th>
                <th>Company</th>
                <th class="target">Action</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" name="ins_type" value="<?= e_id(reset($types)['id']) ?>">