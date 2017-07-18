<?php
namespace App\Http\Controllers\Backend;

/*
 * @Author      : Ferdhika Yudira 
 * @Date        : 2017-07-18 14:17:32 
 * @Web         : http://dika.web.id
 * @FileName    : HomeController.php
 */

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // if (Auth::check()){
        //     echo "User id : ".Auth::user()->id;
        //     echo "<br>
        //     <a href='".route('logout')."' onclick=\"event.preventDefault();document.getElementById('logout-form').submit();\">
        //         Logout
        //     </a>";
        //     echo "<form id=\"logout-form\" action='".route('logout')."' method=\"POST\" style=\"display: none;\">
        //     ".csrf_field()."
        //     </form>";
        // }
        $data['page_name'] = "Dashboard";
        $data['page_description'] = "Control panel";

        return view('backend.dashboard', $data);
    }
}