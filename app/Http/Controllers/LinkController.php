<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

class LinkController extends Controller
{
    /**
     * Create a new link instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function insert(Request $request)
    {
        // Validate the request...
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

//        $link = new Link;
//
//        $link->title = $request->title;
//        $link->url = $request->url;
//        $link->description = $request->description;
//        
//        $link->save();
        
        $title = $request->input('title');
        $url = $request->input('url');
        $description = $request->input('description');
//        DB::insert('insert into links (title, url, description) values(?, ?, ?)',[$title, $url, $description]);
        DB::table('links')
                ->insert(['title' => $title, 'url' => $url, 'description' => $description]);
        
        echo "Link inserted successfully.<br/>";
        echo '<a href="add_links">Click Here</a> to go back.';
    }
    
    public function update(Request $request)
    {
        $link_id = 7;
//        $link = Link::find($link_id);
//
//        $link->title = $request->title;
//        $link->url = $request->url;
//        $link->description = $request->description;
        
//        $link->save();
        
        $title = $request->input('title');
        $url = $request->input('url');
        $description = $request->input('description');        
//        DB::update('UPDATE links SET title = ?, url = ?, description = ? WHERE id = ?', [$title, $url, $description, $link_id]);
        
        DB::table('links')
                ->where('id', '=', $link_id)
                ->update(['title' => $title, 'url' => $url, 'description' => $description]);
                
        echo "Link updated successfully.<br/>";
        echo '<a href="update_links">Click Here</a> to go back.';
        
        // If there's a flight from Oakland to San Diego, set the price to $99.
        // If no matching model exists, create one.
//        $flight = App\Flight::updateOrCreate(
//            ['departure' => 'Oakland', 'destination' => 'San Diego'],
//            ['price' => 99]
//        );
        
    }
    
    public function delete(Request $request)
    {
        echo "Here!!!";
        $link_id = $request->link_id;
//        DB::delete('DELETE FROM links WHERE id = ?', [$link_id]);
//        DB::table('links')->delete();
//        DB::table('links')->where('votes', '>', 100)->delete();
//        DB::table('links')->where('id', '=', $link_id)->delete();
        DB::table('links')
                ->where('id', '=', $link_id)
                ->delete();
        
//        $link = Link::find($link_id);
//        
//        $link->delete($link_id);
//        $deletedRows = App\Models\Link::where('active', 0)->delete();
        
        echo "Link deleted successfully.<br/>";
        echo '<a href="delete_links">Click Here</a> to go back.';
    }
    
    public function add_links_page()
    {
        return view('add_links');
    }
    
    public function update_links_page()
    {
        return view('update_links');
    }
    
    public function delete_links_page()
    {
//        $links = \App\Models\Link::all();
//        $links = DB::select('SELECT * FROM links');
        $links = DB::table('links')->get();
        return view('delete_links', ['links' => $links]);
    }
    
}
