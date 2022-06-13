@extends('navigation')
@section('title')
@section('content')
   <p> Sass cannot programmatically generate variables, so we manually created variables for every tint and shade ourselves. We specify the midpoint value (e.g., $blue-500) and use custom color functions to tint (lighten) or shade (darken) our colors via Sass’s mix() color function.

Using mix() is not the same as lighten() and darken()—the former blends the specified color with white or black, while the latter only adjusts the lightness value of each color. The result is a much more complete suite of colors, as shown in this CodePen demo.
</p>
@endsection