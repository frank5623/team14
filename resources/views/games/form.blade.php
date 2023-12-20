<div class="form-group">
    {!! Form::label('name', '遊戲名:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('id', '開發商:') !!}
    {!! Form::select('d_id', $developers, $teamSelected, ['class' => 'form-control']) !!}
    <!-- 待設計一下拉式選單 -->
</div>
<div class="form-group">
    {!! Form::label('publisher','發行商:') !!}
    {!! Form::text('publisher',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('release_date','發行日期:') !!}
    {!! Form::date('release_date',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', '價格:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('peak_player', '尖峰人數：') !!}
    {!! Form::text('peak_player', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('game_type', '遊戲類型：') !!}
    {!! Form::text('gametype', null, ['class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!!Form::submit('提交 ',['class'=>'btn btn-primary form-control'])!!}
</div>

