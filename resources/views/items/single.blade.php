@include('item-infos.single',['itemInfo'=> $item->itemInfo])

{{ $item->itemState->name }}
{{ $item->user->username }}
{{ $item->price }}
{{ $item->borrowable ? 'yes' : 'no' }}
