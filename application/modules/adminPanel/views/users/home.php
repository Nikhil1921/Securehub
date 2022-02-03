<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <div class="row">
        <div class="col-6">
            <h5><?= $title ?> <?= $operation ?></h5>
        </div>
        <?php if(verify_access($name, 'add')): ?>
        <div class="col-6">
            <?= anchor("$url/add", '<span class="fa fa-plus"></span> Add new', 'class="btn btn-outline-success btn-sm float-right"'); ?>
        </div>
        <?php endif ?>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <?= form_button([
                'data-value' => 'Staff',
                'class'   => 'btn btn-outline-primary btn-block ins_type',
                'content' => 'Staff'
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= form_button([
                'data-value' => 'Partner',
                'class'   => 'btn btn-outline-primary btn-block ins_type',
                'content' => 'Partner'
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
                <th>Email</th>
                <th>Branch</th>
                <!-- <th class="target" id="partner-revenue" style="display:none;">Revenue</th> -->
                <th class="target">Action</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" name="ins_type" value="Staff" />