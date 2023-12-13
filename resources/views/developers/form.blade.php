<div class="form-group">
    {!! Form::label('name', '廠商名字：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', '國籍：') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('d_id', '廠商編號：') !!}
    {!! Form::text('d_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('found_date', '成立日期：') !!}
    {!! Form::date('found_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founder', '創辦人：') !!}
    {!! Form::text('founder', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>