<?php
//php artisan make:mail ContactForMail --markdown=emails.contact.contact-form
//php artisan storage:link
//php artisan config:cache
//php artisan daily:delete
//php artisan schedule:run

Route::get('/', 'AppointmentHomeController@index');
Route::get('/{id}/event_detail', 'AppointmentHomeController@eventDetail');
Route::get('/bsc_msc_courses', 'AppointmentHomeController@takenCourse');
Route::get('/teacher_achievements', 'AppointmentHomeController@teacherAchievements');
Route::get('/recent_work', 'AppointmentHomeController@recentThesisProject');
Route::get('/project_thesis_students', 'AppointmentHomeController@projectThesisStudents');
Route::get('/teacher_memberships', 'AppointmentHomeController@Membership');
Route::get('/teacher_professional_experience', 'AppointmentHomeController@professionalExperience');
Route::get('/teacher_notice_board', 'AppointmentHomeController@noticeBoard');
Route::get('/{id}/teacher_notice_board', 'AppointmentHomeController@noticeDetail');
Route::get('/join_with_project_thesis', 'AppointmentHomeController@joinProjectThesis');
Route::post('/join_with_project_thesis', 'AppointmentHomeController@joinProjectThesisStore');
Route::get('/routine', 'AppointmentHomeController@routine');
Route::get('/appointment', 'AppointmentHomeController@appointmentform');
Route::post('/appointment', 'AppointmentHomeController@appointmentformaction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/teachermessage', 'TeacherMessageController');
Route::resource('/event', 'EventController');
Route::resource('/photoslides', 'PhotoSlidesController');
Route::resource('/takencourse', 'TakenCourseController');
Route::resource('/achievements', 'AchievementController');
Route::resource('/recent_thesis_project', 'RecentThesisProjectController');
Route::resource('/project_and_thesis_students', 'ThesisProjectStudentController');
Route::resource('/notice_board', 'NoticeBoardController');
Route::resource('/professional_experience', 'ProfessionalExperienceController');
Route::resource('/membership', 'MembershipController');
Route::resource('/join_request_with_team', 'JoinRequestWithTeamController');
Route::resource('/my_routine', 'TeacherRoutineController');
Route::resource('/appointment_request', 'AppointmentRequestController');
Route::post('/appointment_request_approve', 'SendMailController@appointmentRequestApprove');
Route::post('/appointment_request_decline', 'SendMailController@appointmentRequestDecline');
Route::post('/mailing', 'SendMailController@store');


//Route::match(['get', 'post'], 'login', function(){
//    return redirect('/');
//}); //login page e gele redirect kore fornt page e back korabe

//Route::match(['get', 'post'], 'home', function(){
//    return redirect('/');
//}); //login page e gele redirect kore fornt page e back korabe
//
