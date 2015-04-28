@extends('layouts.default')
@section('content')
{!! Breadcrumbs::renderIfExists(Route::getCurrentRoute()->getName(), $tag) !!}
{!! Form::open(['class' => 'form-horizontal','id' => 'destroy','url' => route('tags.destroy',$tag->id)]) !!}
<div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="panel panel-red">
            <div class="panel-heading">
                Delete tag "{{{$tag->tag}}}"
            </div>
            <div class="panel-body">
                <p>
                Are you sure that you want to delete tag "{{{$tag->tag}}}"?
                </p>

                @if($tag->transactionjournals()->count() > 0)
                    <p class="text-info">
                        Tag "{{{$tag->name}}}" still has {{$tag->transactionjournals()->count()}} transaction(s) connected
                        to it. These will <strong>not</strong> be removed but will lose their connection to this tag.
                    </p>
                @endif

                <p>
                    <button type="submit" class="btn btn-default btn-danger">Delete permanently</button>
                    <a href="{{URL::previous()}}" class="btn-default btn">Cancel</a >
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <div class="col-sm-8">

            </div>
        </div>
    </div>
</div>


{!! Form::close() !!}
@stop
