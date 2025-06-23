<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;

class Article extends BaseController
{
    protected $articleModel;

    protected $helpers = ['form', 'text'];
    
    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Daftar Artikel',
            'articles' => $this->articleModel->orderBy('created_at', 'DESC')->findAll()
        ];
        
        return view('admin/article/index', $data);
    }
    
    public function create()
    {
        $data = [
            'title' => 'Tambah Artikel',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/article/create', $data);
    }
    
    public function store()
    {
        $data = $this->request->getPost();
        
        if (!$this->articleModel->save($data)) {
            return redirect()->back()->withInput()->with('validation', $this->articleModel->errors());
        }
        
        session()->setFlashdata('success', 'Artikel berhasil ditambahkan!');
        return redirect()->to('/admin/article');
    }
    
    public function edit($id)
    {
        $article = $this->articleModel->find($id);
        
        if (!$article) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }
        
        $data = [
            'title' => 'Edit Artikel',
            'article' => $article,
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/article/edit', $data);
    }
    
    public function update($id)
    {
        $article = $this->articleModel->find($id);
        
        if (!$article) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }
        
        $data = $this->request->getPost();
        
        if (!$this->articleModel->update($id, $data)) {
            return redirect()->back()->withInput()->with('validation', $this->articleModel->errors());
        }
        
        session()->setFlashdata('success', 'Artikel berhasil diperbarui!');
        return redirect()->to('/admin/article');
    }
    
    public function delete($id)
    {
        $article = $this->articleModel->find($id);
        
        if (!$article) {
            return $this->response->setJSON(['success' => false, 'message' => 'Artikel tidak ditemukan']);
        }
        
        if ($this->articleModel->delete($id)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Artikel berhasil dihapus!']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Gagal menghapus artikel']);
        }
    }
}
