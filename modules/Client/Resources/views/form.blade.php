
<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('client::ui.client.firstname_label') }}</label>
    <div class="col-lg-8">
        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('client::ui.client.lastname_label') }}</label>
    <div class="col-lg-8">
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('client::ui.client.identificacion_label') }}</label>
    <div class="col-lg-8">
        {!! Form::text('identificacion', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{'Productor :'}}</label>
        {!! Form::checkbox('productor', 'value')!!}
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{'Exportador'}}</label>
    {!! Form::checkbox('exportador', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{'Importador'}}</label>
    {!! Form::checkbox('importador', 'value')!!}
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('client::ui.seccional.name') }}</label>
    <div class="col-lg-8">

        {!! Form::select('seccionales_id', $seccionales, null, ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">

        {!! Form::submit($button, ['class' => 'btn btn-primary']) !!}

    </div>
</div>

{!! Form::close() !!}
