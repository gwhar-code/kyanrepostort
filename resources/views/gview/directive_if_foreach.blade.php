<h1>{{$name ??''}}</h1>
@if($name ??''=="gwhar directive")
    <h1>hi {{$name ??''}}</h1>
    fjkhlkjkl
@elseif($name ??''=='saad')
<h>hello saad</h>
@else
<h1>no</h1>
    <h1>no {{$obj->name ??''}}</h1>
@endif
{{--@foreach($obj ??'' as $kay=>$val)
  {{$kay ??''."is".$val??""}}
@endforeach
--}}
{{print_r($arrays)}}


@forelse($arrays As $val)
    <h1>exist date</h1>
@empty
<h1>emptey</h1>
@endforelse
