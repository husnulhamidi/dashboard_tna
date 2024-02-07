<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//TNA
$route['tna/home'] = 'tna/home';
$route['tna/home1'] = 'tna/home/index1';
$route['tna/report'] = 'tna/Report';
$route['tna/dashboard-training']    = 'tna/home/dashboard_training';
$route['tna/profil-training-personal/(:any)']    = 'tna/TrainingMandiri/profile/$1';
$route['tna/profil-training-karyawan/(:any)']    = 'tna/TrainingMandiri/profile_all_karyawan/$1';

// =================== TRAINING MANDIRI
$route['tna/training-mandiri']    = 'tna/TrainingMandiri/list';
$route['tna/training-mandiri/getDataTrainingMandiri']    = 'tna/TrainingMandiri/getDataTrainingMandiri';
$route['tna/training-mandiri-hcpd']    = 'tna/TrainingMandiri/listhcpd';
$route['tna/training-mandiri/create']    = 'tna/TrainingMandiri/create';
$route['tna/training-mandiri/createOrUpdate']    = 'tna/TrainingMandiri/createOrUpdate';
$route['tna/training-mandiri/edit/(:any)']    = 'tna/TrainingMandiri/edit/$1';
$route['tna/training-mandiri/delete_training_mandiri']    = 'tna/TrainingMandiri/delete_training_mandiri';
$route['tna/training-mandiri/verifikasi']    = 'tna/TrainingMandiri/verifikasi';



$route['tna/list']    = 'tna/Tna/index';
$route['tna/create']    = 'tna/Tna/create';

$route['tna/non']    = 'tna/NonTna/index';
$route['tna/non/create']    = 'tna/NonTna/create';


// ========================== JUSTIFIKASI
$route['tna/justifikasi']    = 'tna/Justifikasi/index';
$route['tna/justifikasi/getData'] = 'tna/Justifikasi/getData';
$route['tna/justifikasi/create']    = 'tna/Justifikasi/create';
$route['tna/justifikasi/submit']    = 'tna/Justifikasi/submit';
$route['tna/justifikasi/detail/(:any)']    = 'tna/Justifikasi/detail/$1';
$route['tna/justifikasi/getDataKompetensi/(:any)']    = 'tna/justifikasi/getDataKompetensi/$1';
$route['tna/justifikasi/getDataTraining/(:any)']    = 'tna/justifikasi/getDataTraining/$1';
$route['tna/justifikasi/getJobFamily']    = 'tna/Justifikasi/getJobFamily';
$route['tna/justifikasi/getDataDropdown/(:any)']    = 'tna/Justifikasi/getDataDropdown/$1';
$route['tna/justifikasi/simpan_kompetensi']    = 'tna/Justifikasi/simpan_kompetensi';
$route['tna/justifikasi/simpan_training']    = 'tna/Justifikasi/simpan_training';
$route['tna/justifikasi/edit/(:any)']    = 'tna/Justifikasi/edit/$1';
$route['tna/justifikasi/delete_justifikasi']    = 'tna/Justifikasi/delete_justifikasi';
$route['tna/justifikasi/delete_kompetensi']    = 'tna/Justifikasi/delete_kompetensi';
$route['tna/justifikasi/delete_training']    = 'tna/Justifikasi/delete_training';

//=====================================================================================================================
// Anggaran 
$route['tna/anggaran']  = 'tna/anggaran';
$route['tna/anggaran/data']  = 'tna/anggaran/data';
$route['tna/anggaran/show']  = 'tna/anggaran/show';
$route['tna/anggaran/submit']    = 'tna/anggaran/submit';
$route['tna/anggaran/delete']    = 'tna/anggaran/delete';

//=====================================================================================================================
// Usulan
$route['tna/usulan/list/(:any)']    = 'tna/usulan/index/$1';
$route['tna/usulan/proses-verifikasi']    = 'tna/usulan/proses_verifikasi';
$route['tna/usulan/ditolak']    = 'tna/usulan/ditolak';
$route['tna/usulan/disetujui']    = 'tna/usulan/disetujui';

$route['tna/usulan/list-data']    = 'tna/usulan/list_data';

$route['tna/usulan/create']    = 'tna/usulan/create';
$route['tna/usulan/submit']    = 'tna/usulan/submit';
$route['tna/usulan/submit-usulkan']    = 'tna/usulan/submit_usulkan';
$route['tna/usulan/edit']       = 'tna/usulan/edit';


//=====================================================================================================================
// Referensi / Katalog
$route['tna/reference'] = 'tna/reference';

$route['tna/referensi/job-family'] = 'tna/reference/job_family';
$route['tna/referensi/job-family/data'] = 'tna/reference/data_jobfamily';
$route['tna/referensi/job-family/submit'] = 'tna/reference/submit_jobfamily';
$route['tna/referensi/job-family/show'] = 'tna/reference/show_jobfamily';
$route['tna/referensi/job-family/delete'] = 'tna/reference/delete_jobfamily';
$route['tna/referensi/job-family/import'] = 'tna/importexcel/import_excel_jobfamily';

$route['tna/referensi/job-function'] = 'tna/reference/job_function';
$route['tna/referensi/job-function/data'] = 'tna/reference/data_jobfunction';
$route['tna/referensi/job-function/submit'] = 'tna/reference/submit_jobfunction';
$route['tna/referensi/job-function/show'] = 'tna/reference/show_jobfunction';
$route['tna/referensi/job-function/delete'] = 'tna/reference/delete_jobfunction';
$route['tna/referensi/job-function/import'] = 'tna/importexcel/import_excel_jobfunction';

$route['tna/referensi/job-role'] = 'tna/reference/job_role';
$route['tna/referensi/job-role/data'] = 'tna/reference/data_jobrole';
$route['tna/referensi/job-role/submit'] = 'tna/reference/submit_jobrole';
$route['tna/referensi/job-role/show'] = 'tna/reference/show_jobrole';
$route['tna/referensi/job-role/delete'] = 'tna/reference/delete_jobrole';
$route['tna/referensi/job-role/import'] = 'tna/importexcel/import_excel_jobrole';

$route['tna/referensi/kompetensi'] = 'tna/reference/kompetensi';
$route['tna/referensi/kompetensi/detail'] = 'tna/reference/kompetensi_detail';
$route['tna/referensi/kompetensi/data'] = 'tna/reference/data_kompetensi';
$route['tna/referensi/kompetensi/submit'] = 'tna/reference/submit_kompetensi';
$route['tna/referensi/kompetensi/show'] = 'tna/reference/show_kompetensi';
$route['tna/referensi/kompetensi/delete'] = 'tna/reference/delete_kompetensi';
$route['tna/referensi/kompetensi/import'] = 'tna/importexcel/import_excel_kompetensi';

$route['tna/referensi/training'] = 'tna/reference/training';
$route['tna/referensi/training/data'] = 'tna/reference/data_training';
$route['tna/referensi/training/submit'] = 'tna/reference/submit_training';
$route['tna/referensi/training/show'] = 'tna/reference/show_training';
$route['tna/referensi/training/delete'] = 'tna/reference/delete_training';
$route['tna/referensi/training/import'] = 'tna/importexcel/import_excel_training';

$route['tna/referensi/kompetensi-jabatan'] = 'tna/reference/kompetensi_jabatan';

$route['tna/referensi/lembaga'] = 'tna/reference/lembaga';
$route['tna/referensi/lembaga/data'] = 'tna/reference/data_lembaga';
$route['tna/referensi/lembaga/submit'] = 'tna/reference/submit_lembaga';
$route['tna/referensi/lembaga/show'] = 'tna/reference/show_lembaga';
$route['tna/referensi/lembaga/delete'] = 'tna/reference/delete_lembaga';
$route['tna/referensi/lembaga/import'] = 'tna/reference/import_lembaga';

$route['tna/referensi/lembaga/detail/(:any)'] = 'tna/reference/detail_lembaga/$1';
$route['tna/referensi/lembaga/detail-data'] = 'tna/reference/detail_lembaga_data/';
$route['tna/referensi/lembaga/detail-submit'] = 'tna/reference/detail_lembaga_submit';
$route['tna/referensi/lembaga/detail-show'] = 'tna/reference/detail_lembaga_show';
$route['tna/referensi/lembaga/detail-delete'] = 'tna/reference/detail_lembaga_delete';

$route['tna/combo/job-family'] = 'tna/combo/job_family';
$route['tna/combo/job-function'] = 'tna/combo/job_function';
$route['tna/combo/job-role'] = 'tna/combo/job_role';
$route['tna/combo/kompetensi'] = 'tna/combo/kompetensi';
$route['tna/combo/training'] = 'tna/combo/training';


//=====================================================================================================================
// pengawalan
$route['tna/pengawalan/list/(:any)']    = 'tna/pengawalan/index/$1';
$route['tna/pengawalan/proses-verifikasi']    = 'tna/pengawalan/proses_verifikasi';
$route['tna/pengawalan/ditolak']    = 'tna/pengawalan/ditolak';
$route['tna/pengawalan/disetujui']    = 'tna/pengawalan/disetujui';
$route['tna/pengawalan/create']    = 'tna/pengawalan/create';
$route['tna/pengawalan/edit']    = 'tna/pengawalan/edit';


//=====================================================================================================================
// internal sharing
$route['tna/internalSharing']    = 'tna/InternalSharing/index';
$route['tna/internalSharing/create']    = 'tna/InternalSharing/create';
$route['tna/internalSharing/edit/(:any)']    = 'tna/InternalSharing/edit/$1';
$route['tna/internalSharing/detail/(:any)']    = 'tna/InternalSharing/detail/$1';
$route['tna/internalSharing/generate_sertifikat']    = 'tna/InternalSharing/generate_sertifikat';

$route['tna/internalSharing-employee']    = 'tna/InternalSharing/index2';
$route['tna/internalSharing-employee/detail/(:any)']    = 'tna/InternalSharing/detail2/$1';

$route['tna/internalSharing/getDirektorat']    = 'tna/InternalSharing/getDataDirektorat';
$route['tna/internalSharing/getPemateriByDirKom/(:any)']    = 'tna/InternalSharing/getDataPemateri/$1';
$route['tna/internalSharing/getNarasumber']    = 'tna/InternalSharing/getNarasumber';

$route['tna/internalSharing/createOrUpdate']    = 'tna/InternalSharing/createOrUpdate';
$route['tna/internalSharing/getDataAdmin']    = 'tna/InternalSharing/getDataAdmin';
$route['tna/internalSharing/getDataMateri/(:any)']    = 'tna/InternalSharing/getDataMateri/$1';
$route['tna/internalSharing/createOrUpdateMateri']    = 'tna/InternalSharing/createOrUpdateMateri';

$route['tna/internalSharing/getCountDocument']    = 'tna/InternalSharing/getCountDocument';
$route['tna/internalSharing/getDataDokumentasi/(:any)']    = 'tna/InternalSharing/getDataDokumentasi/$1';


// $route['tna/internalsharing/submit']    = 'tna/InternalSharing/submit';
// $route['tna/internalsharing/delete']    = 'tna/InternalSharing/delete';
// $route['tna/internalsharing/update']    = 'tna/InternalSharing/update';
// $route['tna/internalsharing/detail']    = 'tna/InternalSharing/detail';
// $route['tna/internalsharing/preview']    = 'tna/InternalSharing/preview';
// $route['tna/internalsharing/generate-sertifikat']    = 'tna/InternalSharing/generate_sertifikat';
// $route['tna/internalsharing/materi/list']    = 'tna/InternalSharing/materi_list';
// $route['tna/internalsharing/materi/submit']    = 'tna/InternalSharing/materi_submit';
// $route['tna/internalsharing/materi/delete']    = 'tna/InternalSharing/materi_delete';
// $route['tna/internalsharing/documentation/list']    = 'tna/InternalSharing/dokumentasi';
// $route['tna/internalsharing/documentation/submit']    = 'tna/InternalSharing/dokumentasi_submit';
// $route['tna/internalsharing/documentation/delete']    = 'tna/InternalSharing/dokumentasi_delete';
// $route['tna/internalsharing/peserta/list']    = 'tna/InternalSharing/peserta_list';
// $route['tna/internalsharing/peserta/submit']    = 'tna/InternalSharing/peserta_submit';
// $route['tna/internalsharing/peserta/delete']    = 'tna/InternalSharing/peserta_delete';


//=====================================================================================================================
// library materi
$route['tna/library_materi']    = 'tna/LibraryMateri/index';




