<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Patiekalas extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price'];

    const SORT_SELECT = [
        ['rate_asc', 'Rating 1 - 9'],
        ['rate_desc', 'Rating 9 - 1'],
        ['title_asc', 'Title A - Z'],
        ['title_desc', 'Title Z - A'],
        ['price_asc', 'Price 1 - 9'],
        ['price_desc', 'Price 9 - 1'],
    ];

    public function getPhotos()
    {
        return $this->hasMany(PatiekalasImage::class, 'patiekalas_id', 'id');
    }

    public function lastImageUrl()
    {
        return $this->getPhotos()->orderBy('id', 'desc')->first()->url;
    }

    public function addImages(?array $photos) : self
    {
        if ($photos) {
            $patiekalasImage = [];
            $time = Carbon::now();
            foreach($photos as $photo) {
                $ext = $photo->getClientOriginalExtension();
                $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                $file = $name. '-' . rand(100000, 999999). '.' . $ext;
                $photo->move(public_path().'/images', $file);
                $patiekalasImage[] = [
                    'url' => asset('/images') . '/' . $file, 
                    'patiekalas_id' => $this->id,
                    'created_at' => $time,
                    'updated_at' => $time
                ];
            }
            PatiekalasImage::insert($patiekalasImage);
        }
        return $this;
    }

    public function removeImages(?array $photos) : self
    {
        if ($photos) {
            $toDelete = PatiekalasImage::whereIn('id', $photos)->get();
            foreach ($toDelete as $photo) {
                $file = public_path().'/images/' .pathinfo($photo->url, PATHINFO_FILENAME).'.'.pathinfo($photo->url, PATHINFO_EXTENSION);
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            PatiekalasImage::destroy($photos);
        }
        return $this;
    }

    public function getComments()
    {
        return $this->hasMany(Comment::class, 'patiekalas_id', 'id');
    }
    
}