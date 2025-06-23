<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;
use App\Models\FeedbackModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $articleModel = new ArticleModel();
        $feedbackModel = new FeedbackModel();
        
        $data = [
            'title' => 'Dashboard Admin',
            'article_count' => $articleModel->countAll(),
            'feedback_count' => $feedbackModel->countAll(),
            'published_count' => $articleModel->where('status', 'published')->countAllResults(),
            'draft_count' => $articleModel->where('status', 'draft')->countAllResults()
        ];
        
        return view('admin/dashboard', $data);
    }
}
