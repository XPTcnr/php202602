<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

// 關於我們->大事記
class AboutEvent extends Model
{
    public $timestamps = false;
    protected $table = "events";
    protected $primaryKey = 'id';
    protected $fillable = ["id", "dates", "title", "content", "createTime"];

    // 取得大事記,依日期排序
    public function getList()
    {
        $list = self::orderby("dates", "ASC")->get();

        return $list;
    }
}
