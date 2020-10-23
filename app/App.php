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
     * @return Illuminate\Support\Collection
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
     * @return Illuminate\Http\Response|void
     */
    public function download($id)
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
     * Gets apps with category slug
     * 
     * @param string $category
     * @return Illuminate\Support\Collection|void
     */
    public static function category($category)
    {
        $cid = Category::where('slug', $category)->first();
        
        if($cid){
            return static::where('category_id', $cid->id)->get();
        }
    }
    
    /**
     * Gets the Basic app details and updates app view count
     * 
     * @param string $category
     * @param string $slug
     * @return App\App|void
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
