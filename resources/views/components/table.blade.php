@props([
    'empty' => 'No rocords found',
])
<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table']) }} class="table">
        <thead>
            <tr>
                @if (count($heads))
                    @foreach ($heads as $head)
                        <th>{{ $head }}</th>
                    @endforeach
                @else
                    {{ $header }}
                @endif
            </tr>
        </thead>

        <tbody>
            @isset($rows)
                {{ $rows }}
            @else
                <tr>
                    <td data-colspan class="text-center text-muted py-3">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="32.000000pt" height="32.000000pt"
                            viewBox="0 0 32.000000 32.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)" fill="#000000"
                                stroke="none">
                                <path
                                    d="M138 309 c-19 -11 -25 -49 -8 -49 6 0 10 6 10 14 0 20 19 31 33 17 7 -7 6 -16 -6 -29 -17 -18 -23 -42 -11 -42 11 0 43 45 44 62 0 10 -9 22 -19 28 -23 12 -22 12 -43 -1z" />
                                <path
                                    d="M75 223 c-33 -17 -75 -53 -75 -63 0 -4 28 -19 61 -34 47 -20 65 -24 75 -15 12 9 14 3 14 -36 0 -25 -3 -45 -7 -43 -5 2 -25 10 -45 18 -29 10 -38 20 -38 37 0 13 -4 23 -10 23 -5 0 -10 -13 -10 -29 0 -25 7 -31 60 -55 l60 -27 60 27 c60 27 60 27 60 70 0 34 4 44 20 49 11 3 20 10 20 14 0 19 -91 81 -120 81 -20 0 -9 -20 15 -26 35 -9 31 -16 -15 -36 -37 -15 -43 -15 -80 0 -46 20 -50 27 -15 36 14 4 25 11 25 16 0 14 -20 12 -55 -7z m60 -75 c3 -3 0 -10 -7 -15 -9 -7 -26 -4 -56 9 -35 15 -41 22 -32 33 9 11 18 11 51 -4 21 -10 42 -20 44 -23z m150 14 c-2 -3 -23 -13 -44 -23 -33 -15 -42 -15 -51 -4 -9 11 -3 18 32 33 30 13 47 16 56 9 7 -5 10 -12 7 -15z m-25 -65 c0 -29 -5 -35 -37 -47 -21 -8 -41 -16 -45 -18 -5 -2 -8 18 -8 43 0 40 2 46 14 35 12 -9 21 -8 43 3 15 8 29 15 31 16 1 1 2 -14 2 -32z" />
                                <path
                                    d="M150 200 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10 -4 -10 -10z" />
                            </g>
                        </svg>
                        <p class="pt-2">{{ $empty }}</p>
                    </td>
                </tr>
            @endisset
        </tbody>
    </table>
</div>
