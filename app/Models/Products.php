<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'small_description',
        'display_image',
        'banner_image',
        'banner_image',
        'footer_image'
    ];

    protected $primaryKey = 'id';
    protected $table = 'products';

    public function __construct()
    {

    }

    static public function getListDataTable($order_column, $order_column_by, $limit, $offset, $search): array
    {
        $query = DB::table((new Products)->getTable());

        if (!empty($search)) {
            $query->where(function ($query) use ($search) {
                $query->Where('title', 'like', '%' . $search . '%');
            });
        }

        $query->select('*')->orderBy($order_column, $order_column_by);

        $recordsTotal = $query->count();

        $data = $query->skip($offset)->take($limit)->get()->toArray();

        return ['recordsTotal' => $recordsTotal, 'data' => $data];
    }
}
