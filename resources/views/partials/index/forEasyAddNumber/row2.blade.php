<div class="row">
    <!-- Left col -->
    <section class="col-lg-8 col-lg-offset-2 connectedSortable"> 
        <!-- quick email widget -->
        <div class="box box-info">
            <div class="box-header">
                <i class="fa fa-user"></i>
                <h3 class="box-title">Contacts {{ $count }}</h3>
                <!-- tools box -->
                
            </div>
            <form action="{{ route('number.store')}}" method="post">
            <div class="box-body">
            
                @csrf

                    <div class="form-group">
                        <input class="form-control"name="number" placeholder="Type contact"/>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="city_id">
                            @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city }}</option>                                
                            @endforeach
                        </select>
                    </div>                
            </div>
            <div class="box-footer clearfix">
                <button class="pull-right btn btn-default" id="sendEmail">Save <i class="fa fa-arrow-circle-right"></i></button>
                @if(Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
            </div>
            </form>
            <div class="box-footer">
                <div class="">
                    <div class="table-responsive">
                        <!-- THE Numbers table -->
                        <table class="table table-mailbox">
                            <tr class="unread">
                                <td>ID</td> 
                                <td>Contacts</td>    
                                <td>City</td>        
                                <td>Buttons</td>                    
                            </tr>
                            @foreach ($numbers as $number)
                                <tr class="unread">
                                    <td>{{ $number->id }}</td>
                                    <td>{{ $number->number }}</td>
                                    <td>{{ $number->cities->city }}</td> 
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-3">
                                            <a href="{{ route('number.edit', $number->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                            </div>
                                            <div class="col-lg-3">
                                                <form action="{{ route('number.destroy', $number->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                                </form>
                                            
                                            </div>
                                        </div>
                                    </td>    
                                </tr>                                
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
</div><!-- /.row (main row) -->