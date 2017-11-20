@extends('layout')
@section('content')

<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="form-group">

                        <h4>Email subject</h4>
                        <input type="text" class="form-control" name="emailSubject"
                               value="DocuSign API - email subject">

                        <h4>Username</h4>
                        <input type="text" class="form-control" name="username" value="Anton Klochkov">

                        <h4>Email</h4>
                        <input type="email" class="form-control" name="email" value="iLyrium@yandex.com">

                        <h4>Send file</h4>
                        <input name="0" class="form-control" type="file">
                        <input name="1" class="form-control" type="file">
                        <input name="2" class="form-control" type="file">
                        <input name="3" class="form-control" type="file">
                        <input name="4" class="form-control" type="file">
                        <input name="5" class="form-control" type="file">
                        <input name="6" class="form-control" type="file">
                        <input name="7" class="form-control" type="file">
                        <input name="8" class="form-control" type="file">
                        <br>
                        <button type="submit" class="btn btn-primary btn-labeled pull-right">
                            Send
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection