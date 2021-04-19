<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Episode;
use App\Models\Serie;
use Illuminate\Http\Request;

class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updateOActor( $id,Request $request)
    {
        Actor::where('id',$id)->update($request->except('_token'));
        return back()->with('success',"تم تعديل الممثل");

    }

    public function removeOActor($id)
    {
        Actor::where('id',$id)->delete();
        return back();
    }

    public function addOActor(Request $request)
    {
        $actor = new Actor($request->except('_token'));
        $actor->save();
        return back()->with('success','تمت اضافة الممثل بنجاح');
    }
     
     public function showOActors()
     {
         return view('admin.actors.actors',['actors'=>Actor::all()]);
     }



    public function addEpisode(Request $request)
    {
        $episode = new Episode($request->all());
        $episode->save();
        return back()->with('success',"episode added !!");
    }

    public function updateE(Request $request,$id)
    {
        Episode::where('id',$id)->update($request->except('_token'));
        return back()->with('success',"episode updated !!");
    }

    public function removeEpisode(Request $request)
    {
        Episode::where('id',$request->id)->delete();
        return back();
    }
 

    public function addActors($id)
    {
        $data=array();
        $serie=Serie::find($id)->actors()->get();
        foreach ($serie as $serie) {
            array_push($data,$serie->id);
          
        }
        $actor = Actor::whereNotIn('id',$data)->get();
        return view('admin.actors.serie.addActor',['actors'=>$actor,'serie'=>$id]);
    }

    public function addActor($id,Request $request)
    {
       Serie::find($id)->actors()->attach($request->actor);
       return back()->with('success','actor added!!');
    }


    public function removeActors($id,$ac)
    {
       $serie=Serie::find($id);
       $serie->actors()->detach($ac);
       return back();
    }

     public function showActors($id)
     {
         return view('admin.actors.serie.actors',['series'=>Serie::find($id)]);
     }


    public function updateEpisode($id)
    {
        return view('admin.episode.updateEpisode',['episode'=>Episode::find($id)]);
    }

    public function showEpisode($id)
    {
        return view('admin.episode.episodes',['episodes'=>Serie::find($id)]);
    }



    public function addS(Request $request)
    {
        $serie = new Serie($request->all());
        $serie->save();
        return redirect()->route('dashboard');
    }

    public function addSerie()
    {
        return view('admin.addSerie');
    }

     public function updateSerie($id)
     {
        return view('admin.UpdateSerie',['serie'=>Serie::find($id)]);
     }

      public function updateS(Request $request,$id)
      {
         Serie::where('id',$id)->update($request->except('_token'));
         return redirect()->route('dashboard');
      }

      public function removeS(Request $request)
      {
          Serie::where('id',$request->id)->delete();
          return back();
      }

      public function show()
      {
          return view('admin.series',["series"=>Serie::all()]);
      }
}
