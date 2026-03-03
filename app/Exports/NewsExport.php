<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NewsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        /* $sql = "SELECT b.typeName, a.title, a.content, CONCAT('D:\\\\php\\\\202602\\\\public\\\\images\\\\news\\\\', a.photo) AS photo
           FROM news a INNER JOIN news_type b ON a.typeId = b.id ORDER BY a.createTime DESC";

           $list = DB::select($sql);
           return collect($list);
        */
        $list = DB::table("news AS a")
            ->selectRaw("b.typeName, a.title, replace(a.content, '<br/>', '\\n') AS content, CONCAT('D:\\\\php\\\\202602\\\\public\\\\images\\\\news\\\\', a.photo) AS photo")
            ->join("news_type AS b", "a.typeId", "b.id")
            ->orderby("a.createTime", "DESC")
            ->get();

        return $list;
    }

    public function headings(): array{
        return ["類別", "標題", "內容", "圖檔"];
    }
}
