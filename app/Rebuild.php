<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rebuild extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fuw_rebuild';
    protected $guarded = ['id'];

    public static function rebuild($data)
    {
        $fields = self::get();
        foreach ($fields as $field) {
            $path = $field->path;
            $array = array_get($data, $path);

            foreach ($array as $key => $value) {
                $array[$value['id']] = $value;
                unset($array[0]);
            }

            $fullPath = explode('.', $path);
            if(count($fullPath) == 2)
                $data[ $fullPath[0] ][ $fullPath[1] ] = $array;
            if(count($fullPath) == 3)
                $data[ $fullPath[0] ][ $fullPath[1] ][ $fullPath[2] ] = $array;
        }
        return $data;
    }
}
