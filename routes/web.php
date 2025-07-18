<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\JawatanKuasaController;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\AdminController;

Route::get('/', [UserController::class, 'loginPage']);

Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/do-login', [UserController::class, 'doLogin'])->name('do-login');

Route::match(['get', 'post'], '/logout', [UserController::class, 'doLogout'])->name('logout');

Route::get('/register', function () {return view('auth.register');});
Route::post('/do-register', [UserController::class, 'doRegister'])->name('register');

Route::middleware(['auth'])->group(function () {
    // Role = 1
    Route::get('/dashboard', function () {return view('jawatanKuasa.index');})->name('dashboard');


    Route::get('/cipta-tender', [TenderController::class, 'getCiptaTender'])->name('getCiptaTender');
    // Route::get('/cipta-tender', function () {return view('tender.cipta-tender');});
    Route::get('/cipta-tenderKerja', [TenderController::class, 'getCiptaTenderKerja']);



    Route::prefix('perlantikan-jawatankuasa')->group(function () {
        Route::get('/', [JawatanKuasaController::class, 'getIndex'])->name('getIndex');
        Route::get('/{tender}', [JawatanKuasaController::class, 'getList'])->name('getList');
    });

    Route::prefix('spesifikasi-skor')->group(function () {
        Route::get('/senarai-semak-teknikal', function () {return view('penyediaanSpesifikasiSkor.senarai-semak-teknikal');})->name('senarai-semak-teknikal');
        Route::get('/senarai-semak-teknikal/cipta-spesifikasi-baru', function () {return view('penyediaanSpesifikasiSkor.senarai-semak-teknikal-cipta-spesifikasi-baru');})->name('senarai-semak-teknikal-cipta-spesifikasi-baru');

        Route::get('/senarai-semak-kewangan', function () {return view('penyediaanSpesifikasiSkor.senarai-semak-kewangan');})->name('senarai-semak-kewangan');
        Route::get('/senarai-semak-kewangan/cipta-spesifikasi-baru', function () {return view('penyediaanSpesifikasiSkor.senarai-semak-kewangan-cipta-spesifikasi-baru');})->name('senarai-semak-kewangan-cipta-spesifikasi-baru');

        Route::get('/skor-teknikal', function () {return view('penyediaanSpesifikasiSkor.skor-teknikal');})->name('skor-teknikal');

        Route::get('/skor-kewangan', function () {return view('penyediaanSpesifikasiSkor.skor-kewangan');})->name('skor-kewangan');

        Route::get('/skor-keseluruhan', function () {return view('penyediaanSpesifikasiSkor.skor-keseluruhan');})->name('skor-keseluruhan');
    });

    
    Route::get('/lawatan-tapak', function () {return view('lawatan-tapak.lawatan-tapak');})->name('lawatan-tapak');

    Route::get('/cut-off', function () {return view('cutoff.cutoff');})->name('cut-off');


    Route::prefix('semakan-pematuhan-dokumen')->group(function () {
        Route::get('/perincian-mesyuarat', function () {return view('semakanPematuhanDokumen.pm-perincian-mesyuarat');})->name('perincian-mesyuarat');
        Route::get('/jawatankuasa', function () {return view('semakanPematuhanDokumen.pm-jawatankuasa');})->name('jawatankuasa');
        Route::get('/peringkat-pematuhan', function () {return view('semakanPematuhanDokumen.pkc-peringkat-pematuhan');})->name('peringkat-pematuhan');
        Route::get('/peringkat-penilaian', function () {return view('semakanPematuhanDokumen.pkc-peringkat-penilaian');})->name('peringkat-penilaian');
    });
    

    Route::get('/penyediaan-sst', function () {return view('penyediaan-sst.penyediaan-sst');})->name('penyediaan-sst');



    // Role = 2
    Route::get('/templat', function () {return view('tender.templat');})->name('templat');
    Route::get('/kelulusan', function () {return view('tender.kelulusan');})->name('getKelulusan');
    Route::get('/penyediaan-iklan', function () {return view('tender.penyediaan-iklan');})->name('PenyediaanIklan');
    Route::get('/penyediaan-dokumen-tender-tawaran', function () {return view('tender.penyediaan-dokumen-tender-tawaran');})->name('dokumenTenderTawaran');
    Route::get('/butiran-dilihat', function () {return view('syarikat.butiran-dilihat');})->name('butiran-dilihat');
    Route::get('/butiran-syarikat', function () {return view('syarikat.butiran-syarikat');})->name('butiran-syarikat');
    Route::get('/checkout', function () {return view('syarikat.checkout');})->name('checkout');
    Route::get('/lawatan-tapak-syarikat', function () {return view('syarikat.lawatan-tapak-syarikat');})->name('lawatan-tapak-syarikat');
    Route::get('/kod-bidang', function () {return view('syarikat.kod-bidang');})->name('kod-bidang');
    Route::get('/senarai-semak-dokumen', function () {return view('syarikat.senarai-semak-dokumen');})->name('senarai-semak-dokumen');
    Route::get('/maklumat-ralat', function () {return view('syarikat.maklumat-ralat');})->name('maklumat-ralat');
    Route::get('/pegawai-bertanggungjawab', function () {return view('syarikat.pegawai-bertanggungjawab');})->name('pegawai-bertanggungjawab');
    Route::get('/penilaian-prestasi-syarikat', function () {return view('syarikat.penilaian-prestasi-syarikat');})->name('penilaian-prestasi-syarikat');
    Route::get('/kertas-cadangan-teknikal', function () {return view('syarikat.kertas-cadangan-teknikal');})->name('kertas-cadangan-teknikal');
    Route::get('/cadangan-teknikal-spek', function () {return view('syarikat.cadangan-teknikal-spek');})->name('cadangan-teknikal-spek');
    Route::get('/kertas-cadangan-kewangan', function () {return view('syarikat.kertas-cadangan-kewangan');})->name('kertas-cadangan-kewangan');
    Route::get('/cadangan-kewangan-harga_tawaran', function () {return view('syarikat.cadangan-kewangan-harga_tawaran');})->name('cadangan-kewangan-harga_tawaran');
    Route::get('/perakuan', function () {return view('syarikat.perakuan');})->name('perakuan');
    Route::get('/surat-akuan-pembida', function () {return view('syarikat.surat-akuan-pembida');})->name('surat-akuan-pembida');
    Route::get('/maklumat-umum', function () {return view('syarikat.maklumat-umum');})->name('maklumat-umum');
    Route::get('/pengesahan-kehadiran', function () {return view('urusetia.pengesahan-kehadiran');})->name('pengesahan-kehadiran');
    Route::get('/teknikal', function () {return view('penilaian.teknikal');})->name('teknikal');
    Route::get('/kewangan', function () {return view('penilaian.kewangan');})->name('kewangan');
    Route::get('/1-tier', function () {return view('penilaian.1-tier');})->name('1-tier');
    Route::get('/kertas-taklimat-pengesyoran', function () {return view('urusetia.kertas-taklimat-pengesyoran');})->name('kertas-taklimat-pengesyoran');
    Route::get('/cipta-projek', function () {return view('pembelian-terus.cipta-projek');})->name('cipta-projek');
    Route::get('/sebut-harga', function () {return view('pembelian-terus.sebut-harga');})->name('sebut-harga');
    Route::get('/sebut-harga-content', function () {return view('pembelian-terus.sebut-harga-content');})->name('sebut-harga-content');
    Route::get('/cut-off-pb', function () {return view('pembelian-terus.cut-off-pb');})->name('cut-off-pb');






    // Route::get('/dashboard', function () {return view('users.index');})->name('dashboard');
    
    Route::prefix('project')->group(function () {
        Route::get('/index', [ProjectsController::class, 'index'])->name('project.index');
        Route::match(['get','post'], '/index/project-data', [ProjectsController::class, 'getProjectsData'])->name('project.projectData');

        Route::post('/add-project', [ProjectsController::class, 'create'])->name('project.create');
        Route::get('/{project_name}/edit', [ProjectsController::class, 'edit'])->name('project.edit');
        Route::delete('/{id}/delete', [ProjectsController::class, 'delete'])->name('project.delete');

        Route::get('/tasks', [ProjectsController::class, 'tasks'])->name('project.tasks');

        Route::get('/kanban', [ProjectsController::class, 'getKanban'])->name('project.getKanban');
        
        Route::get('/overview/{project_name}', [ProjectsController::class, 'overview'])->name('project.overview');
    });
    
    Route::prefix('financial')->group(function () {
        Route::get('/', [FinancialController::class, 'index'])->name('financial.index');
        Route::get('/cash-flow', [FinancialController::class, 'cashFlow'])->name('financial.cashFlow');
    });
    
    Route::prefix('team')->group(function () {
        Route::get('/', [TeamsController::class, 'index'])->name('team.lists');
        Route::get('/index-table-data', [TeamsController::class, 'indexTableData'])->name('team.indexTableData');
        Route::get('/create-team', [TeamsController::class, 'create'])->name('team.create');
        Route::get('/edit-team/{team_name}', [TeamsController::class, 'edit'])->name('team.edit');

        Route::get('/settings', [TeamsController::class, 'index'])->name('team.settings');
        Route::get('/{name}', [TeamsController::class, 'team_members'])->name('team.team_members');
    });
    
    Route::prefix('admin')->group(function () {
        Route::get('/project', [AdminController::class, 'project'])->name('admin.project');
        Route::get('/financial', [AdminController::class, 'financial'])->name('admin.financial');
        Route::get('/team', [AdminController::class, 'team'])->name('admin.team');
        Route::get('/maintenance', [AdminController::class, 'maintenance'])->name('admin.maintenance');
    });
});