<?php

class Work extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
        'date_project' => 'required|date|date_format:yy-m-d'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'date_project', 'service', 'client'];

    protected $dates = array('date_project');

    public static function boot()
    {
        parent::boot();

        Work::saving(function($work){

            if( ! Input::hasFile('image') )
                return;

            $image = Input::file('image');

            if(is_null($work->id))
                $suffix = 'uploads/'.uniqid().'.'.$image->getClientOriginalExtension();
            else
                $suffix = $work->image;

            $work->image = $suffix;
            $path = public_path().'/'.$suffix;
            //dd($image->getRealPath());
            Image::make($image->getRealPath())//->resize(400, 290)
                        ->save($path);

        }); 
    }
}