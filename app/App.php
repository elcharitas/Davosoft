<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'keywords', 'details', 'publisher',
        'downloads', 'views', 'password', 'category_id', 'media_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    
    /**
     * Eloquent Relationship to Get all related screenshots
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function screenshots()
    {
        return $this->hasMany(Media::class);
    }

    /**
     * Eloquent Relationship to Get all related screenshots
     * 
     * @return App\Media
     */
    public function media()
    {
        return $this->hasOne(Media::class);
    }
    
    /**
     * Performs a download task while updating download count
     * 
     * @param int $id
     * @return Illuminate\Http\Response|null
     */
    public static function download($id)
    {
        $app = static::find($id);
        
        if($app && $app->downloads++ && $app->save())
        {
            return Storage::download($app->media->path);
        } else {
            abort(404, __('media.notfound'));
        }
    }
    
    /**
     * Gets apps by category using the category slug
     * 
     * @param string $slug
     * @return Illuminate\Database\Eloquent\Collection|null
     */
    public static function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        
        if($category){
            return $category->apps;
        }
    }
    
    /**
     * Gets the Basic app details and updates app view count
     * 
     * @param string $category
     * @param string $slug
     * @return App\App|null
     */
    public static function view($category, $slug)
    {
        $app = static::category($category)->slug($slug);
        
        if($app && $app->views++ && $app->save())
        {
            return $app;
        } else {
            abort(404, __('media.notfound'));
        }
    }
}
