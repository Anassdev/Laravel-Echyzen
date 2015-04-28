<?php



class CustomController extends Controller {
    public function imageUpload() {


        //if (Input::hasFile('imagefile')) {return 'no'; }


        $destinationPath = 'uploads'; // upload path
        $extension = Input::file('imagefile')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('imagefile')->move($destinationPath, $fileName); // uploading file to given path


        /*$file = $request->file('imagefile');
        $file->move('images', 'test.jpg');
        $file_path = '/uploads/'.'test.jpg';*/
        $array['file_path'] = $destinationPath . '/' . $fileName;
        return View::make('_image-upload')->with($array);

    }
}