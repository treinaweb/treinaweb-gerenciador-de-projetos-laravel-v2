<?php

namespace App\Models;

use Carbon\Carbon;
use App\Helpers\DataHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'orcamento', 'data_inicio', 'data_final', 'client_id'];

    /**
     * Formata a data de inicio do projeto
     */
    protected function dataInicio(): Attribute
    {
        return DataHelpers::converteData();
    }

    /**
     * Formata a data de inicio do projeto
     */
    protected function dataFinal(): Attribute
    {
        return DataHelpers::converteData();
    }

    /**
     * Um projeto pertence a um cliente
     * 
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    /**
     * Um projeto pertence a muitos funcionários
     * 
     * @return BelongsToMany 
     */
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_project', 'project_id', 'employee_id');
    }
}
