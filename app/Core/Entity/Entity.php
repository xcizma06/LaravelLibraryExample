<?php

namespace App\Core\Entity;

use App\Core\Author\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

class Entity extends Model 
{
    use HasChildren, HasFactory;

    protected $childColumn = 'type';

    protected $childTypes = [
        'book' => BookEntity\BookEntity::class,
        'magazine' => MagazineEntity\MagazineEntity::class,
        'digital' => DigitalEntity\DigitalEntity::class,
    ];

    protected $fillable = [
        'name',
        'description',
    ];

    public function author() {
        return $this->belongsTo(Author::class);    
    }
}
