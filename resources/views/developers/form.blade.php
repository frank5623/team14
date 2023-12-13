<div class="form-group">
    {!! Form::label('name', '廠商名: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', '註冊國籍：') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('found_date', '成立年份：') !!}
    {!! Form::text('found_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founder', '創辦人：') !!}
    {!! Form::text('founder', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>