<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card-header">
    <div class="row">
        <div class="col-8">
            <h5><?= $title ?> <?= $operation ?></h5>
        </div>
        <?php if ($vehicles): ?>
        <div class="col-4">
            <select name="vehicle" class="form-control">
                <option value="">Select Vehicle</option>
                <?php foreach($vehicles as $vehicle): ?>
                    <option value="<?= e_id($vehicle['id']) ?>"><?= $vehicle['reg_no'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <?php endif ?>
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
                <th class="target">Action</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" name="ins_type" value="" />