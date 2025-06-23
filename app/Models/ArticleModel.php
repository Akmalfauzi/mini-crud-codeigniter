<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table            = 'articles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content', 'status'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'content' => 'required|min_length[10]',
        'status' => 'required|in_list[draft,published]'
    ];
    
    protected $validationMessages = [
        'title' => [
            'required' => 'Judul artikel harus diisi',
            'min_length' => 'Judul artikel minimal 3 karakter',
            'max_length' => 'Judul artikel maksimal 255 karakter'
        ],
        'content' => [
            'required' => 'Konten artikel harus diisi',
            'min_length' => 'Konten artikel minimal 10 karakter'
        ],
        'status' => [
            'required' => 'Status artikel harus dipilih',
            'in_list' => 'Status artikel harus draft atau published'
        ]
    ];
    
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
