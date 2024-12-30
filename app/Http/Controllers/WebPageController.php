<?php

namespace App\Http\Controllers;

use App\Models\Webpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebPageController extends Controller
{

    public function index()
    {
        $data = WebPage::where('status', 1)->get();
        return view('AdminDashboard.WebPage.index', ['data' => $data]);
    }
    public function add()
    {
        return view('AdminDashboard.WebPage.addEdit');
    }
    public function save(Request $request)
    {
        $page = new WebPage([
            'name' => $request->get('page_name'),
            'slug' => $request->get('page_slug'),
            'html' => $request->get('page_content'),
            'status' => $request->get('page_status'),
            'created_by' => Auth::user()->user_type,
        ]);
        $page->save();
        return redirect()->route('webpage.index');
    }
    public function edit($id)
    {
        $data = WebPage::find($id);
        return view('AdminDashboard.WebPage.addEdit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $page = WebPage::find();
        $page->name = $request->get('page_name');
        $page->slug = $request->get('page_slug');
        $page->html = $request->get('page_content');
        $page->status = $request->get('page_status');
        $page->updated_by = Auth::user()->id;
        $page->save();
        return redirect()->route('webpage.index');
    }
    public function viewDelete($id)
    {
        if (Auth::user()->user_type == 1) {
        $view = 'AdminDashboard.Webpage.delete';
    } else {
        $view = 'UserDashboard.Webpage.delete';
    }
    return view($view);
}
    public function delete($id)
    {
        $statu = Webpage::where('id', $id)->delete();
        if (Auth::user()->user_type == 1) {
            $route = 'webpage.all';
        } else {
            $route = 'webpage.my';
        }
        return redirect()->route($route);
    }
    public function landing()
    {
        $pages = Webpage::all();
        return view("index", ['pages' => $pages]);
    }
    public function viewPage($page)
    {
        $data = Webpage::where('slug', $page)->first();
        return view("dynamic", ['data' => $data]);
    }
}
