@foreach($cats as $kitten)
<li>{!! $kitten['first_name'] !!} {!! $kitten['second_name'] !!} from {!! $kitten['location'] !!} </li>
@endforeach
