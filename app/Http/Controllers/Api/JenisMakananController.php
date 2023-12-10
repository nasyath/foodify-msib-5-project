<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JMakanan;
use App\Http\Resources\JenisMakananResource;
use Illuminate\Support\Facades\Validator;

class JenisMakananController extends Controller
{
    // function index to get all data from table tb_jenis_makanan
    public function index()
    {
        $data = JMakanan::all();
        // return to new JenisMakananResource with status, message, and data
        return new JenisMakananResource(true, 'Data berhasil diambil', $data);
    }

    // show function to get data by id
    public function show($id)
    {
        $data = JMakanan::find($id);
        // return to new JenisMakananResource with status, message, and data
        return new JenisMakananResource(true, 'Data berhasil diambil', $data);
    }

    // store function to store data to table tb_jenis_makanan
    public function store(Request $request)
    {

        // Add error message to validator
        $validator = Validator::make($request->all(), [
            'nama_jenis' => 'required'
        ]);

        // if validator is fails return to json error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create new JMakanan
        $data = JMakanan::create([
            'nama_jenis' => $request->nama_jenis
        ]);

        // return to new JenisMakananResource with status, message, and data
        return new JenisMakananResource(true, 'Data berhasil ditambahkan', $data);
    }

    // update function to update data by id
    public function update(Request $request, $id)
    {
        // Add error message to validator
        $validator = Validator::make($request->all(), [
            'nama_jenis' => 'required'
        ]);

        // if validator is fails return to json error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // update JMakanan by id
        $data = JMakanan::whereId($id)->update([
            'nama_jenis' => $request->nama_jenis
        ]);

        // return to new JenisMakananResource with status, message, and data
        return new JenisMakananResource(true, 'Data berhasil diupdate', $data);
    }

    // destroy function to delete data by id
    public function destroy($id)
    {
        // find JMakanan by id
        $data = JMakanan::find($id);

        // delete JMakanan
        $data->delete();

        // return to new JenisMakananResource with status, message, and data
        return new JenisMakananResource(true, 'Data berhasil dihapus', null);
    }

    // search function to search data by nama_jenis
    public function search(Request $request)
    {
        // validate request
        $request->validate([
            'nama_jenis' => 'required'
        ]);

        // find JMakanan by nama_jenis
        $data = JMakanan::where('nama_jenis', 'like', '%' . $request->nama_jenis . '%')->get();

        // return to new JenisMakananResource with status, message, and data
        return new JenisMakananResource(true, 'Data berhasil ditemukan', $data);
    }
}
