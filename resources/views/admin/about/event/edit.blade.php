@extends("admin.layout")
@section("title", "修改記事")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-secondary" href="../list">回上頁</a>
                    </div>
                </div>
            </div>
        </div>
        <form name="list" id="list" method="post" action="../edit">
            <input type="hidden" name="id" value="{{ $event->id }}">
            @csrf
            <table class="table border border-dark">
                <tr>
                    <td class="col-2 text-center border border-dark table-warning">日期</td>
                    <td class="col-3 text-center border border-dark">
                        <input type="date" name="dates" class="form-control" required value="{{ $event->dates }}">
                    </td>
                </tr>
                <tr>
                    <td class="col-2 text-center border border-dark table-warning">標題</td>
                    <td class="col-10 text-center border border-dark">
                        <input type="text" class="form-control" name="title" required value="{{ $event->title }}">
                    </td>
                </tr>
                <tr>
                    <td class="col-2 text-center border border-dark table-warning">內容</td>
                    <td class="col-10 text-center border border-dark">
                        <input type="text" class="form-control" name="content" required value="{{ $event->content }}">
                    </td>
                </tr>
                <tr>
                    <td class="text-center border border-dark" colspan="2">
                        <input type="submit" value=" 確 定 " class="btn btn-primary btn-lg">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection