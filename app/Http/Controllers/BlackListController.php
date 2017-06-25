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

        $agents = AgentBase::search($city, $keyword, $offset, $limit);
        $app_key = config('app.baidu_map_app_key');

        return view('map', [
            'agents' => $agents,
            'app_key' => $app_key
        ]);
    }

}

