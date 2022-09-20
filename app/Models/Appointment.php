<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'date',
        'time',
        'message',
    ];

    protected $primaryKey = 'id';
    protected $table = 'appointment';

    public function __construct()
    {
    }

    static public function getListDataTable($order_column, $order_column_by, $limit, $offset, $search): array
    {
        $query = DB::table((new Appointment)->getTable());

        if (!empty($search)) {
            $query->where(function ($query) use ($search) {
                // $query->Where('resource_person_type', 'like', '%' . $search . '%');
                $query->Where('name', 'like', '%' . $search . '%');
                $query->orWhere('email', 'like', '%' . $search . '%');
                $query->orWhere('phone', 'like', '%' . $search . '%');
                // $query->orWhere('experience', 'like', '%' . $search . '%');
                // $query->orWhere('designation', 'like', '%' . $search . '%');
                // $query->orWhere('qualification', 'like', '%' . $search . '%');
                // $query->orWhere('salary', 'like', '%' . $search . '%');
            });
        }

        $query->select('*')->orderBy($order_column, $order_column_by);

        $recordsTotal = $query->count();

        $data = $query->skip($offset)->take($limit)->get()->toArray();

        return ['recordsTotal' => $recordsTotal, 'data' => $data];
    }
}
