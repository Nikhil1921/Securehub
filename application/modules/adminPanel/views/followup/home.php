<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <h5><?= $title ?> <?= $operation ?></h5>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <?= form_button([
                'data-value' => 'Followup',
                'class'   => 'btn btn-outline-primary btn-block ins_type',
                'content' => 'Followup'
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= form_button([
                'data-value' => 'Not interested',
                'class'   => 'btn btn-outline-primary btn-block ins_type',
                'content' => 'Not interested'
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= form_button([
                'data-value' => 'Plan purchased',
                'class'   => 'btn btn-outline-primary btn-block ins_type',
                'content' => 'Plan purchased'
            ]); ?>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="datatable table table-striped table-bordered nowrap">
            <thead>
                <th class="target">Sr.</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Remark</th>
                <th>Created AT</th>
                <?php if ($this->user->role == 'Admin'): ?>
                <th>User</th>
                <?php endif ?>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" name="ins_type" value="Followup" />