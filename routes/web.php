<?php

/** Cron **/
Route::get('jadwal/laporan/kirim','MailController@kirim');

/** User Public Area **/
Route::group(['middleware' => 'admin_invers'], function () {

    /** Public Routes **/
    Route::get('/', ['as' => 'home', 'uses' => 'SiteController@home']);
    Route::get('/home', ['as' => 'home', 'uses' => 'SiteController@home']);
    Route::get('/tentang', ['as' => 'tentang', 'uses' => 'SiteController@tentang']);
    Route::get('/pelaporan', ['as' => 'pelaporan', 'uses' => 'SiteController@pelaporan']);
    Route::get('/faq', ['as' => 'faq', 'uses' => 'SiteController@faq']);
    Route::get('/cara-lapor', ['as' => 'cara-lapor', 'uses' => 'SiteController@caraLapor']);
    Route::get('/reset', ['as' => 'reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);

    /** Test UI Reset **/
    Route::get('/rs', function () {
        return view('auth.passwords.reset', ['token' => '12121212', 'email' => 'yoga@aa.com']);
    });

});


/** Guest Only **/
Route::group(['middleware' => 'guest'], function () {

    /** Login & daftar **/
    Route::get('/lapor/login-page', ['as' => 'login-page', 'uses' => 'SiteController@loginPage']);
    Route::get('/lapor/login-page/tpk', ['as' => 'login-page', 'uses' => 'SiteController@loginPageTPK']);
    Route::get('/lapor/daftar', ['as' => 'daftar', 'uses' => 'SiteController@daftar']);    

    /** Laporan website **/
    Route::get('/lapor/buat-pelaporan-wl', ['as' => 'buat-pelaporan-wl', 'uses' => 'SiteController@buatPelaporanWL']);
    Route::get('/buat-pelaporan-wl-member', ['as' => 'buat-pelaporan-wl-member', 'uses' => 'SiteController@buatPelaporanWlMember']);
    // Route::post('/buat-pelaporan-wl', 'LaporanLainController@create');
});


/** Authenticated Routes **/
Auth::routes();
Route::post('/login-tpk','Auth\LoginController@loginTPK');

/** Logged in user **/
Route::group(['middleware' => ['auth','admin_invers']], function () {

    Route::get('/member', 'SiteController@member');
    Route::get('/sukses-daftar', ['as' => 'sukses-daftar', 'uses' => 'SiteController@suksesDaftar']);

    /** Profil **/
    Route::get('/ubah-profil', ['as' => 'user.ubah-profil', 'uses' => 'UserController@edit']);
    Route::patch('/ubah-profil/{id}', 'UserController@update');

    /** Password **/
    Route::get('/ubah-password', ['as' => 'user.ubah-password', 'uses' => 'UserController@editPassword']);
    Route::patch('/ubah-password/{id}', 'UserController@updatePassword');

    /** Password **/
    Route::get('/ubah-email', ['as' => 'user.ubah-email', 'uses' => 'UserController@editEmail']);
    Route::patch('/ubah-email/{id}', 'UserController@updateEmail');

    /** Laporan website **/
    Route::get('/buat-pelaporan', ['as' => 'user.buat-pelaporan', 'uses' => 'SiteController@buatPelaporan']);
    Route::post('/buat-pelaporan', 'LaporanWebController@create');
    Route::get('/lihat-laporan', ['as' => 'user.lihat-laporan', 'uses' => 'LaporanWebController@index']);
    Route::get('/lihat-laporan/get','LaporanWebController@getData');
    Route::get('{id}/detail-laporan', ['as' => 'user.detail-laporan', 'uses' => 'LaporanWebController@show']);
    Route::post('/detail-laporan/konfirmasi/add-re/{param1}/{param2}/{param3}/{param4}/{param5}','KonfirmasiController@addRe');
    Route::post('/buat-pelaporan-wl/member', 'LaporanLainController@createMember');
    Route::post('/buat-pelaporan-wl/add/avidence/member', 'LaporanLainController@addAvidenceMember');
    Route::get('/buat-pelaporan-wl/terkirim', 'LaporanLainController@terkirim');
    // Route::post('/buat-pelaporan-wl', 'LaporanLainController@create');
});


/*              */
/** Admin Area **/
Route::group(['middleware' => ['auth','admin']], function () {

    /*             */
    /** Dashboard **/
    Route::get('/adminpanel', ['as' => 'admin.home', 'uses' => 'Admin\SiteController@adminPanel']);

    /** Operator Modul **/
    Route::get('/adminpanel/operator/input-laporan', ['as' => 'operator.input-laporan', 'uses' => 'Admin\Operator\SiteController@inputLaporan']);
    Route::post('/adminpanel/operator/input-laporan', 'Admin\Operator\InputLaporanController@create');
    Route::get('/adminpanel/operator/{id}/edit-laporan', ['as' => 'operator.edit-laporan', 'uses' => 'Admin\Operator\SiteController@editLaporan']);
    Route::patch('/adminpanel/operator/{id}/edit-laporan', 'Admin\Operator\InputLaporanController@update');
    Route::get('/adminpanel/operator/{param1}/{param2}/{param3}/file-delete', ['as'=>'operator.file-delete','uses'=>'Admin\Operator\InputLaporanController@fileDelete']);

        // Teruskan laporan dari operator
        Route::get('/adminpanel/operator/kirim-laporan/{id}', ['as' => 'operator.kirim-laporan', 'uses' => 'Admin\Operator\SiteController@kirimLaporan']);

    /** Laporan Modul **/
    Route::get('/adminpanel/laporan/laporan-web-member', ['as' => 'laporan.laporan-web-member', 'uses' => 'Admin\Laporan\SiteController@laporanWebMember']);
    Route::get('/adminpanel/laporan/laporan-web-nonmember', ['as' => 'laporan.laporan-web-nonmember', 'uses' => 'Admin\Laporan\SiteController@laporanWebNonMember']);
    Route::get('/adminpanel/laporan/laporan-non-website', ['as' => 'laporan.laporan-non-website', 'uses' => 'Admin\Laporan\SiteController@laporanNonWebsite']);
    Route::get('/adminpanel/laporan/{id}/laporan-detail',['as' => 'laporan.laporan-detail', 'uses' => 'Admin\Laporan\SiteController@laporanDetail']);
    Route::get('/adminpanel/laporan/{id}/laporan-detail-alt',['as' => 'laporan.laporan-detail-alt', 'uses' => 'Admin\Laporan\SiteController@laporanDetailAlt']);
    Route::get('/adminpanel/laporan/{id}/laporan-detail-alt-2',['as' => 'laporan.laporan-detail-alt-2', 'uses' => 'Admin\Laporan\SiteController@laporanDetailAlt2']);
    Route::get('/adminpanel/laporan/{id}/{mode}/laporan-detail/status',['as' => 'laporan.laporan-detail.status', 'uses' => 'Admin\Laporan\DataController@changeStatus']);
    Route::get('/adminpanel/laporan/{id}/{mode}/laporan-detail-alt/status',['as' => 'laporan.laporan-detail-alt.status', 'uses' => 'Admin\Laporan\DataController@changeStatusAlt']);
    Route::get('adminpanel/laporan/kirim',['as'=>'laporan.kirim','uses'=>'Admin\Laporan\DataController@kirim']);
    Route::get('adminpanel/laporan/kirim-satuan/{id}',['as'=>'laporan.kirim.satuan','uses'=>'Admin\Laporan\DataController@kirimSatuan']);
    Route::get('/adminpanel/laporan/{param1}/{param2}/lampiran', ['as'=>'laporan.lampiran','uses'=>'Admin\Laporan\DataController@getUploadedFile']);
    Route::post('/adminpanel/laporan/konfirmasi/add/{param1}/{param2}/{param3}/{param4}','Admin\Laporan\KonfirmasiController@add');
    Route::post('/adminpanel/laporan/konfirmasi/add-re/{param1}/{param2}/{param3}/{param4}/{param5}','Admin\Laporan\KonfirmasiController@addRe');
    Route::get('/adminpanel/laporan-member/{id}/download',array('as'=>'laporan.member.download','uses'=>'PDFController@pdfViewMember'));
    Route::get('/adminpanel/laporan-nonmember/{id}/download',array('as'=>'laporan.nonmember.download','uses'=>'PDFController@pdfViewNonMember'));
    Route::post('/adminpanel/laporan-member-rekap/download',array('as'=>'laporan.member.rekap.download','uses'=>'PDFController@pdfViewMemberRekap'));
    Route::post('/adminpanel/laporan-nonmember-rekap/download',array('as'=>'laporan.nonmember.rekap.download','uses'=>'PDFController@pdfViewNonMemberRekap'));
    Route::post('/adminpanel/laporan/{id}/spam-web',[ 'as' => 'laporan.spam.web', 'uses' => 'Admin\Laporan\DataController@spamWeb']);
    Route::post('/adminpanel/laporan/{id}/spam-lain',[ 'as' => 'laporan.spam.lain', 'uses' => 'Admin\Laporan\DataController@spamLain']);
    Route::post('/adminpanel/laporan/{id}/status-web',[ 'as' => 'laporan.status.web', 'uses' => 'Admin\Laporan\DataController@statusWeb']);
    Route::post('/adminpanel/laporan/{id}/status-lain',[ 'as' => 'laporan.status.lain', 'uses' => 'Admin\Laporan\DataController@statusLain']);
    Route::get('/adminpanel/laporan/{id}/spam-web-hapus',['as' => 'laporan.spam.web.hapus', 'uses' => 'Admin\Laporan\DataController@spamWebHapus']);
    Route::get('/adminpanel/laporan/{id}/spam-lain-hapus',['as' => 'laporan.spam.lain.hapus', 'uses' => 'Admin\Laporan\DataController@spamLainHapus']);



    /** Super **/
    // User Management
    Route::get('/adminpanel/super/user',['as'=>'super.user','uses'=>'Admin\Super\SiteController@indexUser']);
    Route::get('/adminpanel/super/user/add',['as'=>'super.user-add','uses'=>'Admin\Super\SiteController@addUser']);
    Route::post('/adminpanel/super/user/add','Admin\Super\User\DataController@create');
    Route::get('/adminpanel/super/user/{id}/edit',['as'=>'super.user-edit','uses'=>'Admin\Super\SiteController@editUser']);
    Route::patch('/adminpanel/super/user/{id}/edit', 'Admin\Super\User\DataController@update');
    Route::get('/adminpanel/super/user/{id}/delete', ['as'=>'super.user-delete', 'uses'=>'Admin\Super\User\DataController@delete']);

    // Pengaturan Kategori
    Route::get('/adminpanel/super/pengaturan-kategori',['as'=>'super.pengaturan.kategori','uses'=>'Admin\Super\Kategori\KategoriLaporanController@index']);
    Route::get('/adminpanel/super/pengaturan-kategori/edit/{id}',['as'=>'super.pengaturan.kategori.edit','uses'=>'Admin\Super\Kategori\KategoriLaporanController@edit']);
    Route::get('/adminpanel/super/pengaturan-kategori/create',['as'=>'super.pengaturan.kategori.create','uses'=>'Admin\Super\Kategori\KategoriLaporanController@create']);
    Route::post('/adminpanel/super/pengaturan-kategori/store',['as'=>'super.pengaturan.kategori.store','uses'=>'Admin\Super\Kategori\KategoriLaporanController@store']);
    Route::patch('/adminpanel/super/pengaturan-kategori/{id}/update',['as'=>'super.pengaturan.kategori.update','uses'=>'Admin\Super\Kategori\KategoriLaporanController@update']);
    Route::get('/adminpanel/super/pengaturan-kategori/delete/{id}',['as'=>'super.pengaturan.kategori.delete','uses'=>'Admin\Super\Kategori\KategoriLaporanController@delete']);

    // Pengaturan FAQ
    Route::get('/adminpanel/super/pengaturan-faq',['as'=>'super.pengaturan.faq','uses'=>'Admin\Super\Faq\FaqController@index']);
    Route::get('/adminpanel/super/pengaturan-faq/create',['as'=>'super.pengaturan.faq.create','uses'=>'Admin\Super\Faq\FaqController@create']);
    Route::post('/adminpanel/super/pengaturan-faq/store',['as'=>'super.pengaturan.faq.store','uses'=>'Admin\Super\Faq\FaqController@store']);
    Route::get('/adminpanel/super/pengaturan-faq/edit/{id}',['as'=>'super.pengaturan.faq.edit','uses'=>'Admin\Super\Faq\FaqController@edit']);
    Route::patch('/adminpanel/super/pengaturan-faq/{id}/update',['as'=>'super.pengaturan.faq.update','uses'=>'Admin\Super\Faq\FaqController@update']);
    Route::get('/adminpanel/super/pengaturan-faq/delete/{id}',['as'=>'super.pengaturan.faq.delete','uses'=>'Admin\Super\Faq\FaqController@delete']);
});





