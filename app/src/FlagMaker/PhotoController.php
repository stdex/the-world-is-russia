<?php
namespace FlagMaker;

use FlagMaker\Photo;

final class PhotoController
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }
    
    public function uploadPhoto($request, $response)
    {
        $upload_handler = new UploadHandler();
    }
    
    public function uploadPhotoVK($request, $response)
    {
        $vk_id = $request->getParsedBody()['vk_id']? $request->getParsedBody()['vk_id']:'1';
        $upload_handler = new UploadHandler(null, false, null);
        $upload_handler->upload_from_vk_url($vk_id);
    }
    
    public function index($request, $response)
    {
    
        $this->view->render($response, 'layout.twig', []);
        return $response;
    }
    
    public function recentUploads($request, $response)
    {
        
        $perPage = 24;

        // Scanning the thumbnail folder for JPG images:
        $g = glob('upload_files/thumbnail/{*.gif,*.jpg,*.png}', GLOB_BRACE);

        if(!$g){
            $g = array();
        }

        $names = array();
        $modified = array();

        // We loop though the file names returned by glob,
        // and we populate a second file with modifed timestamps.

        for($i=0,$z=count($g);$i<$z;$i++){
            $path = explode('/',$g[$i]);
            $names[$i] = array_pop($path);

            $modified[$i] = filemtime($g[$i]);
        }

        // Multisort will sort the array with the filenames
        // according to their timestamps, given in $modified:

        array_multisort($modified,SORT_DESC,$names);

        $start = 0;

        // browse.php can also paginate results with an optional
        // GET parameter with the filename of the image to start from:

        if(isset($_GET['start']) && strlen($_GET['start'])>1){
            $start = array_search($_GET['start'],$names);

            if($start === false){
                // Such a picture was not found
                $start = 0;
            }
        }

        // nextStart is returned alongside the filenames,
        // so the script can pass it as a $_GET['start']
        // parameter to this script if "Load More" is clicked

        $nextStart = '';

        
        if(isset($names[$start+$perPage])){
            $nextStart = $names[$start+$perPage];
        }

        $names = array_slice($names,$start,$perPage);
        
        $out = [];
        foreach ($names as $key => $value) {
        
            $out[$value] = $key;
            
        }

        
        $output = json_encode($out);
        
        

        // Formatting and returning the JSON object:

        /*
        $output = json_encode(array(
            'files' => $names,
            'nextStart'	=> $nextStart
        ));
        
        $output = json_encode(array(
            'files' => $names,
            'nextStart'	=> $nextStart
        ));
        */
    
        return $output;
    }

}
