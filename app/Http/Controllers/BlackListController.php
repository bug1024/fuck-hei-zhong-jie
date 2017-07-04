<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\AgentBase;
use App\Comment;
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

    /**
     * 黑历史
     */
    public function history($agent_id) {
        $agent = AgentBase::find($agent_id);
        $comments = Comment::where('agent_id', $agent_id)->take(100)->get();
        return view('history', [
            'agent' => $agent,
            'comments' => $comments
        ]);
    }

    public function addComment() {
        $comments = Comment::add([
            'user_id' => 1,
            'agent_id' => 1,
            'content' => 'fuck',
            'add_time' => date('Y-m-d H:i:s'),
        ]);
    }

}

