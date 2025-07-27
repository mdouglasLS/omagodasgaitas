@props(['class' => ''])

<img src="{{asset('storage/images/logo-dark.png')}}" class="{{$class}} dark:hidden"
     alt="{{config('app.name', '')}}Logo"/>
<img src="{{asset('storage/images/logo-white.png')}}" class="{{$class}} lg:w-12 hidden dark:block"
     alt="{{config('app.name', '')}}Logo"/>
