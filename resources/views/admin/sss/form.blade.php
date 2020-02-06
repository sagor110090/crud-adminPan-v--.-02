<div class="form-group {{ $errors->has('ss') ? 'has-error' : ''}}">
    <label for="ss" class="control-label">{{ 'Ss' }}</label>
    <input class="form-control" name="ss" type="text" id="ss" value="{{ isset($sss->ss) ? $sss->ss : ''}}" >
    {!! $errors->first('ss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Home') ? 'has-error' : ''}}">
    <label for="Home" class="control-label">{{ 'Home' }}</label>
    <input class="form-control" name="Home" type="number" id="Home" value="{{ isset($sss->Home) ? $sss->Home : ''}}" >
    {!! $errors->first('Home', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
