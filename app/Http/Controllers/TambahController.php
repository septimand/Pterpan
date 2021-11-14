<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	class TambahController extends Controller
	{
	    public function tambahPengguna()
	    {
        $users = DB::table('users')->get();

	        return view('tambahPengguna', ['users' => $users]);
	    }
	    public function simpan(Request $request){
	        DB::table('users')->insert([
	            'email' => $request -> email,
	            'id_unit' => $request -> id_unit,
                'nama_user' => $request -> nama_user,
	            'tgl_lahir' => $request -> tgl_lahir,
	            'jenis_kelamin' => $request -> jenis_kelamin,
                'no_telp' => $request -> no_telp,
                'gambar_user' => $request -> gambar_user,
                'password' => $request -> password,
                'hak_akses' => $request -> hak_akses,
	        ]);

	        return redirect('/tambahPengguna');
	    }
        public function editPengguna($id)
         {
             $users = DB::table('users')->where('email',$id)->get();

             return view('editPengguna', ['users' => $users]);
         }
         public function update(Request $request) {
            DB::table('users')->where('email', $request->email)->update([
                'email' => $request -> email,
	            'id_unit' => $request -> id_unit,
                'nama_user' => $request -> nama_user,
	            'tgl_lahir' => $request -> tgl_lahir,
	            'jenis_kelamin' => $request -> jenis_kelamin,
                'no_telp' => $request -> no_telp,
                'gambar_user' => $request -> gambar_user,
                'password' => $request -> password,
                'hak_akses' => $request -> hak_akses,
                'nama_kategori' => $request -> nama_kategori,
            ]);
            return redirect('/tambahPengguna');
        }
        public function delete($email) {
            $users = DB::table('users')->where('email',$email)->delete();
            return redirect('/tambahPengguna');
            }
	}
