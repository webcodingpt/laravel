sssssssss
@foreach($nome as $det)
           <p>{{$det['nome']}}</p>
@endforeach
<p>{{$user->tit}}</p>
<p> lang...{{App::getLocale()}}</p>
{{__('users.bemvindo')}}

<p><a href="/lang/pt">teste pt</a> </p>
<p><a href="/lang/en">teste en</a> </p>
{{ Session::get('idkey') }}
