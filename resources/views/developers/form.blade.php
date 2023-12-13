<div class="form-group">
    {!! Form::label('name', '公司名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country','國籍:') !!}
    {!! Form::text('country',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('found_date','創立日期:') !!}
    {!! Form::date('found_date',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founder', '創立者:') !!}
    {!! Form::text('founder', null, ['class' => 'form-control']) !!}
</div>
<div class ="form-group">
    {!!Form::submit('提交 ',['class'=>'btn btn-primary form-control'])!!}
</div>

