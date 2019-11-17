<div class="row">
    <!-- Left col -->
    <section class="col-lg-8 col-lg-offset-2 connectedSortable"> 
        <!-- quick email widget -->
        <div class="box box-info">
            <div class="box-header">
                <i class="fa fa-user"></i>
                <h3 class="box-title">Talk to us</h3>
                <!-- tools box -->
                
            </div>
            <form action="{{ route('message.store')}}" method="post">
            <div class="box-body">
            
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Type name" value="{{ old('name') }}"/>
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Type email" value=" {{ old('email') }}"/>
                        
                    </div>    
                    <div class="form-group">
                        <input class="form-control" type="text" name="phoneNumber" placeholder="Type phone number" value="{{  old('number') }}"/>
                        
                    </div>            
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder=" Type Message" >{{ old('message') }}</textarea>  
                       
                    </div> 
            </div>
            <div class="box-footer clearfix">
                <button class="pull-right btn btn-default" id="sendEmail">Save <i class="fa fa-arrow-circle-right"></i></button>
                @if(Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
            </div>
            </form>
        </div>

    </section><!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
</div><!-- /.row (main row) -->