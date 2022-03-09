<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;
use CodeIgniter\HTTP\Request;

class MenuController extends Controller
{
    protected $request;
    function __construct()
    {
        $this->menus = new MenuModel();
    }
    public function tampil()
    {
        $data['data'] = $this->menus->findAll();
        return view('menu',$data);
    }
    public function create()
    {
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jenis' => $this->request->getPost('jenis'),
        ); 
        $this->menus->insert($data);
        return redirect('menu')->with('success','Data berhasil disimpan');
    }
    public function edit($id)
    {
        
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jenis' => $this->request->getPost('jenis'),  
        );
        $this->menus->update($id,$data);
        return redirect('menu')->with('succes','Data Berhasil diedit');
    }
    public function show($id)
    {
        
    }
    public function delete($id)
    {
        
        $this->menus->delete($id);
        return redirect('menu')->with('success','Data Berhasil dihapus');
    }
}