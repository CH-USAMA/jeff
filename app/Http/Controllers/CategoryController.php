<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Passport;
use App\Models\User;
use DB;


use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
{
    $categories = Category::get();
    $passports = Passport::get();
    // dd($passports[0]->user_id);
    // $user = User::find($passports[0]->user_id);
    // dd($user);

    // $result = DB::select('select * from passports JOIN users On (users.id = passports.user_id)');
    // dd($result);
    // dd($result[0]->passport_number);
    // $user = User::find(1);
    // dd($user->passport->passport_number); //one to one relationship

// Query the passport relationship
// $user->passport->expiration_date;
    // with($categories => 'categories')

    return view('category.index', compact('categories','passports'));
}
    public function create()
{
    return view('category.create');
}

public function store(Request $request)
{
    $category = new Category;
    $category->title = $request->get('title');
    // auth()->id();
    $category->user()->associate($request->user());
    // $category->user_id =  3;
    // $subject->teacher()->associate($id);

    $category->save();

    return redirect('/categories')->with('success','Category is Successfully saved');
}
}
