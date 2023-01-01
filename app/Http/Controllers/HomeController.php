<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;
use App\Models\User;
use App\Models\transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
    public function drivers()
    {
        $drivers = DB::table('drivers')->get();
        return view('drivers', compact('drivers'));
    }
    public function addDriver(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
        ]);
        $driver = Driver::create([
            'uid' => $randomNumber = random_int(20000000, 20999999),
           'name' => $request->name,
           'jabatan' => $request->jabatan,
        ]);
        $drivers = DB::table('drivers')->get();
        return view('drivers', compact('drivers'));
    }
    public function operators()
    {
        $operators = User::where('type', 2)->get();
        return view('operators', compact('operators'));
    }
    public function addOperator(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required|string|min:8|',
        ]);
        $operator = User::create([
            'uid' => $randomNumber = random_int(10000000, 10999999),
           'name' => $request->name,
           'type' => 2,
           'password' => Hash::make($request->password),
        ]);
        $operators = User::where('type', 2)->get();
        return view('operators', compact('operators'));
    }
    public function transportations()
    {
        $transportations = transportation::all();
        return view('transportations', compact('transportations'));
    }
    public function addTrans(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'noPlat' => 'required',
            'vCar' => 'required|numeric',
            'vCarNow' => 'required|numeric',
            'owner' => 'required',
        ]);
        $operator = transportation::create([
            'name' => $request->name,
            'type' => $request->type,
            'noPlat' => $request->noPlat,
            'vCar' => $request->vCar,
            'vCarNow' => $request->vCarNow,
            'owner' => $request->owner,
        ]);
        $transportations = transportation::all();
        return view('transportations', compact('transportations'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function operatorHome()
    {
        return view('operatorHome');
    }
}