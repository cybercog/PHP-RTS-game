
Hali {{ $user['name'] }},

<a href="{{ url('auth/verify', $user['verification_code']) }}">Kattints ide a regisztr�ci� meger�s�t�s�hez!</a>

vagy m�sold be a b�ng�sz�d c�msor�ba a linket �s nyomj entert:
{{ url('auth/verify', $user['verification_code']) }}
