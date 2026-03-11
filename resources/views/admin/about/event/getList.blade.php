@foreach($list as $data)
<tr>
    <td class="text-center border border-dark align-middle">
        <input type="checkbox" class="form-check-input border border-dark child" name="id[]" value="{{ $data->id }}">
    </td>
    <td class="text-center border border-dark align-middle">{{ $data->dates }}</td>
    <td class="text-center border border-dark align-middle">{{ $data->title }}</td>
    <td class="text-center border border-dark align-middle">{!! $data->content !!}</td>
    <td class="text-center border border-dark align-middle">{{ $data->createTime }}</td>
    <td class="text-center border border-dark align-middle"><a href="edit/{{ $data->id }}" class="btn btn-success">修改</a></td>
</tr>
@endforeach