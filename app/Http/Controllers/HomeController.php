<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Game;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $games = Game::limit(9)->latest()->get();
        return view('main.home',compact('games'));
    }

    public function chat($id){
        if ( Auth::check() ){
            $games = Game::limit(9)->latest()->get();
            $users = User::where('is_admin',0)->where('id','!=',Auth::id())->select('id','first_name','last_name')->get();
            return view('main.chat',compact('games', 'users','id'));
        }else{
            return redirect()->back();
        }
    }

    public function sendMsg(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
        ]);

        $from_id = Auth::id();
        $to_id = $request->input('user_id');
        $game_id = $request->input('game_id') ? $request->input('game_id') : 0;
        $comments = $request->input('message');

        $message = new Chat();
        $message->from_id = $from_id;
        $message->to_id = $to_id;
        $message->game_id = $game_id;
        $message->message = $comments;

        $message->save();

        $data = $this->get_user_messages($from_id,$to_id,$game_id);

        $html = view('main.response',compact('data'));
        $html = $html->render();
        return response()->json(['html'=>$html] );
    }

    public function get_user_messages($from_id=0,$to_id=0,$game_id=0){
        $messages = Chat::select( "id", "from_id", "to_id", "message", "created_at" )
            ->with( "sender:id,first_name,last_name" )
            ->where( function ( $query ) use ( $from_id, $to_id ) {
                $query->where( function ( $query ) use ( $from_id, $to_id ) {
                    $query->where( "from_id", $from_id )
                        ->where( "to_id", $to_id );
                } );

                $query->orWhere( function ( $query ) use ( $from_id, $to_id ) {
                    $query->where( "from_id", $to_id )
                        ->where( "to_id", $from_id );
                } );
            } )
            ->where('game_id',$game_id)
            ->get();
        return $messages;
    }

    public function get_user_messagess(Request $request){
        $from_id = Auth::id();
        $to_id = isset( $request->to_id ) ? $request->to_id : 0;
        $game_id = $request->input('game_id') ? $request->input('game_id') : 0;

        $data = Chat::select( "id", "from_id", "to_id", "message", "created_at" )
            ->with( "sender:id,first_name,last_name" )
            ->where( function ( $query ) use ( $from_id, $to_id ) {
                $query->where( function ( $query ) use ( $from_id, $to_id ) {
                    $query->where( "from_id", $from_id )
                        ->where( "to_id", $to_id );
                } );

                $query->orWhere( function ( $query ) use ( $from_id, $to_id ) {
                    $query->where( "from_id", $to_id )
                        ->where( "to_id", $from_id );
                } );
            } )
            ->where('game_id',$game_id)
            ->get();

        $rating = Rating::where('game_id',$game_id)
            ->where('user_id',$to_id)
            ->avg('rating');

        $html = view('main.response',compact('data'));
        $html = $html->render();
        return response()->json([
            'html'=>$html,
            'rating' => isset( $rating ) ? $rating : 0,
        ] );
    }

    public function rating(Request $request){
        $user_id = isset( $request->to_id ) ? $request->to_id : 0;
        $game_id = isset( $request->game_id ) ? $request->game_id : 0;
        $rating = isset( $request->rating ) ? $request->rating : 0;

//        if ( Rating::where('user_id',$user_id)->where('game_id',$game_id)->exists() ){
            $ratin = new Rating;
            $ratin->user_id = $user_id;
            $ratin->game_id = $game_id;
            $ratin->rating = $rating;
            $ratin->save();
//        }else{
//            $ratin = Rating::where('user_id',$user_id)->where('game_id',$game_id)->first();
//            $ratin->user_id = $user_id;
//            $ratin->game_id = $game_id;
//            $ratin->rating = $rating;
//            $ratin->save();
//        }
    }
}
