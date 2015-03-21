<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href = "{{ URL::to('table') }}"><span class="glyphicon glyphicon-dashboard"></span> User Data</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href = "{{ URL::to('table') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href = "{{ URL::to('table/create') }}"><span class="glyphicon glyphicon-save"></span> Create</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            {!! Form::open(['url'=>'table/search', 'class'=>'navbar-form']) !!}
            <div class="input-group">
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'name']) !!}
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>        
    </div>
</nav>
