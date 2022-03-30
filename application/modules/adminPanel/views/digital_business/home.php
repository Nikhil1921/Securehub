<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <div class="row">
        <div class="col-md-8">
            <h5><?= $title ?> <?= $operation ?></h5>
        </div>
        <div class="col-md-4">
            <?= form_open() ?>
            <div class="row">
                <div class="col-md-3">
                    <?= form_label('Price', 'price', 'class="col-form-label"') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "price",
                        'name' => "price",
                        'required' => "",
                        'value' => $price['value']
                    ]); ?>
                </div>
                <div class="col-md-3">
                    <?= form_label('Months', 'validity', 'class="col-form-label"') ?>
                    <?= form_input([
                        'class' => "form-control",
                        'id' => "validity",
                        'name' => "validity",
                        'required' => "",
                        'value' => $validity['value']
                    ]); ?>
                </div>
                <div class="col-md-6">
                    <?= form_label('', '', 'class="mt-1 mb-4"') ?>
                    <?= form_button([
                            'type'    => 'submit',
                            'class'   => 'btn btn-outline-primary btn-block col-12',
                            'content' => 'UPDATE'
                        ]); ?>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="datatable table table-striped table-bordered nowrap">
            <thead>
                <th class="target clr_head">Sr.</th>
                <th class="clr_head">Name</th>
                <th class="clr_head">Mobile</th>
                <th class="clr_head">Email</th>
                <th class="clr_head">Address</th>
                <th class="target clr_head">Logo</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>