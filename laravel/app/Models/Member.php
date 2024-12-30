<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    protected $with = ['period', 'position', 'division'];

    protected $fillable = [
        'name',
        'image',
        'period_id',
        'position_id',
        'division_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($member) {
            $positionName = DB::table('positions')->where('id', $member->position_id)->value('name');

            if ($positionName != 'Anggota Bidang') {

                $query = self::where('period_id', $member->cabinet_id)
                    ->where('position_id', $member->position_id)
                    ->where('division_id', $member->division_id);

                if ($member->exists) {
                    $query->where('id', '!=', $member->id);
                }

                $existing = $query->exists();

                if ($existing) {
                    throw new \Exception('Posisi yang dipilih sudah terisi.');
                }
            }
        });
    }

    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
