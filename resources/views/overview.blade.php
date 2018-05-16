@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Overview</div>

                    <div class="card-body">
                        Welcome to the category Overview
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Categorie</th>
                                <th>Beschrijving</th>
                            </tr>
                            </thead>
                            {{--<tbody>--}}
                            {{--@foreach ($categories as $category)--}}
                            {{--include('category')--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
