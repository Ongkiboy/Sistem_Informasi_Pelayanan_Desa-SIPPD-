<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable(['user_id', 'nik', 'no_kk', 'full_name', 'gender', 'birth_date', 'address', 'phone'])]
class resident extends Model
{
        public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documentSubmissions()
    {
        return $this->hasMany(DocumentSubmission::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
