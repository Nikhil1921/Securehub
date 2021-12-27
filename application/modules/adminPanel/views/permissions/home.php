<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <h5><?= $title ?> <?= $operation ?></h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <?= anchor("$url/add/Staff", 'Staff', 'class="btn btn-outline-primary col-12"'); ?>
            </div>
            <div class="col-3">
                <?= anchor("$url/add/Partner", 'Partner', 'class="btn btn-outline-primary col-12"'); ?>
            </div>
        </div>
    </div>
</div>