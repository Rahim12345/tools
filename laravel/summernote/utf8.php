<?php
public function store(articleAddRequest $request)
{
    $request->flash();

    $description = $request['content'];

    $dom = new \DomDocument();

    $dom->loadHTML('<?xml encoding="UTF-8">'. $description);
    $description = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
    $description .= $dom->saveHTML( $dom->documentElement ); // important!

    $images = $dom->getElementsByTagName('img');

    foreach($images as $k => $img){


        $data = $img->getAttribute('src');

        list($type, $data) = explode(';', $data);

        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);

        $image_name= "/uploads/articles" . time().$k.'.png';

        $path = public_path() . $image_name;

        file_put_contents($path, $data);

        $img->removeAttribute('src');

        $img->setAttribute('src', $image_name);

    }



    $articleTable = new Article();
    $articleTable->category_id  = $request->category;
    $articleTable->title        = $request->title;
    $articleTable->slug         = str_slug($request->title.now());
    $articleTable->content      = $description;

    $imageName                  = str_slug($request->title.'_'.now()).'.'.$request->image->getClientOriginalExtension();
    $request->image->move(public_path('uploads/articles'),$imageName);
    $articleTable->image        = 'uploads/articles/'.$imageName;
    $articleTable->save();
    toastr()->success('Məqalə uğurla əlavə olundu', 'Təbrikler');
    return redirect()->back()->withSuccess('Təbrikler');
}