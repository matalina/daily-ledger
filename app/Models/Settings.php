<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    public $fillable = ['user_id','settings'];

    // attributes
    public function getSettingsAttribute($value) : array 
    {
    
        $defauts = $this->getDefaults();
        $settings = array_replace_recursive($defaults, json_decode($value,true));
        return \Arr::dot($settings);
    }

    public function setSettingsAttribute(array $value) 
    {
        $defauts = $this->getDefaults();
        $settings = array_replace_recursive($defaults, $value);

        $this->settings = json_encode($value);
    }

    public function getDefaults()
    {
        return [
            'default' => [
                'calendar' => 'week',
                'tasks' => 'completed',
                'habits' => 'week',
                'notes' => 'collections',
            ],
        ];
    }


}
