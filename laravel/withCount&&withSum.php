<?php

/**
* Everything about With 
*https://morioh.com/p/2d643ea681ec
*/

$supporters = Supporter::withCount('feedbackRelation')
                        ->withSum('voteRelation','vote')
                        ->get();
                        
//Supporter Model                        
class Supporter extends Model
{
    use HasFactory;

    protected $table = 'supporters';

    protected $fillable = ['email','email_verify'];

    public function feedbackRelation()
    {
        return $this->hasMany('App\Models\Feedback', 'email_id','id')
            ->where('email_verify',1)
            ->where('is_active',1);
    }


    public function voteRelation()
    {
        return $this->hasMany('App\Models\Vote', 'email_id','id')
            ->where('email_verify',1);
    }
}
