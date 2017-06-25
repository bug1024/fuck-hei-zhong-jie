<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\AgentBase;
use Illuminate\Http\Request;

class BlackListController extends Controller {

    /**
     * 关键字搜索
     */
    public function search(Request $request) {
        $keyword = $request->input('kw');
        $city = (int) $request->input('city', 1);
        $offset = (int) $request->input('offset', 0);
        $limit = (int) $request->input('limit', 20);

        $agents = AgentBase::where('status', 1)
            ->where('city', $city)
            ->whereRaw("name like '%$keyword%' or mobile like '%$keyword%'")
            ->orderBy('add_time', 'desc')
            ->offset($offset)
            ->limit($limit)->get();
        $json = (string) $agents;
        echo $agents;
    }

}

