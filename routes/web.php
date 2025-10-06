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
    Route::post('/cipta-tender/store', [TenderController::class, 'store'])->name('storeCiptaTender');
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
    Route::get('/pemilihan-syarikat', function () {return view('pembelian-terus.pemilihan-syarikat');})->name('pemilihan-syarikat');
    Route::get('/pemilihan-syarikat-content', function () {return view('pembelian-terus.pemilihan-syarikat-content');})->name('pemilihan-syarikat-content');
    Route::get('/keputusan-syarikat', function () {return view('pembelian-terus.keputusan-syarikat');})->name('keputusan-syarikat');
    Route::get('/keputusan-syarikat-content', function () {return view('pembelian-terus.keputusan-syarikat-content');})->name('keputusan-syarikat-content');
    Route::get('/cipta-projek-lantikan-terus', function () {return view('lantikan-terus.cipta-lantikan-terus');})->name('cipta-projek-lantikan-terus');
    Route::get('/sebut-harga-lantikan', function () {return view('sebut-harga.sebut-harga');})->name('sebut-harga-lantikan');
    // Route::get('/pemilihan-syarikat', function () {return view('pemilihan-syarikat.pemilihan-syarikat');})->name('pemilihan-syarikat');
    // Route::get('/keputusan-syarikat', function () {return view('keputusan-syarikat.keputusan-syarikat');})->name('keputusan-syarikat');
    Route::get('/maklumat-projek', function () {return view('penilaian-dokumen.maklumat-projek');})->name('maklumat-projek');
    Route::get('/keputusan-mesyuarat', function () {return view('keputusan-mesyuarat.keputusan-mesyuarat');})->name('keputusan-mesyuarat');
    Route::get('/pengesyoran-pembekal', function () {return view('keputusan-mesyuarat.pengesyoran-pembekal');})->name('pengesyoran-pembekal');
    Route::get('kerja/penyediaan-spesifikasi-tender', function () {return view('kerja.penyediaan-spesifikasi-tender');})->name('penyediaan-spesifikasi-tender');
    Route::get('kerja/spesifikasi-tender-content', function () {return view('kerja.spesifikasi-tender-content');})->name('spesifikasi-tender-content');
    Route::get('kerja/maklumat-kewangan', function () {return view('kerja.maklumat-kewangan');})->name('maklumat-kewangan');
    Route::get('kerja/maklumat-kewangan-content', function () {return view('kerja.maklumat-kewangan-content');})->name('maklumat-kewangan-content');
    Route::get('kerja/penyediaan-dokumen-tender', function () {return view('kerja.penyediaan-dokumen-tender');})->name('penyediaan-dokumen-tender');
    Route::get('kerja/lawatan-tapak-kerja', function () {return view('kerja.lawatan-tapak-kerja');})->name('lawatan-tapak-kerja');
    Route::get('kerja/lawatan-tapak-kerja-content', function () {return view('kerja.lawatan-tapak-kerja-content');})->name('lawatan-tapak-kerja-content');
    Route::get('kerja/mesyuarat-jk-kerja', function () {return view('kerja.mesyuarat-jk-kerja');})->name('mesyuarat-jk-kerja');
    Route::get('kerja/mesyuarat-jk-kerja-content', function () {return view('kerja.mesyuarat-jk-kerja-content');})->name('mesyuarat-jk-kerja-content');
    Route::get('kerja/pematuhan-dokumen-kerja', function () {return view('kerja.pematuhan-dokumen-kerja');})->name('pematuhan-dokumen-kerja');
    Route::get('kerja/pematuhan-dokumen-kerja-content', function () {return view('kerja.pematuhan-dokumen-kerja-content');})->name('pematuhan-dokumen-kerja-content');
    Route::get('kerja/penilaian-teknikal', function () {return view('kerja.penilaian-teknikal');})->name('penilaian-teknikal');
    Route::get('kerja/penilaian-teknikal-content', function () {return view('kerja.penilaian-teknikal-content');})->name('penilaian-teknikal-content');
    Route::get('kerja/penilaian-kewangan', function () {return view('kerja.penilaian-kewangan');})->name('penilaian-kewangan');
    Route::get('kerja/borang1', function () {return view('kerja.borang1');})->name('borang1');
    Route::get('kerja/borang2', function () {return view('kerja.borang2');})->name('borang2');
    Route::get('kerja/analisa-kecukupan-modal', function () {return view('kerja.analisa-kecukupan-modal');})->name('analisa-kecukupan-modal');
    Route::get('kerja/lembaran-imbangan', function () {return view('kerja.lembaran-imbangan');})->name('lembaran-imbangan');
    Route::get('kerja/akaun-bank', function () {return view('kerja.akaun-bank');})->name('akaun-bank');
    Route::get('kerja/bon-saham', function () {return view('kerja.bon-saham');})->name('bon-saham');
    Route::get('kerja/borang4', function () {return view('kerja.borang4');})->name('borang4');
    Route::get('kerja/borang5', function () {return view('kerja.borang5');})->name('borang5');
    Route::get('kerja/borang6', function () {return view('kerja.borang6');})->name('borang6');
    Route::get('kerja/borang7a', function () {return view('kerja.borang7a');})->name('borang7a');
    Route::get('kerja/borang7b', function () {return view('kerja.borang7b');})->name('borang7b');
    Route::get('kerja/borang8', function () {return view('kerja.borang8');})->name('borang8');
    Route::get('kerja/borang9', function () {return view('kerja.borang9');})->name('borang9');
    Route::get('kerja/borang9a', function () {return view('kerja.borang9a');})->name('borang9a');
    Route::get('kerja/borang9b', function () {return view('kerja.borang9b');})->name('borang9b');
    Route::get('kerja/borang10', function () {return view('kerja.borang10');})->name('borang10');
    Route::get('kerja/borang11', function () {return view('kerja.borang11');})->name('borang11');
    Route::get('kerja/borang12', function () {return view('kerja.borang12');})->name('borang12');
    Route::get('kerja/borang13', function () {return view('kerja.borang13');})->name('borang13');
    Route::get('kerja/borang14', function () {return view('kerja.borang14');})->name('borang14');
    Route::get('kerja/borang15', function () {return view('kerja.borang15');})->name('borang15');








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

    // Tetapan (Settings)
Route::prefix('tetapan')->group(function () {

    // Pengurusan Peranan
    Route::get('/pengurusan-peranan', function () {
        return view('tetapan.pengurusan-peranan');
    })->name('pengurusan-peranan');

    // Pengurusan Menu
    Route::get('/pengurusan-menu', function () {
        return view('tetapan.pengurusan-menu');
    })->name('pengurusan-menu');
});
});
