<?php

Route::get('admin/reports/daily', 'ReportsController@daily')->before('admin');

