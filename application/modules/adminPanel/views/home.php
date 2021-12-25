<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-3" onclick="window.location.href = '<?= base_url(admin('banners')) ?>'">
        <div class="card">
            <div class="card-body">
                <div class="chart-widget-dashboard">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 f-w-600">
                                <span class="counter"><?= $banners ?></span>
                            </h5>
                            <p>Total Banners</p>
                        </div>
                        <i class="fa fa-image fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3" onclick="window.location.href = '<?= base_url(admin('news')) ?>'">
        <div class="card">
            <div class="card-body">
                <div class="chart-widget-dashboard">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 f-w-600">
                                <span class="counter"><?= $news ?></span>
                            </h5>
                            <p>Total News</p>
                        </div>
                        <i class="fa fa-file-text fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3" onclick="window.location.href = '<?= base_url(admin('insurance')) ?>'">
        <div class="card">
            <div class="card-body">
                <div class="chart-widget-dashboard">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 f-w-600">
                                <span class="counter"><?= $insurance ?></span>
                            </h5>
                            <p>Insurance</p>
                        </div>
                        <i class="fa fa-file-text fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3" onclick="window.location.href = '<?= base_url(admin('insurance_plans')) ?>'">
        <div class="card">
            <div class="card-body">
                <div class="chart-widget-dashboard">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 f-w-600">
                                <span class="counter"><?= $plans ?></span>
                            </h5>
                            <p>Total plans</p>
                        </div>
                        <i class="fa fa-file-text fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3" onclick="window.location.href = '<?= base_url(admin('companies')) ?>'">
        <div class="card">
            <div class="card-body">
                <div class="chart-widget-dashboard">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 f-w-600">
                                <span class="counter"><?= $companies ?></span>
                            </h5>
                            <p>Total companies</p>
                        </div>
                        <i class="fa fa-globe fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3" onclick="window.location.href = '<?= base_url(admin('become_partners')) ?>'">
        <div class="card">
            <div class="card-body">
                <div class="chart-widget-dashboard">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 f-w-600">
                                <span class="counter"><?= $partners ?></span>
                            </h5>
                            <p>Partner requests</p>
                        </div>
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>