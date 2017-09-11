<?php

namespace SON\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model implements TableInterface
{
    protected $fillable = [
        'name'
    ];


    public function getTableHeaders()
    {
        return [
            'ID',
            'Disciplina'
        ];
    }

    public function getValueForHeader($header)
    {
        switch ($header){
            case 'ID':
                return $this->id;
            case 'Disciplina':
                return $this->name;
        }
    }
}
