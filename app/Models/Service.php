<?php

namespace App\Models;

use App\Helper\MySlugHelper;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory,HasSlug;
    protected $fillable = [
        'name',
        'image',
        'price',
        'heading1',
        'heading2',
        'content1',
        'content2',
        'features'
    ];




    public function setImageAttribute($value){
        if ($value){
            $file = $value;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().mt_rand(1000,9999).'.'.$extension;
            $file->move(public_path('img/services/'), $filename);
            $this->attributes['image'] =  'img/services/'.$filename;
        }
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

     /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')//column used in generate slug
            ->saveSlugsTo('slug');
    }

    //add this method from HasSlug Trait.

    protected function generateNonUniqueSlug(): string
    {
        $slugField = $this->slugOptions->slugField;

        if ($this->hasCustomSlugBeenUsed() && ! empty($this->$slugField)) {
            return $this->$slugField;
        }

        return MySlugHelper::slug($this->getSlugSourceString());
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

}
