@extends('admin')

@section("css")
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        img.ui-datepicker-trigger {
            width: 20px;
            height: 20px;
            margin-top: 20px;
        }
    </style>
@endsection( )

@section("content")

    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Users
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div class="m_datatable m-datatable m-datatable--default m-datatable--error m-datatable--scroll m-datatable--loaded" id="m_datatable_latest_orders" style="position: static; zoom: 1;">

                            <table class="table">
                                <caption>List of users</caption>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">image</th>
                                    <th scope="col">link</th>

                                    <th scope="col">created_at</th>
                                    <th scope="col">updated_at</th>

                                        <th scope="col">delete</th>
                                        <th scope="col">update</th>

                                </tr>
                                </thead>

                                <tbody id="hamada">
                                @foreach($items as $i)
                                    <tr id="row_sponsors{{$i->id}}">
                                        <th scope="row">{{$i->id}}</th>
                                        <td >{{$i->name}}</td>
                                        <td >{{$i->email}}</td>

                                        <td>{{$i->created_at}}</td>
                                        <td>{{$i->updated_at}}</td>

                                            <td><a data-sponsor="{{$i->id}}" type="button" class="delete1 btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>
                                            <td><a onclick="getSponsors({{$i->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#slider_edit">
                                                    <i class="fas fa-edit"></i></a></td>

                                    </tr>

                                @endforeach

                                </tbody>

                            </table>


                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection()



