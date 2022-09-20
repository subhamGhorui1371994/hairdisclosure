<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Foundation\Application;


class ProductsAdminController extends Controller
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
        $breadcrumb_title = 'Products';

        return view('admin.products.list', compact('breadcrumb_title'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function products_list_ajax(Request $request)
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
                    $order_column = 'title';
                }  elseif ($request->order[0]['column'] == 3) {
                    $order_column = 'created_at';
                }
            }
        }

        if (isset($request->search['value'])) {
            if (!empty($request->search['value'])) {
                $search = $request->search['value'];
            }
        }

        $details = Products::getListDataTable($order_column, $order_column_by, $limit, $offset, $search);

        return json_encode([
            "draw" => $request->draw,
            "recordsTotal" => $details['recordsTotal'],
            "recordsFiltered" => $details['recordsTotal'],
            "data" => $details['data'],
        ]);
    }

    /**
     * Products Create Page
     * @return Application|Factory|View
     */
    public function create()
    {
        $breadcrumb_title = 'Add Products';

        return view('admin.products.add', compact('breadcrumb_title'));
    }

    /**
     * @param $products
     * @return Application|Factory|View
     */
    public function edit($products)
    {
        $breadcrumb_title = 'Edit Products';

        return view('admin.products.edit', compact('breadcrumb_title', 'products'));
    }
    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $validate_value['title'] = $request->post('title');
        $validate_rule['title'] = 'required';
        $validate_value['small_description'] = $request->post('small_description');
        $validate_rule['small_description'] = 'required';
        $validate_value['description'] = $request->post('description');
        $validate_rule['description'] = 'required';

        $validator = Validator::make($validate_value, $validate_rule);

        if ($validator->fails()) {
            $validation_errors = $validator->errors()->all();
            return redirect('admin/notice/create')->withErrors(implode(', ', $validation_errors));
        } else {

            $display_image_file = $request->file('display_image');
            $banner_image_file = $request->file('banner_image');
            $footer_image_file = $request->file('footer_image');

            if ($display_image_file) {
                $fileName = 'Products-' . time() . '-'. unique_id() . '.' . $display_image_file->extension();
                $display_image_file->move(public_path('uploads/products/'), $fileName);
                $display_image_file_path = 'uploads/products/' . $fileName;
            }

            if ($banner_image_file) {
                $fileName = 'Products-' . time() . '-'. unique_id() . '.' . $banner_image_file->extension();
                $banner_image_file->move(public_path('uploads/products/'), $fileName);
                $display_image_file_path = 'uploads/products/' . $fileName;
            }

            if ($footer_image_file) {
                $fileName = 'Products-' . time() . '-'. unique_id() . '.' . $footer_image_file->extension();
                $footer_image_file->move(public_path('uploads/products/'), $fileName);
                $display_image_file_path = 'uploads/products/' . $fileName;
            }

            $products = new Products();
            $products->fill([
                'date' => date('Y-m-d', strtotime($request->post('date'))),
                'title' => $request->post('title'),
                'description' => $request->post('description'),
                'small_description' => $request->post('small_description'),
                'display_image' => $display_image_file_path ?? null,
                'banner_image' => $banner_image_file_path ?? null,
                'footer_image' => $footer_image_file_path ?? null,
            ]);
            $products->save();

            return redirect('admin/products')->withSuccess('Products added successfully.');
        }
    }
}
