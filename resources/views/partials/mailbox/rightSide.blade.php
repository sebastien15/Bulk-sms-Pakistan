<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header no-margin">
        <h1 class="text-center">
            Message box
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- MAILBOX BEGIN -->
        <div class="mailbox row">
            <div class="col-xs-12">
                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-9 col-sm-8">
                                <div class="table-responsive">
                                    <!-- THE MESSAGES -->
                                    <table class="table table-mailbox">
                                        @foreach ($messages as $message)
                                            <tr class="unread">
                                                <td class="small-col"><input type="checkbox" /></td>
                                                <td class="small-col"><i class="fa fa-star"></i></td>
                                                <td class="name"><a href="#">{{ $message->name }}</a></td>
                                                <td class="subject"><a href="#">{{ $message->number }}</a></td>
                                                <td class="subject"><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
                                                <td class="subject"><a href="#">{{ $message->message }}</a></td>
                                                <td class="time">{{ $message->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.col (RIGHT) -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <div class="pull-right">
                            <small>Showing 1-12/1,240</small>
                            <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                            <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                            {{ $messages->links() }}
                        </div>
                    </div><!-- box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
        </div>
        <!-- MAILBOX END -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->