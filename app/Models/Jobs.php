<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jobs extends Model
{
    /** @use HasFactory<\Database\Factories\JobsFactory> */
    use HasFactory;

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }
    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class,'job_tag');
    }
    public function Employer(): belongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
