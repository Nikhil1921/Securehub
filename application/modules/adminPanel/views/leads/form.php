<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <h5><?= $title ?> <?= $operation ?></h5>
    </div>
    <div class="card-body">
        <?= form_open() ?>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Name', 'name', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'type' => "text",
                            'id' => "name",
                            'name' => "name",
                            'maxlength' => 255,
                            'required' => "",
                            'value' => set_value('name') ? set_value('name') : (isset($data['name']) ? $data['name'] : '')
                        ]); ?>
                        <?= form_error('name') ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Email', 'email', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'type' => "email",
                            'id' => "email",
                            'name' => "email",
                            'maxlength' => 255,
                            'required' => "",
                            'value' => set_value('email') ? set_value('email') : (isset($data['email']) ? $data['email'] : '')
                        ]); ?>
                        <?= form_error('email') ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Mobile', 'mobile', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'type' => "text",
                            'id' => "mobile",
                            'name' => "mobile",
                            'maxlength' => 10,
                            'required' => "",
                            'value' => set_value('mobile') ? set_value('mobile') : (isset($data['mobile']) ? $data['mobile'] : '')
                        ]); ?>
                        <?= form_error('mobile') ?>
                    </div>
                </div>
                <?php if ($this->user->role === 'Admin'): ?>
                <div class="col-6">
                    <div class="form-group">
                        <?php $branch_id[0] = 'Main Branch'; foreach ($branches as $branch) $branch_id[e_id($branch['id'])] = $branch['b_name']; ?>
                        <?= form_label('Branch', 'branch_id', 'class="col-form-label"'); ?>
                        <?= form_dropdown('branch_id', $branch_id, set_value('branch_id') ? set_value('branch_id') : (isset($data['branch_id']) ? e_id($data['branch_id']) : ''), 'class="form-control" required id="branch_id"'); ?>
                        <?= form_error('branch_id') ?>
                    </div>
                </div>
                <?php else: ?>
                    <?= form_hidden('branch_id', e_id($this->user->branch_id)); ?>
                <?php endif ?>
                <div class="col-12"></div>
                <div class="col-3">
                    <?= form_button([
                        'type'    => 'submit',
                        'class'   => 'btn btn-outline-primary btn-block',
                        'content' => 'SAVE'
                    ]); ?>
                </div>
                <div class="col-3">
                    <?= anchor("$url", 'CANCEL', 'class="btn btn-outline-danger col-12"'); ?>
                </div>
            </div>
        <?= form_close() ?>
    </div>
</div>