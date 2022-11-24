<?php

namespace App\Http\Controllers\Redirect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class userController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $is_employee = $user->is_employee;
        $roles = $user->getRoleNames()->first();
        $destination = '';
        if ($is_employee) {
            switch ($roles) {
                // case 'omshop-super-admin':
                //     # code...
                //     break;

                case 'logistics-admin':
                    $destination = 'logistics-admin';
                    break;


                case 'logistics-manager':
                case 'logistics-staff':
                    $destination = 'logistics';
                    break;

                case 'project-manager':
                case 'project-staff':
                    $destination = 'project-management';
                    break;

                default:
                    $destination = 'no Role';
                    break;
            }

        } else {
            switch ($roles) {
                // case 'omshop-super-admin':
                //     # code...
                //     break;

                case 'buyer':
                    $destination = 'project-management';
                    break;

                case 'seller':
                    $destination = 'project-management';
                    break;

                default:
                    $destination = 'no Role';
                    break;
            }
        }
        $destination = $destination . '-dashboard';
        return redirect()->route($destination);
    }
}
