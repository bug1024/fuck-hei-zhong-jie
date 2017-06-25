<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentBase extends Model
{
    protected $table = 'agent_base';

    /**
     * 关键字索索
     */
    public static function search($city, $keyword, $offset, $limit) {
        $agents = AgentBase::where('status', 1)
            ->where('city', $city)
            ->whereRaw("name like '%$keyword%' or mobile like '%$keyword%'")
            ->orderBy('add_time', 'desc')
            ->offset($offset)
            ->limit($limit)->get();

        return $agents;
    }
}
