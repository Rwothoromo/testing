<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use DB;

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

        $link = new Link;

        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        
        $link->save();
        
//        $title = $request->input('title');
//        $url = $request->input('url');
//        $description = $request->input('description');
//        DB::insert('insert into links (title, url, description) values(?)',[$title, $url, $description]);
        echo "Link inserted successfully.<br/>";
        echo '<a href="add_links">Click Here</a> to go back.';
    }
    
    public function update(Request $request)
    {
        $link_id = 11;
        $link = Link::find($link_id);

        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        
        $link->save();
        
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
        
        $link = Link::find($link_id);
        
        $link->delete($link_id);
//        $deletedRows = App\Link::where('active', 0)->delete();
        
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
        $links = \App\Link::all();
        return view('delete_links', ['links' => $links]);
    }
    
}
