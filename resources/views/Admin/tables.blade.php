@extends('template.adminApp')
@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Reservations tables</h4>
                <p class="category"> Here you can find all reservations</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Phone Number
                      </th>
                      <th>
                        When
                      </th>
                      <th >
                        person(s)
                      </th>
                      <th >
                          Status
                      </th>
                    </thead>
                    <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>
                                {{$reservation->name}}
                            </td>
                            <td>
                                {{$reservation->phone_number}}
                            </td>
                            <td>
                                {{$reservation->when . " " . $reservation->at}}
                            </td>
                            <td class="pl-4">
                                {{$reservation->person}}
                            </td>
                            <td >
                                {{$reservation->served ? 'has served' : 'in progress'}}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Dishes</h4>
                <p class="category"> Here are all dishes</p>
              </div>


                <div class="nav nav-pills justify-content-center" id="pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link py-3 px-4 active" data-toggle="pill" id="pills-all-tab" data-toggle="pill" href="#allDishes" role="tab" aria-controls="allDishes" aria-selected="true"> All</a>
                    <a class="nav-link py-3 px-4" data-toggle="pill" id="pills-main-tab" data-toggle="pill" href="#mainDishes" role="tab" aria-controls="mainDishes" aria-selected="false"> Main</a>
                    <a class="nav-link py-3 px-4" data-toggle="pill" id="pills-dessert-tab" data-toggle="pill" href="#dessertDishes" role="tab" aria-controls="dessertDishes" aria-selected="false"> Desserts</a>
                    <a class="nav-link py-3 px-4" data-toggle="pill" id="pills-juice-tab" data-toggle="pill" href="#juiceDishes" role="tab" aria-controls="juiceDishes" aria-selected="false"> Drinks</a>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active"id="allDishes" role="tabpanel"aria-labelledby="pills-all-tab" >
                    <div class="card-body" >
                <div class="table-responsive">
                  <table class="table table-dark table-striped table-hover  ">
                    <thead class=" text-primary">
                      <th>
                        Dish name
                      </th>
                      <th>
                        price
                      </th>
                      <th>
                          status
                      </th>
                      <th >
                        catogry
                      </th>
                    </thead>
                    <tbody>
                    @foreach($dishes as $dish)
                      <tr>
                        <td>
                          {{$dish->name}}
                        </td>
                        <td>
                          {{$dish->price}}
                        </td>
                        <td>
                          {{($dish->avialable ? 'avialable' : 'not avialable')}}
                        </td>
                        <td>
                            {{$dish->catogry}}
                        </td>
                          <td class="td-actions text-right">

                              <a role="button" href="{{url('dish/' . $dish->id . '/edit')}}" type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                  <i class="now-ui-icons ui-2_settings-90"></i>
                              </a>


                              <form action="/dish/{{$dish->id}}" method="post" class="d-inline">
                                  @method('DELETE')
                                  @csrf
                                  <button  role="button" type="submit"  title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral">
                                      <i class="now-ui-icons ui-1_simple-remove"></i>
                                  </button>
                              </form>

                          </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
                  <a role="button" href="/admin/create" class="btn btn-dark">Add new</a>
              </div>
                    </div>
                    <div class="tab-pane fade" id="mainDishes" role="tabpanel"aria-labelledby="pills-main-tab" >
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-hover  ">
                                <thead class=" text-primary">
                                <th>
                                    Dish name
                                </th>
                                <th>
                                    price
                                </th>
                                <th>
                                    status
                                </th>
                                <th >
                                    catogry
                                </th>
                                </thead>
                                <tbody>
                                @foreach($dishes->where('catogry','main')->getIterator() as $dish)
                                    <tr>
                                        <td>
                                            {{$dish->name}}
                                        </td>
                                        <td>
                                            {{$dish->price}}
                                        </td>
                                        <td>
                                            {{($dish->avialable ? 'avialable' : 'not avialable')}}
                                        </td>
                                        <td>
                                            {{$dish->catogry}}
                                        </td>
                                        <td class="td-actions text-right">

                                            <a role="button" href="{{url('dish/' . $dish->id . '/edit')}}" type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>


                                            <form action="/dish/{{$dish->id}}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button  role="button" type="submit"  title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a role="button" href="/admin/create" class="btn btn-dark">Add new</a>
                    </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel"id="dessertDishes" aria-labelledby="pills-dessert-tab">
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-hover  ">
                                <thead class=" text-primary">
                                <th>
                                    Dish name
                                </th>
                                <th>
                                    price
                                </th>
                                <th>
                                    status
                                </th>
                                <th >
                                    catogry
                                </th>
                                </thead>
                                <tbody>
                                @foreach($dishes as $dish)
                                    <tr>
                                        <td>
                                            {{$dish->name}}
                                        </td>
                                        <td>
                                            {{$dish->price}}
                                        </td>
                                        <td>
                                            {{($dish->avialable ? 'avialable' : 'not avialable')}}
                                        </td>
                                        <td>
                                            {{$dish->catogry}}
                                        </td>
                                        <td class="td-actions text-right">

                                            <a role="button" href="{{url('dish/' . $dish->id . '/edit')}}" type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>


                                            <form action="/dish/{{$dish->id}}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button  role="button" type="submit"  title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a role="button" href="/admin/create" class="btn btn-dark">Add new</a>
                    </div  >
                    </div>
                    <div class="tab-pane fade" id="juiceDishes"role="tabpanel"aria-labelledby="pills-juice-tab" >
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-hover  ">
                                <thead class=" text-primary">
                                <th>
                                    Dish main
                                </th>
                                <th>
                                    price
                                </th>
                                <th>
                                    status
                                </th>
                                <th >
                                    catogry
                                </th>
                                </thead>
                                <tbody>
                                @foreach($dishes as $dish)
                                    <tr>
                                        <td>
                                            {{$dish->name}}
                                        </td>
                                        <td>
                                            {{$dish->price}}
                                        </td>
                                        <td>
                                            {{($dish->avialable ? 'avialable' : 'not avialable')}}
                                        </td>
                                        <td>
                                            {{$dish->catogry}}
                                        </td>
                                        <td class="td-actions text-right">

                                            <a role="button" href="{{url('dish/' . $dish->id . '/edit')}}" type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </a>


                                            <form action="/dish/{{$dish->id}}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button  role="button" type="submit"  title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a role="button" href="/admin/create" class="btn btn-dark">Add new</a>
                    </div>
                    </div>
                </div>

            </div>

          </div>

        </div>
      </div>

    @endsection
