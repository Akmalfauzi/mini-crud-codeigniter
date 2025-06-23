<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FeedbackModel;

class FeedbackController extends BaseController
{
    protected $feedbackModel;

    protected $helpers = ['form'];
    
    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Feedback Form',
            'validation' => \Config\Services::validation()
        ];
        
        return view('feedback/index', $data);
    }
    
    public function store()
    {
        $data = $this->request->getPost();
        
        if (!$this->feedbackModel->save($data)) {
            return redirect()->back()->withInput()->with('validation', $this->feedbackModel->errors());
        }
        
        session()->setFlashdata('success', 'Terima kasih! Feedback Anda berhasil dikirim.');
        return redirect()->to('/feedback');
    }
}
