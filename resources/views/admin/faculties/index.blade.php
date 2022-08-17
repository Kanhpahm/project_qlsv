@extends('admin.admin-master')
@section('content-title', 'List Faculty')
@section('title', 'List Faculty')
@section('danh-muc', 'List Faculty')
@section('content')
    <div>
    </div>

 @include('admin.admin-alert')
<br>

<form action="">
    <div style="width:250px" class="input-group input-group-outline">
        <label class="form-label">Search here...</label>
        <input type="text" name="search" class="form-control">
    </div>

</form>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stt</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            <a href="{{route('faculty.create')}}" class="btn btn-info btn-sm"> Add Faculty </a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculties as $index => $item)
                        <tr>
                            <td>
                                {{$index+1}}
                            </td>
                            <td>
                                {{ $item->name}}
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('faculty.edit', $item->id) }}">
                                    <button class="btn btn-danger" style="font-size:9px"href="javascript:;"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit user">
                                        Sửa
                                    </button>
                                </a>
{{--                                <form action="{{ route('category-delete', $item->id) }}" method="POST">--}}
{{--                                    <button class="btn btn-danger"--}}
{{--                                            onclick="return confirm('Bạn có chắc xóa {{ $item->name }} ?')"--}}
{{--                                            style="font-size:9px"href="javascript:;"--}}
{{--                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"--}}
{{--                                            data-original-title="Edit user">--}}
{{--                                        Xóa--}}
{{--                                    </button>--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>{{ $faculties->links() }}</div>
    @endsection
