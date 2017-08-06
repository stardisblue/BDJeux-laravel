@include('item-infos.single',['itemInfo'=> $item->itemInfo])

{{ $item->itemState->name }}
{{ $item->user->username }}
{{ $item->borrowable ? 'yes' : 'no' }}