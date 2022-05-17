<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articles;
class ArticlesController extends Controller
{
    //

    public function index(){
        return Articles::all();
    }

    public function getArticle($id){
        return Articles::find($id);
    }

    public function createArticle(Request $request){
        //return $request;// $article = new Articles([
        //     'article_content_snippet' => $request->articleContent
        // ]);
        $articles = DB::table('articles')->insert(['article_content_snippet' => $request->articleContent]);
        if($articles > 0){
            return "success";
        }
        
    }

    public function editArticle(Request $request){
        $affected = DB::table('articles')->where('id', $request->id)->update([
            'article_content_snippet' => $request->articleContentSnippet
        ]);

        if($affected > 0 ){
            return "success";
        }
    }

    public function deleteArticle($id){
        $affected = DB::table('articles')->where('id', $id)->delete();

        if($affected > 0){
            
            return "success";
        }
    }
}
