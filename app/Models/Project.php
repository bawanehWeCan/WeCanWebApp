<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\MySlugHelper;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Project extends Model
{
    use HasFactory,HasSlug;
    protected $fillable = [
        'name',
        'image',
        'service_id',
        'content'

    ];
    public function setImageAttribute($value){
        if ($value){
            $file = $value;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().mt_rand(1000,9999).'.'.$extension;
            $file->move(public_path('img/'), $filename);
            $this->attributes['image'] =  'img/'.$filename;
        }
    }

    public function service(){
        return $this->belongsTo( Service::class , 'service_id' );
    }

    public function images(){
        return $this->hasMany( Image::class  );
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
}
