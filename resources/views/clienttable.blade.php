@extends('layouts.app')
@section('content')
  
    <div class="container-fluid">
        <div class="page-content-wrapper">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <div class="dropdown">
                          <a href="{{ url('client') }}">  <button  class="btn btn-secondary btn-round"  >
                            Add clients
                            </button></a>
                            
                        </div>
                    </div>
                    <h4 class="page-title">clients View</h4>
                </div>
                <div class="card m-b-30">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div>
                  @endif
                    <div class="card-body">

                       
                       

                        <table id="datatable" class="table table-bordered dt-responsive nowrap dataTables-example" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>image</th>                                                            
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $cnt=1;
                                @endphp
                                @foreach($clients as $client)
                            <tr>
                                <td>{{$cnt++}}</td>
                                
                                
                                <td><img src="/uploads/{{$client->image}}" alt="" width="50px"></td>
                                
                                
                              
                                <td class="text-center">
                                    <a href="{{ url('clientedit', $client->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" height="24" fill="green"viewBox="0 96 960 960" width="24"><path d="M206.309 1056q-41.033 0-69.67-28.64-28.638-28.636-28.638-69.669V410.309q0-41.033 28.638-69.67 28.637-28.638 69.67-28.638h361.614L481.924 398H206.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v547.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846h547.382q4.616 0 8.463-3.846 3.846-3.847 3.846-8.463V682.46l85.999-85.998v361.229q0 41.033-28.638 69.669-28.637 28.64-69.67 28.64H206.309ZM480 684Zm164.232-325.153L706.385 421 453 672v39h38l253.769-252 59.384 60.768-276.231 277.231H367.001V636.078l277.231-277.231Zm159.921 160.921L644.232 358.847l90.538-90.538q28.956-29.307 70.054-29.307 41.099 0 69.791 29.692L895.691 290q28.692 30.077 28.692 69.808 0 39.73-29.077 68.807l-91.153 91.153Z"/></svg>
                                    </a>
                                    <form action="{{ url('clientDestroy',$client->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button style="border:none;background-color:#fff" type="submit" onclick="return confirm('Are You Sure?..')"><svg xmlns="http://www.w3.org/2000/svg" height="24" fill="red" viewBox="0 96 960 960" width="24"><path d="M273.848 971.348q-47.87 0-80.522-32.652-32.652-32.653-32.652-80.522V335.109h-45.5V221.935h237.565V169.63h255.805v52.305h237.804v113.174h-45.5v523.065q0 46.929-33.122 80.052-33.123 33.122-80.052 33.122H273.848Zm413.826-636.239H273.848v523.065h413.826V335.109Zm-349.87 444.934h107.674V413.239H337.804v366.804Zm178.479 0h107.674V413.239H516.283v366.804ZM273.848 335.109v523.065-523.065Z"/></svg></button>
                                      </form>
                                </td>
                                
                            </tr>
                            </tbody>
                            @endforeach 
                         
                        
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        

      <!-- end row -->

    </div><!-- container -->
</div>

@endsection