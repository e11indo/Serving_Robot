<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        return view('boards.index');
    }

    /* 게시판 글 저장 */
    public function store(Request $request){
        $validation = $request -> validate([
            'name' => 'required',
            'company' => 'required',
            'time' => 'required',
            'phone' => 'required',
            'content' => 'required',
            'email' => 'required'
        ]);

        $board = new Board();
        $board -> name/* 쿼리 이름 설정 */ = $validation['name'];
        $board -> company/* 쿼리 이름 설정 */ = $validation['company'];   
        $board -> phone/* 쿼리 이름 설정 */ = $validation['phone'];
        $board -> time = $validation['time'];
        $board -> content/* 쿼리 이름 설정 */ = $validation['content'];  
        $board -> email = $validation['email'];  
        $board -> save();

        return redirect() -> route('boards.index'); /* 정보 저장 후에 이동할 페이지 */
    }

    public function show($id){
        $board = Board::where('id', $id) -> first();
        return view('boards.show', compact('board'));
    }

    public function view(){
        $board = Board::orderBy('id','desc')->paginate(10);
        return view('boards.view',compact('board'));
    }

        /* 게시판 글 삭제 */
    public function delete($id){
        $board = Board::where('id', $id) -> first();
        $board -> delete();

        return redirect() -> route('boards.view');
    }

/*  public function search(Request $request){
        $word = $request->search;
        $searches = Board::search($word)->paginate(2);

        return view('search', compact(['searches', 'word']));
    } */

}