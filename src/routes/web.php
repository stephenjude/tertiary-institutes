<?php

Route::group(['namespace' => 'Stephenjude\TertiaryInstitutes\Http\Controllers'], function () {
    Route::get('institution/degrees/all', 'InstitutionController@allUniversities');
    Route::get('institution/degrees/stateprivate', 'InstitutionController@statePrivates');
    Route::get('institution/polytechnics', 'InstitutionController@polytechnics');
    Route::get('institution/colleges', 'InstitutionController@colleges');
    Route::get('institution/ieis', 'InstitutionController@ieis');

    Route::get('courses/{institution_id}/federal', 'InstitutionCourseController@federalCourses');
    Route::get('courses/{institution_id}/state', 'InstitutionCourseController@stateCourses');
    Route::get('courses/{institution_id}/private', 'InstitutionCourseController@privateCourses');
    Route::get('courses/{institution_id}/polytechnic', 'InstitutionCourseController@polytechnicCourses');
    Route::get('courses/{institution_id}/college', 'InstitutionCourseController@collegeCourses');
    Route::get('courses/{institution_id}/iei', 'InstitutionCourseController@ieiCourses');
});
