<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FeedbackModel;

class Feedback extends BaseController
{
    protected $feedbackModel;

    protected $helpers = ['form', 'text'];
    
    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Daftar Feedback',
            'feedbacks' => $this->feedbackModel->orderBy('created_at', 'DESC')->findAll()
        ];
        
        return view('admin/feedback/index', $data);
    }
    
    public function delete($id)
    {
        $feedback = $this->feedbackModel->find($id);
        
        if (!$feedback) {
            return $this->response->setJSON(['success' => false, 'message' => 'Feedback tidak ditemukan']);
        }
        
        if ($this->feedbackModel->delete($id)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Feedback berhasil dihapus!']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Gagal menghapus feedback']);
        }
    }
}
