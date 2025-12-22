<?php

use App\Models\Gallery;
use App\Models\Sessions;
use App\Models\UsersAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

// Route::get('/ping', function () {
//     return response()->json(['status' => 'ok']);
// });

Route::post('/form_unggah_galeri', function (Request $request){
    $result = array();
    $result['status'] = 'error';
    $result['message'] = 'Jaringan tidak stabil, silahkan coba lagi';

    $session = $request->post('session');
    $count = Sessions::where('token', $session)->count();
    if ($count > 0){
        $result['status'] = 'success';
        $result['message'] = 'Unggah Galeri';
        $result['form'] = view('components.api.form_unggah_galeri')->render();
    }else{
        $result['status'] = 'error';
        $result['message'] = 'Token tidak ditemukan';
        $result['form'] = view('components.api.form_login')->render();
    }

    return response()->json($result);
});

Route::post('/login', function (Request $request){
    $result = array();
    $result['status'] = 'error';
    $result['message'] = 'Jaringan tidak stabil, silahkan coba lagi';

    DB::beginTransaction();
    try {
        $username = $request->post('username');
        $password = $request->post('password');

        if ($username == ''){
            $result['status'] = 'error';
            $result['message'] = 'Masukan data email / telp !';
        }else if ($password == ''){
            $result['status'] = 'error';
            $result['message'] = 'Masukan data password !';
        }else{
            $users = UsersAccess::where(function ($users) use ($username, $password){
                $users->where('email', $username)
                ->orWhere('phone', $username);
            })
            ->where('password', md5($password))
            ->where('status', 'active');
            $users_count = $users->count();
            $users = $users->get();

            if ($users_count > 0){
                foreach ($users as $user){

                    $id_user = $user->id;
                    $token = md5('@token_'.date('YmdHis'));

                    Sessions::where('id_user', $id_user)->delete();
                    Sessions::insert(array(
                        'id_user' => $id_user,
                        'token' => $token,
                        'expired_at' => date('Y-m-d H:i:s', strtotime('+1 day')),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ));

                    $result['status'] = 'success';
                    $result['message'] = 'Sekarang anda dapat melanjutkan aktivitas';
                    $result['token'] = $token;

                }
            }else{
                $result['status'] = 'error';
                $result['message'] = 'Akun yang dimasukan tidak terdaftar !';
            }
        }
        DB::commit();
    } catch (\Throwable $e){
        DB::rollback();
        $result['status'] = 'error';
        $result['message'] = 'Proses sedang mengalami kendala !';
        $result['log'] = json_encode($e->getMessage(), true);
    }

    return response()->json($result);
});

Route::post('/unggah_galeri', function (Request $request){
    $result = array();
    $result['status'] = 'error';
    $result['message'] = 'Jaringan tidak stabil, silahkan coba lagi';

    $session = $request->post('session');
    $id_user = Sessions::where('token', $session)->value('id_user');
    $expired_at = Sessions::where('token', $session)->value('expired_at');

    if ($expired_at != null && date('Y-m-d H:i:s', strtotime($expired_at)) >= date('Y-m-d H:i:s')){

        DB::beginTransaction();
        try {
            if ($request->hasFile('galeri')){
                $galeri = $request->file('galeri');
                $extension = strtolower($galeri->getClientOriginalExtension());
                if (in_array($extension, array('png', 'jpg', 'jpeg', 'webq')) == true){
                    $path = 'public/uploads/galeri';
                    $filename = 'galeri_'.date('YmdHis').'.'.$extension;
                    $galeri->move($path, $filename);

                    Gallery::insert(array(
                        'id_user' => $id_user,
                        'picture' => $path.'/'.$filename,
                        'created_at' => date('Y-m-d H:i:s'),
                    ));

                    $result['status'] = 'success';
                    $result['message'] = 'Galeri berhasil terposting';
                }else{
                    $result['status'] = 'error';
                    $result['message'] = 'Format file gambar tidak sesuai';
                }
            }else{
                $result['status'] = 'error';
                $result['message'] = 'Silahkan pilih file untuk di posting';
            }
            DB::commit();
        } catch (\Throwable $e){
            DB::rollback();
            $result['status'] = 'error';
            $result['message'] = 'Proses sedang mengalami kendala !';
            $result['log'] = json_encode($e->getMessage(), true);
        }

    }else{
        $result['status'] = 'error';
        $result['message'] = 'Sepertinya kamu harus masuk ulang untuk melanjutkan';
    }

    return response()->json($result);
});

Route::post('/load_galeri', function (){
    $result = array();
    $result['count'] = 0;
    $result['data'] = array();

    $galleries = Gallery::with('users_access')->orderBy('id', 'Desc');
    $galleries_count = $galleries->count();
    $galleries = $galleries->get();

    $result['count'] = $galleries_count;
    $result['data'] = $galleries;

    return response()->json($result);
});

Route::post('/hapus_gallery', function (Request $request){
    $result = array();
    $result['status'] = 'error';
    $result['message'] = 'Jaringan tidak stabil, silahkan coba lagi';

    $session = $request->post('session');
    $id_user = Sessions::where('token', $session)->value('id_user');
    $expired_at = Sessions::where('token', $session)->value('expired_at');

    if ($expired_at != null && date('Y-m-d H:i:s', strtotime($expired_at)) >= date('Y-m-d H:i:s')){

        DB::beginTransaction();
        try {
            $id = $request->post('id');
            $galeri = Gallery::where('id', $id);
            $galeri_count = $galeri->count();
            if ($galeri_count > 0){
                $file = $galeri->value('picture');
                if ($file != null && file_exists($file)){
                    unlink($file);
                }
                Gallery::where('id', $id)->delete();
                $result['status'] = 'success';
                $result['message'] = 'File galeri sudah terhapus';
            }else{
                $result['status'] = 'success';
                $result['message'] = 'File galeri sudah tidak ditemukan';
            }
            DB::commit();
        } catch (\Throwable $e){
            DB::rollback();
            $result['status'] = 'error';
            $result['message'] = 'Proses sedang mengalami kendala !';
            $result['log'] = json_encode($e->getMessage(), true);
        }

    }else{
        $result['status'] = 'error';
        $result['message'] = 'Sepertinya kamu harus masuk ulang untuk melanjutkan';
    }

    return response()->json($result);
});