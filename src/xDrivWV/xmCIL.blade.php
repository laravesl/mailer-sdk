@extends(xMailBIL('c3R2OjpzdG1z'))
@section('title', xMailBIL('TGljZW5zZQ=='))
@section(xMailBIL('Y29udGVudA=='))
    @xMail('IDxkaXYgY2xhc3M9IndpemFyZC1zdGVwLTMgZC1ibG9jayI+')
    <form action="{{ route(xMailBIL('aW5zdGFsbC5saWNlbnNlLnNldHVw')) }}" method=@xMail('UE9TVA==')>
        @csrf
        @method(xMailBIL('UE9TVA=='))
        @xMail('IDxkaXYgY2xhc3M9InJvdyI+DQogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZGF0YWJhc2UtZmllbGQgY29sLW1kLTEyIj4NCiAgICAgICAgICAgICAgICAgICAgPGg2PlBsZWFzZSBlbnRlciBFbnZhdG8gdXNlcm5hbWUgYW5kIHB1cmNoYXNlIGNvZGUgZm9yIHZlcmlmaWNhdGlvbjwvaDY+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3cgbWItMyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+RW52YXRvIFVzZXJuYW1lPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
        @xMail('PGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImVudmF0b191c2VybmFtZSI=') value="{{ old(xMailBIL('ZW52YXRvX3VzZXJuYW1l')) }}"
        @xMail('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
        @if ($errors->has(xMailBIL('ZW52YXRvX3VzZXJuYW1l')))
            @xMail('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4=') {{ $errors->first(xMailBIL('ZW52YXRvX3VzZXJuYW1l')) }}@xMail('PC9zcGFuPg==')
        @endif
        @xMail('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KDQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3cgbWItMyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgY2xhc3M9ImNvbC1sZy0zIj5FbnZhdG8gUHVyY2hhc2UgQ29kZTxzcGFuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2wtbGciPg==')
        @xMail('IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJsaWNlbnNlIg==') value="{{ old(xMailBIL('bGljZW5zZQ==')) ? old(xMailBIL('bGljZW5zZQ==')) : '' }}"
        @xMail('Y2xhc3M9ImZvcm0tY29udHJvbCIgcGxhY2Vob2xkZXI9IiIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
        @if ($errors->has(xMailBIL('bGljZW5zZQ==')))
            @xMail('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4=') {{ $errors->first(xMailBIL('bGljZW5zZQ==')) }}@xMail('PC9zcGFuPg==')
        @endif
        @xMail('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KDQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCjxkaXYgY2xhc3M9Im1iLTMiPg0KSWYgeW91IGRvbid0IGtub3cgaG93IHRvIGdldCBwdXJjaGFzZSBjb2RlLCBjbGljayBoZXJlOiA8YSBocmVmID0iaHR0cHM6Ly9oZWxwLm1hcmtldC5lbnZhdG8uY29tL2hjL2VuLXVzL2FydGljbGVzLzIwMjgyMjYwMC1XaGVyZS1Jcy1NeS1QdXJjaGFzZS1Db2RlIj4gd2hlcmUgaXMgbXkgcHVyY2hhc2UgY29kZSA8L2E+DQo8L2Rpdj4NCiAgICAgICAgPC9mb3JtPg0KICAgICAgICA8ZGl2IGNsYXNzPSJuZXh0LWJ0biBkLWZsZXgiPg==')
        <a href="{{ route(xMailBIL('aW5zdGFsbC5saWNlbnNl')) }}" class="btn btn-primary">@xMail('PGkgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LWxlZnQgbWUtMiI+PC9pPg0KICAgICAgICAgICAgICAgIFByZXZpb3VzPC9hPg0KICAgICAgICAgICAgPGEgaHJlZj0iamF2YXNjcmlwdDp2b2lkKDApIiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5IHN1bWl0LWZvcm0iPk5leHQgPGkNCiAgICAgICAgICAgICAgICAgICAgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LXJpZ2h0IG1zLTIiPjwvaT48L2E+DQogICAgICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg==')
        @endsection
        @section(xMailBIL('c2NyaXB0cw=='))
            @xMail('PHNjcmlwdD4NCiAgICAgICAgJCgiLnN1bWl0LWZvcm0iKS5jbGljayhmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICQoImZvcm0iKS5zdWJtaXQoKTsNCiAgICAgICAgfSk7DQogICAgPC9zY3JpcHQ+')
        @endsection
