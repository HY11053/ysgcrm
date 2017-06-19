<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Work;
use App\Admin\Worktui;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function Index()
    {
        $works=Work::where('id','<>',0)->paginate(50);
        return view('admin.works',compact('works'));
    }

    public function IndexTui()
    {
        $works=Worktui::where('id','<>',0)->paginate(50);
        return view('admin.workstui',compact('works'));
    }
    public function ArticleImport()
    {
        return view('admin.workarticle');
    }
    public function PostArticleImport(Request $request)
    {
        $articles=array_unique(explode(PHP_EOL,$request->input('content')));
        foreach ($articles as $article)
        {
            $souces=explode('@',$article);
            Work::create(['links'=>$souces[0],'text'=>$souces[1],'user_id'=>Auth::id()]);

        }
        return redirect(route('works'));

    }

    public function WaituiInport()
    {
        return view('admin.workwaitui');
    }
    public function PostWaituiInport(Request $request)
    {
        $articles=array_unique(explode(PHP_EOL,$request->input('content')));
        foreach ($articles as $article)
        {
            Worktui::create(['links'=>$article,'user_id'=>Auth::id()]);

        }
        return redirect(route('works'));
    }

}
