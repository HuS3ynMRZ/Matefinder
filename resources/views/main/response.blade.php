@foreach($data as $row)
    @if( \Illuminate\Support\Facades\Auth::id() != $row->from_id )
<li class="agent clearfix">
    <span class="chat-img left clearfix mx-2" style="background-color: #FE5156; border-radius: 50%; text-align: center">
        <p style="font-size: 25px !important; color: white">{{ isset( $row->sender->first_name ) ? $row->sender->first_name[0] : "" }}</p>
    </span>
    <div class="chat-body clearfix">
        <div class="header clearfix">
            <strong class="primary-font"> {{ isset( $row->sender->first_name ) ? $row->sender->first_name : "" }} {{ isset( $row->sender->last_name ) ? $row->sender->last_name : "" }}</strong> <small class="right text-muted">
                <span class="glyphicon glyphicon-time"></span>{{ isset( $row->created_at ) ? $row->created_at->diffForHumans() : "" }}</small>
        </div>
        <p>
            {{ isset( $row->message ) ? $row->message : "" }}
        </p>
    </div>
</li>
    @else
<li class="admin clearfix">
    <span class="chat-img right clearfix  mx-2 bg-primary" style="border-radius: 50%">
         <p style="font-size: 25px !important; color: white; text-align: center">{{ isset( $row->sender->first_name ) ? $row->sender->first_name[0] : "" }}</p>
    </span>
    <div class="chat-body clearfix">
        <div class="header clearfix">
            <small class="left text-muted"><span class="glyphicon glyphicon-time"></span>{{ isset( $row->created_at ) ? $row->created_at->diffForHumans() : "" }}</small>
            <strong class="right primary-font"> {{ isset( $row->sender->first_name ) ? $row->sender->first_name : "" }} {{ isset( $row->sender->last_name ) ? $row->sender->last_name : "" }}
            </strong>
        </div>
        <p>
            {{ isset( $row->message ) ? $row->message : "" }}
        </p>
    </div>
    @endif
</li>
@endforeach
