<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/', 'namespace' => 'Pages'], function () {

    Route::get('/', [
        'uses' => 'SalwaController@index',
        'as' => 'home'
    ]);

    Route::group(['prefix' => 'about'], function () {

        Route::get('president-message', [
            'uses' => 'SalwaController@presidentMessage',
            'as' => 'about.president-message'
        ]);

        Route::get('company-history', [
            'uses' => 'SalwaController@companyHistory',
            'as' => 'about.company-history'
        ]);

        Route::get('vision-mission', [
            'uses' => 'SalwaController@visionMission',
            'as' => 'about.vision-mission'
        ]);

        Route::get('our-values', [
            'uses' => 'SalwaController@ourValues',
            'as' => 'about.our-values'
        ]);

        Route::get('organization-chart', [
            'uses' => 'SalwaController@organizationChart',
            'as' => 'about.organization-chart'
        ]);

    });

    Route::get('epc', [
        'uses' => 'SalwaController@showEPC',
        'as' => 'show.epc'
    ]);

    Route::get('business-sector/{sector}', [
        'uses' => 'SalwaController@showBusinessSector',
        'as' => 'show.business-sector'
    ]);

    Route::get('qhse-commitment', [
        'uses' => 'SalwaController@showQhseCommitment',
        'as' => 'show.qhse-commitment'
    ]);

    Route::get('project-experiences', [
        'uses' => 'SalwaController@showProjectExperiences',
        'as' => 'show.project-experiences'
    ]);

    Route::post('contact', [
        'uses' => 'SalwaController@postContact',
        'as' => 'submit.contact'
    ]);

});
