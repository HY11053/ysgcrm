<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImporArticleController extends Controller
{
    public function impotrArticleSource()
    {
        Article::where('type','jyjq')->delete();
        echo '删除';
    }
}
