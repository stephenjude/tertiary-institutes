<?php

Route::group(['namespace' => 'Stephenjude\TertiaryInstitutes\Http\Controllers'], function () {
    Route::get('institution/degrees/all', 'InstitutionController@allUniversities')->name('all.universities');
    Route::get('institution/degrees/stateprivate', 'InstitutionController@statePrivates')->name('all.state.private');
    Route::get('institution/polytechnics', 'InstitutionController@polytechnics')->name('all.polytechnics');
    Route::get('institution/colleges', 'InstitutionController@colleges')->name('all.colleges');
    Route::get('institution/ieis', 'InstitutionController@ieis')->name('all.ieis');

    Route::get('courses/{institution_id}/federal', 'InstitutionCourseController@federalCourses')->name('federal.university.courses');
    Route::get('courses/{institution_id}/state', 'InstitutionCourseController@stateCourses')->name('state.university.courses');
    Route::get('courses/{institution_id}/private', 'InstitutionCourseController@privateCourses')->name('private.university.courses');
    Route::get('courses/{institution_id}/polytechnic', 'InstitutionCourseController@polytechnicCourses')->name('polytechnic.courses');
    Route::get('courses/{institution_id}/college', 'InstitutionCourseController@collegeCourses')->name('college.courses');
    Route::get('courses/{institution_id}/iei', 'InstitutionCourseController@ieiCourses')->name('iei.courses');
});
