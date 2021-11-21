<?php
namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	class InventarisController extends Controller
	{
	    public function inventaris() {
            $unit = DB::table('unit')->get();

               return view('inventaris', ['unit' => $unit]);
           }
           public function viewUnit($id)
           {
               $iven = DB::table('inventaris')->where('id_unit',$id)->get();

               return view('manajemenInventaris', ['iven' => $iven]);
           }
            public function simpan(Request $request){
	        DB::table('inventaris')->insert([
	            'kode_barcode' => $request -> kode_barcode,
	            'email' => $request -> email,
	            'id_unit' => $request -> id_unit,
	            'nama_inventaris' => $request -> nama_inventaris,
                'deskripsi_inventaris' => $request -> deskripsi_inventaris,
                'gambar_inventaris' => $request -> gambar_inventaris,
                'status_inventaris' => $request -> status_inventaris,
                'jumlah' => $request -> jumlah,
                'harga' => $request -> harga,
                'tgl_inventaris' => $request -> tgl_inventaris,
                'hak_akses' => $request -> hak_akses,
                'nama_kategori' => $request -> nama_kategori,
	        ]);

	        return redirect('/inventaris/manajemenInventaris/'.$request -> id_unit.'/?id='.$request -> id_unit);
	    }
        public function editInventaris($id,$id2)
         {
             $inv = DB::table('inventaris')->where('kode_barcode',$id2)->get();

             return view('editInventaris', ['inv' => $inv ]);
         }
         public function update(Request $request) {
            DB::table('inventaris')->where('kode_barcode', $request->kode_barcode)->update([
                'kode_barcode' => $request -> kode_barcode,
	            'nama_inventaris' => $request -> nama_inventaris,
                'deskripsi_inventaris' => $request -> deskripsi_inventaris,
                'gambar_inventaris' => $request -> gambar_inventaris,
                'status_inventaris' => $request -> status_inventaris,
                'jumlah' => $request -> jumlah,
                'harga' => $request -> harga,
                'tgl_inventaris' => $request -> tgl_inventaris,
                'hak_akses' => $request -> hak_akses,
                'nama_kategori' => $request -> nama_kategori,
            ]);
            return redirect('/inventaris/manajemenInventaris/'.$request -> id_unit.'/?id='.$request ->id_unit);
        }
        public function delete($kode_barcode) {
            $kg = DB::table('inventaris')->where('kode_barcode',$kode_barcode)->delete();

            return redirect('/inventaris/manajemenInventaris/'.$_GET['id'].'/?id='.$_GET['id']);
            }


            public function generateQrCode(){
            $iven = DB::table('inventaris')->where('id_unit',$id)->get();
            \QrCode::size(500)
                    ->format('png')
                    ->generate($data->kode_barcode, public_path('images/'.$request -> id_unit.'.png'));

            //return view('qrCode', ['iven' => $iven]);
        }
    }
