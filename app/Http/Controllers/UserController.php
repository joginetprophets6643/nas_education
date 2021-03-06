<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use App\Models\User;
use App\Models\State_Master;
use App\Models\DataInfo;
use App\Models\UserInfo;
use App\Models\District_Master;
use Illuminate\Support\Facades\Validator;
use App\Exports\NASDataExport;
use App\Exports\NASSheetExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportablep;

class UserController extends BaseController
{
    public function register()
    {
        $states = State_Master::orderBy('state_name')->get();
        return view(
            'front.data-share.registration.registration',
            compact('states')
        );
    }

    public function resetPassword()
    {
        return view('front.data-share.login.reset_password');
    }

    public function changePassword(Request $request)
    {
        User::where('mobile_no', $request->user)->update([
            'password' => Hash::make(base64_decode($request->password)),
        ]);

        return true;
    }

    public function viewLogin()
    {
        return view('front.data-share.login.login');
    }

    public function registered(Request $request)
    {
        $ip = $request->ip();
        if ($request->country == 'India') {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|unique:users',
                    'address' => 'required',
                    'gender' => 'required',
                    'name' => 'required',
                    'user_type' => 'required',
                    'identify_yourself' => 'required',
                    'state' => 'required',
                    'country' => 'required',
                    'district' => 'required',
                    'mobile_no' => 'required|unique:users|digits:10',
                    'password' => 'required|confirmed|min:5',
                    'captcha_code' => 'required',

                    // 'email_otp1' => 'required',
                    // 'email_otp2' => 'required',
                    // 'email_otp3' => 'required',
                    // 'email_otp4' => 'required',
                    // 'mobile_otp1' => 'required',
                    // 'mobile_otp2' => 'required',
                    // 'mobile_otp3' => 'required',
                    // 'mobile_otp4' => 'required',
                ],
                [
                    'mobile_no.required' =>
                        'The mobile number field is required.',
                ]
            );

            if ($validator->fails()) {
                return redirect()
                    ->route('registration')
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->captcha_code !== $request->captcha) {
                return redirect()
                    ->route('registration')
                    ->with('captcha', 'Captcha is not correct');
            }

            //$email_otp=$request->email_otp1.$request->email_otp2.$request->email_otp3.$request->email_otp4;
            // $mobile_otp=$request->mobile_otp1.$request->mobile_otp2.$request->mobile_otp3.$request->mobile_otp4;

            $user = new User();
            $user->email = $request->email;
            $user->address = $request->address;
            $user->gender = $request->gender;
            $user->name = $request->name;
            $user->user_type = $request->user_type;
            $user->identity_yourself = $request->identify_yourself;
            $user->state_id = $request->state;
            $user->mobile_no = $request->mobile_no;
            $user->country = $request->country;
            $user->district_id = $request->district;
            $user->password = Hash::make(base64_decode($request->password));
            $user->ip_address = $ip;
            $user->save();
            return Redirect()->route('success');
        } else {
            $validator = Validator::make($request->all(), [
                'email' => 'required|unique:users',
                'address' => 'required',
                'gender' => 'required',
                'name' => 'required',
                'user_type' => 'required',
                'identify_yourself' => 'required',
                'country' => 'required',
                'password' => 'required|confirmed|min:5',
                'captcha_code' => 'required',

                // 'email_otp1' => 'required',
                // 'email_otp2' => 'required',
                // 'email_otp3' => 'required',
                // 'email_otp4' => 'required',
                // 'mobile_otp1' => 'required',
                // 'mobile_otp2' => 'required',
                // 'mobile_otp3' => 'required',
                // 'mobile_otp4' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route('registration')
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->captcha_code !== $request->captcha) {
                return redirect()
                    ->route('registration')
                    ->with('captcha', 'Captcha is not correct');
            }

            $user = new User();
            $user->email = $request->email;
            $user->address = $request->address;
            $user->gender = $request->gender;
            $user->name = $request->name;
            $user->user_type = $request->user_type;
            $user->identity_yourself = $request->identify_yourself;
            $user->state_id = $request->state;
            $user->mobile_no = $request->mobile_no;
            $user->country = $request->country;
            $user->district_id = $request->district;
            $user->password = Hash::make(base64_decode($request->password));
            $user->ip_address = $ip;
            $user->save();
            return Redirect()->route('success');
        }
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile_no' => 'required|digits:10',
            'password' => 'required',
            'captcha_code' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->captcha_code !== $request->captcha) {
            return redirect()
                ->route('login')
                ->with('error', 'Captcha is not correct');
        }
        $credentials = $request->only('mobile_no', 'password');
        foreach ($credentials as $key => $item) {
            if ($key == 'password') {
                $credentials[$key] = base64_decode($item);
            }
        }
        if (Auth::attempt($credentials)) {
            return redirect()->route('successLogin');
        }
        return redirect()
            ->route('login')
            ->with('success', 'Login details are not valid');
    }
    // public function login(Request $request){
    //     $validator = Validator::make($request->all(),[
    //         'mobile_no' => 'required|digits:10',
    //         'password' => 'required',
    //         'captcha_code' => 'required',
    //     ]);
    //     if($request->captcha_code!==$request->captcha){
    //         return redirect()->back()->with('error','Captcha is not correct');
    //     }
    //     $credentials = $request->only('mobile_no', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->route('successLogin');
    //     }

    //     return redirect()->back()->with('success','Login details are not valid');
    // }

    public function successLogin()
    {
        $states = State_Master::orderBy('state_name')->get();
        return view('front.data-share.login.successlogin', compact('states'));
    }

    public function success()
    {
        return view('front.data-share.registration.successful');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()
            ->route('login')
            ->with('success', 'Logout Sucessfully');
    }

    public function getData(Request $request)
    {
        $grades = ['3', '5', '8', '10'];

        $table = '';
        $files = [];

        UserInfo::insert([
            'user_id' => Auth::user()->id,
            'data_type' => $request->type,
            'grade' => $request->acc_year,
            'state' => $request->state,
            'district' => $request->district,
            'purpose' => $request->purpose,
        ]);

        if ($request->type == 'national') {
            // $data=DataInfo::where('acc_year','2020-21')->where('type','national')->get();

            if ($request->acc_year == 'all') {
                foreach ($grades as $grade) {
                    $sheet = [];
                    $table = 'grade' . $grade . 'nationaltable';
                    $sheet[] = DB::getSchemaBuilder()->getColumnListing($table);
                    $sheet[] = DB::table($table)
                        ->get()
                        ->toArray();
                    $data[] = $sheet;
                }
                return Excel::download(new NASSheetExport($data), 'grade.xlsx');
            } else {
                $table = 'grade' . $request->acc_year . 'nationaltable';
                $data[] = DB::getSchemaBuilder()->getColumnListing($table);
                $data[] = DB::table($table)
                    ->get()
                    ->toArray();
            }
        } elseif ($request->type == 'state') {
            if ($request->acc_year == 'all') {
                foreach ($grades as $grade) {
                    $sheet = [];
                    $table = 'grade' . $grade . 'statetable';
                    $sheet[] = DB::getSchemaBuilder()->getColumnListing($table);
                    if ($request->state == 'all') {
                        $sheet[] = DB::table($table)
                            ->get()
                            ->toArray();
                    } else {
                        $sheet[] = DB::table($table)
                            ->where('state_code', $request->state)
                            ->get()
                            ->toArray();
                    }
                    $data[] = $sheet;
                }
                return Excel::download(new NASSheetExport($data), 'grade.xlsx');
            } else {
                $table = 'grade' . $request->acc_year . 'statetable';
                $data[] = DB::getSchemaBuilder()->getColumnListing($table);
                if ($request->state == 'all') {
                    $data[] = DB::table($table)
                        ->get()
                        ->toArray();
                } else {
                    $data[] = DB::table($table)
                        ->where('state_code', $request->state)
                        ->get()
                        ->toArray();
                }
            }
        } else {
            if ($request->acc_year == 'all') {
                foreach ($grades as $grade) {
                    $sheet = [];
                    $table = 'grade' . $grade . 'districttable';
                    $sheet[] = DB::getSchemaBuilder()->getColumnListing($table);
                    if ($request->district == 'all') {
                        $sheet[] = DB::table($table)
                            ->where('state_code', $request->state)
                            ->get()
                            ->toArray();
                    } elseif ($request->state == 'all_district') {
                        $sheet[] = DB::table($table)
                            ->get()
                            ->toArray();
                    } else {
                        $sheet[] = DB::table($table)
                            ->where('dist_code', $request->district)
                            ->get()
                            ->toArray();
                    }
                    $data[] = $sheet;
                }
                return Excel::download(new NASSheetExport($data), 'grade.xlsx');
            } else {
                $table = 'grade' . $request->acc_year . 'districttable';
                $data[] = DB::getSchemaBuilder()->getColumnListing($table);
                if ($request->district == 'all') {
                    $data[] = DB::table($table)
                        ->where('state_code', $request->state)
                        ->get()
                        ->toArray();
                } elseif ($request->state == 'all_district') {
                    $data[] = DB::table($table)
                        ->get()
                        ->toArray();
                } else {
                    $data[] = DB::table($table)
                        ->where('dist_code', $request->district)
                        ->get()
                        ->toArray();
                }
            }
        }

        return Excel::download(
            new NASDataExport($data, 'grade' . $request->acc_year),
            'grade.xlsx'
        );
        // dd($excel,$data);
        // $id=[];
        // foreach($data as $item){
        //     $id[]=$item->id;
        // }
        // return $data;
    }
}
