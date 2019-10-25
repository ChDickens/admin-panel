@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $items->count() }}</h3>
                    <p>Items</p>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope-o"></i>
                </div>
                <a href="{{ route('menu.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $pages->count() }}</h3>

                    <p>Pages</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="{{ route('page.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>19</h3>

                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>Menu</p>
                </div>
                <div class="icon">
                    <i class="fa fa-bars"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

@endsection
