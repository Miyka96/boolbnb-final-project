@foreach ($messages as $el)
    <ul>
        <li>
            <strong>
                #{{ $el->id }}
            </strong>
        </li>
        <li>
            <strong>Name:</strong>
            {{ $el->name }}
        </li>
        <li>
            <strong>E-mail:</strong>
            {{ $el->email }}
        </li>
        <li>
            <strong>Phone:</strong>
            {{ $el->telephone }}
        </li>
        <li>
            <strong>Content:</strong>
            {{ $el->content }}
        </li>
        <li>
            <strong>Sent at:</strong>
            {{ $el->sent_at }}
        </li>
        <li>
            @if ($el->is_read == '0')
                ❌ UNREAD
            @else
                ✔️ READ
            @endif
        </li>
        <li>
            <strong>House ID:</strong>
            {{ $el->house_id }}
        </li>
    </ul>
@endforeach