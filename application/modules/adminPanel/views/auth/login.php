<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-body">
    <div class="text-center">
        <h4><?= ucwords($title) ?></h4>
        <h6>Enter your Mobile and Password </h6>
    </div>
    <?= form_open('', '', 'class="theme-form"') ?>
    <div class="form-group">
        <?= form_label('Your Mobile', 'mobile', 'class="col-form-label pt-0"') ?>
        <?= form_input([
            'class' => "form-control",
            'type' => "text",
            'id' => "mobile",
            'name' => "mobile",
            'maxlength' => 10,
            'required' => "",
            'value' => set_value('mobile')
        ]); ?>
        <?= form_error('mobile') ?>
    </div>
    <div class="form-group">
        <?= form_label('Password', 'password', 'class="col-form-label"') ?>
        <?= form_input([
            'class' => "form-control",
            'type' => "password",
            'id' => "password",
            'name' => "password",
            'maxlength' => 255,
            'required' => ""
        ]); ?>
        <?= form_error('password') ?>
    </div>
    <div class="checkbox">
        <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
            <div class="radio radio-danger">
                <?= form_radio('role', 'Admin', true, 'id="admin"') ?>
                <?= form_label('Admin', 'admin', 'class="mb-0"') ?>
            </div>
            <div class="radio radio-danger">
                <?= form_radio('role', 'Staff', set_value('role') == 'Staff' ? true : false, 'id="staff"') ?>
                <?= form_label('Staff', 'staff', 'class="mb-0"') ?>
            </div>
            <div class="radio radio-danger">
                <?= form_radio('role', 'Partner', set_value('role') == 'Partner' ? true : false, 'id="partner"') ?>
                <?= form_label('Partner', 'partner', 'class="mb-0"') ?>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="text-right mt-3">Forgot your password?&nbsp;&nbsp;<?= anchor(admin('forgot-password'), 'click here', 'class="btn-link text-capitalize"') ?></div>
    </div>
    <div class="form-group form-row mt-3 mb-0">
        <?= form_button([
            'type'    => 'submit',
            'class'   => 'btn btn-outline-danger btn-block',
            'content' => 'Login'
        ]); ?>
    </div>
    <?= form_close() ?>
</div>