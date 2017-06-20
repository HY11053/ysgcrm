@extends('admin.admin')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>会员组添加</b>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">添加对应会员组信息</p>

            <form action="/user/groupcreate" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="groupname" placeholder="组名称">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">添加组信息</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

@stop