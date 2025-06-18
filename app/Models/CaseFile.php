<?php

namespace App\Models;

use App\CaseFileStatus;
use App\CaseFileType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaseFile extends Model
{
    use HasUuids;

    protected $guarded = ['id'];
    protected $casts = [
        'status' => CaseFileStatus::class,
        'type' =>  CaseFileType::class,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function getOpenedAtStatusAttribute() {
        return $this->created_at->diffForHumans();
    }
}
