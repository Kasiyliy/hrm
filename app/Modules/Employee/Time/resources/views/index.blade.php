@extends('layouts.main_employee')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="custom-panel">
            <div class="custom-panel-heading">Проекты</div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Клиент</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects2 as $project)
                    <tr>
                        <td>
                            {{$project->name}}
                        </td>
                        <td>
                            {{$project->description}}
                        </td>
                        <td>
                            {{$project->client->name}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <a href="{{route('employee.time.create')}}" class="btn btn-primary pull-right">{{trans('app.time.time_logs.add_new')}}</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="custom-panel">
            <div class="custom-panel-heading">{{trans('app.time.time_logs.main')}}</div>
            <table class="table table-bordered table-hover" id="timeLogTable">
                <thead>
                    <th>{{trans('app.id')}}</th>
                    <th>{{trans('app.time.time_logs.task_name')}}</th>
                    <th>{{trans('app.time.time_logs.project')}}</th>
                    <th>{{trans('app.time.time_logs.time')}}</th>
                    <th>{{trans('app.time.time_logs.date')}}</th>
                    <th></th>
                </thead>
                <tfoot>
                    <th>
                        <input type="text" placeholder="{{trans('app.id')}}"/>
                    </th>
                    <th>
                        <input type="text" placeholder="{{trans('app.time.time_logs.task_name')}}"/>
                    </th>
                    <th>
                        {!! Form::select('projects_id', $projects, null, ['placeholder' => trans('app.time.time_logs.project')]) !!}
                    </th>
                    <th></th>
                    <th>
                        <input type="date" placeholder="{{trans('app.time.time_logs.date')}}"/>
                    </th>
                    <th></th>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@section('additionalCSS')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@endsection
@section('additionalJS')
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        var table = $('#timeLogTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("employee.time.datatable")}}',
            columns: [
                {data: 0, name: 'id'},
                {data: 1, name: 'task_name'},
                {data: 2, name: 'project_id'},
                {data: 3, name: 'time', sortable: true, searchable: false},
                {data: 4, name: 'date'},
                {data: 5, name: 'actions', sortable: false, searchable: false}
            ],
            language: {
                "sProcessing":    "Загрузка...",
                "sLengthMenu":    "Показать _MENU_",
                "sZeroRecords":   "Результатов не найдено",
                "sEmptyTable":    "В этой таблице нет данных",
                "sInfo":          "Отображение записей с _START_ по _END_ из _TOTAL_ записей",
                "sInfoEmpty":     "Показаны записи с 0 по 0 из 0 записей",
                "sInfoFiltered":  "(фильтрация в общей сложности _MAX_ записей)",
                "sInfoPostFix":   "",
                "sSearch":        "Поиск:",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Загрузка ...",
                "oPaginate": {
                    "sFirst":    "первый",
                    "sLast":    "последний",
                    "sNext":    "следующий",
                    "sPrevious": "предыдущий"
                },
                "oAria": {
                    "sSortAscending":  ": Показать столбец по возрастанию",
                    "sSortDescending": ": Показать столбец по убыванию"
                }
            }
        });
        table.columns().every(function () {
            var that = this;
            $('input', this.footer()).on( 'keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
            $('select', this.footer()).on( 'change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });
    });
</script>
@endsection