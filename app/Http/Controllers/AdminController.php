<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Image;
use Session;
use Auth;
class AdminController extends Controller
{
    private $title;
    private $page_url;
    private $page_view;
    private $image_folder;
    private $image_size;
    private $model;

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->page_view = 'admin.admin';
        $this->page_url = 'admins';
        $this->title = 'Admin';
        $this->image_folder = 'admin';
        $this->image_size = '';
        $this->model = Admin::class;
    }


    public function dashboard()
    {
      return Auth::user()->email;
    }


    public function index()
    {
        $pageData = [
            'title' => $this->title,
            'page_url' => $this->page_url,
            'getAllData' => $this->model::where('status', 1)->get(),
        ];
        return view($this->page_view . '.index', $pageData);
    }

    public function create()
    {
        $pageData = [
            'title' => $this->title,
            'page_url' => $this->page_url,
            'data' => '',
        ];
        return view($this->page_view . '.create', $pageData);
    }

    /*************************** INSERT Update Query *********************** **/
    public function store(Request $request)
    {
        $id = $request['id'];
        $params = $request->except(['_token','password_confirmation']);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $params = $request->except(['_token', 'image','password_confirmation']);
            // dd($params);
        /*************************************************************************************** */
        /* INSERT Query */
        /*************************************************************************************** */
        if (empty($id)) {
            $image_name = image_uploads($request,'image', $this->image_folder, $this->image_size);
            $params['image'] = $image_name;
            $this->model::create($params);
            Session::flash('success', $this->title . ' Successfully Created');
            return redirect($this->page_url);
        } else {
            /*************************************************************************************** */
            /* Update Query */
            /*************************************************************************************** */
            // dd('updated');
            $data = $this->model::where('id', $id)->first();
            if (isset($request->image)) {
                $image_name = image_uploads($request,'image', $this->image_folder, $this->image_size);
                $params['image'] = $image_name;
            }
            $this->model::where('id', $id)->update($params);
            Session::flash('success', $this->title . ' Successfully Updated');
            return redirect($this->page_url);
        }
    }

    public function edit($id = '')
    {
        $pageData = [
            'title' => $this->title,
            'page_url' => $this->page_url,
            'data' => $this->model::where('id', $id)->first(),
        ];

        return view($this->page_view . '.create', $pageData);
    }

    public function destroy($id)
    {
        $delete = $this->model::find($id)->first();
        imageUnlink($delete->image);
        $this->model::find($id)->delete();
        return redirect($this->page_url);
    }

}
