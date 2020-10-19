<?php
/**
 * 1. .env file da APP_URL=http://127.0.0.1:8000 edirik
 * 2. terminalda php artisan storage:link calisdirmaq
 * _____________________________________________________________
 * //Get file with extension
 *  $filenameWithExt = $input['photo']->getClientOriginalName();
 * //Get just filename
 *  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
 * //Get just ext
 *  $extension = $input['photo']->getClientOriginalExtension();
 * //Filename to store
 *  $fileNameToStore = $filename.'_'.time().'.'.$extension;
 * //Upload Image
 *  $path = $input['photo']->storeAs('public/profile-photos', $fileNameToStore);
 */