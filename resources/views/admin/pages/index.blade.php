@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title')
                Список страниц
            @endslot
            @slot('parent')
                Главная
            @endslot
            @slot('active')
                Страницы
            @endslot
        @endcomponent

        <hr>

       <a href="{{route('admin.page.create')}}" class="btn btn-primary float-right"><i class="fa fa-plus-square-o"></i>Создать страницу</a>
        <table class="table table-stripped">
            <thead>
                <th>Наименование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
                @forelse ($pages as $page)
                    <tr>
                        <td>{{$page->title}}</td>
                        <td>{{$page->published}}</td>
                        <td class="text-right">
                            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.page.destroy', $page)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a class="btn btn-default" href="{{route('admin.page.edit', $page)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn"> <i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутсвуют</h2></td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination float-right">
                            {{$pages->links()}}
                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
@endsection