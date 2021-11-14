<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	class UnitController extends Controller
	{
	    public function unit()
	    {
        $unit = DB::table('unit')->get();

	        return view('unit', ['unit' => $unit]);
	    }
	    public function simpan(Request $request){
	        DB::table('unit')->insert([
                'nama_unit' => $request -> nama_unit,
                'no_telp_unit' => $request -> no_telp_unit,
	        ]);

	        return redirect('/unit');
	    }
        public function editUnit($id)
         {
             $unit = DB::table('unit')->where('id_unit',$id)->get();

             return view('editUnit', ['unit' => $unit]);
         }
         public function update(Request $request) {
            DB::table('unit')->where('id_unit', $request->id_unit)->update([
                'nama_unit' => $request -> nama_unit,
                'no_telp_unit' => $request -> no_telp_unit,
            ]);
            return redirect('/unit');
        }
        public function delete($id_unit) {
            $unit = DB::table('unit')->where('id_unit',$id_unit)->delete();
            return redirect('/unit');
            }
	}
