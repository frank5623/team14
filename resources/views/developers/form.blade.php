<div class="form-group">
    {!! Form::label('name', '公司名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country','國籍:') !!}
    {!! Form::date('country',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('found_date','創立日期:') !!}
    {!! Form::date('found_date',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founder', '創立者:') !!}
    {!! Form::text('founder', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('peak_player', '尖峰人數：') !!}
    {!! Form::text('peak_player', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('game_type', '遊戲類型：') !!}
    {!! Form::text('game_type', null, ['class' => 'form-control']) !!}
</div>
