<div class="form-group">
    {!! Form::label('name', '遊戲名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('publisher', '發行商：') !!}
    {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('d_id', '所屬開發商：') !!}
    {!! Form::select('d_id',$developers ,$developerSelected,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('release_date','發行時間 :') !!}
    {!! Form::date('release_date',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price','價格:') !!}
    {!! Form::text('price',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('peak_player', '歷史尖峰人數：') !!}
    {!! Form::text('peak_player', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gametype', '遊戲類型：') !!}
    {!! Form::text('gametype', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>