<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	class KategoriController extends Controller
	{
	    public function kategori()
	    {
        $kg = DB::table('kategori')->get();

	        return view('kategori', ['kg' => $kg]);
	    }
	    public function simpan(Request $request){
	        DB::table('kategori')->insert([
                'nama_kategori' => $request -> nama_kategori,
	        ]);

	        return redirect('/kategori');
	    }
        public function editKategori($id)
         {
             $kg = DB::table('kategori')->where('id_kategori',$id)->get();

             return view('editKategori', ['kg' => $kg]);
         }
         public function update(Request $request) {
            DB::table('kategori')->where('id_kategori', $request->id_kategori)->update([
                'nama_kategori' => $request -> nama_kategori,
            ]);
            return redirect('/kategori');
        }
        public function delete($id_kategori) {
            $kg = DB::table('kategori')->where('id_kategori',$id_kategori)->delete();
            return redirect('/kategori');
            }
	}