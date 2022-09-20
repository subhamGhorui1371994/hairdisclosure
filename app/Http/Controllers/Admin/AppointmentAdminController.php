<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class AppointmentAdminController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('adminAfterLogin');
    }

    /**
     * Show the application dashboard.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $breadcrumb_title = 'Appointment';

        return view('admin.appointment.list', compact('breadcrumb_title'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function appointment_list_ajax(Request $request)
    {
        $limit = $offset = 0;

        $order_column_by = $order_column = $search = '';

        if (isset($request->start)) {
            $offset = $request->start;
        }
        if (isset($request->length)) {
            $limit = $request->length;
        }

        if (isset($request->order[0])) {
            if (isset($request->order[0]['dir'])) {
                $order_column_by = $request->order[0]['dir'];
            }
        }

        if (isset($request->order[0])) {
            if (isset($request->order[0]['column'])) {
                if ($request->order[0]['column'] == 0) {
                    $order_column = 'name';
                } elseif ($request->order[0]['column'] == 1) {
                    $order_column = 'phone';
                } elseif ($request->order[0]['column'] == 2) {
                    $order_column = 'email';
                } elseif ($request->order[0]['column'] == 3) {
                    $order_column = 'subject';
                } elseif ($request->order[0]['column'] == 4) {
                    $order_column = 'date';
                } elseif ($request->order[0]['column'] == 5) {
                    $order_column = 'time';
                } elseif ($request->order[0]['column'] == 6) {
                    $order_column = 'message';
                } elseif ($request->order[0]['column'] == 7) {
                    $order_column = 'created_at';
                }
            }
        }

        if (isset($request->search['value'])) {
            if (!empty($request->search['value'])) {
                $search = $request->search['value'];
            }
        }

        $details = Appointment::getListDataTable($order_column, $order_column_by, $limit, $offset, $search);

        return json_encode([
            "draw" => $request->draw,
            "recordsTotal" => $details['recordsTotal'],
            "recordsFiltered" => $details['recordsTotal'],
            "data" => $details['data'],
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    // public function create()
    // {
    //     $breadcrumb_title = 'Appointment';
    //     $resourcePersonTypes = ['' => 'Select Type', 'Teaching Staff' => 'Teaching Staff', 'Non Teaching Staff' => 'Non Teaching Staff', 'Administrative' => 'Administrative'];

    //     return view('admin.appointment.add', compact('breadcrumb_title', 'resourcePersonTypes'));
    // }

    /**
     * @param $appointment
     * @return Application|Factory|View
     */
    public function edit($appointment)
    {
        $breadcrumb_title = 'Appointment';
        $resourcePersonTypes = ['' => 'Select Type', 'Teaching Staff' => 'Teaching Staff', 'Non Teaching Staff' => 'Non Teaching Staff', 'Administrative' => 'Administrative'];

        return view('admin.appointment.edit', compact('breadcrumb_title', 'appointment', 'resourcePersonTypes'));
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    // public function store(Request $request)
    // {
    //     // $validate_value['resource_person_type'] = $request->post('resource_person_type');
    //     // $validate_rule['resource_person_type'] = 'required';
    //     $validate_value['name'] = $request->post('name');
    //     $validate_rule['name'] = 'required';
    //     $validate_value['phone'] = $request->post('phone');
    //     $validate_rule['phone'] = 'required|email';
    //     $validate_value['email'] = $request->post('email');
    //     $validate_rule['email'] = 'required';
    //     $validate_value['subject'] = $request->post('subject');
    //     $validate_rule['subject'] = 'required';
    //     $validate_value['date'] = $request->post('date');
    //     $validate_rule['date'] = 'required';
    //     $validate_value['time'] = $request->post('time');
    //     $validate_rule['time'] = 'required';
    //     $validate_value['message'] = $request->post('message');
    //     $validate_rule['message'] = 'required';

    //     $validator = Validator::make($validate_value, $validate_rule);

    //     if ($validator->fails()) {
    //         $validation_errors = $validator->errors()->all();
    //         return redirect('admin/appointment/create')->withErrors(implode(', ', $validation_errors));
    //     } else {

    //         $resource_person_type = $request->post('resource_person_type');
    //         $selectedCourses = $request->post('course') ?? [];

    //         if ($resource_person_type === 'Teaching Staff') {
    //             if (empty($selectedCourses)) {
    //                 return redirect()->back()->withErrors('If the Appointment is teaching staff then course field is required. Please select at least one course.');
    //             }
    //         }

    //         $createData = [
    //             'resource_person_type' => $resource_person_type,
    //             'name' => $request->post('name'),
    //             'email' => $request->post('email') ?? 'NA',
    //             'mobile' => $request->post('mobile') ?? 'NA',
    //             'experience' => $request->post('experience') ?? 'NA',
    //             'designation' => $request->post('designation') ?? 'NA',
    //             'qualification' => $request->post('qualification') ?? 'NA',
    //             'salary' => $request->post('salary') ?? 'NA',
    //             'course' => json_encode($selectedCourses),
    //             'bed' => in_array('bed', $selectedCourses),
    //             'dled' => in_array('dled', $selectedCourses),
    //         ];

    //         $resourcePersonImage = $request->file('photo');

    //         if ($resourcePersonImage) {
    //             if (!in_array($resourcePersonImage->extension(), ['jpeg', 'jpg', "png", "gif", "bmp", "JPEG", "JPG", "PNG", "GIF", "BMP"])) {
    //                 return redirect()->back()->withErrors('Please select only image file.');
    //             }
    //             $fileName = str_replace(' ', '-', strtolower($createData['name'])) . '-image-' . time() . '.' . $resourcePersonImage->extension();
    //             $resourcePersonImage->move(public_path('uploads/appointment/'), $fileName);
    //             $createData['photo'] = 'uploads/appointment/' . $fileName;
    //         } else {
    //             $createData['photo'] = 'assets/img/blank-profile-picture.png';
    //         }

    //         $appointment = new Appointment();
    //         $appointment->fill($createData);
    //         $appointment->save();

    //         return redirect('admin/appointment')->withSuccess('New image added successfully.');
    //     }
    // }

    /**
     * @param ResourcePerson $appointment
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Appointment $appointment, Request $request)
    {
        // $validate_value['resource_person_type'] = $request->post('resource_person_type');
        // $validate_rule['resource_person_type'] = 'required';
        // $validate_value['name'] = $request->post('name');
        // $validate_rule['name'] = 'required';
        // $validate_value['email'] = $request->post('email');
        // $validate_rule['email'] = 'required|email';
        // $validate_value['mobile'] = $request->post('mobile');
        // $validate_rule['mobile'] = 'required';

        $validate_value['name'] = $request->post('name');
        $validate_rule['name'] = 'required';
        $validate_value['phone'] = $request->post('phone');
        $validate_rule['phone'] = 'required';
        $validate_value['email'] = $request->post('email');
        $validate_rule['email'] = 'required|email';
        $validate_value['subject'] = $request->post('subject');
        $validate_rule['subject'] = 'required';
        $validate_value['date'] = $request->post('date');
        $validate_rule['date'] = 'required';
        $validate_value['time'] = $request->post('time');
        $validate_rule['time'] = 'required';
        $validate_value['message'] = $request->post('message');
        $validate_rule['message'] = 'required';

        $validator = Validator::make($validate_value, $validate_rule);

        if ($validator->fails()) {
            $validation_errors = $validator->errors()->all();
            return redirect()->back()->withErrors(implode(', ', $validation_errors));
        } else {

            // $resource_person_type = $request->post('resource_person_type');
            // $selectedCourses = $request->post('course') ?? [];

            // if ($resource_person_type === 'Teaching Staff') {
            //     if (empty($selectedCourses)) {
            //         return redirect()->back()->withErrors('If the Appointment is teaching staff then course field is required. Please select at least one course.');
            //     }
            // }

            $updateData = [
                // 'resource_person_type' => $resource_person_type,
                // 'name' => $request->post('name'),
                // 'email' => $request->post('email') ?? 'NA',
                // 'mobile' => $request->post('mobile') ?? 'NA',
                // 'experience' => $request->post('experience') ?? 'NA',
                // 'designation' => $request->post('designation') ?? 'NA',
                // 'qualification' => $request->post('qualification') ?? 'NA',
                // 'salary' => $request->post('salary') ?? 'NA',
                // 'course' => json_encode($selectedCourses),
                // 'bed' => in_array('bed', $selectedCourses),
                // 'dled' => in_array('dled', $selectedCourses),
                // 'updated_at' => date('Y-m-d H:i:s'),



                'name' => $request->post('name'),
                'phone' => $request->post('phone'),
                'email' => $request->post('email') ?? 'NA',
                'subject' => $request->post('subject'),
                'date' => $request->post('date'),
                'time' => $request->post('time'),
                'message' => $request->post('message') ?? 'NA',
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            // $resourcePersonImage = $request->file('photo');

            // if ($resourcePersonImage) {
            //     if (!in_array($resourcePersonImage->extension(), ['jpeg', 'jpg', "png", "gif", "bmp", "JPEG", "JPG", "PNG", "GIF", "BMP"])) {
            //         return redirect()->back()->withErrors('Please select only image file.');
            //     }
            //     $fileName = str_replace(' ', '-', strtolower($updateData['name'])) . '-image-' . time() . '.' . $resourcePersonImage->extension();
            //     $resourcePersonImage->move(public_path('uploads/appointment/'), $fileName);
            //     $updateData['photo'] = 'uploads/appointment/' . $fileName;
            //     if (file_exists(public_path($appointment->photo))) {
            //         unlink(public_path($appointment->photo));
            //     }
            // }

            $appointment->fill($updateData);
            $appointment->save();

            return redirect('admin/appointment')->withSuccess('Appointment updated successfully.');
        }
    }

    /**
     * @param $id
     * @param ResourcePerson $appointment
     * @return mixed
     */
    public function destroy($id, Appointment $appointment)
    {
        $appointment->destroy($id);

        return redirect()->back()->withSuccess('Appointment deleted successfully!!');
    }
}
