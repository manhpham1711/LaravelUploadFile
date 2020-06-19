<?php

namespace App\Http\Controllers\Photo;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class UploadFileController extends Controller {
	function index() {
		$data = Photo::all();
		return view('photo.index', ['photos' => $data]);
	}

	function create() {
		return view('photo.add');
	}

	function store(Request $request) {
		$name = $request->name;
		$image = $request->file('photo')->store("public");

		$photo = new Photo;

		$photo->name = $name;
		$photo->image = $image;
		$photo->save();
		return redirect()->route('photos.index');

	}

}
