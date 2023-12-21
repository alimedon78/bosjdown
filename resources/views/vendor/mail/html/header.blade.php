<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="/assets/images/logo-3.png" class="logo" alt="BOSJ Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
