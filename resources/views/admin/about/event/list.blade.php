@extends("admin.layout")
@section("title", "記事管理")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-primary" href="add">新增</a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-danger" href="javascript:deleteAll('list')">刪除</a>
                    </div>
                </div>
            </div>
        </div>
        <form name="list" id="list" method="post" action="delete">
            @csrf
            <table class="table table-order border border-dark">
                <tr class="table-warning">
                    <td class="col-1 text-center border border-dark">
                        <input type="checkbox" class="form-check-input border border-dark" id="all">
                    </td>
                    <td class="col-1 text-center border border-dark">日期</td>
                    <td class="col-3 text-center border border-dark">標題</td>
                    <td class="col-4 text-center border border-dark">內容</td>
                    <td class="col-2 text-center border border-dark">建立時間</td>
                    <td class="col-1 text-center border border-dark">修改</td>
                </tr>
                @foreach($list as $data)
                <tr>
                    <td class="text-center border border-dark align-middle">
                        <input type="checkbox" class="form-check-input border border-dark child" name="id[]" value="{{ $data->id }}">
                    </td>
                    <td class="text-center border border-dark align-middle">{{ $data->date }}</td>
                    <td class="text-center border border-dark align-middle">{{ $data->title }}</td>
                    <td class="text-center border border-dark align-middle">{!! $data->content !!}</td>
                    <td class="text-center border border-dark align-middle">{{ $data->createTime }}</td>
                    <td class="text-center border border-dark align-middle"><a href="edit/{{ $data->id }}" class="btn btn-success">修改</a></td>
                </tr>
                @endforeach
            </table>
            {{ $list->links() }}
        </form>
    </div>
</div>

@endsection