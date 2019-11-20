@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Bounce Rate</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <section class="col-lg-7 connectedSortable">
        <div class="card">
            <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                    <i class="fa fa-pie-chart mr-1"></i>
                    Sales
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content p-0">
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
            </div>
        </div>
        <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                        data-widget="chat-pane-toggle">
                        <i class="fa fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="direct-chat-messages">
                    <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                        </div>
                        <img class="direct-chat-img" src="{{url('wolfsynro/adminlte3/dist/img/user1-128x128.jpg')}}" alt="message user image">
                        <div class="direct-chat-text">
                            Is this template really for free? That's unbelievable!
                        </div>
                    </div>
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                        </div>
                        <img class="direct-chat-img" src="{{url('wolfsynro/adminlte3/dist/img/user3-128x128.jpg')}}" alt="message user image">
                        <div class="direct-chat-text">
                            You better believe it!
                        </div>
                    </div>
                    <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <img class="direct-chat-img" src="{{url('wolfsynro/adminlte3/dist/img/user1-128x128.jpg')}}" alt="message user image">
                        <div class="direct-chat-text">
                            Working with AdminLTE on a great new app! Wanna join?
                        </div>
                    </div>
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                        </div>
                        <img class="direct-chat-img" src="{{url('wolfsynro/adminlte3/dist/img/user3-128x128.jpg')}}" alt="message user image">
                        <div class="direct-chat-text">
                            I would love to.
                        </div>
                    </div>
                </div>
                <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="{{url('wolfsynro/adminlte3/dist/img/user1-128x128.jpg')}}">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Count Dracula
                                        <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="{{url('wolfsynro/adminlte3/dist/img/user7-128x128.jpg')}}">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Sarah Doe
                                        <small class="contacts-list-date float-right">2/23/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="{{url('wolfsynro/adminlte3/dist/img/user3-128x128.jpg')}}">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nadia Jolie
                                        <small class="contacts-list-date float-right">2/20/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="{{url('wolfsynro/adminlte3/dist/img/user5-128x128.jpg')}}">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nora S. Vans
                                        <small class="contacts-list-date float-right">2/10/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Where is your new...</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="{{url('wolfsynro/adminlte3/dist/img/user6-128x128.jpg')}}">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        John K.
                                        <small class="contacts-list-date float-right">1/27/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="{{url('wolfsynro/adminlte3/dist/img/user8-128x128.jpg')}}">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Kenneth M.
                                        <small class="contacts-list-date float-right">1/4/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Never mind I found...</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary">Send</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    To Do List
                </h3>
                <div class="card-tools">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <ul class="todo-list">
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name="">
                        <span class="text">Design a nice theme</span>
                        <small class="badge badge-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name="">
                        <span class="text">Make the theme responsive</span>
                        <small class="badge badge-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name="">
                        <span class="text">Check your messages and notifications</span>
                        <small class="badge badge-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-secondary"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
        </div>
    </section>
    <section class="col-lg-5 connectedSortable">
        <div class="card bg-primary-gradient">
            <div class="card-header no-border">
                <h3 class="card-title">
                    <i class="fa fa-map-marker mr-1"></i>
                    Visitors
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange" data-toggle="tooltip"
                        title="Date range">
                        <i class="fa fa-calendar"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <div class="card-footer bg-transparent">
                <div class="row">
                    <div class="col-4 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">Visitors</div>
                    </div>
                    <div class="col-4 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">Online</div>
                    </div>
                    <div class="col-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="text-white">Sales</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-info-gradient">
            <div class="card-header no-border">
                <h3 class="card-title">
                    <i class="fa fa-th mr-1"></i>
                    Sales Graph
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <div class="card-footer bg-transparent">
                <div class="row">
                    <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                            data-fgColor="#39CCCC">
                        <div class="text-white">Mail-Orders</div>
                    </div>
                    <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                            data-fgColor="#39CCCC">
                        <div class="text-white">Online</div>
                    </div>
                    <div class="col-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                            data-fgColor="#39CCCC">
                        <div class="text-white">In-Store</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-success-gradient">
            <div class="card-header no-border">
                <h3 class="card-title">
                    <i class="fa fa-calendar"></i>
                    Calendar
                </h3>
                <div class="card-tools">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i></button>
                        <div class="dropdown-menu float-right" role="menu">
                            <a href="#" class="dropdown-item">Add new event</a>
                            <a href="#" class="dropdown-item">Clear events</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">View calendar</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div id="calendar" style="width: 100%"></div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
  <script src="{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') }}"></script>
  <script>
      $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/morris/morris.min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/knob/jquery.knob.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('wolfsyncro/adminlte3/dist/js/pages/dashboard.js') }}"></script>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/iCheck/flat/blue.css') }}">
  <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/morris/morris.css') }}">
  <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/datepicker/datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection
