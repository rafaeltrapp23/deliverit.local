<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorredorProva extends Model
{
    protected $table = 'corredor_provas';

    protected $fillable = [
        'corredor_id',
        'prova_id',
    ];

    public function prova()
    {
        return $this->belongsTo('App\Models\Prova', 'prova_id');
    }

    public function corredor()
    {
        return $this->belongsTo('App\Models\Corredor', 'corredor_id');
    }

    public function corredorResultado()
    {
        return $this->hasMany('App\Models\CorredorResultado', 'corredor_prova_id');
    }

    public static function validaCorredorProva($request, $id=null)
    {
        try {
            $corredor_id = $request['corredor_id'];
            $prova_id    = $request['prova_id'];

            if(!empty($id)) {
                $corredorProva = self::find($id);
                if ($corredorProva->corredor_id == $corredor_id and $corredorProva->prova_id == $prova_id){
                    return 0;
                }
            }

            //busca todas as data em que o corredor esta cadastrado
            $data_corredor = self::whereHas('Corredor', function ($query) use ($corredor_id) {
                $query->where('id', $corredor_id);
            })
                ->join('provas', 'prova_id', 'provas.id')
                ->pluck('provas.data_prova')
                ->toArray();

            //valida se a prova que deseja cadastrar não esta nas datas já cadastradas para o corredor
            $prova = Prova::whereIn('data_prova', $data_corredor)
                ->where('id', $prova_id)
                ->count();

            if($prova > 0){
                throw new \ErrorException('Corredor já possui prova na mesma data.', 422);
            }
            return $prova;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
