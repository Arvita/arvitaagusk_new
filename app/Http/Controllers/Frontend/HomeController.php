<?php



namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $publications = Publication::latest()->paginate(5)->get();
        // return view('home.index', compact('publications'))->with('no', 1);

        $publications = DB::table('publications')->get();
        return view('frontend.home', compact('publications'))->with('no', 1);

        // include(app_path() . '\simple_html_dom.php');

        // // require_once 'simple_html_dom.php'; 

        // $dom = file_get_html('https://scholar.google.com/citations?hl=en&user=Yn7_99QAAAAJ', false);

        // //collect all user’s reviews into an array

        // $answer = array();

        // if (!empty($dom)) {

        //     $divClass = $title = '';

        //     $i = 0;

        //     foreach ($dom->find('.gsc_bdy') as $divClass) {

        //         //title

        //         foreach($divClass->find('div[class="gsc_rsb"]') as $desc) {

        //             $text = html_entity_decode($desc->plaintext);

        //             $text = preg_replace('/\&#39;/', "'", $text);

        //             $answer[$i]['content'] = html_entity_decode($text);

        //             }

        //             $i++;

        //             }

        //             }

        // print_r($answer);

        // exit;
       
        // return view('frontend/home');

    }
    public function microsoft(){
        // var_dump("tes");die();
        $file_path = public_path('TOT_Microsoft.rar');
        return response()->download( $file_path);
    }

}

